<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('user', 'user', TRUE);
    }

    public function index()
    {
        $data['title'] = 'Listado de Usuarios';
        $data['usuarios'] = $this->user->all();

        return $this->load->view('users/index', $data);
    }

    public function create()
    {
        $this->form_validation->set_rules('name', 'Nombre', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('users/create', $_POST);
        }
        else
        {
            $this->store();
        }
    }

    public function store()
    {
        $mdata['name']=$_POST['name'];
        $mdata['email']=$_POST['email'];
        $mdata['phone']=$_POST['phone'];
        $mdata['age']=$_POST['age'];

        $res = $this->user->insert($mdata);
        if($res){
            header('location:'.base_url()."index.php/usuarios/".$this->index());
        }
    }

    public function edit($id)
    {
        $id = $this->uri->segment(3);
        if (empty($id))
        {
            show_404();
        }
        $data['usuario'] = $this->user->find($id);
        return $this->load->view('users/edit', $data);
    }

    public function update()
    {
        $mdata['name']=$_POST['name'];
        $mdata['email']=$_POST['email'];
        $mdata['phone']=$_POST['phone'];
        $mdata['age']=$_POST['age'];

        $res = $this->user->update($mdata, $_POST['id']);
        if($res){
            header('location:'.base_url()."index.php/usuarios/".$this->index());
        }
    }

    public function delete($id)
    {

    }
}