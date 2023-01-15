<script type="text/javascript">
    window.setTimeout(function() {
        $("#flashdata").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 2000);
</script>
<script src="<?= base_url('assets/'); ?>js/lib/bootstrap.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/scripts.js"></script>

<!-- footer -->
<!-- Footer -->
<footer class="bg-dark text-center text-white footer ">
    <!-- Grid container -->
    <div class="container p-4 mt-5">
        <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-4 col-md-8 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Alamat</h5>
                    <p>Jl. Garuda No.1, Sindangpalay, Cibeureum, Kota Sukabumi, Jawa Barat 43162, Indonesia</p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-8 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Kontak</h5>
                    <p class="mb-0">test@gmail.com</p>
                    <p class="mb-0">instagram : @kel.sindangpalay</p>
                    <p class="mb-0">+62 851-5650-5931</p>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-8 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Jam Operasional</h5>

                    <p class="mb-0">Senin - Jumat (09.00 - 15.00)</p>
                    <p class="mt-0">Sabtu - Minggu (Tutup)</p>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        Hak Cipta © 2022
        <a class="text-white" href="https://mdbootstrap.com/">Kelurahan SindangPalay Sukabumi</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
<!-- end footer -->

<!-- Optional JavaScript; choose one of the two! -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>