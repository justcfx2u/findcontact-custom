<?php

namespace AbuseIO\Findcontact\Custom;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected $connection = 'findcontact-custom';
    protected $table = 'domain';
    public $timestamps = false;

    public function email()
    {
        return $this->belongsTo('AbuseIO\Findcontact\Custom\Email');
    }
}
