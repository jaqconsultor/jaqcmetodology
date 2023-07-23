<?php

class Inicio extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    function index() {
     

  /*           
         $sql = 'SELECT m.* FROM materias m order by m.codigo';
         $query = $this->db->query($sql);
         $query->result_array();
*/

        $this->load->view('pdfs/index');

        //$this->load->view('reporte');

    }
	

    function datos() {
     

        /*           
               $sql = 'SELECT m.* FROM materias m order by m.codigo';
               $query = $this->db->query($sql);
               $query->result_array();
      */
      
              $this->load->view('reporte');
      
              //$this->load->view('reporte');
      
          }

          function factura() {
     

                /*           
                       $sql = 'SELECT m.* FROM materias m order by m.codigo';
                       $query = $this->db->query($sql);
                       $query->result_array();
              */
              
                      $this->load->view('factura');
              
                      //$this->load->view('reporte');
              
                  }
        

    function fpdf() {
        $this->load->library('Class_fpdf');
    
        for($i=1;$i<=400;$i++)
                $productos [] = array('Codigo' => $i, 'Producto' => 'Codigo ' . $i , 'Precio' => '200.00', 'Stock' => '100');

        $pdf = new FPDF();                         //INSTANCIANDO LA CLASE
        $pdf->AliasNbPages();                   //DEFINE UN ALIAS PARA EL TOTAL DE PAGINAS
        $pdf->AddPage();                        //AGREGA UNA PAGINA

        //INICIO DE CABECERA
        $pdf->SetFont('Arial', 'B', 6);           //FUENTE DE LETRA
        $pdf->SetXY(5, 10);                      //COORDENADAS X y Y
        $pdf->SetFillColor(236, 235, 236);        //COLOR DE FONDO EN RGB
        $pdf->Cell(10, 4, 'Codigo', 0, 0, 'C', 1); //COLUMNA UNO
        $pdf->Cell(60, 4, 'Productos', 0, 0, 'L', 1); //COLUMNA UNO
        $pdf->Cell(50, 4, 'Precio', 0, 0, 'R', 1);    //COLUMNA DOS
        $pdf->Cell(50, 4, 'Stock', 0, 0, 'R', 1);     //COLUMNA TRES
        $pos_y = 14;                         // 4 MAS DE LA CABECERA

        $oo = 0;
        foreach ($productos as $producto) {
            $pdf->SetFont('Arial', 'B', 6);
            $pdf->SetXY(5, $pos_y);
            $pdf->SetFillColor(999, 999, 999);
            $pdf->Cell(10, 4, $producto ['Codigo'], 0, 0, 'C', 1);
            $pdf->Cell(60, 4, $producto ['Producto'], 0, 0, 'L', 1);
            $pdf->Cell(50, 4, $producto ['Precio'], 0, 0, 'R', 1);
            $pdf->Cell(50, 4, $producto ['Stock'], 0, 0, 'R', 1);
            $pos_y+=4;
            $oo++;
            if( $oo > 63 ) {
                $pdf->AddPage();                        //AGREGA UNA PAGINA

                //INICIO DE CABECERA
                $pdf->SetFont('Arial', 'B', 6);           //FUENTE DE LETRA
                $pdf->SetXY(5, 10);                      //COORDENADAS X y Y
                $pdf->SetFillColor(236, 235, 236);        //COLOR DE FONDO EN RGB
                $pdf->Cell(10, 4, 'Codigo', 0, 0, 'C', 1); //COLUMNA UNO
                $pdf->Cell(60, 4, 'Productos', 0, 0, 'L', 1); //COLUMNA UNO
                $pdf->Cell(50, 4, 'Precio', 0, 0, 'R', 1);    //COLUMNA DOS
                $pdf->Cell(50, 4, 'Stock', 0, 0, 'R', 1);     //COLUMNA TRES
                $pos_y = 14;                         // 4 MAS DE LA CABECERA

                $oo = 0;
                $pos_y = 14;
            }
        }

        $pdf->Output();
    }


    function tcpdfview() {

        $this->load->library('Class_tcpdf');
//        require_once( "application/appdesktop/libraries/tcpdf60/config/lang/eng.php");
//        require_once( "application/appdesktop/libraries/tcpdf60/tcpdf.php");
// create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Nicola Asuni');
        $pdf->SetTitle('TCPDF Example 002');
        $pdf->SetSubject('TCPDF Tutorial');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// remove default header/footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

// set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

//set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
        $lenguaje = $this->class_tcpdf->mget1();
        $pdf->setLanguageArray($lenguaje);

// ---------------------------------------------------------
// set font
        $pdf->SetFont('times', 'BI', 20);

// add a page
        $pdf->AddPage();


        // Controlador Nombre
        $data['controlador'] = 'PDF';
        $string = '';
        //$string = $string . $this->load->view('pdfs/index', $data, true);
        $string = $string . $this->load->view('factura', $data, true);


// output the HTML content
        $pdf->writeHTML($string, true, false, true, false, '');


// ---------------------------------------------------------
//Close and output PDF document
        $pdf->Output('example_002.pdf', 'I');

//============================================================+
// END OF FILE                                                
//============================================================+
    }

	
}

?>
