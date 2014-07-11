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
        $user->is_admin = True;
         $user->is_subscribed = False;
        $user->save();
        $firsts = ['Noah', 'Liam', 'Jacob', 'Mason', 'William', 'Ethan', 'Michael', 'Alexander', 'Jayden', 'Daniel', 
        'Sophia', 'Emma', 'Olivia', 'Isabella', 'Ava', 'Mia', 'Emily', 'Abigail', 'Madison', 'Elizabeth'];
        $lasts = ['Smith', 'Johnson', 'Williams', 'Jones', 'Brown', 'Davis', 'Miller', 'Wilson', 'Moore', 'Taylor',
        'Anderson', 'Thomas', 'Jackson', 'White', 'Harris', 'Martin', 'Thompson', 'Garcia', 'Martinez', 'Robinson'];

        for ($i=1;$i<=10;$i++)
        {
        	$user = new User();
            $first = $firsts[mt_rand(0,19)];
            $last = $lasts[mt_rand(0,19)];
            $user->email = $first . '.' . $last . '@codeup.com';
            $user->password = Hash::make('password');
            $user->first_name = $first;
            $user->last_name = $last;
            $user->is_admin = False;
            $user->is_subscribed = True;
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
            $seedText = "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?";
            $startPoint = mt_rand(1,strlen($seedText)-15);
	        $post = new Post();
	        $post->title = trim(substr($seedText, $startPoint, 15));
	        $post->body = $seedText;
	        $post->slug = str_replace ( " " , "-" , strtolower($post->title ));
            $post->user_id = mt_rand(2,11);
	        $post->save();
	        sleep(2);
        }
    }

}
