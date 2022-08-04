<?php

namespace App\Http\Controllers;
use App\Models\Post;
use http\Env\Response;
use Illuminate\Validation\Rule;


class postController extends Controller
{
    //index,show,create,store,edit,update,destroy

    public function index(){

        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search','category','author']))->Paginate(3)->withQueryString()
        ]);
    }
//    public function getPosts(){
//       return Post::latest()->filter()->get();
//        $posts = Post::latest();
//
//        if (request('search')){
//            $posts
//                ->where('title','like','%'.request('search').'%')
//                ->orWhere('body','like','%'.request('search').'%');
//        }
//
//        return $posts->get();
//
//    }



    public function show(Post $post)
    {

        return view('posts.show', [
            'post' => $post,
        ]);
    }




}
