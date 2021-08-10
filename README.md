# Using Localisation in Laravel 8

# Overview

The folder includes laravel files that has been configured to use Localisation. which means adapting said internationalized applications to a specific language through translation. The languages used in this project is 
English and German. 

# Requirement

-Laravel 8
-PHP Version 7.3.27 and above
-Mysql 

# Installation

There are two way to use the language, in this file PHP type of was used to create the translation of the file. All this file/folders are stored in the __resources/lang__ folder where mostly the default language translation is located (en - English ).

-Create the folder, with the name of the language you want to be translate to, mostly use shortcut of that language
 for example, de - deutch (german), es - spanish and etc in the lang folder 

-Create the file name that translate the specicif page. page names are often used to create these page names. for example, if you want to translate __Homepage__ of the website, you can create __Home.php__ as the name. Always remember that, the file created in the folder of the language should also be created in the language your translating from, in this case from __EN__ to __DE__ means you have to create Home.php in __en__ folder and __de__ folder.

-In those files __home.php__ , create open the php code and the return array in it. Laravel understand this logic, if it is not specified nothing will work. eg

                <?php

                    return [

                    ];


-When the file is created and the structure is done __like above__, the translation of words starts, for example. On my home page there is a register and login on my navigation bar, The words to be translated are the __keys__ and the translated word is the value. The pantuation of the words is very important when doing localisation, if the word `name` is different from `Name`. So take note.

                <?php

                    return [
                        `Name` => `Name`,
                        `Password` => `Passwort`
                    ]



