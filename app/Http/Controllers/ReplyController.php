<?php

namespace App\Http\Controllers;

use App\Reply;
use App\User;
use App\Post;
use App\Comment;

use Sentinel;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    
    public function store(Comment $comment , Post $post)
    {
        request()->validate([
            'comment' => 'required|min:3|max:500'
        ]);

        $reply = new Reply;

        $reply->body = request('comment');
        $reply->user_id = Sentinel::getUser()->id;
        $reply->updated_at = null;

        $reply->comment()->associate($comment);
        $reply->post()->associate($post);

        $reply->save(); 

        return back()->with('success' , 'Reply Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function show(Reply $reply)
    {
        return view('posts.show')->with('post' , $reply->post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function edit(Reply $reply , Post $post)
    {
        return view('posts.show' , ['reply' => $reply , 'post' , $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function update(Reply $reply , Comment $comment , Post $post)
    {
        request()->validate([
            'comment' => 'required|min:3|max:500'
        ]);

        $reply->update([

            'body'  => request('comment'),
            'updated_at' => date('Y-m-d H:is'),
        ]);

        $reply->comment()->associate($comment);
        $reply->post()->associate($post);

        $reply->save(); 

        return redirect()->route('posts.show')->with('success' , 'Reply Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reply $reply)
    {
        $reply->delete();
        return back()->with('success' , 'Reply Deleted');
    }
}
