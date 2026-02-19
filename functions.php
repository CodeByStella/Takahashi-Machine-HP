<?php

/**
 * MyTheme functions and definitions
 * Tailwind CLI version (NO CDN)
 */

if (!defined('ABSPATH')) {
  exit;
}


/* ======================================================
   Theme Setup
====================================================== */
function mytheme_setup()
{
  load_theme_textdomain('mytheme', get_template_directory() . '/languages');

  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
      'script',
    )
  );

  add_theme_support(
    'custom-logo',
    array(
      'height' => 120,
      'width' => 320,
      'flex-height' => true,
      'flex-width' => true,
    )
  );

  add_theme_support('site-icon');

  register_nav_menus(
    array(
      'primary' => __('Primary Menu', 'mytheme'),
      'footer'  => __('Footer Menu', 'mytheme'),
    )
  );

  // Block editor: allow free layout, colors, and block styles on front.
  add_theme_support('wp-block-styles');
  add_theme_support('editor-styles');
  add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'mytheme_setup');

/**
 * Allow .ico (favicon) uploads in Media Library and Site Icon.
 */
function mytheme_allow_ico_upload($mimes)
{
  $mimes['ico'] = 'image/x-icon';
  return $mimes;
}
add_filter('upload_mimes', 'mytheme_allow_ico_upload');

/**
 * So WordPress accepts .ico during file validation (wp_check_filetype_and_ext).
 */
function mytheme_check_filetype_ico($data, $file, $filename, $mimes)
{
  if (!empty($data['ext']) && !empty($data['type'])) {
    return $data;
  }
  $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
  if ($ext !== 'ico') {
    return $data;
  }
  return array(
    'ext'             => 'ico',
    'type'            => 'image/x-icon',
    'proper_filename' => $filename,
  );
}
add_filter('wp_check_filetype_and_ext', 'mytheme_check_filetype_ico', 10, 4);


/* ======================================================
   Download file (Customizer) — PDF, image, etc.
====================================================== */

/**
 * Register Customizer setting for the download file (PDF, image, etc.).
 */
function mytheme_customize_register_download($wp_customize)
{
  $wp_customize->add_section('mytheme_download', array(
    'title'    => __('資料ダウンロード / Download File', 'mytheme'),
    'priority' => 130,
  ));

  $wp_customize->add_setting('mytheme_download_file_id', array(
    'default'           => 0,
    'sanitize_callback' => 'absint',
    'transport'         => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'mytheme_download_file_id', array(
    'label'       => __('Download file (PDF, image, etc.)', 'mytheme'),
    'description' => __('Select or upload the file that visitors can download from the header and enquiry section. Leave empty to link to the product page instead.', 'mytheme'),
    'section'     => 'mytheme_download',
    'mime_type'   => '', // Allow any file type (PDF, images, etc.)
  )));
}
add_action('customize_register', 'mytheme_customize_register_download');

/**
 * Return the download URL. If a file is set in Customizer, returns its URL; otherwise fallback (e.g. product page).
 */
function mytheme_get_download_url()
{
  $attachment_id = (int) get_theme_mod('mytheme_download_file_id', 0);
  if ($attachment_id > 0) {
    $url = wp_get_attachment_url($attachment_id);
    if ($url) {
      return $url;
    }
  }
  return home_url('/product/#product-movie-section');
}

/* ======================================================
   Contact form (page-contact) — Contact Form 7
====================================================== */

/**
 * Contact Form 7: form ID for the contact page.
 * Install CF7, create a form, then set this to the form ID (e.g. 123).
 * You can find the ID in WP Admin → Contact → edit the form (ID is in the shortcode or in the URL).
 *
 * Recommended form template (same fields as original UI; submit is moved after privacy by JS):
 * <p><label>会社名 <span class="required">必須</span></label>[text* companyname]</p>
 * <p><label>お名前 <span class="required">必須</span></label>[text* your-name]</p>
 * <p><label>メールアドレス <span class="required">必須</span></label>[email* your-email]</p>
 * <p><label>電話番号 <span class="required">必須</span></label>[tel* your-phone]</p>
 * <p><label>お問い合わせの件名</label>[text your-subject]</p>
 * <p><label>お問い合わせ内容</label>[textarea your-message]</p>
 * [submit "内容を確認する"]
 */
if (!defined('MYTHEME_CF7_CONTACT_FORM_ID')) {
  define('MYTHEME_CF7_CONTACT_FORM_ID', 'c8e4986');  /* CF7 form ID or hash from shortcode */
}

/**
 * Contact Form 7: show success and error messages in Japanese.
 */
function mytheme_cf7_japanese_messages($message, $status) {
  $messages = array(
    'mail_sent_ok'      => 'お問い合わせありがとうございます。内容を確認のうえ、ご連絡いたします。',
    'mail_sent_ng'      => '送信に失敗しました。しばらくしてから再度お試しください。',
    'validation_error'  => '入力内容に誤りがあります。ご確認のうえ、再度お試しください。',
    'spam'              => '送信に失敗しました。しばらくしてから再度お試しください。',
    'accept_terms'      => '送信するには、利用規約に同意してください。',
  );
  if (isset($messages[$status])) {
    return $messages[$status];
  }
  return $message;
}
add_filter('wpcf7_display_message', 'mytheme_cf7_japanese_messages', 10, 2);

/* ======================================================
   News CMS: /news (list) and /news/:slug (single)
====================================================== */

/**
 * Add rewrite rule so single posts are served at /news/post-slug.
 */
function mytheme_news_rewrite_rules()
{
  add_rewrite_rule(
    '^news/([^/]+)/?$',
    'index.php?name=$matches[1]',
    'top'
  );
}
add_action('init', 'mytheme_news_rewrite_rules');

/**
 * Make post permalinks use /news/slug when a "Posts page" is set.
 */
function mytheme_news_post_link($permalink, $post, $leavename = false)
{
  if ($post->post_type !== 'post') {
    return $permalink;
  }
  $posts_page_id = (int) get_option('page_for_posts');
  if (!$posts_page_id) {
    return $permalink;
  }
  $news_url = get_permalink($posts_page_id);
  if (!$news_url) {
    return $permalink;
  }
  $news_url = rtrim($news_url, '/');
  $slug = $leavename ? '%postname%' : $post->post_name;
  return $news_url . '/' . $slug . '/';
}
add_filter('post_link', 'mytheme_news_post_link', 10, 3);

/**
 * Flush rewrite rules when theme is activated.
 */
