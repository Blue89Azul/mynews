<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'your_name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'selfIntro' => 'required',
        );
    
    public function histories()
    {
        return $this->hasMany('App\ProfileHistory');
    }
}
