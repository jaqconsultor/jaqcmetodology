<?php
include "conectardb.php";
?>
<?php

    public function enpj()
    {
        $sql = "SELECT m.* FROM evalua_matematicas m where id_evalua_mat0 = 1 order by m.id";
        $query = $this->db->query($sql);
        $datos = $query->result_array();

        $cars = array();
        $j = 0;

        foreach ($datos as $item) {
            $cars[$j] = array(
                "",
                $item["id"],
                $item["nb_evaluacion"],
                $item["tx_imagen"],
                ""
            );
            $j = $j + 1;
        }

        $data['datos_j'] = '{ "data": ';
        $data['datos_j'] = $data['datos_j'] . json_encode($cars);
        $data['datos_j'] = $data['datos_j'] . ' } ';

        return $this->load->view('djson', $data);
    }

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

    public function eva_quitar()
    {
        $id = $this->input->post('codigo');
        $str = 'delete from evalua_matematicas0 where id = ' . $id;
        $query = $this->db->query($str);

        $data['valor'] = 'ok';
        $this->load->view('si', $data);
    }

?>