function mytheme_flush_rewrite_on_activation()
{
  mytheme_news_rewrite_rules();
  flush_rewrite_rules();
}
add_action('after_switch_theme', 'mytheme_flush_rewrite_on_activation');


/* ======================================================
   Support: Maintenance cases CMS (Custom Post Type)
====================================================== */

function mytheme_register_maintenance_case_cpt()
{
  register_post_type('maintenance_case', array(
    'labels'             => array(
      'name'               => __('メンテナンス事例', 'mytheme'),
      'singular_name'      => __('メンテナンス事例', 'mytheme'),
      'add_new'            => __('新規追加', 'mytheme'),
      'add_new_item'       => __('メンテナンス事例を追加', 'mytheme'),
      'edit_item'          => __('メンテナンス事例を編集', 'mytheme'),
      'new_item'           => __('新規メンテナンス事例', 'mytheme'),
      'view_item'          => __('メンテナンス事例を表示', 'mytheme'),
      'search_items'       => __('メンテナンス事例を検索', 'mytheme'),
      'not_found'          => __('メンテナンス事例が見つかりません', 'mytheme'),
      'not_found_in_trash' => __('ゴミ箱にメンテナンス事例はありません', 'mytheme'),
    ),
    'public'             => false,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'menu_icon'          => 'dashicons-hammer',
    'menu_position'      => 22,
    'supports'           => array('title', 'editor', 'thumbnail', 'page-attributes'),
    'has_archive'        => false,
    'rewrite'            => false,
  ));
}
add_action('init', 'mytheme_register_maintenance_case_cpt');

define('MYTHEME_MAINTENANCE_BEFORE_META', '_maintenance_before_image');
define('MYTHEME_MAINTENANCE_AFTER_META', '_maintenance_after_image');

function mytheme_maintenance_case_meta_boxes()
{
  add_meta_box(
    'maintenance_before_image',
    __('Before 画像', 'mytheme'),
    'mytheme_maintenance_before_image_cb',
    'maintenance_case',
    'side',
    'default'
  );
  add_meta_box(
    'maintenance_after_image',
    __('After 画像', 'mytheme'),
    'mytheme_maintenance_after_image_cb',
    'maintenance_case',
    'side',
    'default'
  );
}
add_action('add_meta_boxes', 'mytheme_maintenance_case_meta_boxes');

function mytheme_maintenance_before_image_cb($post)
{
  wp_nonce_field('maintenance_images_nonce', 'maintenance_images_nonce');
  $before_id = (int) get_post_meta($post->ID, MYTHEME_MAINTENANCE_BEFORE_META, true);
?>
  <p>
    <input type="hidden" id="maintenance_before_image_id" name="maintenance_before_image_id" value="<?php echo esc_attr($before_id); ?>" />
    <button type="button" class="button" id="maintenance_before_image_select"><?php esc_html_e('画像を選択', 'mytheme'); ?></button>
    <button type="button" class="button" id="maintenance_before_image_remove" <?php echo $before_id ? '' : ' style="display:none"'; ?>><?php esc_html_e('削除', 'mytheme'); ?></button>
  </p>
  <div id="maintenance_before_image_preview">
    <?php if ($before_id) : ?>
      <?php echo wp_get_attachment_image($before_id, 'medium'); ?>
    <?php endif; ?>
  </div>
<?php
}

function mytheme_maintenance_after_image_cb($post)
{
  $after_id = (int) get_post_meta($post->ID, MYTHEME_MAINTENANCE_AFTER_META, true);
?>
  <p>
    <input type="hidden" id="maintenance_after_image_id" name="maintenance_after_image_id" value="<?php echo esc_attr($after_id); ?>" />
    <button type="button" class="button" id="maintenance_after_image_select"><?php esc_html_e('画像を選択', 'mytheme'); ?></button>
    <button type="button" class="button" id="maintenance_after_image_remove" <?php echo $after_id ? '' : ' style="display:none"'; ?>><?php esc_html_e('削除', 'mytheme'); ?></button>
  </p>
  <div id="maintenance_after_image_preview">
    <?php if ($after_id) : ?>
      <?php echo wp_get_attachment_image($after_id, 'medium'); ?>
    <?php endif; ?>
  </div>
<?php
}

function mytheme_maintenance_case_save_meta($post_id)
{
  if (!isset($_POST['maintenance_images_nonce']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['maintenance_images_nonce'])), 'maintenance_images_nonce')) {
    return;
  }
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }
  if (!current_user_can('edit_post', $post_id)) {
    return;
  }
  if (isset($_POST['maintenance_before_image_id'])) {
    update_post_meta($post_id, MYTHEME_MAINTENANCE_BEFORE_META, absint($_POST['maintenance_before_image_id']));
  }
  if (isset($_POST['maintenance_after_image_id'])) {
    update_post_meta($post_id, MYTHEME_MAINTENANCE_AFTER_META, absint($_POST['maintenance_after_image_id']));
  }
}
add_action('save_post_maintenance_case', 'mytheme_maintenance_case_save_meta');

function mytheme_maintenance_case_enqueue_admin_media($hook)
{
  if ($hook !== 'post.php' && $hook !== 'post-new.php') {
    return;
  }
  global $post;
  if (!$post || $post->post_type !== 'maintenance_case') {
    return;
  }
  wp_enqueue_media();
  $script = "jQuery(function($){
    function setupMaintenanceImage(selectId, inputId, previewId, removeId, frameTitle){
      var frame;
      $('#'+selectId).on('click', function(e){
        e.preventDefault();
        if (frame) frame.open();
        else {
          frame = wp.media({ title: frameTitle, library: { type: 'image' }, multiple: false });
          frame.on('select', function(){
            var att = frame.state().get('selection').first().toJSON();
            var url = (att.sizes && att.sizes.medium) ? att.sizes.medium.url : att.url;
            $('#'+inputId).val(att.id);
            $('#'+previewId).html('<img src=\"'+url+'\" />');
            $('#'+removeId).show();
          });
        }
        frame.open();
      });
      $('#'+removeId).on('click', function(){
        $('#'+inputId).val('');
        $('#'+previewId).empty();
        $(this).hide();
      });
    }
    setupMaintenanceImage('maintenance_before_image_select','maintenance_before_image_id','maintenance_before_image_preview','maintenance_before_image_remove','Before 画像を選択');
    setupMaintenanceImage('maintenance_after_image_select','maintenance_after_image_id','maintenance_after_image_preview','maintenance_after_image_remove','After 画像を選択');
  });";
  wp_add_inline_script('jquery', $script);
}
add_action('admin_enqueue_scripts', 'mytheme_maintenance_case_enqueue_admin_media');

