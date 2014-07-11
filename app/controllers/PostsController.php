<?php
// require_once '../vendor/ezyang/htmlpurifier/library/HTMLPurifier.auto.php';
class PostsController extends \BaseController {

	public function __construct()
	{
	    // call base controller constructor
	    parent::__construct();

	    // run auth filter before all methods on this controller except index and show
	    $this->beforeFilter('auth', array('except' => array('index', 'show')));

	   	// run post.protect filter to check for privileges before edit, update, and destroy methods
	    // $this->beforeFilter('post.protect', array('only' => array('edit', 'update', 'destroy')));
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
		// $posts = Post::with('user')->where('title', 'LIKE', '%' . $searchTitle . '%')->orderBy('created_at', 'desc')->paginate(4);
		$posts = Post::filteredPosts($searchTitle);
		// $recentposts = Post::with('user')->take(4)->orderBy('created_at', 'desc')->get();
		// $number = count(Post::with('user')->where('title', 'LIKE', '%' . $searchTitle . '%')->orderBy('created_at', 'desc')->get());
		// $number = count($posts);
		$number = Post::countPosts($searchTitle);
		$data = [
			'posts' => $posts,
			'number'  => $number,
			'isFiltered' => $isFiltered,
			// 'recentposts' => $recentposts
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

		// $messageValue = 'Post successfully added!';
		// $eMessageValue = 'There was a problem adding the post.';

		// // $post = Post::findBySlug($slug);
		// $validator = Validator::make(Input::all(), Post::$rules);

		// if ($validator->fails()) 
		// {

		// 	Session::flash('errorMessage', $eMessageValue);
		// 	return Redirect::back()->withInput()->withErrors($validator);
		// }
		// else
		// {
			

		// 		$post = new Post();
		// 		$post->user_id = Auth::user()->id;
				
		// 	$post->title = Input::get('title');
		// 	$post->body = Input::get('body');
		// 	$post->slug = Input::get('title');
		// 	$post->save();	

		// 	if(Input::hasFile('image') && Input::file('image')->isValid())
		// 	{
		// 		$post->addUploadedImage(Input::file('image'));
		// 		$post->save();
		// 	}
		// 	Session::flash('successMessage', $messageValue);
		// 	return Redirect::action('PostsController@show', $post->slug);
		// }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		$post = Post::findBySlug($slug);
	    return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($slug)
	{
		$post = Post::findBySlug($slug);
		if(Auth::check() && (Auth::user()->id == $post->user_id || Auth::user()->is_admin))
		{
		    return View::make('posts.create-edit')->with('post', $post);
		}
		else
		{
			Session::flash('errorMessage', 'Insufficient privileges.');
			return Redirect::action('PostsController@show', $slug);
		}
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($slug)
	{

		if (!isset($slug)) {
			$post = new Post();
			$post->user_id = Auth::user()->id;

			$messageValue = 'Post successfully added!';
			$eMessageValue = 'There was a problem adding the post.';
		} else {
			$post = Post::findBySlug($slug);

			$messageValue = 'Post was successfully updated!';
			$eMessageValue = 'There was a problem updating your post.';
		}

		if(!(Auth::check() && (Auth::user()->id == $post->user_id || Auth::user()->is_admin)))
		{
			Session::flash('errorMessage', 'Insufficient privileges.');
			return Redirect::action('PostsController@index');
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
			$post->slug = Input::get('title');
			$post->save();	

			if(Input::hasFile('image') && Input::file('image')->isValid())
			{
				$post->addUploadedImage(Input::file('image'));
				$post->save();
			}

			Session::flash('successMessage', $messageValue);
			return Redirect::action('PostsController@show', $post->slug);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($slug)
	{
		$post = Post::findBySlug($slug);
		if(Auth::check() && (Auth::user()->id == $post->user_id || Auth::user()->is_admin))
		{
			$post->delete();
			Session::flash('successMessage', 'Post was successfully deleted!');
			return Redirect::action('PostsController@index');
		}
		else
		{
			Session::flash('errorMessage', 'Insufficient privileges.');
			return Redirect::action('PostsController@show', $slug);
		}
	}

	
}
