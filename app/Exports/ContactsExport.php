<?php

namespace App\Exports;

use App\Models\Contact;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ContactsExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Contact::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.contact.columns.id'),
            trans('admin.contact.columns.name'),
            trans('admin.contact.columns.email'),
            trans('admin.contact.columns.phone'),
            trans('admin.contact.columns.message'),
            trans('admin.contact.columns.section'),
        ];
    }

    /**
     * @param Contact $contact
     * @return array
     *
     */
    public function map($contact): array
    {
        return [
            $contact->id,
            $contact->name,
            $contact->email,
            $contact->phone,
            $contact->message,
            $contact->section,
        ];
    }
}
