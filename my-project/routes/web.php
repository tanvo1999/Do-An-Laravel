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

// load img
Route::get('storage/{filename}', function ($filename)
{
    $path = storage_path('app/image/'.$filename);
    if (!File::exists($path)) {
        abort(404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});


Route::get('dang-nhap','QuanTriVienController@login')->name('login')->middleware('guest:web');
Route::post('dang-nhap','QuanTriVienController@xuly')->name('xl-dang-nhap');


Route::middleware('auth:web')->group(function(){
Route::get('dang-xuat','QuanTriVienController@logout')->name('dang-xuat');
Route::get('/', function(){
	return view('layout');
})->name('dashboards');

Route::prefix('linh-vuc')->group(function(){
	Route::name('linh-vuc.')->group(function(){
		Route::get('/','LinhVucController@index')->name('danh-sach');
		Route::get('xoa/{id}','LinhVucController@destroy')->name('xoa');
		Route::get('/them-moi', 'LinhVucController@create')->name('them-moi');
		Route::post('/them-moi', 'LinhVucController@store')->name('xl-them-moi');
		Route::get('/cap-nhat/{id}', 'LinhVucController@edit')->name('cap-nhat');
		Route::post('/cap-nhat/{id}', 'LinhVucController@update')->name('xl-cap-nhat');
		Route::get('/thung-rac', 'LinhVucController@bin')->name('thung-rac');
		Route::get('restore/{id}','LinhVucController@restore')->name('restore');
		Route::get('delete/{id}','LinhVucController@delete')->name('delete');
	});
});

Route::prefix('cau-hoi')->group(function(){
	Route::name('cau-hoi.')->group(function(){
		Route::get('/','CauHoiController@index')->name('danh-sach');
		Route::get('xoa/{id}','CauHoiController@destroy')->name('xoa');
		Route::get('/them-moi', 'CauHoiController@create')->name('them-moi');
		Route::post('/them-moi', 'CauHoiController@store')->name('xl-them-moi');
		Route::get('/cap-nhat/{id}', 'CauHoiController@edit')->name('cap-nhat');
		Route::post('/cap-nhat/{id}', 'CauHoiController@update')->name('xl-cap-nhat');
		Route::get('/thung-rac', 'CauHoiController@bin')->name('thung-rac');
		Route::get('restore/{id}','CauHoiController@restore')->name('restore');
		Route::get('delete/{id}','CauHoiController@delete')->name('delete');
	});
});

Route::prefix('nguoi-choi')->group(function(){
	Route::name('nguoi-choi.')->group(function(){
		Route::get('/','NguoiChoiController@index')->name('danh-sach');
		Route::get('xoa/{id}','NguoiChoiController@destroy')->name('xoa');
		Route::get('/them-moi', 'NguoiChoiController@create')->name('them-moi');
		Route::post('/them-moi', 'NguoiChoiController@store')->name('xl-them-moi');
		Route::get('/cap-nhat/{id}', 'NguoiChoiController@edit')->name('cap-nhat');
		Route::post('/cap-nhat/{id}', 'NguoiChoiController@update')->name('xl-cap-nhat');
		Route::get('/thung-rac', 'NguoiChoiController@bin')->name('thung-rac');
		Route::get('restore/{id}','NguoiChoiController@restore')->name('restore');
		Route::get('delete/{id}','NguoiChoiController@delete')->name('delete');
	});
});

Route::prefix('goi-credit')->group(function(){
	Route::name('goi-credit.')->group(function(){
		Route::get('/','GoiCreditController@index')->name('danh-sach');
		Route::get('xoa/{id}','GoiCreditController@destroy')->name('xoa');
		Route::get('/them-moi', 'GoiCreditController@create')->name('them-moi');
		Route::post('/them-moi', 'GoiCreditController@store')->name('xl-them-moi');
		Route::get('/cap-nhat/{id}', 'GoiCreditController@edit')->name('cap-nhat');
		Route::post('/cap-nhat/{id}', 'GoiCreditController@update')->name('xl-cap-nhat');
		Route::get('/thung-rac', 'GoiCreditController@bin')->name('thung-rac');
		Route::get('restore/{id}','GoiCreditController@restore')->name('restore');
		Route::get('delete/{id}','GoiCreditController@delete')->name('delete');
	});
});

Route::prefix('quan-tri-vien')->group(function(){
	Route::name('quan-tri-vien.')->group(function(){
		Route::get('/','QuanTriVienController@index')->name('danh-sach');
		Route::get('xoa/{id}','QuanTriVienController@destroy')->name('xoa');
		Route::get('/them-moi', 'QuanTriVienController@create')->name('them-moi');
		Route::post('/them-moi', 'QuanTriVienController@store')->name('xl-them-moi');
		Route::get('/cap-nhat/{id}', 'QuanTriVienController@edit')->name('cap-nhat');
		Route::post('/cap-nhat/{id}', 'QuanTriVienController@update')->name('xl-cap-nhat');
		Route::get('/thung-rac', 'QuanTriVienController@bin')->name('thung-rac');
		Route::get('restore/{id}','QuanTriVienController@restore')->name('restore');
		Route::get('delete/{id}','QuanTriVienController@delete')->name('delete');
	});
});
Route::prefix('cau-hinh-diem-cau-hoi')->group(function(){
	Route::name('cau-hinh-diem-cau-hoi.')->group(function(){
		Route::get('/','CauHinhDiemCauHoiController@index')->name('danh-sach');
		Route::get('xoa/{id}','CauHinhDiemCauHoiController@destroy')->name('xoa');
		Route::get('/them-moi', 'CauHinhDiemCauHoiController@create')->name('them-moi');
		Route::post('/them-moi', 'CauHinhDiemCauHoiController@store')->name('xl-them-moi');
		Route::get('/cap-nhat/{id}', 'CauHinhDiemCauHoiController@edit')->name('cap-nhat');
		Route::post('/cap-nhat/{id}', 'CauHinhDiemCauHoiController@update')->name('xl-cap-nhat');
		Route::get('/thung-rac', 'CauHinhDiemCauHoiController@bin')->name('thung-rac');
		Route::get('restore/{id}','CauHinhDiemCauHoiController@restore')->name('restore');
		Route::get('delete/{id}','CauHinhDiemCauHoiController@delete')->name('delete');
	});
});


Route::prefix('cau-hinh-app')->group(function(){
	Route::name('cau-hinh-app.')->group(function(){
		Route::get('/','CauHinhAppController@index')->name('danh-sach');
		Route::get('xoa/{id}','CauHinhAppController@destroy')->name('xoa');
		Route::get('/them-moi', 'CauHinhAppController@create')->name('them-moi');
		Route::post('/them-moi', 'CauHinhAppController@store')->name('xl-them-moi');
		Route::get('/cap-nhat/{id}', 'CauHinhAppController@edit')->name('cap-nhat');
		Route::post('/cap-nhat/{id}', 'CauHinhAppController@update')->name('xl-cap-nhat');
		Route::get('/thung-rac', 'CauHinhAppController@bin')->name('thung-rac');
		Route::get('restore/{id}','CauHinhAppController@restore')->name('restore');
		Route::get('delete/{id}','CauHinhAppController@delete')->name('delete');
	});
});

Route::prefix('thong-ke')->group(function(){
	Route::name('thong-ke.')->group(function(){
		Route::get('/','ThongKeController@index')->name('thong-ke-dang-ki');
		//Route::get('/','ThongKeController@destroy')->name('xoa');
		//Route::get('/them-moi', 'ThongKeController@create')->name('them-moi');
	});
});

Route::prefix('cau-hinh-tro-giup')->group(function(){
	Route::name('cau-hinh-tro-giup.')->group(function(){
		Route::get('/','CauHinhTroGiupController@index')->name('danh-sach');
		Route::get('xoa/{id}','CauHinhTroGiupController@destroy')->name('xoa');
		Route::get('/them-moi', 'CauHinhTroGiupController@create')->name('them-moi');
		Route::post('/them-moi', 'CauHinhTroGiupController@store')->name('xl-them-moi');
		Route::get('/cap-nhat/{id}', 'CauHinhTroGiupController@edit')->name('cap-nhat');
		Route::post('/cap-nhat/{id}', 'CauHinhTroGiupController@update')->name('xl-cap-nhat');
		Route::get('/thung-rac', 'CauHinhTroGiupController@bin')->name('thung-rac');
		Route::get('restore/{id}','CauHinhTroGiupController@restore')->name('restore');
		Route::get('delete/{id}','CauHinhTroGiupController@delete')->name('delete');
	});
});

});

Route::get('public/{filename}', function ($filename)
{
    return Image::make(storage_path('public/' . $filename))->response();
});