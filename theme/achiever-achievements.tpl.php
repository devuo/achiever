<?php

/**
 * @file
 * Theme for a list of achievements.
 *
 * @var $classes
 *  The css classes for this achievement
 * @var AchieverAchievement[] $achievements
 *  The achievements object instance.
 * @var array $rendered_achievements
 *  The rendered achievements list.
 * @var object $account
 *  The user account to whom the achievement belongs to.
 */

?>

<section class="<?php print $classes ?>">
  <h1 class="achiever-achievements-title"><?php print t('Achievements'); ?></h1>
  <p class="achiever-achievements-description"><?php print t("Here's the list of achievements."); ?></p>

  <div class="achiever-achievements-list">
    <?php foreach ($rendered_achievements as $rendered_achievement): ?>
      <?php print $rendered_achievement; ?>
    <?php endforeach; ?>
  </div>

</section>
