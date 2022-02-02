<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        // User::create([
        //     'name'=> 'Anhar',
        //     'email' => 'anhar@mail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name'=> 'Indah Permata',
        //     'email' => 'indah@mail.com',
        //     'password' => bcrypt('12345')
        // ]);
        
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // Post::create([
        //     'title' => 'Postingan Pertama',
        //     'slug' => 'postingan-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse fugit omnis quos modi dolorum temporibus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse fugit omnis quos modi dolorum temporibus. Eveniet ab laborum consequuntur molestiae quae animi culpa iusto accusamus quaerat. Tenetur quia, ut ipsam recusandae ab eius dolores laborum rem, quaerat consectetur officiis dignissimos doloribus reprehenderit nobis odio neque laboriosam culpa voluptatum illum quod et corporis sunt. Exercitationem explicabo atque minima autem, sequi cum magni repudiandae, nisi odio voluptatibus voluptas eligendi? Quaerat deleniti ea excepturi enim odit sunt doloremque veniam velit magni voluptatibus ullam, veritatis nihil beatae vel pariatur quidem, possimus nemo fuga fugit at. Odio et autem excepturi magni quisquam consectetur accusamus laborum!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Postingan Ke Dua',
        //     'slug' => 'postingan-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse fugit omnis quos modi dolorum temporibus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse fugit omnis quos modi dolorum temporibus. Eveniet ab laborum consequuntur molestiae quae animi culpa iusto accusamus quaerat. Tenetur quia, ut ipsam recusandae ab eius dolores laborum rem, quaerat consectetur officiis dignissimos doloribus reprehenderit nobis odio neque laboriosam culpa voluptatum illum quod et corporis sunt. Exercitationem explicabo atque minima autem, sequi cum magni repudiandae, nisi odio voluptatibus voluptas eligendi? Quaerat deleniti ea excepturi enim odit sunt doloremque veniam velit magni voluptatibus ullam, veritatis nihil beatae vel pariatur quidem, possimus nemo fuga fugit at. Odio et autem excepturi magni quisquam consectetur accusamus laborum!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Postingan Ke Tiga',
        //     'slug' => 'postingan-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse fugit omnis quos modi dolorum temporibus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse fugit omnis quos modi dolorum temporibus. Eveniet ab laborum consequuntur molestiae quae animi culpa iusto accusamus quaerat. Tenetur quia, ut ipsam recusandae ab eius dolores laborum rem, quaerat consectetur officiis dignissimos doloribus reprehenderit nobis odio neque laboriosam culpa voluptatum illum quod et corporis sunt. Exercitationem explicabo atque minima autem, sequi cum magni repudiandae, nisi odio voluptatibus voluptas eligendi? Quaerat deleniti ea excepturi enim odit sunt doloremque veniam velit magni voluptatibus ullam, veritatis nihil beatae vel pariatur quidem, possimus nemo fuga fugit at. Odio et autem excepturi magni quisquam consectetur accusamus laborum!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Postingan Ke Emopat',
        //     'slug' => 'postingan-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse fugit omnis quos modi dolorum temporibus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse fugit omnis quos modi dolorum temporibus. Eveniet ab laborum consequuntur molestiae quae animi culpa iusto accusamus quaerat. Tenetur quia, ut ipsam recusandae ab eius dolores laborum rem, quaerat consectetur officiis dignissimos doloribus reprehenderit nobis odio neque laboriosam culpa voluptatum illum quod et corporis sunt. Exercitationem explicabo atque minima autem, sequi cum magni repudiandae, nisi odio voluptatibus voluptas eligendi? Quaerat deleniti ea excepturi enim odit sunt doloremque veniam velit magni voluptatibus ullam, veritatis nihil beatae vel pariatur quidem, possimus nemo fuga fugit at. Odio et autem excepturi magni quisquam consectetur accusamus laborum!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        Post::factory(20)->create();

    }
}