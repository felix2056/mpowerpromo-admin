<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="comp-summer-editons-2024">
<head>
    <title>Dashboard | {{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
        .vue-notification-group {
            display: block;
            position: fixed;
            z-index: 5000
        }

        .vue-notification-wrapper {
            display: block;
            overflow: hidden;
            width: 100%;
            margin: 0;
            padding: 0
        }

        .notification-title {
            font-weight: 600
        }

        .vue-notification-template {
            background: #fff
        }

        .vue-notification,
        .vue-notification-template {
            display: block;
            box-sizing: border-box;
            text-align: left
        }

        .vue-notification {
            font-size: 12px;
            padding: 10px;
            margin: 0 5px 5px;
            color: #fff;
            background: #44a4fc;
            border-left: 5px solid #187fe7
        }

        .vue-notification.warn {
            background: #ffb648;
            border-left-color: #f48a06
        }

        .vue-notification.error {
            background: #e54d42;
            border-left-color: #b82e24
        }

        .vue-notification.success {
            background: #68cd86;
            border-left-color: #42a85f
        }

        .vn-fade-enter-active,
        .vn-fade-leave-active,
        .vn-fade-move {
            transition: all .5s
        }

        .vn-fade-enter,
        .vn-fade-leave-to {
            opacity: 0
        }

    </style>
    <style type="text/css">
        .date-range-dropdown-menu.dropdown-menu {
            width: 160px;
            right: -160px;
            display: block;
            left: auto;
            top: -3px;
            bottom: 0
        }

    </style>
    <style type="text/css">
        .dropdown-menu-form[data-v-20278007] {
            padding: 5px 10px 0
        }

        .optionList[data-v-20278007] {
            max-height: 50vh;
            overflow-y: auto
        }

        .dropdown-menu[data-v-20278007] {
            position: relative;
            display: block
        }

        #dropdown-header-label[data-v-20278007] {
            padding: 5px
        }

        .dropdown-item[data-v-20278007]:active,
        .dropdown-item[data-v-20278007]:focus,
        .dropdown-item[data-v-20278007]:hover {
            background-color: transparent !important
        }

    </style>
    <style type="text/css">
        .in-active {
            pointer-events: none;
            opacity: .7
        }

    </style>
    <style type="text/css">
        .loadingTable table.VueTables__table.table {
            opacity: .6
        }

        table.VueTables__table.table td,
        table.VueTables__table.table th {
            min-width: 100px
        }

        table.VueTables__table.table td>.text-ellipsis,
        table.VueTables__table.table th>.text-ellipsis {
            max-width: 200px;
            text-overflow: ellipsis;
            overflow: hidden;
            display: block;
            white-space: nowrap
        }

    </style>
    <style type="text/css">
        .autocomplete-input-loader {
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center
        }

    </style>
    <style type="text/css">
        .pointer[data-v-3a7e9bf2] {
            cursor: pointer
        }

    </style>
    <style type="text/css">
        input::-webkit-inner-spin-button,
        input::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0
        }

        input[type=number] {
            -moz-appearance: textfield
        }

    </style>
    <style type="text/css">
        fieldset[disabled] .multiselect {
            pointer-events: none
        }

        .multiselect__spinner {
            position: absolute;
            right: 1px;
            top: 1px;
            width: 48px;
            height: 35px;
            background: #fff;
            display: block
        }

        .multiselect__spinner:after,
        .multiselect__spinner:before {
            position: absolute;
            content: "";
            top: 50%;
            left: 50%;
            margin: -8px 0 0 -8px;
            width: 16px;
            height: 16px;
            border-radius: 100%;
            border: 2px solid transparent;
            border-top-color: #41b883;
            box-shadow: 0 0 0 1px transparent
        }

        .multiselect__spinner:before {
            animation: spinning 2.4s cubic-bezier(.41, .26, .2, .62);
            animation-iteration-count: infinite
        }

        .multiselect__spinner:after {
            animation: spinning 2.4s cubic-bezier(.51, .09, .21, .8);
            animation-iteration-count: infinite
        }

        .multiselect__loading-enter-active,
        .multiselect__loading-leave-active {
            transition: opacity .4s ease-in-out;
            opacity: 1
        }

        .multiselect__loading-enter,
        .multiselect__loading-leave-active {
            opacity: 0
        }

        .multiselect,
        .multiselect__input,
        .multiselect__single {
            font-family: inherit;
            font-size: 16px;
            -ms-touch-action: manipulation;
            touch-action: manipulation
        }

        .multiselect {
            box-sizing: content-box;
            display: block;
            position: relative;
            width: 100%;
            min-height: 40px;
            text-align: left;
            color: #35495e
        }

        .multiselect * {
            box-sizing: border-box
        }

        .multiselect:focus {
            outline: none
        }

        .multiselect--disabled {
            background: #ededed;
            pointer-events: none;
            opacity: .6
        }

        .multiselect--active {
            z-index: 50
        }

        .multiselect--active:not(.multiselect--above) .multiselect__current,
        .multiselect--active:not(.multiselect--above) .multiselect__input,
        .multiselect--active:not(.multiselect--above) .multiselect__tags {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0
        }

        .multiselect--active .multiselect__select {
            transform: rotate(180deg)
        }

        .multiselect--above.multiselect--active .multiselect__current,
        .multiselect--above.multiselect--active .multiselect__input,
        .multiselect--above.multiselect--active .multiselect__tags {
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .multiselect__input,
        .multiselect__single {
            position: relative;
            display: inline-block;
            min-height: 20px;
            line-height: 20px;
            border: none;
            border-radius: 5px;
            background: #fff;
            padding: 0 0 0 5px;
            width: 100%;
            transition: border .1s ease;
            box-sizing: border-box;
            margin-bottom: 8px;
            vertical-align: top
        }

        .multiselect__input:-ms-input-placeholder {
            color: #35495e
        }

        .multiselect__input::placeholder {
            color: #35495e
        }

        .multiselect__tag~.multiselect__input,
        .multiselect__tag~.multiselect__single {
            width: auto
        }

        .multiselect__input:hover,
        .multiselect__single:hover {
            border-color: #cfcfcf
        }

        .multiselect__input:focus,
        .multiselect__single:focus {
            border-color: #a8a8a8;
            outline: none
        }

        .multiselect__single {
            padding-left: 5px;
            margin-bottom: 8px
        }

        .multiselect__tags-wrap {
            display: inline
        }

        .multiselect__tags {
            min-height: 40px;
            display: block;
            padding: 8px 40px 0 8px;
            border-radius: 5px;
            border: 1px solid #e8e8e8;
            background: #fff;
            font-size: 14px
        }

        .multiselect__tag {
            position: relative;
            display: inline-block;
            padding: 4px 26px 4px 10px;
            border-radius: 5px;
            margin-right: 10px;
            color: #fff;
            line-height: 1;
            background: #41b883;
            margin-bottom: 5px;
            white-space: nowrap;
            overflow: hidden;
            max-width: 100%;
            text-overflow: ellipsis
        }

        .multiselect__tag-icon {
            cursor: pointer;
            margin-left: 7px;
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            font-weight: 700;
            font-style: normal;
            width: 22px;
            text-align: center;
            line-height: 22px;
            transition: all .2s ease;
            border-radius: 5px
        }

        .multiselect__tag-icon:after {
            content: "\D7";
            color: #266d4d;
            font-size: 14px
        }

        .multiselect__tag-icon:focus,
        .multiselect__tag-icon:hover {
            background: #369a6e
        }

        .multiselect__tag-icon:focus:after,
        .multiselect__tag-icon:hover:after {
            color: #fff
        }

        .multiselect__current {
            min-height: 40px;
            overflow: hidden;
            padding: 8px 30px 0 12px;
            white-space: nowrap;
            border-radius: 5px;
            border: 1px solid #e8e8e8
        }

        .multiselect__current,
        .multiselect__select {
            line-height: 16px;
            box-sizing: border-box;
            display: block;
            margin: 0;
            text-decoration: none;
            cursor: pointer
        }

        .multiselect__select {
            position: absolute;
            width: 40px;
            height: 38px;
            right: 1px;
            top: 1px;
            padding: 4px 8px;
            text-align: center;
            transition: transform .2s ease
        }

        .multiselect__select:before {
            position: relative;
            right: 0;
            top: 65%;
            color: #999;
            margin-top: 4px;
            border-color: #999 transparent transparent;
            border-style: solid;
            border-width: 5px 5px 0;
            content: ""
        }

        .multiselect__placeholder {
            color: #adadad;
            display: inline-block;
            margin-bottom: 10px;
            padding-top: 2px
        }

        .multiselect--active .multiselect__placeholder {
            display: none
        }

        .multiselect__content-wrapper {
            position: absolute;
            display: block;
            background: #fff;
            width: 100%;
            max-height: 240px;
            overflow: auto;
            border: 1px solid #e8e8e8;
            border-top: none;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
            z-index: 50;
            -webkit-overflow-scrolling: touch
        }

        .multiselect__content {
            list-style: none;
            display: inline-block;
            padding: 0;
            margin: 0;
            min-width: 100%;
            vertical-align: top
        }

        .multiselect--above .multiselect__content-wrapper {
            bottom: 100%;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            border-bottom: none;
            border-top: 1px solid #e8e8e8
        }

        .multiselect__content::webkit-scrollbar {
            display: none
        }

        .multiselect__element {
            display: block
        }

        .multiselect__option {
            display: block;
            padding: 12px;
            min-height: 40px;
            line-height: 16px;
            text-decoration: none;
            text-transform: none;
            vertical-align: middle;
            position: relative;
            cursor: pointer;
            white-space: nowrap
        }

        .multiselect__option:after {
            top: 0;
            right: 0;
            position: absolute;
            line-height: 40px;
            padding-right: 12px;
            padding-left: 20px;
            font-size: 13px
        }

        .multiselect__option--highlight {
            background: #41b883;
            outline: none;
            color: #fff
        }

        .multiselect__option--highlight:after {
            content: attr(data-select);
            background: #41b883;
            color: #fff
        }

        .multiselect__option--selected {
            background: #f3f3f3;
            color: #35495e;
            font-weight: 700
        }

        .multiselect__option--selected:after {
            content: attr(data-selected);
            color: silver
        }

        .multiselect__option--selected.multiselect__option--highlight {
            background: #ff6a6a;
            color: #fff
        }

        .multiselect__option--selected.multiselect__option--highlight:after {
            background: #ff6a6a;
            content: attr(data-deselect);
            color: #fff
        }

        .multiselect--disabled .multiselect__current,
        .multiselect--disabled .multiselect__select {
            background: #ededed;
            color: #a6a6a6
        }

        .multiselect__option--disabled {
            background: #ededed !important;
            color: #a6a6a6 !important;
            cursor: text;
            pointer-events: none
        }

        .multiselect__option--group {
            background: #ededed;
            color: #35495e
        }

        .multiselect__option--group.multiselect__option--highlight {
            background: #35495e;
            color: #fff
        }

        .multiselect__option--group.multiselect__option--highlight:after {
            background: #35495e
        }

        .multiselect__option--disabled.multiselect__option--highlight {
            background: #dedede
        }

        .multiselect__option--group-selected.multiselect__option--highlight {
            background: #ff6a6a;
            color: #fff
        }

        .multiselect__option--group-selected.multiselect__option--highlight:after {
            background: #ff6a6a;
            content: attr(data-deselect);
            color: #fff
        }

        .multiselect-enter-active,
        .multiselect-leave-active {
            transition: all .15s ease
        }

        .multiselect-enter,
        .multiselect-leave-active {
            opacity: 0
        }

        .multiselect__strong {
            margin-bottom: 8px;
            line-height: 20px;
            display: inline-block;
            vertical-align: top
        }

        [dir=rtl] .multiselect {
            text-align: right
        }

        [dir=rtl] .multiselect__select {
            right: auto;
            left: 1px
        }

        [dir=rtl] .multiselect__tags {
            padding: 8px 8px 0 40px
        }

        [dir=rtl] .multiselect__content {
            text-align: right
        }

        [dir=rtl] .multiselect__option:after {
            right: auto;
            left: 0
        }

        [dir=rtl] .multiselect__clear {
            right: auto;
            left: 12px
        }

        [dir=rtl] .multiselect__spinner {
            right: auto;
            left: 1px
        }

        @keyframes spinning {
            0% {
                transform: rotate(0)
            }

            to {
                transform: rotate(2turn)
            }
        }

    </style>
    <style type="text/css">
        .mpower-drag-file .mpower-upload {
            pointer-events: none
        }

        .mpower-drag-file .mpower-drag-area {
            display: block
        }

        .mpower-drag-area {
            position: relative
        }

        .mpower-drag-area .input-file {
            display: block;
            opacity: 0;
            width: 100%;
            height: 100px;
            position: absolute;
            cursor: pointer
        }

    </style>
    <style type="text/css">
        .text-line {
            display: flex;
            flex-direction: row
        }

        .text-line:after,
        .text-line:before {
            content: "";
            flex: 1 1;
            border-bottom: 1px solid #ccc;
            margin: auto
        }

    </style>
    <style type="text/css">
        .vue-swatches__check__wrapper {
            position: absolute;
            width: 100%;
            height: 100%
        }

        .vue-swatches__check__circle {
            width: 21px;
            height: 21px;
            border-radius: 50%;
            background-color: rgba(0, 0, 0, .15)
        }

        .vue-swatches__check__path {
            fill: #fff
        }

        .vue-swatches__swatch {
            position: relative;
            display: inline-block;
            font-size: 0
        }

        .vue-swatches__swatch:focus,
        .vue-swatches__swatch:hover {
            opacity: .9;
            box-shadow: inset 0 0 2px rgba(0, 0, 0, .75);
            outline: none
        }

        .vue-swatches__swatch.vue-swatches__swatch--border,
        .vue-swatches__swatch.vue-swatches__swatch--selected {
            box-shadow: inset 0 0 2px rgba(0, 0, 0, .75)
        }

        .vue-swatches__swatch__label {
            position: absolute;
            left: 0;
            right: 0;
            color: #666;
            font-size: 10px;
            font-weight: 700;
            text-align: center
        }

        .vue-swatches__swatch .vue-swatches__diagonal__wrapper {
            position: absolute
        }

        fieldset[disabled] .vue-swatches {
            pointer-events: none
        }

        .vue-swatches {
            position: relative;
            display: inline-block;
            outline: none
        }

        .vue-swatches__trigger__wrapper {
            display: inline-block;
            cursor: pointer
        }

        .vue-swatches__trigger.vue-swatches--is-empty {
            border: 2px solid #ccc
        }

        .vue-swatches__trigger.vue-swatches--is-disabled {
            cursor: not-allowed
        }

        .vue-swatches__container {
            box-sizing: content-box
        }

        .vue-swatches__container.vue-swatches--inline {
            font-size: 0
        }

        .vue-swatches__container:not(.vue-swatches--inline) {
            position: absolute;
            display: block;
            overflow: auto;
            border-radius: 5px;
            box-shadow: 0 2px 3px hsla(0, 0%, 4%, .2), 0 0 0 1px hsla(0, 0%, 4%, .2);
            z-index: 50
        }

        .vue-swatches__wrapper {
            background-color: inherit;
            box-sizing: content-box
        }

        .vue-swatches__row {
            font-size: 0
        }

        .vue-swatches__fallback__wrapper {
            display: table
        }

        .vue-swatches__fallback__input--wrapper {
            display: table-cell;
            padding-right: 10px;
            width: 100%;
            font-size: 14px
        }

        .vue-swatches__fallback__input {
            width: 100%;
            padding-top: 6px;
            padding-bottom: 6px;
            border-radius: 5px;
            border: 1px solid #dcdcdc;
            color: #35495e;
            background: #fff
        }

        .vue-swatches__fallback__button {
            display: table-cell;
            padding: 6px 15px;
            border: 0;
            cursor: pointer;
            font-weight: 700;
            color: #fff;
            background-color: #3571c8;
            border-radius: 5px
        }

        .vue-swatches-show-hide-enter-active,
        .vue-swatches-show-hide-leave-active {
            transition: all .3s ease
        }

        .vue-swatches-show-hide-enter,
        .vue-swatches-show-hide-leave-active {
            opacity: 0
        }

        .vue-swatches--has-children-centered {
            display: flex;
            align-items: center;
            justify-content: center
        }

        .vue-swatches__diagonal__wrapper {
            width: 100%;
            height: 100%
        }

        .vue-swatches__diagonal {
            width: 75%;
            height: 75%;
            background: linear-gradient(to top right, transparent 0, transparent calc(50% - 2.4px), #de080a 50%, transparent calc(50% + 2.4px), transparent)
        }

    </style>
    <style type="text/css">
        .designer-text {
            min-height: 60px
        }

        .designer-text #dropdownFonts button {
            border: 1px solid #e6e6e6;
            border-radius: 4px;
            background-color: #fff;
            width: 100%
        }

        .designer-text #dropdownFonts ul {
            max-height: 80vh;
            overflow: auto
        }

        .designer-text .opacity-50 {
            opacity: .5
        }

        .designer-text .opacity-100 {
            opacity: 1
        }

    </style>
    <style type="text/css">
        .vue-swatches__trigger {
            border: 1px solid grey
        }

    </style>
    <style type="text/css">
        .mpower-designer-viewer canvas[data-v-60b8af50] {
            border-radius: 10px
        }

        .mpower-designer-viewer .blur[data-v-60b8af50] {
            filter: blur(8px)
        }

        .mpower-designer-viewer .disabled[data-v-60b8af50] {
            opacity: .6;
            pointer-events: none;
            cursor: crosshair
        }

        .mpower-designer-viewer .abs-middle[data-v-60b8af50] {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            flex-direction: column;
            align-items: center;
            justify-content: center
        }

    </style>
    <style type="text/css">
        .mpower-drag-file {
            filter: blur(8px);
            overflow: hidden
        }

        .viewer {
            position: relative;
            margin: auto
        }

        .viewer .inactive-area {
            border-color: #e6e6e6 !important;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            pointer-events: none
        }

        .viewer .canvas-container {
            border: 2px dashed #ccc
        }

        .viewer img {
            position: absolute;
            pointer-events: none;
            width: 100%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            object-fit: contain
        }

        .without-border.viewer .canvas-container {
            border-color: transparent
        }

    </style>
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Aladin&family=Alfa+Slab+One&family=Amatic+SC&family=Arvo&family=Bangers&family=Bungee+Inline&family=Bungee+Shade&family=Comfortaa&family=Courgette&family=Dancing+Script&family=EB+Garamond&family=Emilys+Candy&family=Fredoka+One&family=Graduate&family=Indie+Flower&family=Modak&family=Open+Sans&family=Pacifico&family=Patrick+Hand&family=Permanent+Marker&family=Pinyon+Script&family=Poiret+One&family=Quicksand&family=Raleway&family=Righteous&family=Rye&family=Sacramento&family=Satisfy&family=Shojumaru&family=Sofia&family=UnifrakturMaguntia&display=swap);

    </style>
    <style type="text/css"></style>
    <script charset="utf-8" src="https://app.mpowerpromo.com/js/chunk-4ffe23e0.ac5c505c.js"></script>
    <script charset="utf-8" src="https://app.mpowerpromo.com/js/chunk-2d0e5394.cda267f2.js"></script>
    <script charset="utf-8" src="https://app.mpowerpromo.com/js/chunk-fd5d720e.3a3efbfd.js"></script>
    <link rel="stylesheet" type="text/css" href="https://app.mpowerpromo.com/css/chunk-776c17d9.1a6f2988.css">
    <script charset="utf-8" src="https://app.mpowerpromo.com/js/chunk-776c17d9.e7548bd3.js"></script>
    <meta data-vue-meta="1" property="og:title" content="Dashboard | MPower Promo Inc." data-vmid="og:title">
    <script charset="utf-8" src="https://app.mpowerpromo.com/js/chunk-2d0dd11c.44c8b3fb.js"></script>
    <script charset="utf-8" src="https://app.mpowerpromo.com/js/chunk-2d0c4681.8b99886b.js"></script>
    <script charset="utf-8" src="https://app.mpowerpromo.com/js/chunk-2d0d2b34.19609d66.js"></script>
    <script charset="utf-8" src="https://app.mpowerpromo.com/js/chunk-2d21eb43.2dad54c4.js"></script>
    <link rel="stylesheet" type="text/css" href="https://app.mpowerpromo.com/css/chunk-1831a011.7ab21278.css">
    <script charset="utf-8" src="https://app.mpowerpromo.com/js/chunk-1831a011.84956e76.js"></script>
    <script charset="utf-8" src="https://app.mpowerpromo.com/js/chunk-2d225a62.33f1ba99.js"></script>
    <script charset="utf-8" src="https://app.mpowerpromo.com/js/chunk-34294a1e.6742ad88.js"></script>
    <script charset="utf-8" src="https://app.mpowerpromo.com/js/chunk-2d0b9f4b.2205043d.js"></script>
    <script charset="utf-8" src="https://app.mpowerpromo.com/js/chunk-2d216b8b.411eb352.js"></script>
    <style type="text/css">
        /* Chart.js */
        /*
            * DOM element rendering detection
            * https://davidwalsh.name/detect-node-insertion
            */
        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99;
            }

            to {
                opacity: 1;
            }
        }

        .chartjs-render-monitor {
            animation: chartjs-render-animation 0.001s;
        }

        /*
            * DOM element resizing detection
            * https://github.com/marcj/css-element-queries
            */
        .chartjs-size-monitor,
        .chartjs-size-monitor-expand,
        .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1;
        }

        .chartjs-size-monitor-expand>div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0;
        }

        .chartjs-size-monitor-shrink>div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top: 0;
        }

    </style>

    @vite('resources/css/app.css')
</head>

<body>
    <div id="app">
        @yield('content')
    </div>

    {{-- <script src="js/chunk-vendors.b58110cf.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/js/app.7670e93d.js"></script>
    
    @vite('resources/js/app.js') 
</body>
</html>