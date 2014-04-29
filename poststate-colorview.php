<?php
/**
 * @package Post State Color View
 * @version 1.0.0
 */
/*
Plugin Name: Post State Color View
Plugin URI: https://github.com/mochiflappe/poststate-colorview
Description: 投稿の公開状態を色分けするプラグイン
Author: mochi_Flappe
Version: 1.0.0
Author URI: http://mochi-flappe.com/
License: GPLv2 or later


Copyright 2014 mochi_Flappe (email : mochiflappe@gmail.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

class PostState_ColorView {

  private $css_url;

  public function __construct() {
    if (is_admin()) {
      add_action('init', array(&$this, 'init'));
      $this->css_url = plugins_url('css/', __FILE__);
    }
  }

  public function init() {
    wp_enqueue_style('poststate', $this->css_url . 'poststate.css', array(), '1.0.0');
  }
}

new PostState_ColorView();