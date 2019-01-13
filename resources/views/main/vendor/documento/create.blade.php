@extends('main.vendor.app.layouts.index')

@section('content')
<div class="container-fluid">
        <div class="container-flat-form">
            <div class="title-flat-form title-flat-blue">Agregar Un Nuevo Documento</div>
            <form method="POST" action="{{ url('/documento/crear') }}">
                {{ csrf_field() }}
                <div class="row">
                   <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                        <div class="group-material">
                            <input type="text" name="nombre" class="material-control tooltips-general" placeholder="Escribe aquí el nombre del libro"  required="" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="20" data-toggle="tooltip" data-placement="top" title="Solo letras">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Nobre</label>
                        </div>
                        <div class="group-material">
                            <input type="text" name="descripcion" class="material-control tooltips-general" placeholder="Escribe aquí la descripcion" required="" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="100" data-toggle="tooltip" data-placement="top" title="Escribe la descripcion maximo de 80 caracteres">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Descripcion</label>
                        </div>
                        <input id="inputFile" type="file" onchange="convertToBase64();" />
                        <textarea name="documento" rows="0.0" id="resultado" cols="50"  ></textarea>
                            <script type="text/javascript">
                                function convertToBase64() {
                                    //Read File
                                    var selectedFile = document.getElementById("inputFile").files;
                                    //Check File is not Empty
                                    if (selectedFile.length > 0) {
                                        // Select the very first file from list
                                        var fileToLoad = selectedFile[0];
                                        // FileReader function for read the file.
                                        var fileReader = new FileReader();
                                        var base64;
                                        // Onload of file read the file content
                                        fileReader.onload = function(fileLoadedEvent) {
                                            base64 = fileLoadedEvent.target.result;
                                            // Print data in console
                                            //console.log(base64);
                                            //alert(base64);
                                            document.getElementById("resultado").innerHTML = base64;
                                        };
                                        // Convert data to base64
                                        fileReader.readAsDataURL(fileToLoad);
                                    }
                                }
                            </script>  
                        <p class="text-center">
                            <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                            <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                        </p> 
                   </div>
                </div>
            </form>
        </div>
    </div>
@endsection