<?php

require_once(dirname(__FILE__) . "/../signin/DbConnection.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Account_
 *
 * @author Marcela
 */
class User extends DBConnection {

    public function insertAccount($username, $password, $first_name, $last_name, $mail, $role_id, $cv) {
        echo "Got inside Insert";
        //$query =   "INSERT INTO user(id, username, password, first_name, last_name, mail, role_id, cv) VALUES (5,'abc','b','c','d','e',1, NULL) ";
        $query = "INSERT INTO user( username, password, first_name, last_name, mail, role_id, cv) VALUES ('$username','$password', '$first_name', '$last_name','$mail','$role_id', 'NULL') ";
        $mysqlconnection = $this->getConnection();
        $result = mysqli_query($mysqlconnection, $query);
        $this->closeConnection($mysqlconnection);
        echo "My results";
        if ($result) {
            //$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
            echo "Got it";
        } else {
            $result = array();
            echo "Nothing";
        }
        return $result;
    }

    public function getAllRoles() {
        $query = "select * from user_role";
        $mysqlconnection = $this->getConnection();
        $result = mysqli_query($mysqlconnection, $query);
        $this->closeConnection($mysqlconnection);
        if ($result) {
            echo "Got roles";
            $result = mysqli_fetch_all($result,MYSQLI_ASSOC);
        } else {
             $result = array();
        }
        return $result;
    }
     public function getAllUsers(){
        $query = "select * from user ";
        $mysqlconnection = $this->getConnection();
        $result = mysqli_query($mysqlconnection, $query);
        $this->closeConnection($mysqlconnection);
        if($result){
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        else{
           return array();
        }
}

    public function usersAvailable(){
       return count($this->getAllUsers()) > 0 ? true : false;
    }

    public function getUser($username){
        $query = "SELECT * FROM `user` where `username` = '$username'";
        $mysqlconnection = $this->getConnection();
        $result = mysqli_query($mysqlconnection, $query);
        $this->closeConnection($mysqlconnection);
        
        if($result){
            $result = mysqli_fetch_assoc($result);
        }
        else{
            $result = array();
        }
        return $result;
    }


}
