<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'name', 'email','address','password',
        'phone_number','gender','rate_star',
        'role'
    ];


    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
}

?>

