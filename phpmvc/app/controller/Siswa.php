<?php
class Siswa extends Controller
{
    public function index()
    {
        $data=[
        "judul" => "Data Siswa",
        "siswa" => $this->model('model_siswa')->getAllBlog()
        ];
        $this->view('template/header', $data);
        $this->view('Siswa/index', $data);
        $this->view('template/footer');
        return $this->view("siswa/index", $data);
}


public function detail($id)
{
    $data=[
    "judul" => "Detail Siswa",
    "siswa" => $this->model('model_siswa')->getBlogById($id)
    ];
    $this->view('template/header', $data);
    $this->view('siswa/detail', $data);
    $this->view('template/footer');
}
public function tambah()
{
    print_r($_POST);
    if( $this->model('model_siswa')->tambahData($_POST) > 0 ) {
        Flasher::setFlash('berhasil', 'ditambah', 'succes');
        header('location: '.BASE_URL . '/siswa');
        exit;
    }else{
        Flasher::setFlash('gagal', 'ditambahkan', 'succes');
        header('location: '.BASE_URL . '/siswa');
        exit;
    }
}
public function hapus($id)
{
    if( $this->model('model_siswa')->hapusDataSiswa($id) > 0 ) {
        Flasher::setFlash('berhasil', 'dihapus', 'succes');
        header('location: '.BASE_URL . '/siswa');
        exit;
    }else{
        Flasher::setFlash('gagal', 'dihapus', 'danger');
        header('location: '.BASE_URL . '/siswa');
        exit;
    }
}
public function getubah()
{
    if( $this->model('model_siswa')->ubahDataSiswa($_POST) > 0 ) {
        Flasher::setFlash('berhasil', 'diubah', 'success');
        header('Location: ' . BASE_URL . '/siswa');
        exit;
    } else {
        Flasher::setFlash('gagal', 'diubah', 'danger');
        header('Location: ' . BASE_URL . '/siswa');
        exit;
} 
}

}