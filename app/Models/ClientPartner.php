<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientPartner extends Model
{
      protected $table = 'clients_partners';
    protected $fillable = ['name', 'logo_path', 'type'];
}
