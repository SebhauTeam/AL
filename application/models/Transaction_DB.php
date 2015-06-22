<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Transaction_DB
 *
 * @author Snosi
 */
class Transaction_DB extends CI_Model{
   
    /*
    *   This Function Input Data From Array In Tabel 
     * 
     * Start Function :::::
    */
    Function inputdata($ary,$Tbl){
        $this->db->insert($Tbl,$this->Get_Array($ary));
    }// End Function:::::::::
    
    /*
    *   This Function Get Array For InPut 
     * 
     * Start Function :::::
    */
    Function Get_Array($ary){
        foreach ($ary as $key => $value) {
            If($key!="Submit")
                $data[$key]=$value;   
        }
        var_dump($data);
        return $data;
    }// End Function:::::::::
}
