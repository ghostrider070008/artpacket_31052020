<?php
/*
 * Plugin Name: Мой первый плагин
 * Plugin URI: https://misha.blog/wordpress/plugin
 * Description: Описание супер-плагина
 * Version: 1.1.1
 * Author: Артем Стекольников
 * Author URI: https://misha.blog
 * License: GPLv2 or later
 */


add_action('admin_menu', function(){
    $page_title = 'Добавление товара';
    $menu_title = 'Товары';
    $capability = 'manage_options';
    $menu_slug = 'main/goods.php';
    $position = 6;
    add_menu_page( $page_title, $menu_title, $capability, $menu_slug, '', '',$position);
    add_submenu_page( 'main/goods.php', 'Добавление товара', 'Добавление товара', 'manage_options', 'main/addGoods.php', '', 1 );
    add_submenu_page( 'main/goods.php', 'Удаление товара', 'Удаление товара', 'manage_options', 'main/deleteGoods.php', '', 2 );
});
addTable('wp_goods');

function addTable($name_table){
    global $wpdb;
    $sql = 'CREATE TABLE If NOT EXISTS `'.$name_table.'`(
            `id` int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            `name` varchar(255) not NULL,
            `pice` float,
            `id_size` int,
            `description` TEXT,
             `quantity` int
);';
    $wpdb->query($sql);
}