<?php

namespace App\Exports;

use App\Models\Material;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class MaterialsExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Material::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.material.columns.id'),
            trans('admin.material.columns.name'),
        ];
    }

    /**
     * @param Material $material
     * @return array
     *
     */
    public function map($material): array
    {
        return [
            $material->id,
            $material->name,
        ];
    }
}
