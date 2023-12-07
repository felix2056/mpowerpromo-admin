{{-- <!-- code editor modal -->
<div class="modal modal-full fade" id="codeEditorModal" tabindex="-1" aria-labelledby="codeEditorModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <input type="hidden" name="file" value="">

            <div class="modal-header">
                <span class="modal-title"></span>
                <div class="float-end">
                    <button type="button" class="btn btn-secondary btn-icon" data-bs-dismiss="modal"><i class="la la-times"></i>Close</button>

                    <button class="btn btn-primary btn-icon save-btn" title="Save changes">
                        <span class="loading d-none">
                            <i class="la la-save"></i>
                            <span class="spinner-border spinner-border-sm align-middle" role="status" aria-hidden="true">
                            </span>
                            <span>Saving </span> ... </span>

                        <span class="button-text">
                            <i class="la la-save"></i> <span>Save changes</span>
                        </span>
                    </button>
                </div>
            </div>

            <div class="modal-body p-0">
                <textarea class="form-control h-100"></textarea>
            </div>


        </div>
    </div>
</div>

<!-- export html modal-->
<div class="modal fade" id="textarea-modal" tabindex="-1" role="dialog" aria-labelledby="textarea-modal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title text-primary"><i class="la la-lg la-save"></i> Export html</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <!-- span aria-hidden="true"><small><i class="la la-times"></i></small></span -->
                </button>
            </div>
            <div class="modal-body">

                <textarea rows="25" cols="150" class="form-control"></textarea>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal"><i class="la la-times"></i> Close</button>
            </div>
        </div>
    </div>
</div>

<!-- message modal-->
<div class="modal fade" id="message-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title text-primary"><i class="la la-lg la-comment"></i> VvvebJs</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <!-- span aria-hidden="true"><small><i class="la la-times"></i></small></span -->
                </button>
            </div>
            <div class="modal-body">
                <p>Page was successfully saved!.</p>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-primary">Ok</button> -->
                <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal"><i class="la la-times"></i> Close</button>
            </div>
        </div>
    </div>
</div>

<!-- new page modal-->
<div class="modal fade" id="new-page-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">

        <form action="save.php">

            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title text-primary fw-normal"><i class="la la-lg la-file"></i> New page</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <!-- span aria-hidden="true"><small><i class="la la-times"></i></small></span -->
                    </button>
                </div>

                <div class="modal-body text">
                    <div class="mb-3 row" data-key="type">
                        <label class="col-sm-3 col-form-label">
                            Template
                            <abbr title="The contents of this template will be used as a start for the new template">
                                <i class="la la-lg la-question-circle text-primary"></i>
                            </abbr>

                        </label>
                        <div class="col-sm-9 input">
                            <div>
                                <select class="form-select" name="startTemplateUrl">
                                    <option value="new-page-blank-template.html">Blank Template</option>
                                    <option value="demo/narrow-jumbotron/index.html">Narrow jumbotron</option>
                                    <option value="demo/album/index.html">Album</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row" data-key="href">
                        <label class="col-sm-3 col-form-label">Page name</label>
                        <div class="col-sm-9 input">
                            <div>
                                <input name="title" type="text" value="My page" class="form-control" placeholder="My page" required>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row" data-key="href">
                        <label class="col-sm-3 col-form-label">File name</label>
                        <div class="col-sm-9 input">
                            <div>
                                <input name="file" type="text" value="my-page.html" class="form-control" placeholder="my-page.html" required>
                            </div>
                        </div>
                    </div>

                    <!-- 
<div class="mb-3 row" data-key="href">     
     <label class="col-sm-3 form-label">Url</label>      
    <div class="col-sm-9 input">
        <div>   
            <input name="url" type="text" value="my-page.html" class="form-control" placeholder="/my-page.html" required>  
        </div>
    </div>     
</div>
-->

                    <div class="mb-3 row" data-key="href">
                        <label class="col-sm-3 col-form-label">Save to folder</label>
                        <div class="col-sm-9 input">
                            <div>
                                <input name="folder" type="text" value="my-pages" class="form-control" placeholder="/" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary btn-lg" type="reset" data-bs-dismiss="modal"><i class="la la-times"></i> Cancel</button>
                    <button class="btn btn-primary btn-lg" type="submit"><i class="la la-check"></i> Create
                        page</button>
                </div>
            </div>

        </form>

    </div>
</div>

<!-- save toast -->
<div class="toast-container position-fixed end-0 bottom-0 me-3 mb-3" id="top-toast">
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header text-white">
            <strong class="me-auto">Page save</strong>
            <!-- <small class="badge bg-success">status</small> -->
            <button type="button" class="btn-close text-white px-2" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body ">
            <div class="flex-grow-1">
                <div class="message">Elements saved!
                    <div>Template backup was saved!</div>
                    <div>Template was saved!</div>
                </div>
                <div><a class="btn btn-success  btn-icon btn-sm w-100 mt-2" href="">View page</a></div>
            </div>
        </div>
    </div>
</div> --}}


