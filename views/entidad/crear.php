<?php include '../header.php';?>
<script src="assets/js/jquery.min.js"></script>

<link href="assets/plugins/datetimepicker/css/daterangepicker.css" rel="stylesheet" />
<body class="adminbody">

<?php include '../nav.php';?>


<?php include '../sidebar.php';?>
        
    <div class="">						
        <div class="card mb-12">
            <div class="card-header">
               <h3>Registro Cliente / Proveedor / Empleado</h3>
            </div>
                
            <div class="card-body">
                
                <form autocomplete="off" action="#">
                    
                    <div class="form-group">
                        <label>Tipo de entidad a registrar</label>
                        <select class="custom-select d-block my-3" required>
                            <option value="">Seleccione....</option>
                            <option value="1">Cliente</option>
                            <option value="2">Proveedor</option>
                            <option value="3">Empleado</option>
                        </select>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Nombre</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Identificación</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Fecha</label>
                            
                            <div class="card-body">								
								
								<input type="text" class="form-control" name="singledatepicker">
 
								<script>
								$(function() {
									$('input[name="singledatepicker"]').daterangepicker({
										singleDatePicker: true,
										showDropdowns: true
									});
								});
								</script>
								
							</div>
                        </div>
                    </div>
                
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" autocomplete="off">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password" autocomplete="off">
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Check me out
                        </label>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
                
            </div>							
        </div><!-- end card-->					
    </div>

<?php include '../footer.php';?>