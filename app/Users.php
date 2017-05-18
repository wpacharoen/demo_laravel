<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Teachers;
use App\Students;

class Users extends Model
{
  protected $table = 'users';
  protected $fillable = ['id','name','last_name','email','password','faculty','contact','latutude','longtitude'];

  public function getFullnameAttribute(){
    return $this->name . " ". $this->last_name;
  }
  // public function teachers()
  // {
  //   return $this->hasOne(Teachers::class);
  // }
  public function students()
  {
    return $this->hasOne(Student::class);
  }
}
