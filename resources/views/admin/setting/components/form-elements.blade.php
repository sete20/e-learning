<div class="form-group  align-items-center" :class="{'has-danger': errors.has('key'), 'has-success': fields.key && fields.key.valid }">
    <div class="input-group">
        <span class="input-group-text"><i class="icon-key"></i></span>
        <input type="text" v-model="form.key" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('key'), 'form-control-success': fields.key && fields.key.valid}" id="key" name="key" placeholder="{{ trans('admin.setting.columns.key') }}">
    </div>
    <div v-if="errors.has('key')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('key') }}</div>
</div>
<div class="form-group align-items-center" :class="{'has-danger': errors.has('group'), 'has-success': fields.group && fields.group.valid }">
    <div class="input-group">
        <span class="input-group-text"><i class="icon-layers"></i></span>
        <input type="text" v-model="form.group" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('group'), 'form-control-success': fields.group && fields.group.valid}" id="group" name="group" placeholder="{{ trans('admin.setting.columns.group') }}">
    </div>
    <div v-if="errors.has('group')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('group') }}</div>
</div>
<div class="form-group align-items-center" :class="{'has-danger': errors.has('value'), 'has-success': fields.value && fields.value.valid }">
    <div class="input-group">
        <span class="input-group-text"><i class="icon-info"></i></span>
        <textarea v-model="form.value" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('value'), 'form-control-success': fields.value && fields.value.valid}" id="value" name="value" placeholder="{{ trans('admin.setting.columns.value') }}"></textarea>
    </div>
    <div v-if="errors.has('value')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('value') }}</div>
</div>