<div class="modal modal-full fade" id="codeEditorModal" tabindex="-1" aria-labelledby="codeEditorModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <input type="hidden" name="file" value="">

            <div class="modal-header">
                <span class="modal-title"></span>
                <div class="float-end">
                    <button type="button" class="btn btn-secondary btn-icon" data-bs-dismiss="modal">
                        <i class="la la-times"></i>Close
                    </button>

                    <button class="btn btn-primary btn-icon save-btn" title="Save changes">
                        <span class="loading d-none">
                            <i class="la la-save"></i>
                            <span class="spinner-border spinner-border-sm align-middle" role="status" aria-hidden="true">
                            </span>
                            <span>Saving </span> ...
                        </span>

                        <span class="button-text">
                            <i class="la la-save"></i>
                            <span>Save changes</span>
                        </span>
                    </button>
                </div>
            </div>

            <div class="modal-body p-0">
                <textarea class="form-control h-100"></textarea>
            </div>


        </div>
    </div>
</div>

<!-- export html modal-->
<div class="modal fade" id="textarea-modal" tabindex="-1" role="dialog" aria-labelledby="textarea-modal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title text-primary">
                    <i class="la la-lg la-save"></i> Export html
                </p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <!-- span aria-hidden="true"><small><i class="la la-times"></i></small></span -->
                </button>
            </div>
            <div class="modal-body">

                <textarea rows="25" cols="150" class="form-control"></textarea>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">
                    <i class="la la-times"></i> Close
                </button>
            </div>
        </div>
    </div>
</div>

<!-- message modal-->
<div class="modal fade" id="message-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title text-primary">
                    <i class="la la-lg la-comment"></i> VvvebJs
                </p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <!-- span aria-hidden="true"><small><i class="la la-times"></i></small></span -->
                </button>
            </div>
            <div class="modal-body">
                <p>Page was successfully saved!.</p>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-primary">Ok</button> -->
                <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">
                    <i class="la la-times"></i> Close
                </button>
            </div>
        </div>
    </div>
</div>

