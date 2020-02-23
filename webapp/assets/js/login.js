$(function(){
    $("#login-formulario").submit(function(){
        $.ajax({
            type: "post", 
            url: BASE_URL + "login/get_user", 
            dataType: "JSON",
            data: $(this).serialize(),
            beforeSend: function(){
                loadingImg();
            },
            success: function(data){                    
                  if(data.status == true){
                    clearMessage();
                    loadingTrue();
                    window.location = BASE_URL + "home/index"
                    
                 }
                else{
                    clearImg();
                    ShowMessage(data['error_list']); 
                }
            }, 
            error: function(response){
               console.log(response);
            } 
        })
        return false;
    })
}) 
