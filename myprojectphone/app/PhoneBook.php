<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneBook extends Model
{
    //
    public $table = 'phonebook';
    public   $primaryKey = 'Pid';
    public $incrementing = true;
}
