<?php

namespace App\Imports;

use App\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportStudents implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $arr = array();
        $student = new Student([
            'Roll_no' => $row['Roll_no'],
            'Name' => $row['Name'],
            'Branch' => $row['Branch'],
        ]);

        $marks = new Marks([
            'Roll_no' => $row['Roll_no'],
            'Marks' =>$row['Marks'],
        ]);

        array_push( $arr, $student);
        array_push($arr,$marks);

        return $arr;
    }
}
