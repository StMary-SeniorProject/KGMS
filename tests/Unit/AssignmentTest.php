<?php

namespace Tests\Unit;

use App\Models\Assignment; 
use PHPUnit\Framework\TestCase;

class AssignmentTest extends TestCase
{
    /**
     * 
     */
    public function test_example(): void
    {
        $assignment = new Assignment([
            'subject' => 'Math',
            'title' => 'Algebra Homework',
            'description' => 'Solve the equations',
            'due_date' => '2024-12-31',
            'max_score' => 100,
        ]);

        $this->assertEquals('Math', $assignment->subject);
        $this->assertEquals('Algebra Homework', $assignment->title);
        $this->assertEquals('Solve the equations', $assignment->description);
        $this->assertEquals('2024-12-31', $assignment->due_date);
        $this->assertEquals(100, $assignment->max_score);
    }
}