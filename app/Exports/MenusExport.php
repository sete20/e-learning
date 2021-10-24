<?php

namespace App\Exports;

use App\Models\Menu;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class MenusExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Menu::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.menu.columns.id'),
            trans('admin.menu.columns.name'),
            trans('admin.menu.columns.description'),
            trans('admin.menu.columns.area'),
            trans('admin.menu.columns.items'),
        ];
    }

    /**
     * @param Menu $menu
     * @return array
     *
     */
    public function map($menu): array
    {
        return [
            $menu->id,
            $menu->name,
            $menu->description,
            $menu->area,
            $menu->items,
        ];
    }
}
