// จังหวัด
$(document).ready(function(){
    $.ajax({ 
        type: 'POST', 
        url: 'js/distric.json', 
        dataType: 'json',
        success: function (data) { 
            for(i=0;i<=data.length;i++){
                $('.form-register form .input-login select').append('<option value='+data[i].name+'>'+data[i].name+'</option>');
            }
        }
    });
});