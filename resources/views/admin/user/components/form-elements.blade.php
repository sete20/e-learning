<div class="mb-3">
    <div class="card-header">
        <i class="fa fa-file-image-o"></i>
        <small>{{ trans('brackets/admin-ui::admin.media_uploader.max_number_of_files', ['max' => 1]) }}</small>
        <small>{{ trans('brackets/admin-ui::admin.media_uploader.max_size_pre_file', ['maxFileSize' => 1]) }}</small>
    </div>
    <vue-upload @upload="form.image = $event" :files="form.holder"></vue-upload>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.user.columns.name') }}">
        </div>
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('email'), 'has-success': fields.email && fields.email.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-envelope"></i></span>
            </span>
            <input type="text" v-model="form.email" v-validate="'required|email'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('email'), 'form-control-success': fields.email && fields.email.valid}" id="email" name="email" placeholder="{{ trans('admin.user.columns.email') }}">
        </div>
        <div v-if="errors.has('email')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('email') }}</div>
</div>


<div class="form-group align-items-center" :class="{'has-danger': errors.has('password'), 'has-success': fields.password && fields.password.valid }">
    <div class="input-group">
        <span class="input-group-prepend">
            <span class="input-group-text"><i class="icon-lock"></i></span>
        </span>
        <input type="password" v-model="form.password" v-validate="'min:7'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('password'), 'form-control-success': fields.password && fields.password.valid}" id="password" name="password" placeholder="{{ trans('admin.user.columns.password') }}" ref="password">
    </div>
    <div v-if="errors.has('password')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('password') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('password_confirmation'), 'has-success': fields.password_confirmation && fields.password_confirmation.valid }">
    <div class="input-group">
        <span class="input-group-prepend">
            <span class="input-group-text"><i class="icon-lock"></i></span>
        </span>
        <input type="password" v-model="form.password_confirmation" v-validate="'confirmed:password|min:7'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('password_confirmation'), 'form-control-success': fields.password_confirmation && fields.password_confirmation.valid}" id="password_confirmation" name="password_confirmation" placeholder="{{ trans('admin.user.columns.password') }}" data-vv-as="password">
    </div>
    <div v-if="errors.has('password_confirmation')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('password_confirmation') }}</div>

</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('phone'), 'has-success': fields.phone && fields.phone.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-phone"></i></span>
            </span>
            <input type="text" v-model="form.phone" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('phone'), 'form-control-success': fields.phone && fields.phone.valid}" id="phone" name="phone" placeholder="{{ trans('admin.user.columns.phone') }}">
        </div>
        <div v-if="errors.has('phone')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('phone') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('other_phone'), 'has-success': fields.other_phone && fields.other_phone.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-phone"></i></span>
            </span>
            <input type="text" v-model="form.other_phone" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('other_phone'), 'form-control-success': fields.other_phone && fields.other_phone.valid}" id="other_phone" name="other_phone" placeholder="{{ trans('admin.user.columns.other_phone') }}">
        </div>
        <div v-if="errors.has('other_phone')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('other_phone') }}</div>
</div>

<div class="form-group align-items-center"
     :class="{'has-danger': errors.has('type'), 'has-success': fields.type && fields.type.valid }">
    <multiselect
        v-model="form.type"
        placeholder="{{ trans('admin.user.columns.type') }}"
        label="name"
        track-by="id"
        :options="[
            {id: 'm', name: '{{__('Male')}}'},
            {id: 'f', name: '{{__('Female')}}'}
        ]"
        :multiple="false"
        open-direction="bottom"></multiselect>
    <div v-if="errors.has('type')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('material_id') }}</div>
</div>


<x-classes-select></x-classes-select>


