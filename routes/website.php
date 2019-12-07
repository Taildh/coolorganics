<?php
Route::get('/dangki', 'DangkiController@addNew')->name('dangki.add');
Route::post('/dangki', 'DangkiController@saveAddnew');
Route::get('/dangnhap', 'DangkiController@Login')->name('dangnhap.add');
Route::post('/dangnhap', 'DangkiController@postLogin');
Route::get('/dangxuat', 'DangkiController@logoutus')->name('logoutUser');


Route::get('cart', 'CartController@cart')->name('cart.add');
Route::post('cart', 'CartController@saveCart');

Route::get('add-to-cart/{id}', 'CartController@addToCart');

Route::patch('update-cart', 'CartController@update');

Route::delete('remove-from-cart', 'CartController@remove');

Route::get('lichsu/{id}', 'TrangchuController@history')->name('lichsumuahang');


Route::get('/', 'TrangchuController@index')->name('trangchu');
Route::get('gioithieu', 'TrangchuController@gioithieu')->name('gioithieu');
Route::get('lienhe', 'TrangchuController@lienhe')->name('lienhe');
Route::post('lienhe', 'TrangchuController@saveAddnew');
Route::get('sanpham/{id}', 'TrangchuController@sanpham')->name('sanpham');

Route::get('tintuc/{id}', 'TrangchuController@tintuc')->name('tintuc');
Route::get('chitietsanpham/{id}', 'TrangchuController@chitiet')->name('chitietsp');
Route::post('chitietsanpham/{id}', 'TrangchuController@saveAdd');
Route::get('chitietbaiviet/{id}', 'TrangchuController@chitietbv')->name('chitietbv');
Route::post('chitietbaiviet/{id}', 'TrangchuController@saveAddpost');

Route::post('coupon','CouponController@store')->name('coupon.store');
Route::post('delete-coupon','CouponController@destroy')->name('coupon.destroy');
Route::get('/admin2','AdminChartController@mostViewProduct')->name('homeadmin');
?>