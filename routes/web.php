<?php

use Illuminate\Support\Facades\Route;

//Users
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\AboutController;
use App\Http\Controllers\Client\LoginController;
use App\Http\Controllers\Server\SizesController;
use App\Http\Controllers\Server\UsersController;
use App\Http\Controllers\Server\AdminsController;
use App\Http\Controllers\Server\ColorsController;
use App\Http\Controllers\Server\OrdersController;

//Admins 
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\ProductController;
use App\Http\Controllers\Client\CheckoutController;
use App\Http\Controllers\Client\RegisterController;
use App\Http\Controllers\Client\WishlistController;
use App\Http\Controllers\Server\CommentsController;
use App\Http\Controllers\Server\ProductsController;
use App\Http\Controllers\Server\DashBoardController;
use App\Http\Controllers\Server\DiscountsController;
use App\Http\Controllers\Server\ProvidersController;
use App\Http\Controllers\Server\PurchasesController;
use App\Http\Controllers\Server\CategoriesController;
use App\Http\Controllers\Server\SlideShowsController;
use App\Http\Controllers\Server\PaymentMethodsController;


// Route::get('/', function () {
//     return view('master');
//     // return view('login');
// });


//Users Route

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dangky', [RegisterController::class, 'index'])->name('register');
Route::get('/dangnhap', [LoginController::class, 'index'])->name('user_login');
Route::get('/giohang', [CartController::class, 'index'])->name('cart');
Route::get('/yeuthich', [WishlistController::class, 'index'])->name('wishlist');
Route::get('/thanhtoan', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/lienhe', [ContactController::class, 'index'])->name('contact');
Route::get('/vechungtoi', [AboutController::class, 'index'])->name('about');
Route::get('/sanpham', [ProductController::class, 'index'])->name('products');
Route::get('/chitietsanpham', [ProductController::class, 'detail'])->name('product_detail');


//Admins Route

Route::prefix('/admin')->group(function () {

    Route::middleware('guest')->group(function () {

        Route::get('/login', [AdminsController::class, 'login'])->name('login');
        Route::post('/login', [AdminsController::class, 'loginHandle'])->name('loginHandle');
    });

    Route::middleware('auth')->group(function () {

        Route::get('/', [DashBoardController::class, 'dashboard'])->name('dashboards.index');
        Route::get('/logout', [AdminsController::class, 'logout'])->name('logout');

        //Admins

        Route::prefix('/quanlyquantrivien')->name('admins.')->group(function () {

            Route::get('/', [AdminsController::class, 'index'])->name('index');

            Route::get('/thungrac', [AdminsController::class, 'trash'])->name('trash');
            Route::post('/search', [AdminsController::class, 'search'])->name('search');

            Route::get('/themmoi', [AdminsController::class, 'create'])->name('create');
            Route::post('/themmoi', [AdminsController::class, 'store'])->name('store');

            Route::get('/chitiet/{id}', [AdminsController::class, 'show'])->name('show');

            Route::get('/capnhat/{id}', [AdminsController::class, 'edit'])->name('edit');
            Route::post('/capnhat/{id}', [AdminsController::class, 'update'])->name('update');

            Route::get('/delete/{id}', [AdminsController::class, 'destroy'])->name('delete');
        });

        //endAdmins

        // Route::resource('/admins', AdminsController::class);

        //Users

        Route::prefix('/quanlynguoidung')->name('users.')->group(function () {

            Route::get('/', [UsersController::class, 'index'])->name('index');

            Route::get('/thungrac', [UsersController::class, 'trash'])->name('trash');
            Route::post('/search', [UsersController::class, 'search'])->name('search');

            Route::get('/chitiet/{id}', [UsersController::class, 'show'])->name('show');

            Route::get('/capnhat/{id}', [UsersController::class, 'edit'])->name('edit');
            Route::post('/capnhat/{id}', [UsersController::class, 'update'])->name('update');

            Route::get('/delete/{id}', [UsersController::class, 'destroy'])->name('delete');
        });

        //endUsers

        // Route::resource('/users', UsersController::class);

        //Products

        Route::prefix('/quanlysanpham')->name('products.')->group(function () {
            Route::get('/', [ProductsController::class, 'index'])->name('index');

            Route::get('/thungrac', [ProductsController::class, 'trash'])->name('trash');
            Route::post('/search', [ProductsController::class, 'search'])->name('search');

            Route::get('/themmoi', [ProductsController::class, 'create'])->name('create');
            Route::post('/themmoi', [ProductsController::class, 'store'])->name('store');

            Route::get('/chitiet/{id}', [ProductsController::class, 'show'])->name('show');
            Route::post('/quantity/{id}', [ProductsController::class, 'quantity'])->name('quantity');

            Route::get('/capnhat/{id}', [ProductsController::class, 'edit'])->name('edit');
            Route::post('/capnhat/{id}', [ProductsController::class, 'update'])->name('update');

            Route::get('/delete/{id}', [ProductsController::class, 'destroy'])->name('delete');
        });

        //endProducts

        // Route::resource('/products', ProductsController::class);

        //Providers

        Route::prefix('/quanlynhacungcap')->name('providers.')->group(function () {

            Route::get('/', [ProvidersController::class, 'index'])->name('index');

            Route::get('/thungrac', [ProvidersController::class, 'trash'])->name('trash');
            Route::post('/search', [ProvidersController::class, 'search'])->name('search');

            Route::get('/themmoi', [ProvidersController::class, 'create'])->name('create');
            Route::post('/themmoi', [ProvidersController::class, 'store'])->name('store');

            Route::get('/chitiet/{id}', [ProvidersController::class, 'show'])->name('show');

            Route::get('/capnhat/{id}', [ProvidersController::class, 'edit'])->name('edit');
            Route::post('/capnhat/{id}', [ProvidersController::class, 'update'])->name('update');

            Route::get('/delete/{id}', [ProvidersController::class, 'destroy'])->name('delete');
        });

        //endProviders

        // Route::resource('/providers', ProvidersController::class);

        //Purchase

        Route::prefix('/quanlyhoadonnhap')->name('purchases.')->group(function () {

            Route::get('/', [PurchasesController::class, 'index'])->name('index');

            Route::get('/thungrac', [PurchasesController::class, 'trash'])->name('trash');
            Route::post('/search', [PurchasesController::class, 'search'])->name('search');

            Route::get('/chitiet/{id}', [PurchasesController::class, 'show'])->name('show');
            Route::get('/verify/{id}', [PurchasesController::class, 'verify'])->name('verify');

            Route::get('/themmoi', [PurchasesController::class, 'create'])->name('create');
            Route::post('/themmoi', [PurchasesController::class, 'store'])->name('store');

            Route::get('/delete/{id}', [PurchasesController::class, 'destroy'])->name('delete');
        });

        //endPurchase

        // Route::resource('/purchases', PurchasesController::class);

        //Orders

        Route::prefix('/quanlyhoadonban')->name('orders.')->group(function () {

            Route::get('/', [OrdersController::class, 'index'])->name('index');
            Route::get('/thungrac', [OrdersController::class, 'trash'])->name('trash');

            Route::post('/search', [OrdersController::class, 'search'])->name('search');

            Route::get('/chitiet/{id}', [OrdersController::class, 'show'])->name('show');

            Route::get('/delete/{id}', [OrdersController::class, 'destroy'])->name('delete');

            Route::get('/status/{id}/{status}', [OrdersController::class, 'changeStatus'])->name('status');
        });

        //endOrders

        // Route::resource('/orders', OrdersController::class);

        //Comments

        Route::prefix('/quanlydanhgia')->name('comments.')->group(function () {

            Route::get('/', [CommentsController::class, 'index'])->name('index');
            Route::get('/thungrac', [CommentsController::class, 'trash'])->name('trash');

            Route::post('/search', [CommentsController::class, 'search'])->name('search');

            Route::get('/delete/{id}', [CommentsController::class, 'destroy'])->name('delete');
        });

        //endComments

        // Route::resource('/comments', CommentsController::class);

        //Discounts

        Route::prefix('/quanlymagiamgia')->name('discounts.')->group(function () {

            Route::get('/', [DiscountsController::class, 'index'])->name('index');

            Route::get('/thungrac', [DiscountsController::class, 'trash'])->name('trash');
            Route::post('/search', [DiscountsController::class, 'search'])->name('search');

            Route::get('/themmoi', [DiscountsController::class, 'create'])->name('create');
            Route::post('/themmoi', [DiscountsController::class, 'store'])->name('store');

            Route::get('/capnhat/{id}', [DiscountsController::class, 'edit'])->name('edit');
            Route::post('/capnhat/{id}', [DiscountsController::class, 'update'])->name('update');

            Route::get('/delete/{id}', [DiscountsController::class, 'destroy'])->name('delete');
        });

        //endDiscounts

        // Route::resource('/discounts', DiscountsController::class);

        //Categories

        Route::prefix('/quanlydanhmucsanpham')->name('categories.')->group(function () {

            Route::get('/', [CategoriesController::class, 'index'])->name('index');

            Route::get('/thungrac', [CategoriesController::class, 'trash'])->name('trash');
            Route::post('/search', [CategoriesController::class, 'search'])->name('search');

            Route::get('/themmoi', [CategoriesController::class, 'create'])->name('create');
            Route::post('/themmoi', [CategoriesController::class, 'store'])->name('store');

            Route::get('/capnhat/{id}', [CategoriesController::class, 'edit'])->name('edit');
            Route::post('/capnhat/{id}', [CategoriesController::class, 'update'])->name('update');

            Route::get('/delete/{id}', [CategoriesController::class, 'destroy'])->name('delete');
        });

        //endCategories

        // Route::resource('/categories', CategoriesController::class);

        //PaymentMethods

        Route::prefix('/quanlyphuongthucthanhtoan')->name('payment_methods.')->group(function () {

            Route::get('/', [PaymentMethodsController::class, 'index'])->name('index');

            Route::get('/thungrac', [PaymentMethodsController::class, 'trash'])->name('trash');
            Route::post('/search', [PaymentMethodsController::class, 'search'])->name('search');

            Route::get('/themmoi', [PaymentMethodsController::class, 'create'])->name('create');
            Route::post('/themmoi', [PaymentMethodsController::class, 'store'])->name('store');

            Route::get('/capnhat/{id}', [PaymentMethodsController::class, 'edit'])->name('edit');
            Route::post('/capnhat/{id}', [PaymentMethodsController::class, 'update'])->name('update');

            Route::get('/delete/{id}', [PaymentMethodsController::class, 'destroy'])->name('delete');
        });

        //endPaymentMethods

        // Route::resource('/payment_methods', PaymentMethodsController::class);

        //SlideShows

        Route::prefix('/quanlyslideshow')->name('slideshows.')->group(function () {
            Route::get('/', [SlideShowsController::class, 'index'])->name('index');
            Route::get('/thungrac', [SlideShowsController::class, 'trash'])->name('trash');

            Route::get('/themmoi', [SlideShowsController::class, 'create'])->name('create');
            Route::post('/themmoi', [SlideShowsController::class, 'store'])->name('store');

            Route::get('/capnhat/{id}', [SlideShowsController::class, 'edit'])->name('edit');
            Route::post('/capnhat/{id}', [SlideShowsController::class, 'update'])->name('update');

            Route::get('/delete/{id}', [SlideShowsController::class, 'destroy'])->name('delete');
        });

        //endSlideShows

        // Route::resource('/slideshows', SlideShows::class);

        //Colors

        Route::prefix('/quanlymausac')->name('colors.')->group(function () {

            Route::get('/', [ColorsController::class, 'index'])->name('index');

            Route::get('/thungrac', [ColorsController::class, 'trash'])->name('trash');
            Route::post('/search', [ColorsController::class, 'search'])->name('search');

            Route::get('/themmoi', [ColorsController::class, 'create'])->name('create');
            Route::post('/themmoi', [ColorsController::class, 'store'])->name('store');

            Route::get('/capnhat/{id}', [ColorsController::class, 'edit'])->name('edit');
            Route::post('/capnhat/{id}', [ColorsController::class, 'update'])->name('update');

            Route::get('/delete/{id}', [ColorsController::class, 'destroy'])->name('delete');
        });

        //endColors

        // Route::resource('/colors', ColorsController::class);

        //Sizes

        Route::prefix('/quanlykichco')->name('sizes.')->group(function () {

            Route::get('/', [SizesController::class, 'index'])->name('index');

            Route::get('/thungrac', [SizesController::class, 'trash'])->name('trash');
            Route::post('/search', [SizesController::class, 'search'])->name('search');

            Route::get('/themmoi', [SizesController::class, 'create'])->name('create');
            Route::post('/themmoi', [SizesController::class, 'store'])->name('store');

            Route::get('/capnhat/{id}', [SizesController::class, 'edit'])->name('edit');
            Route::post('/capnhat/{id}', [SizesController::class, 'update'])->name('update');

            Route::get('/delete/{id}', [SizesController::class, 'destroy'])->name('delete');
        });

        //endSizes

        // Route::resource('/sizes', SizesController::class);
    });
});
