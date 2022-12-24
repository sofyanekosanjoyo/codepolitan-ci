<?php

class Blog extends CI_Controller {

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

        $this->load->database();

        $query = $this->db->query('SELECT * FROM blog');
        $data['blogs'] = $query->result_array();

        $this->load->view('blog', $data);
    }
}

?>
