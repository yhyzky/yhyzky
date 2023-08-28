<?php
class Blog extends Controller
{
    public function tambah()
    {
        if ($this->model('model_siswa')->tambahData($_POST) > 0){
            header('location: ' . BASE_URL . '/siswa');
            exit;
        }
    }
    public function index()
    {
        $data['judul'] = "Blog";
        $data['blog'] = $this->model('Blog_model')->getAllBlog();
        $this->view('template/header', $data);
        $this->view('Blog/index', $data);
        $this->view('template/footer');
    }
}