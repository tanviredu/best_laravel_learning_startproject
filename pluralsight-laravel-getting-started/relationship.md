1) one post have many likes (has many)
2) one like only belongs to one post (belongs to)

3) one post can belogs to many tages (belongs to many)
4) one tag can belongs to many post  (belongs to many)



in order to make relation ship you have to make 
both function in like & post 
and tags & post



some asumption

you need to have a foreigh key in likes
one post have multiple likes and the foreign key name is post_id in likes

php artisan migrate:refresh --seed

// fetching data

find all the likes in a spefic Post like post no 10

$likes = Post::find(10)->likes;

// you can order it with a query builder like

// egar loading

$post = Post::where('id',$id)->with('likes')->first();
        

// in many to many relationship you need a
// pivot table
//laravel expect this

Post model and Tag model

pivot table name will be post_tag


$likes = Post::find(10)->likes()->order_by(...)->get();

//insert data


//find the post
$post = Post::find(10);
$like = new Like()
$post->likes()->save($like)







