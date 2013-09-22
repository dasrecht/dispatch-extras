Dispatch Extras
===============
In favor of keeping the dispatch core as small as possible some rarely used functions are moved to dispatch-extras.

## Requirement
Dispatch-Extras require at least **PHP 5.4** to work.

In order to have caching and encryption working properly there need to be following modules loaded:

  - apc.so
  - apcu.so
  - mcrypt.so

## Installation
To install using `composer`, have the following lines in your `composer.json` file.

```javascript
{
  "require": {
    "php": ">= 5.4.0",
    ...
    "dispatch/dispatch-extras": "1.0.0",
  }
}
```

Then do a `composer install` or `composer update` to install the package.

If you don't use `composer`, just download and include `dispatch.php` directly in
your application.

Note that Dispatch functions are all loaded into the global namespace.
## Function Catalog
Below a list of functions provided by Dispatch-Extras.

```php
<?php

// logging  
function debug($message)  

// caching  
function cache($key, $func, $ttl = 0)  
function cache_invalidate()  
  
// base64  
function to_b64($str)  
function from_b64($str)  
  
// encryption  
function encrypt($decoded, $algo = MCRYPT_RIJNDAEL_256, $mode = MCRYPT_MODE_CBC)  
function decrypt($encoded, $algo = MCRYPT_RIJNDAEL_256, $mode = MCRYPT_MODE_CBC)  
?>
```

## About the Author

Dispatch and Dispatch Extra is originally written by [Jesus A. Domingo].

[Jesus A. Domingo]: http://noodlehaus.github.io/

## Credits and Contributors

Thanks to the following contributors for helping improve this tool :)

* Bastian Widmer [dasrecht](https://github.com/dasrecht)

## LICENSE
MIT <http://noodlehaus.mit-license.org/>
