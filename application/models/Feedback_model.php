<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback_model extends CI_Model
{
  private $_table = "feedback";

  public function getAll()
  {
      return $this->db->get($this->_table)->result();
  }

  public function delete($id)
  {
      return $this->db->delete($this->_table, array("feedbackRef" => $id));
  }
}
