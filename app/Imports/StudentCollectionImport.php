<?php

namespace App\Imports;

use Illuminate\Support\Facades\DB;
use App\Models\Student;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentCollectionImport implements ToCollection,WithHeadingRow
{
    private $schoolyear ;
    private $schoolterm ;
    public function __construct($schoolyear,$schoolterm)
    {
        $this->schoolyear   = $schoolyear;
        $this->schoolterm   = $schoolterm;
    }

    public function collection(Collection $rows)
    {
        foreach($rows as $row)
        {
            $id_student = str_replace('-','', $row['id_student']);
            $check_students = Student::select("*")
                                    ->where('id_student',"=",$id_student)
                                    ->get();
            $getid ;
            foreach($check_students as $rows)
            {
                $getid = $rows->student_id;
            }
            $update = Student::find($getid)->update([
                'project2_schoolyear_id' => $this->schoolyear,
                'project2_schoolterm_id' => $this->schoolterm,
            ]);
        }
    }
}

