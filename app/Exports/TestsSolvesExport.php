<?php

namespace App\Exports;

use App\Models\TestsSolf;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TestsSolvesExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return TestsSolf::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.tests-solf.columns.id'),
            trans('admin.tests-solf.columns.test_id'),
            trans('admin.tests-solf.columns.user_id'),
            trans('admin.tests-solf.columns.solve'),
            trans('admin.tests-solf.columns.grade'),
        ];
    }

    /**
     * @param TestsSolf $testsSolf
     * @return array
     *
     */
    public function map($testsSolf): array
    {
        return [
            $testsSolf->id,
            $testsSolf->test_id,
            $testsSolf->user_id,
            $testsSolf->solve,
            $testsSolf->grade,
        ];
    }
}
