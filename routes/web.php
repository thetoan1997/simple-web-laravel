<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;

// use Symfony\Component\Routing\Route;

// use Symfony\Component\Routing\Route;
// use Illuminate\Support\Facades\Schema;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('hi', function () {
    echo "Use URL say hi!";
});

Route::get('hi/{ten}', function ($ten) {
    echo "say Hi! ".$ten;
});
Route::get('hihi/{ten}', function ($ten) {
    echo "say HiHi! ".$ten;
})-> where (['ten' => '[a-zA-Z]+']);
//định danh cho routes
Route::get('hi3', function () {
    echo "HiName say hiii! ";
})-> name('hiName');
Route::get('hi4', function () {
    return redirect()->route('hiName');
});

//GROUP
Route::group(['prefix'=> 'MyGroup'], function () {
    Route::get('User1',function(){echo 'User 1';});
    Route::get('User2',function(){return 'User 2';});
    Route::get('User3',function(){return 'User 3';});
});

//CALL CONTROLLER
Route::get('sayHi', 'MyController@SayHi');
Route::get('sayHiName/{ten}', 'MyController@SayHiName');

//getDATA
Route::get('MyRequest','MyController@getURL');

//SEND and GET data by REQUEST
Route::get('getForm',function(){
  return view('postForm');
});
Route::post('postForm',[
  'as' => 'postForm',
  'uses' => 'MyController@postForm'
]);

//COOKIE
Route::get('setCookie','MyController@setCookie');
Route::get('getCookie','MyController@getCookie');

//FILE
Route::get('uploadFile',function(){
	return view('postFile');
});

Route::post('postFile',[
	'as' => 'postFile',
	'uses' => 'MyController@postFile'
]);

//JSON DATA
Route::get('getJSON','MyController@getJSON');

//VIEW
Route::get('viewpage','MyController@viewpage');
Route::get('myView','MyController@myView');
Route::get('viewPage2/{time}','MyController@viewPage2');
View::share('time', '23pm');

//BLADE TEMPLATE
Route::get('blade',function(){
	return view('pages.laravel');
});
Route::get('bladeTemplate/{blade}','MyController@blade');

//DATABASE
Route::get('createTable', function(){
    Schema::create('house',function($table){
        $table->increments('id');
        $table->string('ten',200);
    });
    echo "Create Table Success!";
});
Route::get('insertColumnHouse',function(){
    Schema::table('house',function($table){
        $table->integer('idCar')->unsigned();
    });
    echo "insert Column to House Successful";
});

//QUERRY DATA
Route::get('db/get',function(){
    $data = DB::table('users')->get();
    // var_dump($data);
    // var_dump($data[0]);
    foreach ($data as $row) {
        foreach ($row as $key => $value) {
            echo $key.":".$value."<br>";
        }
        echo "<hr>";
    }
});
Route::get('db/select',function(){
    $data = DB::table('users')->select('id','name','email')->where('id',2)->get();
    // var_dump($data);
    // var_dump($data[0]);
    foreach ($data as $row) {
        foreach ($row as $key => $value) {
            echo $key.":".$value."<br>";
        }
        echo "<hr>";
    }
});

//USE MODEL QUERRY DATA
Route::get('db/insertHouse/{name}',function($name){
    $house = new App\House();
    $house->ten= $name;
    $house->save();

    echo "Insert ".$name." Thanh Cong!";
});
Route::get('db/selectModel',function(){
    $user = App\User::where('id',2)->get()->toJson();
    echo $user;
});
Route::get('db/insertCar/{name}/{year}',function($name,$year){
    $car = new App\car();
    $car->nameCar= $name;
    $car->year= $year;
    $car->save();

    echo "Insert ".$name." in ".$year." Thanh Cong!";
});

Route::get('connectByModel',function(){
    $data = App\House::find(2)->infoCar->toArray();
    var_dump($data);
});

//MiddleWare
Route::get('diem',function(){
    echo "Call Diem!";
})->middleware('myMiddle')->name('diem');
Route::get('nhapdiem',function(){
    return view('nhapdiem');
});
Route::get('loi',function(){
    echo "Call Loi!";
})->name('loi');

//Auth
Route::get('formLogin',function(){
    return view('login');
});
// Route::get('login','AuthLogin@login')->name('login');
Route::get('logout','AuthLogin@logout');

//SESSION
Route::group(['middleware'=> ['web']],function(){
   Route::get('Session',function(){
        Session::put('DiepToan','Good');
        echo "Da set Session";
        Session::flush();
        if(Session::has('DiepToan'))
            echo "Da cho Session Diep Toan";
        else
            echo "Nothing Session";
   });
});
Route::get('session/put','SessionController@putSession');
Route::get('session/check','SessionController@checkSession');

//UPLOAD FILE
Route::get('/uploadFile','UploadFileController@index');
Route::post('/uploadFile','UploadFileController@showUploadFile');

use App\TinTuc;
use App\Http\Controllers\PagesController;
Route::get('thuu',function(){
    $tintuc = TinTuc::find(3);
    foreach($tintuc->comment as $cmt){
        echo $cmt->NoiDung."<br>";
    }
});

Route::get('index',function(){
    return view('admin.layout.index');
});
Route::get('content',function(){
    return view('admin.layout.news');
});


Route::get('trangchu','PagesController@tinTuc');

Route::get('login','PagesController@getLogin');
Route::post('login','PagesController@postLogin');

Route::get('logout','PagesController@getLogout');

Route::post('comment/{id}','CommentController@postComment');

Route::post('uptintuc','UploadpicController@upPicture');
// Route::get('tintuc/{id}','PagesController@tintuc');

Route::get('dangki','PagesController@getDangki');
Route::post('dangki','PagesController@postDangki');