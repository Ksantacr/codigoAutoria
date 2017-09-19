<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OptionsxrolTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OptionsxrolTable Test Case
 */
class OptionsxrolTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OptionsxrolTable
     */
    public $Optionsxrol;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.optionsxrol',
        'app.roles',
        'app.options'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Optionsxrol') ? [] : ['className' => OptionsxrolTable::class];
        $this->Optionsxrol = TableRegistry::get('Optionsxrol', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Optionsxrol);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
