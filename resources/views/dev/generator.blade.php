@extends('layout.master')

@section('title', __('Plugins Manager'))

@section('body')

    <generator :data="{{$data->toJson()}}"
               :url="'{{ url('admin/plugins') }}'"
               inline-template>
        <div>
            <modal name="packages" dir="ltr" height="auto" :scrollable="true">
                <div class="list-group-flush @if(auth('admin')->user()->language === 'ar') rtl @endif"   @if(auth('admin')->user()->language === 'ar') dir="rtl" @endif>
                    @if(auth('admin')->user()->language === 'ar')
                        <div class="list-group-item"><i class="icon-user"></i> <b>{{__('Package: ')}}</b> @{{ info.ar }}</div>
                        <div class="list-group-item"><i class="icon-info"></i> <b>{{__('Description: ')}}</b> @{{ info.description_ar }}</div>
                    @else
                        <div class="list-group-item"><i class="icon-user"></i> <b>{{__('Package: ')}}</b> @{{ info.name }}</div>
                        <div class="list-group-item"><i class="icon-info"></i> <b>{{__('Description: ')}}</b> @{{ info.description }}</div>
                    @endif

                </div>
            </modal>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <p class="card-title m-0"><i class="icon-layers"></i> {{ __('Plugins Manager') }}</p>
                    </div>
                </div>
                <div class="card-body" v-cloak>
                    <div class="card-block container">
                        <div class="row">
                            <div class=" col-md-4" v-for="(item, key) in collection">
                                <div class="card m-2">
                                    <div class="card-body text-center">
                                        <i :class="item.info.icon +' text-primary'" style="font-size: 50px"></i>
                                        @if(auth('admin')->user()->language === 'ar')
                                        <h4 class="mt-3">@{{ item.info.ar }}</h4><small>{{__('By: ')}}@{{ item.vendor }}</small>
                                        @else
                                        <h4 class="mt-3">@{{ item.info.name }}</h4><small>{{__('By: ')}}@{{ item.vendor }}</small>
                                        @endif
                                    </div>
                                    <div class="card-footer text-center">
                                        <button class="btn btn-primary btn-rounded" @click="showPackages(item)"><i class="icon-info"></i></button>
                                        <button v-if="!item.active" class="btn btn-success btn-rounded" @click="activePackage(item)"><i class="icon-check"></i></button>
                                        <button v-else class="btn btn-danger btn-rounded" @click="inactivePackage(item)"><i class="icon-close"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <div class="row" v-if="pagination.state.total > 0">
                    <div class="col-sm m-1">
                        <span class="pagination-caption">{{ trans('brackets/admin-ui::admin.pagination.overview') }}</span>
                    </div>
                    <div class="col-sm-auto m-1">
                        <pagination></pagination>
                    </div>
                </div>
            </div>
        </div>
    </generator>

@endsection
