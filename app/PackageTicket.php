<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageTicket extends Model
{
    protected $table = 'tbl_packageticket';
    protected $primaryKey = 'package_id';
    protected $fillable =['package_name, package_code, package_price'];
}
