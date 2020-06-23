<?php

use Illuminate\Database\Seeder;
use App\Comment;
use App\Post;
use Faker\Generator as Faker;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $comments = 10; //Numero di commenti
        $posts = Post::all();

        for ( $i = 0; $i < $comments; $i++ ) {
            $newComment = new Comment(); // Instanzio comment
            $newComment->post_id = $posts->random()->id; //
            $newComment->name = $faker->name;
            $newComment->body = $faker->text(300);
            $newComment->save();
        }
    }
}
