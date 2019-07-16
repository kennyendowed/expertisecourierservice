<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['id','product_id','title','body','fafa','time'];

}
