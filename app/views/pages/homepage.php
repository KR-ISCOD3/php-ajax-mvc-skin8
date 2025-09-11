<!-- Home Section -->
<section class="p-4">
    <h2 class="m-0">Welcom Back Admin Tea K'pa</h2>
    <p>You can order Skincare for your customer now.</p>

    <!-- card-section -->
    <div class="row m-0">
        
        <!-- summary card --> 
        <div class="col-3 pe-3 ps-0 py-1">
            <div class="rounded-3 border py-2 px-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="m-0">Total Orders</h4>
                    <i class="bi bi-arrow-up-right-circle fs-2"></i>
                </div>
                <div>
                    <h1 class="m-0">30</h1>
                    <span class="text-secondary"><i class="bi bi-graph-up-arrow"></i> This month </span>
                </div>
            </div>
        </div>

        <div class="col-3 pe-3 ps-0 py-1">
            <div class="rounded-3 border py-2 px-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="m-0">Total Customers</h4>
                    <i class="bi bi-person-circle fs-2"></i>
                </div>
                <div>
                    <h1 class="m-0">50</h1>
                    <span class="text-secondary"><i class="bi bi-graph-up-arrow"></i> This month </span>
                </div>
            </div>
        </div>

        <div class="col-3 pe-3 ps-0 py-1">
            <div class="rounded-3 border py-2 px-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="m-0">Income</h4>
                    <i class="bi bi-coin fs-2"></i>
                </div>
                <div>
                    <h1 class="m-0">$0.5</h1>
                    <span class="text-secondary"><i class="bi bi-graph-up-arrow"></i> This month </span>
                </div>
            </div>
        </div>

        <div class="col-3 pe-3 ps-0 py-1">
            <div class="rounded-3 border py-2 px-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="m-0">Total Products</h4>
                    <i class="bi bi-bag-heart fs-2"></i>
                </div>
                <div>
                    <h1 class="m-0">120</h1>
                    <span class="text-secondary"><i class="bi bi-graph-up-arrow"></i> All products </span>
                </div>
            </div>
        </div>
        <!-- summary card -->

    </div>
    <!-- card-section -->
    
    <!-- section order -->
    <div class="row m-0 pe-1 mt-2">

        <!-- table product -->
        <div class="col-7 ps-0 pe-3" >
            <div class=" py-2 d-flex justify-content-between align-items-center">
                <form action="" class="col-6 d-flex border rounded-3">
                    <input required type="text" class="form-control shadow-none border-0" placeholder="Search">
                    <button class="btn ">
                        <i class="bi bi-search"></i>
                    </button>
                </form>

                <div>
                    <button class="btn btn-outline-dark">
                        Export to Excel
                        <i class="bi bi-cloud-plus"></i>
                    </button>
                </div>
            </div>
            <div class="rounded-3 overflow-auto " style="height: 300px;">
                <table class="table table-striped">
                    <thead class="table-dark sticky-top">
                        <tr>
                            <td>NO<sup>o</sup></td>
                            <td>Item/Type</td>
                            <td>Stock</td>
                            <td colspan="2">Price</td>
                        </tr>
                    </thead>
                    <tbody id="tableProduct">
                        <!-- data product -->
                    </tbody>
                </table>
            </div>
        </div>
        <!-- table product -->

        <!-- cart order-->
        <div class="col-5 py-2">

            <div class=" rounded-3 border p-3">
                <h4 class="m-0 text-center">SKIN8</h4>
                <p class=",m-0 text-center">cart</p>
                <div style="height: 180px;" class="overflow-auto border-bottom">
                    <table class="table">
                        <thead class="sticky-top">
                            <tr>
                                <td class="text-secondary">#</td>
                                <td class="text-secondary">Item</td>
                                <td class="text-secondary">Price</td>
                                <td class="text-secondary">Qty</td>
                                <td class="text-secondary">Sub-Total</td>
                            </tr>
                        </thead>
                        <tbody id="cartBody">
                           <!-- cart item -->
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">

                    <h5 class="m-0" id="totalItem"></h5>
                    <button class="btn btn-dark btn-process" data-bs-toggle="modal" data-bs-target="#process-order">
                        Process Order
                    </button>
                </div>
            </div>
            
            <!-- Modal -->
            <div class="modal fade" id="process-order" data-bs-backdrop="static">
                <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5">Customer Destination</h1>
                            <button type="button" class="btn-close shadow-none border" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body px-4">
                            <form id='formOrder'>
                                <label for="" class="form-label">Customer Tel*</label>
                                <input required type="text" name="tel" id="tel" class="form-control border shadow-none mb-2" placeholder="Enter Customer Tel (+855)">
                                <label for="" class="form-label">Customer Location*</label>
                                <select name="location" id="location" class="form-select border shadow-none mb-2">
                                    <option value="" disabled selected>Select Province</option>
                                    <option value="Banteay Meanchey">Banteay Meanchey</option>
                                    <option value="Battambang">Battambang</option>
                                    <option value="Kampong Cham">Kampong Cham</option>
                                    <option value="Kampong Chhnang">Kampong Chhnang</option>
                                    <option value="Kampong Speu">Kampong Speu</option>
                                    <option value="Kampong Thom">Kampong Thom</option>
                                    <option value="Kampot">Kampot</option>
                                    <option value="Kandal">Kandal</option>
                                    <option value="Kep">Kep</option>
                                    <option value="Koh Kong">Koh Kong</option>
                                    <option value="Kratie">Kratie</option>
                                    <option value="Mondulkiri">Mondulkiri</option>
                                    <option value="Phnom Penh">Phnom Penh</option>
                                    <option value="Preah Sihanouk">Preah Sihanouk</option>
                                    <option value="Preah Vihear">Preah Vihear</option>
                                    <option value="Pursat">Pursat</option>
                                    <option value="Ratanakiri">Ratanakiri</option>
                                    <option value="Siem Reap">Siem Reap</option>
                                    <option value="Stung Treng">Stung Treng</option>
                                    <option value="Svay Rieng">Svay Rieng</option>
                                    <option value="Takeo">Takeo</option>
                                    <option value="Oddar Meanchey">Oddar Meanchey</option>
                                    <option value="Kampong Seila">Kampong Seila</option>
                                    <option value="Tboung Khmum">Tboung Khmum</option>
                                    <option value="Pailin">Pailin</option>
                                </select>

                                <label for="" class="form-label">Delievery Price*</label>
                                <select name="delivery" id="delivery"  class="form-select border shadow-none" >
                                    <option value="" disabled selected>Select Delievery Price</option>
                                    <!-- data delivery -->
                                </select>
                                <div class="modal-footer mt-4">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button class="btn btn-dark">Confirm Order</button>
                                </div>
                            </form>
                        </div>                                   
                    </div>
                </div>
            </div>
            <!-- Modal -->
        </div>
        <!-- cart order-->
    </div>
    <!-- section order -->
        
