# Scabbia Skeleton Application

[This project](https://github.com/larukedi/Scabbia-Skeleton/) is the skeleton application using [Scabbia Framework](http://larukedi.github.com/Scabbia-Framework/) and its extensions. It is designed to helps you to jump-start developing projects with the Scabbia without setting up a configuration from scratch.


## Installation

**Step 1:**

On Terminal or Command Prompt:
``` bash
git clone https://github.com/larukedi/Scabbia-Skeleton project
```

Alternatively [PM](https://github.com/larukedi/Scabbia-Skeleton/archive/master.zip) package can be downloaded directly.

**Step 2:**

``` bash
cd project
php scabbia update
```

**Step 3:**

Make `application/writable` and `application/locale` directories writable.

``` bash
chmod 0777 -R application/writable
chmod 0777 -R application/locale
```

**Step 4:**

Open `application/config/datasources.json` file to update the database configuration parameters.

a sample mysql database configuration:
```json
{
    "datasourceList": [
        {
            "id":           "dbconn",
            "interface":    "pdo",
            "persistent":   true,
            "overrideCase": "natural",
            "pdoString":    "mysql:host=localhost;dbname=project",
            "username":     "root",
            "password":     "123456",
            "initCommand":  "SET NAMES utf8",
            "errors":       "exception"
        }
    ]
}
```


## Requirements
* PHP 5.3.3+ (http://www.php.net/)
* Composer Dependency Manager** (http://getcomposer.org/)
* Scabbia Framework** (http://larukedi.github.com/Scabbia-Framework/)

** Will be auto-installed during composer execution


## Links
* [License Information](LICENSE)


## Contributing
It is publicly open for any contribution. Bugfixes, new features and extra modules are welcome.

* To contribute to code: Fork the repo, push your changes to your fork, and submit a pull request.
* To report a bug: If something does not work, please report it using GitHub issues.
* To support: [![Donate](https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=BXNMWG56V6LYS)