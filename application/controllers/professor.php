<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Professor extends CI_Controller {

    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('estou_logado')){
            redirect('Login');
        }
        $this->load->model('Professor_model', 'professor'); // 'professor' é um alias para 'Professor_model'
    }

    public function index() {
        $this->load->view('template/header');
        $lista['professor'] = $this->professor->listar();
        $this->load->view('professorCadastro', $lista);
        $this->load->view('template/footer');
    }

    public function inserir() {
        //nome do campo do vetor deve ser o mesmo campo da tabela no BD
        $dados['id'] = mb_convert_case($this->input->post('id'), MB_CASE_UPPER);
        $dados['nome'] = $this->input->post('nome');
        $dados['rg'] = mb_convert_case($this->input->post('rg'), MB_CASE_UPPER);
        $dados['endereco'] = $this->input->post('endereco');
        $dados['turma'] = mb_convert_case($this->input->post('turma'), MB_CASE_UPPER);
        
        $this->professor->inserir($dados);
        redirect('professor');
    }

    function excluir($id) {
        $this->professor->deletar($id);
        redirect('professor');
    }

    function editar($id) {
        $data['professorEditar'] = $this->professor->editar($id);
        $this->load->view('template/header');
        $this->load->view('professorEditar', $data);
        $this->load->view('template/footer');
    }

    function atualizar() {
       $dados['id'] = mb_convert_case($this->input->post('id'), MB_CASE_UPPER);
        $dados['nome'] = $this->input->post('nome');
        $dados['rg'] = mb_convert_case($this->input->post('rg'), MB_CASE_UPPER);
        $dados['endereco'] = $this->input->post('endereco');
        $dados['turma'] = mb_convert_case($this->input->post('turma'), MB_CASE_UPPER);
        
        $this->pais->atualizar($dados);
        redirect('pais');
    }

}