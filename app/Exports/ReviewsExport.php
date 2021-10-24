<?php

namespace App\Exports;

use App\Models\Review;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ReviewsExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Review::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.review.columns.id'),
            trans('admin.review.columns.name'),
            trans('admin.review.columns.job'),
            trans('admin.review.columns.review'),
            trans('admin.review.columns.image'),
        ];
    }

    /**
     * @param Review $review
     * @return array
     *
     */
    public function map($review): array
    {
        return [
            $review->id,
            $review->name,
            $review->job,
            $review->review,
            $review->image,
        ];
    }
}
