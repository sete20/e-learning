<?php

namespace App\Exports;

use App\Models\Page;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PagesExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Page::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.page.columns.id'),
            trans('admin.page.columns.author_id'),
            trans('admin.page.columns.title'),
            trans('admin.page.columns.image'),
            trans('admin.page.columns.slug'),
            trans('admin.page.columns.body'),
            trans('admin.page.columns.is_published'),
            trans('admin.page.columns.seo_description'),
            trans('admin.page.columns.seo_keywords'),
            trans('admin.page.columns.seo_title'),
        ];
    }

    /**
     * @param Page $page
     * @return array
     *
     */
    public function map($page): array
    {
        return [
            $page->id,
            $page->author_id,
            $page->title,
            $page->image,
            $page->slug,
            $page->body,
            $page->is_published,
            $page->seo_description,
            $page->seo_keywords,
            $page->seo_title,
        ];
    }
}
