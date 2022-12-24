<?php

class Blog extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
    }
    
    public function index()
    {
        // $data['blogs'] = [
        //     [
        //         'title' => 'Artikel Pertama',
        //         'content' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo inventore voluptatum expedita voluptatem vel excepturi odio non dicta ut sunt.</p>'
        //     ],
        //     [
        //         'title' => 'Artikel Kedua',
        //         'content' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo inventore voluptatum expedita voluptatem vel excepturi odio non dicta ut sunt.</p>'
        //     ],
        //     [
        //         'title' => 'Artikel Ketiga',
        //         'content' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo inventore voluptatum expedita voluptatem vel excepturi odio non dicta ut sunt.</p>'
        //     ],
        // ];


        // $query = $this->db->query('SELECT * FROM blog');
        $query = $this->db->get('blog');
        $data['blogs'] = $query->result_array();

        $this->load->view('blog', $data);
    }

    public function detail($url)
    {
        // $query = $this->db->query('SELECT * FROM blog WHERE url = "'.$url.'"');
        $this->db->where('url', $url);
        $query = $this->db->get('blog');
        $data['blog'] = $query->row_array();

        $this->load->view('detail', $data);
    }
}

?>
