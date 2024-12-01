<?php
if (!defined('R4F5CC')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}
?>
<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">





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
    <script src="<?php URLADM; ?>app/adms/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php URLADM; ?>app/adms/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php URLADM; ?>app/adms/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?php URLADM; ?>app/adms/assets/vendor/php-email-form/validate.js"></script>
    <script src="<?php URLADM; ?>app/adms/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="<?php URLADM; ?>app/adms/assets/vendor/venobox/venobox.min.js"></script>
    <script src="<?php URLADM; ?>app/adms/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?php URLADM; ?>app/adms/assets/vendor/counterup/counterup.min.js"></script>
    <script src="<?php URLADM; ?>app/adms/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?php URLADM; ?>app/adms/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php URLADM; ?>app/adms/assets/vendor/aos/aos.js"></script>
    <script src="<?php URLADM; ?>app/adms/assets/js/personalizado.js"></script>
    <script src="<?php URLADM; ?>app/adms/assets/js/form-validation.js"></script>
    <script src="<?php URLADM; ?>app/adms/assets/js/sb-admin-2.min.js"></script>

    
    <!-- Vendor JS Files -->

    <script src="<?php URLADM; ?>app/adms/assets/vendor/jquery-countdown/jquery.countdown.min.js"></script>


    <!-- Template Main JS File -->
    <script src="<?php URLADM; ?>app/adms/assets/js/main.js"></script>
</body>
</html>
