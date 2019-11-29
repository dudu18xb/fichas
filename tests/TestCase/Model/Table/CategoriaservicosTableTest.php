<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriaservicosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriaservicosTable Test Case
 */
class CategoriaservicosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoriaservicosTable
     */
    public $Categoriaservicos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.categoriaservicos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Categoriaservicos') ? [] : ['className' => CategoriaservicosTable::class];
        $this->Categoriaservicos = TableRegistry::get('Categoriaservicos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Categoriaservicos);

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
