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
            'ssn' => $row['ssn'] ?? null,
            'price' => $row['price'] ?? null,
        ]);
    }
}
