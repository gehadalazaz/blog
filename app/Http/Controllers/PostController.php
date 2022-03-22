<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function index(){
        $posts=Post::all();
       
     return view('posts.index',[   ////////view test is test.blade.php
               'posts'=>$posts    //posts is key
           ]);
    }
    /////////////////////////////show method ///////////////////
    public function show($post){
        $post=Post::find($post);
        // $post=Post::where('id',$post);
        // $post=Post::where('title','js');
        // $post=$post->get();
        // dd($post);
       return view('posts.show',[
           'post'=>$post

       ]);

    }
    ///////////////////////////////create method////////////////////////////////////////
    public function create(){
     //get all users from database
    //  $users=User::all();
    
        return view('posts.create',[
           'users'=>User::all()

        ]);




    }
    // //////////////////////////////store method//////////////////////////
    // public function store(){
    //      //logic of store data in DB
    //      //1    get the requested data
    //      $requestedData=request();
    //      //  dd($requestedData->all());
    //      $data=request()->all();
    //     //  dd(request()->title);
    //      dd($data['title']);

    //     // 

    //     return redirect()->route('posts.index');
        
    // }
      //////////////////////////////  store method   two //////////////////////////
     // public function store(Request $myrequestedOBJECT){
      public function store(StorePostRequest $myrequestedOBJECT){
        
        //logic of store data in DB
        //1    get the requested data
       $data=$myrequestedOBJECT->all();
       //dd($data);
        // dd($data['title']);
        //2-store data in db
        // Post::create([
        //     'title'=>$data['title'],
        //     'description'=>$data['description'],
        //     'dftuiuytdresdrftyghu'=>'mbnn' , //will be ignored because it not define in $fillable
        //     'id'=> 'nmbvhcg'//will be ignored because it not define in $fillable

        // ]);
        // Post::create($data);

        //display validation errors of creating post  this is old shape
        // $myrequestedOBJECT->validate([
        //     'title'      =>'required | min:3',
        //     'description'=>'required | min:3'],
        //    [
        //     'title.required'      =>'title is required',
        //     'description.required'=>'description is required'

        //                             ] );


        //last syntax    and we will not use fillable it is up to you
        $post=new Post;
        $post->title      =$data['title'];
        $post->description=$data['description'];
        $post->user_id    =$data['user_id']; //to save user_id in db who create the post
        
        $post->save();


       return redirect()->route('posts.index');
       
   }










     //////////////////////////////delete method//////////////////////////
     public function destroy(){
        //logic of delete one item  in DB
       return redirect()->route('posts.index');
       
   }







}
