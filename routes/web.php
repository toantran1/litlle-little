<?php
use App\Http\Controllers\joinPackageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
/*home */
Route::get('/','HomeController@index' );
Route::get('/trang-chu','HomeController@index');

/*Payment */
Route::get('/','PackageController@show_package');
Route::get('/trang-chu','PackageController@show_package');
Route::post('/order-ticket','OrderTicketController@insert_orderTicket');
// Route::get('/payment','PaymentController@payment_info');
Route::get('/payment','PaymentController@get_info_payment');
Route::get('/payment',[joinPackageController::class, 'index']);

/*Contact */
Route::get('/contact','ContactController@contact_page');