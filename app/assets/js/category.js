$(document).ready(function(){

    // read feature
    function fetchAllData(){

        $.ajax({
            url:'index.php?page=categorypage',
            method: 'POST',
            data:{
                func:'read',
                userid: $('#userid').val()
            },
            success: function(res){
                // $('#tb').html('');
                $('#tb').html(res)
            }
        })
    }
    fetchAllData();
    // read feature

    // create feature
    $('#addCate').on('submit',function(e){

        e.preventDefault();

        let type = $('#type').val();
        let userid = $('#userid').val();

        $.ajax({
            url:'index.php?page=categorypage',
            method:'post',
            data:{
                func:'create',
                userid:userid,
                type:type
            },
            success:function(res){
                $("#addtype").modal('hide');
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
                    fetchAllData();
                }else{
                    alert(res);
                }
            }
        })
        
        $('#type').val('');     
    })
    // create feature

    // delete feature
    // only get id to modal form
    $(document).on('click','.btn-delete',function(e){
        // alert(123);
        let id = $(this).data("id");
        // alert(id)
        $('#del_id').val(id)

    })

    // if form said yes send data to controller
    $('#delCate').on("submit",function(e){
        e.preventDefault();
        let id = $('#del_id').val();

        $.ajax({
            url:'index.php?page=categorypage',
            method:'post',
            data:{
                func:'delete',
                id:id
            },
            success: (res)=>{
                $("#deletetype").modal('hide');
                res = res.trim();
                if(res == "success"){
                    console.log("Create Success");
                    Swal.fire({
                        title: "Your data is deleted",
                        text: "You clicked the button!",
                        icon: "success",
                        timer: 1300,
                        showCloseButton: true,   // display the X button
                        showConfirmButton: false // hide the OK button
                    });
                    fetchAllData();
                }else{
                    alert(res);
                }
            }
        })
    })
    // delete feature

    // update feature
    // only get id to modal form
    $(document).on('click','.btn-edit',function(e){
        // alert(123);
        let id = $(this).data("id");
        let type = $(this).data("type");

        // alert(id)
        // alert(type)
        $('#up_id').val(id)
        $('#up_type').val(type)

    })


    $('#updateForm').on("submit", function(e){
        e.preventDefault();

        let up_id = $('#up_id').val();
        let up_type = $('#up_type').val();

        $.ajax({
            url: 'index.php?page=categorypage',
            method: 'post',
            data: {
                func: 'update', // specify update function
                id: up_id,
                type: up_type
            },
            success: function(res){
                $("#uptype").modal('hide');
                res = res.trim();

                if(res == "success"){
                    Swal.fire({
                        title: "Updated successfully!",
                        icon: "success",
                        timer: 1300,
                    });
                    fetchAllData(); // refresh the table
                } else {
                    alert(res);
                }
            }
        });
    });

})