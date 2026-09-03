<?php
require_once __DIR__ . '/cms.php';
$cmsGlobalSettings = cms_get_site_settings();
$cmsGlobalSocial = array_filter($cmsGlobalSettings['social'] ?? [], static fn($url) => is_string($url) && trim($url) !== '');
$cmsGlobalSocial = array_merge([
    'facebook_url' => 'https://www.facebook.com/SwadesFoundation',
    'twitter_url' => 'https://twitter.com/WeAreSwades',
    'instagram_url' => 'https://instagram.com/swadesfoundation',
    'linkedin_url' => 'https://linkedin.com/company/swades-foundation',
    'youtube_url' => '',
], $cmsGlobalSocial);
$cmsFooterText = 'Committed to lifting one million rural Indians out of poverty every five years through community-driven change';
?>
<footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="ftr-logo">
            <a href="index.php"><img src="<?= htmlspecialchars(cms_media_src('./assets/images/ftr_Logo.svg', './assets/images/ftr_Logo.svg'), ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars(cms_media_alt('./assets/images/ftr_Logo.svg', 'Swades Foundation'), ENT_QUOTES, 'UTF-8') ?>"></a>
            <p><?= htmlspecialchars(($cmsGlobalSettings['footer_text'] ?? '') ?: ($cmsGlobalSettings['tagline'] ?? $cmsFooterText), ENT_QUOTES, 'UTF-8') ?></p>
          </div>
          <div class="social-icon desktop">
            <?php if (!empty($cmsGlobalSocial['facebook_url'])): ?><a href="<?= htmlspecialchars($cmsGlobalSocial['facebook_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener"><img src="./assets/images/facebook.svg" alt="Facebook"></a><?php endif; ?>
            <?php if (!empty($cmsGlobalSocial['twitter_url'])): ?><a href="<?= htmlspecialchars($cmsGlobalSocial['twitter_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener"><img src="./assets/images/x.png" alt="X"></a><?php endif; ?>
            <?php if (!empty($cmsGlobalSocial['instagram_url'])): ?><a href="<?= htmlspecialchars($cmsGlobalSocial['instagram_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener"><img src="./assets/images/instagram.svg" alt="Instagram"></a><?php endif; ?>
            <?php if (!empty($cmsGlobalSocial['linkedin_url'])): ?><a href="<?= htmlspecialchars($cmsGlobalSocial['linkedin_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener"><img src="./assets/images/linkedIn.svg" alt="LinkedIn"></a><?php endif; ?>
            <?php if (!empty($cmsGlobalSocial['youtube_url'])): ?><a href="<?= htmlspecialchars($cmsGlobalSocial['youtube_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener"><img src="./assets/images/youtube.svg" alt="YouTube"></a><?php endif; ?>
          </div>

        </div>
        <div class="col-md-6">
          <div class="ftr-werp">
            <div class="ftr-menu">
              <h5>Swades Foundation</h5>
              <ul>
                <li><a href="about-us">Who we are</a></li>
                <li><a href="impact">Our Impact</a></li>
                <li><a href="dreamvillage">Swades Dream Village</a></li>
                <li><a href="careers">Careers</a></li>
                <li><a href="Donate">Donate</a></li>
              </ul>
            </div>

            <div class="ftr-menu">
              <h5>Our Work</h5>
              <ul>
                <li><a href="water-and-sanitation">Water, Sanitation & Green Initiatives</a></li>
                <li><a href="health">Health</a></li>
                <li><a href="educations">Education</a></li>
                <li><a href="economic-development">Economic Development</a></li>
              </ul>
            </div>

            <div class="ftr-menu">
              <h5>Other Pages</h5>
              <ul>
                <li><a href="https://swadesfoundation.org/videos-media#media">Media Gallery</a></li>
                <li><a href="blogs.php">Blogs</a></li>
                <li><a href="https://swadesfoundation.org/videos-media#financials">Financial Reports</a></li>
                <li><a href="contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <div class="social-icon mobile">
        <?php if (!empty($cmsGlobalSocial['facebook_url'])): ?><a href="<?= htmlspecialchars($cmsGlobalSocial['facebook_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener"><img src="./assets/images/facebook.svg" alt="Facebook"></a><?php endif; ?>
        <?php if (!empty($cmsGlobalSocial['twitter_url'])): ?><a href="<?= htmlspecialchars($cmsGlobalSocial['twitter_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener"><img src="./assets/images/x.png" alt="X"></a><?php endif; ?>
        <?php if (!empty($cmsGlobalSocial['instagram_url'])): ?><a href="<?= htmlspecialchars($cmsGlobalSocial['instagram_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener"><img src="./assets/images/instagram.svg" alt="Instagram"></a><?php endif; ?>
        <?php if (!empty($cmsGlobalSocial['linkedin_url'])): ?><a href="<?= htmlspecialchars($cmsGlobalSocial['linkedin_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener"><img src="./assets/images/linkedIn.svg" alt="LinkedIn"></a><?php endif; ?>
        <?php if (!empty($cmsGlobalSocial['youtube_url'])): ?><a href="<?= htmlspecialchars($cmsGlobalSocial['youtube_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener"><img src="./assets/images/youtube.svg" alt="YouTube"></a><?php endif; ?>
      </div>

      <div class="ftr-menu mobile">
        <ul>
          <li><a href="privacy-policy">Privacy policy</a></li>
          <li><a href="terms-conditions">Terms & Condition</a></li>
          <li> <a href="refund-policy">Refund policy</a></li>
          <li><a href="posh-policy">POSH policy</a></li>
        </ul>
      </div>

      <div class="copyright">
        <div class="row">
          <div class="col-md-6">
            <p><?= htmlspecialchars(str_replace('%year%', date('Y'), ($cmsGlobalSettings['copyright_text'] ?? '') ?: 'Copyright %year% © Swades Foundation'), ENT_QUOTES, 'UTF-8') ?></p>
          </div>
          <div class="col-md-6">
            <div class="privacy-dlf">
              <a href="privacy-policy">Privacy policy</a>
              <a href="terms-conditions">Terms & Condition</a>
              <a href="refund-policy">Refund policy</a>
              <a href="posh-policy">POSH policy</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
<script>
   jQuery(".nav-item").each(function () {
      var $item = jQuery(this);
      var $toggle = $item.find(".toggle-dropdown");
      var $link = $item.find("> a");
    
      if ($toggle.length) {
        function toggleMenu(e) {
          e.preventDefault();
    
          jQuery(".nav-item").not($item).removeClass("open")
            .find(".toggle-dropdown").removeClass("open");
    
          $item.toggleClass("open");
          $toggle.toggleClass("open");
        }
    
        $link.on("click", function (e) {
          if (window.innerWidth <= 991) {
            toggleMenu(e);
          }
        });
    
        $toggle.on("click", toggleMenu);
      }
    });
</script>
</footer>
<style>
.whatsapp-float {
  position: fixed;
  right: 20px;
  bottom: 20px;
  z-index: 9999;
}

.whatsapp-float img {
  width: 55px;
  height: 55px;
  border-radius: 50%;
  box-shadow: 0 4px 10px rgba(0,0,0,0.3);
  transition: 0.3s;
}

.whatsapp-float img:hover {
  transform: scale(1.1);
}
</style>
<!-- ✅ Floating WhatsApp Icon -->
<a href="https://wa.me/912261093730" target="_blank" class="whatsapp-float">
  <img src="./assets/images/WhatsApp.svg" alt="WhatsApp">
</a>
