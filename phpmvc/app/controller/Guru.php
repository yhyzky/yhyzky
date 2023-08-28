<?php
class Guru extends Controller
{
    public function index()
    {
        $data=[
        "judul" => "Data Guru",
        "guru" => $this->model('model_guru')->getAllGuru()
        ];
        $this->view('template/header', $data);
        $this->view('Guru/index', $data);
        $this->view('template/footer');
        return $this->view("guru/index", $data);
}
}