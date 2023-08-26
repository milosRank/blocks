<?php

/**
 * Plugin Name: First Block
 * Plugin URI: www.google.com
 * Description: My first block
 * Author: Milos Rankovic
 * Author URI: https://github.com/milosRank
 */

function blocks_course_firstblock_init() {
    register_block_type_from_metadata(__DIR__);
}

add_action("init", "blocks_course_firstblock_init");