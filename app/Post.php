<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    //Table Name
    protected $table='posts';
    //primary_key
    public $primarykey='id';
    //timestamps
    public $timestamps=true;

    public function user()
    {
    	# code...
    	return $this->belongsTo('App\User');
    }
    
}
