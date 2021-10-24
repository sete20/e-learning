<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UsersExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return User::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.user.columns.id'),
            trans('admin.user.columns.name'),
            trans('admin.user.columns.email'),
            trans('admin.user.columns.email_verified_at'),
            trans('admin.user.columns.phone'),
            trans('admin.user.columns.other_phone'),
            trans('admin.user.columns.image'),
            trans('admin.user.columns.type'),
            trans('admin.user.columns.class_id'),
        ];
    }

    /**
     * @param User $user
     * @return array
     *
     */
    public function map($user): array
    {
        return [
            $user->id,
            $user->name,
            $user->email,
            $user->email_verified_at,
            $user->phone,
            $user->other_phone,
            $user->image,
            $user->type,
            $user->class_id,
        ];
    }
}
