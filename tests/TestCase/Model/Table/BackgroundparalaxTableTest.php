<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BackgroundparalaxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BackgroundparalaxTable Test Case
 */
class BackgroundparalaxTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BackgroundparalaxTable
     */
    public $Backgroundparalax;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.backgroundparalax'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Backgroundparalax') ? [] : ['className' => BackgroundparalaxTable::class];
        $this->Backgroundparalax = TableRegistry::get('Backgroundparalax', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Backgroundparalax);

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
