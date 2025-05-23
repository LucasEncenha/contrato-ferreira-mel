<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DadosLocador extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'dl_cod';
    protected $table = "dados_locadors";

    protected $fillable = [
        'dl_valor',
        'dl_valor_comprometido',
        'dl_data_entrada',
        'dl_data_saida',
        'dl_hora_entrada',
        'dl_hora_saida'
    ];

    protected $casts = [
        'dl_data_entrada' => 'datetime',
        'dl_data_saida' => 'datetime',
    ];
}
