<?php
class Register_model extends CI_Model{

    public function get_last_ten_entries()
      {
        
        $query = $this->db->get('entries',10);
        return $query->result();
     }

        public function insert(){

        $this->db->insert('crud',$_POST);

    }
        public function update_entry()

    {
            $this->title = $_POST['title'];
            $this->content = $_POST['content'];
            $this->date = time();

            $this->db->update('entries',$this,array('id'=>$_POST['id']));

    }
}
	
