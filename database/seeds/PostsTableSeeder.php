<?php

use Illuminate\Database\Seeder;
use App\Post;
use faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) {  
            $postObject = new Post(); 
            $postObject->title = $faker->sentence(10);
            $postObject->content = $faker->paragraph(5);
            $postObject->image = $faker->imageUrl(200,200 ,'post', true);
            $postObject->author = $faker->firstName();
            $postObject->created_at = $faker->dateTime();
            $postObject->updated_at = $faker->dateTime();
            $postObject->save();   
        }
    }
}
