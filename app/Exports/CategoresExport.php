<?php

namespace App\Exports;

use App\Models\Categore;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CategoresExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Categore::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.categore.columns.id'),
            trans('admin.categore.columns.name'),
            trans('admin.categore.columns.slug'),
            trans('admin.categore.columns.is_published'),
            trans('admin.categore.columns.seo_description'),
            trans('admin.categore.columns.seo_keywords'),
            trans('admin.categore.columns.seo_title'),
        ];
    }

    /**
     * @param Categore $categore
     * @return array
     *
     */
    public function map($categore): array
    {
        return [
            $categore->id,
            $categore->name,
            $categore->slug,
            $categore->is_published,
            $categore->seo_description,
            $categore->seo_keywords,
            $categore->seo_title,
        ];
    }
}
