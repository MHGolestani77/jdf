# jdf
JDF Library for Laravel

## Installation
In the require key of composer.json file add the following
```
"require": {
    "mhgolestani77/jdf": "*"
}
```

Run the Composer update command
```
$ composer update
```

In your config/app.php add 'MHGolestani77\jdf\jdfServiceProvider' to the end of the $providers array

```
    'providers' => array(

        'Illuminate\Foundation\Providers\ArtisanServiceProvider',
        'Illuminate\Auth\AuthServiceProvider',
        ...
        'MHGolestani77\Jdf\JdfServiceProvider',

    ),

```