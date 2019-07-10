<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Professor_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function inserir($p) {
        return $this->db->insert('professor', $p); //'professor' é o nome da tabela
    }

    function deletar($id) {
        $this->db->where('id', $id);
        return $this->db->delete('professor');
    }

    function editar($id) {
        $this->db->where('id', $id);
        $result = $this->db->get('professor');
        return $result->result();
    }

    function atualizar($data) {
        $this->db->where('id', $data['id']);
        $this->db->set($data);
        return $this->db->update('professor');
    }

    function listar() {
        $this->db->select('*');
        $this->db->from('professor');
        $query = $this->db->get();
        return $query->result();
    }

}
