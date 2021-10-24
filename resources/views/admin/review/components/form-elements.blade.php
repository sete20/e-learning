<div class="form-group align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.review.columns.name') }}">
        </div>
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('job'), 'has-success': fields.job && fields.job.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.job" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('job'), 'form-control-success': fields.job && fields.job.valid}" id="job" name="job" placeholder="{{ trans('admin.review.columns.job') }}">
        </div>
        <div v-if="errors.has('job')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('job') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('review'), 'has-success': fields.review && fields.review.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.review" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('review'), 'form-control-success': fields.review && fields.review.valid}" id="review" name="review" placeholder="{{ trans('admin.review.columns.review') }}">
        </div>
        <div v-if="errors.has('review')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('review') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('image'), 'has-success': fields.image && fields.image.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <textarea placeholder="{{ trans('admin.review.columns.image') }}" class="form-control" v-model="form.image" v-validate="''" id="image" name="image"></textarea>
        </div>
        <div v-if="errors.has('image')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('image') }}</div>
</div>


