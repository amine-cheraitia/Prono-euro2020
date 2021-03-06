<?php

namespace App\Models;

use App\Models\Groupe;
use App\Models\Matche;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Equipe extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function groupe()
    {
        return $this->belongsTo(Groupe::class);
    }

    public function matchesDs()
    {
        return $this->hasMany(Matche::class, 'equipeD_id', 'id');
    }

    public function matchesEs()
    {
        return $this->hasMany(Matche::class, 'equipeE_id', 'id');
    }



    /*public function matches()
    {
        return $this->belongsToMany(Matche::class, 'equipe_matche', 'equipe_id', 'matche_id');
    }

    |----------------------------------------------------------------------------------------------------
    |mutator
    |----------------------------------------------------------------------------------------------------
    */
}