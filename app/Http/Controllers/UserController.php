9<?php

use Illuminate\Support\Facades\DB; 
namespace App\Http\Controllers;

class UserController extends Controller
{
    public function show()
    {
      $query = DB::table('posts')->where('id', '!=', 3)->toSql();
      dump($query);

      $posts = DB::table('posts')->get();
			foreach ($users as $user) {
				dump($user);
			}

       return view('user.show', ['users' => $users]);

       $users = DB::table('users')->where('age''=' 30)->get();//8
       $users = DB::table('users')->where('age''!=' 30)->get();//9
       $users = DB::table('users')->where('age''>' 30)->get();//10
       $users = DB::table('users')->where('age''<' 30)->get();//11

       $users = DB::table('users')->where('age''<' 30)
       orwhere('age''=' 30)->get();//12

        $users = DB::table('users')->where('age''>' 20)
        where('age''<' 30)->get();//13
       
    }
}

?>