/**
 * Add "Duplicate" row action to maintenance_case list.
 */
function mytheme_maintenance_case_row_actions($actions, $post)
{
  if ($post->post_type !== 'maintenance_case' || $post->post_status === 'trash') {
    return $actions;
  }
  if (!current_user_can('edit_post', $post->ID)) {
    return $actions;
  }
  $url = wp_nonce_url(
    admin_url('admin.php?action=mytheme_duplicate_maintenance_case&post=' . $post->ID),
    'mytheme_duplicate_maintenance_case_' . $post->ID
  );
  $actions['mytheme_duplicate'] = '<a href="' . esc_url($url) . '">' . __('複製', 'mytheme') . '</a>';
  return $actions;
}
add_filter('post_row_actions', 'mytheme_maintenance_case_row_actions', 10, 2);

/**
 * Handle duplicate maintenance case: create a draft copy and redirect to edit it.
 */
function mytheme_handle_duplicate_maintenance_case()
{
  if (!isset($_GET['action']) || $_GET['action'] !== 'mytheme_duplicate_maintenance_case') {
    return;
  }
  $post_id = isset($_GET['post']) ? absint($_GET['post']) : 0;
  if (!$post_id || !isset($_GET['_wpnonce'])) {
    return;
  }
  if (!wp_verify_nonce(sanitize_text_field(wp_unslash($_GET['_wpnonce'])), 'mytheme_duplicate_maintenance_case_' . $post_id)) {
    wp_die(esc_html__('Invalid security check.', 'mytheme'), 403);
  }
  $post = get_post($post_id);
  if (!$post || $post->post_type !== 'maintenance_case') {
    wp_die(esc_html__('メンテナンス事例が見つかりません。', 'mytheme'), 404);
  }
  if (!current_user_can('edit_post', $post_id)) {
    wp_die(esc_html__('You do not have permission to duplicate this item.', 'mytheme'), 403);
  }

  $new_title = $post->post_title . ' - コピー';
  $new_post = array(
    'post_type'   => 'maintenance_case',
    'post_status' => 'draft',
    'post_title'  => $new_title,
    'post_name'   => '',
    'post_content' => $post->post_content,
  );
  $new_id = wp_insert_post($new_post);
  if (is_wp_error($new_id)) {
    wp_die(esc_html($new_id->get_error_message()), 500);
  }

  foreach (array(MYTHEME_MAINTENANCE_BEFORE_META, MYTHEME_MAINTENANCE_AFTER_META) as $key) {
    $val = get_post_meta($post_id, $key, true);
    if ($val !== '') {
      update_post_meta($new_id, $key, $val);
    }
  }

  $thumb_id = get_post_thumbnail_id($post_id);
  if ($thumb_id) {
    set_post_thumbnail($new_id, $thumb_id);
  }

  wp_safe_redirect(admin_url('post.php?action=edit&post=' . $new_id));
  exit;
}
add_action('admin_init', 'mytheme_handle_duplicate_maintenance_case');


/* ======================================================
   Product page Movie section CPT (稼働中動画)
====================================================== */
function mytheme_register_product_movie_cpt()
{
  register_post_type('product_movie', array(
    'labels'             => array(
      'name'               => __('稼働中動画', 'mytheme'),
      'singular_name'      => __('動画', 'mytheme'),
      'add_new'            => __('新規追加', 'mytheme'),
      'add_new_item'       => __('動画を追加', 'mytheme'),
      'edit_item'          => __('動画を編集', 'mytheme'),
      'new_item'           => __('新規動画', 'mytheme'),
      'view_item'          => __('動画を表示', 'mytheme'),
      'search_items'       => __('動画を検索', 'mytheme'),
      'not_found'          => __('動画が見つかりません', 'mytheme'),
      'not_found_in_trash' => __('ゴミ箱に動画はありません', 'mytheme'),
    ),
    'public'             => false,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'menu_icon'          => 'dashicons-video-alt3',
    'menu_position'      => 24,
    'supports'           => array('title', 'thumbnail', 'page-attributes'),
    'has_archive'        => false,
    'rewrite'            => false,
  ));
}
add_action('init', 'mytheme_register_product_movie_cpt');

define('MYTHEME_PRODUCT_MOVIE_VIDEO_URL_META', '_product_movie_video_url');
define('MYTHEME_PRODUCT_MOVIE_THUMBNAIL_META', '_product_movie_thumbnail_id');

function mytheme_product_movie_meta_boxes()
{
  add_meta_box(
    'product_movie_thumbnail',
    __('サムネイル画像', 'mytheme'),
    'mytheme_product_movie_thumbnail_cb',
    'product_movie',
    'normal'
  );
  add_meta_box(
    'product_movie_video_url',
    __('動画URL', 'mytheme'),
    'mytheme_product_movie_video_url_cb',
    'product_movie',
    'normal'
  );
}
add_action('add_meta_boxes', 'mytheme_product_movie_meta_boxes');

function mytheme_product_movie_thumbnail_cb($post)
{
  wp_nonce_field('product_movie_meta_nonce', 'product_movie_meta_nonce');
  $thumb_id = (int) get_post_meta($post->ID, MYTHEME_PRODUCT_MOVIE_THUMBNAIL_META, true);
?>
  <p class="description"><?php esc_html_e('製品ページの動画カードに表示する画像。未設定の場合はアイキャッチ画像を使用します。', 'mytheme'); ?></p>
  <p>
    <input type="hidden" id="product_movie_thumbnail_id" name="product_movie_thumbnail_id" value="<?php echo esc_attr($thumb_id); ?>" />
    <button type="button" class="button" id="product_movie_thumbnail_select"><?php esc_html_e('画像を選択', 'mytheme'); ?></button>
    <button type="button" class="button" id="product_movie_thumbnail_remove" <?php echo $thumb_id ? '' : ' style="display:none"'; ?>><?php esc_html_e('削除', 'mytheme'); ?></button>
  </p>
  <div id="product_movie_thumbnail_preview">
    <?php if ($thumb_id) : ?>
      <?php echo wp_get_attachment_image($thumb_id, 'medium'); ?>
    <?php endif; ?>
  </div>
<?php
}

function mytheme_product_movie_video_url_cb($post)
{
  $val = get_post_meta($post->ID, MYTHEME_PRODUCT_MOVIE_VIDEO_URL_META, true);
  echo '<p class="description">' . esc_html__('YouTubeのURLを入力。製品ページの「当社製品の稼働中動画」でカードをクリックするとモーダルで再生されます。', 'mytheme') . '</p>';
  echo '<p><input type="url" name="product_movie_video_url" value="' . esc_attr($val) . '" class="widefat" placeholder="https://www.youtube.com/watch?v=xxxx" /></p>';
}

