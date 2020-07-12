<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    protected $fillable = ['img_filename',  'body'];
    
    public function author() { // users
        return $this->belongsTo(User::class, 'user_id');// "select * from articles where  user_id= 1"
    }

    public function categories() {
        
        return $this->belongsToMany(Category::class); // many to many relation (tags can have many articles and acrticles can have many tags)
    }

    
}
