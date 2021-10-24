<div class="form-group align-items-center"
     :class="{'has-danger': errors.has('class_id'), 'has-success': fields.class_id && fields.class_id.valid }">
    <multiselect
        v-model="form.class_id"
        placeholder="{{ trans('admin.user.columns.class_id') }}"
        label="name"
        track-by="id"
        :options="{{$classes->toJson()}}"
        :multiple="false"
        open-direction="bottom"></multiselect>
    <div v-if="errors.has('class_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('class_id') }}</div>
</div>
