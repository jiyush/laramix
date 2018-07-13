<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The Attribute the are mass assignable
     *
     * @var array
     *
     */
    protected $fillable =[
    	'name', 'desc', 'quantity'
    ];
    /**
     * Define Table Name
     *
     */
    protected $table = "products";
}
