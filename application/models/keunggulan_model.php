<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class keunggulan_model extends CI_Model
{
  private $_table = 'keunggulan';

  public $id;
  public $title;
  public $image = "default.jpg";
  public $description;

  public function rules()
  {
      return [
          ['field' => 'title',
          'label' => 'Title',
          'rules' => 'required'],

          ['field' => 'description',
          'label' => 'Description',
          'rules' => 'required']
      ];
  }

  public function getAll()
  {
      return $this->db->get($this->_table)->result();
  }

  public function getById($id)
  {
      return $this->db->get_where($this->_table, ["id" => $id])->row();
  }

  public function save()
  {
      $post = $this->input->post();
      $this->id = uniqid();
      $this->title = $post["title"];
      $this->image = $this->_uploadImage();
      $this->description = $post["description"];
      $this->db->insert($this->_table, $this);
  }

  public function update()
  {
      $post = $this->input->post();
      $this->id = $post["id"];
      $this->title = $post["title"];

      if(!empty($_FILES["image"]["title"])){
        $this->image = $this->_uploadImage();
      } else {
        $this->image = $post["old_image"];
      }

      $this->description = $post["description"];
      $this->db->update($this->_table, $this, array('id' => $post['id']));
  }

  public function delete($id)
  {
      return $this->db->delete($this->_table, array("id" => $id));
  }

  private function _uploadImage()
  {
      $config['upload_path']          = './upload/package/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['file_name']            = $this->title;
      $config['overwrite']			= true;
      $config['max_size']             = 1024; // 1MB
      // $config['max_width']            = 1024;
      // $config['max_height']           = 768;

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('image')) {
          return $this->upload->data("file_name");
      }

      return "default.jpg";
  }

}
