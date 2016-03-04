<?php

class TestCase
{
    public function test()
    {
        $this->assertEquals(0, count([])); // <- reported assertCount
        $this->assertEquals(count([]), 0); // <- reported assertCount
        $this->assertSame(0, count([]));   // <- reported assertCount
        $this->assertSame(count([]), 0);   // <- reported assertCount

        $this->assertNotEquals(count([]), 0); // <- reported assertNotCount
        $this->assertNotSame(count([]), 0);   // <- reported assertNotCount

        $this->assertEquals(null, 1);      // <- reported, assertSame    IF strict options set
        $this->assertNotEquals(null, 1);   // <- reported, assertnotSame IF strict options set

        $this->assertSame(1, null);        // <- reported assertNull
        $this->assertNotSame(1, null);     // <- reported assertNotNull

        $this->assertTrue($x instanceof \stdClass);     // <- reported assertInstanceOf
        $this->assertNotFalse($x instanceof \stdClass); // <- reported assertInstanceOf

        $this->assertFalse($x instanceof \stdClass);    // <- reported assertNotInstanceOf
        $this->assertNotTrue($x instanceof \stdClass);  // <- reported assertNotInstanceOf

        $this->assertTrue(file_exists($x));  // <- reported assertFileExists
        $this->assertFalse(file_exists($x)); // <- reported assertFileNotExists

        $this->assertTrue(!$s);            // <- reported assertNotTrue
        $this->assertFalse(!$y);           // <- reported assertNotFalse

        $this->assertNotTrue(empty($x));   // <- reported assertNotEmpty
        $this->assertFalse(empty($x));     // <- reported assertNotEmpty
        $this->assertTrue(empty($x));      // <- reported assertEmpty
        $this->assertNotFalse(empty($x));  // <- reported assertEmpty
    }
}