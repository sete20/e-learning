@extends('layout.teacher.master')

@section('title', trans('admin.admin-user.actions.edit_profile'))

@section('body')

    <div class="container-xl">

        <div class="card">

            <profile-edit-profile-form
                :action="'{{ url('teacher/profile') }}'"
                :data="{{ $adminUser->toJson() }}"

                inline-template>

                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action">

                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.admin-user.actions.edit_profile') }}
                    </div>

                    <div class="card-body">

                        <div>
                            <div class="avatar-upload">
                                <div class="card-header">
                                    <i class="fa fa-file-image-o"></i>
                                    <small>{{ trans('brackets/admin-ui::admin.media_uploader.max_number_of_files', ['max' => 1]) }}</small>
                                    <small>{{ trans('brackets/admin-ui::admin.media_uploader.max_size_pre_file', ['maxFileSize' => 1]) }}</small>
                                </div>
                                <vue-upload @upload="form.image = $event" :files="form.holder"></vue-upload>
                            </div>

                            <div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
                                <label for="first_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-3'">{{ __('Name') }}</label>
                                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-7'">
                                    <input type="text" v-model="form.name" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ __('Name') }}">
                                    <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
                                </div>
                            </div>

                            <div class="form-group row align-items-center" :class="{'has-danger': errors.has('email'), 'has-success': fields.email && fields.email.valid }">
                                <label for="email" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-3'">{{ trans('admin.admin-user.columns.email') }}</label>
                                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-7'">
                                    <input type="text" v-model="form.email" v-validate="'required|email'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('email'), 'form-control-success': fields.email && fields.email.valid}" id="email" name="email" placeholder="{{ trans('admin.admin-user.columns.email') }}">
                                    <div v-if="errors.has('email')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('email') }}</div>
                                </div>
                            </div>

                            <div class="form-group row align-items-center" :class="{'has-danger': errors.has('phone'), 'has-success': fields.phone && fields.phone.valid }">
                                <label for="last_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-3'">{{ __('Phone') }}</label>
                                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-7'">
                                    <input type="text" v-model="form.phone" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('phone'), 'form-control-success': fields.phone && fields.phone.valid}" id="phone" name="phone" placeholder="{{ __('Phone') }}">
                                    <div v-if="errors.has('phone')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('phone') }}</div>
                                </div>
                            </div>

                            <x-material-select></x-material-select>

                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>

                </form>

            </profile-edit-profile-form>

        </div>

    </div>

@endsection
