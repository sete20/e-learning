<?php

namespace App\Exports;

use App\Models\Homework;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class HomeworksExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Homework::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.homework.columns.id'),
            trans('admin.homework.columns.course_id'),
            trans('admin.homework.columns.teacher_id'),
            trans('admin.homework.columns.name'),
            trans('admin.homework.columns.description'),
            trans('admin.homework.columns.homework'),
        ];
    }

    /**
     * @param Homework $homework
     * @return array
     *
     */
    public function map($homework): array
    {
        return [
            $homework->id,
            $homework->course_id,
            $homework->teacher_id,
            $homework->name,
            $homework->description,
            $homework->homework,
        ];
    }
}