function mytheme_product_movie_save_meta($post_id)
{
  if (!isset($_POST['product_movie_meta_nonce']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['product_movie_meta_nonce'])), 'product_movie_meta_nonce')) {
    return;
  }
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }
  if (!current_user_can('edit_post', $post_id)) {
    return;
  }
  if (isset($_POST['product_movie_thumbnail_id'])) {
    update_post_meta($post_id, MYTHEME_PRODUCT_MOVIE_THUMBNAIL_META, absint($_POST['product_movie_thumbnail_id']));
  }
  if (isset($_POST['product_movie_video_url'])) {
    $url = esc_url_raw(wp_unslash($_POST['product_movie_video_url']));
    update_post_meta($post_id, MYTHEME_PRODUCT_MOVIE_VIDEO_URL_META, $url);
  }
}
add_action('save_post_product_movie', 'mytheme_product_movie_save_meta');

function mytheme_product_movie_enqueue_admin_media($hook)
{
  if ($hook !== 'post.php' && $hook !== 'post-new.php') {
    return;
  }
  global $post;
  if (!$post || $post->post_type !== 'product_movie') {
    return;
  }
  wp_enqueue_media();
  wp_add_inline_script('jquery', "
    jQuery(function($){
      var frame;
      $('#product_movie_thumbnail_select').on('click', function(e){
        e.preventDefault();
        if (frame) frame.open();
        else {
          frame = wp.media({ title: 'サムネイルを選択', library: { type: 'image' }, multiple: false });
          frame.on('select', function(){
            var att = frame.state().get('selection').first().toJSON();
            $('#product_movie_thumbnail_id').val(att.id);
            var url = (att.sizes && att.sizes.medium) ? att.sizes.medium.url : att.url;
            $('#product_movie_thumbnail_preview').html('<img src=\"'+url+'\" />');
            $('#product_movie_thumbnail_remove').show();
          });
        }
        frame.open();
      });
      $('#product_movie_thumbnail_remove').on('click', function(){
        $('#product_movie_thumbnail_id').val('');
        $('#product_movie_thumbnail_preview').empty();
        $(this).hide();
      });
    });
  ");
}
add_action('admin_enqueue_scripts', 'mytheme_product_movie_enqueue_admin_media');

/**
 * Add "Duplicate" row action to product_movie list.
 */
function mytheme_product_movie_row_actions($actions, $post)
{
  if ($post->post_type !== 'product_movie' || $post->post_status === 'trash') {
    return $actions;
  }
  if (!current_user_can('edit_post', $post->ID)) {
    return $actions;
  }
  $url = wp_nonce_url(
    admin_url('admin.php?action=mytheme_duplicate_product_movie&post=' . $post->ID),
    'mytheme_duplicate_product_movie_' . $post->ID
  );
  $actions['mytheme_duplicate'] = '<a href="' . esc_url($url) . '">' . __('複製', 'mytheme') . '</a>';
  return $actions;
}
add_filter('post_row_actions', 'mytheme_product_movie_row_actions', 10, 2);

/**
 * Handle duplicate product movie: create a draft copy and redirect to edit it.
 */
function mytheme_handle_duplicate_product_movie()
{
  if (!isset($_GET['action']) || $_GET['action'] !== 'mytheme_duplicate_product_movie') {
    return;
  }
  $post_id = isset($_GET['post']) ? absint($_GET['post']) : 0;
  if (!$post_id || !isset($_GET['_wpnonce'])) {
    return;
  }
  if (!wp_verify_nonce(sanitize_text_field(wp_unslash($_GET['_wpnonce'])), 'mytheme_duplicate_product_movie_' . $post_id)) {
    wp_die(esc_html__('Invalid security check.', 'mytheme'), 403);
  }
  $post = get_post($post_id);
  if (!$post || $post->post_type !== 'product_movie') {
    wp_die(esc_html__('動画が見つかりません。', 'mytheme'), 404);
  }
  if (!current_user_can('edit_post', $post_id)) {
    wp_die(esc_html__('You do not have permission to duplicate this item.', 'mytheme'), 403);
  }

  $new_title = $post->post_title . ' - コピー';
  $new_post = array(
    'post_type'   => 'product_movie',
    'post_status' => 'draft',
    'post_title'  => $new_title,
    'post_name'   => '',
  );
  $new_id = wp_insert_post($new_post);
  if (is_wp_error($new_id)) {
    wp_die(esc_html($new_id->get_error_message()), 500);
  }

  foreach (array(MYTHEME_PRODUCT_MOVIE_VIDEO_URL_META, MYTHEME_PRODUCT_MOVIE_THUMBNAIL_META) as $key) {
    $val = get_post_meta($post_id, $key, true);
    if ($val !== '') {
      update_post_meta($new_id, $key, $val);
    }
  }

  $thumb_id = get_post_thumbnail_id($post_id);
  if ($thumb_id) {
    set_post_thumbnail($new_id, $thumb_id);
  }

  wp_safe_redirect(admin_url('post.php?action=edit&post=' . $new_id));
  exit;
}
add_action('admin_init', 'mytheme_handle_duplicate_product_movie');

/**
 * Get YouTube embed URL from watch or youtu.be URL.
 *
 * @param string $url YouTube watch or youtu.be URL.
 * @return string Embed URL or empty if not recognized.
 */
function mytheme_youtube_embed_url($url)
{
  if (!is_string($url) || trim($url) === '') {
    return '';
  }
  $url = trim($url);
  $id = '';
  if (preg_match('#(?:youtube\.com/watch\?v=|youtu\.be/|youtube\.com/embed/)([a-zA-Z0-9_-]+)#', $url, $m)) {
    $id = $m[1];
  }
  if ($id === '') {
    return '';
  }
  return 'https://www.youtube.com/embed/' . $id . '?autoplay=1';
}

/* ======================================================
   Product section CMS: /product/?id=existing|order|used
====================================================== */

function mytheme_register_site_product_cpt()
{
  register_post_type('site_product', array(
    'labels'             => array(
      'name'               => __('製品一覧', 'mytheme'),
      'singular_name'      => __('製品', 'mytheme'),
      'add_new'            => __('新規追加', 'mytheme'),
      'add_new_item'       => __('製品を追加', 'mytheme'),
      'edit_item'          => __('製品を編集', 'mytheme'),
      'new_item'           => __('新規製品', 'mytheme'),
      'view_item'          => __('製品を表示', 'mytheme'),
      'search_items'       => __('製品を検索', 'mytheme'),
      'not_found'          => __('製品が見つかりません', 'mytheme'),
      'not_found_in_trash' => __('ゴミ箱に製品はありません', 'mytheme'),
    ),
    'public'             => false,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'menu_icon'          => 'dashicons-cart',
    'menu_position'      => 23,
    'supports'           => array('title', 'thumbnail', 'page-attributes'),
    'has_archive'        => false,
    'rewrite'            => false,
  ));
}
add_action('init', 'mytheme_register_site_product_cpt');

function mytheme_register_product_list_type_taxonomy()
{
  register_taxonomy('product_list_type', 'site_product', array(
    'labels'            => array(
      'name'          => __('リスト種別', 'mytheme'),
      'singular_name' => __('リスト種別', 'mytheme'),
      'search_items'  => __('検索', 'mytheme'),
      'all_items'     => __('すべてのリスト種別', 'mytheme'),
      'edit_item'     => __('編集', 'mytheme'),
      'add_new_item'  => __('新規追加', 'mytheme'),
    ),
    'hierarchical'      => true,
    'show_ui'           => true,
    'show_admin_column' => true,
    'rewrite'           => false,
  ));
}
add_action('init', 'mytheme_register_product_list_type_taxonomy');

function mytheme_product_list_type_default_terms()
{
  if (get_option('mytheme_product_list_type_terms') === 'done') {
    return;
  }
  $terms = array(
    'existing' => '既製品・セミオーダー',
    'order'    => 'オーダー',
    'used'     => '中古品',
  );
  foreach ($terms as $slug => $name) {
    if (!term_exists($slug, 'product_list_type')) {
      wp_insert_term($name, 'product_list_type', array('slug' => $slug));
    }
  }
  update_option('mytheme_product_list_type_terms', 'done');
}
add_action('init', 'mytheme_product_list_type_default_terms', 20);

define('MYTHEME_PRODUCT_CATEGORY_META', '_product_category');
define('MYTHEME_PRODUCT_LOCATION_META', '_product_location');
define('MYTHEME_PRODUCT_SPECS_META', '_product_specs');
define('MYTHEME_PRODUCT_GALLERY_META', '_product_gallery');

function mytheme_site_product_meta_boxes()
{
  add_meta_box('site_product_category', __('カテゴリ（緑バッジ）', 'mytheme'), 'mytheme_site_product_category_cb', 'site_product', 'normal');
  add_meta_box('site_product_location', __('所在地・用途（スライドカード）', 'mytheme'), 'mytheme_site_product_location_cb', 'site_product', 'normal');
  add_meta_box('site_product_specs', __('仕様テーブル', 'mytheme'), 'mytheme_site_product_specs_cb', 'site_product', 'normal');
  add_meta_box('site_product_gallery', __('ギャラリー（サムネイル）', 'mytheme'), 'mytheme_site_product_gallery_cb', 'site_product', 'side');
}
add_action('add_meta_boxes', 'mytheme_site_product_meta_boxes');

function mytheme_site_product_category_cb($post)
{
  wp_nonce_field('site_product_meta_nonce', 'site_product_meta_nonce');
  $val = get_post_meta($post->ID, MYTHEME_PRODUCT_CATEGORY_META, true);
  echo '<p><input type="text" name="product_category" value="' . esc_attr($val) . '" class="widefat" placeholder="例: ダンボールスリッター機" /></p>';
}

function mytheme_site_product_location_cb($post)
{
  $val = get_post_meta($post->ID, MYTHEME_PRODUCT_LOCATION_META, true);
  echo '<p class="description">' . esc_html__('トップページのスライドカードに表示されます。', 'mytheme') . '</p>';
  echo '<p><input type="text" name="product_location" value="' . esc_attr($val) . '" class="widefat" placeholder="例: 大阪府｜ネット通販生産" /></p>';
}

function mytheme_site_product_specs_cb($post)
{
  $val = get_post_meta($post->ID, MYTHEME_PRODUCT_SPECS_META, true);
  $rows = is_string($val) ? json_decode($val, true) : array();
  if (!is_array($rows)) {
    $rows = array();
  }
  if (empty($rows)) {
    $rows = array(array('label' => '', 'value' => ''));
  }
  echo '<p class="description">' . esc_html__('ラベルと値を入力し、「行を追加」で行を増やせます。', 'mytheme') . '</p>';
  echo '<div id="product_specs_rows">';
  foreach ($rows as $i => $row) {
    $label = isset($row['label']) ? $row['label'] : '';
    $value = isset($row['value']) ? $row['value'] : '';
    echo '<div class="product-spec-row" style="display:flex;gap:8px;align-items:flex-start;margin-bottom:10px;">';
    echo '<input type="text" name="product_specs_label[]" value="' . esc_attr($label) . '" class="regular-text" placeholder="' . esc_attr__('ラベル', 'mytheme') . '" style="flex:0 0 140px;" />';
    echo '<textarea name="product_specs_value[]" class="large-text" rows="2" placeholder="' . esc_attr__('値', 'mytheme') . '" style="flex:1;">' . esc_textarea($value) . '</textarea>';
    echo '<button type="button" class="button product-spec-remove" aria-label="' . esc_attr__('この行を削除', 'mytheme') . '">' . esc_html__('削除', 'mytheme') . '</button>';
    echo '</div>';
  }
  echo '</div>';
  echo '<p><button type="button" class="button" id="product_specs_add_row">' . esc_html__('行を追加', 'mytheme') . '</button></p>';
}

function mytheme_site_product_gallery_cb($post)
{
  $val = get_post_meta($post->ID, MYTHEME_PRODUCT_GALLERY_META, true);
  $ids = array_filter(array_map('absint', explode(',', $val)));
  echo '<p class="description">' . esc_html__('メイン画像は「アイキャッチ画像」。ここで追加した画像がサムネイル一覧に表示されます。', 'mytheme') . '</p>';
  echo '<input type="hidden" id="product_gallery_ids" name="product_gallery_ids" value="' . esc_attr(implode(',', $ids)) . '" />';
  echo '<button type="button" class="button" id="product_gallery_select">' . esc_html__('画像を選択', 'mytheme') . '</button>';
  echo '<button type="button" class="button" id="product_gallery_clear" style="' . (count($ids) ? '' : 'display:none') . '">' . esc_html__('クリア', 'mytheme') . '</button>';
  echo '<div id="product_gallery_preview" class="product-gallery-preview" style="margin-top:8px;display:flex;flex-wrap:wrap;gap:4px;">';
  foreach ($ids as $id) {
    echo wp_get_attachment_image($id, array(60, 60));
  }
  echo '</div>';
}

function mytheme_site_product_save_meta($post_id)
{
  if (!isset($_POST['site_product_meta_nonce']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['site_product_meta_nonce'])), 'site_product_meta_nonce')) {
    return;
  }
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }
  if (!current_user_can('edit_post', $post_id)) {
    return;
  }
  if (isset($_POST['product_category'])) {
    update_post_meta($post_id, MYTHEME_PRODUCT_CATEGORY_META, sanitize_text_field(wp_unslash($_POST['product_category'])));
  }
  if (isset($_POST['product_location'])) {
    update_post_meta($post_id, MYTHEME_PRODUCT_LOCATION_META, sanitize_text_field(wp_unslash($_POST['product_location'])));
  }
  if (isset($_POST['product_specs_label']) && is_array($_POST['product_specs_label'])) {
    $labels = array_map('sanitize_text_field', array_map('wp_unslash', $_POST['product_specs_label']));
    $values = isset($_POST['product_specs_value']) && is_array($_POST['product_specs_value'])
      ? array_map(function ($v) {
        return sanitize_textarea_field(wp_unslash($v));
      }, $_POST['product_specs_value'])
      : array();
    $rows = array();
    $max = max(count($labels), count($values));
    for ($i = 0; $i < $max; $i++) {
      $rows[] = array(
        'label' => isset($labels[$i]) ? $labels[$i] : '',
        'value' => isset($values[$i]) ? $values[$i] : '',
      );
    }
    update_post_meta($post_id, MYTHEME_PRODUCT_SPECS_META, wp_json_encode($rows, JSON_UNESCAPED_UNICODE));
  }
  if (isset($_POST['product_gallery_ids'])) {
    $ids = array_filter(array_map('absint', explode(',', sanitize_text_field(wp_unslash($_POST['product_gallery_ids'])))));
    update_post_meta($post_id, MYTHEME_PRODUCT_GALLERY_META, implode(',', $ids));
  }
}
add_action('save_post_site_product', 'mytheme_site_product_save_meta');

