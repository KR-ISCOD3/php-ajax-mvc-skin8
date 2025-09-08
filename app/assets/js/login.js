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
                    res = res.trim();
                    // Clear previous alerts
                    $('#alertPlaceholder').html('');

                    if(res == 'success'){
                        window.location.href = 'index.php?page=homepage';
                    }else{
                        let alertHtml = `
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                ${res}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            `;
                            $("#alertPlaceholder").html(alertHtml);
                    }
                }
            })
            
        })
    })