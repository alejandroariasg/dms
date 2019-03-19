<?php include '../header.php';?>

<link href="http://localhost/dms/assets/plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
<link href="http://localhost/dms/assets/plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />

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
                        <select class="form-control" id="tipo_entidad" required>
                            <option value="">Seleccione....</option>
                            <option value="1">Cliente</option>
                            <option value="2">Proveedor</option>
                            <option value="3">Empleado</option>
                        </select>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Nombre</label>
                            <input type="text" class="form-control general" id="nombre" placeholder="Nombre">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Identificación</label>
                            <input type="text" class="form-control general" id="identificacion" placeholder="Indentificación">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Fecha</label>
                            
								<input type="text" class="form-control general" name="singledatepicker" id="fecha">
 
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

                    <div class="row">
                        <label class="col-sm-3 col-form-label">Tipo de identificación:</label>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input tipo_identificacion general" type="radio" name="tipo_identificacion" value="NIT">
                                    NIT
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input tipo_identificacion  general" type="radio" name="tipo_identificacion" value="RUT">
                                    RUT
                                </label>
                            </div>
                        </div>
                        <label class="col-sm-3 col-form-label">Regimen:</label>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input regimen  general" type="radio" name="regimen" value="Simplificado">
                                    Simplificado
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input regimen  general" type="radio" name="regimen"  value="Comun">
                                    Común
                                </label>
                            </div>
                        </div>
                    </div>
                    <br>               
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputCity">Contacto</label>
                            <input type="text" class="form-control  general" id="inputCity" placeholder="Persona de contacto">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputState">Dirección</label>
                            <input type="text" class="form-control  general" id="inputCity" placeholder="Dirección">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputState">Teléfono</label>
                            <input type="number" class="form-control general" id="inputCity" placeholder="Teléfono">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputState">Correo</label>
                            <input type="email" class="form-control general" id="inputCity" placeholder="Correo electrónico">
                        </div>                        
                    </div>

                    <div class="row">
                        <label class="col-sm-3 col-form-label">Centro de costos:</label>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input centro_costos cliente_proveedor" value="1" type="checkbox">
                                    MTTO
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input centro_costos cliente_proveedor" value="2" type="checkbox">
                                    GLP
                                </label>
                            </div>
                        </div>
                        <label class="col-sm-3 col-form-label">Tipo de pago:</label>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input cliente_proveedor" type="radio" name="gridRadios" value="Credito">
                                    Credito
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input cliente_proveedor" type="radio" name="gridRadios" value="Contado">
                                    Contado
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="fa fa-file"></i> Soportes</h3>
                            Carga de archivos con arrastrar y soltar
                        </div>
                        <div class="card-body">         
                                    <input type="file" class="cliente_proveedor" name="files[]" id="filer_example1" multiple="multiple">
                        </div>														
                    </div>



                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
                
            </div>							
        </div><!-- end card-->					
    </div>

<?php include '../footer.php';?>
<script src="http://localhost/dms/assets/plugins/jquery.filer/js/jquery.filer.min.js"></script>

<script>
    $(document).ready(function(){
        'use-strict';
        $(":input:not(select)").prop("disabled", true);

        //Funcion para determinar campos habilitados segun el tipo de entidad
        $("#tipo_entidad").change(function(){
            if($("#tipo_entidad").val()){
                $(".general").removeAttr('disabled');
                if($("#tipo_entidad").val() > 1){
                    $(".cliente_proveedor").removeAttr('disabled');
                }
            }
            
        });

        //Función para subida de archivos
        $("#filer_example1").filer({
            limit: null,
            maxSize: null,
            extensions: null,
            changeInput: '<div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><h3>Drag & Drop files here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="jFiler-input-choose-btn btn btn-custom">Browse Files</a></div></div>',
            showThumbs: true,
            theme: "dragdropbox",
            templates: {
                box: '<ul class="jFiler-items-list jFiler-items-grid"></ul>',
                item: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                            <span class="jFiler-item-others">{{fi-size2}}</span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <li>{{fi-progressBar}}</li>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\
                                </div>\
                            </div>\
                        </li>',
                itemAppend: '<li class="jFiler-item">\
                                <div class="jFiler-item-container">\
                                    <div class="jFiler-item-inner">\
                                        <div class="jFiler-item-thumb">\
                                            <div class="jFiler-item-status"></div>\
                                            <div class="jFiler-item-info">\
                                                <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                                <span class="jFiler-item-others">{{fi-size2}}</span>\
                                            </div>\
                                            {{fi-image}}\
                                        </div>\
                                        <div class="jFiler-item-assets jFiler-row">\
                                            <ul class="list-inline pull-left">\
                                                <li><span class="jFiler-item-others">{{fi-icon}}</span></li>\
                                            </ul>\
                                            <ul class="list-inline pull-right">\
                                                <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                            </ul>\
                                        </div>\
                                    </div>\
                                </div>\
                            </li>',
                progressBar: '<div class="bar"></div>',
                itemAppendToEnd: false,
                removeConfirmation: true,
                _selectors: {
                    list: '.jFiler-items-list',
                    item: '.jFiler-item',
                    progressBar: '.bar',
                    remove: '.jFiler-item-trash-action'
                }
            },
            dragDrop: {
                dragEnter: null,
                dragLeave: null,
                drop: null,
            },
            uploadFile: {
                url: "http://localhost/dms/assets/plugins/jquery.filer/php/upload.php",
                data: null,
                type: 'POST',
                enctype: 'multipart/form-data',
                beforeSend: function(){},
                success: function(data, el){
                    var parent = el.find(".jFiler-jProgressBar").parent();
                    el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
                        $("<div class=\"jFiler-item-others text-success\"><i class=\"fa fa-plus\"></i> Success</div>").hide().appendTo(parent).fadeIn("slow");
                    });
                },
                error: function(el){
                    var parent = el.find(".jFiler-jProgressBar").parent();
                    el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
                        $("<div class=\"jFiler-item-others text-error\"><i class=\"fa fa-minus\"></i> Error</div>").hide().appendTo(parent).fadeIn("slow");
                    });
                },
                statusCode: null,
                onProgress: null,
                onComplete: null
            },
            files: [
                
            ],
            addMore: false,
            clipBoardPaste: true,
            excludeName: null,
            beforeRender: null,
            afterRender: null,
            beforeShow: null,
            beforeSelect: null,
            onSelect: null,
            afterShow: null,
            onRemove: function(itemEl, file, id, listEl, boxEl, newInputEl, inputEl){
                var file = file.name;
                $.post('http://localhost/dms/assets/plugins/jquery.filer/php/remove_file.php', {file: file});
            },
            onEmpty: null,
            options: null,
            captions: {
                button: "Choose Files",
                feedback: "Choose files To Upload",
                feedback2: "files were chosen",
                drop: "Drop file here to Upload",
                removeConfirmation: "Are you sure you want to remove this file?",
                errors: {
                    filesLimit: "Only {{fi-limit}} files are allowed to be uploaded.",
                    filesType: "Only Images are allowed to be uploaded.",
                    filesSize: "{{fi-name}} is too large! Please upload file up to {{fi-maxSize}} MB.",
                    filesSizeAll: "Files you've choosed are too large! Please upload files up to {{fi-maxSize}} MB."
                }
            }
        });
    });
</script>