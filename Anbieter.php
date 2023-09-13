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
                            <h4 class="mb-0">Anbieter</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">WLW.de</a></li>
                                    <li class="breadcrumb-item active">Anbieter</li>
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
                                <!--<div class="position-relative">
                                    <div class="modal-button mt-2">
                                        <a href="add-proprety.php?type=Appartement"><button type="button" class="btn btn-success waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i> Ajouter</button></a>
                                    </div>
                                </div>-->
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