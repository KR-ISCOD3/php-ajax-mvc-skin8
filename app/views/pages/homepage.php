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
                        <tbody>
                            <!-- <tr class="align-middle">
                                <td>1</td>
                                <td>Lip Stick</td>
                                <td>$1.50</td>
                                <td class="col-2">
                                    <input min="0" value="2" type="number" name="" id="" class="form-control shadow-none border">
                                </td>
                                <td>
                                    $3.00
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>1</td>
                                <td>Lip Stick</td>
                                <td>$1.50</td>
                                <td class="col-2">
                                    <input min="0" value="2" type="number" name="" id="" class="form-control shadow-none border">
                                </td>
                                <td>
                                    $3.00
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>1</td>
                                <td>Lip Stick</td>
                                <td>$1.50</td>
                                <td class="col-2">
                                    <input min="0" value="2" type="number" name="" id="" class="form-control shadow-none border">
                                </td>
                                <td>
                                    $3.00
                                </td>
                            </tr> -->
                            <tr>
                                <td colspan="5 " class="text-center text-secondary">No Item order...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">

                    <h5 class="m-0 ">Total: $9.00</h5>
                    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#process-order">
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
                            <form action="">
                                <label for="" class="form-label">Customer Tel*</label>
                                <input required type="text" name="" id="" class="form-control border shadow-none mb-2" placeholder="Enter Customer Tel (+855)">
                                <label for="" class="form-label">Customer Location*</label>
                                <select name="" id=""  class="form-select border shadow-none mb-2" >
                                    <option value="" disabled selected>Select Location</option>
                                    <option value="">Phnom Penh</option>
                                    <option value="">Kandal</option>
                                </select>
                                <label for="" class="form-label">Delievery Price*</label>
                                <select name="" id=""  class="form-select border shadow-none" >
                                    <option value="" disabled selected>Select Delievery Price</option>
                                    <option value="">$1.00</option>
                                    <option value="">$2.00</option>
                                </select>
                                <div class="modal-footer mt-4">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-dark">Confirm Order</button>
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

        fetchData();

        let cart = [];

        $(document).on('click','.btn-order',function(){

            console.log(
                $(this).data("id"),
                $(this).data("name"),
                $(this).data("price"),
            );

            let id = $(this).data("id");
            let name = $(this).data("name");
            let price = $(this).data("price");

            cart.push({id:id,name:name,price:price,qty:1})
            
            console.table(cart)
        })
    })
</script>