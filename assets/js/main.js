//Ajusta el grid de los gifs
if(jQuery().masonry){
  var grid;
  
  grid = $('.grid').masonry({
    itemSelector: '.grid-item',
    percentPosition: true
  });
  
  grid.imagesLoaded().progress( function() {
    grid.masonry();
  });
};

//Muestra el nombre del archivo que se va subir a servidor
//y lo aplica a la máscara del input file
var fullname;
var source = document.getElementById('source');
var fakepath = document.getElementById("fakepath");

source.onchange = function () {
  fullname = this.value;
  fakepath.innerHTML = fullname;
};



//Permite subir los gifs al servidor
$("#form--upload").on('submit',(function(e){
  e.preventDefault();
  $.ajax({
    url: "gif/save",
    type: "POST",
    data:  new FormData(this),
    contentType: false,
    cache: false,
    processData:false,
    success: function(data){
      $("#fakepath").html("<i class='fa fa-upload' aria-hidden='true'></i> Choose a gif");
      $("#upload--success").html("Great! Keep uploading more gifs.");
      location.reload();
    }
  });
}));

//Envia los datos de check/uncheck de los gifs           
var checkbox = $("input[type=checkbox]");
checkbox.on("click", checkingGifs);

function checkingGifs() {
  var status;
  var currentCheck = $(this).val();
  
  if ($(this).is(':checked')){
    status = "1";
  }else{
    status = "0";
  }

  $.ajax({
    type: 'POST',
    url: 'gif/update',
    data: { status: status, id__gif : currentCheck}
  });
}



