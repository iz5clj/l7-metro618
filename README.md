<p align="center"><img src="https://res.cloudinary.com/auxe/image/upload/v1584726683/1865_Logo_noFX__lp7fu4.png" width="100"></p>

## About 1865 in Florence

## Changes made to original installation

in the file app\Providers\RouteServiceProvider.php
```
before: public const HOME = '/home';
```
```
after: public const HOME = '/admin';
```

in the file: routes\web.php
```
before: Route::get('/home', 'HomeController@index')->name('home');
```
```
afrer Route::get('/admin', 'HomeController@index')->name('admin');
```