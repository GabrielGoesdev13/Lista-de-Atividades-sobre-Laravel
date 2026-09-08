<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'curso',
        'data_nascimento',
    ];

    public static function porCurso($curso)
    {
        return self::where('curso', $curso)->get();
    }

    public static function comNomeContendo($palavra)
    {
        return self::where('nome', 'like', '%' . $palavra . '%')->get();
    }

    public static function cadastradosRecentemente()
    {
        return self::orderBy('created_at', 'desc')->take(10)->get();
    }

    public static function quantidadeTotal()
    {
        return self::count();
    }
}
