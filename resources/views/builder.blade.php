<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="comp-summer-editons-2024" data-bs-theme="auto">

<head>
    <title>Dashboard | MPower Promo Inc.</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="font-awesome-animation">
    <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/manifest.json">
    <link rel="stylesheet" href="font-awesome-animation.min.css">
    <meta name="msapplication-TileColor" content="#468DF1">
    <meta name="msapplication-TileImage" content="/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#468DF1">
    <script src="https://js-agent.newrelic.com/nr-spa-1184.min.js"></script>

    <link href="/js/orders.c3633080.js" rel="prefetch">
    <link href="/css/app.d058777b.css" rel="preload" as="style">
    <link href="https://app.mpowerpromo.com/css/chunk-vendors.7b04faa7.css" rel="preload" as="style">
    <link href="/js/app.eca68e42.js" rel="preload" as="script">
    <link href="https://app.mpowerpromo.com/js/chunk-vendors.b9b6c4df.js" rel="preload" as="script">
    <link href="https://app.mpowerpromo.com/css/chunk-vendors.7b04faa7.css" rel="stylesheet">
    <link href="/css/app.d058777b.css" rel="stylesheet">

    <style type="text/css">
        @import url(https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Aladin&family=Alfa+Slab+One&family=Amatic+SC&family=Arvo&family=Bangers&family=Bungee+Inline&family=Bungee+Shade&family=Comfortaa&family=Courgette&family=Dancing+Script&family=EB+Garamond&family=Emilys+Candy&family=Fredoka+One&family=Graduate&family=Indie+Flower&family=Modak&family=Open+Sans&family=Pacifico&family=Patrick+Hand&family=Permanent+Marker&family=Pinyon+Script&family=Poiret+One&family=Quicksand&family=Raleway&family=Righteous&family=Rye&family=Sacramento&family=Satisfy&family=Shojumaru&family=Sofia&family=UnifrakturMaguntia&display=swap);

    </style>

    <base href="">

    <link href="/css/editor.css" rel="stylesheet">
</head>

