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
</head>

	
<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">

      <?php echo $menu; ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Livraison</h1>
          </div>

          <div class="section-body">
            <div class="card">
              <!--<div class="card-header">
             </div> -->
              <div class="card-body">
				  
<div class="row">
              <div class="col-12">
                <div class="card">
                  <!--<div class="card-header">
                  </div>-->
                  <div class="card-body">
                    <div class="table-responsive table-responsive">
                      <table class="table table-striped" id="table-10">
                        <thead>
                          <tr>
                            <th class="text-center">Id</th>
                            <th>Name</th>
                            <th>Type</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($datos as $news_item): ?>
                        <tr>
                            <td><strong><?php echo $news_item['Id']; ?></strong></td>
                            <td><?php echo $news_item['nb_Livraison']; ?></td>
                            <td><?php echo $news_item['in_tipo']; ?></td>
                        </tr>
                    <?php endforeach ?>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>				  
				  
              </div>
              <div class="card-footer bg-whitesmoke">
               </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2020 
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
<!--<script src="<?php echo base_url();?>recursos/assets/js/page/modules-datatables.js"></script> -->
  
<script>

$(document).ready( function () {
    $('#table-10').DataTable();
} );

</script>

  <!-- Template JS File -->
  <script src="<?php echo base_url();?>recursos/assets/js/scripts.js"></script>
  <script src="<?php echo base_url();?>recursos/assets/js/custom.js"></script>
</body>
</html>
