<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MatchsFixture
 *
 */
class MatchsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'date' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'first_team_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'second_team_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'result' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'round' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'tournaments_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'first_team_id_matchs' => ['type' => 'index', 'columns' => ['first_team_id'], 'length' => []],
            'second_team_id_matchs' => ['type' => 'index', 'columns' => ['second_team_id'], 'length' => []],
            'tournaments_id_matchs' => ['type' => 'index', 'columns' => ['tournaments_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'first_team_id_matchs' => ['type' => 'foreign', 'columns' => ['first_team_id'], 'references' => ['teams', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'second_team_id_matchs' => ['type' => 'foreign', 'columns' => ['second_team_id'], 'references' => ['teams', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'tournaments_id_matchs' => ['type' => 'foreign', 'columns' => ['tournaments_id'], 'references' => ['tournaments', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'date' => 'Lorem ipsum dolor sit amet',
            'first_team_id' => 1,
            'second_team_id' => 1,
            'result' => 1,
            'round' => 'Lorem ipsum dolor sit amet',
            'tournaments_id' => 1
        ],
    ];
}
