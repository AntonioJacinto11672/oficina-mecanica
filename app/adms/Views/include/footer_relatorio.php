<?php
if (!defined('R4F5CC')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}
?>
</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Itel 2020</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tens A Certeza Que Queres Sair?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Clica "Sair" Para terminar a Sessão.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?php echo URLADM; ?>sair">Sair</a>
            </div>
        </div>
    </div>
</div>

<!-- Vendor JS Files -->
<script src="<?php URLADM;?>app/adms/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php URLADM;?>app/adms/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php URLADM;?>app/adms/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?php URLADM;?>app/adms/assets/vendor/php-email-form/validate.js"></script>
<script src="<?php URLADM;?>app/adms/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
<script src="<?php URLADM;?>app/adms/assets/vendor/venobox/venobox.min.js"></script>
<script src="<?php URLADM;?>app/adms/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="<?php URLADM;?>app/adms/assets/vendor/counterup/counterup.min.js"></script>
<script src="<?php URLADM;?>app/adms/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?php URLADM;?>app/adms/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php URLADM;?>app/adms/assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="<?php URLADM;?>app/adms/assets/js/main.js"></script>

<script src="<?php URLADM; ?>app/adms/assets/js/personalizado.js"></script>
<script src="<?php URLADM; ?>app/adms/assets/js/form-validation.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="<?php URLADM; ?>app/adms/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- overlayScrollbars -->
<script src="<?php URLADM; ?>app/adms/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php URLADM; ?>app/adms/assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php URLADM; ?>app/adms/assets/dist/js/demo.js"></script>
<!-- ChartJS -->
<script src="<?php URLADM; ?>app/adms/assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php URLADM; ?>app/adms/assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php URLADM; ?>app/adms/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php URLADM; ?>app/adms/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php URLADM; ?>app/adms/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php URLADM; ?>app/adms/assets/plugins/moment/moment.min.js"></script>
<script src="<?php URLADM; ?>app/adms/assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php URLADM; ?>app/adms/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php URLADM; ?>app/adms/assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php URLADM; ?>app/adms/assets/dist/js/pages/dashboard.js"></script>


<script src="<?php URLADM; ?>app/adms/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php URLADM; ?>app/adms/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php URLADM; ?>app/adms/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php URLADM; ?>app/adms/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php URLADM; ?>app/adms/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php URLADM; ?>app/adms/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php URLADM; ?>app/adms/assets/plugins/jszip/jszip.min.js"></script>
<script src="<?php URLADM; ?>app/adms/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php URLADM; ?>app/adms/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php URLADM; ?>app/adms/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php URLADM; ?>app/adms/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php URLADM; ?>app/adms/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- BS-Stepper -->
<script src="<?php URLADM; ?>app/adms/assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>

<!-- Page specific script -->
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

<!-- Page specific script -->
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'})
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', {'placeholder': 'mm/dd/yyyy'})
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservationdate').datetimepicker({
            format: 'L'
        });
        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
                format: 'MM/DD/YYYY hh:mm A'
            }
        })
        //Date range as a button
        $('#daterange-btn').daterangepicker(
                {
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function (start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
        )

        //Timepicker
        $('#timepicker').datetimepicker({
            format: 'LT'
        })

        //Bootstrap Duallistbox
        $('.duallistbox').bootstrapDualListbox()

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        $('.my-colorpicker2').on('colorpickerChange', function (event) {
            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        })

        $("input[data-bootstrap-switch]").each(function () {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        })

    })
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function () {
        window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })

    // DropzoneJS Demo Code Start
    Dropzone.autoDiscover = false

    // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
    var previewNode = document.querySelector("#template")
    previewNode.id = ""
    var previewTemplate = previewNode.parentNode.innerHTML
    previewNode.parentNode.removeChild(previewNode)

    var myDropzone = new Dropzone(document.body, {// Make the whole body a dropzone
        url: "/target-url", // Set the url
        thumbnailWidth: 80,
        thumbnailHeight: 80,
        parallelUploads: 20,
        previewTemplate: previewTemplate,
        autoQueue: false, // Make sure the files aren't queued until manually added
        previewsContainer: "#previews", // Define the container to display the previews
        clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
    })

    myDropzone.on("addedfile", function (file) {
        // Hookup the start button
        file.previewElement.querySelector(".start").onclick = function () {
            myDropzone.enqueueFile(file)
        }
    })

    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function (progress) {
        document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
    })

    myDropzone.on("sending", function (file) {
        // Show the total progress bar when upload starts
        document.querySelector("#total-progress").style.opacity = "1"
        // And disable the start button
        file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
    })

    // Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("queuecomplete", function (progress) {
        document.querySelector("#total-progress").style.opacity = "0"
    })

    // Setup the buttons for all transfers
    // The "add files" button doesn't need to be setup because the config
    // `clickable` has already been specified.
    document.querySelector("#actions .start").onclick = function () {
        myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
    }
    document.querySelector("#actions .cancel").onclick = function () {
        myDropzone.removeAllFiles(true)
    }
    // DropzoneJS Demo Code End
</script>
<!-- W3 Slide de form e outros-->
<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        ;
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].classList.remove("w3-blue");
        }
        x[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].classList.add("w3-blue");
    }
</script>
<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
  })
</script>
</body>
</html>

</body>
</html>