$('document').ready(function(){


$("#cantidad").keyup(function(){



})


$("#transaccion").click(function(e){

    e.preventDefault();
coins = $("#coins").text();
cantidad= $("#cantidad").val();
if(cantidad==""){
    cantidad = 0;
}



if(parseInt(cantidad)>parseInt(coins) || parseInt(cantidad)<0){
    $("#mensaje").text("No puede retirar ese valor").css({
            width: '100%',
            height: 50,
            padding: 20
        });

    //console.log("Soy nayor");


}else{

$(location).attr('href', './retirarNotificacion/?m='+cantidad)

}



});


});