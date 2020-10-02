<?php
$filepath = realpath(dirname(__FILE__));
include_once $filepath.'../../database/db.php';
class Comment{
    private $db;
    private $name;
    private $comment;
    private $table = "tbl_comment";

    public function __construct()
    {
        $this->db = new DB();
    }

    public function setData($name,$comment)
    {
        $this->name = $name;
        $this->comment = $comment;
    }

    public function create()
    {
        $query = "INSERT into $this->table(name,comment,comment_time) VALUES('$this->name','$this->comment',now())";
        $insert_comment = $this->db->insert($query);
        return $insert_comment;
    }

    public function select()
    {
        $query = "SELECT * FROM $this->table ORDER BY id DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function dateFormat($data)
    {
        date_default_timezone_set('Asia/Bangkok');
        $date = date('M j, h:i:s a',time());
        return $date;
    }
}
?>