<?php
/*
Plugin Name: Plugin List Block
Description: A Gutenberg block that displays a list of installed plugins.
Version: 1.0
Author: Payam Mahjoub
*/

// جلوگیری از دسترسی مستقیم
if (!defined('ABSPATH')) {
    exit;
}

// بارگذاری فایل‌های CSS و JavaScript
function plb_enqueue_block_assets() {
    wp_enqueue_script(
        'plb-block',
        plugins_url('block.js', __FILE__),
        array('wp-blocks', 'wp-element', 'wp-editor'),
        filemtime(plugin_dir_path(__FILE__) . 'block.js')
    );

    wp_enqueue_style(
        'plb-block-editor',
        plugins_url('editor.css', __FILE__),
        array('wp-edit-blocks'),
        filemtime(plugin_dir_path(__FILE__) . 'editor.css')
    );
}
add_action('enqueue_block_editor_assets', 'plb_enqueue_block_assets');

// ثبت بلاک
function plb_register_block() {
    register_block_type('plugin-list/block', array(
        'editor_script' => 'plb-block',
        'render_callback' => 'plb_render_callback',
    ));
}
add_action('init', 'plb_register_block');

// بازگشت لیست پلاگین‌ها
function plb_render_callback($attributes) {
    if (!current_user_can('activate_plugins')) {
        return '<p>' . __('You do not have permission to view this information.', 'plugin-list') . '</p>';
    }

    $plugins = get_plugins();
    if (empty($plugins)) {
        return '<p>' . __('No plugins installed.', 'plugin-list') . '</p>';
    }

    $output = '<ul>';
    foreach ($plugins as $plugin_path => $plugin) {
        $output .= '<li>' . esc_html($plugin['Name']) . ' - ' . esc_html($plugin['Version']) . '</li>';
    }
    $output .= '</ul>';

    return $output;
}