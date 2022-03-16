<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'tbl_contact';
    protected $primaryKey = 'Cusid';
    protected $fillable =['cusName, email, phone, address, message'];
}
