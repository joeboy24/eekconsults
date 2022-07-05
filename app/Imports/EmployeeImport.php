<?php
  
namespace App\Imports;
  
use App\Models\User;
use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Session;
  
class EmployeeImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function startRow(): int
    {
        return 2;
    }
    
    public function model(array $row)
    {
        
        // $where = ['exam_id' => session('import_ex_id'), 'staff_id' => auth()->user()->staff_id];
        // $que_no = Question::where($where)->count() + 1;

        // $que_where = ['exam_id' => session('import_ex_id'),];
        // $que_search = Question::where($que_where)->where('question', 'LIKE', '%'.substr($row[0], 0,30).'%')->count();
        // if ($que_search < 1) {
        //     # code...
            return new Employee([
                // 'fname' => auth()->user()->id,
                'user_id' => 12,
                'fname' =>  $row[4],
                'sname' =>  $row[3],
                'oname' =>  $row[5],
                'ssn' => $row[1],
                'salary' => $row[6],
                'contact' => '001345677898',
                'ssf' => $row[7], 
                // 'photo' => $row[2], 
                '2tier_ssf' => $row[8]
            ]);
        // }

    }
}