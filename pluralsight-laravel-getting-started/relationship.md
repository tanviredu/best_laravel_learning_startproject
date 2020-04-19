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
        


$likes = Post::find(10)->likes()->order_by(...)->get();

//insert data


//find the post
$post = Post::find(10);
$like = new Like()
$post->likes()->save($like)





// in many to many relationship you need a
// pivot table
//laravel expect this

Post model and Tag model

pivot table name will be post_tag

php artisan make:migration create_post_tag_table

and in the table foreign key will be

post_id and tag_id

and you access data just like a one to many relationship

// fetch data

$tags = Post::find(10)->tags;

/query builder

$tags = Post::find(10)->tags()->get();




// the main difference is in the inserting the data

// get the post

$post = Post::find(10);

select a specfic tag with its id for example
$tagId = 1
$post->tags()->attach($tagId);

// insted of save you will use attach
// thats will populate the pivot table
