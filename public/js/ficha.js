function listar_nombre() {
    let url = 'http://localhost/armandovallejos_mvc_web/personas';
    fetch(url);
    $.ajax({

        type: 'POST'
    }).done(function(resp) {
        var data = JSON.parse(resp);
        var cadena = "";
        if (data.length > 0) {
            for (var i = 0; i < data.length; i++) {
                cadena += "<option value='" + data[i][0] + "'>" + data[i][1] + "</option>";

            }
            $("#selec_nombres").html(cadena);
            var id_persona = $("#selec_nombres").val();
            listar_pronvincia(id_persona);
        } else {
            cadena += "<option value=''>'NO SE ENCONTRARON REGISTROS'</option>";
            $("#selec_nombres").html(cadena);
        }
    })
}

function httpRequest(url, callback) {
    const http = new XMLHttpRequest();
    http.open("GET", url);
    http.send();

    http.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            callback.apply(http);
        }
    }
}

function listar_pronvincia(iddepartamento) {
    $.ajax({
        url: '../controlador/controlador_listar_provincia.php',
        type: 'POST',
        data: {
            iddepartamento: iddepartamento
        }
    }).done(function(resp) {
        var data = JSON.parse(resp);
        var cadena = "";
        if (data.length > 0) {
            for (var i = 0; i < data.length; i++) {
                cadena += "<option value='" + data[i][0] + "'>" + data[i][1] + "</option>";

            }
            $("#sel_provincia").html(cadena);
            var idprovincia = $("#sel_provincia").val();
            listar_distrito(idprovincia);
        } else {
            cadena += "<option value=''>'NO SE ENCONTRARON REGISTROS'</option>";
            $("#sel_provincia").html(cadena);
        }
    })
}



function listar_distrito(idprovincia) {
    $.ajax({
        url: '../controlador/controlador_listar_distrito.php',
        type: 'POST',
        data: {
            idprovincia: idprovincia
        }
    }).done(function(resp) {
        var data = JSON.parse(resp);
        var cadena = "";
        if (data.length > 0) {
            for (var i = 0; i < data.length; i++) {
                cadena += "<option value='" + data[i][0] + "'>" + data[i][1] + "</option>";

            }
            $("#sel_distrito").html(cadena);
        } else {
            cadena += "<option value=''>'NO SE ENCONTRARON REGISTROS'</option>";
            $("#sel_distrito").html(cadena);
        }
    })
}