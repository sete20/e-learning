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
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.material.columns.name') }}">
        </div>
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
</div>


