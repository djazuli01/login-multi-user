<?php
class Login_model extends CI_Model{

	  public function view(){
    return $this->db->get('menu')->result();
  }
 
  public function view_pesanan(){
    return $this->db->get('tbl_pesanan')->result();
  }

  function validate($email,$password){
    $this->db->where('user_email',$email);
    $this->db->where('user_password',$password);
    $result = $this->db->get('tbl_users',1);
    return $result;
  }


  	 public function simpan($data)
    {

        $query = $this->db->insert("menu", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function simpan_pesanan($data)
    {

        $query = $this->db->insert("tbl_pesanan", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

  	 public function edit($id_menu)
         {

        $query = $this->db->where("id_menu", $id_menu)
                ->get("menu");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

     public function edit_pesanan($id_pesanan)
         {

        $query = $this->db->where("id_pesanan", $id_pesanan)
                ->get("tbl_pesanan");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

  	 public function update($data, $id)
    {

        $query = $this->db->update("menu", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

     public function update_pesanan($data, $id)
    {

        $query = $this->db->update("tbl_pesanan", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {

        $query = $this->db->delete("menu", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus_pesanan($id)
    {

        $query = $this->db->delete("tbl_pesanan", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

      

    }
 
