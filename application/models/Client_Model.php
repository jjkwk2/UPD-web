<?php
class Client_Model extends CI_model{

    //Buyer
    public function insertData_B ($clinsert){
        
        $result = $this->db->insert('buyercl', $clinsert);
        if($result){
            return true;
        } else {
            return false;
        }
    } 


    //Seller
    public function insertData_S ($insertData_S){
        
        $result = $this->db->insert('buyercl', $clinsert);
        if($result){
            return true;
        } else {
            return false;
        }
    }
    

}