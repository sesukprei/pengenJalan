<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class TagType_model extends CI_Model
{
  private $_table = "tagType";
  public $tagTypeRef;
  public $tagName;

  public function rules()
  {
      return [
          ['field' => 'tagName',
          'label' => 'TagName',
          'rules' => 'required'],
      ];
  }

  public function getAll()
  {
      return $this->db->get($this->_table)->result();
  }

  public function getById($id)
  {
      return $this->db->get_where($this->_table, ["tagTypeRef" => $id])->row();
  }

  public function save()
  {
      $post = $this->input->post();
      // $row = $this->CI->db->query('SELECT	isnull(max(tagTypeRef),0) + 1 as ref from tagType');
      $this->tagTypeRef = 4;
      $this->tagName = $post["tagName"];
      $this->userName = $_SESSION["first_name"];
      $this->db->insert($this->_table, $this);
  }

  public function update()
  {
      $post = $this->input->post();
      $this->tagTypeRef = $post["id"];
      $this->tagName = $post["tagName"];
      $this->db->update($this->_table, $this, array('tagTypeRef' => $post['id']));
  }

  public function delete($id)
  {
      return $this->db->delete($this->_table, array("tagTypeRef" => $id));
  }

}
