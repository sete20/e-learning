<div class="form-group align-items-center" :class="{'has-danger': errors.has('test_id'), 'has-success': fields.test_id && fields.test_id.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.test_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('test_id'), 'form-control-success': fields.test_id && fields.test_id.valid}" id="test_id" name="test_id" placeholder="{{ trans('admin.tests-solf.columns.test_id') }}">
        </div>
        <div v-if="errors.has('test_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('test_id') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('user_id'), 'has-success': fields.user_id && fields.user_id.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.user_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('user_id'), 'form-control-success': fields.user_id && fields.user_id.valid}" id="user_id" name="user_id" placeholder="{{ trans('admin.tests-solf.columns.user_id') }}">
        </div>
        <div v-if="errors.has('user_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('user_id') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('solve'), 'has-success': fields.solve && fields.solve.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <textarea placeholder="{{ trans('admin.tests-solf.columns.solve') }}" class="form-control" v-model="form.solve" v-validate="'required'" id="solve" name="solve"></textarea>
        </div>
        <div v-if="errors.has('solve')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('solve') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('grade'), 'has-success': fields.grade && fields.grade.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.grade" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('grade'), 'form-control-success': fields.grade && fields.grade.valid}" id="grade" name="grade" placeholder="{{ trans('admin.tests-solf.columns.grade') }}">
        </div>
        <div v-if="errors.has('grade')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('grade') }}</div>
</div>


