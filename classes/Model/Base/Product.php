<?php defined('SYSPATH') OR die('No direct script access.');

class Model_Base_Product extends Model_App {

  protected $_table_columns = array(
    'id' => array (
			'data_type' => 'int',
			'extra' => 'auto_increment',
			'key' => 'PRI',
			'display' => '11',
		),
    'name' => array (
			'data_type' => 'varchar',
			'character_maximum_length' => '128',
		),
    'updated_at' => array (
			'data_type' => 'datetime',
			'is_nullable' => TRUE,
		),
    'created_at' => array (
			'data_type' => 'datetime',
			'is_nullable' => TRUE,
		),
  );

  public function rules()
  {
    return array(
      'name' => array(
        array('not_empty'),
        array('max_length', array(':value', 128)),
      ),
    );
  }


  public function labels()
  {
    return array(
      'name' => __('Name'),
    );
  }

}