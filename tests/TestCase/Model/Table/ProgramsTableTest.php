<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProgramsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProgramsTable Test Case
 */
class ProgramsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProgramsTable
     */
    public $Programs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.programs',
        'app.offerings'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Programs') ? [] : ['className' => 'App\Model\Table\ProgramsTable'];
        $this->Programs = TableRegistry::get('Programs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Programs);

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
}
