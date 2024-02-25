<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Historial
 *
 * @property $id
 * @property $Fecha_Visualisacion
 * @property $Perfil_id
 * @property $Tipo_id
 *
 * @property Perfile $perfile
 * @property TipoVideo $tipoVideo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Historial extends Model
{
    
    static $rules = [
		'Fecha_Visualisacion' => 'required',
		'Perfil_id' => 'required',
		'Tipo_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Fecha_Visualisacion','Perfil_id','Tipo_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function perfile()
    {
        return $this->hasOne('App\Models\Perfile', 'id', 'Perfil_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoVideo()
    {
        return $this->hasOne('App\Models\TipoVideo', 'id', 'Tipo_id');
    }
    

}
