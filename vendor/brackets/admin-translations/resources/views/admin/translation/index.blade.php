@extends('layout.master')

@section('title', trans('brackets/admin-translations::admin.title'))

@section('body')

    <translation-listing
            class="translation-listing"
            :data="{{ $data->toJson() }}"
            :url="'{{ url('admin/translations') }}'"
            :label="'{{ trans('brackets/admin-translations::admin.index.all_groups') }}'"
            :locales="{{ $locales }}"
            inline-template >

        <div class="row">
            <div class="col">

                <modal dir="ltr" name="edit-translation" @before-open="beforeModalOpen" v-cloak
                       height="auto" :scrollable="true" :adaptive="true" :pivot-y="0.25">
                    <div @if(auth('admin')->user()->language === 'ar') class="rtl" dir="rtl" @endif>
                        <div class="p-3">
                            <h4 class="modal-title">{{ trans('brackets/admin-translations::admin.index.edit') }}</h4>
                            <p class="text-center" style="word-wrap: break-word;">
                                <strong>{{ trans('brackets/admin-translations::admin.index.default_text') }}:</strong> @{{
                                translationDefault }}</p>
                            <form @submit.prevent.once="onSubmit">
                                @foreach($locales as $locale)
                                    <div class="form-group">
                                        <label>{{ strtoupper($locale) }} {{ trans('brackets/admin-translations::admin.index.translation') }}</label>
                                        <input type="text" class="form-control"
                                               placeholder="{{ trans('brackets/admin-translations::admin.index.translation_for_language', ['locale' => $locale]) }}"
                                               v-model="translations.{{ $locale }}"
                                               v-if="translations.{{ $locale }} && translations.{{ $locale }}.length < 70">
                                        <textarea class="form-control"
                                                  placeholder="{{ trans('brackets/admin-translations::admin.index.translation_for_language', ['locale' => $locale]) }}"
                                                  v-model="translations.{{ $locale }}"
                                                  v-if="translations.{{ $locale }} && translations.{{ $locale }}.length >= 70"
                                                  cols="30" rows="4"></textarea>
                                    </div>
                                @endforeach
                                <div class="text-center">
                                    <button class="modal-submit btn btn-block btn-primary" class="form-control" type="submit">{{ trans('brackets/admin-ui::admin.btn.save') }} {{ trans('brackets/admin-translations::admin.index.translation') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </modal>

                <modal dir="ltr" @closed="onCloseImportModal()" name="import-translation" class="modal--translation" v-cloak
                       height="auto" :scrollable="true" :adaptive="true" :pivot-y="0.25">
                    <div @if(auth('admin')->user()->language === 'ar') class="rtl" dir="rtl" @endif>
                        <div class="p-3">
                            <h4 class="modal-title">{{ trans('brackets/admin-translations::admin.import.title') }}</h4>
                            <div class="modal-body ">
                                <div v-show="currentStep == 1">
                                    <form>
                                        <p class="col-md-12">{{ trans('brackets/admin-translations::admin.import.notice') }}</p>
                                        <div class="row form-group col-md-12" :class="{'has-danger': errors.has('importFile')}">
                                            <div class="col-md-4 text-md-right">
                                                <label for="importFile" class="col-form-label text-md-right">{{ trans('brackets/admin-translations::admin.import.upload_file') }}</label>
                                            </div>
                                            <div class="file-field col-md-6">
                                                <div class="btn btn-primary btn-sm col-md-12 float-left">
                                                    <span><span v-if="importedFile">@{{ importedFile.name }}</span><span v-else>{{ trans('brackets/admin-translations::admin.import.choose_file') }}</span></span>
                                                    <input type="file" id="file" name="importFile" ref="file"
                                                           v-on:change="handleImportFileUpload"
                                                           v-validate="'mimes:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet|required'">
                                                </div>
                                            </div>
                                            <span v-if="errors.has('importFile')" class="form-control-feedback form-text col-md-12" v-cloak>@{{ errors.first('importFile') }}</span>
                                        </div>
                                        <div class="row col-md-12 form-group"
                                             :class="{'has-danger': errors.has('importLanguage')}">
                                            <div class="col-md-4 text-md-right">
                                                <label for="importLanguage" class="col-form-label">{{ trans('brackets/admin-translations::admin.import.language_to_import') }}</label>
                                            </div>
                                            <label for="importLanguage" class="col-form-label text-md-right"></label>
                                            <div class="col-md-6">
                                                <select class="form-control" v-model="importLanguage" name="importLanguage"
                                                        ref="import_language" v-validate="'required'">
                                                    <option value="">{{ trans('brackets/admin-translations::admin.fields.select_language') }}</option>
                                                    @foreach($locales as $locale)
                                                        <div class="form-group">
                                                            <option>{{ strtoupper($locale) }}</option>
                                                        </div>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                        <span v-if="errors.has('importLanguage')"
                                              class="form-control-feedback form-text" v-cloak>@{{ errors.first('importLanguage') }}</span>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" id="onlyMissingTranslations" v-model="onlyMissing" ref="only_missing">
                                                <i class="input-frame"></i>
                                                {{ trans('brackets/admin-translations::admin.import.do_not_override') }}
                                            </label>
                                        </div>
                                    </form>
                                </div>
                                <div v-show="currentStep == 2" class="col-md-12">
                                    <div class="text-center col-md-12">
                                        <p>{{ trans('brackets/admin-translations::admin.import.conflict_notice_we_have_found') }}
                                            @{{ numberOfFoundTranslations }}
                                            {{ trans('brackets/admin-translations::admin.import.conflict_notice_translations_to_be_imported') }}
                                            @{{ numberOfTranslationsToReview }}
                                            {{ trans('brackets/admin-translations::admin.import.conflict_notice_differ') }}
                                        </p>
                                    </div>

                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>{{ trans('brackets/admin-translations::admin.fields.group') }}</th>
                                            <th>{{ trans('brackets/admin-translations::admin.fields.default') }}</th>
                                            <th>{{ trans('brackets/admin-translations::admin.fields.current_value') }}</th>
                                            <th>{{ trans('brackets/admin-translations::admin.fields.imported_value') }}</th>
                                            <th style="display: none;"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr v-for="(item, index) in translationsToImport"
                                            v-if="translationsToImport[index].has_conflict">
                                            <td style="word-break: break-all">@{{ translationsToImport[index].group }}</td>
                                            <td style="word-break: break-all">@{{ translationsToImport[index].default }}</td>
                                            <td style="word-break: break-all">
                                                <input type="radio" class="import-radio" v-bind:value="true"
                                                       v-model="translationsToImport[index].checkedCurrent"
                                                       :id="'current-' + index + '0'" :name="'current-' + index"
                                                       v-validate="'required'">
                                                <label class="form-check-label label-import" :for="'current-' + index + '0'">
                                                    @{{ translationsToImport[index].current_value }}
                                                </label>
                                            </td>
                                            <td style="word-break: break-all">
                                                <input type="radio" class="import-radio" v-bind:value="false"
                                                       v-model="translationsToImport[index].checkedCurrent"
                                                       :id="'current-' + index + '1'" :name="'current-' + index">
                                                <label class="form-check-label label-import" :for="'current-' + index + '1'" v-bind:checked="true">
                                                    @{{ translationsToImport[index][importLanguage.toLowerCase()] }}
                                                </label>
                                            </td>
                                            <td style="display: none;"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div v-show="currentStep == 3">
                                    <div class="text-center col-md-12">
                                        <p>
                                            @{{numberOfSuccessfullyImportedTranslations}} {{ trans('brackets/admin-translations::admin.import.sucesfully_notice') }}
                                            @{{numberOfSuccessfullyUpdatedTranslations}} {{ trans('brackets/admin-translations::admin.import.sucesfully_notice_update') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer import-footer">
                            <button type="button" v-if="!lastStep" class="btn btn-primary col-md-2 btn-spinner"
                                    :disabled="errors.any()" @click.prevent="nextStep()">Next
                            </button>
                        </div>

                    </div>

                </modal>

                <modal dir="ltr" name="export-translation" class="modal--translation" v-cloak height="auto" :scrollable="true"
                       :adaptive="true" :pivot-y="0.25">
                    <div @if(auth('admin')->user()->language === 'ar') class="rtl" dir="rtl" @endif>
                        <div class="p-3">
                            <h4 class="modal-title">{{ trans('brackets/admin-translations::admin.index.export') }}</h4>
                            <div class="text-center">
                                <form @submit.prevent.once="onSubmitExport">
                                    <div class="modal-body">
                                        <p class="text-left">{{ trans('brackets/admin-translations::admin.export.notice') }}</p>
                                        <div class="form-group" :class="{'has-danger': errors.has('exportLanguage')}">
                                            <div class="row col-md-12">
                                                <div class="col-md-4 text-md-right">
                                                    <label for="importFile" class="col-form-label text-md-right">{{ trans('brackets/admin-translations::admin.export.language_to_export') }}</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <div>
                                                        <button type="button" class="btn btn-secondary dropdown-toggle translations-export col-md-12 text-left" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span v-if="languagesToExport.length > 0">
                                                                <span v-for="language, index in languagesToExport">
                                                                    <span>@{{ language.toUpperCase() }}<span v-if="index < languagesToExport.length - 1">,</span></span>
                                                                </span>
                                                            </span>
                                                            <span v-else>{{ trans('brackets/admin-translations::admin.fields.select_language') }}</span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-dont-auto-close tranlations-export-dropdown col-md-12">
                                                            @foreach($locales as $locale)
                                                                <span class="dropdown-item-label">
                                                                    <div class="form-check form-check-flat form-check-primary">
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input" name="{{$locale}}" id="{{ strtoupper($locale) }}" v-model="exportMultiselect.{{$locale}}" ref="only_missing">
                                                                            <i class="input-frame"></i>
                                                                            {{ strtoupper($locale) }}
                                                                        </label>
                                                                    </div>

                                                                </span>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                    <span v-if="errors.has('exportLanguage')" class="form-control-feedback form-text"
                                          v-cloak>@{{ errors.first('exportLanguage') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="m-3 modal-submit btn btn-block btn-primary col-md-2 float-right"
                                            class="form-control" type="submit"><i class="fa fa-file-excel-o"></i>&nbsp;{{ trans('brackets/admin-translations::admin.btn.export') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </modal>
                <form @submit.prevent="">
                    <div class="row justify-content-md-between">
                        <div class="col col-lg-7 col-xl-5 form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="dropdown">
                                        <button  style="border-radius: 0" class="btn btn-primary" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{__('Filter')}}  <i class="fa fa-filter"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <button class="dropdown-item d-flex align-items-center" is='sortable'
                                                :column="'group'">{{ trans('brackets/admin-translations::admin.fields.group') }}</button>
                                            <button class="dropdown-item d-flex align-items-center" is='sortable'
                                                :column="'key'">{{ trans('brackets/admin-translations::admin.fields.default') }}</button>
                                            <button class="dropdown-item d-flex align-items-center" is='sortable'
                                                :column="'text'">{{ mb_strtoupper((isset(Auth::user()->language) && in_array(Auth::user()->language, config('translatable.locales'))) ? Auth::user()->language : 'en' ) }}</button>
                                            <button class="dropdown-item d-flex align-items-center" is='sortable' :column="'created_at'">{{ trans('brackets/admin-translations::admin.fields.created_at') }}</button>
                                        </div>
                                    </div>
                                </div>
                                <input class="form-control"
                                       placeholder="{{ trans('brackets/admin-ui::admin.placeholder.search') }}"
                                       v-model="search" @keyup.enter="filter('search', $event.target.value)"/>
                                <span class="input-group-append">
                                                <button type="button" class="btn btn-primary"
                                                        @click="filter('search', search)"><i class="fa fa-search"></i>&nbsp; {{ trans('brackets/admin-ui::admin.btn.search') }}</button>
                                            </span>
                            </div>
                        </div>

                        <div class="col-sm-auto form-group ">
                            <select class="form-control" v-model="pagination.state.per_page">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="100">100</option>
                            </select>
                        </div>

                    </div>
                </form>
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <p class="card-title m-0"><i class="icon-globe"></i> {{ trans('brackets/admin-translations::admin.index.title') }}<small> ({{\Brackets\AdminTranslations\Translation::count()}} {{ trans('brackets/admin-translations::admin.index.title') }})</small></p>
                            </div>
                            <div class="col-auto">
                                <div class="dropdown">
                                    <button class="btn p-0 text-white" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-options icon-lg text-muted pb-3px"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-left">
                                        <button class="dropdown-item d-flex align-items-center" h @click.prevent="showImport()"
                                                role="button"><i
                                                class="fa fa-upload"></i>&nbsp; {{ trans('brackets/admin-translations::admin.btn.import') }}
                                        </button>
                                        <button class="dropdown-item d-flex align-items-center"  @click.prevent="showExport()"
                                                role="button"><i
                                                class="fa fa-file-excel-o"></i>&nbsp; {{ trans('brackets/admin-translations::admin.btn.export') }}
                                        </button>
                                        {{-- Consider, if rescan button should be visible in production, because in production rescanning should be part of the deploy process --}}
                                        <button class="dropdown-item d-flex align-items-center"
                                                @click.prevent="rescan('{{ url('admin/translations/rescan') }}')" role="button"><i class="fa"
                                                                                                                                   :class="scanning ? 'fa-spinner' : 'fa-eye'"></i>&nbsp; {{ trans('brackets/admin-translations::admin.btn.re_scan') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0" v-cloak>
                        <div class="card-block">
                            <table class="table table-hover">
                                <tbody>
                                <tr v-for="(item, index) in collection">
                                    <td>@{{ item.group }}</td>
                                    <td>@{{ item.key }}</td>
                                    <td>{{'{{'}}
                                        item.text.{{ (isset(Auth::user()->language) && in_array(Auth::user()->language, config('translatable.locales'))) ? Auth::user()->language : 'en' }}
                                        }}
                                    </td>
                                    <td>@{{ item.created_at }}</td>

                                    <td>
                                        <div class="row no-gutters">
                                            <div class="col-auto">
                                                <a class="btn btn-primary" href="#"
                                                   @click.prevent="editTranslation(item)"
                                                   title="{{ trans('brackets/admin-ui::admin.btn.edit') }}" role="button"><i
                                                            class="icon-pencil"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="no-items-found" v-if="!collection.length > 0">
                                <i class="icon-magnifier" style="font-size: 50px"></i>
                                <h3 class="mt-3 mb-3">{{ trans('brackets/admin-ui::admin.index.no_items') }}</h3>
                                <p class="mb-3">{{ trans('brackets/admin-translations::admin.index.try_changing_items') }}</p>
                                <a class="btn btn-primary" href="{{ url('admin/translations/rescan') }}"
                                    @click.prevent="rescan('{{ url('admin/translations/rescan') }}')" role="button"><i
                                        class="fa" :class="scanning ? 'fa-spinner' : 'fa-eye'"></i>&nbsp; {{ trans('brackets/admin-translations::admin.btn.re_scan') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" v-if="pagination.state.total > 0">
                    <div class="col-sm">
                        <span class="pagination-caption">{{ trans('brackets/admin-ui::admin.pagination.overview') }}</span>
                    </div>
                    <div class="col-sm-auto">
                        <!-- TODO how to add push state to this pagination so the URL will actually change? we need JS router - do we want it? -->
                        <pagination></pagination>
                    </div>
                </div>
            </div>
        </div>
    </translation-listing>

@endsection
