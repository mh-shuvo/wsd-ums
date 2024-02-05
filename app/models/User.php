<?php
class User{
    private $db;
    private $user = [];

    public function __construct(){
        $this->db = new Database();
        $this->user = json_decode(json_encode(Session::get(AUTH_TOKEN_KEY)),true);
    }


    public function getAllUsers($cols = "*",$search = NULL){

        $selectedCols = $cols;

        if(is_array($cols)){
            $selectedCols = implode(",",$cols);
        }


        $sql = "SELECT $selectedCols FROM users WHERE `id` <> :id ";

        if ($search != NULL) {
            $sql .= "AND (username LIKE :username OR email LIKE :email) ";
        }

        $sql .= "ORDER BY id DESC";

        $this->db->query($sql);

        $this->db->bind(":id", $this->user['id']);
        if ($search != NULL) {
            $this->db->bind(":username", '%' . $search . '%');
            $this->db->bind(":email", '%' . $search . '%');
        }

        // Execute
        if ($this->db->execute()) {
            return $this->db->resultSet();
        } else {
            return false;
        }
    }


    //Update user profile

    public function updateProfile($data){
        $this->db->query("UPDATE users SET username = :username, email = :email WHERE id = :id");
        //Bind values
        $this->db->bind(":username",$data['username']);
        $this->db->bind(":email",$data['email']);
        $this->db->bind(":id",$data['id']);
        // Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }


    //Find user by email

    public function findUserByUsername($username){
        $this->db->query('SELECT * FROM users WHERE username = :username');
        $this->db->bind(':username',$username);
        $row = $this->db->single();

        //check row

        if($this->db->rowCount() > 0){
            return $row;
        }
        else{
            return false;
        }
    }
    //Find user by email

    public function findUserByEmail($email){
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email',$email);
        $row = $this->db->single();

        //check row

        if($this->db->rowCount() > 0){
            return $row;
        }
        else{
            return false;
        }
    }

    public function login($username,$password){
        $this->db->query('SELECT * FROM users WHERE username = :username');
        $this->db->bind(':username',$username);
        $row = $this->db->single();

        $hashed_password = $row->password;

        if(password_verify($password,$hashed_password) == TRUE){
            return $row;
        }else{
            return FALSE;
        }
    }

    public function updatePassword($data){
        $this->db->query("UPDATE users SET password = :password WHERE id = :id");
        //Bind values
        $this->db->bind(":password",$data['password']);
        $this->db->bind(":id",$data['id']);
        // Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function delete($id){
        $this->db->query("DELETE FROM users WHERE id=:id;");
        $this->db->bind(":id",$id);
        // Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}