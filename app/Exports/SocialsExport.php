<?php

namespace App\Exports;

use App\Models\Social;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SocialsExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Social::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.social.columns.id'),
            trans('admin.social.columns.name'),
            trans('admin.social.columns.url'),
        ];
    }

    /**
     * @param Social $social
     * @return array
     *
     */
    public function map($social): array
    {
        return [
            $social->id,
            $social->name,
            $social->url,
        ];
    }
}
