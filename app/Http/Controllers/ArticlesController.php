<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use File;
use Illuminate\Http\Request;
use Sentinel;

class ArticlesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$articles = Article::paginate(5);

		return view('main.articles.index')->with('articles', $articles);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('articles.create');
	}

	/**
	 * Store a newly created resource in File.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {

		$data = request()->validate([
			'title' => 'required|unique:articles,title|string|min:3|max:32',
			'body' => [
				'required', 'string', 'min:3', 
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

		$data['doctor_id'] = auth('doctor')->id();

		$post = Article::forceCreate($data);

		return redirect()->route('articles.index')->with('success', 'Article Has Been Created Successfully');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\article  $article
	 * @return \Illuminate\Http\Response
	 */
	public function show(Article $article) {
		return view('main.articles.show')->with('article', $article);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\article  $article
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Article $article) {
		if (Sentinel::getUser()->id !== $article->admin_id) {
			return redirect()->route('article.index')->with('error', 'Unauthorized Page');
		}

		return view('articles.edit')->with('article', $article);
	}

	/**
	 * Update the specified resource in File.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\article  $article
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Article $article) {
		$data = request()->validate([
			'title' => 'required|string|min:3|max:32|alpha_dash|unique:articles,title,' . $article->id,
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

			if (article::whereId($article->id)->update($data)) {

				$article = article::whereTitle(request('title'))->first();

				if (is_array(session('tags'))) {

					for ($i = 0; $i < count(session('tags')); $i++) {

						if ($i == 0) {

							$article->tags()->sync(session('tags')[$i], true);

						} else {
							$article->tags()->sync(session('tags')[$i], false);
						}

					}

				} else {
					$article->tags()->sync(session('tags'), true);
				}

				session()->forget('tags');

				return redirect()->route('articles.index')->with('success', 'article Has Been Updated Successfully');
			}

		}

		return redirect()->route('articles.index')->with('error', 'article Couldn\'t Be Updated Successfully');
	}

	/**
	 * Remove the specified resource from File.
	 *
	 * @param  \App\article  $article
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Article $article) {
		if (Sentinel::getUser()->id !== $article->admin_id) {
			return redirect('/articles')->with('error', 'Unauthorized Page');
		}

		if ($article->imagePath) {
			File::delete('images/' . $article->imagePath);
		}

		$article->delete();

		return redirect()->route('articles.index')->with('success', 'article Has Been Deleted Successfully');
	}
}
