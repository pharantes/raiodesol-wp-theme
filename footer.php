<footer class="bg-light">
    <div class="container-fluid">
        <div class="row d-flex align-items-center justify-content-between mx-1">
            <p class="copyright">
                &copy; Copyright <span id="year"></span> - Raio de Sol - Todos os
                direitos reservados.
            </p>
            <ul class="footer-menu">
                <li><a href="<?php echo home_url('termos'); ?>">Termos de uso</a></li>
            </ul>
        </div>
    </div>
</footer>
<script>
    theme_directory = "<?php echo get_template_directory_uri(); ?>";
</script>
<script src="<?php echo get_template_directory_uri() ?>/assets/dist/js/vendors.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
<script>
    WebFont.load({
        google: {
            families: [
                'PT Sans Narrow:400,600,700',
                'Dancing Script:700'

            ]
        }
    });
</script>
<script>
    $(document).ready(function() {
        var d = new Date();
        var y = d.getFullYear();
        $("#year").text(y);
    });
</script>
<script src="<?php echo get_template_directory_uri() ?>/assets/dist/js/main.js"></script>
</body>

</html>