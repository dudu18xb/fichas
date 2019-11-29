<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaginasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaginasTable Test Case
 */
class PaginasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PaginasTable
     */
    public $Paginas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.paginas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Paginas') ? [] : ['className' => PaginasTable::class];
        $this->Paginas = TableRegistry::get('Paginas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Paginas);

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
