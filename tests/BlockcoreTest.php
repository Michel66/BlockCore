<?php
/**
 * Tests for BlockCore
 */

use PHPUnit\Framework\TestCase;
use Blockcore\Blockcore;

class BlockcoreTest extends TestCase {
    private Blockcore $instance;

    protected function setUp(): void {
        $this->instance = new Blockcore(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockcore::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
