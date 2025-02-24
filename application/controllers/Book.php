<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Book_model');
        $this->load->helper('url');
    }

    public function index() {
        $data['books'] = $this->Book_model->get_all_books();
        $this->load->view('books/index', $data);
    }

    public function create() {
        $this->load->view('books/create');
    }

    public function store() {
        $data = array(
            'title' => $this->input->post('title'),
            'author' => $this->input->post('author'),
            'publisher' => $this->input->post('publisher'),
            'year' => $this->input->post('year'),
        );
        $this->Book_model->insert_book($data);
        redirect('book');
    }

    public function edit($id) {
        $data['book'] = $this->Book_model->get_book_by_id($id);
        $this->load->view('books/edit', $data);
    }

    public function update($id) {
        $data = array(
            'title' => $this->input->post('title'),
            'author' => $this->input->post('author'),
            'publisher' => $this->input->post('publisher'),
            'year' => $this->input->post('year'),
        );
        $this->Book_model->update_book($id, $data);
        redirect('book');
    }

    public function delete($id) {
        $this->Book_model->delete_book($id);
        redirect('book');
    }
}
?>
