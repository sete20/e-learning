<div class="form-group align-items-center"
     :class="{'has-danger': errors.has('teacher_id'), 'has-success': fields.teacher_id && fields.teacher_id.valid }">
    <multiselect
        v-model="form.teacher_id"
        placeholder="{{ trans('admin.course.columns.teacher_id') }}"
        label="name"
        track-by="id"
        :options="{{$teachers->toJson()}}"
        :multiple="false"
        open-direction="bottom"></multiselect>
    <div v-if="errors.has('teacher_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('teacher_id') }}</div>
</div>
