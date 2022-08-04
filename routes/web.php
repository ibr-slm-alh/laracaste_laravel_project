<?php


use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\postController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\sessionsController;
use App\Models\Post;
use Illuminate\Validation\ValidationException;


//Route::get('/',function (){
//    DB::listen(function ($query){
//        dump($query->sql);
//    });
//
//    $projects = Post::all();
//
//    dump($projects->first());
//
//    return 'done';
//});
Route::get('/', [postController::class, 'index'])->name('home');

Route::get('posts/{post:slug}', [postController::class, 'show']);
Route::post('posts/{post:slug}/comments', [CommentController::class, 'store']);
Route::POST('newsletter', ['uses' => NewsletterController::class]);
Route::get('register', [registerController::class, 'create'])->middleware('guest');
Route::post('register', [registerController::class, 'store'])->middleware('guest');
Route::get('login', [sessionsController::class, 'create'])->middleware('guest');
Route::post('login', [sessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [sessionsController::class, 'destroy'])->middleware('auth');

//Admin
Route::middleware('can:admin')->group(function () {

//    Route::resource('admin/posts',AdminPostController::class)->except('show');

    Route::get('admin/posts/create', [AdminPostController::class, 'create']);
    Route::post('admin/posts', [AdminPostController::class, 'store']);
    Route::get('admin/posts', [AdminPostController::class, 'index']);
    Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit']);
    Route::patch('admin/posts/{post}', [AdminPostController::class, 'update']);
    Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy']);

});



//Route::get('authors/{author:username}',function (\App\Models\User $author){
//    return view('posts.index',[
//        'posts'=>$author->posts
//    ]);
//});


//Route::get('categories/{category:slug}', function (\App\Models\Category $category) {
//
//    return view('posts', [
//        'posts' => $category->posts,//->load(['category','author'])
//        'currentCategory' => $category,
//        'categories' => \App\Models\Category::all()
//    ]);
//
//});

