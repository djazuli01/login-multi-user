<?php
class Login_model extends CI_Model{

	  public function view(){
    return $this->db->get('menu')->result();
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

  	 public function update($data, $id)
    {

        $query = $this->db->update("menu", $data, $id);

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

      

    }
 
