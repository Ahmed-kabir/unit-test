<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Service\Room;

class RoomTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    public function test_class_exist()
    {
        $this->assertTrue(class_exists('App\Service\Room'));
    }

    /**
     * Test the has() method in Room class
     *
     * @return void
     */
    public function test_room_has()
    {
        $room = new Room(["John", "Doe", "Jimmy"]); // Create a new room
        $this->assertTrue($room->has("John")); // Expect true
        $this->assertFalse($room->has("Eric")); // Expect false
    }

    public function test_room_contain()
    {
        $room = new Room(["kabir"]);
        $this->assertContains("kabir", $room->add('Kabir'));
    }

    /**
     * Test the add() method in Room class
     *
     * @return void
     */
    public function test_room_remove()
    {
        $room = new Room(["Peter"]);
        // as room contain 1 people "Peter"
        $this->assertCount(0, $room->remove("Peter"));
    }
}
