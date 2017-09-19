<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OptionsxrolFixture
 *
 */
class OptionsxrolFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'optionsxrol';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'roles_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'description' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'options_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'roles_id_optionsxrol' => ['type' => 'index', 'columns' => ['roles_id'], 'length' => []],
            'options_id_optionsxrol' => ['type' => 'index', 'columns' => ['options_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'options_id_optionsxrol' => ['type' => 'foreign', 'columns' => ['options_id'], 'references' => ['options', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'roles_id_optionsxrol' => ['type' => 'foreign', 'columns' => ['roles_id'], 'references' => ['roles', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'roles_id' => 1,
            'description' => 'Lorem ipsum dolor sit amet',
            'options_id' => 1
        ],
    ];
}
