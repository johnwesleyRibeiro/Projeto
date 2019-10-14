<?php
 
 namespace Unesc\Http\Controllers;
 use Illuminate\Http\Request;
 use Unesc\Usuario;
 
class UsuariosController extends Controller
{
    public function index() {

        $title = 'usuarios';
        $usuarios = Usuario::all();

        return view('usuarios.index', ["title" => $title, "usuarios" => $usuarios]);
    }

    public function create() {

        $title = "Novo Usuario";

        return view('usuarios.create', ["title" => $title]);
    }

    public function store(Request $request) {
        $formData = $request->all();

        Usuario::create($formData);

        return redirect('/usuarios');
    }

    public function edit($id) {
        
        $title = "Editar Usuario";
        
        $usuario = Usuario::find($id);

        return view('usuarios.edit', ["title" => $title, "usuario" => $usuario]);
    }

    public function update(Request $request, $id) {
        $formData = $request->all();

        $usuario = Usuario::find($id);
        
        $usuario->update($formData);

        return redirect('/usuarios');
    }

    public function destroy($id) {
        $usuario = Usuario::find($id);
        
        $usuario->delete();

        return redirect('/usuarios');
    }
}
