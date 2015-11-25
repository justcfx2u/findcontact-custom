<?php

namespace AbuseIO\Findcontact\Custom;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $connection = 'findcontact-custom';
    protected $table = 'email';
    public $timestamps = false;

    public function ip4()
    {
        return $this->hasMany('AbuseIO\Findcontact\Custom\Ip4');
    }

    public function ip6()
    {
        return $this->hasMany('AbuseIO\Findcontact\Custom\Ip6');
    }

    public function domain()
    {
        return $this->hasMany('AbuseIO\Findcontact\Custom\Domain');
    }
}
