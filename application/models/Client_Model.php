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
    public function insertData_S ($clinsert){
        
        $result = $this->db->insert('sellercl', $clinsert);
        if($result){
            return true;
        } else {
            return false;
        }
    }
    
    //Location
    public function getProvinces (){
        $this->db->distinct();
        $this->db->select('*');
        $this->db->from('locationcl');
        $this->db->group_by('PROVINCE');
        $query = $this->db->get();
         if ($query->num_rows() > 0){
                 $result =  $query->result();
                 return $result;
            }
         else{
             return false;
         }
    }
    public function getCities($slPrv){
        $this->db->distinct();
        $this->db->select('*');
        $this->db->from('locationcl');
        $this->db->where('PROVINCE',$slPrv);
        $query = $this->db->get();
         if ($query->num_rows() > 0){
                 $result =  $query->result();
                 return $result;
            }
         else{
             return false;
         }
    }
    public function getCities1(){
        $this->db->distinct();
        $this->db->select('*');
        $this->db->from('locationcl');
        //$this->db->where('PROVINCE',$slPrv);
        $query = $this->db->get();
         if ($query->num_rows() > 0){
                 $result =  $query->result();
                 return $result;
            }
         else{
             return false;
         }
    }
    public function getCityDetails ($slCty){
        $this->db->select('*');
        $this->db->from('locationcl');
        $this->db->where('CITY',$slCty);
        $query = $this->db->get();
         if ($query->num_rows() > 0){
                 $result =  $query->result();
                 return $result;
            }
         else{
             return false;
         }
    }

    //Services Blog Post
    public function getTags(){
        $this->db->select('*');
        $this->db->from('tagtbl');
        $query = $this->db->get();
         if ($query->num_rows() > 0){
                 $result =  $query->result();
                 return $result;
            }
         else{
             return false;
         }
    }
    public function getTaggedPosts($tgWords){
        $this->db->select('*');
        $this->db->from('services');
        $this->db->where('POSTAG',$tgWords);
        $this->db->where('STATUS',1);
        $query = $this->db->get();
         if ($query->num_rows() > 0){
                 $result =  $query->result();
                 return $result;
            }
         else{
             return false;
         }
    }

    //Events Blog Post
    public function getSliderEvent(){
        $this->db->select('*');
        $this->db->from('events');
        $this->db->where('E_STATUS',1);
        $this->db->where('E_SLIDER_S',1);
        $query = $this->db->get();
         if ($query->num_rows() > 0){
                 $result =  $query->result();
                 return $result;
            }
         else{
             return false;
         }
    }
    public function getEventPosts($evid){
        $this->db->select('*');
        $this->db->from('events');
        $this->db->where('E_STATUS',1);
        $this->db->where('EVENT_ID',$evid);
        $query = $this->db->get();
         if ($query->num_rows() > 0){
                 $result =  $query->result();
                 return $result;
            }
         else{
             return false;
         }
    }

}