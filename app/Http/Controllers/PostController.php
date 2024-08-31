<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post ;
use App\Http\Requests\StorePostRequest;
use App\Models\User ;

class PostController extends Controller
{
    //
    public function index()
    {
        // $posts = [
        //     ['id' => 1 , 'title' => 'Laravel' , 'posted_by'=> 'Manol' , 'created_at' => '2024-3-14'],
        //     ['id' => 2 , 'title' => 'Laravel10' , 'posted_by'=> 'zeft' , 'created_at' => '2024-3-15'],
        //     ['id' => 3 , 'title' => 'Laravel11' , 'posted_by'=> 'mohamed' , 'created_at' => '2024-3-16']
        // ];

        $posts = Post::all();
        // dd($posts);
        return view('Posts.index',[
           'allposts'=> $posts,
        ]);

    }

    public function show($post)
    {
        $post = Post::find($post);
        // $post = Post::where('title','laravel')->first(); // return first element 
        // $post = Post::where('title','laravel')->get();  //get all element
        return view('Posts.show',['post'=> $post]);
        
    }
    public function create()
    {
        $users = User::all();
        return view('Posts.create',['users'=>$users]);
        
    }

    public function store(StorePostRequest $myRequestObject)
    {
        // get the request data
        // insert the request data into DB
        //redirection
        
        // $data = $myRequestObject->all();
        // Post::create([
        //     'title'=>'fsds',
        //     'description'=>'ggh'
        // ]);
        // dd($data);
        // $data = request()->title();
            
        // Post::create($data); //create is build in function
        //or

        //validate
        // $myRequestObject->validate([
        //     'title'=>['required','min:5'],
        //     'description'=>'required',
        // ],
        // [
        //     'title.required'=>'Please, Enter Title',
        // ]
    // );
        Post::create($myRequestObject->all());
        //هو هو اللي فوق 
        //هو هنا  هياخد الداتا اللي عايزها بس ويخزنها وملوش دعوه بالباقي


        return redirect()->route('posts.index');
    }
    public function destroy($post){
        Post::where('id',$post)->delete();
        return redirect()->route('posts.index');

    }
    public function edit($post){
        $post = Post::find($post);
        $users = User::all();
        // $post = Post::where('title','laravel')->first(); // return first element 
        // $post = Post::where('title','laravel')->get();  //get all element
        return view('Posts.edit',['post'=> $post ]);
    }
}
