<?php

class Post extends BaseModel {
	//The db table this model realtes to
    protected $table = 'posts';

    //Validation rules for our model properties
    static public $rules = [
    	'title'=>'required|max:100',
    	'body'=>'required|max:10000'
    ];

}
