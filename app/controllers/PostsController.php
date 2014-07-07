<?php

class PostsController extends \BaseController {

	public function __construct()
	{
    // call base controller constructor
    parent::__construct();

    // run auth filter before all methods on this controller except index and show
    $this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$searchTitle = Input::get('searchTitle');
		$isFiltered = ($searchTitle!='') ? True : False; 
		$posts = Post::with('user')->where('title', 'LIKE', '%' . $searchTitle . '%')->orderBy('created_at', 'desc')->paginate(4);
		$number = Post::count();
		$data = [
			'posts' => $posts,
			'number'  => $number,
			'isFiltered' => $isFiltered
		];
	    return View::make('posts.index')->with($data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// return "Show the form for creating a new resource";
		
		return View::make('posts.create-edit');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// return "Store a newly created resource in storage.";
		return $this->update(null);
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
		
		$post = Post::findOrFail($id);
		

	    return View::make('posts.create-edit')->with('post', $post);

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$messageValue = 'Post successfully added!';
		$eMessageValue = 'There was a problem adding the post.';
		$post = new Post();
		$post->user_id = Auth::user()->id;
		if ($id!=null) 
		{
			$messageValue = 'Post was successfully updated!';
			$eMessageValue = 'There was a problem updating your post.';
			$post = Post::findOrFail($id);
		}

		$validator = Validator::make(Input::all(), Post::$rules);
		if ($validator->fails()) 
		{
			Session::flash('errorMessage', $eMessageValue);
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();		
			Session::flash('successMessage', $messageValue);
			return Redirect::action('PostsController@index');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::findOrFail($id);
		$post->delete();
		Session::flash('successMessage', 'Post was successfully deleted!');
		return Redirect::action('PostsController@index');
	}

	
}
