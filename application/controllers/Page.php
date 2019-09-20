<?php
class Page extends CI_Controller{

  function __construct(){
    parent::__construct();
     $this->load->model('Login_model');
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('index.php/login');
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
     $data['menu'] = $this->Login_model->view(); //menyimpan nilai ke variable $menu
    if($this->session->userdata('level')==='3'){
      $this->load->view('kasir/dashboard',  $data);
    }else{
      
        redirect('login');
       
    }
  }

 public function pesanan(){
     $data['pesanan'] = $this->Login_model->view_pesanan();
    if($this->session->userdata('level')==='2'){
      $this->load->view('pelayan/pesanan',  $data);
    }else if($this->session->userdata('level')==='3'){
       $this->load->view('kasir/pesanan',  $data);
    }
    else{
      
        redirect('login');

    }
  
  }

   public function daftar_menu(){
       $data['menu'] = $this->Login_model->view();
       if($this->session->userdata('level')==='2'){
      $this->load->view('pelayan/daftar_menu',  $data);
    }else if($this->session->userdata('level')==='3'){
       $this->load->view('kasir/daftar_menu',  $data);
    }
    else{
      
        redirect('login');

    }
  
  }



    public function tambah()
    {
       

        $this->load->view('tambah_menu');
    }

    public function tambah_pesanan()
    {
           $data['nilai'] = $this->Login_model->view_pesanan();
        $data['menu'] = $this->Login_model->view();
        $this->load->view('tambah_pesanan', $data);
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

     public function simpan_pesanan()
    {
        $data = array(

            'id_pesanan'       => $this->input->post("id_pesanan"),
            'nomor_pesanan'       => $this->input->post("nomor_pesanan"),
            'nomor_meja'         => $this->input->post("nomor_meja"),
            'pesanan'   => $this->input->post("pesanan"),
             'status'   => $this->input->post("status")

        );
         if($data['nomor_pesanan']== null){
            $data['id_pesanan']=1;
          $data['nomor_pesanan']='ERP19092019-1';

          $this->Login_model  ->simpan_pesanan($data);

         }else{
           $this->Login_model  ->simpan_pesanan($data);
         }

       

        if($this->session->userdata('level')==='2'){

     redirect ('index.php/page/pesanan');
    }else if($this->session->userdata('level')==='3'){
       
        redirect('index.php/page/pesanan');

    }

    }

    public function edit($id_menu)
    {
        $id_menu = $this->uri->segment(3);

        $data = array(

            'dashboard' => $this->Login_model ->edit($id_menu)

        );

        $this->load->view('edit_menu', $data);
    }

     public function edit_pesanan($id_pesanan)
    {
        $id_pesanan = $this->uri->segment(3);
       
        $data = array(
            'nilai' => $this->Login_model ->view_pesanan(),
            'dashboard' => $this->Login_model ->edit_pesanan($id_pesanan),
            'menu' => $this->Login_model ->view()
            

        );

        $this->load->view('edit_pesanan', $data);
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

     public function update_pesanan()
    {
        $id['id_pesanan'] = $this->input->post("id_pesanan");
        $data = array(

            'nomor_meja'       => $this->input->post("nomor_meja"),
            'nomor_pesanan'           => $this->input->post("nomor_pesanan"),
           
            'pesanan'         => $this->input->post("pesanan"),
            'status'   => $this->input->post("status"),

        );
        $data['status'] = 'Selesai';

        $this->Login_model  ->update_pesanan($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        if($this->session->userdata('level')==='2'){

     redirect ('index.php/page/pesanan');
    }else if($this->session->userdata('level')==='3'){
       
        redirect('index.php/page/pesanan');

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
      public function hapus_pesanan($id_pesanan)
    {
        $id['id_pesanan'] = $this->uri->segment(3);

        $this->Login_model->hapus_pesanan($id);

        

     redirect ('index.php/page/pesanan');
    
 

      }
 
}