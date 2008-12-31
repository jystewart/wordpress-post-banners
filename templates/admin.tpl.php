<?php if ($message) : ?>
  <div id="message" class="updated"><p><?php echo $message; ?></p></div>
<?php endif; ?>

<div class="wrap">
  <div id="poststuff" class="meta-box-sortables" style="position: relative; margin-top:10px;">
    <div class="stuffbox">
      <h3><?php _e('Post Banners Options', 'post-banners'); ?></h3>
      <div class="inside">
        <form method="post">
          <p>
            <label for="display_banners_in_feeds">Display Post Banners in Feeds?</label>
            <input type="checkbox" name="display_banners_in_feeds" value="1" id="display_banners_in_feeds" <?php if ($options['display_banners_in_feeds'] == 1) { echo 'checked="checked"'; } ?>>
          </p>
          <p>
            <input type="submit" name="post_banners_options_submit" value="<?php _e('Update Options &raquo;', 'post-banners'); ?>" class="button-primary" />
          </p>
        </form>
      </div>
    </div>
  </div>
</div>
