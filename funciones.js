
function Login(){

   var pag ="administrador.php";
   var usser = $("#Usuario").val(); 
   var pass = $("#pass").val();

    $.ajax({

        url: pag,
        type: 'post',
        data:{queHago: 'logear',
              usuario: usser,
              password: pass    },
        dataType: 'html'
    }).done(function(nombre){

        $("#resultado").html(nombre);
    })
    .fail(function(error){

        alert("error");
    });
}

function Json(){
     var pag ="administrador.php";
   var usser = $("#Usuario").val(); 
  var pass = $("#pass").val();
   var datos= {};
   datos.usser= usser;
   datos.pass= pass;
   
    $.ajax({

        url: pag,
        type: 'post',
        dataType: 'html',
        data:{queHago: 'mostrarJson',
              dato: datos }
       
    }).done(function(json){
        alert("funciona");
        $("#resultado").html(json);
    })
    .fail(function(error){

        alert("error");
    });

}