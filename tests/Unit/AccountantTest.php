<?php

namespace Tests\Unit;

use App\Models\Accountant;
use App\Models\Staff;
use PHPUnit\Framework\TestCase;

class AccountantTest extends TestCase
{
    /**
     * Test accountant creation.
     */
    public function test_accountant_creation(): void
    {
        $staff = new Staff([
            'first_name' => 'John',
            'middle_name' => 'Doe',
            'last_name' => 'Smith',
            'dob' => '1980-01-01',
            'gender' => 'male',
            'address' => '123 Main St',
            'phone' => '+251912345678',
            'qualification' => 'CPA',
            'date_of_hire' => '2020-01-01',
            'salary' => 5000,
            'status' => 'active',
        ]);

        $accountant = new Accountant([
            'staff_id' => $staff->id,
        ]);

        $this->assertEquals($staff->id, $accountant->staff_id);
    }

    /**
     * Test accountant relationship with staff.
     */
    public function test_accountant_belongs_to_staff(): void
    {
        $staff = new Staff([
            'first_name' => 'John',
            'middle_name' => 'Doe',
            'last_name' => 'Smith',
            'dob' => '1980-01-01',
            'gender' => 'male',
            'address' => '123 Main St',
            'phone' => '+251912345678',
            'qualification' => 'CPA',
            'date_of_hire' => '2020-01-01',
            'salary' => 5000,
            'status' => 'active',
        ]);

        $accountant = new Accountant([
            'staff_id' => $staff->id,
        ]);

        
        $accountant->setRelation('staff', $staff);

        $this->assertInstanceOf(Staff::class, $accountant->staff);
        $this->assertEquals($staff->id, $accountant->staff->id);
    }
}