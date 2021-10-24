@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.homeworks-solf.actions.edit', ['name' => $homeworksSolf->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <homeworks-solf-form
                :action="'{{ $homeworksSolf->resource_url }}'"
                :data="{{ $homeworksSolf->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.homeworks-solf.actions.edit', ['name' => $homeworksSolf->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.homeworks-solf.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </homeworks-solf-form>

        </div>
    
</div>

@endsection