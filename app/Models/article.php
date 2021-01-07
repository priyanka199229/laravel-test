<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;
    // protected $table "articles";

    protected $fillable = ['title','articledetail'];


   //  //insert data
   // public function createData($input)
   //  {
   //  	return static::create(array_only($input,$this->fillable));
   //  }

}
