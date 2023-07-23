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


?>
