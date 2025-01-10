<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensagemController extends Controller
{
    public function sucessoStore($id)
    {
        return response()->json([
            'message' => 'Registro criado com sucesso',
            'id' => $id,
            'success' => true
        ]);
    }
    public function sucessoUpdate()
    {
        return response()->json([
            'message' => 'Registro editado com sucesso.',
            'success' => true
        ]);
    }
    public function sucessoDestroy()
    {
        return response()->json([
            'message' => 'Registro excluido com sucesso.',
            'success' => true
        ]);
    }
    public function mensagemDeleteErro()
    {
        return response()->json([
            'message' => 'O registro não pode ser excluído. Entre em contato com a DTI.',
            'success' => false
        ]);
    }

    public function mensagemErro($erro)
    {
        return response()->json([
            'message' => $erro,
            'success' => false
        ]);
    }
}
