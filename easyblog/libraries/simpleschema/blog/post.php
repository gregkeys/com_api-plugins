<?php
/**
 * @package API plugins
 * @copyright Copyright (C) 2009 2014 Techjoomla, Tekdi Technologies Pvt. Ltd. All rights reserved.
 * @license GNU GPLv2 <http://www.gnu.org/licenses/old-licenses/gpl-2.0.html>
 * @link http://www.techjoomla.com
*/
jimport('simpleschema.person');
jimport('simpleschema.category');

class PostSimpleSchema {

	public $postid;
	
	public $title;
	
	public $text;
	
	public $textplain;
	
	public $image = array();
	
	public $created_date;
	
	public $created_date_elapsed;
	
	public $updated_date;
	
	public $author;
	
	public $comments;
	
	public $url;
	
	public $tags = array();
	
	public $rating;
	
	public $category;
	
	public function __construct() {
		$this->author 		= new PersonSimpleSchema;
		$this->category 	= new CategorySimpleSchema;
	}

}
