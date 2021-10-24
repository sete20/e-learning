<div class="form-group align-items-center" :class="{'has-danger': errors.has('course_id'), 'has-success': fields.course_id && fields.course_id.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.course_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('course_id'), 'form-control-success': fields.course_id && fields.course_id.valid}" id="course_id" name="course_id" placeholder="{{ trans('admin.test.columns.course_id') }}">
        </div>
        <div v-if="errors.has('course_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('course_id') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('teacher_id'), 'has-success': fields.teacher_id && fields.teacher_id.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.teacher_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('teacher_id'), 'form-control-success': fields.teacher_id && fields.teacher_id.valid}" id="teacher_id" name="teacher_id" placeholder="{{ trans('admin.test.columns.teacher_id') }}">
        </div>
        <div v-if="errors.has('teacher_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('teacher_id') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.test.columns.name') }}">
        </div>
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('description'), 'has-success': fields.description && fields.description.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.description" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('description'), 'form-control-success': fields.description && fields.description.valid}" id="description" name="description" placeholder="{{ trans('admin.test.columns.description') }}">
        </div>
        <div v-if="errors.has('description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('description') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('test'), 'has-success': fields.test && fields.test.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <textarea placeholder="{{ trans('admin.test.columns.test') }}" class="form-control" v-model="form.test" v-validate="'required'" id="test" name="test"></textarea>
        </div>
        <div v-if="errors.has('test')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('test') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('grade'), 'has-success': fields.grade && fields.grade.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.grade" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('grade'), 'form-control-success': fields.grade && fields.grade.valid}" id="grade" name="grade" placeholder="{{ trans('admin.test.columns.grade') }}">
        </div>
        <div v-if="errors.has('grade')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('grade') }}</div>
</div>


