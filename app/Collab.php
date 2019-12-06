<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collab extends Model
{
        //table name
        protected $table = 'collab';
        //primary key
        public $primarykey = 'id';
        //timestamps
        public $timestamps = true;
        
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function post(){
        return $this->belongsTo('App\Post');
    }
}
