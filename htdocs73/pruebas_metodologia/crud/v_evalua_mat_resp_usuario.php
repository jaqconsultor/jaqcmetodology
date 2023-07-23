<?php
include "cabecera.php";
include "conectardb.php";
?>


<div class="container">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a
						href="#">Enunciados</a></li>
				</ol>
			</div>
			<div class="col-sm-9">
				<ul class="nav nav-pills">
					<li><a class="btn panel-warning btn-sm" data-toggle="pill"
						href="#home"><span class="glyphicon glyphicon-th-list"></span></a></li>
					<li><a class="btn btn-success btn-sm" data-toggle="pill"
						href="#menu2"><span class="glyphicon glyphicon-plus"> </span></a></li>
					<li><a class="btn btn-success btn-sm" data-toggle="pill"
						href="#menu3"><span class="glyphicon glyphicon-list-alt"></span></a></li>
					<li><a class="btn btn-success btn-sm" data-toggle="pill"
						href="#menu4"><span class="glyphicon glyphicon-minus"></span></a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-11 col-lg-12">
				<div class="tab-content">
					<div id="home" class="tab-pane fade in">
						<div class="panel panel-warning">
							<div class="panel-heading">
								<div class="panel-title">Lista</div>
							</div>
							<div style="padding-top: 30px" class="panel-body">
								<table id="exampledt1"
									class="table table-border table-bordered table-cell-hover table-condensed table-hover table-hovered table-responsive table-striped display"
									cellspacing="0" width="90%">
									<thead>
										<tr>
											<th class="text-center">Action</th>
											<th>Codigo</th>
											<th>Enunciado</th>
											<th>Archivo Imagen</th>
											<th class="text-center">Funciones Especiales</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th class="text-center">Action</th>
											<th>Codigo</th>
											<th>Enunciado</th>
											<th>Archivo Imagen</th>
											<th class="text-center">Funciones Especiales</th>
										</tr>
									</tfoot>


								</table>
							</div>
						</div>

						<script type="text/javascript">
							$(document)
									.ready(
											function() {
												var tablescroll = $(
														'#exampledt1')
														.DataTable(
																{
																	"ajax" : 'datosl.php'
																});

												$('#exampledt1 tbody')
														.on(
																'click',
																'tr',
																function() {
																	var data = tablescroll
																			.row(
																					this)
																			.data();

																	$(
																			"#codigo0")
																			.val(
																					data[1]);
																	$(
																			"#codigo1")
																			.val(
																					data[1]);
																	$(
																			"#codigo2")
																			.val(
																					data[1]);
																	$(
																			"#codigo11")
																			.val(
																					data[1]);

																	$(
																			"#nb_project1")
																			.val(
																					data[2]);
																	$(
																			"#nb_acronym1")
																			.val(
																					data[3]);

																	$(
																			"#nb_project2")
																			.val(
																					data[2]);
																	$(
																			"#nb_acronym2")
																			.val(
																					data[3]);

																	$(
																			"#proceso1")
																			.html(
																					"");

																});

												setInterval(function() {
													tablescroll.ajax.reload();
													//$("#proceso1").html("");
												}, 10000);

											});

							function refrescardt() {
								//        tablescroll.ajax.reload();
							}

							/*
							 setInterval( function () {
							 table.ajax.reload();
							 }, 30000 );
							 */
						</script>



					</div>
					<div id="menu2" class="tab-pane fade in">
						<div class="panel panel-info">
							<div class="panel-heading">
								<div class="panel-title">Nuevo Reistro</div>
							</div>

							<div style="padding-top: 30px" class="panel-body">

								<!--        <form id="loginform" name= "loginform" class="form-horizontal" role="form" action="" method="post"> -->
								<div class="form-inline">

									<input type="hidden" id="codigo0" name="codigo0" value="">

									<div style="margin-bottom: 25px" class="input-group">
										Nombre Evaluacion <input id="nb_project0"
											name="nb_project0" type="text" class="form-control"
											value="">
									</div>

									<div style="margin-bottom: 25px" class="input-group">
										Nombre Archivo Imagen <input id="nb_acronym0" name="nb_acronym0"
											type="text" class="form-control" value="" readonly>
									</div>

									<!-- Button (Double) -->
									<div class="form-group">
										<label class="col-md-3 control-label" for="button1id"></label>
										<div class="col-md-12">

											<button id="botonform1" type="submit"
												class="btn btn-default btn-block btn-sm"
												onclick="guardarn(0)">
												<span class="glyphicon glyphicon-save"></span> Agregar Nuevo
											</button>
										</div>
									</div>

									<div class="form-group">
										<div id="proceso1" name="proceso1"></div>
									</div>

									<!--        </form>  -->

								</div>

							</div>

						</div>

						<script>
							/*
							 function solonumeros() {
							 valor = parseInt($("#ca_puntaje").val());
							 if (isNan(valor)) {
							 valor = "";
							 }
							 $("#ca_puntaje").val(valor);
							 return 1;
							 }
							 */

							function guardarn(vdat) {
								var vanterior;
								var procesando;
								var ok;

								var nerr;
								nerr = 1;

								var vurl;

								//solonumeros();

								if (vdat != 2) {

									if ($("#nb_project0").val() == "") {
										nerr = -1;
									}

									if (nerr <= 0) {
										alert("Todos los Datos son Requeridos");
										return -1;
									}

								}

								if (vdat == 0) {

									vurl = 'datosn.php';

									var parametros = {
										"nb_project" : $("#nb_project0")
												.val(),
										"nb_acronym" : $("#nb_acronym0").val()
									};

								}

								ok = 1;

								objeto = "#" + "proceso1";
								vanterior = $(objeto).html();

								//"Access-Control-Allow-Origin:"

								$
										.ajax({
											data : parametros,
											url : vurl,
											type : 'post',
											async : false,
											beforeSend : function() {
												console.log("Empezando");
												procesando = '<span class="alert alert-warning glyphicon glyphicon-transfer"></span>';
												procesando = $(objeto).html(
														procesando);
											},
											error : function(response) {
												console.log("Error");
												console.log(response);
												response1 = JSON
														.stringify(response);
												//alert(response1);
												verror = '<span class="alert alert-danger glyphicon glyphicon-floppy-remove"> Error Enviando Datos</span>';
												//verror = '<button type="button" class="btn btn-danger">Error al enviar los datos</button>';
												$(objeto).html(verror);
												ok = -1;

											},
											success : function(response) {
												response1 = JSON
														.stringify(response);
												console.log("Satisfactorio");
												$vsi = '<span class="alert alert-success glyphicon glyphicon-saved"></span>';
												$(objeto).html($vsi);
												ok = 1;

												$("#nb_project0").val("");
												$("#nb_acronym0").val("");

											},
											complete : function(response) {
												console.log("complete");
												//location.reload(true);
												//refrescardt();

												$("#proceso1").html("");

											}
										});
								//$(objeto).html(vanterior);
								return ok;
							}
						</script>


					</div>
					<div id="menu3" class="tab-pane fade in">
						<div class="panel panel-info">
							<div class="panel-heading">
								<div class="panel-title">Modificar</div>
							</div>

							<div style="padding-top: 30px" class="panel-body">

								<!--        <form id="loginform" name= "loginform" class="form-horizontal" role="form" action="" method="post"> -->
								<div class="form-inline">

									<input type="hidden" id="codigo1" name="codigo1" value="">

									<div style="margin-bottom: 25px" class="input-group">
										Nombre Evaluacion <input id="nb_project1"
											name="nb_project1" type="text" class="form-control"
											value="">
									</div>

									<div style="margin-bottom: 25px" class="input-group">
										Nombre Archivo Imagen <input id="nb_acronym1" name="nb_acronym1"
											type="text" class="form-control" value="" readonly>
									</div>

									<!-- Button (Double) -->
									<div class="form-group">
										<label class="col-md-3 control-label" for="button1id"></label>
										<div class="col-md-12">

											<button id="botonform2" type="submit"
												class="btn btn-info btn-block btn-sm" onclick="guardarm(1)">
												<span class="glyphicon glyphicon-save"></span> Guardar Datos
											</button>

										</div>
									</div>

									<div class="form-group">
										<div id="proceso1" name="proceso1"></div>
									</div>

									<!--        </form>  -->

								</div>

							</div>

						</div>

						<script>
							/*
							 function solonumeros() {
							 valor = parseInt($("#ca_puntaje").val());
							 if (isNan(valor)) {
							 valor = "";
							 }
							 $("#ca_puntaje").val(valor);
							 return 1;
							 }
							 */

							function guardarm(vdat) {
								var vanterior;
								var procesando;
								var ok;

								var nerr;
								nerr = 1;

								var vurl;

								//solonumeros();

								if (vdat == 2) {

									if ($("#codigo1").val() == "") {
										alert("Seleccione un Registro");
										return -1;
									}

								}

								if (vdat == 1) {

									if ($("#codigo1").val() == "") {
										alert("Seleccione un Registro");
										return -1;
									}

								}

								if (vdat != 2) {

									if ($("#nb_project1").val() == "") {
										nerr = -1;
									}

									if (nerr <= 0) {
										alert("Todos los Datos son Requeridos");
										return -1;
									}

								}

								if (vdat == 0) {

									vurl = 'datosm.php';

									var parametros = {
										"nb_project" : $("#nb_project1")
												.val(),
										"nb_acronym" : $("#nb_acronym1").val()
									};

								}

								if (vdat == 1) {

									vurl = 'datosm.php';

									var parametros = {
										"codigo" : $("#codigo1").val(),
										"nb_project" : $("#nb_project1")
												.val(),
										"nb_acronym" : $("#nb_acronym1").val()
									};

								}

								if (vdat == 2) {

									vurl = 'datosm.php';

									var parametros = {
										"codigo" : $("#codigo2").val()
									};

								}

								ok = 1;

								objeto = "#" + "proceso1";
								vanterior = $(objeto).html();

								//"Access-Control-Allow-Origin:"

								$
										.ajax({
											data : parametros,
											url : vurl,
											type : 'post',
											async : false,
											beforeSend : function() {
												console.log("Empezando");
												procesando = '<span class="alert alert-warning glyphicon glyphicon-transfer"></span>';
												procesando = $(objeto).html(
														procesando);
											},
											error : function(response) {
												console.log("Error");
												console.log(response);
												response1 = JSON
														.stringify(response);
												//alert(response1);
												verror = '<span class="alert alert-danger glyphicon glyphicon-floppy-remove"> Error Enviando Datos</span>';
												//verror = '<button type="button" class="btn btn-danger">Error al enviar los datos</button>';
												$(objeto).html(verror);
												ok = -1;

											},
											success : function(response) {
												response1 = JSON
														.stringify(response);
												console.log("Satisfactorio");
												$vsi = '<span class="alert alert-success glyphicon glyphicon-saved"></span>';
												$(objeto).html($vsi);
												ok = 1;

												$("#nb_project1").val("");
												$("#nb_acronym1").val("");

												$("#nb_project2").val("");
												$("#nb_acronym2").val("");

											},
											complete : function(response) {
												console.log("complete");
												//location.reload(true);
												//refrescardt();

												$("#proceso1").html("");

											}
										});
								//$(objeto).html(vanterior);
								return ok;
							}
						</script>

						<form method="POST" action="http://localhost:8083/uploade.php"
							enctype="multipart/form-data">
							<input type="hidden" id="codigo11" name="codigo11" value="" /> <input
								type="hidden" id="codigo111" name="codigo111"
								value="http://localhost:8083/index.php/contenido/aulas/enunciados" />

							<div>
								<span>Upload a File:</span> <input type="file"
									name="uploadedFile" />
							</div>

							<input type="submit" name="uploadBtn" value="Upload" />
						</form>


						<script type="text/javascript">
							function refrescar() {
								//alert("Pulse Aceptar para Refrescar la Pagina");
								location.reload(true);
							}
						</script>


					</div>
					<div id="menu4" class="tab-pane fade in">
						<div class="panel panel-info">
							<div class="panel-heading">
								<div class="panel-title">Eliminar</div>
							</div>

							<div style="padding-top: 30px" class="panel-body">

								<!--        <form id="loginform" name= "loginform" class="form-horizontal" role="form" action="" method="post"> -->
								<div class="form-inline">

									<input type="hidden" id="codigo2" name="codigo2" value="">

									<div style="margin-bottom: 25px" class="input-group">
										Nombre Evaluacion <input id="nb_project2"
											name="nb_project2" type="text" class="form-control"
											value="" readonly>
									</div>

									<div style="margin-bottom: 25px" class="input-group">
										Nombre Archivo Imagen <input id="nb_acronym2" name="nb_acronym2"
											type="text" class="form-control" value="" readonly>
									</div>


									<div class="form-group">
										<label class="col-md-3 control-label" for="button1id"></label>
										<div class="col-md-12">

											<button id="botonform3" type="submit"
												class="btn btn-danger btn-block btn-sm"
												onclick="guardare(2)">
												<span class="glyphicon glyphicon-remove"></span> Quitar
												Registro
											</button>
										</div>
									</div>


									<div class="form-group">
										<div id="proceso1" name="proceso1"></div>
									</div>

									<!--        </form>  -->

								</div>

							</div>

						</div>

						<script>
							/*
							 function solonumeros() {
							 valor = parseInt($("#ca_puntaje").val());
							 if (isNan(valor)) {
							 valor = "";
							 }
							 $("#ca_puntaje").val(valor);
							 return 1;
							 }
							 */

							function guardare(vdat) {
								var vanterior;
								var procesando;
								var ok;

								var nerr;
								nerr = 1;

								var vurl;

								//solonumeros();

								if (vdat == 2) {

									if ($("#codigo2").val() == "") {
										alert("Seleccione un Registro");
										return -1;
									}

								}

								if (vdat == 1) {

									if ($("#codigo2").val() == "") {
										alert("Seleccione un Registro");
										return -1;
									}

								}

								if (vdat == 2) {

									vurl = 'datose.php';

									var parametros = {
										"codigo" : $("#codigo2").val()
									};

								}

								ok = 1;

								objeto = "#" + "proceso1";
								vanterior = $(objeto).html();

								//"Access-Control-Allow-Origin:"

								$
										.ajax({
											data : parametros,
											url : vurl,
											type : 'post',
											async : false,
											beforeSend : function() {
												console.log("Empezando");
												procesando = '<span class="alert alert-warning glyphicon glyphicon-transfer"></span>';
												procesando = $(objeto).html(
														procesando);
											},
											error : function(response) {
												console.log("Error");
												console.log(response);
												response1 = JSON
														.stringify(response);
												//alert(response1);
												verror = '<span class="alert alert-danger glyphicon glyphicon-floppy-remove"> Error Enviando Datos</span>';
												//verror = '<button type="button" class="btn btn-danger">Error al enviar los datos</button>';
												$(objeto).html(verror);
												ok = -1;

											},
											success : function(response) {
												response1 = JSON
														.stringify(response);
												console.log("Satisfactorio");
												$vsi = '<span class="alert alert-success glyphicon glyphicon-saved"></span>';
												$(objeto).html($vsi);
												ok = 1;

												$("#nb_project1").val("");
												$("#nb_acronym1").val("");

												$("#nb_project2").val("");
												$("#nb_acronym2").val("");

											},
											complete : function(response) {
												console.log("complete");
												//location.reload(true);
												//refrescardt();

												$("#proceso1").html("");

											}
										});
								//$(objeto).html(vanterior);
								return ok;
							}
						</script>

					</div>
				</div>
			</div>
		</div>
	</div>



	<?php
	include "pie.php";	
?>