<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listpenerbit extends Model
{

  protected $table = 'penerbit';

  public function stokbuku()
  {
    return $this->hasMany('App\Stokbuku');
  }
}
