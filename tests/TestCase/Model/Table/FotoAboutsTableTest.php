<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FotoAboutsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FotoAboutsTable Test Case
 */
class FotoAboutsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FotoAboutsTable
     */
    public $FotoAbouts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.foto_abouts',
        'app.about'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('FotoAbouts') ? [] : ['className' => FotoAboutsTable::class];
        $this->FotoAbouts = TableRegistry::get('FotoAbouts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FotoAbouts);

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
