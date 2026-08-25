<?php foreach (cms_navigation_sections() as $cmsNavSection): ?>
  <?php if (!empty($cmsNavSection['children'])): ?>
    <li class="nav-item"><a href="#"><span> <?= htmlspecialchars($cmsNavSection['label'], ENT_QUOTES, 'UTF-8') ?> </span>
        <i class="fas fa-angle-down toggle-dropdown rotate"></i></a>
      <ul class="dropdown">
        <?php foreach ($cmsNavSection['children'] as $cmsNavChild): ?>
          <li><a href="<?= htmlspecialchars($cmsNavChild['url'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($cmsNavChild['label'], ENT_QUOTES, 'UTF-8') ?></a></li>
        <?php endforeach; ?>
      </ul>
    </li>
  <?php else: ?>
    <li class="nav-item"><a href="<?= htmlspecialchars($cmsNavSection['url'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($cmsNavSection['label'], ENT_QUOTES, 'UTF-8') ?></a></li>
  <?php endif; ?>
<?php endforeach; ?>
