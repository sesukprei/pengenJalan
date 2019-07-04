<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Package_model extends CI_Model
{
    private $_table = "package";

    public $package_id;
    public $name;
    public $price;
    public $image = "default.jpg";
    public $description;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'Price',
            'rules' => 'numeric'],

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
        return $this->db->get_where($this->_table, ["package_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->package_id = uniqid();
        $this->name = $post["name"];
        $this->price = $post["price"];
        $this->image = $this->_uploadImage();
        $this->description = $post["description"];
        $this->package_type = $post["package_type"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->package_id = $post["id"];
        $this->name = $post["name"];
        $this->price = $post["price"];

        if(!empty($_FILES["image"]["name"])){
          $this->image = $this->_uploadImage();
        } else {
          $this->image = $post["old_image"];
        }

        $this->description = $post["description"];
        $this->package_type = $post["package_type"];
        $this->db->update($this->_table, $this, array('package_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("package_id" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/package/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->package_id;
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

    function getAllPackageType()
    {
        /*
        $query = $this->db->get('location');

        foreach ($query->result() as $row)
        {
            echo $row->description;
        }*/

        $query = $this->db->query('SELECT package_type FROM package_type');


        return $query->result();

        //echo 'Total Results: ' . $query->num_rows();
    }

}
