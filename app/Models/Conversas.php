<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversas extends Model
{
    use HasFactory;

    protected $fillable=[
        
        'enviados_id',
        'recebidos_id',
        'ultima_mensagem',
    ];

    public function mensagens(){
        return $this->belongsTo(Mensagens::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
