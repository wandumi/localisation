# Using Localisation in Laravel 8

# Overview

The folder includes laravel files that has been configured to use Localisation. which means adapting said internationalized applications to a specific language through translation. The languages used in this project is 
English and German. 

# Requirement

-Laravel 8

-PHP Version 7.3.27 and above

-Mysql 

# Installation / Implementation

There are two way to use the language, in this file PHP type of was used to create the translation of the file. All this file/folders are stored in the __resources/lang__ folder where mostly the default language translation is located (en - English ).

-Create the folder, with the name of the language you want to be translate to, mostly use shortcut of that language
 for example, de - deutch (german), es - spanish and etc in the lang folder 

-Create the file name that translate the specicif page. page names are often used to create these page names. for example, if you want to translate __Homepage__ of the website, you can create __Home.php__ as the name. Always remember that, the file created in the folder of the language should also be created in the language your translating from, in this case from __EN__ to __DE__ means you have to create Home.php in __en__ folder and __de__ folder.

-In those files __home.php__ , create open the php code and the return array in it. Laravel understand this logic, if it is not specified nothing will work. eg

                <?php

                    return [

                    ];


-When the file is created and the structure is done __like above__, the translation of words starts, for example. On my home page there is a register and login on my navigation bar, The words to be translated are the __keys__ and the translated word is the value. The pantuation of the words is very important when doing localisation, so the word `name` is different from `Name`.

                <?php

                    return [
                        `Name` => `Name`,
                        `Password` => `Passwort`
                    ]

-After the above files and folders are created, its time to create links. These links should be placed in the __routes/web.php__ fole in the routes web page. 


                Route::redirect('/', '/en'); // fallback route

                Route::group(['prefix' => '{language}'], function(){ 

                    Route::get('/', function () {
                        
                        return view('welcome');
                    });
                    
                    Route::get('/dashboard', function () {
                        return view('dashboard');
                    })->middleware(['auth'])->name('dashboard');
                    
                    require __DIR__.'/auth.php';
                    
                });

-The first line is the Fallback Route that adds the shortname of the localisation standard shortcut name for the language. In this case, the defalt is English that is why its __en__, the second route is route that prefix the links so that it adds to the end of the link eg. 

                -[localhost/en/login](http://127.0.0.1:8000/en/login) 

                -[localhost/de/login](http://127.0.0.1:8000/en/login) 

-When all this are done, Middleware is on of the features that is added to have a source of truth, instead of creating the login in the __web.php__. The artisan command is used create the middleware, 

                php artisan make:middleware nameofthemiddleware

-It creates the file in the middleware folder that is found in the __app\Http\Middleware\nameofthemiddleware__, and register it in the __App\Http\kenel__ and search for 

                protected $middlewareGroup [
                    \App\Http\Middleware\nameofthemiddleware::class,
                ]

-In the file, you can add __App::setLocale($request->language);__ the request language is the file that comes from the url. Note the name of the request should match.

__USAGE__

-The last section is to add the code to the views, Laravel provides two ways of adding the localisation,
    -Using the __@lang()__ method
    -and ( __() ) combination



                <p>{{ @lang(home.Name) }}</p>
                <p>{{ __(home.Name) }}</p>

Which means, call the home.php file and search for the word __Name__ and translate to the language set 

__COMPANY LOGO__

![Growmytree Logo](https://github.com/wandumi/localisation/blob/assets/growtwo.png)

-am trying this



__CREDITS__

-Laravel Documentation (https://laravel.com/docs/8.x/localization)

-Markdown (https://www.markdownguide.org/basic-syntax/)

-Localise (https://lokalise.com/blog/implementing-php-localization-complete-guide/)
