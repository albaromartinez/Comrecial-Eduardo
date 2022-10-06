// clean inputs
$(".cleanImputs").click(function(){
    $(".limpiar").val('');
})

// UPLOAD PHOTO USERS
$(".newPhoto").change(function(){
   
    var imagen = this.files[0];
    console.log("imagen",imagen);

    //  VALIDACION DEL FORMATO DE LAS IMAGENES
    if( imagen['type']!="image/jpeg" && imagen['type']!="image/png" ){
        $(".newPhoto").val('');

        swal({                         
            type: "error",
            title: "Ooops...",
            text: "¡Error, La imagen de ve estar en formato jpg o png!",
            showConfirmButton: true,
            confirmButtonText: "Cerrar"                          
        })
    }else if(imagen['size'] > 5000000 ){ //validacion del tamaño de la imagen
        $(".newPhoto").val('');

        swal({                         
            type: "error",
            title: "Ooops...",
            text: "¡Error, La imagen no deve pesar mas de 5 Mb!",
            showConfirmButton: true,
            confirmButtonText: "Cerrar"                          
        })
    }else{
        var imagedata = new FileReader; //clase de lectura de archivo
        imagedata.readAsDataURL(imagen); // metodo leer como dato url la imagen
        $(imagedata).on("load", function(event){
            var imageroute = event.target.result;
            $(".previsualizar").attr("src", imageroute);
        })
    }

})


