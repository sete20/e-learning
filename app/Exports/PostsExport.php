<?php

namespace App\Exports;

use App\Models\Post;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PostsExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Post::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.post.columns.id'),
            trans('admin.post.columns.author_id'),
            trans('admin.post.columns.category_id'),
            trans('admin.post.columns.tag_id'),
            trans('admin.post.columns.title'),
            trans('admin.post.columns.likes'),
            trans('admin.post.columns.image'),
            trans('admin.post.columns.slug'),
            trans('admin.post.columns.body'),
            trans('admin.post.columns.is_published'),
            trans('admin.post.columns.seo_description'),
            trans('admin.post.columns.seo_keywords'),
            trans('admin.post.columns.seo_title'),
        ];
    }

    /**
     * @param Post $post
     * @return array
     *
     */
    public function map($post): array
    {
        return [
            $post->id,
            $post->author_id,
            $post->category_id,
            $post->tag_id,
            $post->title,
            $post->likes,
            $post->image,
            $post->slug,
            $post->body,
            $post->is_published,
            $post->seo_description,
            $post->seo_keywords,
            $post->seo_title,
        ];
    }
}
