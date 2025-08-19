$(document).ready(function(){
    $('#loginForm').on('submit',function(e){

        e.preventDefault();

        let nameoremail = $('#nameoremail').val();
        let password = $('#password').val();

        // console.log(nameoremail,password);

        $.ajax({
            url:'index.php?page=login',
            method: 'post',
            data:{
                func: 'loginUser',
                nameoremail:nameoremail,
                password:password
            },
            success: function(res){
                if(res){
                    window.location.href = 'index.php'
                }
            }
        })
        
    })
})