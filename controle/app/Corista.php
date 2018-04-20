<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corista extends Model
{

    protected $fillable = [
        'joined_at',
        'naipe'
    ];

    public function pessoas()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa_id');
    }

    public function naipe()
    {
        return $this->hasOne(Naipe::class);
    }
}
