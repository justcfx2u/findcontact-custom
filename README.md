# findcontact-custom
findcontact module for custom lookups to backend systems

## Installation
1. Install the package by running this command in your AbuseIO installation folder:
```bash
composer require abuseio/findcontact-custom
```

#### Talking against an API
If you're going to talk against an API, copy the php files from `examples/template` to the `src` and `config` folders like so (from within the AbuseIO installation folder):
```bash
cp vendor/abuseio/findcontact-custom/examples/template/config/Custom.php vendor/abuseio/findcontact-custom/config/
cp vendor/abuseio/findcontact-custom/examples/template/src/Custom.php vendor/abuseio/findcontact-custom/src/
```

Now delete the example folder:
```bash
rm -r vendor/abuseio/findcontact-custom/examples
```

You can now write your own code within the 'getContactBy*' methods.

#### Talking against an Database
If you're going to talk against an Database directly, copy the php files from `examples/postgres` to the `src` and `config` folders like so (from within the AbuseIO installation folder):
```bash
cp vendor/abuseio/findcontact-custom/examples/postgres/config/Custom.php vendor/abuseio/findcontact-custom/config/
cp vendor/abuseio/findcontact-custom/examples/postgres/src/Custom.php vendor/abuseio/findcontact-custom/src/
cp vendor/abuseio/findcontact-custom/examples/postgres/src/CustomServiceProvider.php vendor/abuseio/findcontact-custom/src/
```

Now delete the example folder:
```bash
rm -r vendor/abuseio/findcontact-custom/examples
```

Add the following line to `providers` array in the file config/app.php:
```php
'AbuseIO\FindContact\Custom\CustomServiceProvider'
```

You can now write your own code within the 'getContactBy*' methods.

See Models/Ip4.php for information on setting foreign keys in your database
