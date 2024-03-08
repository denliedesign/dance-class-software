<?php

namespace App\Imports;

use App\Models\DanceClass;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithUpserts;

class DanceClassesImport implements ToModel, WithUpserts
{
    public function uniqueBy()
    {
        return 'id';
    }

    /**
     * @param array $row
     *
     * @return DanceClass|null
     */
    public function model(array $row)
    {
        return new DanceClass([
            'id' => $row[0], // Assuming the ID is in the first column of your Excel file
            'name' => $row[3],
            'age_requirement' => $row[4],
            'dance_style' => $row[5],
            'day_of_week' => $row[1],
            'time' => $row[2],
            // Add more fields as needed
        ]);
    }
}
