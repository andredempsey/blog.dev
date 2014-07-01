<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();
	    return View::make('posts.index')->with('posts',$posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// return "Show the form for creating a new resource";

		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// return "Store a newly created resource in storage.";

		if (Input::has('title'))
		{
			if (Input::has('body'))
			{
				$posts = new Post;
				$posts->title = Input::get('title');
				$posts->body = Input::get('body');
				$posts->save();
			}
			else
			{
				return Redirect::back()->withInput();
			}
		}
		else
		{
			return Redirect::back()->withInput();
		}
		
			return Redirect::action('PostsController@index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
	    return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return "Show the form for editing the specified resource for:  $id";
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return "Update the specified resource in storage for: $id";
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return "Remove the specified resource from storage for: $id";
	}


}
