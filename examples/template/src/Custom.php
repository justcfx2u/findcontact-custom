<?php

namespace AbuseIO\FindContact;

use AbuseIO\Models\Contact;

/**
 * TEMPLATE FILE!
 * You will need to fill in all these functions and activate this module in the configuration.
 * In the Examples dir you can find a few examples.
 *
 * The return should be either FALSE (not found) or a valid Contact object.
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
     * @return object       Returns contact object or false.
     */
    public function getContactByIp($ip)
    {
        return false;
    }

    /**
     * Get the email address registered for this domain.
     * @param  string $ip   Domain name
     * @return object       Returns contact object or false.
     */
    public function getContactByDomain($domain)
    {
        return false;
    }

    /**
     * Get the email address registered for this ip.
     * @param  string $id   ID/Contact reference
     * @return object       Returns contact object or false.
     */
    public function getContactById($id)
    {
        return false;
    }
}
