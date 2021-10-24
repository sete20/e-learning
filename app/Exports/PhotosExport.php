<?php

namespace App\Exports;

use App\Models\Photo;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PhotosExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Photo::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.photo.columns.id'),
            trans('admin.photo.columns.name'),
            trans('admin.photo.columns.image'),
        ];
    }

    /**
     * @param Photo $photo
     * @return array
     *
     */
    public function map($photo): array
    {
        return [
            $photo->id,
            $photo->name,
            $photo->image,
        ];
    }
}
