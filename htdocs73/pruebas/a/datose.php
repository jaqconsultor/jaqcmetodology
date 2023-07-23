<?php
include "conectardb.php";
?>
<?php


    public function eva_quitar()
    {
        $id = $this->input->post('codigo');
        $str = 'delete from evalua_matematicas0 where id = ' . $id;
        $query = $this->db->query($str);

        $data['valor'] = 'ok';
        $this->load->view('si', $data);
    }

?>
