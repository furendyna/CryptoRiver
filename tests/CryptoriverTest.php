<?php
/**
 * Tests for CryptoRiver
 */

use PHPUnit\Framework\TestCase;
use Cryptoriver\Cryptoriver;

class CryptoriverTest extends TestCase {
    private Cryptoriver $instance;

    protected function setUp(): void {
        $this->instance = new Cryptoriver(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptoriver::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
