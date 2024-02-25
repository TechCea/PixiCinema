<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ListaRep
 *
 * @property $id
 * @property $Nombre_lista
 *
 * @property Perfile[] $perfiles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ListaRep extends Model
{
    
    static $rules = [
		'Nombre_lista' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre_lista'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function perfiles()
    {
        return $this->hasMany('App\Models\Perfile', 'id_Lista', 'id');
    }
    

}
