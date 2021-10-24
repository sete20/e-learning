<div class="form-group align-items-center" :class="{'has-danger': errors.has('title'), 'has-success': fields.title && fields.title.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" v-model="form.title" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('title'), 'form-control-success': fields.title && fields.title.valid}" id="title" name="title" placeholder="{{ trans('admin.faq.columns.title') }}">
        </div>
        <div v-if="errors.has('title')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('title') }}</div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('answer'), 'has-success': fields.answer && fields.answer.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <textarea placeholder="{{ trans('admin.faq.columns.answer') }}" class="form-control" v-model="form.answer" v-validate="'required'" id="answer" name="answer"></textarea>
        </div>
        <div v-if="errors.has('answer')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('answer') }}</div>
</div>


