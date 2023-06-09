<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
  use HasFactory;
  protected $fillable = ['nome', 'urlFoto'];

  public function lobbys()
  {
    return $this->hasMany(Lobby::class);
  }

  public function jogadores() 
  {
    return $this->belongsToMany(Jogador::class);
  }
}
