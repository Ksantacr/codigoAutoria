$('document').ready(function(){

    var equipoSeleccionado = 0;

    var match_id =0, wallet_id =0;
    match_id = parseInt($("#id_match").text());
    wallet_id = parseInt($("#wallet_id").text());

$("#equipo1").click(function(e){
    e.preventDefault();
    $(".equipo_1").toggleClass( "fondo_equipo_seleccionado" );
    $(".equipo_2").removeClass( "fondo_equipo_seleccionado" );
equipoSeleccionado = parseInt($("#id_1").text());
    $("#equipo_seleccionado").text($("#nombre_equipo_1").text());



});
$("#equipo2").click(function(e){
    e.preventDefault();
    $(".equipo_2").toggleClass( "fondo_equipo_seleccionado" );
    $(".equipo_1").removeClass( "fondo_equipo_seleccionado" );
equipoSeleccionado = parseInt($("#id_2").text());
    $("#equipo_seleccionado").text($("#nombre_equipo_2").text());

});


 $("#apostar").click(function(e){
    e.preventDefault();
//console.log("gola");

   //console.log(equipoSeleccionado)
    monedas = parseInt($("#coins").text());
    monedasApostar = parseInt($("#monedas").val());

    console.log("monedas: "+monedas);
    console.log("monedas apostar: "+monedasApostar);
    //console.log(monedas);

    if(equipoSeleccionado == 0){
        $("#mensaje").text("Seleccione un equipo").css({
            width: '100%',
            height: 50,
            padding: 20
        });
    }else{

        if(monedasApostar <= 0 ){

            $("#mensaje").text("Valor inaceptable").css({
                width: '100%',
                height: 50,
                padding: 20
            });

        }else if(monedasApostar<=monedas && match_id !=0){

            $(location).attr('href', '../bet/?a='+monedasApostar+'&md='+match_id+'&td='+equipoSeleccionado+'&w='+wallet_id);

        }else{
            $("#mensaje").text("Te faltan monedas").css({
                width: '100%',
                height: 50,
                padding: 20
            });
        }
    }

 });


});