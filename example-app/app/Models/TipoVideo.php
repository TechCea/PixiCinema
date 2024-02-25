<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoVideo
 *
 * @property $id
 * @property $Nombre
 * @property $Pelicula_id
 * @property $Serie_id
 * @property $Resena_id
 *
 * @property Historial[] $historials
 * @property Pelicula $pelicula
 * @property Resena $resena
 * @property Series $series
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoVideo extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Pelicula_id' => 'required',
		'Serie_id' => 'required',
		'Resena_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Pelicula_id','Serie_id','Resena_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historials()
    {
        return $this->hasMany('App\Models\Historial', 'Tipo_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pelicula()
    {
        return $this->hasOne('App\Models\Pelicula', 'id', 'Pelicula_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function resena()
    {
        return $this->hasOne('App\Models\Resena', 'id', 'Resena_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function series()
    {
        return $this->hasOne('App\Models\Series', 'id', 'Serie_id');
    }
    

}
