$(document).ready(function() {
 
    var intervalo = setInterval(function(){actualizar_score ();},500);
    var intervalo = setInterval(function(){pruebas ();},100);

});

var actualizar_score = ()=>{
    console.log("actualizando");
    $.ajax({
        type: "POST",
        url: "get_score.php",
        success: function(response){
            console.log("respuesta");
            $('#score').html(response).fadeIn();
        }
    });
}
var pruebas = ()=>{


    console.log("pruebas");
    $.ajax({
        type: "POST",
        url: "pruebas.php",
        success: function(response){
            $('#pruebas').html(response).fadeIn();
        }
    });
}