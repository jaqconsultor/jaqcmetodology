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
            <h1>Form Information: In Construccion</h1>
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

                  <?php foreach ($datos as $news_item): ?>
                  <td><?php echo $news_item['Nivel']; ?></td>
                  <?php endforeach ?>
	
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
              <option value="1">Empresa 1</option>
              <option value="2">Empresa 2</option>
            </select></td>
            <td width="123" align="right"><span style="color: #000000">CONTROLE:</span></td>
            <td width="158"><input type="text" name="id_nro_controle" id="id_nro_controle" /></td>
          </tr>
          <tr>
            <td style="color: #000000">Fe Facture:</td>
            <td><input type="text" name="fe_factura" id="fe_factura" /></td>
            <td width="54" style="text-align: right"><span style="color: #000000; font-weight: normal;">Imprimé:</span></td>
            <td width="130"><select name="id_impreso" id="id_impreso">
              <option>SI</option>
              <option>NO</option>
            </select></td>
            </tr>
          <tr>
            <td style="color: #000000">No. Facture:</td>
            <td><input type="text" name="nu_factura" id="nu_factura" /></td>
            <td style="text-align: right"><span style="color: #000000; font-weight: normal;">Externe:</span></td>
            <td><select name="id_externo" id="id_externo">
              <option>SI</option>
              <option>NO</option>
            </select></td>
            </tr>
          <tr>
            <td style="color: #000000">Commande:</td>
            <td><input type="text" name="nro_comanda" id="nro_comanda" /></td>
            <td style="text-align: right"><span style="color: #000000; font-weight: normal;">Etat:</span></td>
            <td><select name="id_estado" id="id_estado">
              <option>Actif</option>
              <option>Annulé</option>
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
            <td><select name="id_cliente" id="id_cliente">
              <option>Cliente</option>
              <option>Proveedor</option>
            </select></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </tbody>
      </table>        <br></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#0A9400">Palettes</td>
    </tr>
    <tr>
      <td><table width="100%" border="0">
        <tr>
          <td style="color: #000000">&nbsp;</td>
          <td bgcolor="#0A9400" style="color: #FFFFFF">Blues </td>
          <td bgcolor="#0A9400" style="color: #FFFFFF">Blanches</td>
          <td bgcolor="#0A9400" style="color: #FFFFFF">Totales</td>
          <td bgcolor="#FFFFFF" style="color: #FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" style="color: #000000">Pal 138</td>
          <td style="color: #000000"><label for="textfield"></label>
            <input name="textfield" type="text" id="textfield" size="15" /></td>
          <td style="color: #000000"><input name="textfield3" type="text" id="textfield3" size="15" /></td>
          <td style="color: #000000"><input name="textfield5" type="text" id="textfield5" size="15" /></td>
          <td style="color: #000000">&nbsp;</td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" style="color: #000000">Pal 116</td>
          <td style="color: #000000"><input name="textfield2" type="text" id="textfield2" size="15" /></td>
          <td style="color: #000000"><input name="textfield4" type="text" id="textfield4" size="15" /></td>
          <td style="color: #000000"><input name="textfield6" type="text" id="textfield6" size="15" /></td>
          <td style="color: #000000">&nbsp;</td>
        </tr>
        <tr>
          <td style="color: #000000; font-weight: bold;">Totales</td>
          <td style="color: #000000"><input name="textfield9" type="text" id="textfield9" size="15" /></td>
          <td style="color: #000000"><input name="textfield8" type="text" id="textfield8" size="15" /></td>
          <td style="color: #000000"><input name="textfield7" type="text" id="textfield7" size="15" /></td>
          <td style="color: #000000">Sans palettes
            <label for="select"></label>
            <select name="select" id="select">
              <option>SI</option>
              <option>NO</option>
            </select></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td bgcolor="#0A9400">Livraison</td>
    </tr>
    <tr>
      <td><table width="200" border="0">
        <tbody>
          <tr>
            <td width="104" style="color: #000000">Lieu de livraison:</td>
            <td width="80"><select name="id_lugar" id="id_lugar">
              <option>Lugar 1</option>
              <option>Lugar 2</option>
              <option>Lugar 3</option>
            </select></td>
          </tr>
          <tr>
            <td style="color: #000000">Camion:</td>
            <td><select name="id_camion" id="id_camion">
              <option>Camion 1</option>
              <option>Camion 2</option>
              <option>Camion 3</option>
            </select></td>
          </tr>
          <tr>
            <td style="color: #000000">Voyage:</td>
            <td><select name="select2" id="select2">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select></td>
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
            <td width="154"><select name="id_chofer1" id="id_chofer1">
              <option>Chofer 1</option>
              <option>Chofer 2</option>
              <option>Chofer 3</option>
              </select></td>
            <td width="144">&nbsp;</td>
            <td width="149">&nbsp;</td>
            </tr>
          <tr>
            <td align="right" style="color: #000000">Requisition:</td>
            <td><input type="text" name="textfield10" id="textfield10" /></td>
            <td align="right" style="color: #000000">Date requise:</td>
            <td><input type="text" name="textfield11" id="textfield11" /></td>
            </tr>
          <tr>
            <td align="right" style="color: #000000">HR.RDV: </td>
            <td><input type="text" name="textfield12" id="textfield12" /></td>
            <td align="right" style="color: #000000">Heure:</td>
            <td><input type="text" name="textfield13" id="textfield13" /></td>
            </tr>
          <tr>
            <td align="right" style="color: #000000">#RDV:</td>
            <td><input type="text" name="textfield14" id="textfield14" /></td>
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
              <option>Chofer 1</option>
              <option>Chofer 2</option>
              <option>Chofer 3</option>
            </select></td>
            <td width="144">&nbsp;</td>
            <td width="149">&nbsp;</td>
          </tr>
          <tr>
            <td align="right" style="color: #000000">Requisition:</td>
            <td><input type="text" name="textfield15" id="textfield15" /></td>
            <td align="right" style="color: #000000">Date requise:</td>
            <td><input type="text" name="textfield15" id="textfield16" /></td>
          </tr>
          <tr>
            <td align="right" style="color: #000000">HR.RDV: </td>
            <td><input type="text" name="textfield15" id="textfield17" /></td>
            <td align="right" style="color: #000000">Heure:</td>
            <td><input type="text" name="textfield15" id="textfield18" /></td>
          </tr>
          <tr>
            <td align="right" style="color: #000000">#RDV:</td>
            <td><input type="text" name="textfield15" id="textfield19" /></td>
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
      <td>&nbsp;</td>
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

  <tr>
    <td width="61%">Entreprise: 
      <label for="id_empresa"></label>
      <select name="id_empresa" id="id_empresa">
        <option value="1">Empresa 1</option>
        <option value="2">Empresa 2</option>
    </select>     
       Imprimé: <label for="id_impreso"></label>
       <select name="id_impreso" id="id_impreso">
         <option>SI</option>
         <option>NO</option>
      </select>     
        Externe: <label for="id_externo"></label>
        <select name="id_externo" id="id_externo">
          <option>SI</option>
          <option>NO</option>
       </select>
       Etat: 
       <label for="id_estado"></label>
       <select name="id_estado" id="id_estado">
         <option>Actif</option>
         <option>Annulé</option>
       </select></td>
    <td width="39%">Import-Export: 
      <label for="select3"></label>
      <select name="select3" id="select3">
        <option>SI</option>
        <option>NO</option>
    </select>     
       Sans frais transport: <select name="select4" id="select4">
         <option>SI</option>
         <option>NO</option>
      </select></td>
  </tr>
  <tr>
    <td><p>Num CONTROLE: 
        <label for="id_nro_controle"></label>
    <input type="text" name="id_nro_controle" id="id_nro_controle" />
    </p>
    <p>Fe Facture: 
      <label for="fe_factura"></label>
      <input type="text" name="fe_factura" id="fe_factura" />
    </p>
    <p>Nu Facture:
      <label for="nu_factura"></label>
      <input type="text" name="nu_factura" id="nu_factura" />
    </p>
    <p>Commande: 
      <label for="nro_comanda"></label>
      <input type="text" name="nro_comanda" id="nro_comanda" />
    </p>
    <p>Fournisseurs/Client: 
      <label for="id_cliente"></label>
      <select name="id_cliente" id="id_cliente">
        <option>Cliente</option>
        <option>Proveedor</option>
      </select>
    </p></td>
    <td valign="top"><p>Saison: 
        <label for="id_temporada"></label>
        <select name="id_temporada" id="id_temporada">
          <option>Temporada 1</option>
          <option>Temporada 2</option>
          <option>Temporada 3</option>
        </select>
    </p>
    <p>Date Import-Export: 
      <label for="textfield15"></label>
      <input type="text" name="textfield16" id="textfield15" />
    </p>
    <p>Avion: 
      <label for="textfield16"></label>
      <input type="text" name="textfield17" id="textfield16" />
    </p>
    <p>Camion;
      <label for="textfield17"></label>
      <input type="text" name="textfield18" id="textfield17" />
    </p>
    <p>Corrélation interne (camion)<br />     
      <label for="textfield18"></label>
      <input type="text" name="textfield19" id="textfield18" />
    </p>
    <p>Compagnie aérienne 
      <label for="select5"></label>
      <select name="select5" id="select5">
        <option>COmpañia Aerea 1</option>
        <option>Compania Aerea 2</option>
      </select>
    </p></td>
  </tr>
  <tr>
    <td><table width="100%" border="0">
      <tr>
        <td>&nbsp;</td>
        <td>Blues </td>
        <td>Blanches</td>
        <td>Totales</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>Pal 138</td>
        <td><label for="textfield"></label>
          <input name="textfield" type="text" id="textfield" size="15" /></td>
        <td><input name="textfield3" type="text" id="textfield3" size="15" /></td>
        <td><input name="textfield5" type="text" id="textfield5" size="15" /></td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>Pal 116</td>
        <td><input name="textfield2" type="text" id="textfield2" size="15" /></td>
        <td><input name="textfield4" type="text" id="textfield4" size="15" /></td>
        <td><input name="textfield6" type="text" id="textfield6" size="15" /></td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>Totales</td>
        <td><input name="textfield9" type="text" id="textfield9" size="15" /></td>

        <td><input name="textfield8" type="text" id="textfield8" size="15" /></td>
        <td><input name="textfield7" type="text" id="textfield7" size="15" /></td>
        <td>Sans palettes 
          <label for="select"></label>
          <select name="select" id="select">
            <option>SI</option>
            <option>NO</option>
          </select></td>
        </tr>
    </table></td>
    <td valign="top"><p>AWB: 
      <label for="textfield19"></label>
      <input type="text" name="textfield20" id="textfield19" />
    </p>
    <p>Bill of Lading: 
      <label for="textfield20"></label>
      <input type="text" name="textfield21" id="textfield20" />
    </p>
    <p>Facture Final: 
      <label for="textfield21"></label>
      <input type="text" name="textfield22" id="textfield21" />
    </p></td>
  </tr>
  <tr>
    <td><p>Lieu de livraison: 
        <label for="id_lugar"></label>
        <select name="id_lugar" id="id_lugar">
          <option>Lugar 1</option>
          <option>Lugar 2</option>
          <option>Lugar 3</option>
        </select>
    </p>
    <p>Camion: 
      <label for="id_camion"></label>
      <select name="id_camion" id="id_camion">
        <option>Camion 1</option>
        <option>Camion 2</option>
        <option>Camion 3</option>
      </select>
    Voyage: 
    <label for="select2"></label>
    <select name="select2" id="select2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    </p></td>
    <td valign="top"><p>Poids Vol.: 
      <label for="textfield22"></label>
      <input type="text" name="textfield23" id="textfield22" />
    </p>
    <p>Nu Douane: 
      <label for="textfield23"></label>
      <input type="text" name="textfield24" id="textfield23" />
    </p></td>
  </tr>
  <tr>
    <td><p>Transport 1:
        <label for="id_chofer1"></label>
        <select name="id_chofer1" id="id_chofer1">
          <option>Chofer 1</option>
          <option>Chofer 2</option>
          <option>Chofer 3</option>
        </select>
    </p>
    <p>Requisition: 
      <label for="textfield10"></label>
      <input type="text" name="textfield10" id="textfield10" />
    Date requise: 
    <label for="textfield11"></label>
    <input type="text" name="textfield11" id="textfield11" />
    </p>
    <p>HR.RDV:
      <label for="textfield12"></label>
      <input type="text" name="textfield12" id="textfield12" />
    Heure: 
    <label for="textfield13"></label>
    <input type="text" name="textfield13" id="textfield13" />
    </p>
    <p>#RDV:
      <label for="textfield14"></label>
      <input type="text" name="textfield14" id="textfield14" />
    </p></td>
    <td valign="top"><p>Embarquement 
      <label for="select6"></label>
      <select name="select6" id="select6">
        <option>Embarquement</option>
        <option>Embarquement</option>
        <option>Embarquement</option>
      </select>
    </p>
    <p>Sortie: 
      <label for="textfield24"></label>
      <input type="text" name="textfield25" id="textfield24" />
    </p>
    <p>Arrivée: 
      <label for="textfield25"></label>
      <input type="text" name="textfield26" id="textfield25" />
    </p>
    <p>Pick-up:: 
      <label for="textfield26"></label>
      <input type="text" name="textfield27" id="textfield26" />
    </p></td>
  </tr>
  <tr>
    <td><p>Transport 2:
        <label for="id_chofer1"></label>
      <select name="id_chofer2" id="id_chofer1">
        <option>Chofer 1</option>
        <option>Chofer 2</option>
        <option>Chofer 3</option>
      </select>
    </p>
      <p>Requisition:
        <label for="textfield10"></label>
        <input type="text" name="textfield15" id="textfield10" />
        Date requise:
  <label for="textfield11"></label>
  <input type="text" name="textfield15" id="textfield11" />
      </p>
      <p>HR.RDV:
        <label for="textfield12"></label>
        <input type="text" name="textfield15" id="textfield12" />
        Heure:
  <label for="textfield13"></label>
  <input type="text" name="textfield15" id="textfield13" />
      </p>
      <p>#RDV:
        <label for="textfield14"></label>
        <input type="text" name="textfield15" id="textfield14" />
    </p></td>
    <td valign="top"><p>Prix Negocie Transp: 
      <label for="textfield27"></label>
      <input type="text" name="textfield28" id="textfield27" />
    </p>
    <p>Boîtes 
      <label for="textfield28"></label>
      <input type="text" name="textfield29" id="textfield28" />
    </p>
    <p>Montant facture: 
      <label for="textfield29"></label>
      <input type="text" name="textfield30" id="textfield29" />
    </p></td>
  </tr>
  <tr>
    <td><p>Num CONTROLE: 
        <label for="id_nro_controle"></label>
    <input type="text" name="id_nro_controle" id="id_nro_controle" />
    </p>
    <p>Fe Facture: 
      <label for="fe_factura"></label>
      <input type="text" name="fe_factura" id="fe_factura" />
    </p>
    <p>Nu Facture:
      <label for="nu_factura"></label>
      <input type="text" name="nu_factura" id="nu_factura" />
    </p>
    <p>Commande: 
      <label for="nro_comanda"></label>
      <input type="text" name="nro_comanda" id="nro_comanda" />
    </p>
    <p>Fournisseurs/Client: 
      <label for="id_cliente"></label>
      <select name="id_cliente" id="id_cliente">
        <option>Cliente</option>
        <option>Proveedor</option>
      </select>
    </p></td>
    <td valign="top"><p>&nbsp;</p></td>
  </tr>
</table>



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
