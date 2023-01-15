</section>
</div>
</div>
</div>
<script type="text/javascript">
    window.setTimeout(function() {
        $("#flashdata").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 2000);
</script>

<script type="text/javascript">
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });


    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "<?= base_url('admin/changeaccess'); ?>",
            type: "post",
            data: {
                menuId: menuId,
                roleId: roleId
            },
            success: function() {
                document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
            }
        })
    });
</script>
<script type="text/javascript">
    $(document).on("click", ".browse", function() {
        var file = $(this).parents().find(".file");
        file.trigger("click");
    });
    $('input[type="file"]').change(function(e) {
        var fileName = e.target.files[0].name;
        $("#file").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });
</script>
<!-- jquery vendor -->
<script src="<?= base_url('assets/'); ?>js/lib/jquery.nanoscroller.min.js"></script>
<!-- nano scroller -->
<script src="<?= base_url('assets/'); ?>js/lib/menubar/sidebar.js"></script>
<script src="<?= base_url('assets/'); ?>js/lib/preloader/pace.min.js"></script>
<!-- sidebar -->

<!-- Datatable -->
<script src="<?= base_url('assets/'); ?>js/lib/data-table/datatables.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/lib/data-table/buttons.flash.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/lib/data-table/jszip.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/lib/data-table/pdfmake.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/lib/data-table/vfs_fonts.js"></script>
<script src="<?= base_url('assets/'); ?>js/lib/data-table/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/lib/data-table/buttons.print.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/lib/data-table/datatables-init.js"></script>

<script src="<?= base_url('assets/'); ?>js/lib/bootstrap.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/scripts.js"></script>
<!-- bootstrap -->

<script src="<?= base_url('assets/'); ?>js/lib/calendar-2/moment.latest.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/lib/calendar-2/pignose.calendar.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/lib/calendar-2/pignose.init.js"></script>


<script src="<?= base_url('assets/'); ?>js/lib/weather/jquery.simpleWeather.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/lib/weather/weather-init.js"></script>
<script src="<?= base_url('assets/'); ?>js/lib/circle-progress/circle-progress.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/lib/circle-progress/circle-progress-init.js"></script>
<script src="<?= base_url('assets/'); ?>js/lib/chartist/chartist.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/lib/sparklinechart/jquery.sparkline.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/lib/sparklinechart/sparkline.init.js"></script>
<script src="<?= base_url('assets/'); ?>js/lib/owl-carousel/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/lib/owl-carousel/owl.carousel-init.js"></script>
<!-- scripit init-->
<script src="<?= base_url('assets/'); ?>js/dashboard2.js"></script>
</body>

</html>