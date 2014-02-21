<?php
/**
 * CategoryFixture
 *
 */
class CategoryFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = '_categories';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_turkish_ci', 'charset' => 'utf8'),
		'longtitle' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_turkish_ci', 'charset' => 'utf8'),
		'link' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_turkish_ci', 'charset' => 'utf8'),
		'parent_id' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'language_id' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 10),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'lft' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'rght' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_turkish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'longtitle' => 'Lorem ipsum dolor sit amet',
			'link' => 'Lorem ipsum dolor sit amet',
			'parent_id' => 1,
			'language_id' => 1,
			'created' => '2014-02-12 16:34:30',
			'updated' => '2014-02-12 16:34:30',
			'lft' => 1,
			'rght' => 1
		),
	);

}
