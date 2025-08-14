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

                if(res=='success'){
                    window.location.href = 'index.php?page=homepage';
                }else{
                    // Insert Bootstrap alert
                    let alertHtml = `
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            ${res}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>`;
                    $('#alertPlaceholder').html(alertHtml);
                    
                }
            }
        })

        $('#name').val('');
        $('#email').val('');
        $('#password').val('');           
    })
})