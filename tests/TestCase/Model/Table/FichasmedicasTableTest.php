<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FichasmedicasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FichasmedicasTable Test Case
 */
class FichasmedicasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FichasmedicasTable
     */
    public $Fichasmedicas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fichasmedicas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Fichasmedicas') ? [] : ['className' => FichasmedicasTable::class];
        $this->Fichasmedicas = TableRegistry::get('Fichasmedicas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fichasmedicas);

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
