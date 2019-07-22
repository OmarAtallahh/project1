<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleComment;
use Auth;
use Illuminate\Http\Request;

class ArticleCommentsController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('comments.index')->with('comments', ArticleComment::all());
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Article $article) {
		request()->validate([
			'body' => 'required|max:500|min:3',
		]);

		$comment = new ArticleComment();

		$comment->body = request('body');
		$comment->user_id = auth()->id();

		if (auth('doctor')->check()) {

			$comment->type = 'doctor';
		} else {

			$comment->type = 'user';
		}

		$comment->article_id = $article->id;
		$comment->save();

		return back()->with('success', 'Comment Added!');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Comment  $comment
	 * @return \Illuminate\Http\Response
	 */
	public function show(ArticleComment $comment) {
		return view('posts.show')->with('post', $comment->post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Comment  $comment
	 * @return \Illuminate\Http\Response
	 */
	public function edit(ArticleComment $comment, Post $post) {
		return view('posts.show', ['post', $comment->post, 'comment' => $comment]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Comment  $comment
	 * @return \Illuminate\Http\Response
	 */
	public function update(ArticleComment $comment) {
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
	public function destroy(ArticleComment $comment) {
		$comment->delete();

		return back()->with('success', 'Comment Deleted');
	}
}
