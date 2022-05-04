<?php namespace App\Controllers;

// use App\Models\KonkulModel;

class Admin extends BaseController{

    // protected $konkulModel;

    public function __construct(){

        // $this->konkulModel = new KonkulModel();
    }

    public function index(){

        echo view('admin/sadmin-index');
    }

    public function dashboard()
    {
        echo view('admin/sadmin-dashboard');   
    }

// CRUD PESERTA
    public function read_peserta(){

        echo view('admin/sadmin-peserta');
    }

    public function create_peserta()
    {
        
    }

    public function update_peserta()
    {
        
    }

    public function delete_peserta()
    {
        
    }

// CRUD PENYELENGGARA
    public function read_penyelenggara(){

        echo view('admin/sadmin-penyelenggara');
    }

    public function create_penyelenggara()
    {
        
    }

    public function update_penyelenggara()
    {
        
    }

    public function delete_penyelenggara()
    {
        
    }
}