<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Content_model extends CI_Model
{
  private $_table = "content";

  public $contentRef;
  public $title;
  public $titleDetail;
  public $synopsis;
  public $content;
  public $image = "default.jpg";
  public $link;
  public $metaTitle;
  public $metaDesc;


  public function rules(){
    return [
        ['field' => 'title',
        'label' => 'Title',
        'rules' => 'required'],

        ['field' => 'titleDetail',
        'label' => 'TitleDetail',
        'rules' => 'required'],

        ['field' => 'synopsis',
        'label' => 'Synopsis',
        'rules' => 'required'],

        ['field' => 'content',
        'label' => 'Content',
        'rules' => 'required'],

        ['field' => 'link',
        'label' => 'Link',
        'rules' => 'required'],

    ];
  }

  public function getAll(){
    return $this->db->get($this->_table)->result();
  }

  public function getById($id)
  {
      return $this->db->get_where($this->_table, ["contentRef" => $id])->row();
  }

  public function save()
  {
      $post = $this->input->post();
      $this->contentRef = 2;
      $this->title = $post["title"];
      $this->titleDetail = $post["titleDetail"];
      $this->synopsis = $post["synopsis"];
      $this->content = $post["content"];
      $this->image = $this->_uploadImage();
      $this->link = $post["link"];
      $this->inputTime = Date("Y-m-d H:i:s");
      $this->user = $_SESSION['first_name'];
      $this->metaTitle = $post["metaTitle"];
      $this->metaDesc = $post["metaDesc"];
      $this->db->insert($this->_table, $this);
  }

  public function update()
  {
      $post = $this->input->post();
      $this->contentRef = $post["id"];
      $this->title = $post["title"];
      $this->titleDetail = $post["titleDetail"];
      $this->synopsis = $post["synopsis"];
      $this->content = $post["content"];

      if(!empty($_FILES["image"]["title"])){
        $this->image = $this->_uploadImage();
      } else {
        $this->image = $post["image_content"];
      }

      $this->link = $post["link"];
      $this->inputTime = Date("Y-m-d H:i:s");
      $this->user = $_SESSION['first_name'];
      $this->metaTitle = $post["metaTitle"];
      $this->metaDesc = $post["metaDesc"];
      $this->db->update($this->_table, $this, array('contentRef' => $post['id']));
  }

  public function delete($id)
  {
      return $this->db->delete($this->_table, array("contentRef" => $id));
  }

  private function _uploadImage()
  {
      $config['upload_path']          = './upload/content/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['file_name']            = $this->contentRef;
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
