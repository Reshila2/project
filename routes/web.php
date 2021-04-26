<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\MailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */
// Route::get('file-upload', [FileUploadController::class, 'index']);
// Route::post('store', [FileUploadController::class, 'store']);
// // That view should contain your first name, last name. 
// Route::get('user/{name}/{last}', function ($name,$last) {
//     return $name." ".$last;
// })->where(['name'=>'[a-zA-Z]+','last'=>'[a-zA-Z]+']);
// // Route::get('/post/{id}','PostsController@index');
// // Route::resource('/post2','PostsController');
// // // Route::get('/username/{name}/{age}',function($name,$age){
// // //     return view('user',compact('name','age'));
// // // });
// // Route::get('/user/{number1}/{sign}/{number2}','calculator@operation');
Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});
// Route::get('/insert',function(){
//     DB::insert('insert into posts(title,body,is_admin) values(?,?,?)',
//     ["wemdfee","eewdfemy name is Alisher",1]);
// });
// Route::get('/selecter',function(){
//     echo 'Alisher Izzatullayev';
//     $results=DB::select('select * from posts where id=?',[18]);
//     foreach($results as $posts){
//         echo 'Alisher Krasavchik';
//         echo "title is:".$posts->title;
//         echo '<br>';
//         echo "body is:".$posts->body; 
//     }
// });
// Route::get('/update',function(){
//     $updated=DB::update('update posts set title="software tester" where id =?',[1]);
//     return $updated;
// });
// Route::get('/delete',function(){
//     $deleted=DB::delete('delete from posts where id=?',[20]);
//     return $deleted;
// });
// Route::get('/read',function(){
//     $posts=Post::all();
//     foreach($posts as $post){
//         echo $post->body;
//         echo "<br>";
//     }
// });

// use App\Post;
// Route::get('/find',function(){
//     $posts=Post::where('id',1)->value('title');
//     return $posts;
// });
// Route::get('insert',function(){
//     $post=new Post;
//     $post->title="Nishka";
//     $post->body='Qa Analyst';
//     $post->save();
// });
// Route::get('/basicupdate',function(){
//     $post=Post::find(2);
//     $post->title='Hassena';
//     $post->body="Graphic Designer";
//     $post->save();
// });
// Route::get('/delete1',function(){
//     Post::where('id',5)->delete;
// });
// Route::view('/welcome', 'example');

// Route::get('locale/{locale}','MainController@changeLocale')->name('locale');
// // Route::middleware()    
Route::view('/welcome', 'example');



Route::get('/Home', function(){
    return view('Home');
});

Route::post('/admin/addNews', 'NewsController@addNews');

Route::get('/{lang}',function($lang){
    App::setlocale($lang);
    return view ('Home');
});

Route::get('/sendemail','SendEmailController@index');
Route::post('/sendemail/send','SendEmailController@send');


 // Route::get('/uploadfile','UploadFileController@index');
// Route::post('/updatefile','UploadFileController@showUploadFile');

// Route::get('mail/send','MailController@send');

// Route::view('/educenter','Home11.blade.php');
// Route::get('/educenter','SendEmailController@index');

// Route::get('/send-email',[MailController::class,'sendEmail']);