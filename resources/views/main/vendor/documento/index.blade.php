@extends('main.vendor.app.layouts.index')
<style>
        body{
            background-color:#333; 
            color:#ccc;
            }  
            
            .container{
            margin-top:60px;
            padding: 60px;
            border:10px;
            border-radius:26px;
            
            }    
            /* change standard modal behavior */
            .modal-body {
              height: 600px;
              overflow: auto;
            }
            
            
            .modal-backdrop {
            background-color: #424530;
            }
            
            .modal-backdrop.fade.in
            {
            opacity: .8; 
            }
</style>
@section('content')
@foreach($documentos as $docu)
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        Leer
      </button>
{{--  <iframe src="{{ $docu->documento }}" width="600" height="400" scrolling="auto">
  --}}

  <!-- Submitted to Feature  March 2, 2014  10:20pm -->
      <div class="row">
      <h2>{{ $docu->title }}</h2>
  <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <center>
                <h4 class="modal-title" id="myModalLabel">{{ $docu->nombre }}</h4>
          </center>
          
        </div>
  
  <div class="modal-body">
          <iframe src="{{ $docu->documento }}" id="info" class="iframe" name="info" seamless="" height="100%" width="100%"></iframe>
        </div>
  
      </div>
    </div>
  </div> <!-- /#myModal -->
</div>  <!-- /.row -->
@endforeach
@endsection