<?php
include "conectardb.php";
?>
<?php


    public function eva_insertar()
    {
        $sql = "SELECT MAX(id) AS id from evalua_matematicas0;";
        $query = $this->db->query($sql);
        $datos = $query->result_array();

        $id = 0;
        foreach ($datos as $item) {
            $id = $item["id"];
        }
        $id ++;

        $nb_evaluacion = $this->input->post('nb_evaluacion');
        $tx_imagen = $this->input->post('tx_imagen');
        $fe_inicio = $this->input->post('fe_inicio');
        $fe_final = $this->input->post('fe_final');
        $ca_puntaje = $this->input->post('ca_puntaje');

        $data = array(
            'id' => $id,
            'nb_evaluacion' => $nb_evaluacion,
            'fe_inicio' => $fe_inicio,
            'fe_final' => $fe_final,
            'tx_imagen' => $tx_imagen,
            'ca_puntaje' => $ca_puntaje
        );
        $str = $this->db->insert_string('evalua_matematicas0', $data);
        $query = $this->db->query($str);

        $data['valor'] = 'ok';
        $this->load->view('si', $data);
    }


?>
