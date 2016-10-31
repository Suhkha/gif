var source = $("#grid-template").html();
var template = Handlebars.compile(source);

$.getJSON( "api", function( json ) {
	$('.grid').append(template(json));
});

