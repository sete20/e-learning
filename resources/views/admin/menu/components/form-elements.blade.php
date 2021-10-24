<div class="form-group align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.menu.columns.name') }}">
        </div>
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('description'), 'has-success': fields.description && fields.description.valid }">
    <label for="description" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.menu.columns.description') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <wysiwyg v-model="form.description" v-validate="'required'" id="description" name="description" :config="mediaWysiwygConfig"></wysiwyg>
        </div>
        <div v-if="errors.has('description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('description') }}</div>
    </div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('area'), 'has-success': fields.area && fields.area.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.area" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('area'), 'form-control-success': fields.area && fields.area.valid}" id="area" name="area" placeholder="{{ trans('admin.menu.columns.area') }}">
        </div>
        <div v-if="errors.has('area')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('area') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('items'), 'has-success': fields.items && fields.items.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <textarea placeholder="{{ trans('admin.menu.columns.items') }}" class="form-control" v-model="form.items" v-validate="'required'" id="items" name="items"></textarea>
        </div>
        <div v-if="errors.has('items')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('items') }}</div>
</div>


