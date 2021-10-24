<?php

namespace App\Exports;

use App\Models\Order;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class OrdersExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Order::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.order.columns.id'),
            trans('admin.order.columns.user_id'),
            trans('admin.order.columns.name'),
            trans('admin.order.columns.uuid'),
            trans('admin.order.columns.phone'),
            trans('admin.order.columns.total'),
            trans('admin.order.columns.refund'),
            trans('admin.order.columns.payment'),
        ];
    }

    /**
     * @param Order $order
     * @return array
     *
     */
    public function map($order): array
    {
        return [
            $order->id,
            $order->user_id,
            $order->name,
            $order->uuid,
            $order->phone,
            $order->total,
            $order->refund,
            $order->payment,
        ];
    }
}
