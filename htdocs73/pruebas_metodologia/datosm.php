<?php
include "conectardb.php";
?>
<?php

    public function eva_guardar()
    {

 setlocale(LC_TIME, "es_ES");
        $fe_informacion = strftime("%Y/%m/%d %H:%M:%S");

        $fe_archivo = strftime("%Y_%m_%d");
        $data['fe_informacion'] = $fe_informacion;
		
        $id = $this->input->post('codigo');
        $nb_evaluacion = $this->input->post('nb_evaluacion');
        $userfile = $this->input->post('userfile');
        $fe_inicio = $this->input->post('fe_inicio');
        $fe_final = $this->input->post('fe_final');
        $ca_puntaje = $this->input->post('ca_puntaje');

        $data = array(
            'id' => $id,
            'nb_evaluacion' => $nb_evaluacion,
            'fe_inicio' => $fe_inicio,
            'fe_final' => $fe_final,
            'userfile' => $archivo,
            'ca_puntaje' => $ca_puntaje
        );
        $where = "id = " . $id;
        $str = $this->db->update_string('evalua_matematicas0', $data, $where);
        $query = $this->db->query($str);

        $data['valor'] = 'ok';
        $this->load->view('si', $data);
    }

?>
