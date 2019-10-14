<?php
 
namespace Unesc\Http\Controllers;
use Illuminate\Http\Request;
use Unesc\Aluno;

class AlunosController extends Controller
{
    public function index() {

        $title = 'alunos';
        $alunos = Aluno::all();

        return view('alunos.index', ["title" => $title, "alunos" => $alunos]);
    }

    public function create() {

        $title = "Novo Aluno";

        return view('alunos.create', ["title" => $title]);
    }

    public function store(Request $request) {
        $formData = $request->all();

        Aluno::create($formData);

        return redirect('/alunos');
    }

    public function edit($id) {
        
        $title = "Editar Aluno";
        
        $aluno = Aluno::find($id);

        return view('alunos.edit', ["title" => $title, "aluno" => $aluno]);
    }

    public function update(Request $request, $id) {
        $formData = $request->all();

        $aluno = Aluno::find($id);
        
        $aluno->update($formData);

        return redirect('/alunos');
    }

    public function destroy($id) {
        $aluno = Aluno::find($id);
        
        $aluno->delete();

        return redirect('/alunos');
    }
}
