<?php if (!defined('BASEPATH'))
    exit('No direct script access
allowed');
class m_user extends CI_Model
{
    //Login
    function getEmailUser($email)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $email);
        $query = $this->db->get();
        return $query;
    }
    function getPassUser($password)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('password', $password);
        $query = $this->db->get();
        return $query;
    }

    function ubahpasswordUser($email, $data)
    {
        $this->db->set($data);
        $this->db->where('email', $email);
        $this->db->update('user');
    }

}
?>