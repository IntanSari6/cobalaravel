<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'intan sari',
            'email' => 'intanss@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'intan',
            'email' => 'intans@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque veniam quas repellat fugit iste autem culpa numquam eligendi nemo possimus eius placeat minima ea amet, omnis quod, provident, earum obcaecati tempora facere deserunt ratione! Eligendi dolores iure voluptatum, voluptatem consectetur facere consequuntur provident dolorem unde accusamus, id voluptatibus veritatis. Excepturi numquam, obcaecati nihil explicabo saepe, tempore deserunt suscipit quae ipsa incidunt possimus nulla cumque ex rerum corrupti eligendi, minima officiis vitae ducimus ad. Ipsam aperiam odit amet quaerat dolorum ex? Sint et eaque quas distinctio quos, necessitatibus ipsum inventore similique, quasi consequuntur aut ut nesciunt, amet optio? Sit, libero ipsam!.
            ',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque veniam quas repellat fugit iste autem culpa numquam eligendi nemo possimus eius placeat minima ea amet, omnis quod, provident, earum obcaecati tempora facere deserunt ratione! Eligendi dolores iure voluptatum, voluptatem consectetur facere consequuntur provident dolorem unde accusamus, id voluptatibus veritatis. Excepturi numquam, obcaecati nihil explicabo saepe, tempore deserunt suscipit quae ipsa incidunt possimus nulla cumque ex rerum corrupti eligendi, minima officiis vitae ducimus ad. Ipsam aperiam odit amet quaerat dolorum ex? Sint et eaque quas distinctio quos, necessitatibus ipsum inventore similique, quasi consequuntur aut ut nesciunt, amet optio? Sit, libero ipsam!.
            ',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque veniam quas repellat fugit iste autem culpa numquam eligendi nemo possimus eius placeat minima ea amet, omnis quod, provident, earum obcaecati tempora facere deserunt ratione! Eligendi dolores iure voluptatum, voluptatem consectetur facere consequuntur provident dolorem unde accusamus, id voluptatibus veritatis. Excepturi numquam, obcaecati nihil explicabo saepe, tempore deserunt suscipit quae ipsa incidunt possimus nulla cumque ex rerum corrupti eligendi, minima officiis vitae ducimus ad. Ipsam aperiam odit amet quaerat dolorum ex? Sint et eaque quas distinctio quos, necessitatibus ipsum inventore similique, quasi consequuntur aut ut nesciunt, amet optio? Sit, libero ipsam!.
            ',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Emppat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque veniam quas repellat fugit iste autem culpa numquam eligendi nemo possimus eius placeat minima ea amet, omnis quod, provident, earum obcaecati tempora facere deserunt ratione! Eligendi dolores iure voluptatum, voluptatem consectetur facere consequuntur provident dolorem unde accusamus, id voluptatibus veritatis. Excepturi numquam, obcaecati nihil explicabo saepe, tempore deserunt suscipit quae ipsa incidunt possimus nulla cumque ex rerum corrupti eligendi, minima officiis vitae ducimus ad. Ipsam aperiam odit amet quaerat dolorum ex? Sint et eaque quas distinctio quos, necessitatibus ipsum inventore similique, quasi consequuntur aut ut nesciunt, amet optio? Sit, libero ipsam!.
            ',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
