
https://phpunit.readthedocs.io/en/8.0/writing-tests-for-phpunit.html  
  
#Day 1 - Writing test for phpunit  
  
* Installation  
	```bash
	$composer require --dev phpunit/phpunit ^8.0
	```  
  
* Importing `TestCase` class from `PHPUnit\Framework\TestCase;`  
  
* Using `@depends` annotation  
  
* Using `@dataProvider` annotation  
  
* Using together `@depends` and `@dataProvider`  
	```php  
	$this->assertSame(['provider1', 'first', 'second'],func_get_args()); 
	```  
* Testing exception  
	```php
	$this->expectException(Error::class);  
	include 'anything.php';  
	```  
  
# Day 2 - CLI Test Runner  
  
* 
	```bash
	$phpunit -v yourTestClassName   
	```
*
	```bash
	$phpunit --testdox yourTestClassName   
	```
