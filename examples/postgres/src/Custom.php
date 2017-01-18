<?php

namespace AbuseIO\FindContact;

use AbuseIO\Findcontact\Custom\Ip4;
use AbuseIO\Findcontact\Custom\Email;
use AbuseIO\Findcontact\Custom\Domain;
use Config;

/**
 *  EXPERIMENTAL CODE!
 * Todo: Retrun ipv4 and v6 when asked for it
 */

class Custom
{
    /**
     * Create a new Findcontact instance
     */
    public function __construct()
    {
    }

    /**
     * Get the email address registered for this ip.
     * @param  string $ip   IPv4 Address
     * @return mixed        Returns email address. If not found, FALSE.
     */
    public static function getContactByIp($ipAddress)
    {
        Config::set('database.connections.findcontact-custom', config('Findcontact.findcontact-custom'));
        if (checkIp6($ipAddress)) {
            $ip = Ip6::where('address', $ipAddress)->first();
        } elseif (checkIp4($ipAddress)) {
            $ip = Ip4::where('address', $ipAddress)->first();
        }

        if ($ip != null) {
            return $ip->email()->first()->address;
        }

        return false;
    }

    /**
     * Get the email address registered for this domain.
     * @param  string $ip   Domain name
     * @return mixed        Returns email address. If not found, FALSE.
     */
    public static function getContactByDomain($domainName)
    {
        Config::set('database.connections.findcontact-custom', config('Findcontact.findcontact-custom'));
        $domain = Domain::where('domain', $domainName)->first();
        if ($domain != null) {
            return $domain->email()->first()->address;
        }

        return false;
    }

    /**
     * Get the ip registered for this email address.
     * @param  string $email    Email Address
     * @return mixed            Returns the ip. If not found, FALSE.
     */
    public static function getIpByEmail($emailAddress)
    {
        Config::set('database.connections.findcontact-custom', config('Findcontact.custom-findcontact'));
        $email = Email::where('address', $emailAddress)->first();
        if ($email != null) {
            return [$email->ip4()->first()->address, $email->ip6()->first()->address];
        }

        return false;
    }
}
