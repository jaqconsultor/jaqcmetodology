<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Layout &rsaquo; Top Navigation &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url();?>recursos/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>recursos/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>recursos/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>recursos/assets/css/components.css">
  
  <style type="text/css">
body,td,th {
	font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-style: normal;
	font-weight: bold;
	font-size: 10px;
	color: #FFFFFF;
}
</style>
  
</head>

	
<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">

      <?php echo $menu; ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <?php if( $nro == 0 ) { ?>
              <h1>New No Controle</h1>
            <?php } else { ?>
              <h1>Edit No Controle</h1>
            <?php } ?>
          </div>

          <div class="section-body">
            <div class="card">
<!--              <div class="card-header">
              </div> -->
              <div class="card-body">
				  
<div class="row">
              <div class="col-12">
                <div class="card">
                <!--  <div class="card-header">
                    <h4>Basic DataTables</h4> 
                  </div> -->
                  <div class="card-body">
                  

 <form action="<?php echo site_url($accionFormulario); ?>" method="post" name="id_formulario_1" id="id_formulario_1">
	<table width="632" border="0">
  <tbody>
    <tr>
      <td width="604" bgcolor="#0A9400">General</td>
      <td width="585" rowspan="23" align="left" valign="top"><br></td>
    </tr>
    <tr>
      <td height="171"><table width="579" border="0">
        <tbody>
          <tr>
            <td width="74" align="right"><span style="text-align: right; color: #000000;">Entreprise: </span><br>
              <br></td>
            <td width="206">

            <select name="id_empresa" id="id_empresa">
              <?php foreach ($emrpesas as $news_item): ?>
                <?php $sel = "" ?>
                <?php if ( $news_item['id'] == $id_empresa ) { $sel = "selected" ;} ?>
                <option value="<?php echo $news_item['id']; ?>" <?php echo $sel; ?>><?php echo $news_item['nb_empresa']; ?></option>
              <?php endforeach ?>
            </select></td>
            <td width="123" align="right"><span style="color: #000000">CONTROLE:</span></td>
            <td width="158"><input value="<?php echo $nu_control; ?>" name="nu_control" type="text" id="nu_control" readonly="readonly" /></td>
          </tr>
          <tr>
            <td style="color: #000000">Fe Facture:</td>
            <td><input type="text" name="fe_factura" id="fe_factura" value="<?php echo $fe_factura; ?>"/></td>
            <td width="123" style="text-align: right"><span style="color: #000000; font-weight: normal;">Imprimé:</span></td>

            <td width="158"><select name="in_impreso" id="in_impreso">
            <?php if ( $in_impreso == 'N' ) { ?>
              <option value="N" selected>NO</option>
              <option value="S">SI</option>
            <?php } else { ?>
              <option value="N">NO</option>
              <option value="S" selected>SI</option>
            <?php } ?>
            </select>
            </td>
            </tr>
          <tr>
            <td style="color: #000000">No. Facture:</td>
            <td><input type="text" name="nu_factura" id="nu_factura" value="<?php echo $nu_factura; ?>"/></td>
            <td style="text-align: right"><span style="color: #000000; font-weight: normal;">Externe:</span></td>

            <td><select name="in_external" id="in_external">
            <?php if ( $in_external == 0 ) { ?>
              <option value="0" selected>NO</option>
              <option value="1">SI</option>
            <?php } else { ?>
              <option value="0">NO</option>
              <option value="1" selected>SI</option>
            <?php } ?>
            </select></td>
            </tr>
          <tr>
            <td style="color: #000000">Commande:</td>
            <td><input type="text" name="nu_comanda" id="nu_comanda" value="<?php echo $nu_comanda; ?>"/></td>
            <td style="text-align: right"><span style="color: #000000; font-weight: normal;">Etat:</span></td>
            <td><select name="in_activo" id="in_activo">
            <?php if ( $in_activo == 0 ) { ?>
              <option value="0" selected>NO</option>
              <option value="1">SI</option>
            <?php } else { ?>
              <option value="0">NO</option>
              <option value="1" selected>SI</option>
            <?php } ?>
            </select></td>
            </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><span style="color: #000000">Fournisseurs/Client</span>:</td>
            <td>

              <select name="id_cliente" id="id_cliente">
                <?php foreach ($clientes as $news_item): ?>
                  <?php $sel = "" ?>
                  <?php if ( $news_item['Id'] == $id_cliente ) { $sel = "selected" ;} ?>
                  <option value="<?php echo $news_item['Id']; ?>" <?php echo $sel; ?>><?php echo $news_item['nb_Clients']; ?></option>
                <?php endforeach ?>              
                </select>
              </td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          </tbody>
      </table>        
      <br></td>
    </tr>
    <tr>
      <td bgcolor="#0A9400">Palettes</td>
    </tr>
    <tr>
      <td><table width="100%" border="0">
        <tr>
          <td style="color: #000000">&nbsp;</td>
          <td  >&nbsp;</td>
          <td  >&nbsp;</td>
          <td  >&nbsp;</td>
          <td  >&nbsp;</td>
        </tr>
        <tr>
          <td style="color: #000000">&nbsp;</td>
          <td bgcolor="#0A9400" style="color: #FFFFFF">Blues </td>
          <td bgcolor="#0A9400" style="color: #FFFFFF">Blanches</td>
          <td bgcolor="#0A9400" style="color: #FFFFFF">Totales</td>
          <td bgcolor="#FFFFFF" style="color: #FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" style="color: #000000">Pal 138</td>
          <td style="color: #000000"><label for="ca_pal_azul_138"></label>
            <input name="ca_pal_azul_138" type="text" id="ca_pal_azul_138" value="<?php echo $ca_pal_azul_138; ?>" size="15" /></td>
          <td style="color: #000000"><input name="ca_pal_amar_138" type="text" id="ca_pal_amar_138" value="<?php echo $ca_pal_amar_138; ?>" size="15" /></td>
          <td style="color: #000000"><input name="ca_tot_138" type="text" id="ca_tot_138" value="<?php echo $ca_tot_138; ?>" size="15" readonly /></td>
          <td style="color: #000000">&nbsp;</td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" style="color: #000000">Pal 116</td>
          <td style="color: #000000"><input name="ca_pal_azul_116" value="<?php echo $ca_pal_azul_116; ?>" type="text" id="ca_pal_azul_116" value="0" size="15" /></td>
          <td style="color: #000000"><input name="ca_pal_amar_116" value="<?php echo $ca_pal_amar_116; ?>" type="text" id="ca_pal_amar_116" value="0" size="15" /></td>
          <td style="color: #000000"><input name="ca_tot_116" value="<?php echo $ca_tot_116; ?>" type="text" id="ca_tot_116" size="15" readonly /></td>
          <td style="color: #000000">&nbsp;</td>
        </tr>
        <tr>
          <td style="color: #000000; font-weight: bold;">Totales</td>
          <td style="color: #000000"><input name="textfield9" type="text" id="textfield9" size="15" readonly /></td>
          <td style="color: #000000"><input name="textfield8" type="text" id="textfield8" size="15" readonly /></td>
          <td style="color: #000000"><input name="textfield7" type="text" id="textfield7" size="15" readonly /></td>
          <td style="color: #000000">Sans palettes
            <label for="in_sin_paletas"></label>

            <select name="in_sin_paletas" id="in_sin_paletas">
            <?php if ( $in_sin_paletas == 0 ) { ?>
              <option value="0" selected>NO</option>
              <option value="1">SI</option>
            <?php } else { ?>
              <option value="0">NO</option>
              <option value="1" selected>SI</option>
            <?php } ?>
            </select>
            </td>
        </tr>
        <tr>
          <td style="color: #000000; font-weight: bold;">&nbsp;</td>
          <td style="color: #000000">&nbsp;</td>
          <td style="color: #000000">&nbsp;</td>
          <td style="color: #000000">&nbsp;</td>
          <td style="color: #000000">&nbsp;</td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td bgcolor="#0A9400">Livraison</td>
    </tr>
    <tr>
      <td><table width="100%" border="0">
        <tbody>
          <tr>
            <td width="104" style="color: #000000">Lieu de livraison:</td>
            <td width="80">
            
            <select name="id_lugar" id="id_lugar">
            <?php foreach ($livraison as $news_item): ?>
              <?php $sel = "" ?>
        <?php if ( $news_item['Id'] == $id_lugar ) { $sel = "selected" ;} ?>
            <option value="<?php echo $news_item['Id']; ?>" <?php echo $sel; ?>><?php echo $news_item['nb_Livraison']; ?></option>            
            <?php endforeach ?>
            </select></td>
            <td style="color: #000000">&nbsp;</td>
