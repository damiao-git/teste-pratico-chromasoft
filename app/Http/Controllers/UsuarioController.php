<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioValidator;
use App\Models\Usuario;
use Hash;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function index(Request $request)
    {
        $dados = $request->all();

        $usuarios = $this->filtro($request);
        return view('usuario.index', compact('usuarios', 'dados'));
    }

    public function filtro($request)
    {
        $usuarios = Usuario::where(function ($query) use ($request) {
            if ($request) {
                if ($request->nome) {
                    $query->where('nome', 'LIKE', "%{$request->nome}%");
                }
                if ($request->email) {
                    $query->where('email', 'LIKE', "%{$request->email}%");
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
            $request->validate([
                "nome" => "required|min:3|max:100",
                "email" => "required|min:3|max:100|email|unique:usuarios,email",
            ], [
                "required" => "O campo :attribute é obrigatório!",
                "min" => "O campo :attribute precisa conter no minimo 3 caracteres!",
                "max" => "O campo :attribute precisa conter no maximo 100 caracteres!",
                "email.email" => "Digite um email válido!",
                "email.unique" => "Email já cadastrado no banco de dados"
            ]);
            $data = [
                'nome' => $request->nome,
                'email' => $request->email,
                'senha' => Hash::make($request->senha),
            ];

            $usuario_id = Usuario::create($data)->id;

            return $mensagem->sucessoStore($usuario_id);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return $mensagem->mensagemErro($e->errors());
        } catch (\Exception $e) {
            return $mensagem->mensagemErro($e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $mensagem = new MensagemController;
            $id = $request->id; // Supondo que o ID vem no request

            $request->validate([
                "nome" => "required|min:3|max:100",
                "email" => "required|min:3|max:100|email|unique:usuarios,email," . $id,
            ], [
                "required" => "O campo :attribute é obrigatório!",
                "min" => "O campo :attribute precisa conter no minimo 3 caracteres!",
                "max" => "O campo :attribute precisa conter no maximo 100 caracteres!",
                "email.email" => "Digite um email válido!",
                "email.unique" => "Email já cadastrado no banco de dados"
            ]);

            $data = [
                'nome' => $request->nome,
                'email' => $request->email,
            ];

            // Se a senha foi enviada, atualiza com a nova senha
            if ($request->filled('senha')) {
                $data['senha'] = Hash::make($request->senha);
            }

            // Atualiza o usuário
            $usuario = Usuario::findOrFail($id);
            $usuario->update($data);

            return $mensagem->sucessoUpdate();

        } catch (\Illuminate\Validation\ValidationException $e) {
            return $mensagem->mensagemErro($e->errors());
        } catch (\Exception $e) {
            return $mensagem->mensagemErro($e->getMessage());
        }
    }

    public function destroy($id)
    {
        // dd($id);
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
