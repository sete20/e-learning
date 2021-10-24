<div class="mb-3">
    <div class="card-header">
        <i class="fa fa-file-image-o"></i>
        <small>{{ trans('brackets/admin-ui::admin.media_uploader.max_number_of_files', ['max' => 1]) }}</small>
        <small>{{ trans('brackets/admin-ui::admin.media_uploader.max_size_pre_file', ['maxFileSize' => 1]) }}</small>
    </div>
    <vue-upload @upload="form.image = $event" :files="form.holder"></vue-upload>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-info"></i></span>
            </span>
            <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event); form.slug = vueSlug(form.name)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.course.columns.name') }}">
        </div>
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('slug'), 'has-success': fields.slug && fields.slug.valid }">
        <div class="input-group">
            <input type="text" v-model="form.slug" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('slug'), 'form-control-success': fields.slug && fields.slug.valid}" id="slug" name="slug" placeholder="{{ trans('admin.course.columns.slug') }}">
            <span class="input-group-append">
                <span class="input-group-text" dir="ltr">
                    {{url('/')}} /courses/
                </span>
            </span>
        </div>
        <div v-if="errors.has('slug')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('slug') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('description'), 'has-success': fields.description && fields.description.valid }">
    <label for="description">{{ trans('admin.course.columns.description') }}</label>
    <wysiwyg v-model="form.description" v-validate="'required'" id="description" name="description" :config="mediaWysiwygConfig"></wysiwyg>
    <div v-if="errors.has('description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('description') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('price'), 'has-success': fields.price && fields.price.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-wallet"></i></span>
            </span>
            <input type="text" v-model="form.price" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('price'), 'form-control-success': fields.price && fields.price.valid}" id="price" name="price" placeholder="{{ trans('admin.course.columns.price') }}">
        </div>
        <div v-if="errors.has('price')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('price') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('discount'), 'has-success': fields.discount && fields.discount.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-badge"></i></span>
            </span>
            <input type="text" v-model="form.discount" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('discount'), 'form-control-success': fields.discount && fields.discount.valid}" id="discount" name="discount" placeholder="{{ trans('admin.course.columns.discount') }}">
        </div>
        <div v-if="errors.has('discount')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('discount') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('times'), 'has-success': fields.times && fields.times.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-clock"></i></span>
            </span>
            <textarea placeholder="{{ trans('admin.course.columns.times') }}" class="form-control" v-model="form.times" v-validate="'required'" id="times" name="times"></textarea>
        </div>
        <div v-if="errors.has('times')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('times') }}</div>
</div>

