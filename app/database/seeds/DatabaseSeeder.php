<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('PostTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        $user = new User();
        $user->email = 'admin@codeup.com';
        $user->password = Hash::make('adminPass123!');
        $user->save();

        for ($i=1;$i<=3;$i++)
        {
        	$user = new User();
            $user->email = 'User' . $i . '@codeup.com';
            $user->password = Hash::make('password');
            $user->save();
        }

    }

}

class PostTableSeeder extends Seeder {

    public function run()
    {
        DB::table('posts')->delete();
        for ($i=1;$i<=30;$i++ ) 
        {
	        $post = new Post();
	        $post->title = "Blog #$i";
	        $post->body = "body text for post $i";
	        $post->user_id = mt_rand(1,4);
	        $post->save();
	        sleep(1);
        }
    }

}
