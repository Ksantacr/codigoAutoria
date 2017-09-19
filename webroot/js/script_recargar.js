$('document').ready(function(){


$("#cantidad").keyup(function(){

    let cant = parseInt(this.value);

    if(isNaN(cant*1000) || cant<0){
        $("#total").text("0");
    }else{
        $("#total").text(cant*1000);
    }

})


$("#transaccion").click(function(e){
monedas = parseInt($("#total").text());
cant = $("#cantidad").val();


if(cant==""){cant=0;}
//console.log(cant)

if(parseInt(cant)<=0){

 $("#mensaje").text("No se puede recargar ese valor :(").css({
            width: '100%',
            height: 50,
            padding: 20
        });
}else{
    $(location).attr('href', './recargaNotificacion/?m='+monedas)
}


});


});