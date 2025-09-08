$(document).ready(function(){

    function fetchData(){
        $.ajax({
            url:'index.php?page=deliverypage',
            method:"post",
            data:{
                func:'fetchData',
                userid: $('#userid').val(),
            },
            success:function(echo){
                $('#tb').html(echo)
            }
        })
    }

    fetchData();
    
    $('#addDeliveryform').on('submit',function(e){
        e.preventDefault();
        // console.log($('#category').val(),$('#price').val(),$('#userid').val());
        $.ajax({
            url:'index.php?page=deliverypage',
            method:'post',
            data:{
                func:"create",
                userid:$('#userid').val(),
                category:$('#category').val(),
                delivery_price: $('#price').val()
            },
            success:function(res){
                $('#addcate').modal('hide');
                res = res.trim();
                if(res == "success"){
                    console.log("Create Success");
                    Swal.fire({
                        title: "Good job!",
                        text: "You clicked the button!",
                        icon: "success",
                        timer: 1300,
                        showCloseButton: true,   // display the X button
                        showConfirmButton: false // hide the OK button
                    });
                    fetchData();
                    $('#category').val('')
                    $('#price').val('')
                }else{
                    alert(res);
                }
            }
        })
    })

    $(document).on('click','.btn-delete-delivery',function(e){
        // alert($(this).data('id'))
        $('#del_id').val($(this).data('id'))
    })

    $('#formDelete').on('submit',function(e){

        e.preventDefault();
        
        $.ajax({
            url:'index.php?page=deliverypage',
            method:'post',
            data:{
                func:"delete",
                id:$("#del_id").val()
            },
            success:function(res){
                $('#deleteDeliveryModal').modal('hide');
                res = res.trim();
                if(res == "success"){
                    console.log("Create Success");
                    Swal.fire({
                        title: "Delete Success!",
                        text: "You clicked the button!",
                        icon: "success",
                        timer: 1300,
                        showCloseButton: true,   // display the X button
                        showConfirmButton: false // hide the OK button
                    });
                    fetchData();
                }else{
                    alert(res);
                }
            }
        })
    })

    $(document).on('click','.btn-edit',function(e){
        // alert($(this).data('id'))

        // console.log(
        //     $(this).data('id'),
        //     $(this).data('category'),
        //     $(this).data('price')
        // );
        
        $('#upid').val($(this).data('id'))
        $('#upcategory').val($(this).data('category'))
        $('#upprice').val($(this).data('price'))
    })

    $("#deliveryUpForm").on("submit",function(e){
        e.preventDefault();
        
        // console.log(
        //     $('#upid').val(),
        //     $('#upcategory').val(),
        //     $('#upprice').val()
        // );

        $.ajax({
            url:'index.php?page=deliverypage',
            method:'post',
            data:{
                func:'update',
                id:$('#upid').val(),
                category:$('#upcategory').val(),
                delivery_price:$('#upprice').val()
            },
            success: function(res){
                $('#updateDeliveryModal').modal('hide');
                res = res.trim();
                if(res == "success"){
                    console.log("Create Success");
                    Swal.fire({
                        title: "Update Success",
                        text: "You clicked the button!",
                        icon: "success",
                        timer: 1300,
                        showCloseButton: true,   // display the X button
                        showConfirmButton: false // hide the OK button
                    });
                    fetchData();
                    $('#category').val('')
                    $('#price').val('')
                }else{
                    alert(res);
                }
            }
        })

        $('#upcategory').val(''),
        $('#upprice').val('')
        
    })
}) 