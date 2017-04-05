<?php
  class m_model extends CI_Model{
    public function __construct(){
      parent::__construct();
    }
    public function selecttransaksi(){
      return $this->db->get('resepsionis');
    }
    public function simpan(){
      $data=array(
        'nip' => $this->input->post('bus'),
        'nama' =>$this->input->post('status'),
        'jenkel' =>$this->input->post('status')
      );
      $this->db->insert('namatabelmu',$data);
    }
    public function getDataById(){
      return $this->db->get_where('namatabelmu',array('primarykey'=>$primarykey));
    }
    public function update(){
      $data=array
      (
        'nim' => $this->input->post('bus'),
        'nama' => $this->input->post('status'),
        'alamat' => $this->input->post('alamat')
      );
      $this->db->replace('namatabelmu',$data);
	 }
   public function ceklogin()
   {
      return $this->db->get_where('user'
        array('username'=>$this->input->post('username'));
   }
  }
?>
