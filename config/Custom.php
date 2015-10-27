<?php

/*
 * Implementation:
 * 1. config/app.php (in providers):
 *    'AbuseIO\FindContact\Custom\CustomServiceProvider'
 * 2. Add the following to where ever you want Contact data to be available:
 *    use AbuseIO\Findcontact\Custom;
 * 3. See Models/Ip4.php for information on setting foreign keys
 *
 * Examples:
 * $customer_email = Findcontact\Custom::getEmailByIp($ticket->ip);
 * $customer_email = Findcontact\Custom::getEmailByDomain($ticket->domain);
 * $customer_ip = Findcontact\Custom::getIpEmail($ticket->email);
 */

/**
 * Here we define our custom data source for our customer data.
 * In this example we use a Postgresql server as source.
 */
return [
    'findcontact-custom' => [
        'driver'   => 'pgsql',
        'host'     => 'source.server.tld',
        'database' => 'abuse_database',
        'username' => 'abuse_user',
        'password' => 'abuse_password',
        'charset'  => 'utf8',
        'prefix'   => '',
        'schema'   => 'public',
    ],
];
