<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stokbuku extends Model
{
    protected $table = 'stokbuku';

      public function buku()
      {
          return $this->belongsTo('App\Listbuku');
      }

      public function penerbit()
      {
          return $this->belongsTo('App\Listpenerbit');
      }
}
