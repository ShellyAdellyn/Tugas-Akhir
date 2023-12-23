    <style>
        .list-unstyled li a {
            color: white;
            text-decoration: none;
        }

        .list-unstyled li a:hover {
            color: rgb(163, 211, 255);
            text-decoration: none;
        }
        input.btn.i {
            border: 2px solid white;
            width: 75%;
            padding: 7px;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        button.btn.o {
            border: 2px solid white;
            padding: 7px;
            font-weight: bold;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        ::placeholder {
            color: white;
        }

        footer {
            left: 0;
            bottom: 0;
            width: 100%;
        }
    </style>
    <footer>
        <div class="page-footer font-small indigo mt-3">
            <div class="container-fluid text-center bg-primary text-md-left">
                <div class="row text-white">
                    <div class="col-md-2 mx-auto">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-2">ABOUT US</h5>
                        Beadslyy adalah website yang menjual berbagai barang Fahion Wanita.
                        <br>
                        <img src="assets/img/icon/ig.PNG" height="25px" width="25px" alt="">
                        <img src="assets/img/icon/fb.png" height="25px" width="25px" alt="">
                        <img src="assets/img/icon/twitter.png" height="23px" width="23px" alt="">
                    </div>
                    <div class="col-md-2.5 mx-auto">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-2">PELAYANAN PELANGGAN</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Hubungi kami</a>
                            </li>
                            <li>
                                <a href="#!">Pemesanan & Pembayaran</a>
                            </li>
                            <li>
                                <a href="#!">Pengiriman</a>
                            </li>
                            <li>
                                <a href="#!">Kembali</a>
                            </li>
                            <li>
                                <a href="#!">Pertanyaan-pertanyaan Terkait</a>
                            </li>
                        </ul>
                    </div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-md-1.5 mx-auto">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-2">INFORMASI</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Privasi Pribadi</a>
                            </li>
                            <li>
                                <a href="#!">Syarat dan Ketentuan</a>
                            </li>
                            <li>
                                <a href="#!">Press Question</a>
                            </li>
                        </ul>
                    </div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-md-2 mx-auto">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-2">NEWSLETTER</h5>
                        <form action="#">
                            <div class="input-group">
                                <input class="btn i bg-primary text-white text-md-left" name="email" id="email"
                                    type="email" placeholder="Your Email">
                                <button class="btn btn-info o bg-white text-primary" type="submit">OK</button>
                            </div>
                        </form>
                    </div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-md-2 mx-auto">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-2">CONTACT US</h5>
                        <ul class="list-unstyled">
                            +62 821 5408 9231 <br>
                            Beadslyy_id@gmail.com <br>
                            Jl. SMU 5 Gg. Purnama
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright text-center py-3 text-dark" style="background-color: #fdc0c5">©2023 Copyright :
                <a href="index.html"> Beadslyy_id.com</a>
            </div>
        </div>
    </footer>

    </body>
    <!-- Js Dasar -->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Popper -->
    <script src="assets/js/popper/popper.min.js"></script>
    <!-- Owl Carausel -->
    <script src="assets/js/owl/owl.carousel.js"></script>
    <!-- Sweetalert -->
    <script src="assets/js/sweetalert/sweetalert.min.js"></script>

    <!-- Stok Detail Produk -->
    <!-- Plugins js -->
    <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="plugins/bootstrap-maxlength/bootstrap-maxlength.js"></script>
    <script src="plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

    <!-- Plugins Init js -->
    <script src="admin/assets/pages/form-advanced.js"></script>

    <!-- Datatable js -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Responsive examples -->
    <script src="plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#datatable').DataTable();
        });
    </script>

    </html>