<!-- new page modal-->
<div class="modal fade" id="new-page-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">

        <form action="" method="POST" data-vvveb-url="/admin/?module=editor/editor&action=save">

            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title text-primary fw-normal">
                        <i class="la la-lg la-file"></i> New template page
                    </h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <!-- span aria-hidden="true"><small><i class="la la-times"></i></small></span -->
                    </button>
                </div>

                <div class="modal-body text">
                    <div class="mb-3 row" data-key="type">
                        <label class="col-sm-3 col-form-label">
                            Template
                            <abbr title="The contents of this template will be used as a start for the new template">
                                <i class="la la-lg la-question-circle text-primary"></i>
                            </abbr>

                        </label>
                        <div class="col-sm-9 input">
                            <select class="form-select" placeholder="Visibility" name="startTemplateUrl" data-v-theme-templates>
                                <option value="new-page-blank-template.html" data-v-option>Blank Template</option>
                                <option value="demo/narrow-jumbotron/index.html" data-v-option>Narrow jumbotron</option>
                                <option value="demo/album/index.html" data-v-option>Album</option>
                            </select>
                        </div>
                    </div>
                    <!--
  <div class="mb-3 row" data-key="href">     
       <label class="col-sm-3 col-form-label">Page name</label>      
      <div class="col-sm-9 input">
          <div>   
              <input name="title" type="text" class="form-control" placeholder="My page" required>  
          </div>
      </div>     
  </div>
  -->

                    <div class="mb-3 row" data-key="href">
                        <label class="col-sm-3 col-form-label">File name</label>
                        <div class="col-sm-9 input">
                            <div>
                                <input name="file" type="text" class="form-control" placeholder="my-page.html" required>
                            </div>
                        </div>
                    </div>

                    <!--
  <div class="mb-3 row" data-key="href">     
       <label class="col-sm-3 form-label">Url</label>      
      <div class="col-sm-9 input">
          <div>   
              <input name="url" type="text" class="form-control" placeholder="/my-page.html" required>  
          </div>
      </div>     
  </div>
  -->
                    <div class="mb-3 row" data-key="href">
                        <label class="col-sm-3 col-form-label">
                            Save to folder
                        </label>
                        <div class="col-sm-9 input">
                            <select class="form-select" placeholder="Visibility" name="folder" data-v-theme-folders>
                                <option value="/" data-v-option>/</option>
                                <option value="content" data-v-option>Content</option>
                                <option value="product" data-v-option>Product</option>
                                <option value="checkout" data-v-option>Checkout</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary btn-lg" type="reset" data-bs-dismiss="modal">
                        <i class="la la-times"></i> Cancel
                    </button>
                    <button class="btn btn-primary btn-lg" type="submit">
                        <i class="la la-check"></i> Create template
                    </button>
                </div>
            </div>

        </form>

    </div>
</div>

<!-- save toast -->
<div class="toast-container position-fixed end-0 bottom-0 me-3 mb-3" id="top-toast">
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header text-white">
            <strong class="me-auto">Page save</strong>
            <!-- <small class="badge bg-success">status</small> -->
            <button type="button" class="btn-close text-white px-2" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body ">
            <div class="flex-grow-1">
                <div class="message">Elements saved!
                    <div>Template backup was saved!</div>
                    <div>Template was saved!</div>
                </div>
                <div>
                    <a class="btn btn-success  btn-icon btn-sm w-100 mt-2" href="">View page</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--
<div class="toast-container position-fixed end-0 bottom-0 me-3 mb-3" id="top-toast">
<div class="toast align-items-center text-bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
<div class="d-flex">
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
  <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
</div>
</div>
</div>
-->


<!-- save changes offcanvas -->
<style>
    .form-group .form-check-input~label input,
    .form-group .form-check-input~label div,
    .form-group .form-check-input~label select {
        display: none;
    }

    .form-group .form-check-input:checked~label input,
    .form-group .form-check-input:checked~label div,
    .form-group .form-check-input:checked~label select {
        display: block;
    }

