<?php

namespace AbuseIO\Findcontact\Custom;

use Illuminate\Database\Eloquent\Model;

class Ip4 extends Model
{
    protected $connection = 'findcontact-custom';
    protected $table = 'ip4';
    public $timestamps = false;

    public function email()
    {
        /**
         * This will look for an email address that is related to the given ip.
         * Eloquent assumes the forgein key is based on the model name (Email).
         * In this case, that would be 'email_id'. You can override this convention
         * by passing a second argument (as shown in the example below).
         * Additionally, Eloquent assumes the fk to have it's value matching the id
         * of the parent (Email) model. You can override this convention by passing
         * a third argument.
         * By default it will match ip4.email_id with email.id
         *
         * Example:
         * 1. My ip4 table has a foreign key column named 'fk_email'
         * 2. My email table has a key field column named 'email_id'
         *
         * This will result in this call:
         * return $this->belongsTo('AbuseIO\Findcontact\Custom\Email', 'fk_email', 'email_id');
         *
         * and results in this match:
         * ip4.fk_email == email.email_id
         */
        return $this->belongsTo('AbuseIO\Findcontact\Custom\Email');
    }
}
