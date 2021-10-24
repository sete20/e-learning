<?php

namespace App\Exports;

use App\Models\Course;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CoursesExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Course::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.course.columns.id'),
            trans('admin.course.columns.teacher_id'),
            trans('admin.course.columns.name'),
            trans('admin.course.columns.slug'),
            trans('admin.course.columns.description'),
            trans('admin.course.columns.price'),
            trans('admin.course.columns.discount'),
            trans('admin.course.columns.image'),
            trans('admin.course.columns.material_id'),
            trans('admin.course.columns.times'),
            trans('admin.course.columns.live'),
            trans('admin.course.columns.activated'),
        ];
    }

    /**
     * @param Course $course
     * @return array
     *
     */
    public function map($course): array
    {
        return [
            $course->id,
            $course->teacher_id,
            $course->name,
            $course->slug,
            $course->description,
            $course->price,
            $course->discount,
            $course->image,
            $course->material_id,
            $course->times,
            $course->live,
            $course->activated,
        ];
    }
}
