<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usersCount = App\User::count();

        App\Team::all()
            ->each(function(App\Team $team) use ($usersCount) {
                $team->comments()->saveMany(factory(App\Comment::class, rand(2, 5))->make());
                });
            
    }
}
