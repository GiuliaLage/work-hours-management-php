  $(document).ready(function() {
        $.ajax({
            type: "POST", 
            url: BASE_URL + "categorias/get_categorias", 
            dataType: "JSON",
            success: function(data){                    
                  $('#categorias').html('');
                  for(var i=0;i<data.length;i++)
                  {
                      $("<option/>").val(data[i].id)
                                     .text(data[i].categorias)
                                     .appendTo($('#categorias'));
                  }
            }, 
            error: function(response){
               console.log(response);
            } 
        })
        return false;
    })

  