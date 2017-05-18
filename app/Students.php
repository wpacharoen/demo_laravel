<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Users;

class Students extends Model
{
  protected $table = 'students';
  protected $fillable = ['id','email','year','student_code'];
  public function users()
  {
    $this->belongsTo(Users::class);
  }
}
