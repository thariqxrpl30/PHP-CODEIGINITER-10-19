<?php

namespace App\Controllers\Admin;

use App\Controllers\Basecontroller;

use App\Models\Kategori_M;

class Kategori extends BaseController
{
    public function index()
    {
        // return view('welcome_message');

        echo "<h1>Belajar CodeIniter</h1>";
    }

    public function read()
    {
        $pager = \Config\Services::pager();
        $model = new Kategori_M();
        //$kategori = $model->findAll();

        

        $data = [
            'judul' =>'Data Kategori',
            //'kategori' => $kategori,
            'kategori' => $model->paginate(2,'group1'),
            'pager' => $model->pager
        ];

        

        //echo view("template/header");
        return view("kategori/select",$data);
        //echo view("template/footer");
    }

    

    public function create()
    {
        
        return view("kategori/insert");
        
    }

    public function insert()
    {

        $model = new Kategori_M();

        if ($model -> insert($_POST)===false) {
            $error = $model->errors();
            session()->setFlashdata('info', $error['kategori']);
            return redirect()->to(base_url("/admin/kategori/create"));
        } else {
            return redirect()->to(base_url("/admin/kategori"));
        }
        
        
    }

    public function find($id=null)
    {
        $model = new Kategori_M();
        $kategori = $model->find($id);

        $data = [
            'judul' =>'Update Data',
            'kategori' => $kategori
        ];

        return view("kategori/update",$data);
    }

    public function update()
    {
        $model = new Kategori_M;
        $model->save($_POST);

        return redirect()->to(base_url("/admin/kategori"));
    }

    public function delete($id=null)
    {
        echo "<h1>proses menghapus data $id</h1>";

        $model = new Kategori_M();
        $model-> delete($id);

        return redirect()->to(base_url("/admin/kategori"));
    }
}

?>