</section>
<!-- Home Section -->
<input type="hidden" id="userid" value="<?= $_SESSION['person']['user_id'] ?>">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
<script>
    $(document).ready(function(){



        function fetchData(){
           
            
            $.ajax({
                url:'index.php?page=homepage',
                method:'post',
                data:{
                    func:'getProduct',
                    userid: $('#userid').val()
                },
                success:function(echo){

                    $('#tableProduct').html(echo)
                }
            })
        }

        function fetchDelivery(){
               
            $.ajax({
                url:'index.php?page=homepage',
                method:'post',
                data:{
                    func:'getDelivery',
                    userid: $('#userid').val()
                },
                success:function(echo){

                    $('#delivery').html(echo)
                }
            })
        }

        fetchDelivery()
        fetchData();

        let cart = [];

        
        if(cart.length == 0){
            $('.btn-process').prop('disabled',true)
        }

        function renderCart(){
            let cartBody = $('#cartBody');
            cartBody.empty();

            if(cart.length === 0){
                cartBody.html(`<tr> <td colspan="5 " class="text-center text-secondary">No Item order...</td> </tr>`);
                $('#totalItem').text('Total: $0.00');
                $('.btn-process').prop('disabled',true)
                return
            }

            cart.forEach((item,index)=>{
                
                cartBody.append(`
                    <tr class="align-middle">
                        <td>${item.id}</td>
                        <td>${item.name}</td>
                        <td>$${item.price}</td>
                        <td class="col-2">
                            <input min="0" value="${item.qty}" type="number" name="" 
                            data-id="${item.id}" 
                            class="form-control shadow-none border qty-item">
                        </td>
                        <td>
                            $${item.subTotal}
                        </td>
                    </tr>
                `)
            })

            let total = cart.reduce((prev,cur)=>prev + cur.subTotal,0);
            $('#totalItem').text('Total: $'+total.toFixed(2));

            if(cart.length > 0){
                $('.btn-process').prop('disabled',false)
            }
        }   

        renderCart();

        $(document).on('click','.btn-order',function(){

            console.log(
                $(this).data("id"),
                $(this).data("name"),
                $(this).data("price"),
            );

            let id = $(this).data("id");
            let name = $(this).data("name");
            let price = $(this).data("price");

            let existItem = cart.find(item => item.id === id)

            if(existItem){
                existItem.qty += 1;
                existItem.subTotal = existItem.qty * existItem.price;
            }else{
                cart.push({id:id,name:name,price:price,qty:1,subTotal:price})
            }
            
            console.table(cart)

            renderCart();
        })


        $(document).on('input','.qty-item',function(){
            let id = $(this).data('id');
            let qty = parseInt($(this).val());

            let item = cart.find(p => p.id == id);
            
            if(item){
                item.qty = qty > 0 ? qty : 0;   
                item.subTotal = item.price * item.qty ;
            }


            if(qty == 0){
                cart = cart.filter((item)=>item.id != id) 
            }

            renderCart();

        })


        $('#formOrder').on('submit',function(e){
            e.preventDefault();

            let tel = $('#tel').val();
            let location = $('#location').val();
            let delivery_id = $('#delivery').val();

            // console.log(tel,location,delivery_id);
            $.ajax({
                url:'index.php?page=homepage',
                method:'post',
                data:{
                    func:'order',
                    tel:tel,
                    location:location,
                    delivery_id:delivery_id,
                    userid:$('#userid').val(),
                    cart:cart
                },
                success:function(echo){
                    echo = echo.trim();
                    console.log(echo);

                    $('#formOrder')[0].reset();
                    $('#process-order').modal('hide');
                    Swal.fire({
                        title: "Delete Success!",
                        text: "You clicked the button!",
                        icon: "success",
                        timer: 1300,
                        showCloseButton: true,   // display the X button
                        showConfirmButton: false // hide the OK button
                    });
                    
                    cart = [];
                    renderCart();
                }
            })
            
        })
    })
</script>