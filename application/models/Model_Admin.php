<?php
class model_admin extends CI_Model
{

    function login($username,$password)
    {
        $cek = $this->db->get_where('admin',array('username'=>$username,'password'=>
        //md5
        ($password)));
        if($cek->num_rows()>0)
        {
            return TRUE;
        }else
        {
            return FALSE;
        }
    }
}