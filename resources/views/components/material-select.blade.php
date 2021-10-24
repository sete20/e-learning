<div class="form-group align-items-center"
     :class="{'has-danger': errors.has('material_id'), 'has-success': fields.material_id && fields.material_id.valid }">
    <multiselect
        v-model="form.material_id"
        placeholder="{{ trans('admin.teacher.columns.material_id') }}"
        label="name"
        track-by="id"
        :options="{{$materials->toJson()}}"
        :multiple="false"
        open-direction="bottom"></multiselect>
    <div v-if="errors.has('material_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('material_id') }}</div>
</div>