function mytheme_site_product_enqueue_admin_media($hook)
{
  if ($hook !== 'post.php' && $hook !== 'post-new.php') {
    return;
  }
  global $post;
  if (!$post || $post->post_type !== 'site_product') {
    return;
  }
  wp_enqueue_media();
  wp_add_inline_script('jquery', "
    jQuery(function($){
      var frame;
      $('#product_gallery_select').on('click', function(e){
        e.preventDefault();
        frame = wp.media({ title: 'ギャラリーを選択', library: { type: 'image' }, multiple: true });
        frame.on('select', function(){
          var cur = ($('#product_gallery_ids').val() || '').split(',').filter(Boolean);
          var sel = frame.state().get('selection');
          sel.forEach(function(att){
            var j = att.toJSON();
            cur.push(String(j.id));
            var url = (j.sizes && j.sizes.medium) ? j.sizes.medium.url : j.url;
            $('#product_gallery_preview').append('<img src=\"'+url+'\" style=\"width:60px;height:60px;object-fit:cover;\" />');
          });
          $('#product_gallery_ids').val(cur.join(','));
          $('#product_gallery_clear').show();
        });
        frame.open();
      });
      $('#product_gallery_clear').on('click', function(){
        $('#product_gallery_ids').val('');
        $('#product_gallery_preview').empty();
        $(this).hide();
      });
      $('#product_specs_add_row').on('click', function(){
        var row = '<div class=\"product-spec-row\" style=\"display:flex;gap:8px;align-items:flex-start;margin-bottom:10px;\">' +
          '<input type=\"text\" name=\"product_specs_label[]\" value=\"\" class=\"regular-text\" placeholder=\"ラベル\" style=\"flex:0 0 140px;\" />' +
          '<textarea name=\"product_specs_value[]\" class=\"large-text\" rows=\"2\" placeholder=\"値\" style=\"flex:1;\"></textarea>' +
          '<button type=\"button\" class=\"button product-spec-remove\" aria-label=\"この行を削除\">削除</button>' +
          '</div>';
        $('#product_specs_rows').append(row);
      });
      $(document).on('click', '.product-spec-remove', function(){
        $(this).closest('.product-spec-row').remove();
      });
    });
  ");
}
add_action('admin_enqueue_scripts', 'mytheme_site_product_enqueue_admin_media');

/**
 * Add "Duplicate" row action to site_product list.
 */
function mytheme_site_product_row_actions($actions, $post)
{
  if ($post->post_type !== 'site_product' || $post->post_status === 'trash') {
    return $actions;
  }
  if (!current_user_can('edit_post', $post->ID)) {
    return $actions;
  }
  $url = wp_nonce_url(
    admin_url('admin.php?action=mytheme_duplicate_product&post=' . $post->ID),
    'mytheme_duplicate_product_' . $post->ID
  );
  $actions['mytheme_duplicate'] = '<a href="' . esc_url($url) . '">' . __('複製', 'mytheme') . '</a>';
  return $actions;
}
add_filter('post_row_actions', 'mytheme_site_product_row_actions', 10, 2);

/**
 * Handle duplicate product: create a draft copy and redirect to edit it.
 */
function mytheme_handle_duplicate_product()
{
  if (!isset($_GET['action']) || $_GET['action'] !== 'mytheme_duplicate_product') {
    return;
  }
  $post_id = isset($_GET['post']) ? absint($_GET['post']) : 0;
  if (!$post_id || !isset($_GET['_wpnonce'])) {
    return;
  }
  if (!wp_verify_nonce(sanitize_text_field(wp_unslash($_GET['_wpnonce'])), 'mytheme_duplicate_product_' . $post_id)) {
    wp_die(esc_html__('Invalid security check.', 'mytheme'), 403);
  }
  $post = get_post($post_id);
  if (!$post || $post->post_type !== 'site_product') {
    wp_die(esc_html__('Product not found.', 'mytheme'), 404);
  }
  if (!current_user_can('edit_post', $post_id)) {
    wp_die(esc_html__('You do not have permission to duplicate this product.', 'mytheme'), 403);
  }

  $new_title = $post->post_title . ' - コピー';
  $new_post = array(
    'post_type'   => 'site_product',
    'post_status' => 'draft',
    'post_title'  => $new_title,
    'post_name'   => '',
  );
  $new_id = wp_insert_post($new_post);
  if (is_wp_error($new_id)) {
    wp_die(esc_html($new_id->get_error_message()), 500);
  }

  $meta_keys = array(
    MYTHEME_PRODUCT_CATEGORY_META,
    MYTHEME_PRODUCT_LOCATION_META,
    MYTHEME_PRODUCT_SPECS_META,
    MYTHEME_PRODUCT_GALLERY_META,
  );
  foreach ($meta_keys as $key) {
    $val = get_post_meta($post_id, $key, true);
    if ($val !== '') {
      update_post_meta($new_id, $key, $val);
    }
  }

  $thumb_id = get_post_thumbnail_id($post_id);
  if ($thumb_id) {
    set_post_thumbnail($new_id, $thumb_id);
  }

  $terms = wp_get_object_terms($post_id, 'product_list_type');
  if (!is_wp_error($terms) && !empty($terms)) {
    $term_ids = array_map(function ($t) {
      return (int) $t->term_id;
    }, $terms);
    wp_set_object_terms($new_id, $term_ids, 'product_list_type');
  }

  wp_safe_redirect(admin_url('post.php?action=edit&post=' . $new_id));
  exit;
}
add_action('admin_init', 'mytheme_handle_duplicate_product');

/**
 * Get latest N site_product posts by product_list_type term slug for carousel.
 *
 * @param string $term_slug Taxonomy term slug (e.g. 'existing', 'order', 'used').
 * @param int    $limit     Max number of posts. Default 6.
 * @return array List of article arrays with keys: image, title, location, tag.
 */
function mytheme_get_product_carousel_articles($term_slug, $limit = 6)
{
  $product_placeholder = function_exists('mytheme_img_asset') ? mytheme_img_asset('top/prod-1') : '';
  $query = new WP_Query(array(
    'post_type'      => 'site_product',
    'post_status'    => 'publish',
    'posts_per_page' => $limit,
    'orderby'        => 'menu_order date',
    'order'          => 'ASC',
    'tax_query'      => array(
      array(
        'taxonomy' => 'product_list_type',
        'field'    => 'slug',
        'terms'    => $term_slug,
      ),
    ),
  ));
  $articles = array();
  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();
      $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
      if (!$img_url) {
        $img_url = $product_placeholder;
      }
      $articles[] = array(
        'image'    => $img_url,
        'title'    => get_the_title(),
        'location' => get_post_meta(get_the_ID(), MYTHEME_PRODUCT_LOCATION_META, true) ?: '',
        'tag'      => get_post_meta(get_the_ID(), MYTHEME_PRODUCT_CATEGORY_META, true) ?: '',
      );
    }
    wp_reset_postdata();
  }
  return $articles;
}

