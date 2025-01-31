<?php

use App\Http\Controllers\GreetingController;
use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Student;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/home', function () {
    return view('home',['name' => "Muskan"]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/hello', [GreetingController::class, 'index']);

Route::get('/students', function () {

//1. using row sql queries
 //$users = DB::select('select * from users');
 //dd($users);

//2. Query Builder
//$users= DB::table('users')->select(['name','email'])->whereNotNull('email')->orderBy('name')->get();
//dd($users);

//3. Eloquent ORM--in models(make:model Student)
//$stud = Student::all();
//$stud = Student::select(['name','email'])->whereNotNull('email')->orderBy('name')->get();
//dd($users);
//dd($stud);
// Find a student by ID and update status
$student = Student::where('email','muskan@example')->first(); // Get student with ID 1
if ($student) {
    $student->status = 'active'; // Set status to active
    $student->save(); // Save changes
    echo "Student status updated successfully!";
} else {
    echo "Student not found!";
}

$students = Student::all();
dd($students); // Dump & Die to see results
/*foreach($stud as $students)
{
    echo $students->name."<br>";
}
/* adding data manually
$student = new Student();
$student->name= "Prince";
$student->email= "Prince@gmail.com";
$student->save();*/

});