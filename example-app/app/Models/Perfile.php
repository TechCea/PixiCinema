<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Perfile
 *
 * @property $id
 * @property $TipoPerfil
 * @property $NombrePerfil
 * @property $Usuario_id
 * @property $id_Lista
 * @property $Resena_id
 * @property $Imagen
 *
 * @property Historial[] $historials
 * @property ListaRep $listaRep
 * @property Resena $resena
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Perfile extends Model
{
    
    static $rules = [
		'TipoPerfil' => 'required',
		'NombrePerfil' => 'required',
		'Usuario_id' => 'required',
		'id_Lista' => 'required',
		'Resena_id' => 'required',
		'Imagen' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['TipoPerfil','NombrePerfil','Usuario_id','id_Lista','Resena_id','Imagen'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historials()
    {
        return $this->hasMany('App\Models\Historial', 'Perfil_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function listaRep()
    {
        return $this->hasOne('App\Models\ListaRep', 'id', 'id_Lista');
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
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'Usuario_id');
    }
    

}
