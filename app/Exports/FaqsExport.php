<?php

namespace App\Exports;

use App\Models\Faq;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class FaqsExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Faq::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.faq.columns.id'),
            trans('admin.faq.columns.title'),
            trans('admin.faq.columns.answer'),
        ];
    }

    /**
     * @param Faq $faq
     * @return array
     *
     */
    public function map($faq): array
    {
        return [
            $faq->id,
            $faq->title,
            $faq->answer,
        ];
    }
}
