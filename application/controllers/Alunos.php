<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Alunos extends CI_Controller {

    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('estou_logado')){
            redirect('Login');
        }
        $this->load->model('Alunos_model', 'alunos'); // 'alunos' é um alias para 'Alunos_model'
    }

    public function index() {
        $this->load->view('template/header');
        $lista['alunos'] = $this->alunos->listar();
        $this->load->view('alunosCadastro', $lista);
        $this->load->view('template/footer');
    }

    public function inserir() {
        //nome do campo do vetor deve ser o mesmo campo da tabela no BD
        $dados['nome'] = mb_convert_case($this->input->post('nome'), MB_CASE_UPPER);
        $dados['rg'] = $this->input->post('rg');
        $dados['endereco'] = mb_convert_case($this->input->post('endereco'), MB_CASE_UPPER);
        $dados['turma'] = mb_convert_case($this->input->post('turma'), MB_CASE_UPPER);
        $dados['idade'] = $this->input->post('idade');
        $dados['sexo'] = mb_convert_case($this->input->post('sexo'), MB_CASE_UPPER);
        
        $result=$this->usuario->inserir($dados);
        
        if($result==true){
            $this->session->set_flashdata('true', 'msg');
            redirect('alunos');
        }else {
            $this->session->set_flashdata('err', 'msg');
            redirect('alunos');
        }
        redirect('alunos');
    }

    function excluir($id) {
        $result=$this->usuario->deletar($id);
        if($result==true){
            $this->session->set_flashdata('excluirSucesso', 'msg');
            redirect('alunos');
        }else {
            $this->session->set_flashdata('err', 'msg');
            redirect('alunos');
        }
       
    }

    function editar($id) {
        $data['alunosEditar'] = $this->usuario->editar($id);
        $this->load->view('template/header');
        $this->load->view('alunosEditar', $data);
        $this->load->view('template/footer');
    }

    function atualizar() {
        $dados['id'] = $this->input->post('id');
        $dados['nome'] = mb_convert_case($this->input->post('nome'), MB_CASE_UPPER);
        $dados['rg'] = $this->input->post('rg');
        $dados['endereco'] = mb_convert_case($this->input->post('endereco'), MB_CASE_UPPER);
        $dados['turma'] = mb_convert_case($this->input->post('turma'), MB_CASE_UPPER);
        $dados['idade'] = $this->input->post('idade');
        $dados['sexo'] = mb_convert_case($this->input->post('sexo'), MB_CASE_UPPER);
        
        $result=$this->usuario->atualizar($dados);
        if($result==true){
            $this->session->set_flashdata('trueUpdate', 'msg');
            redirect('alunos');
        }else {
            $this->session->set_flashdata('err', 'msg');
            redirect('alunos');
        }
        
    }

}
