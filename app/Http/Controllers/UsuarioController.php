<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Hash;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function index(Request $request)
    {
        $dados = $request->all();

        $usuarios = $this->filtro($request);
        return view('usuario.index', compact('usuarios'));
    }

    public function filtro($request)
    {
        $usuarios = Usuario::where(function ($query) use ($request) {
            if ($request) {
                if ($request->nome) {
                    $query->where('nome', 'LIKE', "%{$request->nome}%");
                }
                if ($request->email) {
                    $query->where('email', 'LIKE', "%{$request->nome}%");
                }
            }
        })->get();

        return $usuarios;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $mensagem = new MensagemController;
        try {

            $data = [
                'nome' => $request->nome,
                'email' => $request->email,
                'senha' => Hash::make($request->senha),
            ];

            $usuario_id = Usuario::create($data)->id;

            return $mensagem->sucessoStore($usuario_id);

        } catch (\Exception $e) {
            return $mensagem->mensagemErro($e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $mensagem = new MensagemController;
            $usuario = Usuario::find($id);
            if($usuario->senha){
                $usuario->update([
                    'nome' => $request->nome,
                    'email' => $request->email,
                    'senha' => Hash::make($request->senha),
                ]);
            }else{
                $usuario->update([
                    'nome' => $request->nome,
                    'email' => $request->email
                ]);

            }
            return $mensagem->sucessoUpdate();

        } catch (\Exception $e) {
            return $mensagem->mensagemErro($e->getMessage());
        }
    }

    public function destroy($id, Request $request)
    {
        $mensagem = new MensagemController;

        try {
            $usuario = Usuario::find($id);
            $usuario->delete();

            return $mensagem->sucessoDestroy();

        } catch (\Exception $e) {

            return $mensagem->mensagemDeleteErro();
        }
    }
}
