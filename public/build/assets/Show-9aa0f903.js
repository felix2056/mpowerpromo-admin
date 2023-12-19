import{N as p,a as u}from"./notification-8cc65fa4.js";import{r as i,o as _,c as b,f as o,a as e,t as n,i as h,F as v,h as l,e as s}from"./app-57257bd6.js";import{_ as g}from"./_plugin-vue_export-helper-c27b6911.js";const m={components:{Navigation:p,Notification:u},data(){return{isLoading:!1,errorMsg:null,validationErrors:{},company:{}}},mounted(){this.getCompany()},methods:{getCompany(){this.isLoading=!0,axios.get("/customers/companies/"+this.$route.params.slug).then(a=>{this.company=a.data.company}).catch(a=>{this.errorMsg=a.response.data.message}).finally(()=>{this.isLoading=!1})}}},f={id:"main",class:"slideout-panel slideout-panel-left"},x={class:"main-panel container-fluid pt-3"},y=l('<nav aria-label="breadcrumb"><ol class="breadcrumb mb-0"><li class="breadcrumb-item"><a href="/customers/all" class="" target="_self">Customers</a></li><li class="breadcrumb-item"><a href="/customers/companies" class="" target="_self">Companies</a></li><li class="breadcrumb-item active"><span aria-current="page">View Company</span></li></ol></nav>',1),V={class:"row mb-5"},T={class:"col-md-2"},w={class:"sticky-top sticky-top-app py-3"},k={class:"h2"},z=l('<div class="list-group"><a href="#info" class="nav-link">Info</a><a href="#customers" class="nav-link">Customers</a><a href="#orders" class="nav-link">Orders</a><a href="#logos" class="nav-link">Logos</a><a href="#presentations" class="nav-link">Presentations</a></div><div class="pt-2"><a href="/customers/companies/create" class="btn btn-light"> New Company </a></div>',2),j={class:"col-md-7"},P=e("div",{id:"info",class:"pt-3"},null,-1),B={class:"card"},N={class:"card-header mb-2"},D={class:"d-flex justify-content-between"},I=e("h5",{class:"card-title"},"Information",-1),C={class:"card-body"},O={class:"row mb-2"},S={class:"col-md-6"},q=["href"],A=e("fieldset",{class:"form-group mr-5",id:"__BVID__1266"},[e("div",null,[e("div",{class:"form-group"},[e("div",{class:"d-flex justify-content-between align-items-center"},[e("div",null,[e("label",null,"Account Manager")])]),e("div",{tabindex:"-1",class:"multiselect",loadonfocus:"true",query:"[object Object]",optionsv:"",orderby:"name",ascending:"1",path:"/users",isobject:"true"},[e("div",{class:"multiselect__select"}),e("div",{class:"multiselect__tags"},[e("div",{class:"multiselect__tags-wrap",style:{display:"none"}}),e("div",{class:"multiselect__spinner",style:{display:"none"}}),e("input",{name:"Account Manager",type:"text",autocomplete:"nope",placeholder:"Select option",tabindex:"0",class:"multiselect__input",style:{width:"0px",position:"absolute",padding:"0px"}}),e("span",{class:"multiselect__placeholder"}," Select option ")]),e("div",{tabindex:"-1",class:"multiselect__content-wrapper",style:{"max-height":"300px",display:"none"}},[e("ul",{class:"multiselect__content",style:{display:"block"}},[e("span"),e("li",{style:{display:"none"}},[e("span",{class:"multiselect__option"},[e("span",null," Oops! No elements found. Consider changing the search query. ")])]),e("li",null,[e("span",{class:"multiselect__option"},[e("span",null,[e("span",null,"No Account Manager Options")])])])])])])])])],-1),L=l('<div class="col-md-3"><div><small>Orders</small><h4>0</h4></div><div class="mt-5"><small>Avg Order Total</small><h5>$0.00</h5></div></div><div class="col-md-3"><div><small>Total</small><h4>$0.00</h4></div><div class="mt-5"><small>Total Profit</small><h5>$0.00</h5></div></div>',2),M=e("div",{id:"customers",class:"pt-5"},null,-1),F=e("div",{class:"card"},[e("div",{class:"card-header mb-2"},[e("div",{class:"d-flex justify-content-between"},[e("h5",{class:"card-title"},"Customers"),e("a",{href:"/customers/create?companyId=6532a286f58ce84559e7624d",class:""}," Create Customer ")])]),e("div",{class:"card-body"},[e("div",{style:{}},[e("div",{class:"overlap",style:{}},[e("div",{class:"w-100 TopTable__table VueTables VueTables--server",filterable:"true"},[e("div",{class:"row"},[e("div",{class:"col-md-12"},[e("div",{class:"form-group form-inline float-left VueTables__search"},[e("span"),e("div",{class:"VueTables__search-field"},[e("label",{for:"VueTables__search_Lxqq4",class:""},"Filter:"),e("input",{type:"text",placeholder:"Search query",id:"VueTables__search_Lxqq4",autocomplete:"new-password",class:"VueTables__search__input form-control",name:"d59389154e1b8",style:{"background-color":"inherit"}})]),e("span")]),e("div",{class:"form-group form-inline float-right VueTables__limit"})])]),e("div",{class:"table-responsive"},[e("table",{class:"VueTables__table table table-striped",style:{overflow:"hidden"}},[e("thead",null,[e("tr",null,[e("th",{id:"VueTables_th--name",tabindex:"0",class:"VueTables__sortable",style:{position:"relative"}},[e("span",{title:"",class:"VueTables__heading"},"Name"),e("span",{class:"VueTables__sort-icon float-right fal glyphicon-sort"}),e("div",{style:{top:"0px",right:"0px",width:"5px",position:"absolute",cursor:"col-resize","user-select":"none",height:"0px"},class:"resize-handle"})]),e("th",{id:"VueTables_th--jobTitle",tabindex:"0",class:"VueTables__sortable",style:{position:"relative"}},[e("span",{title:"",class:"VueTables__heading"},"Job Title"),e("span",{class:"VueTables__sort-icon float-right fal glyphicon-sort"}),e("div",{style:{top:"0px",right:"0px",width:"5px",position:"absolute",cursor:"col-resize","user-select":"none",height:"0px"},class:"resize-handle"})]),e("th",{id:"VueTables_th--manager",tabindex:"0",class:"VueTables__sortable",style:{position:"relative"}},[e("span",{title:"",class:"VueTables__heading"},"Manager"),e("span",{class:"VueTables__sort-icon float-right fal glyphicon-sort"}),e("div",{style:{top:"0px",right:"0px",width:"5px",position:"absolute",cursor:"col-resize","user-select":"none",height:"0px"},class:"resize-handle"})]),e("th",{id:"VueTables_th--orders",tabindex:"0",class:"VueTables__sortable",style:{position:"relative"}},[e("span",{title:"",class:"VueTables__heading"},"Orders"),e("span",{class:"VueTables__sort-icon float-right fal glyphicon-sort"}),e("div",{style:{top:"0px",right:"0px",width:"5px",position:"absolute",cursor:"col-resize","user-select":"none",height:"0px"},class:"resize-handle"})]),e("th",{id:"VueTables_th--ordersTotal",tabindex:"0",class:"VueTables__sortable",style:{position:"relative"}},[e("span",{title:"",class:"VueTables__heading"},"Orders Total"),e("span",{class:"VueTables__sort-icon float-right fal glyphicon-sort"}),e("div",{style:{top:"0px",right:"0px",width:"5px",position:"absolute",cursor:"col-resize","user-select":"none",height:"0px"},class:"resize-handle"})])])]),e("tbody",null,[e("tr",{class:"VueTables__no-results"},[e("td",{tabindex:"0",colspan:"5",class:"text-center"},"No matching records")])])])]),e("div",{class:"VuePagination row col-md-12 justify-content-center"},[e("nav",{class:"text-center"},[e("ul",{class:"pagination VuePagination__pagination",style:{display:"none"}},[e("li",{class:"VuePagination__pagination-item page-item VuePagination__pagination-item-prev-chunk disabled"},[e("a",{href:"javascript:void(0);",disabled:"disabled",class:"page-link"},"<<")]),e("li",{class:"VuePagination__pagination-item page-item VuePagination__pagination-item-prev-page disabled"},[e("a",{href:"javascript:void(0);",disabled:"disabled",class:"page-link"},"<")]),e("li",{class:"VuePagination__pagination-item page-item VuePagination__pagination-item-next-page disabled"},[e("a",{href:"javascript:void(0);",disabled:"disabled",class:"page-link"},">")]),e("li",{class:"VuePagination__pagination-item page-item VuePagination__pagination-item-next-chunk disabled"},[e("a",{href:"javascript:void(0);",disabled:"disabled",class:"page-link"},">>")])]),e("p",{class:"VuePagination__count text-center col-md-12",style:{display:"none"}},"0 records")])])])])])])],-1),$=e("div",{id:"orders",class:"pt-5"},null,-1),E=e("div",{class:"card"},[e("div",{class:"card-body"},[e("div",{class:"row ml-0 mb-2"},[e("h4",null,"Orders")]),e("div",{style:{}},[e("div",{class:"overlap",style:{}},[e("div",{class:"w-100 TopTable__table VueTables VueTables--server",filterable:"true"},[e("div",{class:"row"},[e("div",{class:"col-md-12"},[e("div",{class:"form-group form-inline float-left VueTables__search"},[e("span"),e("div",{class:"VueTables__search-field"},[e("label",{for:"VueTables__search_uc0Kz",class:""},"Filter:"),e("input",{type:"text",placeholder:"Search query",id:"VueTables__search_uc0Kz",autocomplete:"new-password",class:"VueTables__search__input form-control",name:"267a5467ecc47",style:{"background-color":"inherit"}})]),e("span")]),e("div",{class:"form-group form-inline float-right VueTables__limit"})])]),e("div",{class:"table-responsive"},[e("table",{class:"VueTables__table table table-striped",style:{overflow:"hidden"}},[e("thead",null,[e("tr",null,[e("th",{id:"VueTables_th--orderId",tabindex:"0",class:"VueTables__sortable",style:{position:"relative"}},[e("span",{title:"",class:"VueTables__heading"},"Order Id"),e("span",{class:"VueTables__sort-icon float-right fal glyphicon-sort"}),e("div",{style:{top:"0px",right:"0px",width:"5px",position:"absolute",cursor:"col-resize","user-select":"none",height:"0px"},class:"resize-handle"})]),e("th",{id:"VueTables_th--customerId",tabindex:"0",class:"VueTables__sortable",style:{position:"relative"}},[e("span",{title:"",class:"VueTables__heading"},"Customer"),e("span",{class:"VueTables__sort-icon float-right fal glyphicon-sort"}),e("div",{style:{top:"0px",right:"0px",width:"5px",position:"absolute",cursor:"col-resize","user-select":"none",height:"0px"},class:"resize-handle"})]),e("th",{id:"VueTables_th--orderStatus",tabindex:"0",class:"VueTables__sortable",style:{position:"relative"}},[e("span",{title:"",class:"VueTables__heading"},"Order Status"),e("span",{class:"VueTables__sort-icon float-right fal glyphicon-sort"}),e("div",{style:{top:"0px",right:"0px",width:"5px",position:"absolute",cursor:"col-resize","user-select":"none",height:"0px"},class:"resize-handle"})]),e("th",{id:"VueTables_th--orderTotal",tabindex:"0",class:"VueTables__sortable",style:{position:"relative"}},[e("span",{title:"",class:"VueTables__heading"},"Order Total"),e("span",{class:"VueTables__sort-icon float-right fal glyphicon-sort"}),e("div",{style:{top:"0px",right:"0px",width:"5px",position:"absolute",cursor:"col-resize","user-select":"none",height:"0px"},class:"resize-handle"})]),e("th",{id:"VueTables_th--orderDate",tabindex:"0",class:"VueTables__sortable",style:{position:"relative"}},[e("span",{title:"",class:"VueTables__heading"},"Order Date"),e("span",{class:"VueTables__sort-icon float-right fal glyphicon-sort"}),e("div",{style:{top:"0px",right:"0px",width:"5px",position:"absolute",cursor:"col-resize","user-select":"none",height:"0px"},class:"resize-handle"})]),e("th",{id:"VueTables_th--createdAt",tabindex:"0",class:"VueTables__sortable",style:{position:"relative"}},[e("span",{title:"",class:"VueTables__heading"},"Created On"),e("span",{class:"VueTables__sort-icon float-right fal fa-sort-amount-down"}),e("div",{style:{top:"0px",right:"0px",width:"5px",position:"absolute",cursor:"col-resize","user-select":"none",height:"0px"},class:"resize-handle"})]),e("th",{id:"VueTables_th--managers",tabindex:"0",class:"VueTables__sortable",style:{position:"relative"}},[e("span",{title:"",class:"VueTables__heading"},"Managers"),e("span",{class:"VueTables__sort-icon float-right fal glyphicon-sort"}),e("div",{style:{top:"0px",right:"0px",width:"5px",position:"absolute",cursor:"col-resize","user-select":"none",height:"0px"},class:"resize-handle"})])])]),e("tbody",null,[e("tr",{class:"VueTables__no-results"},[e("td",{tabindex:"0",colspan:"7",class:"text-center"},"No matching records")])])])]),e("div",{class:"VuePagination row col-md-12 justify-content-center"},[e("nav",{class:"text-center"},[e("ul",{class:"pagination VuePagination__pagination",style:{display:"none"}},[e("li",{class:"VuePagination__pagination-item page-item VuePagination__pagination-item-prev-chunk disabled"},[e("a",{href:"javascript:void(0);",disabled:"disabled",class:"page-link"},"<<")]),e("li",{class:"VuePagination__pagination-item page-item VuePagination__pagination-item-prev-page disabled"},[e("a",{href:"javascript:void(0);",disabled:"disabled",class:"page-link"},"<")]),e("li",{class:"VuePagination__pagination-item page-item VuePagination__pagination-item-next-page disabled"},[e("a",{href:"javascript:void(0);",disabled:"disabled",class:"page-link"},">")]),e("li",{class:"VuePagination__pagination-item page-item VuePagination__pagination-item-next-chunk disabled"},[e("a",{href:"javascript:void(0);",disabled:"disabled",class:"page-link"},">>")])]),e("p",{class:"VuePagination__count text-center col-md-12",style:{display:"none"}},"0 records")])])])])])])],-1),U=e("div",{id:"logos",class:"pt-5"},null,-1),K=e("div",{class:"card"},[e("div",{class:"card-header d-flex justify-content-between"},[e("h5",{class:"card-title"},"Logos")]),e("div",{class:"card-body"},[e("div",{query:"[object Object]"},[e("div",null,[e("div",null,[e("div",null,[e("div",null,[e("form",{enctype:"multipart/form-data",novalidate:"novalidate",style:{height:"100%"}},[e("div",{class:"",filecount:"0"},[e("div",{class:"file-upload-dropbox btn btn-outline-primary btn-block p-4",style:{position:"relative"}},[e("input",{type:"file",multiple:"multiple",accept:"*",name:"files",class:"input-file"}),e("div",null,[e("i",{class:"fas fa-cloud-upload fa-2x"})]),e("div",null,"Drag file(s) or click to browse")])])]),e("div",null,[e("div",null,[e("div",{class:"row upload-via-link"},[e("div",{class:"col-12"},[e("div",{class:"pt-3 d-flex align-items-end justify-content-between"},[e("div",{class:"flex-fill pr-3"},[e("div",{"data-v-3a7e9bf2":"",class:"w-100 pb-0"},[e("fieldset",{"data-v-3a7e9bf2":"",class:"form-group",id:"__BVID__1286"},[e("div",null,[e("div",{"data-v-3a7e9bf2":"",class:"d-flex justify-content-between align-items-center"},[e("div",{"data-v-3a7e9bf2":""},[e("label",{"data-v-3a7e9bf2":""},"Upload from URL")]),s(),e("label",{"data-v-3a7e9bf2":"",class:"text-muted small"},"optional")]),e("div",{"data-v-3a7e9bf2":"",role:"group",class:"input-group"},[e("input",{"data-v-3a7e9bf2":"",name:"link",type:"text",placeholder:"https://example.com/image/123.jpg",autocomplete:"on",class:"form-control",maxlength:"255",onfocus:"if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');  this.blur();  this.focus();  }","data-hj-allow":"","data-mask":"","data-previous-value":"",id:"__BVID__1287"})]),e("div",{"data-v-3a7e9bf2":"",class:"invalid-feedback d-block"})])])])]),e("div",{class:"form-group pb-1"},[e("button",{disabled:"disabled",class:"btn btn-primary d-flex align-items-center justify-content-center"}," Upload ")])])])]),e("div",{class:"ml-n2"})])])]),e("div")]),e("div",{class:"text-warning text-center"},"No Data!")]),e("div")])])])],-1),Y=e("div",{id:"presentations",class:"pt-5"},null,-1),J=e("div",{class:"card"},[e("div",{class:"card-header d-flex justify-content-between"},[e("h5",{class:"card-title"},"Presentations")]),e("div",{class:"card-body"},[e("div",{style:{}},[e("div",{class:"",style:{position:"relative"}},[e("div",{id:"taskFilters",class:"collapse show"},[e("div",{class:"mb-2"},[e("div",{class:"d-flex flex-wrap"},[e("div",{"data-v-20278007":"",class:"mr-2 pb-2"},[e("div",{"data-v-20278007":"",class:"dropdown b-dropdown btn-group",id:"__BVID__1297"},[e("button",{"aria-haspopup":"menu","aria-expanded":"false",type:"button",class:"btn dropdown-toggle btn-light dropdown-toggle-no-caret",id:"__BVID__1297__BV_toggle_"},[s(" Created By "),e("span",{"data-v-20278007":"",class:"far fa-angle-down fa-xs text-muted"})]),e("ul",{role:"menu",tabindex:"-1",class:"dropdown-menu","aria-labelledby":"__BVID__1297__BV_toggle_"},[e("div",{"data-v-20278007":"",class:"d-flex justify-content-start mb-2 px-3 pt-2 small"},[e("a",{"data-v-20278007":"",href:"javascript:;"},"Select all"),e("div",{"data-v-20278007":"",class:"mx-2"},"|"),s(),e("a",{"data-v-20278007":"",href:"javascript:;"},"Deselect all")])])])]),e("div",{"data-v-20278007":"",class:"mr-2 pb-2"},[e("div",{"data-v-20278007":"",class:"dropdown b-dropdown btn-group",id:"__BVID__1300"},[e("button",{"aria-haspopup":"menu","aria-expanded":"false",type:"button",class:"btn dropdown-toggle btn-light dropdown-toggle-no-caret",id:"__BVID__1300__BV_toggle_"},[s(" Is Public "),e("span",{"data-v-20278007":"",class:"far fa-angle-down fa-xs text-muted"})]),e("ul",{role:"menu",tabindex:"-1",class:"dropdown-menu","aria-labelledby":"__BVID__1300__BV_toggle_"},[e("div",{"data-v-20278007":"",class:"d-flex justify-content-start mb-2 px-3 pt-2 small"},[e("a",{"data-v-20278007":"",href:"javascript:;"},"Select all"),e("div",{"data-v-20278007":"",class:"mx-2"},"|"),s(),e("a",{"data-v-20278007":"",href:"javascript:;"},"Deselect all")]),e("div",{"data-v-20278007":"",class:"dropdown-menu dropdown-menu-form pb-2 px-3 border-0",style:{"min-width":"300px"}},[e("div",{"data-v-20278007":"",class:"optionList"},[e("div",{"data-v-20278007":"",class:"dropdown-item pb-1"},[e("div",{"data-v-20278007":"",class:"custom-control custom-checkbox p-0"},[e("input",{"data-v-20278007":"",type:"checkbox",id:"styled-checkbox-1-0",class:"custom-control-input",value:"no"}),e("label",{"data-v-20278007":"",for:"styled-checkbox-1-0",class:"custom-control-label"}," No ")])]),e("div",{"data-v-20278007":"",class:"dropdown-item pb-1"},[e("div",{"data-v-20278007":"",class:"custom-control custom-checkbox p-0"},[e("input",{"data-v-20278007":"",type:"checkbox",id:"styled-checkbox-1-1",class:"custom-control-input",value:"yes"}),s(),e("label",{"data-v-20278007":"",for:"styled-checkbox-1-1",class:"custom-control-label"}," Yes ")])])])])])])]),e("div",{"data-v-20278007":"",class:"mr-2 pb-2"},[e("div",{"data-v-20278007":"",class:"dropdown b-dropdown btn-group",id:"__BVID__1303"},[e("button",{"aria-haspopup":"menu","aria-expanded":"false",type:"button",class:"btn dropdown-toggle btn-light dropdown-toggle-no-caret",id:"__BVID__1303__BV_toggle_"},[s(" Is Template "),e("span",{"data-v-20278007":"",class:"far fa-angle-down fa-xs text-muted"})]),e("ul",{role:"menu",tabindex:"-1",class:"dropdown-menu","aria-labelledby":"__BVID__1303__BV_toggle_"},[e("div",{"data-v-20278007":"",class:"d-flex justify-content-start mb-2 px-3 pt-2 small"},[e("a",{"data-v-20278007":"",href:"javascript:;"},"Select all"),e("div",{"data-v-20278007":"",class:"mx-2"},"|"),s(),e("a",{"data-v-20278007":"",href:"javascript:;"},"Deselect all")]),e("div",{"data-v-20278007":"",class:"dropdown-menu dropdown-menu-form pb-2 px-3 border-0",style:{"min-width":"300px"}},[e("div",{"data-v-20278007":"",class:"optionList"},[e("div",{"data-v-20278007":"",class:"dropdown-item pb-1"},[e("div",{"data-v-20278007":"",class:"custom-control custom-checkbox p-0"},[e("input",{"data-v-20278007":"",type:"checkbox",id:"styled-checkbox-2-0",class:"custom-control-input",value:"no"}),e("label",{"data-v-20278007":"",for:"styled-checkbox-2-0",class:"custom-control-label"}," No ")])]),e("div",{"data-v-20278007":"",class:"dropdown-item pb-1"},[e("div",{"data-v-20278007":"",class:"custom-control custom-checkbox p-0"},[e("input",{"data-v-20278007":"",type:"checkbox",id:"styled-checkbox-2-1",class:"custom-control-input",value:"yes"}),s(),e("label",{"data-v-20278007":"",for:"styled-checkbox-2-1",class:"custom-control-label"}," Yes ")])])])])])])])])])])]),e("div",{class:"overlap",style:{}},[e("div",{class:"w-100 TopTable__table VueTables VueTables--server",filterable:"true"},[e("div",{class:"row"},[e("div",{class:"col-md-12"},[e("div",{class:"form-group form-inline float-left VueTables__search"},[e("span"),e("div",{class:"VueTables__search-field"},[e("label",{for:"VueTables__search_qmVB0",class:""},"Filter:"),e("input",{type:"text",placeholder:"Search query",id:"VueTables__search_qmVB0",autocomplete:"new-password",class:"VueTables__search__input form-control",name:"e370112a4ae2e",style:{"background-color":"inherit"}})]),e("span",null,[e("span",null,[e("a",{href:"/customers/presentations/create",class:"d-block ml-2 text-decoration-none",style:{"margin-top":"20px"}},"Add presentation")])])]),e("div",{class:"form-group form-inline float-right VueTables__limit"})])]),e("div",{class:"table-responsive"},[e("table",{class:"VueTables__table table table-striped",style:{overflow:"hidden"}},[e("thead",null,[e("tr",null,[e("th",{id:"VueTables_th--logo",tabindex:"0",class:"",style:{position:"relative"}},[e("span",{title:"",class:"VueTables__heading"},"Logo"),e("div",{style:{top:"0px",right:"0px",width:"5px",position:"absolute",cursor:"col-resize","user-select":"none",height:"0px"},class:"resize-handle"})]),e("th",{id:"VueTables_th--name",tabindex:"0",class:"VueTables__sortable",style:{position:"relative"}},[e("span",{title:"",class:"VueTables__heading"},"Name"),e("span",{class:"VueTables__sort-icon float-right fal glyphicon-sort"}),e("div",{style:{top:"0px",right:"0px",width:"5px",position:"absolute",cursor:"col-resize","user-select":"none",height:"0px"},class:"resize-handle"})]),e("th",{id:"VueTables_th--company",tabindex:"0",class:"",style:{position:"relative"}},[e("span",{title:"",class:"VueTables__heading"},"Company"),e("div",{style:{top:"0px",right:"0px",width:"5px",position:"absolute",cursor:"col-resize","user-select":"none",height:"0px"},class:"resize-handle"})]),e("th",{id:"VueTables_th--customers",tabindex:"0",class:"",style:{position:"relative"}},[e("span",{title:"",class:"VueTables__heading"},"Customers"),e("div",{style:{top:"0px",right:"0px",width:"5px",position:"absolute",cursor:"col-resize","user-select":"none",height:"0px"},class:"resize-handle"})]),e("th",{id:"VueTables_th--createdAt",tabindex:"0",class:"VueTables__sortable",style:{position:"relative"}},[e("span",{title:"",class:"VueTables__heading"},"Created"),e("span",{class:"VueTables__sort-icon float-right fal glyphicon-sort"}),e("div",{style:{top:"0px",right:"0px",width:"5px",position:"absolute",cursor:"col-resize","user-select":"none",height:"0px"},class:"resize-handle"})]),e("th",{id:"VueTables_th--createdBy",tabindex:"0",class:"",style:{position:"relative"}},[e("span",{title:"",class:"VueTables__heading"},"By"),e("div",{style:{top:"0px",right:"0px",width:"5px",position:"absolute",cursor:"col-resize","user-select":"none",height:"0px"},class:"resize-handle"})]),e("th",{id:"VueTables_th--isTemplate",tabindex:"0",class:"VueTables__sortable",style:{position:"relative"}},[e("span",{title:"",class:"VueTables__heading"},"Template"),e("span",{class:"VueTables__sort-icon float-right fal glyphicon-sort"}),e("div",{style:{top:"0px",right:"0px",width:"5px",position:"absolute",cursor:"col-resize","user-select":"none",height:"0px"},class:"resize-handle"})]),e("th",{id:"VueTables_th--publishedAt",tabindex:"0",class:"VueTables__sortable",style:{position:"relative"}},[e("span",{title:"",class:"VueTables__heading"},"Public"),e("span",{class:"VueTables__sort-icon float-right fal glyphicon-sort"}),e("div",{style:{top:"0px",right:"0px",width:"5px",position:"absolute",cursor:"col-resize","user-select":"none",height:"0px"},class:"resize-handle"})]),e("th",{id:"VueTables_th--actions",tabindex:"0",class:"",style:{position:"relative"}},[e("span",{title:"",class:"VueTables__heading"},"Actions"),e("div",{style:{top:"0px",right:"0px",width:"5px",position:"absolute",cursor:"col-resize","user-select":"none",height:"0px"},class:"resize-handle"})])])]),e("tbody",null,[e("tr",{class:"VueTables__no-results"},[e("td",{tabindex:"0",colspan:"9",class:"text-center"},"No matching records")])])])]),e("div",{class:"VuePagination row col-md-12 justify-content-center"},[e("nav",{class:"text-center"},[e("ul",{class:"pagination VuePagination__pagination",style:{display:"none"}},[e("li",{class:"VuePagination__pagination-item page-item VuePagination__pagination-item-prev-chunk disabled"},[e("a",{href:"javascript:void(0);",disabled:"disabled",class:"page-link"},"<<")]),e("li",{class:"VuePagination__pagination-item page-item VuePagination__pagination-item-prev-page disabled"},[e("a",{href:"javascript:void(0);",disabled:"disabled",class:"page-link"},"<")]),e("li",{class:"VuePagination__pagination-item page-item VuePagination__pagination-item-next-page disabled"},[e("a",{href:"javascript:void(0);",disabled:"disabled",class:"page-link"},">")]),e("li",{class:"VuePagination__pagination-item page-item VuePagination__pagination-item-next-chunk disabled"},[e("a",{href:"javascript:void(0);",disabled:"disabled",class:"page-link"},">>")])]),e("p",{class:"VuePagination__count text-center col-md-12",style:{display:"none"}},"0 records")])])])])])])],-1),R=l('<div class="col-md-3"><div class="sticky-top sticky-top-app py-3"><div class="card mb-5"><div class="card-header d-flex justify-content-between"><h5 class="card-title">Notes</h5><a>New Note</a></div><ul class="list-group list-group-flush"></ul></div></div></div>',1);function G(a,H,Q,W,t,X){const c=i("navigation"),d=i("router-link"),r=i("notification");return _(),b(v,null,[o(c),e("div",f,[e("div",x,[e("div",null,[y,e("div",V,[e("div",T,[e("div",w,[e("h1",k,n(t.company.name),1),z])]),e("div",j,[P,e("div",B,[e("div",N,[e("div",D,[I,o(d,{to:{name:"edit-company",params:{slug:t.company.slug}},class:"float-right"},{default:h(()=>[s("Edit")]),_:1},8,["to"])])]),e("div",C,[e("div",O,[e("div",S,[e("a",{href:t.company.website,target:"_blank",class:"mb-3 d-block"},n(t.company.website),9,q),A]),L])])]),M,F,$,E,U,K,Y,J]),R])])])]),o(r)],64)}const ae=g(m,[["render",G]]);export{ae as default};
