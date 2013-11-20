README
======

[This project](https://github.com/larukedi/Scabbia-Skeleton/) is the skeleton application using [Scabbia Framework](http://larukedi.github.com/Scabbia-Framework/) and its extensions. It is designed to helps you to jump-start developing projects with the Scabbia without setting up a configuration from scratch.


Installation
------------
##### Alternative 1: Zip Package #####

Download [Skeleton Application](https://github.com/larukedi/Scabbia-Skeleton/archive/master.zip) and launch `php scabbia update`.

##### Alternative 2: Git #####

On Terminal or Command Prompt:
``` bash
git clone https://github.com/larukedi/Scabbia-Skeleton project
cd project
php scabbia update
```

##### Alternative 3: Composer #####

On *nix:
``` bash
php -r "eval('?>'.file_get_contents('https://getcomposer.org/installer'));"
php composer.phar create-project larukedi/scabbia-skeleton -s dev project
```

On Windows:
Download and install [Composer-Setup.exe](http://getcomposer.org/Composer-Setup.exe) then run:
``` bat
composer create-project larukedi/scabbia-skeleton -s dev project
```


Update
------
``` bash
php scabbia update
```


Requirements
------------
* PHP 5.3.3+ (http://www.php.net/)
* Composer Dependency Manager** (http://getcomposer.org/)
* Scabbia Framework** (http://larukedi.github.com/Scabbia-Framework/)

** Will be auto-installed during composer execution


License
-------
See [license.txt](license.txt)


Contributing
------------
It is publicly open for any contribution. Bugfixes and suggestions are welcome.

* Fork the repo, push your changes to your fork, and submit a pull request.
* If something does not work, please report it using GitHub issues.
