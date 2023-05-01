<?php

namespace App\Models;



class Post
{
    private static $blog_posts=[
    [
        "title" => "Post Pertama",
        "slug" => "post-pertama",
        "author" => "Syahrul",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati rem voluptates corrupti ut quibusdam et fugiat reprehenderit sit esse nam unde molestiae, corporis dolores laborum quod exercitationem libero, error quisquam. Voluptatibus quia quas magnam debitis alias itaque qui aliquam consequatur. Asperiores dolorum quidem esse nesciunt natus placeat et ad rerum?"
    ],
    [
        "title" => "Post Kedua",
        "slug" => "post-kedua",
        "author" => "Syntax",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, corrupti nesciunt. Minus, impedit ut amet voluptate quaerat rerum facilis ipsum ea et reprehenderit autem perferendis dolor quam, id, saepe iure numquam vel reiciendis voluptatibus praesentium dignissimos odit vero. Enim commodi repellat nihil ab? Illum cumque quod vero facilis perspiciatis, minus voluptates et. Reiciendis culpa dolorem non modi atque fuga a exercitationem ullam eos. Provident tempora, officia praesentium assumenda blanditiis dignissimos veniam. Quis, placeat facere perferendis, in veniam, at quas aliquid officia consectetur eius enim hic libero. Quod minus eius, neque amet est nihil tempora perferendis, nesciunt quae fugiat ullam pariatur fugit temporibus. Expedita odio quas quasi repellat nulla cumque, facilis consequatur dolore doloribus? Soluta minima debitis totam, odit sunt blanditiis!"
    ]
    ];
    public static function all()
    {
        return collect (self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

}
Post::create([
    'title' => 'Tiga',
    'category_id' => 3,
    'slug' => 'blog-tiga',
    'excerpt' => 'Lorem dihbajx',
    'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit repudiandae, et officia sint porro nulla rem voluptatum numquam, illo recusandae laboriosam iste qui corporis! Magni consectetur, soluta obcaecati rerum voluptates accusamus eveniet vitae, veritatis omnis natus iure in. Possimus provident harum facilis atque accusantium! Officiis</p> <p>necessitatibus ipsam voluptatibus reprehenderit, omnis qui facilis inventore eaque dolore. Laboriosam architecto, enim, iure voluptas iusto nemo perspiciatis natus odit vero beatae quae facere nam temporibus animi ipsam minus sit repudiandae reprehenderit, asperiores provident molestias dolorem eveniet obcaecati! Id quod, eum suscipit non illo eaque vitae neque, inventore iure reiciendis culpa labore quas? Vitae, ipsum?</p>'
]);




