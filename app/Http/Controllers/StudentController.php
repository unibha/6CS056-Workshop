<?php
namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
class StudentController extends Controller
{
/**
* Display a listing of the resource.
*/
 public function index()
   {
       // Building the query
       $query = Student::query();
       $query = $query->orderBy("date_of_birth", "desc");


       // Running the query against database
       $students = $query->get();


       return view("student.index", compact("students"));
   }

/**
* Show the form for creating a new resource.
*/
public function create()
{
return view("student.create");
}
/**
* Store a newly created resource in storage.
*/
public function store(Request $request)
   {
       $validated = $request->validate([
           "name" => "required|max:100|string",
           "email" => "required|email",
           "phone" => "nullable|max:20",
           "address" => "nullable",
           "date_of_birth" => "required|date"
       ]);


       Student::create($validated);


       return redirect()
           ->route("students.index")
           ->with("success", "Student created successfully");
   }

/**
* Display the specified resource.
*/
public function show(Student $student)
{
return view("student.show");
}
/**
* Show the form for editing the specified resource.
*/
public function edit(Student $student)
{
return view("student.edit");
}
/**
* Update the specified resource in storage.
*/
 public function update(Request $request, Student $student)
   {
       $validated = $request->validate([
           "name" => "required|max:100|string",
           "email" => "required|email",
           "phone" => "nullable|max:20",
           "address" => "nullable",
           "date_of_birth" => "required|date"
       ]);


       $student->update($validated);
       $student->save();


       return redirect()->route('students.index')
           ->with("success", "Student edited successfully");
   }

/**
* Remove the specified resource from storage.
*/
public function destroy(Student $student)
{
// 
}
}