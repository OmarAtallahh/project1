<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use File;
use Illuminate\Http\Request;
use Sentinel;

class PostsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$posts = Post::paginate(6);

		return view('main.posts.index')->with('posts', $posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('posts.create');
	}

	/**
	 * Store a newly created resource in File.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {

		$data = request()->validate([
			'title' => 'required|string|min:3|max:32',
			'body' => [
				'required', 'string', 'min:3', 'max:300',
			],

			'image' => 'nullable|max:1999|image',
		]);

		if (request()->hasFile('image')) {

			$file_with_ext = request()->file('image')->getClientOriginalName();
			$file_ext = request()->file('image')->getClientOriginalExtension();
			$file_new_name = sha1(str_random(40) . time()) . '.' . $file_ext;
			request()->file('image')->move(public_path() . '/image/', $file_new_name);
			$data['image'] = $file_new_name;
		}

		$data['user_id'] = auth('web')->id();

		$post = Post::forceCreate($data);

		return redirect()->route('posts.index')->with('success', 'Post Has Been Created Successfully');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Post  $post
	 * @return \Illuminate\Http\Response
	 */
	public function show(Post $post) {
		return view('main.posts.show')->with('post', $post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Post  $post
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Post $post) {
		if (Sentinel::getUser()->id !== $post->admin_id) {
			return redirect()->route('post.index')->with('error', 'Unauthorized Page');
		}

		return view('posts.edit')->with('post', $post);
	}

	/**
	 * Update the specified resource in File.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Post  $post
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Post $post) {
		$data = request()->validate([
			'title' => 'required|string|min:3|max:32|alpha_dash|unique:posts,title,' . $post->id,
			'body' => [
				'required', 'string', 'regex:/^[a-zA-Z0-9-_. ]+$/', 'min:3', 'max:300',
			],

			'imagePath' => 'nullable|max:1999|image|mimes:png,jpg,jpeg',
		]);

		if (Tag::assignTags(request('tags'))) {

			if (request()->hasFile('imagePath')) {

				$file_with_ext = request()->file('imagePath')->getClientOriginalName();
				$file_ext = request()->file('imagePath')->getClientOriginalExtension();
				$file_new_name = sha1(str_random(40) . time()) . '.' . $file_ext;
				request()->file('imagePath')->move(public_path() . '/images/', $file_new_name);
				$data['imagePath'] = $file_new_name;
			}

			$data['admin_id'] = Sentinel::getUser()->id;

			if (Post::whereId($post->id)->update($data)) {

				$post = Post::whereTitle(request('title'))->first();

				if (is_array(session('tags'))) {

					for ($i = 0; $i < count(session('tags')); $i++) {

						if ($i == 0) {

							$post->tags()->sync(session('tags')[$i], true);

						} else {
							$post->tags()->sync(session('tags')[$i], false);
						}

					}

				} else {
					$post->tags()->sync(session('tags'), true);
				}

				session()->forget('tags');

				return redirect()->route('posts.index')->with('success', 'Post Has Been Updated Successfully');
			}

		}

		return redirect()->route('posts.index')->with('error', 'Post Couldn\'t Be Updated Successfully');
	}

	/**
	 * Remove the specified resource from File.
	 *
	 * @param  \App\Post  $post
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Post $post) {
		if (Sentinel::getUser()->id !== $post->admin_id) {
			return redirect('/posts')->with('error', 'Unauthorized Page');
		}

		if ($post->imagePath) {
			File::delete('images/' . $post->imagePath);
		}

		$post->delete();

		return redirect()->route('posts.index')->with('success', 'Post Has Been Deleted Successfully');
	}
}
