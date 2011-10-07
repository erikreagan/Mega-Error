<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// ------------------------------------------------------------------------

/**
 * Comment Badge Accessory
 *
 * @package	ExpressionEngine
 * @subpackage	Addons
 * @category	Module
 * @author	Malcolm Elswortgh
 * @link	http://labs.electricputty.co.uk
 * @copyright 	Copyright (c) 2011 Electric Putty
 * @license   	http://creativecommons.org/licenses/by-sa/3.0/ Attribution-Share Alike 3.0 Unported
 */

// ------------------------------------------------------------------------
 

class Ep_mega_error_acc {



	var $name		= 'Mega Error';
	var $id			= 'ep_mega_error';
	var $version		= '1.0';
	var $description	= 'Makes it hard to miss errors in the publish view - even if they are on a different tab';
	var $sections		= array();



	function __construct()
	{
		$this->EE =& get_instance();
		
		// variables
		$this->base = BASE.AMP.'C=addons_modules'.AMP.'M=show_module_cp'.AMP.'module=ep_mega_error';
		$this->_theme_base_url 	= $this->EE->config->item('theme_folder_url').'third_party/ep_mega_error/';
	}



	function set_sections()
	{
		// add jQuery to control panel head
		$this->EE->cp->add_to_head('<link type="text/css" href="'.$this->_theme_base_url.'css/ep_mega_error.css" rel="stylesheet" />');
		$this->EE->cp->add_to_head('<script src="'.$this->_theme_base_url.'js/ep_mega_error.js"></script>');
	}



	function update()
	{
		return TRUE;
	}



}
/* End of file acc.comment_badge.php */
/* Location: /system/expressionengine/third_party/comment_badge/acc.comment_badge.php */