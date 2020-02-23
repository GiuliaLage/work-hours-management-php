$(function(){
    $("#cadastro-formulario").submit(function(){ 
        $.ajax({
            type: "post", 
            url: BASE_URL + "cadastro/create_user", 
            dataType: "JSON",
            data: $(this).serialize(),
            beforeSend: function(){
                loadingImg();
            },
            success: function(data){                    
                  if(data.status == true || data.error_email == true){
                    clearImg();
                    ShowMessage(data['message_list']); 
                    form_group_hide();
                    removeAttr();
                }
                else{
                    clearImg();
                    ShowMessage(data['message_list']);
                }
            }, 
            error: function(response){
               console.log(response);
            } 
        })
        return false;
    })
}) 
