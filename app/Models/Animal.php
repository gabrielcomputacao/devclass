<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Animal extends Model
{
    use HasFactory, Notifiable;

    public $timestamps = false;

    public function getAllAnimals()
    {
        // = all é uma metodo estatico por isso da certo usar o self
        return self::all();


        //= Faz duas consultas uma traz os animais e outra traz os users relacionados
        // return self::with('user')->get();
    }


    public function user()
    {
        // = belongTo nao é estatica e nao daria certo usar com self
        return  $this->belongsTo(User::class);
    }
}
