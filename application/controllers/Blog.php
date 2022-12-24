<?php

class Blog extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->model('Blog_model');
    }
    
    public function index()
    {
        $query = $this->Blog_model->getBlogs();
        $data['blogs'] = $query->result_array();

        $this->load->view('blog', $data);
    }

    public function detail($url)
    {
        $query = $this->db->query('SELECT * FROM blog WHERE url = "'.$url.'"');

        // $query = $this->Blog_model->getSingleBlog($url);
        $data['blog'] = $query->row_array();

        $this->load->view('detail', $data);

        
    }

    public function add()
    {
        if($this->input->post())
        {
            $data['title'] = $this->input->post('title');
            $data['content'] = $this->input->post('content');
            $data['url'] = $this->input->post('url');

            print_r($data);
            
            $id = $this->Blog_model->insertBlog($data);

            if($id){
                echo "Data berhasil disimpan";
            } else {
                echo "Data gagal disimpan";
            }
        }

        $this->load->view('form_add');
    }

    public function edit($id)
    {
        $this->load->view('form_edit');
    }
}

?>
