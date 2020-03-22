<p align="center"><img src="https://res.cloudinary.com/auxe/image/upload/v1584899634/auxeBlack220x51_gqqucy.png"></p>

### Changes made to original installation

1.In the file app\Providers\RouteServiceProvider.php
```
before: public const HOME = '/home';
```
```
after: public const HOME = '/admin';
```

2.In the file: routes\web.php
```
before: Route::get('/home', 'HomeController@index')->name('home');
```
```
afrer Route::get('/admin', 'HomeController@index')->name('admin');
```