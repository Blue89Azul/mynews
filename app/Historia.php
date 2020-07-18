<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historia extends Model
{
    protected $guarded = array('id');
    //idへの値の代入を防ぐ
    public static $rules = array(
        'profile_id' => 'required',
        'edited_at' => 'required',
        );
}
