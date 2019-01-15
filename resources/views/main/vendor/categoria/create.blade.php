@extends('main.vendor.app.layouts.index')

@section('content')
<div class="container-fluid">
        <div class="container-flat-form">
            <div class="title-flat-form title-flat-blue">Agregar Un Nuevo Documento</div>
            <form method="POST" action="{{ url('/categoria/crear') }}">
                {{ csrf_field() }}
                <div class="row">
                   <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                        <div class="group-material">
                            <input type="text" name="nombre" class="material-control tooltips-general" placeholder="Escribe aquí el nombre del libro"  required="" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="80" data-toggle="tooltip" data-placement="top" title="Solo letras">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Nobre</label>
                        </div>
                        <div class="group-material">
                            <input id="generate" type="text" name="descripcion" class="material-control tooltips-general" placeholder="Escribe aquí la descripcion" required="" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="100" data-toggle="tooltip" data-placement="top" title="Escribe la descripcion maximo de 80 caracteres">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Descripcion</label>
                        </div>
                        {{-- <script src="/js/jquery.min.js"></script>
                        <textarea name="categoria_id" rows="0.0" id="id" cols="50" style="visibility:hidden"></textarea>
                       <script>
                           
                            $( document ).ready(function() {
                                var a = Math.floor(100000 + Math.random() * 900000);   
                                a = String(a);
                                a = a.substring(0,4);
                                var result = a;
                                //alert(result);
                                //alert( "valor:" +a );
                                document.getElementById("id").innerHTML = result;
                            });
                       </script> --}}
                        <p class="text-center">
                            <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                            <button type="submit" onclick="uniqueid"  class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                        </p> 
                   </div>
                </div>
            </form>
        </div>
    </div>
@endsection