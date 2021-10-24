<div class="form-group align-items-center" :class="{'has-danger': errors.has('user_id'), 'has-success': fields.user_id && fields.user_id.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.user_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('user_id'), 'form-control-success': fields.user_id && fields.user_id.valid}" id="user_id" name="user_id" placeholder="{{ trans('admin.comment.columns.user_id') }}">
        </div>
        <div v-if="errors.has('user_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('user_id') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('post_id'), 'has-success': fields.post_id && fields.post_id.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.post_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('post_id'), 'form-control-success': fields.post_id && fields.post_id.valid}" id="post_id" name="post_id" placeholder="{{ trans('admin.comment.columns.post_id') }}">
        </div>
        <div v-if="errors.has('post_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('post_id') }}</div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('body'), 'has-success': fields.body && fields.body.valid }">
    <label for="body" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.comment.columns.body') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <wysiwyg v-model="form.body" v-validate="'required'" id="body" name="body" :config="mediaWysiwygConfig"></wysiwyg>
        </div>
        <div v-if="errors.has('body')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('body') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('is_published'), 'has-success': fields.is_published && fields.is_published.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <div class="form-check form-check-flat form-check-primary">
            <label class="form-check-label">
                <input type="checkbox" id="is_published" v-model="form.is_published" v-validate="''" data-vv-name="'is_published'"  name="is_published_fake_element" class="form-check-input">
                <i class="input-frame"></i>
                {{ trans('admin.comment.columns.is_published') }}
            </label>
        </div>
        <div v-if="errors.has('is_published')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('is_published') }}</div>
    </div>
</div>


