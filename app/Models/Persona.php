<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $fillable = [
        'cedula',
        'apellido1',
        'apellido2',
        'nombre',
        'email',
        'telefono'  
    ]; 

    public function add($user){
        return $this->members()->save($user);


    }

    public function members(){
       return  $this->hasMany(User::class);
    }

    public function count(){

        return $this->members->count();

    }


}
