<?php

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
use App\User;
use Illuminate\Http\Request;
Route::get('/','PagesController@index');

Route::get('/profil', 'PagesController@profil');
//Route::resource('posts','PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/groupe', function(){
    $users = User::all();
    return view('groupe')->with('users', $users);
});
Route::get('/notes', function(){
    return view('notes');
});
Route::get('/modifnotes', function(){
    $users = User::all();
    return view('modifnotes')->with('users', $users);
});
Route::get('/modifgroupe', function(){
    $users = User::all();
    return view('modifgroupe')->with('users', $users);
});
Route::post('/modifnotes', function(Request $request){
    $user = User::find($request->input('userid'));
    if(Auth::user()->module==1){$user->note1=$request->input('notes');}
    if(Auth::user()->module==2){$user->note2=$request->input('notes');}
    if(Auth::user()->module==3){$user->note3=$request->input('notes');}
    $user->save();
    return redirect('/modifnotes');
})->name('sauver');
Route::post('/modifgroupe', function(Request $request){
    $user = User::find($request->input('userid'));
    $user->groupe=$request->input('groupe');
    $user->save();
    return redirect('/modifgroupe');
})->name('sauverg');