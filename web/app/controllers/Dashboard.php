<?php 
class Dashboard extends Controller {
    public function index(){
        $data['judul'] = 'Dashboard';
        $this->view('dashboard/index', $data);
    }
}