/* ======================================================
   Enqueue Assets (Tailwind compiled CSS)
====================================================== */
function mytheme_enqueue_assets()
{
  $theme_version = wp_get_theme()->get('Version');

  /**
   * Default WordPress style.css (theme info header only)
   */
  wp_enqueue_style(
    'mytheme-base',
    get_stylesheet_uri(),
    array(),
    $theme_version
  );

  /**
   * Tailwind compiled CSS (includes all custom styles and page-specific CSS)
   * This file is generated by:
   * npm run dev / npm run build
   */
  $tailwind_path = get_template_directory() . '/assets/css/style.css';

  wp_enqueue_style(
    'mytheme-tailwind',
    get_template_directory_uri() . '/assets/css/style.css',
    array('mytheme-base'),
    file_exists($tailwind_path) ? filemtime($tailwind_path) : $theme_version
  );

  wp_add_inline_style('mytheme-tailwind', 'html{scroll-behavior:smooth}');

  // Block editor styles on front so news content (blocks, colors) displays correctly.
  if (is_singular('post')) {
    wp_enqueue_style('wp-block-library');
    wp_enqueue_style('wp-block-library-theme');
    wp_enqueue_style('global-styles');
  }

  /**
   * Font override: loads after Tailwind so Noto Sans CJK JP wins over body font in style.css / Block/global-styles.
   */
  $font_override_path = get_template_directory() . '/assets/css/font-override.css';
  wp_enqueue_style(
    'mytheme-font-override',
    get_template_directory_uri() . '/assets/css/font-override.css',
    array('mytheme-tailwind'),
    file_exists($font_override_path) ? filemtime($font_override_path) : $theme_version
  );

  // Last possible CSS so Ubuntu (Latin) + Noto (CJK) stack wins, no matter what style.css or WordPress injects.
  add_action('wp_footer', function () {
    echo '<style id="mytheme-font-force">html,body{font-family:"Ubuntu","Noto Sans CJK JP","Hiragino Kaku Gothic ProN","Yu Gothic","Meiryo",sans-serif!important}</style>';
  }, 9999);

  /**
   * Main JS (bundled)
   */
  $bundle_js_path = get_template_directory() . '/assets/js/bundle.js';
  $main_js_path = get_template_directory() . '/assets/js/main.js';
  $script_uri = file_exists($bundle_js_path)
    ? get_template_directory_uri() . '/assets/js/bundle.js'
    : get_template_directory_uri() . '/assets/js/main.js';
  $script_ver = file_exists($bundle_js_path)
    ? filemtime($bundle_js_path)
    : (file_exists($main_js_path) ? filemtime($main_js_path) : $theme_version);

  wp_enqueue_script(
    'mytheme-main',
    $script_uri,
    array(),
    $script_ver,
    true
  );

  wp_add_inline_script('mytheme-main', "
    (function(){
      function smoothScrollToId(id) {
        if (!id) return;
        var el = document.getElementById(id);
        if (el) el.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
      function handleHashScroll() {
        var hash = window.location.hash;
        if (!hash || hash === '#') return;
        var id = hash.slice(1);
        var el = document.getElementById(id);
        if (!el) return;
        window.scrollTo(0, 0);
        requestAnimationFrame(function(){
          requestAnimationFrame(function(){ smoothScrollToId(id); });
        });
      }
      if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', handleHashScroll);
      } else {
        handleHashScroll();
      }
      document.addEventListener('click', function(e) {
        var a = e.target && e.target.closest && e.target.closest('a[href*=\"#\"]');
        if (!a) return;
        var href = a.getAttribute('href') || '';
        var hashIdx = href.indexOf('#');
        if (hashIdx === -1) return;
        var id = href.slice(hashIdx + 1);
        if (!id) return;
        var target = document.getElementById(id);
        if (!target) return;
        var samePage = (a.pathname === window.location.pathname || (a.pathname === '/' && window.location.pathname === '') || a.getAttribute('href').indexOf('#') === 0);
        if (samePage) {
          e.preventDefault();
          smoothScrollToId(id);
          if (history.replaceState) history.replaceState(null, '', '#' + id);
        }
      });
    })();
  ", 'after');
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');



/* ======================================================
  Helper: Image Asset Loader
====================================================== */
if (!function_exists('mytheme_img_asset')) {
  function mytheme_img_asset(string $path): string
  {
    $path = ltrim($path, '/');
    $dir = get_template_directory() . '/assets/img/';
    $uri = get_template_directory_uri() . '/assets/img/';

    $matches = glob($dir . $path . '.*');

    if ($matches && is_file($matches[0])) {
      return $uri . str_replace($dir, '', $matches[0]);
    }

    return get_template_directory_uri() . '/assets/img/hero-placeholder.svg';
  }
}

/* ======================================================
   Custom Walker for Dropdown Navigation (Tailwind)
====================================================== */
class Mytheme_Walker_Nav_Menu extends Walker_Nav_Menu
{
  /**
   * Start the element output.
   */
  public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    $indent = ($depth) ? str_repeat("\t", $depth) : '';
    $classes = empty($item->classes) ? array() : (array) $item->classes;
    $classes[] = 'menu-item-' . $item->ID;

    // Add relative positioning for parent items
    if (in_array('menu-item-has-children', $classes)) {
      $classes[] = 'relative';
    }

    $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
    $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth);
    $id = $id ? ' id="' . esc_attr($id) . '"' : '';

    $output .= $indent . '<li' . $id . $class_names . '>';

    $atts = array();
    $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
    $atts['target'] = !empty($item->target) ? $item->target : '';
    $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';

    // Base link classes
    $link_classes = array();

    // If item has children, prevent default navigation
    if (in_array('menu-item-has-children', $classes)) {
      $atts['href'] = '#';
      $atts['aria-expanded'] = 'false';
      $atts['data-dropdown-toggle'] = 'true';

      // Parent link classes (desktop and mobile)
      if ($depth === 0) {
        $link_classes[] = 'flex items-center gap-2 lg:justify-between max-lg:w-full max-lg:justify-between';
      }
    } else {
      // Ensure absolute URL for submenu items
      $url = !empty($item->url) ? $item->url : '';
      // If URL is relative (starts with /), prepend home_url
      if (!empty($url) && substr($url, 0, 1) === '/' && substr($url, 0, 2) !== '//') {
        $url = home_url($url);
      }
      $atts['href'] = $url;
    }

    // Add Tailwind classes for submenu items
    if ($depth > 0) {
      $link_classes[] = 'block w-full px-3.5 py-2.5 rounded-lg text-[13px] font-semibold text-[rgba(43,43,43,0.8)] hover:bg-[rgba(110,186,56,0.08)] hover:text-[rgba(43,43,43,1)] transition-all duration-150';
    }

    if (!empty($link_classes)) {
      $atts['class'] = implode(' ', $link_classes);
    }

    $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

    $attributes = '';
    foreach ($atts as $attr => $value) {
      if (!empty($value)) {
        $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
        $attributes .= ' ' . $attr . '="' . $value . '"';
      }
    }

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';

    // Add dash prefix for submenu items
    $title_prefix = ($depth > 0) ? '— ' : '';
    $item_output .= $args->link_before . $title_prefix . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;

    // Add plus icon for items with children
    if (in_array('menu-item-has-children', $classes)) {
      $item_output .= '<span class="dropdown-icon inline-flex items-center justify-center w-[10px] aspect-square" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
  <g id="plus" transform="translate(-1267 -92)">
    <rect id="長方形_657" data-name="長方形 657" width="10" height="2" transform="translate(1267 96)" fill="#6eba38"/>
    <rect id="長方形_657_のコピー" data-name="長方形 657 のコピー" width="2" height="10" transform="translate(1271 92)" fill="#6eba38"/>
  </g>
</svg>
</span>';
    }

    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }

  /**
   * Start the sub-menu output.
   */
  public function start_lvl(&$output, $depth = 0, $args = null)
  {
    $indent = str_repeat("\t", $depth);
    // Tailwind classes for dropdown: hidden by default, positioned absolutely on desktop, static on mobile
    $classes = 'sub-menu hidden lg:absolute lg:top-[calc(100%+12px)] lg:left-0 lg:min-w-[200px] lg:bg-white lg:shadow-[0_10px_30px_rgba(0,0,0,0.15)] lg:border lg:border-black/[0.08] lg:p-2 lg:z-[1000] max-lg:static max-lg:mt-2 max-lg:pl-4 max-lg:border-l-2 max-lg:border-[rgba(110,186,56,0.3)] list-none m-0 p-0';
    $output .= "\n$indent<ul class=\"$classes\">\n";
  }
}

