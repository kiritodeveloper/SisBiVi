{{-- @extends('main.vendor.app.layouts.index')
@section('title','libros')
@section('content')

@include('main.vendor.dasboard')
<input id="inputFile" type="file" onchange="convertToBase64();" />
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
                alert(base64);
            };
            // Convert data to base64
            fileReader.readAsDataURL(fileToLoad);
        }
    }
</script>  
<footer class="footer full-reset">
    @include('main.vendor.app.components.footer')
</footer>
@endsection


 --}}
