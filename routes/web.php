<?php

use App\Http\Controllers\cartController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\productController;
use App\Http\Controllers\userController;
use App\Models\Products;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/home','welcome');
Route::view('/index','pages.index');
Route::view('/page','contact');
Route::view('/add-product','pages.admin.addProduct')->middleware('add');
Route::view('/admin/add-category','pages.admin.addCategory')->middleware('add');
Route::view('/admin/register','pages.admin.register')->name('register');
Route::view('/login','pages.admin.login')->name('login');
Route::view('/view-cart','pages.admin.cart')->middleware('auth');
Route::post('/admin/add-product',[productController::class,'AddData']);
Route::get('/admin/index',[productController::class,'GetProducts']);
Route::post('/add-category',[categoryController::class,'AddCategory']);
Route::post('/admin/register',[userController::class,'SignUp'])->name('register');
Route::post('/admin/logout',[userController::class,'SignOut'])->name('logout');
Route::post('/login',[userController::class,'SignIn'])->name('login');
Route::post('/add-to-cart',[cartController::class,'addToCart']);
Route::get('/view-cart',[cartController::class,'getCartItems']);
Route::get('/admin/add-product',[categoryController::class,'GetCategories']);
Route::get('/admin/single-product/{id}',function($id){
      $product = Products::find($id);
      return View('pages.singleProduct',compact('product'));
});
Route::post('/send-mail',[mailController::class,'sendMail']);




//Route::get('/page',function(){
  //  return view('contact');
//});

//Route::get('/index',function(){
  //  return view('pages.index');
//});

//Route::get('/admin/add-product',function(){
  //  return view('pages.admin.addProduct');
//});

//Route::get('/add-product',function(){
  //  return view(productController::class,'AddData');
//});

?>