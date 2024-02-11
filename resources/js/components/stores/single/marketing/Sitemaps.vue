<template>
    <div id="store-menu-view" class="container">
        <div class="pb-3">
            <nav class="small">
                <ol class="breadcrumb pb-0">
                    <li class="breadcrumb-item">
                        <router-link :to="{ name: 'store' }" title="close">Menu</router-link>
                    </li>
                    <li class="breadcrumb-item active">Sitemaps</li>
                </ol>
            </nav>
        </div>
        <div>
            <h3>Sitemap</h3>
            <div>
                <div class="tabs nav-tabs-underline" id="__BVID__1435"><!---->
                    <div class="">
                        <ul role="tablist" class="nav nav-tabs" id="__BVID__1435__BV_tab_controls_"><!---->
                            <li role="presentation" class="nav-item"><a role="tab" aria-selected="true" aria-setsize="2"
                                    aria-posinset="1" href="#" target="_self" class="nav-link active"
                                    id="__BVID__1436___BV_tab_button__" aria-controls="__BVID__1436">Editor</a></li>
                            <li role="presentation" class="nav-item"><a role="tab" tabindex="-1" aria-selected="false"
                                    aria-setsize="2" aria-posinset="2" href="#" target="_self" class="nav-link"
                                    id="__BVID__1442___BV_tab_button__" aria-controls="__BVID__1442">Site Maps</a></li>
                            <!---->
                        </ul>
                    </div>
                    <div class="tab-content mt-3" id="__BVID__1435__BV_tab_container_">
                        <div role="tabpanel" aria-hidden="false" class="tab-pane active" id="__BVID__1436"
                            aria-labelledby="__BVID__1436___BV_tab_button__">
                            <div data-v-3a7e9bf2="">
                                <fieldset data-v-3a7e9bf2="" class="form-group" id="__BVID__1439"><!---->
                                    <div>
                                        <div data-v-3a7e9bf2="" class="d-flex justify-content-between align-items-center">
                                            <div data-v-3a7e9bf2=""><label data-v-3a7e9bf2="">Path</label> <!----></div>
                                            <!---->
                                        </div>
                                        <div data-v-3a7e9bf2="" role="group" class="input-group"><!----><!----> <input
                                                data-v-3a7e9bf2="" name="Path" type="text" autocomplete="on"
                                                class="form-control" maxlength="255"
                                                onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');  this.blur();  this.focus();  }"
                                                data-hj-allow="" data-mask="" data-previous-value="sitemaps.xml"
                                                id="__BVID__1440"> <!----></div> <!---->
                                        <div data-v-3a7e9bf2="" class="invalid-feedback d-block">

                                        </div> <!----><!----><!---->
                                    </div>
                                </fieldset>
                            </div>
                            <div class="vue-codemirror"><textarea name="codemirror" placeholder=""
                                    style="display: none;"></textarea>
                                <div class="CodeMirror cm-s-eclipse CodeMirror-wrap" translate="no"
                                    style="clip-path: inset(0px);">
                                    <div
                                        style="overflow: hidden; position: relative; width: 3px; height: 0px; top: 4px; left: 34px;">
                                        <textarea autocorrect="off" autocapitalize="off" spellcheck="false"
                                            style="position: absolute; bottom: -1em; padding: 0px; width: 1000px; height: 1em; min-height: 1em; outline: none;"
                                            tabindex="0"></textarea>
                                    </div>
                                    <div class="CodeMirror-vscrollbar" tabindex="-1" cm-not-content="true">
                                        <div style="min-width: 1px; height: 0px;"></div>
                                    </div>
                                    <div class="CodeMirror-hscrollbar" tabindex="-1" cm-not-content="true">
                                        <div style="height: 100%; min-height: 1px; width: 0px;"></div>
                                    </div>
                                    <div class="CodeMirror-scrollbar-filler" cm-not-content="true"></div>
                                    <div class="CodeMirror-gutter-filler" cm-not-content="true"></div>
                                    <div class="CodeMirror-scroll" tabindex="-1">
                                        <div class="CodeMirror-sizer"
                                            style="margin-left: 30px; margin-bottom: -16px; border-right-width: 34px; min-height: 31px; padding-right: 0px; padding-bottom: 0px;">
                                            <div style="position: relative; top: 0px;">
                                                <div class="CodeMirror-lines" role="presentation">
                                                    <div role="presentation" style="position: relative; outline: none;">
                                                        <div class="CodeMirror-measure">
                                                            <pre class="CodeMirror-line-like"><span>xxxxxxxxxx</span></pre>
                                                            <div class="CodeMirror-linenumber CodeMirror-gutter-elt">
                                                                <div>1</div>
                                                            </div>
                                                        </div>
                                                        <div class="CodeMirror-measure"></div>
                                                        <div style="position: relative; z-index: 1;"></div>
                                                        <div class="CodeMirror-cursors">
                                                            <div class="CodeMirror-cursor"
                                                                style="left: 4px; top: 0px; height: 22.5px;">&nbsp;</div>
                                                        </div>
                                                        <div class="CodeMirror-code" role="presentation">
                                                            <div style="position: relative;">
                                                                <div class="CodeMirror-gutter-wrapper" aria-hidden="true"
                                                                    style="left: -30px;">
                                                                    <div class="CodeMirror-linenumber CodeMirror-gutter-elt"
                                                                        style="left: 0px; width: 21px;">1</div>
                                                                </div>
                                                                <pre class=" CodeMirror-line "
                                                                    role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span cm-text="">​</span></span></pre>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            style="position: absolute; height: 34px; width: 1px; border-bottom: 0px solid transparent; top: 31px;">
                                        </div>
                                        <div class="CodeMirror-gutters" style="height: 65px; left: 1.52e-05px;">
                                            <div class="CodeMirror-gutter CodeMirror-linenumbers" style="width: 29px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-3"><button type="button" class="btn btn-primary mr-2"><!----> Save
                                </button></div>
                        </div>
                        <div role="tabpanel" aria-hidden="true" class="tab-pane" style="display: none;" id="__BVID__1442"
                            aria-labelledby="__BVID__1442___BV_tab_button__">
                            <div class="text-right"><button type="button" class="btn btn-light">
                                    Generate Products Sitemap
                                </button></div>
                            <div class="card p-3 mt-3 bg-light">
                                <div>
                                    <form enctype="multipart/form-data" novalidate="novalidate">
                                        <h5>Upload Sitemap</h5>
                                        <div class="mt-3">
                                            <div><label for="1444" class="btn btn-link">
                                                    Add Sitemap
                                                </label><span class="ml-3">No File Chosen</span><!----></div><input
                                                type="file" id="1444" multiple="multiple" name="file" accept="text/xml"
                                                class="input-file">
                                        </div>
                                    </form><!----><!----><!---->
                                </div>
                            </div>
                            <div>
                                <div class="VueTables VueTables--client">
                                    <div class="row" style="display: none;">
                                        <div class="col-md-12">
                                            <div class="form-group form-inline float-left VueTables__search"></div>
                                            <div class="form-group form-inline float-right VueTables__limit"></div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="VueTables__table table table-striped" style="overflow: hidden;">
                                            <thead>
                                                <tr>
                                                    <th id="VueTables_th--path" tabindex="0" class="VueTables__sortable "
                                                        style="position: relative;"><span title=""
                                                            class="VueTables__heading">Path</span><span
                                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                        <div class="resize-handle"
                                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                        </div>
                                                    </th>
                                                    <th id="VueTables_th--filename" tabindex="0"
                                                        class="VueTables__sortable " style="position: relative;"><span
                                                            title="" class="VueTables__heading">Filename</span><span
                                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                        <div class="resize-handle"
                                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                        </div>
                                                    </th>
                                                    <th id="VueTables_th--link" tabindex="0" class="VueTables__sortable "
                                                        style="position: relative;"><span title=""
                                                            class="VueTables__heading">Link</span><span
                                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                        <div class="resize-handle"
                                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                        </div>
                                                    </th>
                                                    <th id="VueTables_th--updatedAt" tabindex="0"
                                                        class="VueTables__sortable " style="position: relative;"><span
                                                            title="" class="VueTables__heading">UpdatedAt</span><span
                                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                        <div class="resize-handle"
                                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                        </div>
                                                    </th>
                                                    <th id="VueTables_th--edit" tabindex="0" class="VueTables__sortable "
                                                        style="position: relative;"><span title=""
                                                            class="VueTables__heading">Edit</span><span
                                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                        <div class="resize-handle"
                                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                        </div>
                                                    </th>
                                                    <th id="VueTables_th--delete" tabindex="0" class="VueTables__sortable "
                                                        style="position: relative;"><span title=""
                                                            class="VueTables__heading">Delete</span><span
                                                            class="VueTables__sort-icon float-right fal glyphicon-sort "></span>
                                                        <div class="resize-handle"
                                                            style="top: 0px; right: 0px; width: 5px; position: absolute; cursor: col-resize; user-select: none; height: 0px;">
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="VueTables__no-results">
                                                    <td tabindex="0" colspan="6" class="text-center">No matching records
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="VuePagination row col-md-12 justify-content-center">
                                        <nav class="text-center">
                                            <ul class="pagination VuePagination__pagination" style="display: none;">
                                                <li
                                                    class="VuePagination__pagination-item page-item  VuePagination__pagination-item-prev-chunk disabled">
                                                    <a href="javascript:void(0);" disabled="disabled"
                                                        class="page-link">&lt;&lt;</a>
                                                </li>
                                                <li
                                                    class="VuePagination__pagination-item page-item  VuePagination__pagination-item-prev-page disabled">
                                                    <a href="javascript:void(0);" disabled="disabled"
                                                        class="page-link">&lt;</a>
                                                </li>
                                                <li
                                                    class="VuePagination__pagination-item page-item  VuePagination__pagination-item-next-page disabled">
                                                    <a href="javascript:void(0);" disabled="disabled"
                                                        class="page-link">&gt;</a>
                                                </li>
                                                <li
                                                    class="VuePagination__pagination-item page-item  VuePagination__pagination-item-next-chunk disabled">
                                                    <a href="javascript:void(0);" disabled="disabled"
                                                        class="page-link">&gt;&gt;</a>
                                                </li>
                                            </ul>
                                            <p class="VuePagination__count text-center col-md-12" style="display: none;">0
                                                records</p>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div><!---->
                    </div>
                </div>
            </div><!----><!---->
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style></style>