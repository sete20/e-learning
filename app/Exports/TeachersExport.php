<?php

namespace App\Exports;

use App\Models\Teacher;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TeachersExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Teacher::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.teacher.columns.id'),
            trans('admin.teacher.columns.name'),
            trans('admin.teacher.columns.phone'),
            trans('admin.teacher.columns.email'),
            trans('admin.teacher.columns.enabled'),
            trans('admin.teacher.columns.image'),
            trans('admin.teacher.columns.email_verified_at'),
            trans('admin.teacher.columns.material_id'),
        ];
    }

    /**
     * @param Teacher $teacher
     * @return array
     *
     */
    public function map($teacher): array
    {
        return [
            $teacher->id,
            $teacher->name,
            $teacher->phone,
            $teacher->email,
            $teacher->enabled,
            $teacher->image,
            $teacher->email_verified_at,
            $teacher->material_id,
        ];
    }
}
