<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Fabricante extends Model{

    protected $table = 'fabricantes';
    
    protected $fillable = ['nombre', 'telefono'];
    protected $hidden = ['created_at', 'updated_at'];
     /**
     * Get the vehiculos for the fabricante post.
     */
    public function vehiculos(){
        //Relacion de uno a muchos
        return $this->hasMany('App\Vehiculo');
    }
    
}