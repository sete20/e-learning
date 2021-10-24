@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.contact.actions.edit', ['name' => $contact->name]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <contact-form
                :action="'{{ $contact->resource_url }}'"
                :data="{{ $contact->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.contact.actions.edit', ['name' => $contact->name]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.contact.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </contact-form>

        </div>
    
</div>

@endsection