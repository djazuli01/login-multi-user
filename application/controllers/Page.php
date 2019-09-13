<?php
class Page extends CI_Controller{

  function __construct(){
    parent::__construct();
     $this->load->model('Login_model');
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }
 
  function index(){
    //Allowing akses to admin only
 
      if($this->session->userdata('level')==='1'){
          $this->load->view('dashboard_view');
      }else{
          echo "Access Denied";
      }
 
  }
 
  function pelayan(){
    //Allowing akses to pelayan only
     $data['menu'] = $this->Login_model->view();
    if($this->session->userdata('level')==='2'){

      $this->load->view('pelayan/dashboard', $data);
    }else{
       
        redirect('login');
     
       
  }
 }
  function kasir(){
    //Allowing akses to kasir only
     $data['menu'] = $this->Login_model->view();
    if($this->session->userdata('level')==='3'){
      $this->load->view('kasir/dashboard',  $data);
    }else{
      
        redirect('login');
    }
  }

    public function tambah()
    {
        $data = array(

            'title'     => 'Tambah Data Buku'

        );

        $this->load->view('tambah_menu', $data);
    }

    public function simpan()
    {
        $data = array(

            'nama_menu'       => $this->input->post("nama_menu"),
            'harga'         => $this->input->post("harga"),
            'stok'   => $this->input->post("stok")

        );

        $this->Login_model  ->simpan($data);

       

        if($this->session->userdata('level')==='2'){

     redirect ('index.php/page/pelayan');
    }else if($this->session->userdata('level')==='3'){
       
        redirect('index.php/page/kasir');

    }

    }

    public function edit($id_menu)
    {
        $id_menu = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Data Buku',
            'dashboard' => $this->Login_model ->edit($id_menu)

        );

        $this->load->view('edit_menu', $data);
    }

   public function update()
    {
        $id['id_menu'] = $this->input->post("id_menu");
        $data = array(

            'nama_menu'           => $this->input->post("nama_menu"),
            'harga'         => $this->input->post("harga"),
            'stok'   => $this->input->post("stok")

        );

        $this->Login_model  ->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        if($this->session->userdata('level')==='2'){

     redirect ('index.php/page/pelayan');
    }else if($this->session->userdata('level')==='3'){
       
        redirect('index.php/page/kasir');

    }
 

    }

 public function hapus($id_menu)
    {
        $id['id_menu'] = $this->uri->segment(3);

        $this->Login_model->hapus($id);

         if($this->session->userdata('level')==='2'){

     redirect ('index.php/page/pelayan');
    }else if($this->session->userdata('level')==='3'){
       
        redirect('index.php/page/kasir');

    }
 

      }
 
}