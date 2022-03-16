<?php
use App\Http\Controllers\joinPackageController;
use App\Http\Controllers\OrderTicketController;
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
// Route::get('/payment-insert','PaymentController@get_info_payment');
Route::get('/payment',[joinPackageController::class, 'index']);
Route::post('insert_orderdetail',[OrderTicketController::class,'insert_order_detail']);
Route::get('/payment-success','PaymentController@payment_success');

/*Contact */
Route::get('/contact','ContactController@contact_page');

//send-mail
Route::get('/send-mail','MailController@mail_info');
Route::get('/send-mail','MailController@send_mail');

//download ticket
Route::get('/download-ticket','HomeController@download_ticket');

//contact
Route::post('send-recommend','ContactController@send_recommend');

//event
Route::get('/event','EventController@event_dashboard');
Route::get('/event-detail','EventController@event_detail');