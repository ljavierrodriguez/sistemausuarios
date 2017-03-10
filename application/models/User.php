<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function all()
    {
        $query = $this->db->get('users');
        return $query->result();
    }

    public function find($id)
    {
        $query = $this->db->get_where('users',array('id'=>$id));
        return $query->row_array();
    }

    public function insert($data)
    {
        return $this->db->insert('users', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('users.id', $id);
        return $this->db->update('users', $data);
    }

    public function delete($id)
    {
        $this->db->where('users.id', $id);
        return $this->db->delete('users');
    }

}