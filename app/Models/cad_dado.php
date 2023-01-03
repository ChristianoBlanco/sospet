<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cad_dado extends Model
{
    use HasFactory;

    protected $table = "cad_dados";

    protected $fillable = [
    "id_log_usuario",
    "nome",
    "sobrenome",
    "cpf",
    "tel1",
    "tel2",
    "email",
    "endereco",
    "cidade",
    "uf"
    ];



    /* App\Models\cad_dado::create(["id_log_usuario"=>"1","nome"=>"Christiano","sobrenome"=>"Blanco","cpf"=>"08299921208","tel1"=>"21999999999","tel2"=>"21888888888","email"=>"christiano.blanco@hotmail.com","endereco"=>"Rua do teste 1234","cidade"=>"Rio de Janeiro","uf"=>"RJ"]); */
}
