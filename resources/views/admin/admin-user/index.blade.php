@extends('layout.master')

@section('title', trans('admin.admin-user.actions.index'))

@section('body')

    <admin-user-listing
        :data="{{ $data->toJson() }}"
        :activation="!!'{{ $activation }}'"
        :url="'{{ url('admin/admin-users') }}'"
        inline-template>

        <div>
            <modal name="view" dir="ltr" height="auto" :scrollable="true" @before-close="loadData(); bulkItems=[]">
                <admin-user-form
                    :action="formAction"
                    :data="formData"
                    inline-template>
                    <div>
                        <form @if(auth('admin')->user()->language === 'ar') dir="rtl" @endif class="@if(auth('admin')->user()->language === 'ar') rtl @endif form-horizontal form-create" method="post" @submit.prevent="onSubmit" :action="action" novalidate>
                            <div class="modal-header">
                                <div class="modal-title"><i class="icon-plus"></i> {{trans('admin.admin-user.actions.index')}}</div>
                            </div>

                            <div class="modal-body">
                                @include('admin.admin-user.components.form-elements')
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
                </admin-user-form>
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
                                                <button class="dropdown-item d-flex align-items-center"  is='sortable' :column="'id'">{{ trans('admin.admin-user.columns.id') }}</button>
                                                <button class="dropdown-item d-flex align-items-center"  is='sortable' :column="'first_name'">{{ trans('admin.admin-user.columns.first_name') }}</button>
                                                <button class="dropdown-item d-flex align-items-center"  is='sortable' :column="'last_name'">{{ trans('admin.admin-user.columns.last_name') }}</button>
                                                <button class="dropdown-item d-flex align-items-center"  is='sortable' :column="'email'">{{ trans('admin.admin-user.columns.email') }}</button>
                                                <button class="dropdown-item d-flex align-items-center"  is='sortable' :column="'activated'" v-if="activation">{{ trans('admin.admin-user.columns.activated') }}</button>
                                                <button class="dropdown-item d-flex align-items-center"  is='sortable' :column="'forbidden'">{{ trans('admin.admin-user.columns.forbidden') }}</button>
                                                <button class="dropdown-item d-flex align-items-center"  is='sortable' :column="'language'">{{ trans('admin.admin-user.columns.language') }}</button>
                                         </div>
                                     </div>
                                    <div class="dropdown" v-show="(clickedBulkItemsCount > 0) || isClickedAll">
                                         <button  style="border-radius: 0" class="btn btn-danger" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             {{__('Bulk')}} <i class="fa fa-list"></i>
                                         </button>
                                         <div class="dropdown-menu dropdown-menu-right">
                                            @can('admin.admin-user.impersonal-login')
                                                 <button class="dropdown-item d-flex align-items-center" v-show="editItem.activated" @click="impersonalLogin(editItem.resource_url + '/impersonal-login', editItem)" title="Impersonal login" role="button"><i data-feather="user" class="icon-sm ml-2"></i> <span class="">{{__('Impersonal login')}}</span></button>
                                             @endcan
                                            <button v-if='clickedBulkItemsCount < 2' @click="edit(editItem)" class="dropdown-item d-flex align-items-center"><i class="icon-pencil p-2"></i> {{ __('Edit') }}</button>
                                            <button  @click="onBulkItemsClickedAll('/admin/admin-users')" v-if="(clickedBulkItemsCount < pagination.state.total)" class="dropdown-item d-flex align-items-center"><i class="icon-check p-2"></i> {{ __('Select All Items') }}</button>
                                            <button  @click="onBulkItemsClickedAllUncheck()" class="dropdown-item d-flex align-items-center"><i class="icon-minus p-2"></i> {{ __('Unselect All') }}</button>
                                            <button @click="bulkDelete('/admin/admin-users/bulk-destroy')" class="dropdown-item d-flex align-items-center"><i class="icon-trash p-2"></i> {{ __('Delete All') }}</button>
                                         </div>
                                     </div>
                                </span>
                            <input class="form-control" @change="filter('search', search)" placeholder="{{ trans('brackets/admin-ui::admin.placeholder.search') }}" v-model="search" @keyup.enter="filter('search', $event.target.value)" />
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
                            <p class="card-title m-0"><i class="icon-people"></i> {{ trans('admin.admin-user.actions.index') }}<small> ({{\Brackets\AdminAuth\Models\AdminUser::count()}} {{ trans('admin.admin-user.actions.index') }})</small></p>
                        </div>
                        <div class="col-auto">
                            <div class="dropdown">
                                <button class="btn p-0 text-white" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-options icon-lg text-muted pb-3px"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <a class="dropdown-item d-flex align-items-center" @click="addNew()" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.admin-user.actions.create') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0" v-cloak>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                            <tr v-for="(item, index) in collection">
                                <td class="bulk-checkbox">
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label">
                                            <input type="checkbox" :id="'enabled' + item.id" v-model="bulkItems[item.id]" v-validate="''" :data-vv-name="'enabled' + item.id"  :name="'enabled' + item.id + '_fake_element'" @click="onBulkItemClicked(item.id); editId(item)" :disabled="bulkCheckingAllLoader" class="form-check-input">
                                            <i class="input-frame"></i>
                                        </label>
                                    </div>
                                </td>
                                <td >@{{ item.id }}</td>
                                <td >@{{ item.first_name }}</td>
                                <td >@{{ item.last_name }}</td>
                                <td >@{{ item.email }}</td>
                                <td v-if="activation">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" :id="'activated'+index" class="custom-control-input" v-model="collection[index].activated" @change="toggleSwitch(item.resource_url, 'activated', collection[index])">
                                        <label class="custom-control-label pt-2" :for="'activated'+index">{{__('Activated')}}</label>
                                    </div>
                                </td>
                                <td >
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" :id="'forbidden'+index" class="custom-control-input" v-model="collection[index].forbidden" @change="toggleSwitch(item.resource_url, 'forbidden', collection[index])">
                                        <label class="custom-control-label pt-2" :for="'forbidden'+index">{{__('Forbidden')}}</label>
                                    </div>
                                </td>
                                <td v-if="item.language === 'en'"> <i class="flag-icon flag-icon-us mt-1" title="us"></i> <span class="font-weight-medium ml-1 mr-1">{{__('English')}}</span></td>
                                <td v-else><i class="flag-icon flag-icon-eg pt-2" title="eg"></i> <span class="font-weight-medium ml-1 mr-1">{{__('Arabic')}}</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="no-items-found" v-if="!collection.length > 0">
                        <i class="icon-magnifier"></i>
                        <h3>{{ trans('brackets/admin-ui::admin.index.no_items') }}</h3>
                        <p>{{ trans('brackets/admin-ui::admin.index.try_changing_items') }}</p>
                        <a class="btn btn-primary btn-spinner" href="{{ url('admin/admin-users/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('brackets/admin-ui::admin.btn.new') }} AdminUser</a>
                    </div>
                </div>
            </div>
            <div class="row" v-if="pagination.state.total > 0">
                <div class="col-sm m-1">
                    <span class="pagination-caption">{{ trans('brackets/admin-ui::admin.pagination.overview') }}</span>
                </div>
                <div class="col-sm-auto m-1">
                    <pagination></pagination>
                </div>
            </div>
        </div>
    </admin-user-listing>

@endsection
