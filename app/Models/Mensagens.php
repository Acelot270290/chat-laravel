<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensagens extends Model
{
    use HasFactory;

    protected $fillable=[
        'conversar_id',
        'enviados_id',
        'mensagens_lidas',
        'recebidos_id',
        'corpo_mensagem',
        'tipo',
    ];

    //relacionamentos de tabelas

    public function conversar(){
        return $this->belongsTo(Conversas::class);
    }

    public function user(){
        return $this->belongsTo(User::class,'conversar_id');
    }
}
