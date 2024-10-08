<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package propell
 */
$assets = get_path_assets();

?>

<footer id="footer" class="footer mb-lg">
    <div class="container">
        <div class="footer__row01">
            <div class="logo"><img src="<?php echo $assets ?>/img/logo-nav.png" alt="Logo"></div>
            <div class="list">
                <ul>
                    <li>Electrical Engineering</li>
                    <li>Extra Low Voltage System</li>
                    <li>ACMV System</li>
                    <li>Fire Prevention & Protection System</li>
                    <li>ECO System</li>
                    <li>Integrated Facilities Management</li>
                </ul>
            </div>
            <div class="group">
                <h2 class="c-title">There's Nothing <br/>We Can't Achieve Together</h2>
                <div class="subcrice">
                    <input class="subcrice__input" type="text" name="mail" placeholder="Your email...">
                    <a href="<?php echo get_page_url("contact")?>" class="subcrice__btn c-learn-more">SEND</a>
                </div>
                <ul class="partner only-pc">
<!--                    <li><img src="--><?php //echo $assets ?><!--/img/footer-logo01.png" alt=""></li>-->
                    <li><img src="<?php echo $assets ?>/img/footer-logo02.png" alt=""></li>
                    <li><img src="<?php echo $assets ?>/img/footer-logo03.png" alt=""></li>
                    <li><img src="<?php echo $assets ?>/img/footer-logo04.png" alt=""></li>
                    <li><img src="<?php echo $assets ?>/img/footer-logo05.png" alt=""></li>
                    <li><img src="<?php echo $assets ?>/img/footer-logo06.png" alt=""></li>
                </ul>
                <div class="partner only-sp"><img src="<?php echo $assets ?>/img/footer-logo_sp.png" alt=""></div>
            </div>
        </div>
        <div class="footer__row02">
            <ul class="nav">
                <li><a href="/contact-us/">Contact Us</a></li>
                <li><a href="#">Propell Responsibilites</a></li>
                <li><a href="/careers/">Careers</a></li>
                <li><a href="/terms-of-use/">Terms of Use</a></li>
                <li><a href="/policy/">Personal Data Protection Policy</a></li>
            </ul>
            <ul class="social">
                <li><a href="#" target="_blank"><img src="<?php echo $assets ?>/img/icon-youtube.png" alt="youtube"></a></li>
                <li><a href="#" target="_blank"><img src="<?php echo $assets ?>/img/icon-facebook.png" alt="facebook"></a></li>
                <li><a href="#" target="_blank"><img src="<?php echo $assets ?>/img/icon-linkedin.png" alt="linkedin"></a></li>
            </ul>
            <p class="copyright">© 2023 Propell Integrated Pte Ltd .<br/>All rights reserved.</p>
        </div>
    </div>
</footer>

<script>
    var ajax_url = '<?php echo admin_url( 'admin-ajax.php' ); ?>';
</script>

<?php wp_footer(); ?>
<?php if (is_page_template('page-award.php')) :?>
    <script>
        $(function(){
            $('.thumbnail').viewbox({
                setTitle: true,
                margin: 30,
                openDuration: 200,
            });
        });
    </script>
<?php endif; ?>
<script>
    jQuery(document).ready(function($) {
        $('#live-search-input').on('keyup', function() {
            var searchTerm = $(this).val();

            if (searchTerm.length > 2) { // Only search if more than 2 characters
                $.ajax({
                    url: '<?php echo admin_url('admin-ajax.php'); ?>',
                    type: 'GET',
                    data: {
                        action: 'live_search',
                        s: searchTerm
                    },
                    success: function(response) {
                        $('#live-search-results').html(response);
                    }
                });
            } else {
                $('#live-search-results').empty(); // Clear results if less than 3 characters
            }
        });
    });
</script>
</body>

</html>