<body>
    <div class="dashboard">
        @include('includes.navigation')

        <div id="main" class="slideout-panel slideout-panel-left">
            <div id="vvveb-builder">
                <div id="top-panel">
                    <img src="/img/mpower_logo_text_nopad-tiny.png" alt="Vvveb" class="float-start" id="logo">
        
                    <div class="btn-group float-start" role="group">
                        <button class="btn btn-light" title="Toggle file manager" id="toggle-file-manager-btn"
                            data-vvveb-action="toggleFileManager" data-bs-toggle="button" aria-pressed="false">
                            <img src="/js/builder/icons/file-manager-layout.svg" width="20" height="20" alt=""
                                role="presentation">
                        </button>
        
                        <button class="btn btn-light" title="Toggle left column" id="toggle-left-column-btn"
                            data-vvveb-action="toggleLeftColumn" data-bs-toggle="button" aria-pressed="false">
                            <img src="/js/builder/icons/left-column-layout.svg" width="20" height="20" alt=""
                                role="presentation">
                        </button>
        
                        <button class="btn btn-light" title="Toggle right column" id="toggle-right-column-btn"
                            data-vvveb-action="toggleRightColumn" data-bs-toggle="button" aria-pressed="false">
                            <img src="/js/builder/icons/right-column-layout.svg" width="20" height="20" alt=""
                                role="presentation">
                        </button>
                    </div>
        
                    <div class="btn-group me-3" role="group">
                        <button class="btn btn-light" title="Undo (Ctrl/Cmd + Z)" id="undo-btn" data-vvveb-action="undo"
                            data-vvveb-shortcut="ctrl+z">
                            <i class="la la-undo"></i>
                        </button>
        
                        <button class="btn btn-light" title="Redo (Ctrl/Cmd + Shift + Z)" id="redo-btn" data-vvveb-action="redo"
                            data-vvveb-shortcut="ctrl+shift+z">
                            <i class="la la-undo la-flip-horizontal"></i>
                        </button>
                    </div>
        
        
                    <div class="btn-group me-3" role="group">
                        <button class="btn btn-light" title="Designer Mode (Free component dragging)" id="designer-mode-btn"
                            data-bs-toggle="button" aria-pressed="false" data-vvveb-action="setDesignerMode">
                            <i class="la la-hand-rock"></i>
                        </button>
        
                        <button class="btn btn-light" title="Preview" id="preview-btn" type="button" data-bs-toggle="button"
                            aria-pressed="false" data-vvveb-action="preview">
                            <i class="icon-eye-outline"></i>
                        </button>
        
                        <button class="btn btn-light" title="Fullscreen (F11)" id="fullscreen-btn" data-bs-toggle="button"
                            aria-pressed="false" data-vvveb-action="fullscreen">
                            <i class="icon-expand-outline"></i>
                        </button>
        
                        <button class="btn btn-light" title="Download" id="download-btn" data-vvveb-action="download"
                            data-v-download="index.html">
                            <i class="la la-download"></i>
                        </button>
        
                    </div>
        
        
                    <div class="btn-group me-3 float-end" role="group">
                        <button class="btn btn-primary btn-icon" title="Export (Ctrl + E)" id="save-btn"
                            data-vvveb-action="saveAjax" data-vvveb-url="save.php" data-v-vvveb-shortcut="ctrl+e">
        
                            <span class="loading d-none">
                                <i class="la la-save"></i>
                                <span class="spinner-border spinner-border-sm align-middle" role="status" aria-hidden="true">
                                </span>
                                <span>Saving </span> ... </span>
        
                            <span class="button-text">
                                <i class="la la-save"></i> <span>Save page</span>
                            </span>
        
                        </button>
                    </div>
        
        
                    <div class="float-end me-3">
        
                        <button class="btn btn-light border-0 btn-sm btn-dark-mode" data-vvveb-action="darkMode">
                            <!-- i class="la la-adjust la-lg"></i -->
                            <i class="la la-sun la-lg"></i>
                        </button>
        
                        <a href="#" class="btn btn-outline-primary border-0 btn-sm btn-preview-url" target="blank">
                            View page <i class="la la-external-link-alt la-lg"></i>
                        </a>
        
                        <div class="btn-group responsive-btns" role="group">
        
        
                            <button id="mobile-view" data-view="mobile" class="btn btn-light" title="Mobile view"
                                data-vvveb-action="viewport">
                                <i class="la la-mobile"></i>
                            </button>
        
                            <button id="tablet-view" data-view="tablet" class="btn btn-light" title="Tablet view"
                                data-vvveb-action="viewport">
                                <i class="la la-tablet"></i>
                            </button>
        
                            <button id="desktop-view" data-view="" class="btn btn-light" title="Desktop view"
                                data-vvveb-action="viewport">
                                <i class="la la-laptop"></i>
                            </button>
        
                        </div>
        
                    </div>
        
                </div>
        
        
                <div id="left-panel">
        
                    <div id="filemanager">
                        <div class="header">
                            <span class="text-secondary"><i class="la la-file la-lg"></i> Pages</span>
        
                            <div class="btn-group responsive-btns me-1 float-end" role="group">
                                <button class="btn btn-outline-primary btn-sm  btn-add" title="New file" id="new-file-btn"
                                    data-vvveb-action="newPage" data-vvveb-shortcut="">
                                    <span>New page</span> <i class="icon-duplicate-outline"></i>
                                </button>
        
                                <!--  &ensp;
                                              <button class="btn btn-link text-dark p-0"  title="Delete file" id="delete-file-btn" data-vvveb-action="deletePage" data-vvveb-shortcut="">
                                                  <i class="la la-trash"></i> <small>Delete</small>
                                              </button> -->
                            </div>
        
                        </div>
        
                        <div class="tree">
                            <ol>
                            </ol>
                        </div>
                    </div>
        
        
                    <div class="drag-elements">
        
                        <div class="header">
                            <ul class="nav nav-tabs  nav-fill" id="elements-tabs" role="tablist">
                                <li class="nav-item sections-tab">
                                    <a class="nav-link active" id="sections-tab" data-bs-toggle="tab" href="#sections"
                                        role="tab" aria-controls="sections" aria-selected="true" title="Sections">
                                        <i class="icon-layers-outline"></i>
                                        <!-- img src="../../../js/vvvebjs/icons/list_group.svg" height="23" -->
                                        <!-- div><small>Sections</small></div -->
                                    </a>
                                </li>
                                <li class="nav-item component-tab">
                                    <a class="nav-link" id="components-tab" data-bs-toggle="tab" href="#components-tabs"
                                        role="tab" aria-controls="components" aria-selected="false" title="Components">
                                        <i class="icon-cube-outline"></i>
                                        <!-- img src="../../../js/vvvebjs/icons/product.svg" height="23" -->
                                        <!-- div><small>Components</small></div -->
                                    </a>
                                </li>
                                <!-- li class="nav-item sections-tab">
                                        <a class="nav-link" id="sections-tab" data-bs-toggle="tab" href="#sections" role="tab" aria-controls="sections" aria-selected="false" title="Sections"><img src="../../../js/vvvebjs/icons/list_group.svg" width="24" height="23"> <div><small>Sections</small></div></a>
                                      </li -->
                                <li class="nav-item component-properties-tab" style="display:none">
                                    <a class="nav-link" id="properties-tab" data-bs-toggle="tab" href="#properties" role="tab"
                                        aria-controls="properties" aria-selected="false" title="Properties">
                                        <i class="icon-settings-outline"></i>
                                        <!-- img src="../../../js/vvvebjs/icons/filters.svg" height="23"-->
                                        <!-- div><small>Properties</small></div -->
                                    </a>
                                </li>
                                <li class="nav-item component-configuration-tab">
                                    <a class="nav-link" id="configuration-tab" data-bs-toggle="tab" href="#configuration"
                                        role="tab" aria-controls="configuration" aria-selected="false" title="Configuration">
                                        <i class="la la-tools"></i>
                                        <!-- img src="../../../js/vvvebjs/icons/filters.svg" height="23"-->
                                        <!-- div><small>Properties</small></div -->
                                    </a>
                                </li>
                            </ul>
        
                            <div class="tab-content">
        
        
                                <div class="tab-pane show active sections" id="sections" role="tabpanel"
                                    aria-labelledby="sections-tab">
        
        
                                    <ul class="nav nav-tabs nav-fill sections-tabs" id="properties-tabs" role="tablist">
                                        <li class="nav-item content-tab">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#sections-new-tab" role="tab"
                                                aria-controls="components" aria-selected="false">
                                                <i class="icon-albums-outline"></i>
                                                <div><span>Sections</span></div>
                                            </a>
                                        </li>
                                        <li class="nav-item style-tab">
                                            <a class="nav-link" data-bs-toggle="tab" href="#sections-list" role="tab"
                                                aria-controls="sections" aria-selected="true">
                                                <i class="icon-document-text-outline"></i></i>
                                                <div><span>Page Sections</span></div>
                                            </a>
                                        </li>
                                    </ul>
        
                                    <div class="tab-content">
        
                                        <div class="tab-pane" id="sections-list" data-section="style" role="tabpanel"
                                            aria-labelledby="style-tab">
                                            <div class="drag-elements-sidepane sidepane">
                                                <div>
                                                    <div class="sections-container p-4">
        
                                                        <div class="section-item" draggable="true">
                                                            <div class="controls">
                                                                <div class="handle"></div>
                                                                <div class="info">
                                                                    <div class="name">&nbsp;
                                                                        <div class="type">&nbsp;</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="section-item" draggable="true">
                                                            <div class="controls">
                                                                <div class="handle"></div>
                                                                <div class="info">
                                                                    <div class="name">&nbsp;
                                                                        <div class="type">&nbsp;</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="section-item" draggable="true">
                                                            <div class="controls">
                                                                <div class="handle"></div>
                                                                <div class="info">
                                                                    <div class="name">&nbsp;
                                                                        <div class="type">&nbsp;</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- div class="section-item" draggable="true">
                                                                        <div class="controls">
                                                                            <div class="handle"></div>
                                                                            <div class="info">
                                                                                <div class="name">welcome area
                                                                                    <div class="type">section</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="buttons"> <a class="delete-btn" href="" title="Remove section"><i class="la la-trash text-danger"></i></a>
                                                                                
                                                                                <a class="properties-btn" href="" title="Properties"><i class="icon-settings-outline"></i></a> </div>
                                                                        </div>
                                                                        <input class="header_check" type="checkbox" id="section-components-9338">
                                                                        <label for="section-components-9338">
                                                                            <div class="header-arrow"></div>
                                                                        </label>
                                                                        <div class="tree">
                                                                            <ol></ol>
                                                                        </div>
                                                                    </div -->
        
        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="tab-pane show active" id="sections-new-tab" data-section="content"
                                            role="tabpanel" aria-labelledby="content-tab">
        
        
                                            <div class="search">
                                                <div class="expand">
                                                    <button class="text-sm" title="Expand All" data-vvveb-action="expand"><i
                                                            class="la la-plus"></i></button>
                                                    <button title="Collapse all" data-vvveb-action="collapse"><i
                                                            class="la la-minus"></i></button>
                                                </div>
        
                                                <input class="form-control section-search" placeholder="Search sections"
                                                    type="text" data-vvveb-action="search" data-vvveb-on="keyup">
                                                <button class="clear-backspace" data-vvveb-action="clearSearch"
                                                    title="Clear search">
                                                    <i class="la la-times"></i>
                                                </button>
                                            </div>
        
        
                                            <div class="drag-elements-sidepane sidepane">
                                                <div class="block-preview"><img src="" style="display:none"></div>
                                                <div>
        
                                                    <ul class="sections-list clearfix" data-type="leftpanel">
                                                    </ul>
        
                                                </div>
                                            </div>
        
                                        </div>
        
                                    </div>
        
                                </div>
        
                                <div class="tab-pane show" id="components-tabs" role="tabpanel"
                                    aria-labelledby="components-tab">
        
        
                                    <ul class="nav nav-tabs nav-fill sections-tabs" role="tablist">
                                        <li class="nav-item components-tab">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#components" role="tab"
                                                aria-controls="components" aria-selected="true">
                                                <i class="icon-cube-outline"></i>
                                                <div><span>Components</span></div>
                                            </a>
                                        </li>
                                        <li class="nav-item blocks-tab">
                                            <a class="nav-link" data-bs-toggle="tab" href="#blocks" role="tab"
                                                aria-controls="components" aria-selected="false">
                                                <i class="icon-copy-outline"></i>
                                                <div><span>Blocks</span></div>
                                            </a>
                                        </li>
                                    </ul>
        
                                    <div class="tab-content">
        
                                        <div class="tab-pane show active components" id="components" data-section="components"
                                            role="tabpanel" aria-labelledby="components-tab">
        
                                            <div class="search">
                                                <div class="expand">
                                                    <button class="text-sm" title="Expand All" data-vvveb-action="expand"><i
                                                            class="la la-plus"></i></button>
                                                    <button title="Collapse all" data-vvveb-action="collapse"><i
                                                            class="la la-minus"></i></button>
                                                </div>
        
                                                <input class="form-control component-search" placeholder="Search components"
                                                    type="text" data-vvveb-action="search" data-vvveb-on="keyup">
                                                <button class="clear-backspace" data-vvveb-action="clearSearch">
                                                    <i class="la la-times"></i>
                                                </button>
                                            </div>
        
                                            <div class="drag-elements-sidepane sidepane">
                                                <div>
        
                                                    <ul class="components-list clearfix" data-type="leftpanel">
                                                    </ul>
        
                                                </div>
                                            </div>
                                        </div>
        
        
        
                                        <div class="tab-pane show active blocks" id="blocks" data-section="content"
                                            role="tabpanel" aria-labelledby="content-tab">
        
                                            <div class="search">
                                                <div class="expand">
                                                    <button class="text-sm" title="Expand All" data-vvveb-action="expand"><i
                                                            class="la la-plus"></i></button>
                                                    <button title="Collapse all" data-vvveb-action="collapse"><i
                                                            class="la la-minus"></i></button>
                                                </div>
        
                                                <input class="form-control block-search" placeholder="Search blocks" type="text"
                                                    data-vvveb-action="search" data-vvveb-on="keyup">
                                                <button class="clear-backspace" data-vvveb-action="clearSearch">
                                                    <i class="la la-times"></i>
                                                </button>
                                            </div>
        
        
                                            <div class="drag-elements-sidepane sidepane">
                                                <div class="block-preview"><img src=""></div>
                                                <div>
                                                    <ul class="blocks-list clearfix" data-type="leftpanel">
                                                    </ul>
        
                                                </div>
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
        
                                <div class="tab-pane" id="properties" role="tabpanel" aria-labelledby="properties-tab">
                                    <div class="component-properties-sidepane">
                                        <div>
                                            <div class="component-properties">
                                                <ul class="nav nav-tabs nav-fill" id="properties-tabs" role="tablist">
                                                    <li class="nav-item content-tab">
                                                        <a class="nav-link content-tab active" data-bs-toggle="tab"
                                                            href="#content-left-panel-tab" role="tab" aria-controls="components"
                                                            aria-selected="true">
                                                            <i class="icon-albums-outline"></i>
                                                            <div><span>Content</span></div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item style-tab">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#style-left-panel-tab"
                                                            role="tab" aria-controls="style" aria-selected="false">
                                                            <i class="icon-color-fill-outline"></i>
                                                            <div><span>Style</span></div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item advanced-tab">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#advanced-left-panel-tab"
                                                            role="tab" aria-controls="advanced" aria-selected="false">
                                                            <i class="icon-settings-outline"></i>
                                                            <div><span>Advanced</span></div>
                                                        </a>
                                                    </li>
                                                </ul>
        
                                                <div class="tab-content">
                                                    <div class="tab-pane show active" id="content-left-panel-tab"
                                                        data-section="content" role="tabpanel" aria-labelledby="content-tab">
                                                        <div class="alert alert-dismissible fade show alert-light m-3"
                                                            role="alert" style="">
                                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                                aria-label="Close"></button>
                                                            <strong>No selected element!</strong><br> Click on an element to
                                                            edit.
                                                        </div>
                                                    </div>
        
                                                    <div class="tab-pane show" id="style-left-panel-tab" data-section="style"
                                                        role="tabpanel" aria-labelledby="style-tab">
                                                    </div>
        
                                                    <div class="tab-pane show" id="advanced-left-panel-tab"
                                                        data-section="advanced" role="tabpanel" aria-labelledby="advanced-tab">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="tab-pane" id="configuration" role="tabpanel" aria-labelledby="configuration-tab">
        
                                    <div class="drag-elements-sidepane sidepane">
                                        <div>
                                            <div class="component-properties">
                                                <!-- color palette -->
                                                <!--
                                                    <label class="header" data-header="default" for="header_pallette"><span>Global styles</span>
                                                        <div class="header-arrow"></div>
                                                    </label> -->
                                                <input class="header_check" type="checkbox" checked id="header_pallette">
                                                <div class="tab-pane section px-0" data-section="content">
        
        
                                                    <div class="mb-3  col-sm-6  inline " data-key="background-color"> <label
                                                            class=" form-label" for="input-model">Background Color</label>
                                                        <div class=" input">
                                                            <div> <input name="background-color" type="color"
                                                                    pattern="#[a-f0-9]{6}"
                                                                    class="form-control form-control-color"> </div>
                                                        </div>
                                                    </div>
        
        
        
                                                    <div class="mb-3  col-sm-6  inline " data-key="background-color"> <label
                                                            class=" form-label" for="input-model">Background Color</label>
                                                        <div class=" input">
                                                            <div> <input name="background-color" type="color"
                                                                    pattern="#[a-f0-9]{6}"
                                                                    class="form-control form-control-color"> </div>
                                                        </div>
                                                    </div>
        
        
        
        
                                                </div>
        
        
                                                <!-- typography -->
                                                <!-- 
                                                    <label class="header" data-header="element_header" for="header_element_typography"><span>Typography</span>
                                                        <div class="header-arrow"></div>
                                                    </label>
                                                    
                                                    <input class="header_check" type="checkbox" checked="true" id="header_element_typography">
                                                    <div class="section" data-section="element_header">
                                                    
                                                    </div> 
                                                    -->
        
                                            </div>
                                        </div>
                                    </div>
        
        
                                </div><!-- end configuration tab -->
        
                            </div>
                        </div>
        
                    </div>
                </div>
        
        
                <div id="canvas">
                    <div id="iframe-wrapper">
                        <div id="iframe-layer">
        
                            <div class="loading-message active">
                                <div class="animation-container">
                                    <div class="dot dot-1"></div>
                                    <div class="dot dot-2"></div>
                                    <div class="dot dot-3"></div>
                                </div>
        
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                                    <defs>
                                        <filter id="goo">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                                            <feColorMatrix in="blur" mode="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 21 -7" />
                                        </filter>
                                    </defs>
                                </svg>
                                <!-- https://codepen.io/Izumenko/pen/MpWyXK -->
                            </div>
        
                            <div id="highlight-box">
                                <div id="highlight-name">
                                    <span class="name"></span>
                                    <span class="type"></span>
                                </div>
        
                                <div id="section-actions">
                                    <a id="add-section-btn" href="" title="Add element"><i class="la la-plus"></i></a>
                                </div>
                            </div>
        
                            <div id="select-box">
        
                                <div id="wysiwyg-editor" class="default-editor">
                                    <!--
                                                <a id="bold-btn" href="" title="Bold">
                                                    <svg height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg">
                                                        <path clip-rule="evenodd" d="M56 40V216H148C176.719 216 200 192.719 200 164C200 147.849 192.637 133.418 181.084 123.88C187.926 115.076 192 104.014 192 92C192 63.2812 168.719 40 140 40H56ZM88 144V184H148C159.046 184 168 175.046 168 164C168 152.954 159.046 144 148 144H88ZM88 112V72H140C151.046 72 160 80.9543 160 92C160 103.046 151.046 112 140 112H88Z" fill="#252525" fill-rule="evenodd"/>
                                                    </svg>	
                                                </a>
                                                <a id="italic-btn" href="" title="Italic">
                                                    <svg height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M202 40H84V64H126.182L89.8182 192H54V216H172V192H129.818L166.182 64H202V40Z" fill="#252525"/>
                                                    </svg>											
                                                </a>
                                                <a id="underline-btn" href="" title="Underline">
                                                    <svg height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg">
                                                        <path clip-rule="evenodd" d="M88 40H60V108.004C60 145.56 90.4446 176.004 128 176.004C165.555 176.004 196 145.56 196 108.004V40H168V108C168 130.091 150.091 148 128 148C105.909 148 88 130.091 88 108V40ZM204 216V192H52V216H204Z" fill="#252525" fill-rule="evenodd"/>
                                                    </svg>
                                                </a>
                                                -->
        
                                    <a id="bold-btn" class="hint" href="" title="Bold" aria-label="Bold">
                                        <svg height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6,4h8a4,4,0,0,1,4,4h0a4,4,0,0,1-4,4H6Z" fill="none" stroke="currentColor"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                                            <path d="M6,12h9a4,4,0,0,1,4,4h0a4,4,0,0,1-4,4H6Z" fill="none" stroke="currentColor"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                                        </svg>
                                    </a>
                                    <a id="italic-btn" class="hint" href="" title="Italic" aria-label="Italic">
                                        <svg height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
                                            <line fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" x1="19" x2="10" y1="4" y2="4" />
                                            <line fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" x1="14" x2="5" y1="20" y2="20" />
                                            <line fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" x1="15" x2="9" y1="4" y2="20" />
                                        </svg>
                                    </a>
                                    <a id="underline-btn" class="hint" href="" title="Underline" aria-label="Underline">
                                        <svg height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6,4v7a6,6,0,0,0,6,6h0a6,6,0,0,0,6-6V4" fill="none" stroke="currentColor"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" y1="2" y2="2" />
                                            <line fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" x1="4" x2="20" y1="22" y2="22" />
                                        </svg>
                                    </a>
        
        
                                    <a id="strike-btn" class="hint" href="" title="Strikeout" aria-label="Strikeout">
                                        <del>S</del>
                                    </a>
        
                                    <div class="dropdown">
                                        <a class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="hint" aria-label="Text align"><i class="la la-align-left"></i></span>
                                        </a>
        
                                        <div id="justify-btn" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-value="Left"><i
                                                    class="la la-lg la-align-left"></i> Align Left</a>
                                            <a class="dropdown-item" href="#" data-value="Center"><i
                                                    class="la la-lg la-align-center"></i> Align Center</a>
                                            <a class="dropdown-item" href="#" data-value="Right"><i
                                                    class="la la-lg la-align-right"></i> Align Right</a>
                                            <a class="dropdown-item" href="#" data-value="Full"><i
                                                    class="la la-lg la-align-justify"></i> Align Justify</a>
                                        </div>
                                    </div>
        
                                    <div class="separator"></div>
        
                                    <a id="link-btn" class="hint" href="" title="Create link" aria-label="Create link">
                                        <i class="la la-link">
                                        </i></a>
        
                                    <div class="separator"></div>
        
                                    <input id="fore-color" name="color" type="color" aria-label="Text color"
                                        pattern="#[a-f0-9]{6}" class="form-control form-control-color hint">
                                    <input id="back-color" name="background-color" type="color" aria-label="Background color"
                                        pattern="#[a-f0-9]{6}" class="form-control form-control-color hint">
        
                                    <div class="separator"></div>
        
                                    <select id="font-size" class="form-select" aria-label="Font size">
                                        <option value="">- Font size -</option>
                                        <option value="8px">8 px</option>
                                        <option value="9px">9 px</option>
                                        <option value="10px">10 px</option>
                                        <option value="11px">11 px</option>
                                        <option value="12px">12 px</option>
                                        <option value="13px">13 px</option>
                                        <option value="14px">14 px</option>
                                        <option value="15px">15 px</option>
                                        <option value="16px">16 px</option>
                                        <option value="17px">17 px</option>
                                        <option value="18px">18 px</option>
                                        <option value="19px">19 px</option>
                                        <option value="20px">20 px</option>
                                        <option value="21px">21 px</option>
                                        <option value="22px">22 px</option>
                                        <option value="23px">23 px</option>
                                        <option value="24px">24 px</option>
                                        <option value="25px">25 px</option>
                                        <option value="26px">26 px</option>
                                        <option value="27px">27 px</option>
                                        <option value="28px">28 px</option>
                                    </select>
        
                                    <div class="separator"></div>
        
                                    <select id="font-family" class="form-select" title="Font family">
                                        <option value=""> - Font family - </option>
                                        <optgroup label="System default">
                                            <option value="Arial, Helvetica, sans-serif">Arial</option>
                                            <option value="'Lucida Sans Unicode', 'Lucida Grande', sans-serif">Lucida Grande
                                            </option>
                                            <option value="'Palatino Linotype', 'Book Antiqua', Palatino, serif">Palatino
                                                Linotype</option>
                                            <option value="'Times New Roman', Times, serif">Times New Roman</option>
                                            <option value="Georgia, serif">Georgia, serif</option>
                                            <option value="Tahoma, Geneva, sans-serif">Tahoma</option>
                                            <option value="'Comic Sans MS', cursive, sans-serif">Comic Sans</option>
                                            <option value="Verdana, Geneva, sans-serif">Verdana</option>
                                            <option value="Impact, Charcoal, sans-serif">Impact</option>
                                            <option value="'Arial Black', Gadget, sans-serif">Arial Black</option>
                                            <option value="'Trebuchet MS', Helvetica, sans-serif">Trebuchet</option>
                                            <option value="'Courier New', Courier, monospace">Courier New</option>
                                            <option value="'Brush Script MT', sans-serif">Brush Script</option>
                                        </optgroup>
                                    </select>
                                </div>
        
                                <div id="select-actions">
                                    <a id="drag-btn" href="" title="Drag element"><i class="la la-arrows-alt"></i></a>
                                    <a id="parent-btn" href="" title="Select parent" class="la-rotate-180"><i
                                            class="la la-level-up-alt"></i></a>
        
                                    <a id="up-btn" href="" title="Move element up"><i class="la la-arrow-up"></i></a>
                                    <a id="down-btn" href="" title="Move element down"><i class="la la-arrow-down"></i></a>
                                    <a id="edit-code-btn" href="" title="Edit html code"><i class="icon-code-outline"></i></a>
        
                                    <a id="save-reusable-btn" href="" title="Save as reusable" class="mx-2"><i
                                            class="icon-save-outline"></i></i></a>
                                    <a id="clone-btn" href="" title="Clone element"><i class="icon-copy-outline"></i></a>
                                    <a id="delete-btn" href="" title="Remove element"><i class="icon-trash-outline"></i></i></a>
                                </div>
        
                                <div class="resize">
                                    <!-- top -->
                                    <div class="top-left">
                                    </div>
                                    <div class="top-center">
                                    </div>
                                    <div class="top-right">
                                    </div>
                                    <!-- center -->
                                    <div class="center-left">
                                    </div>
                                    <div class="center-right">
                                    </div>
                                    <!-- bottom -->
                                    <div class="bottom-left">
                                    </div>
                                    <div class="bottom-center">
                                    </div>
                                    <div class="bottom-right">
                                    </div>
                                </div>
        
                            </div>
        
                            <!-- add section box -->
                            <div id="add-section-box" class="drag-elements">
        
                                <div class="header">
                                    <ul class="nav nav-tabs" id="box-elements-tabs" role="tablist">
                                        <li class="nav-item component-tab">
                                            <a class="nav-link active" id="box-components-tab" data-bs-toggle="tab"
                                                href="#box-components" role="tab" aria-controls="components"
                                                aria-selected="true"><i class="la la-lg la-cube"></i>
                                                <div><small>Components</small></div>
                                            </a>
                                        </li>
                                        <li class="nav-item sections-tab">
                                            <a class="nav-link" id="box-sections-tab" data-bs-toggle="tab" href="#box-blocks"
                                                role="tab" aria-controls="blocks" aria-selected="false"><i
                                                    class="la la-lg la-image"></i>
                                                <div><small>Blocks</small></div>
                                            </a>
                                        </li>
                                        <!--
                                                  <li class="nav-item component-properties-tab" style="display:none">
                                                    <a class="nav-link" id="box-properties-tab" data-bs-toggle="tab" href="#box-properties" role="tab" aria-controls="properties" aria-selected="false"><i class="la la-lg la-cog"></i> <div><small>Properties</small></div></a>
                                                  </li>
                                  -->
                                    </ul>
        
                                    <div class="section-box-actions">
        
                                        <div id="close-section-btn" class="btn btn-light btn-sm float-end mt-1"><i
                                                class="la la-times la-lg"></i></div>
        
                                        <div class="mt-2 me-3 float-end">
        
                                            <div class="form-check d-inline-block me-1">
                                                <input type="radio" id="add-section-insert-mode-after" value="after"
                                                    checked="checked" name="add-section-insert-mode" class="form-check-input">
                                                <label class="form-check-label small"
                                                    for="add-section-insert-mode-after">After</label>
                                            </div>
        
                                            <div class="form-check d-inline-block">
                                                <input type="radio" id="add-section-insert-mode-inside" value="inside"
                                                    name="add-section-insert-mode" class="form-check-input">
                                                <label class="form-check-label small"
                                                    for="add-section-insert-mode-inside">Inside</label>
                                            </div>
        
                                        </div>
        
                                    </div>
        
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="box-components" role="tabpanel"
                                            aria-labelledby="components-tab">
        
                                            <div class="search">
                                                <div class="expand">
                                                    <button class="text-sm" title="Expand All" data-vvveb-action="expand"><i
                                                            class="la la-plus"></i></button>
                                                    <button title="Collapse all" data-vvveb-action="collapse"><i
                                                            class="la la-minus"></i></button>
                                                </div>
        
                                                <input class="form-control component-search" placeholder="Search components"
                                                    type="text" data-vvveb-action="search" data-vvveb-on="keyup">
                                                <button class="clear-backspace" data-vvveb-action="clearSearch">
                                                    <i class="la la-times"></i>
                                                </button>
                                            </div>
        
                                            <div>
                                                <div>
        
                                                    <ul class="components-list clearfix" data-type="addbox">
                                                    </ul>
        
                                                </div>
                                            </div>
        
                                        </div>
                                        <div class="tab-pane" id="box-blocks" role="tabpanel" aria-labelledby="blocks-tab">
        
                                            <div class="search">
                                                <div class="expand">
                                                    <button class="text-sm" title="Expand All" data-vvveb-action="expand"><i
                                                            class="la la-plus"></i></button>
                                                    <button title="Collapse all" data-vvveb-action="collapse"><i
                                                            class="la la-minus"></i></button>
                                                </div>
        
                                                <input class="form-control block-search" placeholder="Search blocks" type="text"
                                                    data-vvveb-action="search" data-vvveb-on="keyup">
                                                <button class="clear-backspace" data-vvveb-action="clearSearch">
                                                    <i class="la la-times"></i>
                                                </button>
                                            </div>
        
                                            <div>
                                                <div>
        
                                                    <ul class="blocks-list clearfix" data-type="addbox">
                                                    </ul>
        
                                                </div>
                                            </div>
        
                                        </div>
        
                                        <!-- div class="tab-pane" id="box-properties" role="tabpanel" aria-labelledby="blocks-tab">
                                                        <div class="component-properties-sidepane">
                                                            <div>
                                                                <div class="component-properties">
                                                                    <div class="mt-4 text-center">Click on an element to edit.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div -->
                                    </div>
                                </div>
        
                            </div>
                            <!-- //add section box -->
        
                            <div id="drop-highlight-box">
                            </div>
                        </div>
        
        
                        <iframe src="" id="iframe1">
                        </iframe>
                    </div>
        
        
                </div>
        
                <div id="right-panel">
                    <div class="component-properties">
        
                        <ul class="nav nav-tabs nav-fill" id="properties-tabs" role="tablist">
                            <li class="nav-item content-tab">
                                <a class="nav-link active" data-bs-toggle="tab" href="#content-tab" role="tab"
                                    aria-controls="components" aria-selected="true">
                                    <i class="icon-albums-outline"></i>
                                    <div><span>Content</span></div>
                                </a>
                            </li>
                            <li class="nav-item style-tab">
                                <a class="nav-link" data-bs-toggle="tab" href="#style-tab" role="tab" aria-controls="blocks"
                                    aria-selected="false">
                                    <i class="icon-color-fill-outline"></i></i>
                                    <div><span>Style</span></div>
                                </a>
                            </li>
                            <li class="nav-item advanced-tab">
                                <a class="nav-link" data-bs-toggle="tab" href="#advanced-tab" role="tab" aria-controls="blocks"
                                    aria-selected="false">
                                    <i class="icon-settings-outline"></i>
                                    <div><span>Advanced</span></div>
                                </a>
                            </li>
                        </ul>
        
                        <div class="tab-content">
                            <div class="tab-pane show active" id="content-tab" data-section="content" role="tabpanel"
                                aria-labelledby="content-tab">
                                <div class="alert alert-dismissible fade show alert-light m-3" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <strong>No selected element!</strong><br> Click on an element to edit.
                                </div>
                            </div>
        
                            <div class="tab-pane show" id="style-tab" data-section="style" role="tabpanel"
                                aria-labelledby="style-tab">
                            </div>
        
                            <div class="tab-pane show" id="advanced-tab" data-section="advanced" role="tabpanel"
                                aria-labelledby="advanced-tab">
                            </div>
        
        
                        </div>
        
        
        
                    </div>
                </div>
        
                <div id="bottom-panel">
        
                    <div>
        
                        <div class="breadcrumb-navigator px-2" style="--bs-breadcrumb-divider: '>';">
        
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">body</a></li>
                                <li class="breadcrumb-item"><a href="#">section</a></li>
                                <li class="breadcrumb-item"><a href="#">img</a></li>
                            </ol>
                        </div>
        
        
                        <div class="btn-group" role="group">
        
                            <div id="toggleEditorJsExecute" class="form-check mt-1" style="display:none">
                                <input type="checkbox" class="form-check-input" id="runjs" name="runjs"
                                    data-vvveb-action="toggleEditorJsExecute">
                                <label class="form-check-label" for="runjs"><small>Run javascript code on
                                        edit</small></label>&ensp;
                            </div>
        
        
                            <button id="code-editor-btn" data-view="mobile" class="btn btn-sm btn-light btn-sm"
                                title="Code editor" data-vvveb-action="toggleEditor">
                                <i class="la la-code"></i> Code editor
                            </button>
        
        
                        </div>
        
                    </div>
        
                    <div id="vvveb-code-editor">
                        <textarea class="form-control"></textarea>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- templates -->
        @include('includes.builder-templates')

        <!-- modals -->
        @include('includes.builder-modals')
    </div>

    <!-- jquery-->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery.hotkeys.js"></script>

    <!-- bootstrap-->
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <!-- builder code-->
    <script src="/js/builder/builder.js"></script>
    <!-- undo manager-->
    <script src="/js/builder/undo.js"></script>
    <!-- inputs-->
    <script src="/js/builder/inputs.js"></script>


    <!-- media gallery -->
    <link href="/js/libs/media/media.css" rel="stylesheet">
    
    <script>
        window.mediaPath = '../../media';
        Vvveb.themeBaseUrl = "{{ $store->directory }}";
    </script>
    
    <script src="/js/libs/media/media.js"></script>
    <script src="/js/libs/media/openverse.js"></script>
    <script src="/js/builder/plugin-media.js"></script>
    <script id="index-js" type="module" src="/js/libs/vvveb/index.js"></script>
    <script src="/js/builder/resources.js"></script>

    <!-- inputs-->
    <script src="/js/builder/inputs.js"></script>
    <script data-v-theme-inputs src="/js/builder/inputs.js"></script>

    <!-- bootstrap colorpicker //uncomment bellow scripts to enable -->
    {{-- <script src="/js/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <link href="/js/libs/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <script src="/js/builder/plugin-bootstrap-colorpicker.js"></script> --}}

    <!-- components-->
    <!-- script src="/js/builder/components-server.js"></script -->
    <script src="/js/builder/plugin-google-fonts.js"></script>
    <script src="/js/builder/components-common.js"></script>
    <script src="/js/builder/components-html.js"></script>
    <script src="/js/builder/plugin-aos.js"></script>
    <script src="/js/builder/components-elements.js"></script>
    <script src="/js/builder/section.js"></script>
    <script src="/js/builder/components-bootstrap5.js"></script>
    <script src="/js/builder/components-widgets.js"></script>

    <script type="module" src="/js/bulder/components/content/index.js" crossorigin="use-credentials"></script>
    <script type="module" src="/js/builder/components/ecommerce/index.js" crossorigin="use-credentials"></script>

    <script data-v-theme-components src="/js/builder/components.js"></script>

    <!-- sections-->
    {{-- <script src="/demo/landing/sections/sections.js"></script> --}}
    <script src="/js/builder/section.js"></script>
    <script src="/js/builder/sections-bootstrap4.js"></script>

    <!-- blocks-->
    <script src="/js/builder/blocks-bootstrap4.js"></script>

    <!-- plugins -->

    <!-- code mirror - code editor syntax highlight -->
    <link href="/js/libs/codemirror/lib/codemirror.css" rel="stylesheet" />
    <link href="/js/libs/codemirror/theme/material.css" rel="stylesheet" />
    <script src="/js/libs/codemirror/lib/codemirror.js"></script>
    <script src="/js/libs/codemirror/lib/xml.js"></script>
    <script src="/js/libs/codemirror/lib/formatting.js"></script>
    <script src="/js/builder/plugin-codemirror.js"></script>


    <!-- Tinymce plugin Clone or copy https://github.com/tinymce/tinymce-dist to libs/tinymce-dist -->
    {{-- <script src="/js/libs/tinymce-dist/tinymce.min.js"></script>
    <script src="/js/builder/plugin-tinymce.js"></script>	 --}}

    <!-- 
