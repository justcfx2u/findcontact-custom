# findcontact-custom
findcontact module for custom lookups to backend systems

## Installation
1. Add to following Provider in app.php:
```php
'AbuseIO\FindContact\Custom\CustomServiceProvider'
```
2. Add the following to where ever you want Contact data to be available:
```php
use AbuseIO\Findcontact\Custom;
```
3. See Models/Ip4.php for information on setting foreign keys in your database
