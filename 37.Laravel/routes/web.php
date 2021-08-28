<?php

use App\Http\Controllers\MainController;
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

Route::get( '/', function () {
    return view( 'welcome' );
} );

/*
Class = 3

Route::get( '/hello', function () {
// echo "Hello World";
// return "Hello Wrold Return";
return ['name' => 'rakibul'];
} );

// explicit = স্পষ্ট বা পরিষ্কারভাবে বলা।
// implicit = অন্তনির্হিত বা ঊহ্য

Route::get( '/{greet}/{name}', function ( $dynamicGreet, $dynamicName ) {
return "{$dynamicGreet} {$dynamicName}";
} );

 */

/*
Class = 4

Route::post( '/say', function ( Request $request ) {
// $greeting = $request->post('greeting');
$newName = $request->post( 'name' );
// $all = $request->all()
echo "hello {$newName}";
} );
 */

/*
Class = 5

Route::get( 'hello/{name}', function ( $world ) {
return view( 'info', [
'name' => $world,
] );
} );
 */

// Route::get( '/hello/world', [MainController::class, 'sayHi'] );
Route::get( '/hello/world', [MainController::class, 'sayHi'] );
Route::get( '/hello/{world}', [MainController::class, 'sayDaynamicName'] );