CKEditor plugin
Unzip the latest ckeditor release zip from https://github.com/ckeditor/ckeditor4/releases to libs/ckeditor or use the CDN
-->
    <!--
<script src="/js/libs/ckeditor/ckeditor.js"></script> <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
<script src="/js/builder/plugin-ckeditor.js"></script>	
-->

    <!-- jszip - download page as zip -->
    <script src="/js/libs/jszip/jszip.min.js"></script>
    <script src="/js/libs/jszip/filesaver.min.js"></script>
    <script src="/js/builder/plugin-jszip.js"></script>


    <!-- autocomplete plugin used by autocomplete input-->
    <script src="/js/libs/autocomplete/jquery.autocomplete.js"></script>

    <script>
        let renameUrl = 'save.php?action=rename';
        let deleteUrl = 'save.php?action=delete';
        let saveReusableUrl = 'save.php?action=saveReusable';
        // let themeAssets = [
        //     '/themes/wokiee/css/style.css',
        //     '/themes/wokiee/js/bundle.js'
        // ];
        let themeAssets = @json($store->theme->assets);

        let pages = [
            @foreach ($store->pages as $page)
                { name: "{{ $page->name }}", title: "{{ $page->title }}", url: "{{ $page->url }}", file: "{{ $page->file }}", assets: themeAssets },
            @endforeach
        ];

        $(function() {
            let firstPage = Object.keys(pages)[0];
            Vvveb.Builder.init(pages[firstPage]["url"], function() {
                //load code after page is loaded here
            });

            Vvveb.Gui.init();
            Vvveb.FileManager.init();
            Vvveb.SectionList.init();
            Vvveb.Breadcrumb.init();

            var fileManagerComponents = [];
            fileManagerComponents = fileManagerComponents.concat(Vvveb.ComponentsGroup['Ecommerce'], Vvveb.ComponentsGroup['Content']);

            Vvveb.FileManager.init(fileManagerComponents);
            Vvveb.SectionList.init(fileManagerComponents);

            Vvveb.FileManager.addPages(pages);
            Vvveb.FileManager.loadPage(pages[firstPage]["name"], fileManagerComponents);
            Vvveb.Breadcrumb.init();

            //if url has #no-right-panel set one panel demo
            if (window.location.hash.indexOf("no-right-panel") != -1) {
                Vvveb.Gui.toggleRightColumn();
            }
        });

    </script>
</body>

</html>
