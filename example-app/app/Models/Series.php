<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Series
 *
 * @property $id
 * @property $Titulo_Serie
 * @property $N_Temporada
 * @property $N_Episodios
 * @property $Descripcion
 * @property $Ano_Lanzamiento
 * @property $Clasificacion
 * @property $Imagen
 * @property $URL
 *
 * @property Categoria[] $categorias
 * @property TipoVideo[] $tipoVideos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Series extends Model
{
    
    static $rules = [
		'Titulo_Serie' => 'required',
		'N_Temporada' => 'required',
		'N_Episodios' => 'required',
		'Descripcion' => 'required',
		'Ano_Lanzamiento' => 'required',
		'Clasificacion' => 'required',
		'Imagen' => 'required',
		'URL' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Titulo_Serie','N_Temporada','N_Episodios','Descripcion','Ano_Lanzamiento','Clasificacion','Imagen','URL'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categorias()
    {
        return $this->hasMany('App\Models\Categoria', 'Serie_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tipoVideos()
    {
        return $this->hasMany('App\Models\TipoVideo', 'Serie_id', 'id');
    }
    

}
