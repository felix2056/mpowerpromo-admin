<template>
    <div id="store-menu-view" class="container">
        <div class="pb-3">
            <nav class="small">
                <ol class="breadcrumb pb-0">
                    <li class="breadcrumb-item">
                        <router-link :to="{ name: 'store' }">Menu</router-link>
                    </li>
                    <li class="breadcrumb-item active">Robots</li>
                </ol>
            </nav>
        </div>
        <div>
            <h3>Robots.txt</h3>
            <p>
                A robots.txt file tells search engine crawlers which URLs the crawler can access on your site. See
                <a href="https://developers.google.com/search/docs/crawling-indexing/robots/intro"
                    target="_blank">Introduction to robots.txt</a>
                for more information.
            </p>
            <div data-v-3a7e9bf2="">
                <fieldset data-v-3a7e9bf2="" class="form-group" id="__BVID__1170"><!---->
                    <div>
                        <div data-v-3a7e9bf2="" class="d-flex justify-content-between align-items-center">
                            <div data-v-3a7e9bf2=""><label data-v-3a7e9bf2="">Path</label> <!----></div> <!---->
                        </div>
                        <div data-v-3a7e9bf2="" role="group" class="input-group"><!----><!----> <input data-v-3a7e9bf2=""
                                name="Path" type="text" autocomplete="on" class="form-control" maxlength="255"
                                onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');  this.blur();  this.focus();  }"
                                data-hj-allow="" data-mask="" data-previous-value="robots.txt" id="__BVID__1171"> <!---->
                        </div> <!---->
                        <div data-v-3a7e9bf2="" class="invalid-feedback d-block">

                        </div> <!----><!----><!---->
                    </div>
                </fieldset>
            </div>
            <div class="vue-codemirror"><textarea name="codemirror" placeholder="" style="display: none;"></textarea>
                <div class="CodeMirror cm-s-eclipse CodeMirror-wrap" translate="no" style="clip-path: inset(0px);">
                    <div style="overflow: hidden; position: relative; width: 3px; height: 0px; top: 4px; left: 34px;">
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
                                            <div class="CodeMirror-cursor" style="left: 4px; top: 0px; height: 22.5px;">
                                                &nbsp;</div>
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
                            <div class="CodeMirror-gutter CodeMirror-linenumbers" style="width: 29px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-3"><button type="button" class="btn btn-primary mr-2"><!----> Save Robots.txt
                </button></div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style></style>