<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PendaftaranEvent extends Model
{
    protected $fillable = ['id_event', 'id_user', 'tanggal_daftar', 'status_daftar'];
}
