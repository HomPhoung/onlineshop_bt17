<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
     protected $fillable = [
    	'vocherno', 'orderdate', 'status', 'note ','total', 'user_id'
    ];

    public function items($value='')
    {
    	return $this->belongsToMany('App\Item','order_detail')
    		->withPivot('qty')
    		->withTimestamps();
    }
    public function user($value='')
    {
    	return $this->belongsTo('App\User');
    }
}
