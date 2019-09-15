<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class footer_model extends CI_Model
{
  private $_table = 'footer';

  public $id;
  public $synopsis;
  public $instagram;
  public $facebook;
  public $phone;
  public $email;
  public $address;
  public $location;

  public function rules()
  {
      return [
          ['field' => 'synopsis',
          'label' => 'Synopsis',
          'rules' => 'required'],

          ['field' => 'instagram',
          'label' => 'Instagram',
          'rules' => 'required'],

          ['field' => 'facebook',
          'label' => 'Facebook',
          'rules' => 'required'],

          ['field' => 'phone',
          'label' => 'Phone',
          'rules' => 'required'],

          ['field' => 'email',
          'label' => 'Email',
          'rules' => 'required'],

          ['field' => 'address',
          'label' => 'Address',
          'rules' => 'required'],

          ['field' => 'location',
          'label' => 'Location',
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
      $this->id = 1;
      $this->synopsis = $post["synopsis"];
      $this->instagram = $post["instagram"];
      $this->facebook = $post["facebook"];
      $this->phone = $post["phone"];
      $this->email = $post["email"];
      $this->address = $post["address"];
      $this->location = $post["location"];
      $this->db->insert($this->_table, $this);
  }

  public function update()
  {
      $post = $this->input->post();
      $this->id = $post["id"];
      $this->synopsis = $post["synopsis"];
      $this->instagram = $post["instagram"];
      $this->facebook = $post["facebook"];
      $this->phone = $post["phone"];
      $this->email = $post["email"];
      $this->address = $post["address"];
      $this->location = $post["location"];

      $this->db->update($this->_table, $this, array('id' => $post['id']));
  }

}
