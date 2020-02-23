const BASE_URL = "http://localhost:80/Helloby-Webapp/webapp/"; 


function clearMessage(){
    $(".has-error").removeClass(".has-error")
    $(".has-error").html("");
}


function ShowMessage(list_error) {
    clearMessage();
    $.each(list_error, function(id, message,) {
        $(id).addClass("has-error");
        $(id).html(message)
    })
}

function loadingImg(message = "") {

    $('#loading').html("<i class='fas fa-circle-notch fa-2x fa-spin'></i></br>")

}

function loadingTrue(message = "") {

    $('#loading').html("<i class='fas fa-check fa-2x'></i></br>")
}

function clearImg(){

   $('#loading').html("") 
}

function form_group_hide(){

    $(".form-group").hide();

}

function removeAttr(){

    $('.removeAttr').removeAttr('hidden');
}

