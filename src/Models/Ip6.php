<?php

namespace AbuseIO\Findcontact\Custom;

use Illuminate\Database\Eloquent\Model;

class Ip6 extends Model
{
    protected $connection = 'findcontact-custom';
    protected $table = 'ip6';
    public $timestamps = false;

    public function email()
    {
        return $this->belongsTo('AbuseIO\Findcontact\Custom\Email');
    }
}
