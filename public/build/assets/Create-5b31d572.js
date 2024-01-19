import{N as b,a as f}from"./notification-7d49be3c.js";import{r as c,o,c as n,f as m,a as e,t as l,w as u,v as p,n as _,b as r,D as y,e as g,h as w}from"./app-a6249904.js";import{_ as E}from"./_plugin-vue_export-helper-c27b6911.js";const C={components:{Navigation:b,Notification:f},data(){return{isLoading:!1,errorMsg:null,validationErrors:{},company:{name:"",website:""}}},watch:{"company.name":function(s){s?this.validationErrors.name=null:this.validationErrors.name=["The Company Name field is required"]},"company.website":function(s){s?s&&!this.validURL(s)?this.validationErrors.website=["The Website field is not a valid URL"]:this.validationErrors.website=null:this.validationErrors.website=["The Website field is required"]}},methods:{validURL(s){var t=new RegExp("^(https?:\\/\\/)?((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|((\\d{1,3}\\.){3}\\d{1,3}))(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*(\\?[;&a-z\\d%_.~+=-]*)?(\\#[-a-z\\d_]*)?$","i");return!!t.test(s)},create(){this.isLoading=!0,this.validationErrors={},axios.post("/customers/companies/create",this.company).then(s=>{this.isLoading=!1,this.company={name:"",website:""},this.$router.push({name:"company",params:{slug:s.data.company.slug}})}).catch(s=>{this.isLoading=!1,s.response.status===422&&(this.validationErrors=s.response.data.errors)})}}},k={class:"dashboard"},x={id:"main",class:"slideout-panel slideout-panel-left"},N={class:"main-panel container-fluid pt-3"},V={class:"mb-4 container"},z=w('<nav aria-label="breadcrumb"><ol class="breadcrumb mb-0"><li class="breadcrumb-item"><a href="/customers/all" class="" target="_self">Customers</a></li><li class="breadcrumb-item"><a href="/customers/companies" class="" target="_self">Companies</a></li><li class="breadcrumb-item active"><span aria-current="page">Create Company</span></li></ol></nav>',1),L={class:"row"},B={class:"col-md-4 col-sm-12"},D={class:"form-group",id:"__BVID__1106"},T=e("div",{class:"d-flex justify-content-between align-items-center"},[e("div",null,[e("label",null,"Company Name")])],-1),U={role:"group",class:"input-group"},j={key:0,class:"invalid-feedback d-block"},I={class:"form-group",id:"__BVID__1109"},R=e("div",{class:"d-flex justify-content-between align-items-center"},[e("div",null,[e("label",null,"Website")]),e("label",{class:"text-muted small"},"optional")],-1),W={role:"group",class:"input-group"},M={key:0,class:"invalid-feedback d-block"},S={class:"form-inline mt-5"},q={key:0,class:"spinner-border spinner-border-sm",role:"status","aria-hidden":"true"},A=e("a",{href:"/customers/companies",class:"btn btn-link router-link-active"}," Cancel ",-1);function F(s,t,G,H,a,d){const v=c("navigation"),h=c("notification");return o(),n("div",k,[m(v),e("div",x,[e("div",N,[e("div",V,[z,e("h1",null,"Create "+l(a.company.name),1),e("div",L,[e("div",B,[e("form",null,[e("div",null,[e("fieldset",D,[e("div",null,[T,e("div",U,[u(e("input",{"onUpdate:modelValue":t[0]||(t[0]=i=>a.company.name=i),name:"Company Name",type:"text",autocomplete:"on",class:_(["form-control",{"is-invalid":a.validationErrors.name}]),maxlength:"255","data-hj-allow":"","data-mask":"","data-previous-value":"",id:"__BVID__1107"},null,2),[[p,a.company.name]])]),a.validationErrors.name?(o(),n("div",j,l(a.validationErrors.name[0]),1)):r("",!0)])])]),e("div",null,[e("fieldset",I,[e("div",null,[R,e("div",W,[u(e("input",{"onUpdate:modelValue":t[1]||(t[1]=i=>a.company.website=i),name:"Website",type:"url",autocomplete:"on",class:_(["form-control",{"is-invalid":a.validationErrors.website}]),maxlength:"255","data-hj-allow":"","data-mask":"","data-previous-value":"",id:"__BVID__1110"},null,2),[[p,a.company.website]])]),a.validationErrors.website?(o(),n("div",M,l(a.validationErrors.website[0]),1)):r("",!0)])])]),e("div",S,[e("button",{onClick:t[2]||(t[2]=y((...i)=>d.create&&d.create(...i),["prevent"])),type:"button",class:"btn btn-primary"},[a.isLoading?(o(),n("span",q)):r("",!0),g(" Save Company ")]),A])])])])])])]),m(h)])}const P=E(C,[["render",F]]);export{P as default};