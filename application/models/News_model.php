<?php
class News_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function get_news($slug = FALSE){

        if ($slug === FALSE){
        $query = $this->db->get('sp16_news');
        return $query->result_array();
        }

    $query = $this->db->get_where('sp16_news', array('slug' => $slug));
    return $query->row_array();
    }
    
    public function set_news(){
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);
echo 'inside news model';
        die;
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );
        
        if($this->db->insert('sp16_news', $data)){
            //echo $this->db->insert_id();
            $id = $this->db->insert_id();
            die;
            
            $query = $this->db->get('sp16_news', array('id' => $id));
            return $query->result_array();
        }
        else{
            echo 'uh oh';
            die;
        }

        //return $this->db->insert('sp16_news', $data);
    }//end function
}