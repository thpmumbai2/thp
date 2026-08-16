<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<footer class="site-footer" id="contact">
  <span class="label">04 · Contact</span>
  <h2 style="margin-top:1.2rem;">Ready to start with a proper conversation about your health?</h2>
  <a class="cta" href="mailto:<?php echo esc_attr( ho_opt('contact_email','hello@thehomoeopath.example') ); ?>">Book a Consultation</a>
  <div class="foot-meta">
    <span><?php echo ho_opt('contact_hours','Mon–Sat · By Appointment'); ?></span>
    <span>In-Person &amp; Online</span>
    <span><?php echo ho_opt('contact_email','hello@thehomoeopath.example'); ?></span>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
