<?php

namespace App\Exports;

use App\Models\Payment;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PaymentsExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Payment::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.payment.columns.id'),
            trans('admin.payment.columns.user_id'),
            trans('admin.payment.columns.order_id'),
            trans('admin.payment.columns.teacher_id'),
            trans('admin.payment.columns.name'),
            trans('admin.payment.columns.phone'),
            trans('admin.payment.columns.total'),
            trans('admin.payment.columns.discount'),
            trans('admin.payment.columns.payment'),
            trans('admin.payment.columns.provider'),
            trans('admin.payment.columns.provider_id'),
        ];
    }

    /**
     * @param Payment $payment
     * @return array
     *
     */
    public function map($payment): array
    {
        return [
            $payment->id,
            $payment->user_id,
            $payment->order_id,
            $payment->teacher_id,
            $payment->name,
            $payment->phone,
            $payment->total,
            $payment->discount,
            $payment->payment,
            $payment->provider,
            $payment->provider_id,
        ];
    }
}
