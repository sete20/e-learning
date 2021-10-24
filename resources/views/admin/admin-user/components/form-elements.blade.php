<div class="row">
    <div class="col-md-6">
        <div class="form-group align-items-center" :class="{'has-danger': errors.has('first_name'), 'has-success': fields.first_name && fields.first_name.valid }">
            <div class="input-group">
        <span class="input-group-prepend">
            <span class="input-group-text"><i class="icon-user"></i> </span>
        </span>
                <input type="text" v-model="form.first_name" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('first_name'), 'form-control-success': fields.first_name && fields.first_name.valid}" id="first_name" name="first_name" placeholder="{{ trans('admin.admin-user.columns.first_name') }}">
            </div>
            <div v-if="errors.has('first_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('first_name') }}</div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group align-items-center" :class="{'has-danger': errors.has('last_name'), 'has-success': fields.last_name && fields.last_name.valid }">
            <div class="input-group">
        <span class="input-group-prepend">
            <span class="input-group-text"><i class="icon-people"></i> </span>
        </span>
                <input type="text" v-model="form.last_name" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('last_name'), 'form-control-success': fields.last_name && fields.last_name.valid}" id="last_name" name="last_name" placeholder="{{ trans('admin.admin-user.columns.last_name') }}">
            </div>
            <div v-if="errors.has('last_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('last_name') }}</div>
        </div>
    </div>
</div>
<div class="form-group align-items-center" :class="{'has-danger': errors.has('email'), 'has-success': fields.email && fields.email.valid }">
    <div class="input-group">
        <span class="input-group-prepend">
            <span class="input-group-text"><i class="icon-envelope"></i> </span>
        </span>
        <input type="text" v-model="form.email" v-validate="'required|email'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('email'), 'form-control-success': fields.email && fields.email.valid}" id="email" name="email" placeholder="{{ trans('admin.admin-user.columns.email') }}">
    </div>
    <div v-if="errors.has('email')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('email') }}</div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group align-items-center" :class="{'has-danger': errors.has('password'), 'has-success': fields.password && fields.password.valid }">
            <div class="input-group">
        <span class="input-group-prepend">
            <span class="input-group-text"><i class="icon-lock"></i> </span>
        </span>
                <input type="password" v-model="form.password" v-validate="'min:7'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('password'), 'form-control-success': fields.password && fields.password.valid}" id="password" name="password" placeholder="{{ trans('admin.admin-user.columns.password') }}" ref="password">
            </div>
            <div v-if="errors.has('password')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('password') }}</div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group align-items-center" :class="{'has-danger': errors.has('password_confirmation'), 'has-success': fields.password_confirmation && fields.password_confirmation.valid }">
            <div class="input-group">
        <span class="input-group-prepend">
            <span class="input-group-text"><i class="icon-lock"></i> </span>
        </span>
                <input type="password" v-model="form.password_confirmation" v-validate="'confirmed:password|min:7'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('password_confirmation'), 'form-control-success': fields.password_confirmation && fields.password_confirmation.valid}" id="password_confirmation" name="password_confirmation" placeholder="{{ trans('admin.admin-user.columns.password') }}" data-vv-as="password">
            </div>
            <div v-if="errors.has('password_confirmation')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('password_confirmation') }}</div>
        </div>
    </div>
</div>

<div class="form-group" :class="{'has-danger': errors.has('activated'), 'has-success': fields.activated && fields.activated.valid }">
    <div class="form-check form-check-flat form-check-primary">
        <label class="form-check-label">
            <input type="checkbox" id="activated" v-model="form.activated" v-validate="''" data-vv-name="activated"  name="activated_fake_element" class="form-check-input">
            <i class="input-frame"></i>
            {{ trans('admin.admin-user.columns.activated') }}
        </label>
    </div>
    <div v-if="errors.has('activated')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('activated') }}</div>
</div>

<div class="form-group" :class="{'has-danger': errors.has('forbidden'), 'has-success': fields.forbidden && fields.forbidden.valid }">
    <div class="form-check form-check-flat form-check-primary">
        <label class="form-check-label">
            <input type="checkbox" id="forbidden" v-model="form.forbidden" v-validate="''" data-vv-name="forbidden"  name="forbidden_fake_element" class="form-check-input">
            <i class="input-frame"></i>
            {{ trans('admin.admin-user.columns.forbidden') }}
        </label>
    </div>
    <div v-if="errors.has('forbidden')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('forbidden') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('language'), 'has-success': fields.language && fields.language.valid }">
    <multiselect v-model="form.language" placeholder="{{ trans('admin.admin-user.columns.language') }}" :options="{{ $locales->toJson() }}" open-direction="bottom"></multiselect>
    <div v-if="errors.has('language')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('language') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('roles'), 'has-success': fields.roles && fields.roles.valid }">
    <multiselect v-model="form.roles" placeholder="{{ trans('admin.admin-user.columns.roles') }}" label="name" track-by="id" :options="{{ $roles->toJson() }}" :multiple="true" open-direction="bottom"></multiselect>
    <div v-if="errors.has('roles')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('roles') }}</div>
</div>
