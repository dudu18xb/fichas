<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FichasodontologicasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FichasodontologicasTable Test Case
 */
class FichasodontologicasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FichasodontologicasTable
     */
    public $Fichasodontologicas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fichasodontologicas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Fichasodontologicas') ? [] : ['className' => FichasodontologicasTable::class];
        $this->Fichasodontologicas = TableRegistry::get('Fichasodontologicas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fichasodontologicas);

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
