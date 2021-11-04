<?php

namespace App\Imports;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Student;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentImport implements ToModel,WithHeadingRow
{
    private $schoolyear;
    private $schoolterm;
    private $list_check;

    public function __construct($schoolyear,$schoolterm,$list_check)
    {
        $this->schoolyear   = $schoolyear;
        $this->schoolterm   = $schoolterm;
        $this->list_check = $list_check;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $id_student = str_replace('-','', $row['id_student']);
        $name= $row['name'];
        $email = $row['email'];
        $datausercheck = User::select("*")
                                ->where("email","=",$email)
                                ->get();
        if($datausercheck->isEmpty())
        {
            $user = new User;
            $user->name = $name;
            $user->email = $email;
            $user->login_level = 1 ;
            $user->password = bcrypt('S61PasswordReset');
            $user->save();
        }
        
        $check_students = Student::select("*")
                                    ->where('id_student',"=",$id_student)
                                    ->get();
        if($this->list_check == 1)
        {
            $users = User::select("*")
                            ->where('email',"=",$email)
                            ->get();
            $users_id ;
            foreach($users as $rowuser)
            {
                $users_id = $rowuser->id;
            }

            if($check_students->isEmpty())
            {
                return new Student([
                    'id_student' => $id_student,
                    'name' => $name,
                    'email' => $email,
                    'status_project1_id'=> 1,
                    'status_project2_id'=> 1,
                    'project1_schoolyear_id'=> $this->schoolyear,
                    'project1_schoolterm_id'=> $this->schoolterm,
                    'users_id'=> $users_id,
                ]);
            }
        }
        
    }
}
