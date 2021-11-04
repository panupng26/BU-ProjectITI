<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManageStudentController;
use App\Http\Controllers\ManageTypeprojectController;
use App\Http\Controllers\ManageTypePeperController;
use App\Http\Controllers\ManageTeacherController;
use App\Http\Controllers\ManagePeperprojectController;
use App\Http\Controllers\RequestTeacherController;
use App\Http\Controllers\SendPeperController;
use App\Http\Controllers\RequestTestController;
use App\Http\Controllers\ScorePageController;
use App\Http\Controllers\ExamprojectController;
use App\Http\Controllers\RequeststudentController;
use App\Http\Controllers\CheckpeperController;
use App\Http\Controllers\ListprojectController;
use App\Http\Controllers\ListprojectallController;
use App\Http\Controllers\PrivateteacherController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
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
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/auth/login',function(){

    if(Auth::user()->login_level == 0)
    {
        return view('admin.dashboard');
    }else if(Auth::user()->login_level == 1)
    {
        return view('student.dashboard');
    }else if(Auth::user()->login_level == 2)
    {
        return view('teacher.dashboard');
    }else if(Auth::user()->login_level == 3)
    {
        return view('private-teacher.dashboard');
    }
})->name('checkauth');

Route::middleware(['middleware'=>'PreventBackHistory'])->group(function(){
    Auth::routes();
});
//---------------------------------------------------------------Admin---------------------------------------------------------------{
Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']],function(){

Route::get('/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
Route::get('/ManageUser/index',[AdminController::class,'ManageUser_index'])->name('admin.ManageUser');
Route::post('/ManageUser/Resetpassword',[AdminController::class,'ManageUser_reset'])->name('admin.ManageUser.reset');
//ManageStudent
Route::get('/ManageStudent/index',[AdminController::class,'ManageStudent_index'])->name('admin.ManageStudent');
Route::get('/ManageStudent/Form_Add',[AdminController::class,'ManageStudent_FormAdd'])->name('admin.FormAddManageStudent');
Route::post('/Managestudent/AddStudent',[AdminController::class,'ManageStudent_AddStudent'])->name('admin.ManageStudent.add');
Route::get('/ManageStudent/Update',[AdminController::class,'ManageStudent_FormUpdate'])->name('admin.FormUpdateManageStudent');
Route::post('/ManageStudent/ConfirmUpdate',[AdminController::class,'ManageStudent_Updatenow'])->name('admin.ManageStudent.update');
Route::post('/ManageStudent/Delete',[AdminController::class,'ManageStudent_SoftDelete'])->name('admin.ManageStudent.softdelete');
Route::get('/ManageStudent/import-excel',[AdminController::class,'import_excel_student'])->name('admin.ManageStudent.importexcel');
Route::post('/ManageStudent/import-insertdata',[AdminController::class,'importdataexcel'])->name('admin.ManageStudent.importexcel.add');
Route::get('/ManageStudent/dashinsert',[AdminController::class,'Dashboardall_insert'])->name('admin.ManageStudent.dashboardinsert');
//endManageStudent

//ManageTypeproject
Route::get('/ManageTypeproject/index',[ManageTypeprojectController::class,'index'])->name('admin.ManageTypeproject');
Route::get('/ManageTypeproject/Add',[ManageTypeprojectController::class,'FormAdd'])->name('admin.FormAddManageTypeproject');
Route::get('/ManageTypeproject/FormUpdate',[ManageTypeprojectController::class,'FormUpdate'])->name('admin.FormUpdateManageTypeproject');
Route::post('/ManageTypeproject/Updatedata',[ManageTypeprojectController::class,'MaageTypeproject_update'])->name('admin.ManageTypeproject.update');
Route::post('/ManageTypeproject/insertdata',[ManageTypeprojectController::class,'ManageTypeproject_insert'])->name('admin.ManageTypeproject.insertdata');
//endManageTypeproject

//ManageTypePeper
Route::get('/ManageTypePeper/index',[ManageTypePeperController::class,'index'])->name('admin.ManageTypePeper');
Route::get('/ManageTypePeper/FormAdd',[ManageTypePeperController::class,'FormAdd'])->name('admin.FormAddManageTypePeper');
Route::post('/ManageTypePeper/Add',[ManageTypePeperController::class,'ManageTypepeper_add'])->name('admin.ManageTypepeper.add');
Route::get('/ManageTypePeper/FormUpdate',[ManageTypePeperController::class,'FormUpdate'])->name('admin.FormUpdateManageTypePeper');
Route::post('/ManageTypePeper/Update',[ManageTypePeperController::class,'ManageTypepeper_update'])->name('admin.ManageTypepeper.update');
//endManageTypePeper

//ManageTeacher
Route::get('/ManageTeacher/index',[ManageTeacherController::class,'index'])->name('admin.ManageTeacher');
Route::get('/ManageTeacher/Add',[ManageTeacherController::class,'FormAdd'])->name('admin.FormAddTeacher');
Route::post('/ManageTeacher/Addteacher',[ManageTeacherController::class,'Add_data_teacher'])->name('admin.ManageTeacher.add');
Route::get('/ManageTeacher/FormUpdate',[ManageTeacherController::class,'FormUpdate'])->name('admin.FormUpdateTeacher');
Route::post('/ManageTeacher/Update',[ManageTeacherController::class,'Update_ManageTeacher'])->name('admin.Teacher.update');
Route::get('/ManageTeacher/assign',[ManageTeacherController::class,'Assign_role'])->name('admin.assign');
Route::get('/ManageTeacher/Trash',[ManageTeacherController::class,'Trash_ManageTeacher'])->name('admin.ManageTeacher.trash');
//endManageTeacher

//ManagePeperproject
Route::get('/ManagePeperproject/index',[ManagePeperprojectController::class,'index'])->name('admin.ManagePeperproject');
Route::get('/ManagePeperproject/FormUpdate',[ManagePeperprojectController::class,'FormUpdate'])->name('admin.FormUpdateManagePeperproject');
Route::post('/ManagePeperproject/update',[ManagePeperprojectController::class,'ManagePeperproject_update'])->name('admin.ManagePeperproject.update');
Route::get('/ManagePeperproject/Formadd',[ManagePeperprojectController::class,'FormAdd'])->name('admin.FormAddManagePeperproject');
Route::post('/ManagePeperproject/add',[ManagePeperprojectController::class,'ManagePeperproject_add'])->name('admin.ManagePeperproject.add');
//endManagePeperproject
});
//---------------------------------------------------------------EndAdmin---------------------------------------------------------------

