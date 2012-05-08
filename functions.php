<?php
/**
 * Functions
 * Where the magic happens ...
 *
 * @package     OpusPrimus
 * @subpackage  OpusPrimusChild
 * @since       0.1
 *
 * @author      Opus Primus <in.opus.primus@gmail.com>
 * @copyright   Copyright (c) 2012, Opus Primus
 *
 * This file is part of Opus Primus Child.
 *
 * Opus Primus Child is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License version 2, as published by
 * the Free Software Foundation.
 *
 * You may NOT assume that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, write to:
 *
 *      Free Software Foundation, Inc.
 *      51 Franklin St, Fifth Floor
 *      Boston, MA  02110-1301  USA
 *
 * The license for this software can also likely be found here:
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Opus Primus Child LESS
 *
 * Add additional LESS stylesheet specific to the Child-Theme
 *
 * @package     OpusPrimus
 * @subpackage  OpusPrimusChild
 * @since       0.1
 *
 * @uses        get_Stylesheet_directory_uri
 */
function opus_primus_child_LESS() {
    /** Add LESS link - cannot enqueue due to rel requirement */
    printf ( '<link rel="stylesheet/less" type="text/css" href="%1$s">', get_stylesheet_directory_uri() . '/child-style.less' );
    /** Print new line - head section will be easier to read */
    printf ( "\n" );
}
/**
 * Set action priority to greater than the default 10 to insure the Child-Theme
 * LESS file is enqueued after the Parent-Theme's LESS file; this will help to
 * maintain expected specificity.
 */
add_action( 'wp_enqueue_scripts', 'opus_primus_child_LESS', 11 );