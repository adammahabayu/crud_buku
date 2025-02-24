<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_model extends CI_Model {

    public function get_all_books() {
        return $this->db->get('books')->result();
    }

    public function insert_book($data) {
        return $this->db->insert('books', $data);
    }

    public function get_book_by_id($id) {
        return $this->db->get_where('books', array('id' => $id))->row();
    }

    public function update_book($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('books', $data);
    }

    public function delete_book($id) {
        return $this->db->delete('books', array('id' => $id));
    }
}
?>
