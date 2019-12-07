<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Event extends Model
{
    protected $table = 'event_sale';
    protected $fillable = [
    	'title','icon',
    	'url','children','level','path','parent'
    ];
    
}