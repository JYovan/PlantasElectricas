$(document).ready(function () {
//Evento Login
    $("#form-login").submit(function (e)
    {
        e.preventDefault();
        if (/^[a-zA-Z0-9\-_]{6,35}$/.test($("#txtUsr").val())
                && /^[a-zA-Z0-9\-_]{6,35}$/.test($("#txtPwd").val()))
        {
            $.ajax({
                type: "POST",
                url: "abd/Data.php",
                data: {
                    IdProcess: 1,
                    txtUsr: $("#txtUsr").val(),
                    txtPwd: $("#txtPwd").val()
                }
            }).done(function (data) {
                if (data == 0)
                {
                    $("#result").html('<div class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>El nombre usuario o contraseña, son incorrectos.</div>');
                } else {
                    location.href = 'principal.php';
                }
            });
        } else {
            $("#result").html('<div class="alert alert-dismissable alert-warning"><button type="button" class="close" data-dismiss="alert">×</button>El nombre usuario o contraseña, deben de contener solamente letras, numeros y guion bajo o medio.</div>');
        }
    });
    $("#txtUsr").val(txtUsr);
    $("#txtPwd").val(txtPwd);
});

var txtUsr = getQueryVariable("txtUsr");
var txtPwd = getQueryVariable("txtPwd");

function getQueryVariable(variable) {
    var query = window.location.search.substring(1);
    var vars = query.split("&");
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split("=");
        if (pair[0] == variable) {
            return pair[1];
        }
    }
}