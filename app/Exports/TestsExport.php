<?php

namespace App\Exports;

use App\Models\Test;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TestsExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Test::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.test.columns.id'),
            trans('admin.test.columns.course_id'),
            trans('admin.test.columns.teacher_id'),
            trans('admin.test.columns.name'),
            trans('admin.test.columns.description'),
            trans('admin.test.columns.test'),
            trans('admin.test.columns.grade'),
        ];
    }

    /**
     * @param Test $test
     * @return array
     *
     */
    public function map($test): array
    {
        return [
            $test->id,
            $test->course_id,
            $test->teacher_id,
            $test->name,
            $test->description,
            $test->test,
            $test->grade,
        ];
    }
}
