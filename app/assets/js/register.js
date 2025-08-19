$(document).ready(function(){
    $('#registerForm').on('submit',function(e){

        e.preventDefault(); // prevent page reload

        let name =  $('#name').val();
        let email =  $('#email').val();
        let pass =  $('#password').val();

        console.log(name,email,pass);

        $.ajax({
            url:'index.php?page=register',
            method:'POST',
            data:{
                func:'regis',
                name:name,
                email:email,
                pass:pass
            },
            success: function(res){
                res = res.trim();
                // Clear previous alerts
                $('#alertPlaceholder').html('');

                if(res == 'success'){
                    window.location.href = 'index.php?page=homepage';
                }else{
                    // If email is already registered
                    if(res.includes("already registered")){
                        $('#email').addClass('is-invalid border-danger'); // add red border
                        $('#emailFeedback').text(res); // show error message
                        // $('#email').focus();
                    } else {
                        alert(res); // other errors
                    }
                }
            }
        })

        $('#name').val('');
        $('#email').val('');
        $('#password').val('');           
    })
})