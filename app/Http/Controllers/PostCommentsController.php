<?php

namespace App\Http\Controllers;

use App\Post;
use App\PostComment;
use Illuminate\Http\Request;

class PostCommentsController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('comments.index')->with('comments', PostComment::all());
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Post $post) {
		request()->validate([
			'body' => 'required|max:500|min:3',
		]);

		$comment = new PostComment();

		$comment->body = request('body');
		$comment->user_id = auth()->id();

		if (auth('doctor')->check()) {

			$comment->type = 'doctor';
		} else {

			$comment->type = 'user';
		}

		$comment->post_id = $post->id;
		$comment->save();

		return back()->with('success', 'Comment Added!');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Comment  $comment
	 * @return \Illuminate\Http\Response
	 */
	public function show(PostComment $comment) {
		return view('posts.show')->with('post', $comment->post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Comment  $comment
	 * @return \Illuminate\Http\Response
	 */
	public function edit(PostComment $comment, Post $post) {
		return view('posts.show', ['post', $comment->post, 'comment' => $comment]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Comment  $comment
	 * @return \Illuminate\Http\Response
	 */
	public function update(PostComment $comment) {
		request()->validate([
			'comment' => 'required|max:500|min:3',
		]);

		$comment->update([
			'body' => request('comment'),
			'user_id' => Sentinel::getUser()->id,
		]);

		return redirect()->route('posts.show', $post->title)->with('success', 'Comment Updated');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Comment  $comment
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(PostComment $comment) {
		$comment->delete();

		return back()->with('success', 'Comment Deleted');
	}
}
