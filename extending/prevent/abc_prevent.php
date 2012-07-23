<?php

/**
 * This is an example plugin for rah_bitly. Showcases extending.
 *
 * @package rah_bitly
 * @author Jukka Svahn
 * @version 0.1
 * @link https://github.com/gocom/rah_bitly
 *
 * The plugin will prevent generating bitly links, and pinging bitly when
 * article's section is set to "private"
 */

	if(@txpinterface == 'admin') {
		register_callback('rah_bitly__prevent', 'rah_bitly.update');
	}

/**
 * Does validation prior to generating a new link
 */

	function rah_bitly__prevent() {
		if(ps('Section') == 'private') {
			rah_bitly::get()->permlink = false;
		}
	}

?>