<?php

namespace App\Exports;

use App\Models\Comment;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CommentsExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Comment::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.comment.columns.id'),
            trans('admin.comment.columns.user_id'),
            trans('admin.comment.columns.post_id'),
            trans('admin.comment.columns.body'),
            trans('admin.comment.columns.is_published'),
        ];
    }

    /**
     * @param Comment $comment
     * @return array
     *
     */
    public function map($comment): array
    {
        return [
            $comment->id,
            $comment->user_id,
            $comment->post_id,
            $comment->body,
            $comment->is_published,
        ];
    }
}
