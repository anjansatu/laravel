<?php

namespace App\Imports;

use App\Models\Ssn;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SsnImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Ssn([
            'first_name' => $row['first_name'] ?? null,
            'last_name' => $row['last_name'] ?? null,
            'city' => $row['city'] ?? null,
            'state' => $row['state'] ?? null,
            'ssn' => $row['ssn'] ?? null,
            'dob' => $row['dob'] ?? null,
            'year' => $row['year'] ?? null,
            'price' => $row['price'] ?? null,
        ]);
    }
}
