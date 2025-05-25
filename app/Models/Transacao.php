<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transacao extends Model
{
    use HasFactory;
    protected $table = "transacao";
    protected $fillable = ['tipo', 'categoria', 'valor', 'descricao', 'data'];
    public $timestamp = false;
}
