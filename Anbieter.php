<?php
include 'template/header.php';
?>


<!-- Start right Content here -->
<!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Appartement</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Immobiliermarrakesh</a></li>
                                    <li class="breadcrumb-item active">Appartement</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="position-relative">
                                    <div class="modal-button mt-2">
                                        <a href="add-proprety.php?type=Appartement"><button type="button" class="btn btn-success waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i> Ajouter</button></a>
                                    </div>
                                </div>
                                <div id="table-appartement"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <!-- modal delete-->
        <div class="modal fade" id="deleteprp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Supprimer La Propriété</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="iddeleterole">
                        <p>Êtes-vous sûr de vouloir supprimer définitivement cette propriété ? Cette action est irréversible et toutes les données associées seront supprimées. Veuillez confirmer votre décision en cliquant sur le bouton de suppression ci-dessous.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                        <button type="button" id="supprimer" class="btn btn-danger">Supprimer</button>
                    </div>
                </div>
            </div>
        </div>


        <!--  Extra Large modal example -->
        <div class="modal fade add-new-order" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myExtraLargeModalLabel">Add New Order</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="AddOrder-Product">Choose Product</label>
                                    <select class="form-select">
                                        <option selected> Select Product </option>
                                        <option>Adidas Running Shoes</option>
                                        <option>Puma P103 Shoes</option>
                                        <option>Adidas AB23 Shoes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="AddOrder-Billing-Name">Billing Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Billing Name" id="AddOrder-Billing-Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" placeholder="Select Date" id="order-date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="AddOrder-Total">Total</label>
                                    <input type="text" class="form-control" placeholder="$565" id="AddOrder-Total">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="AddOrder-Payment-Status">Payment Status</label>
                                    <select class="form-select">
                                        <option selected> Select Card Type </option>
                                        <option>Paid</option>
                                        <option>Chargeback</option>
                                        <option>Refund</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="AddOrder-Payment-Method">Payment Method</label>
                                    <select class="form-select">
                                        <option selected> Select Payment Method </option>
                                        <option> Mastercard</option>
                                        <option>Visa</option>
                                        <option>Paypal</option>
                                        <option>COD</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12 text-end">
                                <button type="button" class="btn btn-danger me-1" data-bs-dismiss="modal"><i class="bx bx-x me-1"></i> Cancel</button>
                                <button type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#success-btn" id="btn-save-event"><i class="bx bx-check me-1"></i> Confirm</button>
                            </div>
                        </div>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


        <!--  successfully modal  -->
        <div id="success-btn" class="modal fade" tabindex="-1" aria-labelledby="success-btnLabel" aria-hidden="true" data-bs-scroll="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="bx bx-check-circle display-1 text-success"></i>
                            <h3 class="mt-3">Order Completed Successfully</h3>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- Modal -->
        <div class="modal fade orderdetailsModal" tabindex="-1" role="dialog" aria-labelledby="orderdetailsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="orderdetailsModalLabel">Order Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
                        <p class="mb-4">Billing Name: <span class="text-primary">Neal Matthews</span></p>

                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div>
                                                <img src="assets/images/product/img-1.png" alt="" class="avatar-md">
                                            </div>
                                        </th>
                                        <td>
                                            <div>
                                                <h5 class="text-truncate font-size-14">Nike N012 Shoes</h5>
                                                <p class="text-muted mb-0">$ 225 x 1</p>
                                            </div>
                                        </td>
                                        <td>$ 255</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div>
                                                <img src="assets/images/product/img-4.png" alt="" class="avatar-md">
                                            </div>
                                        </th>
                                        <td>
                                            <div>
                                                <h5 class="text-truncate font-size-14">Sports S120 Shoes</h5>
                                                <p class="text-muted mb-0">$ 145 x 1</p>
                                            </div>
                                        </td>
                                        <td>$ 145</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6 class="m-0 text-right">Sub Total:</h6>
                                        </td>
                                        <td>
                                            $ 400
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6 class="m-0 text-right">Shipping:</h6>
                                        </td>
                                        <td>
                                            Free
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6 class="m-0 text-right">Total:</h6>
                                        </td>
                                        <td>
                                            $ 400
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> &copy; Rheinwunder Gmbh.
                    </div>
                    <!--
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://Themesbrand.com/" target="_blank" class="text-reset">Themesbrand</a>
                                </div>
                            </div>-->
                </div>
            </div>
        </footer>
    </div>
<!-- end main content-->




<?php
include 'template/footer.php';
?>