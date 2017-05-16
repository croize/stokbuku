<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listbuku extends Model
{
    protected $table = 'buku';

    public function stokbuku()
    {
      return $this->hasMany('App\Stokbuku');
    }

}
