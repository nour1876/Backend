<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    protected $fillable=['poids', 'port_depart', 'port_arrive', 'time_depart','time_arrive' ];
    protected $primaryKey='container_id';
    protected $table='containers';
    public $timestamps= false;



}
