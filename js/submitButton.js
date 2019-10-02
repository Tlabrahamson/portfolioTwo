$(document).ready(function(){
    //Regex function for firstName
    var name = $('#name');
    var email = $('#email');
    var message = $('#message');
    name.on('keyup', function(){
    function lettersOnly(){
        var letOnly = name.val().replace(/[^a-z -]/gi,"");
        name.val(letOnly);
    }
    lettersOnly();
    });
    // Regex function for email address
    // email.on('keyup', function(){
    //     function emailVal(){
    //         var validEmail = email.val().replace(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
    //         email.val(validEmail);
    //     }
    //     emailVal();
    // });
    // Regex function for message
    message.on('keyup', function(){
        var noSpecialChar = message.val().replace(/[^a-z0-9-,.'\s]/gi,"");
        message.val(noSpecialChar);
    });


    $("#submitButton").on('click', function(e){
        e.preventDefault();
        let infoSubmitObj = {
            name: $("[name='name']").val(),
            email: $("[name='email']").val(),
            message: $("[name='message']").val()
        };
        // Function that check to make sure that there are no blank fields
        function validateSubmitObj(){
            var flag = true;
            for(var key in infoSubmitObj){
                if(infoSubmitObj [key].length == 0){
                    flag = false;
                }
            }
            return flag;
            }
    
        if  (validateSubmitObj(flag = true)){
            $.ajax({
                type: 'POST',
                url: 'scripts/create.php',
                data: infoSubmitObj,
                success: function(){
                    iziToast.show({
                        theme: 'dark',
                        timeout: 3000,
                        position: 'center',
                        title: 'Thanks!',
                        message: `I'll get back to you.`
                    });
                }
            })
            .done(function(msg){
            });
        }else{
            iziToast.show({
                theme: 'dark',
                titleColor: '#000',
                messageColor: '#000',
                timeout: 3000,
                color: '#e4cb4d',
                position: 'center',
                title: 'Oh no!',
                message: 'Please complete the form before submitting.'
            });
        }
    });
});
