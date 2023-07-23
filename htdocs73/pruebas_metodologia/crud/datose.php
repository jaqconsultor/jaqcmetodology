<?php
include "conectardb.php";
?>
<?php


    $evaluacion = array();
    $resultado = mysqli_query( $GLOBALS['dbdata'],'DELETE * FROM projects where id = ' . $_POST['codigo'] );
/*    while ($row = mysqli_fetch_array($resultado, MYSQL_ASSOC)) {
        $evaluacion[] = $row;
    }

    mysqli_free_result($resultado);

    return $evaluacion;
*/
/*
    public function eva_quitar()
    {
        $id = $this->input->post('codigo');
        $str = 'delete from evalua_matematicas0 where id = ' . $id;
        $query = $this->db->query($str);

        $data['valor'] = 'ok';
        $this->load->view('si', $data);
    }
*/
	echo "ok " . $_POST['codigo'] ;
?>
