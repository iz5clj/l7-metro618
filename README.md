<p align="center"><img src="https://res.cloudinary.com/auxe/image/upload/v1584899634/auxeBlack220x51_gqqucy.png"></p>

### Changes made to original installation

1. In the file `app\Providers\RouteServiceProvider.php`  
Before: ` public const HOME = '/home';`  
Afer: `public const HOME = '/admin';`
2. In the file: `routes\web.php`  
Before: `Route::get('/home', 'HomeController@index')->name('home');`  
After: `Route::get('/admin', 'HomeController@index')->name('admin');`

