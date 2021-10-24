<div class="form-group align-items-center" :class="{'has-danger': errors.has('first_name'), 'has-success': fields.first_name && fields.first_name.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.first_name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('first_name'), 'form-control-success': fields.first_name && fields.first_name.valid}" id="first_name" name="first_name" placeholder="{{ trans('admin.customer.columns.first_name') }}">
        </div>
        <div v-if="errors.has('first_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('first_name') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('last_name'), 'has-success': fields.last_name && fields.last_name.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.last_name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('last_name'), 'form-control-success': fields.last_name && fields.last_name.valid}" id="last_name" name="last_name" placeholder="{{ trans('admin.customer.columns.last_name') }}">
        </div>
        <div v-if="errors.has('last_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('last_name') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('phone'), 'has-success': fields.phone && fields.phone.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.phone" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('phone'), 'form-control-success': fields.phone && fields.phone.valid}" id="phone" name="phone" placeholder="{{ trans('admin.customer.columns.phone') }}">
        </div>
        <div v-if="errors.has('phone')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('phone') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('email'), 'has-success': fields.email && fields.email.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.email" v-validate="'email'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('email'), 'form-control-success': fields.email && fields.email.valid}" id="email" name="email" placeholder="{{ trans('admin.customer.columns.email') }}">
        </div>
        <div v-if="errors.has('email')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('email') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('address'), 'has-success': fields.address && fields.address.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <textarea placeholder="{{ trans('admin.customer.columns.address') }}" class="form-control" v-model="form.address" v-validate="'required'" id="address" name="address"></textarea>
        </div>
        <div v-if="errors.has('address')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('address') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('county_id'), 'has-success': fields.county_id && fields.county_id.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.county_id" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('county_id'), 'form-control-success': fields.county_id && fields.county_id.valid}" id="county_id" name="county_id" placeholder="{{ trans('admin.customer.columns.county_id') }}">
        </div>
        <div v-if="errors.has('county_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('county_id') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('gov_id'), 'has-success': fields.gov_id && fields.gov_id.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.gov_id" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('gov_id'), 'form-control-success': fields.gov_id && fields.gov_id.valid}" id="gov_id" name="gov_id" placeholder="{{ trans('admin.customer.columns.gov_id') }}">
        </div>
        <div v-if="errors.has('gov_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('gov_id') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('city_id'), 'has-success': fields.city_id && fields.city_id.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.city_id" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('city_id'), 'form-control-success': fields.city_id && fields.city_id.valid}" id="city_id" name="city_id" placeholder="{{ trans('admin.customer.columns.city_id') }}">
        </div>
        <div v-if="errors.has('city_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('city_id') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('info'), 'has-success': fields.info && fields.info.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <textarea placeholder="{{ trans('admin.customer.columns.info') }}" class="form-control" v-model="form.info" v-validate="''" id="info" name="info"></textarea>
        </div>
        <div v-if="errors.has('info')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('info') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('password'), 'has-success': fields.password && fields.password.valid }">
    <div class="input-group">
        <span class="input-group-prepend">
            <span class="input-group-text"><i class="icon-user"></i></span>
        </span>
        <input type="password" v-model="form.password" v-validate="'min:7'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('password'), 'form-control-success': fields.password && fields.password.valid}" id="password" name="password" placeholder="{{ trans('admin.customer.columns.password') }}" ref="password">
    </div>
    <div v-if="errors.has('password')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('password') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('password_confirmation'), 'has-success': fields.password_confirmation && fields.password_confirmation.valid }">
    <div class="input-group">
        <span class="input-group-prepend">
            <span class="input-group-text"><i class="icon-user"></i></span>
        </span>
        <input type="password" v-model="form.password_confirmation" v-validate="'confirmed:password|min:7'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('password_confirmation'), 'form-control-success': fields.password_confirmation && fields.password_confirmation.valid}" id="password_confirmation" name="password_confirmation" placeholder="{{ trans('admin.customer.columns.password') }}" data-vv-as="password">
    </div>
    <div v-if="errors.has('password_confirmation')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('password_confirmation') }}</div>

</div>

<div class="form-check row" :class="{'has-danger': errors.has('login'), 'has-success': fields.login && fields.login.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <div class="form-check form-check-flat form-check-primary">
            <label class="form-check-label">
                <input type="checkbox" id="login" v-model="form.login" v-validate="''" data-vv-name="'login'"  name="login_fake_element" class="form-check-input">
                <i class="input-frame"></i>
                {{ trans('admin.customer.columns.login') }}
            </label>
        </div>
        <div v-if="errors.has('login')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('login') }}</div>
    </div>
</div>


