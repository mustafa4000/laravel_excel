<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // $students = Student::factory()->count(3)->create();

        $students = Student::orderBy('created_at','desc')->get();
        return view('welcome', compact('students'));
    }

    public function example()
    {
        $filename = 'example.xlsx';
        $path = public_path('file/' . $filename);

        // Download file with custom headers
        return response()->download($path, $filename, [
            'Content-Type' => 'application/vnd.ms.excel',
            'Content-Disposition' => 'inline; filename="' . $filename . '"'
        ]);
    }
}