//---------------------------------------------------------------Student----------------------------------------------------------------
Route::group(['prefix'=>'student', 'middleware'=>['isStudent','auth','PreventBackHistory']],function(){
Route::get('/dashboard',[StudentController::class,'index'])->name('student.dashboard');
//RequestTeacher
Route::get('/RequestTeacher/index',[RequestTeacherController::class,'index'])->name('student.RequestTeacher');
Route::post('/RequestTeacher/RequestToTeacher',[RequestTeacherController::class,'Request_to_privateteacher'])->name('student.RequestTeacher.request');
Route::get('/RequestTeacher/Checkrequest',[RequestTeacherController::class,'Check_request_Project'])->name('student.RequestTeacher.check');
//EndRequestTeacher

//SendPeper
Route::get('/SendPeper/index',[SendPeperController::class,'index'])->name('student.SendPeper');
Route::post('/SendPeper/RequestToAdvisor',[SendPeperController::class,'getRequestSendpeper'])->name('student.SendPeper.request');
//EndSendPeper

//RequestTest
Route::get('/RequestTest/index',[RequestTestController::class,'index'])->name('student.RequestTest');
//EndRequestTest

//ScorePage
Route::get('/ScorePage/index',[ScorePageController::class,'index'])->name('student.ScorePage');
//EndScorePage

//Examproject
Route::get('/Examproject/index',[ExamprojectController::class,'index'])->name('student.Examproject');
//EndExamproject
});
//---------------------------------------------------------------EndStudent---------------------------------------------------------------

//---------------------------------------------------------------Teacher----------------------------------------------------------------
Route::group(['prefix'=>'teacher', 'middleware'=>['isTeacher','auth','PreventBackHistory']],function(){

Route::get('/dashboard',[TeacherController::class,'index'])->name('teacher.dashboard');
//Requeststudent
Route::get('/Requeststudent/index',[RequeststudentController::class,'index'])->name('teacher.Requeststudent');
//endRequeststudent

//Checkpeperstudent
Route::get('/Checkpeperstudent/index',[CheckpeperController::class,'index'])->name('teacher.Checkpeperstudent');
//endcheckpeperstudent

//Listproject
Route::get('/Listproject/index',[ListprojectController::class,'index'])->name('teacher.Listproject');
//EndListproject

//Listprojectall
Route::get('/Listprojectall/index',[ListprojectallController::class,'index'])->name('teacher.Listprojectall');
//EndListprojectall

});

//---------------------------------------------------------------EndTeacher----------------------------------------------------------------

//---------------------------------------------------------------private-Teacher----------------------------------------------------------------
//Route::get('/private-teacher/index',[PrivateteacherController::class,'index'])->name('privateteacherindex');

Route::group(['prefix'=>'private-teacher', 'middleware'=>['isPrivateTeacher','auth','PreventBackHistory']],function(){

Route::get('/dashboard',[PrivateteacherController::class,'index'])->name('private.dashboard');
 //Requeststudent
Route::get('/Requeststudent/index',[PrivateteacherController::class,'Requeststudent'])->name('private.Requeststudent');
 //endRequeststudent

 //Checkpeperstudent
Route::get('/Checkpeperstudent/index',[PrivateteacherController::class,'Checkpeperstudent'])->name('private.Checkpeperstudent');
 //endcheckpeperstudent

 //Listproject
Route::get('/Listproject/index',[PrivateteacherController::class,'Listproject'])->name('private.Listproject');
 //EndListproject

 //Listprojectall
Route::get('/Listprojectall/index',[PrivateteacherController::class,'Listprojectall'])->name('private.Listprojectall');
 //EndListprojectall

 //Requestadvisor
Route::get('/Requestadvisor/index',[PrivateteacherController::class,'Requestadvisor'])->name('private.Requestadvisor');
Route::post('/Requestadvisor/summit',[PrivateteacherController::class,'Summit_request_student'])->name('private.summitrequest');
//EndRequestadvisor

// privatePostgradestudent
Route::get('/Postgradestudent/index',[PrivateteacherController::class,'Postgradestudent'])->name('private.Postgradestudent');
//endprivatePostgradestudent
});
//---------------------------------------------------------------Endprivate-Teacher----------------------------------------------------------------