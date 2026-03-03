<?php
/**
 * Tests for EtherVault
 */

use PHPUnit\Framework\TestCase;
use Ethervault\Ethervault;

class EthervaultTest extends TestCase {
    private Ethervault $instance;

    protected function setUp(): void {
        $this->instance = new Ethervault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Ethervault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