</style>
<div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="save-offcanvas">
    <div class="offcanvas-header">
        <span class="offcanvas-title">

            <button class="btn btn-primary btn-icon save-btn save-offcanvas" title="Save changes" data-vvveb-action="saveAjax" data-vvveb-url="/admin/?module=editor/editor&action=save" data-v-vvveb-shortcut="ctrl+e">
                <span class="loading d-none">
                    <span class="spinner-border spinner-border-sm align-middle" role="status" aria-hidden="true"></span>
                    <span class="progress-text">
                        <span>Saving changes</span> ...
                    </span>
                </span>
                <span class="button-text">
                    <i class="icon-save-outline fs-5"></i>
                    <span>Save changes</span>
                </span>
            </button>

        </span>

        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">

        <div class="form-group mb-4">
            <div class="form-check">
                <input id="global-template-radio" class="form-check-input" name="template" type="radio" value="global" checked>
                <label class="form-check-label" for="global-template-radio">
                    <h6 class="mb-0">Default template</h6>
                    <p class="fs-6 text-muted">Applies to all pages using template</p>
                    <small class="p-1 bg-body-tertiary border" data-v-filename>product/product.html</small>
                </label>
            </div>
        </div>

        <div class="form-group mb-4">
            <div class="form-check">
                <input id="new-template-radio" class="form-check-input" name="template" type="radio" value="new">
                <label class="form-check-label d-block" for="new-template-radio">
                    <h6 class="mb-0">Save as new template</h6>
                    <p class="fs-6 text-muted">Applies to this page only</p>

                    <select class="form-select" placeholder="Visibility" name="folder" data-v-theme-folders>
                        <option value="/" data-v-option>/</option>
                        <option value="content" data-v-option>Content</option>
                        <option value="product" data-v-option>Product</option>
                        <option value="checkout" data-v-option>Checkout</option>
                    </select>

                    <input type="text" class="form-control  mt-2" name="file" value="product/product-one.html" data-v-basename>

                    <div class="form-check mt-3">
                        <input class="form-check-input" id="setTemplate" name="setTemplate" type="checkbox" value="true" checked>
                        <label class="form-check-label" for="setTemplate">Set as template for this page</label>
                </label>
            </div>
        </div>
        <div class="accordion accordion-flush components">
            <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <div>
                        <h6>
                            <input class="form-check-input me-1" type="checkbox" value="" checked>
                            Product lorem ipsum
                        </h6>
                        <small class="p-1 bg-body-tertiary">Product</small>
                    </div>
                </button>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne">
                    <div class="accordion-body">

                        <ul class="list-unstyled">
                            <li class="p-2">
                                <h6 class="d-inline">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." checked>
                                    <span>Title</span>
                                </h6>
                                <span>Lorem ipsum</span>
                            </li>
                            <li class="p-2">
                                <h6 class="d-inline">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." checked>
                                    <span>Url</span>
                                </h6>
                                <span>/product6/</span>
                            </li>
                            <li class="p-2">
                                <h6 class="d-inline">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." checked>
                                    <span>Price</span>
                                </h6>
                                <span>500</span>
                            </li>
                            <li class="p-2">
                                <h6 class="d-inline">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." checked>
                                    <span>Image</span>
                                </h6>
                                <span>/media/image.jpg</span>
                            </li>
                            <li class="p-2">
                                <h6 class="d-inline">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." checked>
                                    <span>Title</span>
                                </h6>
                                <span>Lorem ipsum</span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <div>
                        <h6>
                            <input class="form-check-input me-1" type="checkbox" value="" checked>
                            Product lorem ipsum
                        </h6>
                        <small class="p-1 bg-body-tertiary">Product</small>
                    </div>
                </button>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                    <div class="accordion-body">

                        <ul class="list-unstyled">
                            <li class="p-2">
                                <h6 class="d-inline">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." checked>
                                    <span>Title</span>
                                </h6>
                                <span>Perfume test 1</span>
                            </li>
                            <li class="p-2">
                                <h6 class="d-inline">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." checked>
                                    <span>Url</span>
                                </h6>
                                <span>/product6/</span>
                            </li>
                            <li class="p-2">
                                <h6 class="d-inline">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." checked>
                                    <span>Price</span>
                                </h6>
                                <span>500</span>
                            </li>
                            <li class="p-2">
                                <h6 class="d-inline">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." checked>
                                    <span>Image</span>
                                </h6>
                                <span>/media/image.jpg</span>
                            </li>
                            <li class="p-2">
                                <h6 class="d-inline">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." checked>
                                    <span>Title</span>
                                </h6>
                                <span>Perfume test 1</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

</div>
