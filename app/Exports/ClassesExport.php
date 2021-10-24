<?php

namespace App\Exports;

use App\Models\Classes;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ClassesExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Classes::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.class.columns.id'),
            trans('admin.class.columns.name'),
        ];
    }

    /**
     * @param Classes $class
     * @return array
     *
     */
    public function map($class): array
    {
        return [
            $class->id,
            $class->name,
        ];
    }
}