/* ======================================================
   Footer Walker - No Dropdown, Show All Items
====================================================== */
class Mytheme_Walker_Footer_Nav_Menu extends Walker_Nav_Menu
{
  /**
   * Start the element output.
   */
  public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    $indent = ($depth) ? str_repeat("\t", $depth) : '';
    $classes = empty($item->classes) ? array() : (array) $item->classes;
    $classes[] = 'menu-item-' . $item->ID;

    $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
    $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth);
    $id = $id ? ' id="' . esc_attr($id) . '"' : '';

    $output .= $indent . '<li' . $id . $class_names . '>';

    $atts = array();
    $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
    $atts['target'] = !empty($item->target) ? $item->target : '';
    $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';

    // All items are clickable in footer
    $url = !empty($item->url) ? $item->url : '';
    // If URL is relative (starts with /), prepend home_url
    if (!empty($url) && substr($url, 0, 1) === '/' && substr($url, 0, 2) !== '//') {
      $url = home_url($url);
    }
    $atts['href'] = $url;

    $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

    $attributes = '';
    foreach ($atts as $attr => $value) {
      if (!empty($value)) {
        $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
        $attributes .= ' ' . $attr . '="' . $value . '"';
      }
    }

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';

    // Add dash prefix for submenu items
    $title_prefix = ($depth > 0) ? '— ' : '';
    $item_output .= $args->link_before . $title_prefix . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;

    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }

  /**
   * Start the sub-menu output - No special classes, just a simple list
   */
  public function start_lvl(&$output, $depth = 0, $args = null)
  {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"sub-menu\">\n";
  }
}

/* ======================================================
   Widgets
====================================================== */
function mytheme_widgets_init()
{
  register_sidebar(
    array(
      'name'          => __('Sidebar', 'mytheme'),
      'id'            => 'sidebar-1',
      'description'   => __('Add widgets here.', 'mytheme'),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget__title">',
      'after_title'   => '</h2>',
    )
  );
}
add_action('widgets_init', 'mytheme_widgets_init');
