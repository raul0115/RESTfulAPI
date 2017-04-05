<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Vehiculo extends Model{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'vehiculos';
    /**
     * The primary key for the model. Por defecto es incremental
     *
     * @var string
     */
    protected $primaryKey = 'serie';

    /**
     * Atributos que pueden ser agregados de forma masiva.
     *
     * @var array
     */
    protected $fillable = ['color', 'cilindraje', 'potencia','peso','fabricante_id'];

    /**
     * Get the fabricante that owns the vehiculo.
     */
    public function fabricante()
    {
        return $this->belongsTo('Fabricante');
    }
}