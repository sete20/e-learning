@extends('layout.master')

@section('title', trans('admin.contact.actions.index'))

@section('body')

    <contact-listing
        :data="{{ $data->toJson() }}"
        :url="'{{ url('admin/contacts') }}'"
        inline-template>

        <div>
            <modal name="view" dir="ltr" height="auto" :scrollable="true" @before-close="loadData(); bulkItems=[]">
                <setting-form
                    :action="formAction"
                    :data="formData"
                    inline-template>
                    <div>
                        <form @if(auth('admin')->user()->language === 'ar') dir="rtl" @endif class="@if(auth('admin')->user()->language === 'ar') rtl @endif form-horizontal form-create" method="post" @submit.prevent="onSubmit" :action="action" novalidate>
                            <div class="modal-header">
                                <div class="modal-title"><i class="icon-plus"></i> {{ trans('admin.contact.actions.index') }}</div>
                            </div>

                            <div class="modal-body">
                                @include('admin.contact.components.form-elements')
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" :disabled="submiting">
                                    <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                                    {{ trans('brackets/admin-ui::admin.btn.save') }}
                                </button>
                                <button class="btn btn-secondary" @click.prevent="$modal.hide('view')"><i class="fa fa-close"></i> {{__('Close')}}</button>
                            </div>
                        </form>
                    </div>
                </setting-form>
            </modal>
            <form @submit.prevent="">
                <div class="row justify-content-md-between">
                    <div class="col col-lg-7 col-xl-5 form-group">
                        <div class="input-group">
                            <span class="input-group-prepend">
                                    <div class="dropdown">
                                         <button  style="border-radius: 0" class="btn btn-primary" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             {{__('Filter')}}  <i class="fa fa-filter"></i>
                                         </button>
                                         <div class="dropdown-menu dropdown-menu-right">
                                                                                             <button class="dropdown-item d-flex align-items-center" :class="{'active': (clickedBulkItemsCount > 0) || isClickedAll}"  v-validate="''" data-vv-name="enabled"  @click="onBulkItemsClickedAllWithPagination()"><i class="icon-check p-2"></i> {{ __('Select All') }}</button>
                                                                                                                                                                                              <button class="dropdown-item d-flex align-items-center" is='sortable' :column="'id'">{{ trans('admin.contact.columns.id') }}</button>
                                                                                                                                                                                                    <button class="dropdown-item d-flex align-items-center" is='sortable' :column="'name'">{{ trans('admin.contact.columns.name') }}</button>
                                                                                                                                                                                                    <button class="dropdown-item d-flex align-items-center" is='sortable' :column="'email'">{{ trans('admin.contact.columns.email') }}</button>
                                                                                                                                                                                                    <button class="dropdown-item d-flex align-items-center" is='sortable' :column="'phone'">{{ trans('admin.contact.columns.phone') }}</button>
                                                                                                                                                                                                    <button class="dropdown-item d-flex align-items-center" is='sortable' :column="'section'">{{ trans('admin.contact.columns.section') }}</button>
                                                                                                                                       </div>
                                     </div>

                                    <div class="dropdown" v-show="(clickedBulkItemsCount > 0) || isClickedAll">
                                         <button  style="border-radius: 0" class="btn btn-danger" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             {{__('Bulk')}} <i class="fa fa-list"></i>
                                         </button>
                                         <div class="dropdown-menu dropdown-menu-right">
                                             <button v-if='clickedBulkItemsCount < 2' @click="edit(editItem)" class="dropdown-item d-flex align-items-center"><i class="icon-pencil p-2"></i> {{ __('Edit') }}</button>
                                                                                             <button  @click="onBulkItemsClickedAll('/admin/contacts')" v-if="(clickedBulkItemsCount < pagination.state.total)" class="dropdown-item d-flex align-items-center"><i class="icon-check p-2"></i> {{ __('Select All Items') }}</button>
                                                <button  @click="onBulkItemsClickedAllUncheck()" class="dropdown-item d-flex align-items-center"><i class="icon-minus p-2"></i> {{ __('Unselect All') }}</button>
                                                <button @click="bulkDelete('/admin/contacts/bulk-destroy')" class="dropdown-item d-flex align-items-center"><i class="icon-trash p-2"></i> {{ __('Delete All') }}</button>
                                                                                     </div>
                                     </div>
                                </span>
                            <input class="form-control"  @change="filter('search', search)" placeholder="{{ trans('brackets/admin-ui::admin.placeholder.search') }}" v-model="search" @keyup.enter="filter('search', $event.target.value)" />
                        </div>
                    </div>
                    <div class="col-sm-auto form-group ">
                        <select class="form-control" v-model="pagination.state.per_page">
                            
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                </div>
            </form>
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <p class="card-title m-0"><i class="icon-list"></i> {{ trans('admin.contact.actions.index') }}</p>
                        </div>
                        <div class="col-auto">
                            <div class="dropdown">
                                <button class="btn p-0 text-white" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-options icon-lg text-muted pb-3px"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <a class="dropdown-item d-flex align-items-center" @click="addNew()" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.contact.actions.create') }}</a>
                                                                            <a class="dropdown-item d-flex align-items-center" href="{{ url('admin/contacts/export') }}" role="button"><i class="fa fa-file-excel-o"></i>&nbsp; {{ trans('admin.contact.actions.export') }}</a>
                                                                    </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-body p-0"  v-cloak>
                    <div class="card-block">
                        <table class="table table-hover">
                            <tbody>
                            <tr v-for="(item, index) in collection" :key="item.id" :class="bulkItems[item.id] ? 'bg-bulk' : ''">
                                                                    <td class="bulk-checkbox">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label">
                                                <input type="checkbox" :id="'enabled' + item.id" v-model="bulkItems[item.id]" v-validate="''" :data-vv-name="'enabled' + item.id"  :name="'enabled' + item.id + '_fake_element'" @click="onBulkItemClicked(item.id); editId(item)" :disabled="bulkCheckingAllLoader" class="form-check-input">
                                                <i class="input-frame"></i>
                                            </label>
                                        </div>
                                    </td>
                                
                                <td>@{{ item.id }}</td>
                                <td>@{{ item.name }}</td>
                                <td>@{{ item.email }}</td>
                                <td>@{{ item.phone }}</td>
                                <td>@{{ item.section }}</td>
                                                            </tr>
                            </tbody>
                        </table>
                        <div class="p-5 text-center" v-if="!collection.length > 0">
                            <i class="icon-magnifier" style="font-size: 50px"></i>
                            <h3 class="mt-3 mb-3">{{ trans('brackets/admin-ui::admin.index.no_items') }}</h3>
                            <p class="mb-3">{{ trans('brackets/admin-ui::admin.index.try_changing_items') }}</p>
                            <button @click="addNew()" class="btn btn-primary" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.contact.actions.create') }}</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" v-if="pagination.state.total > 0">
                <div class="col-sm">
                    <span class="pagination-caption">{{ trans('brackets/admin-ui::admin.pagination.overview') }}</span>
                </div>
                <div class="col-sm-auto">
                    <pagination></pagination>
                </div>
            </div>
        </div>
    </contact-listing>

@endsection
