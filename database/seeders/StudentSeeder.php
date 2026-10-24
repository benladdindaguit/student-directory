<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $students = [
            [
                'student_number' => 'RMMC-2026-001',
                'first_name' => 'Andrea',
                'last_name' => 'Reyes',
                'course' => 'BSIT',
                'email' => 'andrea.reyes@example.com',
                'year_level' => '1st Year',
            ],
            [
                'student_number' => 'RMMC-2026-002',
                'first_name' => 'Joshua',
                'last_name' => 'Cruz',
                'course' => 'BSCS',
                'email' => 'joshua.cruz@example.com',
                'year_level' => '2nd Year',
            ],
            [
                'student_number' => 'RMMC-2026-003',
                'first_name' => 'Samantha',
                'last_name' => 'Garcia',
                'course' => 'BSBA',
                'email' => 'samantha.garcia@example.com',
                'year_level' => '3rd Year',
            ],
            [
                'student_number' => 'RMMC-2026-004',
                'first_name' => 'Miguel',
                'last_name' => 'Torres',
                'course' => 'BSED',
                'email' => 'miguel.torres@example.com',
                'year_level' => '4th Year',
            ],
            [
                'student_number' => 'RMMC-2026-005',
                'first_name' => 'Patricia',
                'last_name' => 'Flores',
                'course' => 'BSIT',
                'email' => 'patricia.flores@example.com',
                'year_level' => '2nd Year',
            ],
            [
                'student_number' => 'RMMC-2026-006',
                'first_name' => 'Daniel',
                'last_name' => 'Mendoza',
                'course' => 'BSHM',
                'email' => 'daniel.mendoza@example.com',
                'year_level' => '1st Year',
            ],
            [
                'student_number' => 'RMMC-2026-007',
                'first_name' => 'Nicole',
                'last_name' => 'Ramos',
                'course' => 'BSCrim',
                'email' => 'nicole.ramos@example.com',
                'year_level' => '3rd Year',
            ],
            [
                'student_number' => 'RMMC-2026-008',
                'first_name' => 'Gabriel',
                'last_name' => 'Bautista',
                'course' => 'BSCS',
                'email' => 'gabriel.bautista@example.com',
                'year_level' => '4th Year',
            ],
            [
                'student_number' => 'RMMC-2026-009',
                'first_name' => 'Camille',
                'last_name' => 'Aquino',
                'course' => 'BSBA',
                'email' => 'camille.aquino@example.com',
                'year_level' => '1st Year',
            ],
            [
                'student_number' => 'RMMC-2026-010',
                'first_name' => 'Nathan',
                'last_name' => 'Villanueva',
                'course' => 'BSED',
                'email' => 'nathan.villanueva@example.com',
                'year_level' => '2nd Year',
            ],
        ];

        foreach ($students as $student) {
            Student::updateOrCreate(
                ['student_number' => $student['student_number']],
                $student
            );
        }
    }
}
