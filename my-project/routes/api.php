<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('dang-nhap', 'APIController@login');
Route::post('UploadImg', 'APIController@UploadImg');
Route::post('Dangky', 'APIController@DangKy');
Route::post('quen-mat-khau', 'APIController@quenMatKhau');
Route::put('cap-nhat-tai-khoan/{id}', 'APIController@capNhat');

Route::get('linh-vuc','ApiController@layLV')->name('api-linh-vuc');
Route::get('cau-hoi/{id}','APIcontroller@laycauhoi')->name('lay_cauhoi');
Route::get('lay_gredit','APIcontroller@layCredit')->name('lay_gredit');
Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('user-info', 'APIcontroller@getUserInfo');
});