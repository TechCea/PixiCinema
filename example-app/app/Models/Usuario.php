<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $Nombre
 * @property $Correo
 * @property $Contrasena
 * @property $FechaRegistros
 *
 * @property Perfile[] $perfiles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Correo' => 'required',
		'Contrasena' => 'required',
		'FechaRegistros' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Correo','Contrasena','FechaRegistros'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function perfiles()
    {
        return $this->hasMany('App\Models\Perfile', 'Usuario_id', 'id');
    }
    

}
