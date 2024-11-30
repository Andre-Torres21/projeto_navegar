<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ConteudoModel;

class Home extends Controller
{
    public function index()
    {
        $model = new ConteudoModel();
        $data['conteudo'] = $model -> getConteudo();
        echo view('templates/Header');
        echo view('pages/Home', $data);
        echo view('templates/Footer');
    }

    public function aluno()
    {
        $model = new ConteudoModel();
        $data['conteudo'] = $model -> getConteudo();
        echo view('templates/Header');
        echo view('pages/HomeAluno', $data);
        echo view('templates/Footer');
    }

    public function item($id=NULL)
    {
        $model = new ConteudoModel();
        $data['conteudo'] = $model -> getConteudoItem($id);
        echo view('templates/Header');
        echo view('pages/ConteudoItem', $data);
        echo view('templates/Footer');
    }

    public function inserir () 
    {
        // helper('form') para validação de campos
        helper('form');
        echo view('templates/Header');
        echo view('pages/ConteudoGravar');
        echo view('templates/Footer');
    }

    public function gravar()
    {
        helper('form');
        $model = new ConteudoModel();

        //Validação dos campos
        if ($this -> validate(['Titulo' => ['label' => 'Título', 'rules' => 'required|min_length[3]|max_length[100]'], 'Texto_curto' => ['label' => 'Resumo', 'rules' => 'required|min_length[3]|max_length[100]'], 'Texto_completo' => ['label' => 'Conetúdo completo', 'rules' => 'required|min_length[3]|max_length[100]']])) {
            $model -> save([
                'ID_Conteudo' => $this -> request -> getVar('id'),
                'Titulo' => $this -> request -> getVar('Titulo'),
                'Texto_curto' => $this -> request -> getVar('Texto_curto'),
                'Texto_completo' => $this -> request -> getVar('Texto_completo')
            ]);
            return redirect('/');
        }
        else {
            echo view('templates/Header');
            echo view('pages/ConteudoGravar');
            echo view('templates/Footer');
        }
    }
}