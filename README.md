# laravel-response-json-snake-case

Convert response JSON key to snake_case.

## Usage

**In controller class**

```php
return response()->json($model);
// => ['user_name' => 'foo', 'user_key' => 'bar', ...]
```

## Requirements

- Laravel 5.7+

## Install 

```bash
# Laravel 5.7+
$ composer require 'thgiang/laravel-response-json-snake-case'
```

Add the service provider.

**config/app.php**

```php
'provider' => [
	// default providers
	// ...
	
	THGiang\LaravelSnakeCaseJson\SnakeCaseJsonResponseServiceProvider::class,
],
```
