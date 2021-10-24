<div class="form-group align-items-center" :class="{'has-danger': errors.has('user_id'), 'has-success': fields.user_id && fields.user_id.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.user_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('user_id'), 'form-control-success': fields.user_id && fields.user_id.valid}" id="user_id" name="user_id" placeholder="{{ trans('admin.order.columns.user_id') }}">
        </div>
        <div v-if="errors.has('user_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('user_id') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.order.columns.name') }}">
        </div>
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('uuid'), 'has-success': fields.uuid && fields.uuid.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <textarea placeholder="{{ trans('admin.order.columns.uuid') }}" class="form-control" v-model="form.uuid" v-validate="'required'" id="uuid" name="uuid"></textarea>
        </div>
        <div v-if="errors.has('uuid')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('uuid') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('phone'), 'has-success': fields.phone && fields.phone.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.phone" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('phone'), 'form-control-success': fields.phone && fields.phone.valid}" id="phone" name="phone" placeholder="{{ trans('admin.order.columns.phone') }}">
        </div>
        <div v-if="errors.has('phone')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('phone') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('total'), 'has-success': fields.total && fields.total.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.total" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('total'), 'form-control-success': fields.total && fields.total.valid}" id="total" name="total" placeholder="{{ trans('admin.order.columns.total') }}">
        </div>
        <div v-if="errors.has('total')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('total') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('refund'), 'has-success': fields.refund && fields.refund.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.refund" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('refund'), 'form-control-success': fields.refund && fields.refund.valid}" id="refund" name="refund" placeholder="{{ trans('admin.order.columns.refund') }}">
        </div>
        <div v-if="errors.has('refund')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('refund') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('payment'), 'has-success': fields.payment && fields.payment.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.payment" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('payment'), 'form-control-success': fields.payment && fields.payment.valid}" id="payment" name="payment" placeholder="{{ trans('admin.order.columns.payment') }}">
        </div>
        <div v-if="errors.has('payment')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('payment') }}</div>
</div>


