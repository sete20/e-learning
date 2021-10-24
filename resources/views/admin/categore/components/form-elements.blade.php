<div class="form-group align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.categore.columns.name') }}">
        </div>
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('slug'), 'has-success': fields.slug && fields.slug.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.slug" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('slug'), 'form-control-success': fields.slug && fields.slug.valid}" id="slug" name="slug" placeholder="{{ trans('admin.categore.columns.slug') }}">
        </div>
        <div v-if="errors.has('slug')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('slug') }}</div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('is_published'), 'has-success': fields.is_published && fields.is_published.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <div class="form-check form-check-flat form-check-primary">
            <label class="form-check-label">
                <input type="checkbox" id="is_published" v-model="form.is_published" v-validate="''" data-vv-name="'is_published'"  name="is_published_fake_element" class="form-check-input">
                <i class="input-frame"></i>
                {{ trans('admin.categore.columns.is_published') }}
            </label>
        </div>
        <div v-if="errors.has('is_published')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('is_published') }}</div>
    </div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('seo_description'), 'has-success': fields.seo_description && fields.seo_description.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.seo_description" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('seo_description'), 'form-control-success': fields.seo_description && fields.seo_description.valid}" id="seo_description" name="seo_description" placeholder="{{ trans('admin.categore.columns.seo_description') }}">
        </div>
        <div v-if="errors.has('seo_description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('seo_description') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('seo_keywords'), 'has-success': fields.seo_keywords && fields.seo_keywords.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.seo_keywords" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('seo_keywords'), 'form-control-success': fields.seo_keywords && fields.seo_keywords.valid}" id="seo_keywords" name="seo_keywords" placeholder="{{ trans('admin.categore.columns.seo_keywords') }}">
        </div>
        <div v-if="errors.has('seo_keywords')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('seo_keywords') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('seo_title'), 'has-success': fields.seo_title && fields.seo_title.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.seo_title" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('seo_title'), 'form-control-success': fields.seo_title && fields.seo_title.valid}" id="seo_title" name="seo_title" placeholder="{{ trans('admin.categore.columns.seo_title') }}">
        </div>
        <div v-if="errors.has('seo_title')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('seo_title') }}</div>
</div>


