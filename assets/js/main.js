$("#form--upload").on('submit',(function(e){
  e.preventDefault();
  $.ajax({
    url: "http://gif.dev/index.php/gif/save",
    type: "POST",
    data:  new FormData(this),
    contentType: false,
    cache: false,
    processData:false,
    success: function(data){
      $("#fakepath").html("<i class='fa fa-upload' aria-hidden='true'></i> Choose a gif");
      $("#upload--success").html("Great! Keep uploading more gifs.")
    }
  });
}));

if(jQuery().fancybox){
  $(".gallery").fancybox({
    openEffect  : 'none',
    closeEffect : 'none'
  });
};

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

var fullname;
var source = document.getElementById('source');
var fakepath = document.getElementById("fakepath");

source.onchange = function () {
  fullname = this.value;
  fakepath.innerHTML = fullname;
};
