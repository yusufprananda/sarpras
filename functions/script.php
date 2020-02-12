    <!-- Link Script -->
    <!-- JQuery 3.4.1 -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <script src="js/all.min.js"></script>
    <!-- My Script -->
    <script>
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll > 0) {
                // $('.navscroll').css('display', 'flex');
                // $("#navscroll").removeClass("d-none");
                $("nav").addClass("shadow");
                // $("#navscroll").fadeIn(200);
            } else {
                $("nav").removeClass("shadow");
            }
            console.log(scroll)
        });
    </script>