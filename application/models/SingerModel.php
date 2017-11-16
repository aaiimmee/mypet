<?php
<?php

class SingerModel extends CI_Model
{

    function SingerModel()
    {
        $this->load->database();
    }

    function getSinger()
    {
        $sql = 'SELECT * from singer';
        // 查询数据库
        $query = $this->db->query($sql);
        // $query=$this->db->get('singer');
        // 以数组形式返回查询结果
        return $query->result_array();
    }
    

    function insertSinger()
    {
        $sql = "insert into singer(name,introduce)values('king','123')";
        $query = $this->db->query($sql);
        
        echo $query;
    }

    function insertSinger2()
    {
        $data = array(
            'name' => "wwesdd",
            'introduce' => "33535y4erth"
        );

        $query = $this->db->insert('singer', $data);

        echo $query;
    }

    function updataSinger1($name, $id)
    {
        $sql = "update singer set name = $name where id=$id";
        $query = $this->db->query($sql);
        echo $query;
    }

    function updataSinger2()
    {
        $this->db->set('name', 'field+1');

        $this->db->where('id', 30);

        $query=$this->db->update('singer');

        echo $query;
    }
    
    function deleteSinger1(){
        $sql = "delete from singer where id =30 ";
        $query = $this->db->query($sql);
        echo $query;
    }
    
    
    function deleteSinger2(){
       $this->db->where('id', 31);
       $query =$this->db->delete('singer');
        echo $query;
    }
}
?>