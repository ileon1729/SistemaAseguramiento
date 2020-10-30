$(document).ready(function() {

    $('#del-prod-form form').submit(function(e) {
         e.preventDefault();
         var informacion=$('#del-prod-form form').serialize();
         var metodo=$('#del-prod-form form').attr('method');
         var peticion=$('#del-prod-form form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#res-form-del-prod").html('Eliminando producto');
            },
            error: function() {
                $("#res-form-del-prod").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-del-prod").html(data);
            }
        });
        return false;
    });
    $('#add-categori form').submit(function(e) {

         e.preventDefault();
         var informacion=$('#add-categori form').serialize();
         var metodo=$('#add-categori form').attr('method');
         var peticion=$('#add-categori form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#res-form-add-categori").html('Añadiendo categoria');
            },
            error: function() {
                $("#res-form-add-categori").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-add-categori").html(data);
            }
        });
        return false;
    });


    $('#del-categori form').submit(function(e) {
         e.preventDefault();
         var informacion=$('#del-categori form').serialize();
         var metodo=$('#del-categori form').attr('method');
         var peticion=$('#del-categori form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#res-form-del-cat").html('Eliminando categoria');
            },
            error: function() {
                $("#res-form-del-cat").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-del-cat").html(data);
            }
        });
        return false;
    });


    $('#add-provee form').submit(function(e) {
         e.preventDefault();
         var informacion=$('#add-provee form').serialize();
         var metodo=$('#add-provee form').attr('method');
         var peticion=$('#add-provee form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#res-form-add-prove").html('Agregando proveedor');
            },
            error: function() {
                $("#res-form-add-prove").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-add-prove").html(data);
            }
        });
        return false;
    });


    $('#del-prove form').submit(function(e) {
         e.preventDefault();
         var informacion=$('#del-prove form').serialize();
         var metodo=$('#del-prove form').attr('method');
         var peticion=$('#del-prove form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#res-form-del-prove").html('Eliminando proveedor>');
            },
            error: function() {
                $("#res-form-del-prove").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-del-prove").html(data);
            }
        });
        return false;
    });


    $('.button-UC').click(function() {
	var myId = $(this).val();
        $('#update-category form#'+myId).submit(function(e) {
             e.preventDefault();
             var informacion=$('#update-category form#'+myId).serialize();
             var metodo=$('#update-category form#'+myId).attr('method');
             var peticion=$('#update-category form#'+myId).attr('action');
             $.ajax({
                type: metodo,
                url: peticion,
                data:informacion,
                beforeSend: function(){
                    $("div#"+myId).html('Actualizando...');
                },
                error: function() {
                    $("div#"+myId).html("Ha ocurrido un error en el sistema");
                },
                success: function (data) {
                    $("div#"+myId).html(data);
                }
            });
            return false;
        });
    });


    $('.button-UP').click(function() {
	var myId = $(this).val();
        $('#update-proveedor form#'+myId).submit(function(e) {
             e.preventDefault();
             var informacion=$('#update-proveedor form#'+myId).serialize();
             var metodo=$('#update-proveedor form#'+myId).attr('method');
             var peticion=$('#update-proveedor form#'+myId).attr('action');
             $.ajax({
                type: metodo,
                url: peticion,
                data:informacion,
                beforeSend: function(){
                    $("div#"+myId).html('Actualizando...');
                },
                error: function() {
                    $("div#"+myId).html("Ha ocurrido un error en el sistema");
                },
                success: function (data) {
                    $("div#"+myId).html(data);
                }
            });
            return false;
        });
    });


    $('.button-UPR').click(function() {
	var myId = $(this).val();
        $('#update-product form#'+myId).submit(function(e) {
             e.preventDefault();
             var informacion=$('#update-product form#'+myId).serialize();
             var metodo=$('#update-product form#'+myId).attr('method');
             var peticion=$('#update-product form#'+myId).attr('action');
             $.ajax({
                type: metodo,
                url: peticion,
                data:informacion,
                beforeSend: function(){
                    $("div#"+myId).html('Actualizando...');
                },
                error: function() {
                    $("div#"+myId).html("Ha ocurrido un error en el sistema");
                },
                success: function (data) {
                    $("div#"+myId).html(data);
                }
            });
            return false;
        });
    });


    $('#add-admin form').submit(function(e) {
         e.preventDefault();
         var informacion=$('#add-admin form').serialize();
         var metodo=$('#add-admin form').attr('method');
         var peticion=$('#add-admin form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#res-form-add-admin").html('Agregando Administrador...">');
            },
            error: function() {
                $("#res-form-add-admin").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-add-admin").html(data);
            }
        });
        return false;
    });


    $('#del-admin form').submit(function(e) {
         e.preventDefault();
         var informacion=$('#del-admin form').serialize();
         var metodo=$('#del-admin form').attr('method');
         var peticion=$('#del-admin form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
            },
            $("#res-form-del-admin").html('Eliminando Administrador');
            error: function() {
                $("#res-form-del-admin").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-del-admin").html(data);
            }
        });
        return false;
    });


    $('.button-UPPE').click(function() {
	var myId = $(this).val();
        $('#update-pedido form#'+myId).submit(function(e) {
             e.preventDefault();
             var informacion=$('#update-pedido form#'+myId).serialize();
             var metodo=$('#update-pedido form#'+myId).attr('method');
             var peticion=$('#update-pedido form#'+myId).attr('action');
             $.ajax({
                type: metodo,
                url: peticion,
                data:informacion,
                beforeSend: function(){
                    $("div#"+myId).html('Actualizando...');
                },
                error: function() {
                    $("div#"+myId).html("Ha ocurrido un error en el sistema");
                },
                success: function (data) {
                    $("div#"+myId).html(data);
                }
            });
            return false;
        });
    });


    $('#del-pedido form').submit(function(e) {
         e.preventDefault();
         var informacion=$('#del-pedido form').serialize();
         var metodo=$('#del-pedido form').attr('method');
         var peticion=$('#del-pedido form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#res-form-del-pedido").html('Eliminando Pedido...');
            },
            error: function() {
                $("#res-form-del-pedido").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-del-pedido").html(data);
            }
        });
        return false;
    });


});
