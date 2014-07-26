<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', 'HomeController@showHomePage');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/resume', 'HomeController@showResume');

Route::resource('posts', 'PostsController');

Route::get('/orm-test', 'PostsController');

Route::get('/login', 'HomeController@showLogin');

Route::post('/login', 'HomeController@doLogin');

Route::get('/logout', 'HomeController@logout');

Route::get('/register', 'HomeController@showRegister');

Route::post('/register', 'HomeController@doRegister');

Route::get('/terms-privacy', 'HomeController@showTermsPrivacy');

Route::get('/admin', 'HomeController@showAdmin');

Route::get('test', function () {

    $maxHeight = 200;
    $maxWidth = 200;

    $newHeight = 0;
    $newWidth = 0;

    $inputFile = public_path() . '/uploads/ct.jpg';
    $outputFile = public_path() . '/uploads/ct-small.jpg';

    // load the image to be manipulated
    $image = new Imagick($inputFile);

    // get the current image dimensions
    $currentWidth = $image->getImageWidth(); 
    $currentHeight = $image->getImageHeight();

    // determine what the new height and width should be based on the type of photo
    if ($currentWidth > $currentHeight)
    {
        // landscape photo
        // width should be resized to max and height should be resized proportionally
        $newWidth = $maxWidth;
        $newHeight = ceil($currentHeight * ($newWidth / $currentWidth));
    }
    else if ($currentHeight > $currentWidth)
    {
        // portrait photo
        // height should be resized to max and width should be resized proportionally
        $newHeight = $maxHeight;
        $newWidth = ceil($currentWidth * ($newHeight / $currentHeight));
    }
    else
    {
        // square photo
        // resize image to max dimensions
        $newHeight = $newWidth = $maxHeight;
    }

    // perform the image resize
    $image->resizeImage($newWidth, $newHeight, Imagick::FILTER_LANCZOS, true);  

    // write out the new image
    $image->writeImage($outputFile);

    // clear memory resources
    $image->clear(); 
    $image->destroy();

    return 'Done';

});

