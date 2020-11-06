<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    //
    protected $fillable = [
        'namePeople','phonePeople','usernamePeople','passwordPeople','EmailPeople','statusPeople'    ];
}
