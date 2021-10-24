<?php

namespace App\Exports;

use App\Models\HomeworksSolf;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class HomeworksSolvesExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return HomeworksSolf::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.homeworks-solf.columns.id'),
            trans('admin.homeworks-solf.columns.test_id'),
            trans('admin.homeworks-solf.columns.user_id'),
            trans('admin.homeworks-solf.columns.solve'),
        ];
    }

    /**
     * @param HomeworksSolf $homeworksSolf
     * @return array
     *
     */
    public function map($homeworksSolf): array
    {
        return [
            $homeworksSolf->id,
            $homeworksSolf->test_id,
            $homeworksSolf->user_id,
            $homeworksSolf->solve,
        ];
    }
}
