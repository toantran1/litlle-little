<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderTicket extends Model
{
    protected $table = 'tbl_order_ticket';
    protected $primaryKey = 'order_id';
    protected $fillable =['sId, user_order, email, phone_number, quantity_ticket, package_id, date_use'];
}
