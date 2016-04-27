<?php
//Pics.php
class Pics extends CI_Controller {
       public function __construct()
        {
                parent::__construct();
                $this->load->model('pics_model');
                
        }

        public function index()
        {//to let application search the image by default is the bear pics.
           
                    $data['pics'] = $this->pics_model->get_pics();
                    $data['page_id'] = 'pics';
                    $data['title'] = 'Pics selection';

                    $this->load->view('templates/header', $data);
                    $this->load->view('pics/index', $data);
                    $this->load->view('templates/footer');
           
        }
       public function view($slug = NULL)
        {//here let application search the pics when we give the value to $slug.
                $data['pics'] = $this->pics_model->get_pics($slug);
                $data['page_id'] = 'pics';
                if (empty($data['pics']))
                {
                        show_404();
                }

                $data['title'] = "This is the image of $slug";

                $this->load->view('templates/header', $data);
                $this->load->view('pics/view', $data);
                $this->load->view('templates/footer');
        }

        
}
