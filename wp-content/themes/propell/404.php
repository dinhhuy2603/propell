<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package propell
 */
$current_home_url = pll_home_url();
get_header();
?>

    <main id="main" class="main">
        <div class="p-404">
            <div class="container">
                <div class="p-404__group">
                    <h2 class="c-title">404</h2>
                    <p class="c-text">The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
                    <a href="<?php echo $current_home_url ?>" class="btn c-btn">Back to home</a>
                </div>
            </div>
        </div>
    </main>

<?php
get_footer();
