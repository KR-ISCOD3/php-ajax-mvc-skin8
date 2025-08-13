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
                if(res){
                    window.location.href = 'index.php?page=homepage';
                }
            },
            error: function(){
                // message error
            }
        })

        $('#name').val('');
        $('#email').val('');
        $('#password').val('');           
    })
})