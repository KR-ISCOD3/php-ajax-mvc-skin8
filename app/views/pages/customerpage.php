<!-- Customer Section -->
<section class="p-4 border-top">
    <h2 class="m-0">Customer Overviews</h2>
    <p>You can view your customers here.</p>

    <div>
        <!-- table data -->
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <td>#</td>
                    <td>Customer Tel</td>
                    <td>Location</td>
                    <td>Item</td>
                    <td>Price</td>
                    <td>Qty</td>
                    <td>Total</td>
                    <td>Order Date</td>
                    <td class="text-center">Action</td>
                </tr>
            </thead>
            <tbody>
                <tr class="align-middle">
                    <td>1</td>
                    <td>+855 90 203 030</td>
                    <td>Wat Phnom</td>
                    <td>Lip Stick</td>
                    <td>$1.00</td>
                    <td>x4</td>
                    <td>$4.00</td>
                    <td>
                        <span class="text-secondary bg-secondary-subtle rounded-3 px-2 fw-medium">2025-07-31</span>
                    </td>
                    <td class="text-center">
                        <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#delete-cus">
                            <i class="bi bi-trash3-fill"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- table data -->     
    </div>
</section>

<!-- Modal-delete customer -->
<div class="modal fade" id="delete-cus" data-bs-backdrop="static">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Delete Customer</h1>
                <button type="button" class="btn-close shadow-none border" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body px-4">
                <form action="">
                    <h4 class="text-center">Are you sure you want to <span class="text-danger">delete</span> ?🤔</h4>
                    <div class="modal-footer pb-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="button" class="btn btn-danger">Yes</button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Modal-delete customer -->

<!-- Customer Section -->