<td style="color: #000000">Camion:</td>
            <td>

            <select name="id_camion" id="id_camion">
            <?php foreach ($camion as $news_item): ?>
              <?php $sel = "" ?>
        <?php if ( $news_item['Id'] == $id_camion ) { $sel = "selected" ;} ?>
            <option value="<?php echo $news_item['Id']; ?>" <?php echo $sel; ?>><?php echo $news_item['nb_Camion']; ?></option>            
            <?php endforeach ?>
            </select>
            
            </td>
            <td style="color: #000000">&nbsp;</td>
            <td style="color: #000000">Voyage:</td>
            <td><select name="ca_viaje" id="ca_viaje">

            <?php if ( $ca_viaje == 0 ) { ?>
              <option value="0" selected>0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            <?php } ?>

            <?php if ( $ca_viaje == 1 ) { ?>
              <option value="0">0</option>
              <option value="1" selected>1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            <?php } ?>

            <?php if ( $ca_viaje == 2 ) { ?>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2" selected>2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            <?php } ?>

            <?php if ( $ca_viaje == 3 ) { ?>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3" selected>3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            <?php } ?>

            <?php if ( $ca_viaje == 4 ) { ?>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4" selected>4</option>
              <option value="5">5</option>
            <?php } ?>

            <?php if ( $ca_viaje == 5 ) { ?>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5" selected>5</option>
            <?php } ?>

            <?php if ( $ca_viaje == "" ) { ?>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            <?php } ?>

            </select></td>
          </tr>
          <tr>
            <td style="color: #000000">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td bgcolor="#0A9400">Transport 1</td>
    </tr>
    <tr>
      <td><table width="600" border="0">
        <tbody>
          <tr>
            <td width="125" style="color: #000000">Transport 1:</td>
            <td width="154">
            
            <select name="id_chofer" id="id_chofer">
            <?php foreach ($chauffeur1 as $news_item): ?>
              <?php $sel = "" ?>
        <?php if ( $news_item['Id'] == $id_chofer ) { $sel = "selected" ;} ?>
            <option value="<?php echo $news_item['Id']; ?>" <?php echo $sel; ?>><?php echo $news_item['nb_Chauffeur']; ?></option>            
            <?php endforeach ?>
              </select></td>
            <td width="144">&nbsp;</td>
            <td width="149">&nbsp;</td>
            </tr>
          <tr>
            <td align="right" style="color: #000000">Requisition:</td>
            <td><input type="text" value="<?php echo $nu_requisicion; ?>" name="nu_requisicion" id="nu_requisicion" /></td>
            <td align="right" style="color: #000000">Date requise:</td>
            <td><input type="text" value="<?php echo $fe_entrega; ?>" name="fe_entrega" id="fe_entrega" /></td>
            </tr>
          <tr>
            <td align="right" style="color: #000000">HR.RDV: </td>
            <td><input type="text" value="<?php echo $fe_hrrdv; ?>" name="fe_hrrdv" id="fe_hrrdv" /></td>
            <td align="right" style="color: #000000">Heure:</td>
            <td><input type="text" value="<?php echo $ho_entrega; ?>" name="ho_entrega" id="ho_entrega" /></td>
            </tr>
          <tr>
            <td align="right" style="color: #000000">#RDV:</td>
            <td><input type="text" value="<?php echo $nu_rdv; ?>" name="nu_rdv" id="nu_rdv" /></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
          <tr>
            <td align="right" style="color: #000000">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          </tbody>
      </table></td>
    </tr>
    <tr>
      <td bgcolor="#0A9400">Transport 2</td>
    </tr>
    <tr>
      <td><table width="600" border="0">
        <tbody>
          <tr>
            <td width="125" style="color: #000000">Transport 2:</td>
            <td width="154"><select name="id_chofer2" id="id_chofer2">
        <?php $sel = "" ?>
        <?php if ( $news_item['Id'] == $id_chofer2 ) { $sel = "selected" ;} ?>

            <?php foreach ($chauffeur2 as $news_item): ?>
              <option value="<?php echo $news_item['Id']; ?>" <?php echo $sel; ?>><?php echo $news_item['nb_Chauffeur']; ?></option>            
            <?php endforeach ?>

                        </select></td>
            <td width="144">&nbsp;</td>
            <td width="149">&nbsp;</td>
          </tr>
          <tr>
            <td align="right" style="color: #000000">Requisition:</td>
            <td><input type="text" value="<?php echo $nu_requisicion2; ?>" name="nu_requisicion2" id="nu_requisicion2" /></td>
            <td align="right" style="color: #000000">Date requise:</td>
            <td><input type="text" value="<?php echo $fe_entrega2; ?>" name="fe_entrega2" id="fe_entrega2" /></td>
          </tr>
          <tr>
            <td align="right" style="color: #000000">HR.RDV: </td>
            <td><input type="text" value="<?php echo $fe_hrrdv2; ?>" name="fe_hrrdv2" id="fe_hrrdv2" /></td>
            <td align="right" style="color: #000000">Heure:</td>
            <td><input type="text" value="<?php echo $ho_entrega2; ?>" name="ho_entrega2" id="ho_entrega2" /></td>
          </tr>
          <tr>
            <td align="right" style="color: #000000">#RDV:</td>
            <td><input type="text" value="<?php echo $nu_rdv2; ?>" name="nu_rdv2" id="nu_rdv2" /></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>	<input type="submit" name="id_boton_guardar" id="id_boton_guardar" value="Enregistrer"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>


 </form>


                  </div>
                </div>
              </div>
            </div>				  
				  
              </div>
             <!-- <div class="card-footer bg-whitesmoke">
               </div> -->
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2020 <div class="bullet"></div> Design By <a href="#">By Programmers</a>
        </div>
        <div class="footer-right">
          <strong>Version 1.0.0</strong>
        </div>
      </footer>
    </div>
  </div>

<!-- Button to Open the Modal -->


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
		  
		      <div class="panel panel-default">
        <div class="panel-heading">Nueva Materia</div>
        <div class="panel-body">
<form action="/action_page.php">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-link">Reeet</button>
</form>

        </div>
    

		  
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>	
	

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?php echo base_url();?>recursos/assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="<?php echo base_url();?>recursos/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>recursos/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url();?>recursos/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js"></script>
	
  <!-- Page Specific JS File -->
<script src="<?php echo base_url();?>recursos/assets/js/page/modules-datatables.js"></script>
	
  <!-- Template JS File -->
  <script src="<?php echo base_url();?>recursos/assets/js/scripts.js"></script>
  <script src="<?php echo base_url();?>recursos/assets/js/custom.js"></script>
</body>
</html>
