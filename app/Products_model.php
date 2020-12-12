<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products_model extends Model
{
    protected $table="products";
    protected $primaryKey= 'id';
    protected $fillable =['pro_name','pro_code','pro_price','pro_info','image','spl_price','category_id' ,'stock'];
}
