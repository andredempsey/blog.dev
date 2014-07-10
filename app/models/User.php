<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	 //Validation rules for our model properties
    static public $user_rules = [
    	'firstname'=>'required|max:100',
    	'lastname'=>'required|max:100',
    	'email'=>'required|email',
    	'password'=>'required|min:6',
    	'password2'=>'same:password'
    ];
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function posts()
	{
	    return $this->hasMany('Post');
	}
}
