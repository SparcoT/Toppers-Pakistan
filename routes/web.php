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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/privacy-policy', function () {
    return view('privacy_policy');
});


Route::get('/register-admin','UserController@registerAdmin');
Route::post('/register','UserController@register');

// Auth::routes();
Auth::routes(['register'=>false]);

// Route::get('/home', 'HomeController@index')->name('home');

// Restaurant Routes
// Route::get('/restaurant', 'RestaurantController@index');
// Route::get('/add-restaurant', 'RestaurantController@addRestaurant');
// Route::post('/store-restaurant','RestaurantController@storeRestaurant');
// Route::get('/edit-restaurant/{id}','RestaurantController@editRestaurant');
// Route::post('/update-restaurant/{id}','RestaurantController@updateRestaurant');
// Route::get('/delete-restaurant/{id}','RestaurantController@deleteRestaurant');
// Route::get('/view-restaurant/{id}','RestaurantController@viewRestaurant');


//Restaurant Branch Routes
Route::get('/branch', 'RestaurantBranchController@index');
Route::get('/add-branch', 'RestaurantBranchController@addBranch');
Route::post('/store-branch','RestaurantBranchController@storeBranch');
Route::get('/edit-branch/{id}','RestaurantBranchController@editBranch');
Route::post('/update-branch/{id}','RestaurantBranchController@updateBranch');
Route::get('/delete-branch/{id}','RestaurantBranchController@deleteBranch');

//restaurant Product Routes
Route::get('/product', 'ProductController@index');
Route::get('/add-product', 'ProductController@addProduct');
Route::post('/store-product','ProductController@storeProduct');
Route::get('/edit-product/{id}','ProductController@editProduct');
Route::post('/update-product/{id}','ProductController@updateProduct');
Route::get('/delete-product/{id}','ProductController@deleteProduct');
Route::get('/add-product-order','ProductController@addProductOrder');
Route::post('/add-product-order-list','ProductController@addProductOrderList');
Route::post('/filter-products','ProductController@filterProduct');


Route::post('/store-order-admin','OrderController@storeOrderAdmin');






//Category Route
Route::get('/category', 'CategoryController@index');
Route::get('/add-category', 'CategoryController@addCategory');
Route::post('/store-category','CategoryController@storeCategory');
Route::get('/edit-category/{id}','CategoryController@editCategory');
Route::post('/update-category/{id}','CategoryController@updateCategory');
Route::get('/delete-category/{id}','CategoryController@deleteCategory');

//Unit Route
Route::get('/unit', 'UnitController@index');
Route::get('/add-unit', 'UnitController@addUnit');
Route::post('/store-unit','UnitController@storeUnit');
Route::get('/edit-unit/{id}','UnitController@editUnit');
Route::post('/update-unit/{id}','UnitController@updateUnit');
Route::get('/delete-unit/{id}','UnitController@deleteUnit');


//Customer
Route::get('/customer', 'CustomerController@index');
Route::get('/customer-address/{id}','CustomerController@address');
Route::get('/customer-order','CustomerController@order');


//Order
Route::get('/home','OrderController@index');
Route::get('/order-complete/{id}','OrderController@complete');
Route::get('/reject-order/{id}','OrderController@reject');
Route::get('/order-completed','OrderController@completedOrder');
Route::get('/invoice/{id}','OrderController@invoice');
Route::get('/invoice-print/{id}','OrderController@invoicePrint');
Route::get('/customer-order/{id}','OrderController@orderByCustomerId');
Route::get('/punch-order','OrderController@punchOrder');
Route::get('/add-customer-info','OrderController@addCustomerInfo');
Route::post('/store-customer-info','OrderController@storeCustomerInfo');



//Order Item
Route::get('/view-order-item/{id}','OrderItemController@getItems');



//Carosal Routes
Route::get('/carosel', 'CaroselController@index');
Route::get('/add-carosel', 'CaroselController@addCarosel');
Route::post('/store-carosel','CaroselController@storeCarosel');
Route::get('/edit-carosel/{id}','CaroselController@editCarosel');
Route::post('/update-carosel/{id}','CaroselController@updateCarosel');
Route::get('/delete-carosel/{id}','CaroselController@deleteCarosel');



Route::get('report','ReportsController@daily');
Route::get('report-preview-order-daily','ReportsController@dailyPrint');


Route::get('report-productWise','ReportsController@productWise');
Route::get('report-monthly','ReportsController@monthly');
Route::get('report-monthly-product','ReportsController@monthlyProduct');
Route::get('report-yearly','ReportsController@yearly');
Route::get('report-yearly-product','ReportsController@yearlyProduct');
Route::get('report-custom','ReportsController@custom');
Route::get('report-custom-product','ReportsController@customProduct');


Route::post('report-daily','ReportsController@dailySpecific');
Route::post('report-monthly-specific','ReportsController@monthlySpecific');
Route::post('report-yearly-specific','ReportsController@yearlySpecific');
Route::post('report-custom-specific','ReportsController@customSpecific');


Route::post('report-daily-product','ReportsController@productWiseDaily');
Route::post('report-monthly-product-specific','ReportsController@monthlyProductSpecific');
Route::post('report-yearly-product-specific','ReportsController@yearlyProductSpecific');
Route::post('report-custom-product-specific','ReportsController@customProductSpecific');


//Firebase
Route::get('notification','FirebaseController@index');
Route::post('/store-notification','FirebaseController@store');

// Route::get('/users', function() {
//     return view('users')->with('restaurant', [App\Restaurant::all()]);
// });


//Shop

// Route::get('/shop','ShopController@index');


//Sub Category

Route::get('/subCategory','SubCategoryController@index');
Route::get('/add-sub-category', 'SubCategoryController@addSubCategory');
Route::post('/store-sub-category','SubCategoryController@storeSubCategory');
Route::get('/edit-sub-category/{id}','SubCategoryController@editSubCategory');
Route::post('/update-sub-category/{id}','SubCategoryController@updateSubCategory');
Route::get('/delete-sub-category/{id}','SubCategoryController@deleteSubCategory');


//Forget Password

Route::get('changePass','ForgetPasswordController@changePass');
Route::post('reset-password','ForgetPasswordController@resetPassword');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
