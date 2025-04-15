<?php
/**
 * Template part for displaying page content in footer.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package framesync
 */

?>

<footer class="footer">
    <div class="container">
        <div class="footer__row">
            <div class="footer__col">
                <div class="footer__logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/public/logo.svg'); ?>" alt="Logo" />
                    </a>
                </div>
            </div>
            <div class="footer__col">
                <div class="footer__nav">
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
                        <li><a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer__col">
                <div class="footer__nav">
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
                        <li><a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer__col">
                <div class="footer__nav">
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
                        <li><a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex flex-col xl:flex-row items-center gap-4 mt-10">
            <div class="footer__social">
                <?php echo do_shortcode('[social_links icon="true" label="false"]'); ?>
            </div>
            <div class="footer__copyright">
                <p class="content">&copy; <?php echo date('Y'); ?> Your Company Name. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
