<div class="form-group align-items-center" :class="{'has-danger': errors.has('user_id'), 'has-success': fields.user_id && fields.user_id.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.user_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('user_id'), 'form-control-success': fields.user_id && fields.user_id.valid}" id="user_id" name="user_id" placeholder="{{ trans('admin.payment.columns.user_id') }}">
        </div>
        <div v-if="errors.has('user_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('user_id') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('order_id'), 'has-success': fields.order_id && fields.order_id.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.order_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('order_id'), 'form-control-success': fields.order_id && fields.order_id.valid}" id="order_id" name="order_id" placeholder="{{ trans('admin.payment.columns.order_id') }}">
        </div>
        <div v-if="errors.has('order_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('order_id') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('teacher_id'), 'has-success': fields.teacher_id && fields.teacher_id.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.teacher_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('teacher_id'), 'form-control-success': fields.teacher_id && fields.teacher_id.valid}" id="teacher_id" name="teacher_id" placeholder="{{ trans('admin.payment.columns.teacher_id') }}">
        </div>
        <div v-if="errors.has('teacher_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('teacher_id') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.payment.columns.name') }}">
        </div>
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('phone'), 'has-success': fields.phone && fields.phone.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.phone" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('phone'), 'form-control-success': fields.phone && fields.phone.valid}" id="phone" name="phone" placeholder="{{ trans('admin.payment.columns.phone') }}">
        </div>
        <div v-if="errors.has('phone')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('phone') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('total'), 'has-success': fields.total && fields.total.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.total" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('total'), 'form-control-success': fields.total && fields.total.valid}" id="total" name="total" placeholder="{{ trans('admin.payment.columns.total') }}">
        </div>
        <div v-if="errors.has('total')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('total') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('discount'), 'has-success': fields.discount && fields.discount.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.discount" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('discount'), 'form-control-success': fields.discount && fields.discount.valid}" id="discount" name="discount" placeholder="{{ trans('admin.payment.columns.discount') }}">
        </div>
        <div v-if="errors.has('discount')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('discount') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('payment'), 'has-success': fields.payment && fields.payment.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.payment" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('payment'), 'form-control-success': fields.payment && fields.payment.valid}" id="payment" name="payment" placeholder="{{ trans('admin.payment.columns.payment') }}">
        </div>
        <div v-if="errors.has('payment')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('payment') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('provider'), 'has-success': fields.provider && fields.provider.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.provider" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('provider'), 'form-control-success': fields.provider && fields.provider.valid}" id="provider" name="provider" placeholder="{{ trans('admin.payment.columns.provider') }}">
        </div>
        <div v-if="errors.has('provider')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('provider') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('provider_id'), 'has-success': fields.provider_id && fields.provider_id.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.provider_id" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('provider_id'), 'form-control-success': fields.provider_id && fields.provider_id.valid}" id="provider_id" name="provider_id" placeholder="{{ trans('admin.payment.columns.provider_id') }}">
        </div>
        <div v-if="errors.has('provider_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('provider_id') }}</div>
</div>


