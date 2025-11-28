(window["canvasWebpackJsonp"]=window["canvasWebpackJsonp"]||[]).push([[3847],{"0k/6":function(e,a,t){"use strict"
t.d(a,"a",(function(){return r}))
t.d(a,"b",(function(){return d}))
t.d(a,"c",(function(){return c}))
t.d(a,"d",(function(){return l}))
var n=t("NFDp")
const o="inst-button-and-icons-edit"
const i="inst-button-and-icons-edit-toolbar"
const r="data-inst-buttons-and-icons"
const d="data-download-url"
const c="buttons_and_icons"
const s=e=>!!(null!==e&&void 0!==e&&e.getAttribute(r))
function l(e,a){_(e,a)
u(e)}function _(e,a){e.ui.registry.addButton(o,{onAction:a,text:Object(n["a"])("Edit"),tooltip:Object(n["a"])("Edit Existing Button / Icon")})}function u(e){e.ui.registry.addContextToolbar(i,{items:o,position:"node",scope:"node",predicate:s})}},"8S//":function(e,a,t){"use strict"
t.d(a,"a",(function(){return o}))
var n="undefined"!==typeof navigator&&navigator.userAgent||""
var o=/Edge/.test(n)},"9dNb":function(e,a,t){"use strict"
t.d(a,"a",(function(){return c}))
var n=t("0k/6")
const o="image/svg"
const i=400
const r="image/svg+xml-buttons-and-icons"
async function d(e){try{const a=await e.slice(0,i).text()
if(a.includes(r))return{category:n["c"]}}catch{}}async function c(e){var a
if(null!==e&&void 0!==e&&null!==(a=e.type)&&void 0!==a&&a.includes(o))return await d(e)}},BrAc:function(e,a,t){"use strict"
var n=t("vDqi")
var o=t.n(n)
o.a.defaults.xsrfCookieName="_csrf_token"
o.a.defaults.xsrfHeaderName="X-CSRF-Token"
const i=o.a.defaults.headers.common.Accept
o.a.defaults.headers.common.Accept="application/json+canvas-string-ids, "+i
o.a.defaults.headers.common["X-Requested-With"]="XMLHttpRequest"
a["a"]=o.a},NFDp:function(e,a,t){"use strict"
var n=t("VTBJ")
var o=t("/HcR")
var i=t.n(o)
const r=i.a.namespace()
r.addLocale=e=>{r.setup({translations:Object(n["a"])(Object(n["a"])({},r.setup().translations),e)})}
a["a"]=r},Ta57:function(e,a,t){"use strict"
t.r(a)
var n=t("RtDj")
t("q1tI")
var o=t("i8i4")
var i=t.n(o)
var r=t("d61b")
var d=t("3lLS")
var c=t.n(d)
c()(()=>{const e=document.getElementById("context_modules")
const a=document.querySelectorAll(".editable_context_module:not(#context_module_blank) .module_dnd")
a.forEach(a=>{i.a.render(Object(n["a"])(r["a"],{courseId:ENV.course_id,moduleId:a.getAttribute("data-context-module-id"),contextModules:e}),a)})})},"UT5+":function(e,a,t){"use strict"
t.d(a,"a",(function(){return Q}))
var n=t("rePB")
var o=t("Ff2n")
var i=t("ODXe")
var r=t("1OyB")
var d=t("vuIU")
var c=t("Ji7U")
var s=t("LK+K")
var l=t("q1tI")
var _=t.n(l)
var u=t("17x9")
var f=t.n(u)
var p=t("TSYQ")
var h=t.n(p)
var b=t("3zPy")
var m=t.n(b)
var g=t("sTNg")
var v=t("n12J")
var y=t("BTe1")
var k=t("J2CL")
var x=t("oXx0")
var w=t("nAyT")
var F=t("E+IV")
var P=t("jtGx")
var D=t("tCl5")
var S=t("8S//")
function B(e,a){if(e&&a&&"application/x-moz-file"!==e.type){var t=A(a)
var n=e.type||""
var o=n.replace(/\/.*$/,"")
return t.some((function(a){if("."===a.charAt(0)){if(!e.name)return n.endsWith(a.slice(1))
return e.name.toLowerCase().endsWith(a.toLowerCase())}if(/\/\*$/.test(a))return o===a.replace(/\/.*$/,"")
return n===a}))}return true}function A(e){var a=Array.isArray(e)?e:e.split(",")
return a.map((function(e){return e.trim().replace(/^\w+$/,".$&")}))}function L(e,a){var t=e.dataTransfer
if(t){if(t.files&&t.files.length)return t.files
if(t.items&&t.items.length)return t.items}else if(a&&a.files)return a.files
return[]}function j(e){var a=e.borders,t=e.colors
return{backgroundColor:t.backgroundLightest,borderRadius:a.radiusLarge,borderWidth:a.widthMedium,borderStyle:"dashed",borderColor:t.borderMedium,hoverBorderColor:t.borderBrand,acceptedColor:t.textBrand,rejectedColor:t.textDanger}}j.canvas=function(e){return{hoverBorderColor:e["ic-brand-primary"],acceptedColor:e["ic-brand-primary"]}}
var O,C,E,T,z,I
var W={componentId:"emSEn",template:function(e){return"\n\n.emSEn_blJt,.emSEn_bGBk{position:relative}\n\n.emSEn_blJt{box-sizing:border-box;display:block}\n\n.emSEn_blJt.emSEn_JSXc{height:100%}\n\n.emSEn_cwos{border:0;clip:rect(0 0 0 0);height:0.0625rem;margin:-0.0625rem;overflow:hidden;padding:0;position:absolute;width:0.0625rem}\n\n.emSEn_QUBp{border:".concat(e.borderWidth||"inherit"," ").concat(e.borderStyle||"inherit"," ").concat(e.borderColor||"inherit",";border-radius:").concat(e.borderRadius||"inherit",";box-sizing:border-box;cursor:pointer;display:block;text-align:center;z-index:1}\n\n[dir=ltr] .emSEn_QUBp,[dir=rtl] .emSEn_QUBp{text-align:center}\n\n.emSEn_QUBp:hover{border-color:").concat(e.hoverBorderColor||"inherit","}\n\n.emSEn_QUBp.emSEn_JSXc{height:100%}\n\n.emSEn_byIz{border-radius:").concat(e.borderRadius||"inherit",";display:block;overflow:hidden}\n\n.emSEn_byIz.emSEn_JSXc{height:100%}\n\n.emSEn_cbYS .emSEn_QUBp{border-color:").concat(e.acceptedColor||"inherit","}\n\n.emSEn_cvQK .emSEn_QUBp{border-color:").concat(e.rejectedColor||"inherit","}\n\n.emSEn_cFXB{cursor:not-allowed;pointer-events:none}\n\n.emSEn_eXzv{opacity:0.5}")},label:"emSEn_blJt",root:"emSEn_bGBk",withHeight:"emSEn_JSXc",input:"emSEn_cwos",labelContent:"emSEn_QUBp",layout:"emSEn_byIz",dragAccepted:"emSEn_cbYS",dragRejected:"emSEn_cvQK",functionallyDisabled:"emSEn_cFXB",visuallyDisabled:"emSEn_eXzv"}
function R(e){return e.keyCode===m.a.codes.space||e.keyCode===m.a.codes.enter}function U(){var e=false
try{e=document.documentMode||S["a"]}catch(e){}return e}var M=U()
var Q=(O=Object(w["a"])("8.0.0",{label:"renderLabel",enablePreview:"shouldEnablePreview",allowRepeatFileSelection:"shouldAllowRepeats",allowMultiple:"shouldAllowMultiple"}),C=Object(x["a"])(),E=Object(k["j"])(j,W),O(T=C(T=E(T=(I=z=function(e){Object(c["a"])(t,e)
var a=Object(s["a"])(t)
function t(e){var n
Object(r["a"])(this,t)
n=a.call(this,e)
n.state={isDragAccepted:false,isDragRejected:false,isFocused:false,isFileBrowserDisplayed:false}
n.enterCounter=0
n.fileInputEl=null
n.defaultId=null
n.handleDragEnter=function(e){e.preventDefault()
n.enterCounter+=1
if(n.enterCounter>1)return
var a=n.allFilesAccepted(n.getDataTransferItems(e))
n.setState({isDragAccepted:a,isDragRejected:!a})
n.props.onDragEnter(e)}
n.handleDragOver=function(e){e.preventDefault()
e.stopPropagation()
try{var a=e
a.dataTransfer.dropEffect="copy"}catch(e){}n.props.onDragOver(e)
return false}
n.handleDragLeave=function(e){e.preventDefault()
n.enterCounter-=1
if(n.enterCounter>0)return
n.setState({isDragAccepted:false,isDragRejected:false})
n.props.onDragLeave(e)}
n.handleChange=function(e){var a=n.props,t=a.onDrop,o=a.onDropAccepted,r=a.onDropRejected
var d=n.getDataTransferItems(e,n.shouldEnablePreview)
var c=n.parseFiles(d),s=Object(i["a"])(c,2),l=s[0],_=s[1]
e.preventDefault()
n.enterCounter=0
t(l,_,e)
_.length>0&&r(_,e)
l.length>0&&o(l,e)
n.setState({isDragAccepted:false,isDragRejected:false,isFileBrowserDisplayed:false})}
n.fileAccepted=function(e){return B(e,n.props.accept)}
n.handleRef=function(e){n.fileInputEl=e}
n.handleBlur=function(){n.setState({isFocused:false,isFileBrowserDisplayed:false})}
n.handleFocus=function(){n.setState({isFocused:true,isFileBrowserDisplayed:false})}
n.handleClick=function(e){n.fileInputEl.value&&n.shouldAllowRepeats&&(n.fileInputEl.value=null)
n.fileInputEl.focus()
n.props.onClick(e)
n.setState({isFileBrowserDisplayed:true})}
n.handleKeyDown=function(e){if(n.state.isFocused&&R(e)){n.shouldAllowRepeats&&(n.fileInputEl.value=null)
if(M){e.stopPropagation()
e.preventDefault()
n.fileInputEl.click()}}}
n.handleKeyUp=function(e){if(e.keyCode===m.a.codes.esc&&n.state.isFileBrowserDisplayed){e.stopPropagation()
e.nativeEvent.stopImmediatePropagation()
n.setState({isFileBrowserDisplayed:false})}}
n.defaultId=Object(y["a"])("FileDrop")
n.messagesId=Object(y["a"])("FileDrop-messages")
return n}Object(d["a"])(t,[{key:"getDataTransferItems",value:function(e,a){var t=Array.from(L(e,this.fileInputEl))
t.length>1&&(t=this.shouldAllowMultiple?t:[t[0]])
if(a)return t.map((function(e){return Object.assign(e,{preview:window.URL.createObjectURL(e)})}))
return t}},{key:"parseFiles",value:function(e){var a=this
var t=[]
var n=[]
e.forEach((function(e){a.fileAccepted(e)&&a.fileMatchSize(e)?t.push(e):n.push(e)}))
return[t,n]}},{key:"fileMatchSize",value:function(e){return e.size<=this.props.maxSize&&e.size>=this.props.minSize}},{key:"allFilesAccepted",value:function(e){return e.every(this.fileAccepted)}},{key:"acceptStr",value:function(){var e=this.props.accept
return e?A(e).join(","):null}},{key:"renderLabel",value:function(){var e=this.props,a=e.label,t=e.renderLabel
return Object(F["a"])(a||t,{isDragAccepted:this.state.isDragAccepted,isDragRejected:this.state.isDragRejected,interaction:this.interaction})}},{key:"render",value:function(){var e,a,t
var i=this.props,r=i.display,d=i.height,c=i.width,s=i.minWidth,l=i.maxWidth,u=i.margin,f=(i.onDropAccepted,i.onDropRejected,Object(o["a"])(i,["display","height","width","minWidth","maxWidth","margin","onDropAccepted","onDropRejected"]))
var p=this.props.id||this.defaultId
var b="disabled"===this.interaction||"readonly"===this.interaction
var m=this.state.isDragRejected||this.invalid?"danger":void 0
var y=(e={},Object(n["a"])(e,W.label,true),Object(n["a"])(e,W.functionallyDisabled,b),Object(n["a"])(e,W.visuallyDisabled,"disabled"===this.interaction),Object(n["a"])(e,W.dragRejected,this.state.isDragRejected||this.invalid),Object(n["a"])(e,W.dragAccepted,this.state.isDragAccepted),Object(n["a"])(e,W.withHeight,d),e)
return _.a.createElement(v["a"],{display:r,position:"relative",width:c,minWidth:s,maxWidth:l,margin:u,height:d},_.a.createElement("label",{className:h()(y),htmlFor:p,onDragEnter:this.handleDragEnter,onDragOver:this.handleDragOver,onDragLeave:this.handleDragLeave,onDrop:this.handleChange},_.a.createElement(v["a"],{display:"block",position:"relative",withFocusOutline:this.state.isFocused,borderRadius:"large",focusColor:m,height:d},_.a.createElement("span",{className:h()((a={},Object(n["a"])(a,W.labelContent,true),Object(n["a"])(a,W.withHeight,d),a))},_.a.createElement("span",{className:h()((t={},Object(n["a"])(t,W.layout,true),Object(n["a"])(t,W.withHeight,d),t))},_.a.createElement(v["a"],{height:d},this.renderLabel()))))),_.a.createElement("input",Object.assign({},Object(P["b"])(f),{onClick:this.handleClick,type:"file",className:W.input,id:p,ref:this.handleRef,onFocus:this.handleFocus,onBlur:this.handleBlur,onKeyDown:this.handleKeyDown,onKeyUp:this.handleKeyUp,multiple:this.shouldAllowMultiple,accept:this.acceptStr(),onChange:this.handleChange,"aria-describedby":this.hasMessages?this.messagesId:null,disabled:b})),this.hasMessages?_.a.createElement(v["a"],{display:"block",margin:"small 0 0"},_.a.createElement(g["c"],{id:this.messagesId,messages:this.props.messages})):null)}},{key:"hasMessages",get:function(){return this.props.messages&&this.props.messages.length>0}},{key:"interaction",get:function(){return Object(D["a"])({props:this.props})}},{key:"shouldEnablePreview",get:function(){return this.props.enablePreview||this.props.shouldEnablePreview}},{key:"shouldAllowRepeats",get:function(){return this.props.allowRepeatFileSelection||this.props.shouldAllowRepeats}},{key:"shouldAllowMultiple",get:function(){return this.props.allowMultiple||this.props.shouldAllowMultiple}},{key:"invalid",get:function(){return this.hasMessages&&this.props.messages.findIndex((function(e){return"error"===e.type}))>=0}}])
t.displayName="FileDrop"
return t}(l["Component"]),z.propTypes={id:f.a.string,renderLabel:f.a.oneOfType([f.a.func,f.a.node]).isRequired,accept:f.a.oneOfType([f.a.string,f.a.arrayOf(f.a.string)]),messages:f.a.arrayOf(g["d"].message),onClick:f.a.func,onDrop:f.a.func,onDropAccepted:f.a.func,onDropRejected:f.a.func,onDragEnter:f.a.func,onDragOver:f.a.func,onDragLeave:f.a.func,shouldEnablePreview:f.a.bool,shouldAllowMultiple:f.a.bool,shouldAllowRepeats:f.a.bool,maxSize:f.a.number,minSize:f.a.number,interaction:f.a.oneOf(["enabled","disabled","readonly"]),display:f.a.oneOf(["block","inline-block"]),height:f.a.oneOfType([f.a.string,f.a.number]),width:f.a.oneOfType([f.a.string,f.a.number]),maxWidth:f.a.oneOfType([f.a.string,f.a.number]),minWidth:f.a.oneOfType([f.a.string,f.a.number]),margin:k["c"].spacing,label:f.a.oneOfType([f.a.func,f.a.node]),enablePreview:f.a.bool,allowRepeatFileSelection:f.a.bool,allowMultiple:f.a.bool},z.defaultProps={onClick:function(e){},onDrop:function(e,a,t){},onDropAccepted:function(e,a){},onDropRejected:function(e,a){},onDragEnter:function(e){},onDragOver:function(e){},onDragLeave:function(e){},shouldEnablePreview:false,shouldAllowMultiple:false,shouldAllowRepeats:true,maxSize:Infinity,minSize:0,interaction:void 0,messages:[],id:void 0,accept:void 0,display:"block",height:void 0,width:void 0,minWidth:void 0,maxWidth:void 0,margin:void 0},I))||T)||T)||T)},agq5:function(e,a,t){"use strict"
t.d(a,"a",(function(){return S}))
var n=t("VTBJ")
var o=t("rePB")
var i=t("1OyB")
var r=t("vuIU")
var d=t("Ji7U")
var c=t("LK+K")
var s=t("q1tI")
var l=t.n(s)
var _=t("17x9")
var u=t.n(_)
var f=t("TSYQ")
var p=t.n(f)
var h=t("msMH")
var b=t("n12J")
var m=t("J2CL")
var g=t("E+IV")
var v=t("KgFQ")
var y=t("jtGx")
function k(e){var a=e.borders,t=e.colors,n=e.spacing,o=e.typography
return{fontFamily:o.fontFamily,paddingSmall:n.small,paddingMedium:n.medium,paddingLarge:n.medium,iconColor:t.textDark,mediumMargin:n.small,largeMargin:n.medium,iconHoverColor:t.textLink,backgroundColor:t.backgroundLightest,iconHoverColorInverse:t.textLightest,buttonBorderWidth:a.widthMedium,buttonBorderRadius:a.radiusLarge,messageColor:t.textDark,messageColorClickable:t.textLink,messageColorInverse:t.textLight,messageFontSizeSmall:o.fontSizeSmall,messageFontSizeMedium:o.fontSizeMedium,messageFontSizeLarge:o.fontSizeLarge,clickableActiveBg:t.backgroundBrand,clickableActiveText:t.textLightest,buttonBorderStyle:a.style,buttonHoverBorderStyle:"dashed"}}k.canvas=function(e){return{iconHoverColor:e["ic-link-color"],messageColorClickable:e["ic-link-color"],clickableActiveBg:e["ic-brand-primary"]}}
var x,w,F,P
var D={componentId:"ftPBL",template:function(e){return"\n\n.ftPBL_bGBk{box-sizing:border-box;display:block;font-family:".concat(e.fontFamily||"inherit",";margin-left:auto;margin-right:auto;position:relative;text-align:center}\n\n[dir=ltr] .ftPBL_bGBk,[dir=rtl] .ftPBL_bGBk{text-align:center}\n\n.ftPBL_bGBk:not(.ftPBL_bGiS){background-color:").concat(e.backgroundColor||"inherit","}\n\n.ftPBL_bGBk.ftPBL_ywdX{cursor:not-allowed;opacity:0.5;pointer-events:none}\n\n.ftPBL_EwaR,.ftPBL_caGd,.ftPBL_eDnN,.ftPBL_cuDj,.ftPBL_elxg{display:block}\n\n.ftPBL_cuDj+.ftPBL_eDnN{margin:").concat(e.largeMargin||"inherit"," 0 0}\n\n.ftPBL_eDnN+.ftPBL_elxg,.ftPBL_cuDj+.ftPBL_elxg,.ftPBL_doqw .ftPBL_cuDj+.ftPBL_eDnN{margin:").concat(e.mediumMargin||"inherit"," 0 0}\n\n.ftPBL_doqw{padding:").concat(e.paddingSmall||"inherit","}\n\n.ftPBL_doqw .ftPBL_cuDj{font-size:3rem}\n\n.ftPBL_doqw .ftPBL_elxg{font-size:").concat(e.messageFontSizeSmall||"inherit","}\n\n.ftPBL_ycrn{padding:").concat(e.paddingMedium||"inherit","}\n\n.ftPBL_ycrn .ftPBL_cuDj{font-size:5rem}\n\n.ftPBL_ycrn .ftPBL_elxg{font-size:").concat(e.messageFontSizeMedium||"inherit","}\n\n.ftPBL_cMDj{padding:").concat(e.paddingLarge||"inherit","}\n\n.ftPBL_cMDj .ftPBL_cuDj{font-size:10rem}\n\n.ftPBL_cMDj .ftPBL_elxg{font-size:").concat(e.messageFontSizeLarge||"inherit","}\n\n.ftPBL_elxg{color:").concat(e.messageColor||"inherit","}\n\n.ftPBL_cuDj{color:").concat(e.iconColor||"inherit","}\n\n.ftPBL_cuDj>img,.ftPBL_cuDj>svg{display:block;margin:0 auto;max-width:100%}\n\n.ftPBL_cuDj>img{height:auto}\n\n.ftPBL_bGiS{-moz-appearance:none;-ms-user-select:none;-webkit-appearance:none;-webkit-user-select:none;appearance:none;background:").concat(e.backgroundColor||"inherit",";border:").concat(e.buttonBorderWidth||"inherit"," ").concat(e.buttonBorderStyle||"inherit"," transparent;border-radius:").concat(e.buttonBorderRadius||"inherit",";box-sizing:border-box;cursor:pointer;margin:0;text-decoration:none;touch-action:manipulation;user-select:none;width:100%}\n\n.ftPBL_bGiS:hover{border-style:").concat(e.buttonHoverBorderStyle||"inherit","}\n\n.ftPBL_bGiS:focus,.ftPBL_bGiS:hover{border-color:").concat(e.iconHoverColor||"inherit",";outline:none;text-decoration:none}\n\n.ftPBL_bGiS:focus .ftPBL_cuDj,.ftPBL_bGiS:hover .ftPBL_cuDj{color:").concat(e.iconHoverColor||"inherit","}\n\n.ftPBL_bGiS:active{background:").concat(e.clickableActiveBg||"inherit",";border-color:").concat(e.iconHoverColor||"inherit","}\n\n.ftPBL_bGiS:active .ftPBL_cuDj,.ftPBL_bGiS:active .ftPBL_elxg{color:").concat(e.clickableActiveText||"inherit","}\n\n.ftPBL_bGiS .ftPBL_elxg{color:").concat(e.messageColorClickable||"inherit","}")},root:"ftPBL_bGBk",clickable:"ftPBL_bGiS",disabled:"ftPBL_ywdX",button:"ftPBL_EwaR",content:"ftPBL_caGd",heading:"ftPBL_eDnN",hero:"ftPBL_cuDj",message:"ftPBL_elxg",small:"ftPBL_doqw",medium:"ftPBL_ycrn",large:"ftPBL_cMDj"}
var S=(x=Object(m["j"])(k,D),x(w=(P=F=function(e){Object(d["a"])(t,e)
var a=Object(c["a"])(t)
function t(){var e
Object(i["a"])(this,t)
for(var n=arguments.length,o=new Array(n),r=0;r<n;r++)o[r]=arguments[r]
e=a.call.apply(a,[this].concat(o))
e.handleClick=function(a){var t=e.props,n=t.readOnly,o=t.onClick
if(n){a.preventDefault()
a.stopPropagation()}else"function"===typeof o&&o(a)}
return e}Object(r["a"])(t,[{key:"renderHeading",value:function(){var e=this.props,a=e.headingLevel,t=e.headingAs,n=e.heading
return l.a.createElement("span",{className:D.heading},l.a.createElement(h["a"],{level:a,as:t,color:"primary"},n))}},{key:"renderHero",value:function(){return this.heroIsFunction?this.props.hero(this.SVGIconSize):this.props.hero}},{key:"renderContent",value:function(){var e=this.props,a=e.heading,t=e.message,n=e.hero
return l.a.createElement("span",{className:D.content},n&&l.a.createElement("span",{className:D.hero},this.renderHero()),a&&this.renderHeading(),t&&l.a.createElement("span",{className:D.message},Object(g["a"])(t)))}},{key:"render",value:function(){var e
var a=this.props,i=a.href,r=a.disabled,d=a.readOnly,c=a.onClick,s=a.size,_=a.margin,u=a.elementRef
var f=(e={},Object(o["a"])(e,D.root,true),Object(o["a"])(e,D[s],true),Object(o["a"])(e,D.clickable,i||c),Object(o["a"])(e,D.disabled,r),e)
var h=Object(v["a"])(t,this.props)
return l.a.createElement(b["a"],{as:"div",margin:_},l.a.createElement(b["a"],Object.assign({},Object(y["a"])(this.props,Object(n["a"])({},t.propTypes,{},b["a"].propTypes)),{type:"button"===h?"button":null,as:h,elementRef:u,className:p()(f),href:i,onClick:this.handleClick,disabled:r,"aria-disabled":r||d?"true":null}),this.renderContent()))}},{key:"heroIsFunction",get:function(){return"function"===typeof this.props.hero}},{key:"SVGIconSize",get:function(){var e=this.props.size
return"small"===e?"medium":"large"===e?"x-large":"large"}}])
t.displayName="Billboard"
return t}(s["Component"]),F.propTypes={hero:u.a.oneOfType([u.a.element,u.a.func]),size:u.a.oneOf(["small","medium","large"]),as:u.a.elementType,elementRef:u.a.func,heading:u.a.string,headingAs:u.a.oneOf(["h1","h2","h3","span"]),headingLevel:u.a.oneOf(["h1","h2","h3","h4"]),message:u.a.oneOfType([u.a.node,u.a.func]),onClick:u.a.func,href:u.a.string,disabled:u.a.bool,readOnly:u.a.bool,margin:m["c"].spacing},F.defaultProps={margin:void 0,disabled:false,readOnly:false,href:void 0,message:void 0,onClick:void 0,heading:void 0,hero:void 0,size:"medium",headingAs:"span",headingLevel:"h1",as:"span",elementRef:function(e){}},P))||w)},d61b:function(e,a,t){"use strict"
t.d(a,"a",(function(){return F}))
var n=t("RtDj")
var o=t("q1tI")
var i=t.n(o)
t("17x9")
var r=t("JPO4")
var d=t("BrAc")
var c=t("hlSo")
var s=t("QYKH")
function l(e,a){return Promise.all([e,a]).then(([e,a])=>e.concat(a))}function _(e){return Promise.resolve(e.data.map(e=>new s["a"](e)))}function u(e){return d["a"].get(e).then(e=>{var a,t
const n=null===(a=Object(c["a"])(null===(t=e.headers)||void 0===t?void 0:t.link))||void 0===a?void 0:a.next
return n?l(_(e),u(n)):_(e)})}function f(e){return u(`/api/v1/folders/${e}/files?only[]=names`)}function p(e){return d["a"].get(`/api/v1/courses/${e}/folders/root`).then(({data:e})=>e)}var h=t("uloQ")
var b=t("UT5+")
var m=t("agq5")
var g=t("whu9")
var v=t("ZbPE")
var y=t("vavB")
var k=t("e2r+")
var x=t("MAjw")
var w=t("7lHU")
class F extends i.a.Component{constructor(e){super(e)
this.showAlert=()=>{Object(h["b"])({type:"error",message:r["a"].t("Unable to set up drag and drop for modules")})}
this.handleDragEnter=()=>{this.setState({hightlightUpload:true})}
this.handleDragLeave=()=>{this.setState({hightlightUpload:false})}
this.handleDrop=e=>{const{moduleId:a,contextModules:t}=this.props
const{folder:n}=this.state
this.setInteractionOnAll(false)
y["a"].prototype.onUploadPosted=e=>{this.addFile(e)
if(t){const n=new Event("addFileToModule")
n.moduleId=a
n.attachment=e
t.dispatchEvent(n)}}
x["a"].setUploadOptions({alwaysRename:false,alwaysUploadZips:true})
this.setState({hightlightUpload:false,isUploading:true},()=>{x["a"].setFolder(n)
x["a"].setOptionsFromFiles(e,true)})}
this.handleEmptyUpload=()=>{this.setState({isUploading:false})
this.setInteractionOnAll(true)}
this.renameFileMessage=e=>r["a"].t('A file named "%{name}" already exists. Do you want to replace the existing file?',{name:e})
this.lockFileMessage=e=>r["a"].t('A locked file named "%{name}" already exists. Please enter a new name.',{name:e})
this.handleUploadChange=e=>{0===e&&this.setInteractionOnAll(true)
this.setState({isUploading:e>0})}
this.state={hightlightUpload:false,isUploading:false,folder:null,contextType:null,contextId:null,interaction:true}}componentDidMount(){Object.keys(F.folderState).length>0&&this.setFolderState(F.folderState)
0===F.activeDrops.size&&this.fetchRootFolder()
F.activeDrops.add(this)}fetchRootFolder(){return p(this.props.courseId).then(e=>f(e.id).then(a=>{e.files=a
F.folderState={contextId:e.context_id,contextType:e.context_type,folder:e}
F.activeDrops.forEach(e=>{e.setFolderState(F.folderState)})}).catch(this.showAlert)).catch(this.showAlert)}addFile(e){F.folderState.folder.files=[...F.folderState.folder.files,new s["a"](e)]
F.activeDrops.forEach(e=>{e.setFolderState(F.folderState)})}componentWillUnmount(){F.activeDrops.delete(this)}setFolderState(e){this.setState(e)}renderHero(e){const{hightlightUpload:a}=this.state
return Object(n["a"])(g["a"],{size:e,color:a?"brand":"primary"})}renderBillboard(){const{folder:e}=this.state
return Object(n["a"])(m["a"],{heading:e?r["a"].t("Drop files here to add to module"):r["a"].t("Loading..."),headingLevel:"h4",hero:e=>this.renderHero(e),message:Object(n["a"])(v["a"],{size:"small",color:"brand"},void 0,e?r["a"].t("or choose files"):"")})}setInteractionOnAll(e){F.activeDrops.forEach(a=>a.setInteraction(e))}setInteraction(e){this.setState({interaction:e})}renderFileDrop(){const{interaction:e,folder:a}=this.state
return Object(n["a"])(b["a"],{allowMultiple:true,renderLabel:this.renderBillboard(),onDragEnter:this.handleDragEnter,onDragLeave:this.handleDragLeave,onDrop:this.handleDrop,interaction:e&&a?"enabled":"disabled"})}renderUploading(){const{folder:e,contextId:a,contextType:t}=this.state
return i.a.createElement(i.a.Fragment,null,Object(n["a"])(w["a"],{visible:false,currentFolder:e,contextId:a,contextType:t,allowSkip:true,alwaysUploadZips:true,onEmptyOrClose:this.handleEmptyUpload,onRenameFileMessage:this.renameFileMessage,onLockFileMessage:this.lockFileMessage}),Object(n["a"])(k["a"],{onUploadChange:this.handleUploadChange}))}render(){const{isUploading:e}=this.state
return e?this.renderUploading():this.renderFileDrop()}}F.defaultProps={contextModules:null}
F.folderState={}
F.activeDrops=new Set},hlSo:function(e,a,t){"use strict"
a["a"]=function(e){if(!e)return[]
const a={}
e.split(",").map(e=>e.split("; ")).forEach(e=>{const t=e[0].substring(1,e[0].length-1)
let n=e[1].split("=")
n=n[1]
n=n.substring(1,n.length-1)
a[n]=t})
return a}},msMH:function(e,a,t){"use strict"
t.d(a,"a",(function(){return O}))
var n=t("rePB")
var o=t("Ff2n")
var i=t("1OyB")
var r=t("vuIU")
var d=t("Ji7U")
var c=t("LK+K")
var s=t("q1tI")
var l=t.n(s)
var _=t("17x9")
var u=t.n(_)
var f=t("TSYQ")
var p=t.n(f)
var h=t("n12J")
var b=t("J2CL")
function m(e,a,t){if("input"===e.as){if("children"===a&&e.children||void 0==e.value)return new Error("Prop `value` and not `children` must be supplied if `".concat(t,' as="input"`'))}else{if("value"===a&&void 0!=e.value)return new Error("Prop `children` and not `value` must be supplied unless `".concat(t,' as="input"`'))
if(!e.children)return new Error("Prop `children` should be supplied unless `".concat(t,' as="input"`.'))}return}var g=t("nAyT")
var v=t("KgFQ")
var y=t("jtGx")
var k=t("oXx0")
function x(e){var a=e.borders,t=e.colors,n=e.spacing,o=e.typography
return{lineHeight:o.lineHeightFit,h1FontSize:o.fontSizeXXLarge,h1FontWeight:o.fontWeightLight,h1FontFamily:o.fontFamily,h2FontSize:o.fontSizeXLarge,h2FontWeight:o.fontWeightNormal,h2FontFamily:o.fontFamily,h3FontSize:o.fontSizeLarge,h3FontWeight:o.fontWeightBold,h3FontFamily:o.fontFamily,h4FontSize:o.fontSizeMedium,h4FontWeight:o.fontWeightBold,h4FontFamily:o.fontFamily,h5FontSize:o.fontSizeSmall,h5FontWeight:o.fontWeightNormal,h5FontFamily:o.fontFamily,primaryInverseColor:t.textLightest,primaryColor:t.textDarkest,secondaryColor:t.textDark,secondaryInverseColor:t.textLight,borderPadding:n.xxxSmall,borderColor:t.borderMedium,borderWidth:a.widthSmall,borderStyle:a.style}}x.canvas=function(e){return{primaryColor:e["ic-brand-font-color-dark"]}}
x["instructure"]=function(e){var a=e.typography
return{h1FontFamily:a.fontFamilyHeading,h2FontFamily:a.fontFamilyHeading,h3FontWeight:a.fontWeightBold,h3FontSize:"2.125rem",h4FontWeight:a.fontWeightBold,h4FontSize:a.fontSizeLarge,h5FontWeight:a.fontWeightBold,h5FontSize:a.fontSizeMedium}}
var w={fontFamily:["h1FontFamily","h2FontFamily","h3FontFamily","h4FontFamily","h5FontFamily"]}
var F=Object(b["d"])({map:w,version:"8.0.0"})
var P,D,S,B,A,L
var j={componentId:"blnAQ",template:function(e){return"\n\n.blnAQ_bGBk{line-height:".concat(e.lineHeight||"inherit",";margin:0}\n\ninput.blnAQ_bGBk[type]{-moz-appearance:none;-webkit-appearance:none;appearance:none;background:none;border:none;border-radius:0;box-shadow:none;box-sizing:border-box;color:inherit;display:block;height:auto;line-height:inherit;margin:-0.375rem 0 0 0;outline:0;padding:0;text-align:start;width:100%}\n\n[dir=ltr] input.blnAQ_bGBk[type]{text-align:left}\n\n[dir=rtl] input.blnAQ_bGBk[type]{text-align:right}\n\ninput.blnAQ_bGBk[type]:focus{outline:none}\n\n.blnAQ_fCtg{font-family:").concat(e.h1FontFamily||"inherit",";font-size:").concat(e.h1FontSize||"inherit",";font-weight:").concat(e.h1FontWeight||"inherit","}\n\n.blnAQ_cVrl{font-family:").concat(e.h2FontFamily||"inherit",";font-size:").concat(e.h2FontSize||"inherit",";font-weight:").concat(e.h2FontWeight||"inherit","}\n\n.blnAQ_dnfM{font-family:").concat(e.h3FontFamily||"inherit",";font-size:").concat(e.h3FontSize||"inherit",";font-weight:").concat(e.h3FontWeight||"inherit","}\n\n.blnAQ_KGwv{font-family:").concat(e.h4FontFamily||"inherit",";font-size:").concat(e.h4FontSize||"inherit",";font-weight:").concat(e.h4FontWeight||"inherit","}\n\n.blnAQ_eYKA{font-family:").concat(e.h5FontFamily||"inherit",";font-size:").concat(e.h5FontSize||"inherit",";font-weight:").concat(e.h5FontWeight||"inherit","}\n\n.blnAQ_dbSc{font-size:inherit;font-weight:inherit;line-height:inherit;margin:0}\n\n.blnAQ_bACI{border-top:").concat(e.borderWidth||"inherit"," ").concat(e.borderStyle||"inherit"," ").concat(e.borderColor||"inherit",";padding-top:").concat(e.borderPadding||"inherit","}\n\n.blnAQ_kWwi{border-bottom:").concat(e.borderWidth||"inherit"," ").concat(e.borderStyle||"inherit"," ").concat(e.borderColor||"inherit",";padding-bottom:").concat(e.borderPadding||"inherit","}\n\n.blnAQ_drOs{color:inherit}\n\n.blnAQ_eCSh{color:").concat(e.primaryColor||"inherit","}\n\n.blnAQ_buuG{color:").concat(e.secondaryColor||"inherit","}\n\n.blnAQ_bFtJ{color:").concat(e.primaryInverseColor||"inherit","}\n\n.blnAQ_dsSB{color:").concat(e.secondaryInverseColor||"inherit","}\n\n.blnAQ_bOQC{display:block;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}")},root:"blnAQ_bGBk","level--h1":"blnAQ_fCtg","level--h2":"blnAQ_cVrl","level--h3":"blnAQ_dnfM","level--h4":"blnAQ_KGwv","level--h5":"blnAQ_eYKA","level--reset":"blnAQ_dbSc","border--top":"blnAQ_bACI","border--bottom":"blnAQ_kWwi","color--inherit":"blnAQ_drOs","color--primary":"blnAQ_eCSh","color--secondary":"blnAQ_buuG","color--primary-inverse":"blnAQ_bFtJ","color--secondary-inverse":"blnAQ_dsSB",ellipsis:"blnAQ_bOQC"}
var O=(P=Object(g["a"])("8.0.0",{ellipsis:"<TruncateText />"}),D=Object(k["a"])(),S=Object(b["j"])(x,j,F),P(B=D(B=S(B=(L=A=function(e){Object(d["a"])(t,e)
var a=Object(c["a"])(t)
function t(){Object(i["a"])(this,t)
return a.apply(this,arguments)}Object(r["a"])(t,[{key:"render",value:function(){var e
var a=this.props,i=a.border,r=a.children,d=a.color,c=a.level,s=a.margin,_=a.elementRef,u=a.ellipsis,f=Object(o["a"])(a,["border","children","color","level","margin","elementRef","ellipsis"])
var b=Object(v["a"])(t,this.props,(function(){return"reset"===c?"span":c}))
return l.a.createElement(h["a"],Object.assign({},Object(y["b"])(f),{className:p()((e={},Object(n["a"])(e,j.root,true),Object(n["a"])(e,j["level--".concat(c)],true),Object(n["a"])(e,j["color--".concat(d)],d),Object(n["a"])(e,j["border--".concat(i)],"none"!==i),Object(n["a"])(e,j.ellipsis,u),e)),as:b,margin:s,elementRef:_}),r)}}])
t.displayName="Heading"
return t}(s["Component"]),A.propTypes={border:u.a.oneOf(["none","top","bottom"]),children:m,color:u.a.oneOf(["primary","secondary","primary-inverse","secondary-inverse","inherit"]),level:u.a.oneOf(["h1","h2","h3","h4","h5","reset"]),as:u.a.elementType,margin:b["c"].spacing,elementRef:u.a.func,ellipsis:u.a.bool},A.defaultProps={children:null,margin:void 0,elementRef:void 0,border:"none",color:"inherit",level:"h2"},L))||B)||B)||B)},scx4:function(e,a,t){"use strict"
t.d(a,"a",(function(){return d}))
var n=t("HGxv")
var o=t("8WeW")
Object(o["a"])(JSON.parse('{"ar":{"archive_3f794d7e":"أرشيف","audio_dd489fcc":"صوت","flash_6afbf65a":"Flash","image_8ad06":"الصورة","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"نص عادي","presentation_2d9387ca":"عرض تقديمي","source_code_2395ca74":"رمز المصدر","spreadsheet_6d622119":"جدول بيانات","text_document_eacbcdb7":"مستند نصي","unknown_47a3b725":"غير معروف","video_b9f27375":"فيديو","web_page_146f9102":"صفحة الويب"},"ca":{"archive_3f794d7e":"Arxiva","audio_dd489fcc":"So","flash_6afbf65a":"Flash","image_8ad06":"Imatge","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Text sense format","presentation_2d9387ca":"Presentació","source_code_2395ca74":"Codi font","spreadsheet_6d622119":"Full de càlcul","text_document_eacbcdb7":"Document de text","unknown_47a3b725":"Desconegut","video_b9f27375":"Vídeo","web_page_146f9102":"Pàgina web"},"cy":{"archive_3f794d7e":"Archifo","audio_dd489fcc":"Sain","flash_6afbf65a":"Flash","image_8ad06":"Delwedd","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Testun plaen","presentation_2d9387ca":"Cyflwyniad","source_code_2395ca74":"Cod ffynhonnell","spreadsheet_6d622119":"Taenlen","text_document_eacbcdb7":"Dogfen Testun","unknown_47a3b725":"Dieithr","video_b9f27375":"Fideo","web_page_146f9102":"Tudalen we"},"da":{"archive_3f794d7e":"Arkiv","audio_dd489fcc":"Lyd","flash_6afbf65a":"Flash","image_8ad06":"Billede","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Almindelig tekst","presentation_2d9387ca":"Præsentation","source_code_2395ca74":"Kildekode","spreadsheet_6d622119":"Regneark","text_document_eacbcdb7":"Tekstdokument","unknown_47a3b725":"Ukendt","video_b9f27375":"Video","web_page_146f9102":"Webside"},"da-x-k12":{"archive_3f794d7e":"Arkiv","audio_dd489fcc":"Lyd","flash_6afbf65a":"Flash","image_8ad06":"Billede","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Almindelig tekst","presentation_2d9387ca":"Præsentation","source_code_2395ca74":"Kildekode","spreadsheet_6d622119":"Regneark","text_document_eacbcdb7":"Tekstdokument","unknown_47a3b725":"Ukendt","video_b9f27375":"Video","web_page_146f9102":"Webside"},"de":{"archive_3f794d7e":"Archivieren","audio_dd489fcc":"Audio","flash_6afbf65a":"Flash","image_8ad06":"Bild","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Nur-Text","presentation_2d9387ca":"Präsentation","source_code_2395ca74":"Quellcode","spreadsheet_6d622119":"Tabellenblatt","text_document_eacbcdb7":"Textdokument","unknown_47a3b725":"Unbekannt","video_b9f27375":"Video","web_page_146f9102":"Webseite"},"el":{"archive_3f794d7e":"Αρχείο","audio_dd489fcc":"Αρχείο ήχου","flash_6afbf65a":"Flash","image_8ad06":"Εικόνα","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Απλό κείμενο","presentation_2d9387ca":"Παρουσίαση","source_code_2395ca74":"Πηγαίος κώδικας","spreadsheet_6d622119":"Λογιστικό φύλλο","text_document_eacbcdb7":"Έγγραφο κειμένου","unknown_47a3b725":"Άγνωστο","video_b9f27375":"Αρχείο Βίντεο","web_page_146f9102":"Ιστοσελίδα"},"en-AU":{"archive_3f794d7e":"Archive","audio_dd489fcc":"Audio","flash_6afbf65a":"Flash","image_8ad06":"Image","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Plain text","presentation_2d9387ca":"Presentation","source_code_2395ca74":"Source code","spreadsheet_6d622119":"Spreadsheet","text_document_eacbcdb7":"Text document","unknown_47a3b725":"Unknown","video_b9f27375":"Video","web_page_146f9102":"Web page"},"en-AU-x-unimelb":{"archive_3f794d7e":"Archive","audio_dd489fcc":"Audio","flash_6afbf65a":"Flash","image_8ad06":"Image","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Plain text","presentation_2d9387ca":"Presentation","source_code_2395ca74":"Source code","spreadsheet_6d622119":"Spreadsheet","text_document_eacbcdb7":"Text document","unknown_47a3b725":"Unknown","video_b9f27375":"Video","web_page_146f9102":"Web page"},"en-CA":{"archive_3f794d7e":"Archive","audio_dd489fcc":"Audio","flash_6afbf65a":"Flash","image_8ad06":"Image","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Plain text","presentation_2d9387ca":"Presentation","source_code_2395ca74":"Source code","spreadsheet_6d622119":"Spreadsheet","text_document_eacbcdb7":"Text document","unknown_47a3b725":"Unknown","video_b9f27375":"Video","web_page_146f9102":"Web page"},"en-GB":{"archive_3f794d7e":"Archive","audio_dd489fcc":"Audio","flash_6afbf65a":"Flash","image_8ad06":"Image","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Plain text","presentation_2d9387ca":"Presentation","source_code_2395ca74":"Source code","spreadsheet_6d622119":"Spreadsheet","text_document_eacbcdb7":"Text document","unknown_47a3b725":"Unknown","video_b9f27375":"Video","web_page_146f9102":"Web page"},"en-GB-x-lbs":{"archive_3f794d7e":"Archive","audio_dd489fcc":"Audio","flash_6afbf65a":"Flash","image_8ad06":"Image","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Plain text","presentation_2d9387ca":"Presentation","source_code_2395ca74":"Source code","spreadsheet_6d622119":"Spreadsheet","text_document_eacbcdb7":"Text document","unknown_47a3b725":"Unknown","video_b9f27375":"Video","web_page_146f9102":"Web page"},"en-GB-x-ukhe":{"archive_3f794d7e":"Archive","audio_dd489fcc":"Audio","flash_6afbf65a":"Flash","image_8ad06":"Image","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Plain text","presentation_2d9387ca":"Presentation","source_code_2395ca74":"Source code","spreadsheet_6d622119":"Spreadsheet","text_document_eacbcdb7":"Text document","unknown_47a3b725":"Unknown","video_b9f27375":"Video","web_page_146f9102":"Web page"},"es":{"archive_3f794d7e":"Archivar","audio_dd489fcc":"Audio","flash_6afbf65a":"Flash","image_8ad06":"Imagen","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Texto sin formato","presentation_2d9387ca":"Presentación","source_code_2395ca74":"Código fuente","spreadsheet_6d622119":"Hoja de cálculo","text_document_eacbcdb7":"Documento de texto","unknown_47a3b725":"Desconocido","video_b9f27375":"Video","web_page_146f9102":"Página web"},"es-ES":{"archive_3f794d7e":"Archivar","audio_dd489fcc":"Audio","flash_6afbf65a":"Flash","image_8ad06":"Imagen","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Texto sin formato","presentation_2d9387ca":"Presentación","source_code_2395ca74":"Código fuente","spreadsheet_6d622119":"Hoja de cálculo","text_document_eacbcdb7":"Documento de texto","unknown_47a3b725":"Desconocido","video_b9f27375":"Vídeo","web_page_146f9102":"Página web"},"fa":{"archive_3f794d7e":"بایگانی","audio_dd489fcc":"صدا","flash_6afbf65a":"فلش","image_8ad06":"تصویر","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"متن ساده","presentation_2d9387ca":"ارائه","source_code_2395ca74":"رمز منبع","spreadsheet_6d622119":"صفحه گسترده","text_document_eacbcdb7":"سند متنی","unknown_47a3b725":"ناشناس","video_b9f27375":"تصویر","web_page_146f9102":"صفحه وب"},"fi":{"archive_3f794d7e":"Arkisto","audio_dd489fcc":"Ääni","flash_6afbf65a":"Flash","image_8ad06":"Kuva","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Pelkkä teksti","presentation_2d9387ca":"Esitys","source_code_2395ca74":"Lähteen koodi","spreadsheet_6d622119":"Laskentataulukko","text_document_eacbcdb7":"Tekstiasiakirja","unknown_47a3b725":"Tuntematon","video_b9f27375":"Video","web_page_146f9102":"Verkkosivusto"},"fr":{"archive_3f794d7e":"Archiver","audio_dd489fcc":"Audio","flash_6afbf65a":"Flash","image_8ad06":"Image","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Texte brut","presentation_2d9387ca":"Présentation","source_code_2395ca74":"Code source","spreadsheet_6d622119":"Feuille","text_document_eacbcdb7":"Document de texte","unknown_47a3b725":"Inconnu","video_b9f27375":"Vidéo","web_page_146f9102":"Page Web"},"fr-CA":{"archive_3f794d7e":"Archiver","audio_dd489fcc":"Audio","flash_6afbf65a":"Flash","image_8ad06":"Image","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Texte brut","presentation_2d9387ca":"Présentation","source_code_2395ca74":"Code source","spreadsheet_6d622119":"Feuille","text_document_eacbcdb7":"Document de texte","unknown_47a3b725":"Inconnu","video_b9f27375":"Vidéo","web_page_146f9102":"Page Web"},"he":{"archive_3f794d7e":"העברה לארכיון","audio_dd489fcc":"שמע","flash_6afbf65a":"פלאש","image_8ad06":"תמונה","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"כיתוב פשוט","presentation_2d9387ca":"מצגת","source_code_2395ca74":"קוד מקור","spreadsheet_6d622119":"גיליון חישובים","text_document_eacbcdb7":"מסמך מלל","unknown_47a3b725":"לא מוכר","video_b9f27375":"וידאו","web_page_146f9102":"דף אינטרנט"},"ht":{"archive_3f794d7e":"Achiv","audio_dd489fcc":"Son","flash_6afbf65a":"Flash","image_8ad06":"Imaj","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Tèks brit","presentation_2d9387ca":"Prezantasyon","source_code_2395ca74":"Kòd sous","spreadsheet_6d622119":"Fèy Kalkil","text_document_eacbcdb7":"Dokiman Tèks","unknown_47a3b725":"Enkoni","video_b9f27375":"Videyo","web_page_146f9102":"Paj web"},"hu":{"archive_3f794d7e":"Archívum","audio_dd489fcc":"Hang","flash_6afbf65a":"Flash","image_8ad06":"Kép","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Egyszerű szöveg","presentation_2d9387ca":"Prezentáció","source_code_2395ca74":"Forráskód","spreadsheet_6d622119":"Táblázat","text_document_eacbcdb7":"Szöveges dokumentum","unknown_47a3b725":"Ismeretlen","video_b9f27375":"Videó","web_page_146f9102":"Weboldal "},"hy":{"archive_3f794d7e":"Արխիվ","audio_dd489fcc":"Աուդիո","flash_6afbf65a":"Flash","image_8ad06":"Պատկեր","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Սովորական տեքստ","presentation_2d9387ca":"Պրեզենտացիա","source_code_2395ca74":"Աղբյուրի կոդ","spreadsheet_6d622119":"Էլեկտրոնային աղյուսակ","text_document_eacbcdb7":"Տեքստային փաստաթուղթ","unknown_47a3b725":"Անհայտ է","video_b9f27375":"Վիդեո","web_page_146f9102":"Վեբ-էջ"},"is":{"archive_3f794d7e":"Safn","audio_dd489fcc":"Hljóð","flash_6afbf65a":"Flash","image_8ad06":"Mynd","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Einfaldur texti","presentation_2d9387ca":"Kynning","source_code_2395ca74":"Frumkóði","spreadsheet_6d622119":"Töflureiknir","text_document_eacbcdb7":"Textaskjal","unknown_47a3b725":"Óþekkt","video_b9f27375":"Myndband","web_page_146f9102":"Vefsíða"},"it":{"archive_3f794d7e":"Archivia","audio_dd489fcc":"Audio","flash_6afbf65a":"Flash","image_8ad06":"Immagine","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Testo normale","presentation_2d9387ca":"Presentazione","source_code_2395ca74":"Codice sorgente","spreadsheet_6d622119":"Foglio di calcolo","text_document_eacbcdb7":"Documento di testo","unknown_47a3b725":"Sconosciuto","video_b9f27375":"Video","web_page_146f9102":"Pagina web"},"ja":{"archive_3f794d7e":"アーカイブ","audio_dd489fcc":"オーディオ","flash_6afbf65a":"Flash","image_8ad06":"画像","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"プレーン テキスト","presentation_2d9387ca":"プレゼンテーション","source_code_2395ca74":"ソース コード","spreadsheet_6d622119":"スプレッドシート","text_document_eacbcdb7":"テキスト文書","unknown_47a3b725":"不明","video_b9f27375":"ビデオ","web_page_146f9102":"Web ページ"},"ko":{"archive_3f794d7e":"저장소","image_8ad06":"이미지","unknown_47a3b725":"알 수 없음"},"mi":{"archive_3f794d7e":"Pūranga","audio_dd489fcc":"Ōrorongo","flash_6afbf65a":"Flash","image_8ad06":"Āhua","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"kuputuhi tōkau","presentation_2d9387ca":"Whakāturanga","source_code_2395ca74":"waehere pūtake","spreadsheet_6d622119":"Ripanga","text_document_eacbcdb7":"tuhinga Kupu","unknown_47a3b725":"Kaore e mōhiotia","video_b9f27375":"Ataata","web_page_146f9102":"whārangi Tukutuku"},"nb":{"archive_3f794d7e":"Arkiv","audio_dd489fcc":"Lyd","flash_6afbf65a":"Blitz","image_8ad06":"Bilde","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Enkel tekst","presentation_2d9387ca":"Presentasjon","source_code_2395ca74":"kilde kode","spreadsheet_6d622119":"Regneark","text_document_eacbcdb7":"Tekst dokument","unknown_47a3b725":"Ukjent","video_b9f27375":"Video","web_page_146f9102":"Nettside"},"nb-x-k12":{"archive_3f794d7e":"Arkiv","audio_dd489fcc":"Lyd","flash_6afbf65a":"Blitz","image_8ad06":"Bilde","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Enkel tekst","presentation_2d9387ca":"Presentasjon","source_code_2395ca74":"kilde kode","spreadsheet_6d622119":"Regneark","text_document_eacbcdb7":"Tekst dokument","unknown_47a3b725":"Ukjent","video_b9f27375":"Video","web_page_146f9102":"Nettside"},"nl":{"archive_3f794d7e":"Archiveren","audio_dd489fcc":"Audio","flash_6afbf65a":"Flash ","image_8ad06":"Afbeelding","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Tekst zonder opmaak","presentation_2d9387ca":"Presentatie","source_code_2395ca74":"Broncode","spreadsheet_6d622119":"Werkblad","text_document_eacbcdb7":"Tekstdocument","unknown_47a3b725":"Onbekend","video_b9f27375":"Video ","web_page_146f9102":"webpagina"},"nn":{"archive_3f794d7e":"Arkiv","audio_dd489fcc":"Lyd","flash_6afbf65a":"Flash","image_8ad06":"Bilde","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Rein tekst","presentation_2d9387ca":"Presentasjon","source_code_2395ca74":"Kjeldekode","spreadsheet_6d622119":"Rekneark","text_document_eacbcdb7":"Tekstdokument","unknown_47a3b725":"Ukjent","video_b9f27375":"Video","web_page_146f9102":"Nettside"},"pl":{"archive_3f794d7e":"Archiwum","audio_dd489fcc":"Audio","flash_6afbf65a":"Flash","image_8ad06":"Obraz","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Zwykły tekst","presentation_2d9387ca":"Prezentacja","source_code_2395ca74":"Kod źródłowy","spreadsheet_6d622119":"Arkusz kalkulacyjny","text_document_eacbcdb7":"Dokument tekstowy","unknown_47a3b725":"Nieznany","video_b9f27375":"Wideo","web_page_146f9102":"Strona sieci Web"},"pt":{"archive_3f794d7e":"Arquivar","audio_dd489fcc":"Áudio","flash_6afbf65a":"Flash","image_8ad06":"Imagem","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Texto simples","presentation_2d9387ca":"Apresentação","source_code_2395ca74":"Código-fonte","spreadsheet_6d622119":"Folha de cálculo","text_document_eacbcdb7":"Documento de texto","unknown_47a3b725":"Desconhecido","video_b9f27375":"Vídeo","web_page_146f9102":"Página Web"},"pt-BR":{"archive_3f794d7e":"Arquivar","audio_dd489fcc":"Áudio","flash_6afbf65a":"Flash","image_8ad06":"Imagem","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Texto simples","presentation_2d9387ca":"Apresentação","source_code_2395ca74":"Código-fonte","spreadsheet_6d622119":"Planilha","text_document_eacbcdb7":"Documento de texto","unknown_47a3b725":"Desconhecido","video_b9f27375":"Vídeo","web_page_146f9102":"Página Web"},"ru":{"archive_3f794d7e":"Архив","audio_dd489fcc":"Аудио","flash_6afbf65a":"Flash","image_8ad06":"Изображение","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Обычный текст","presentation_2d9387ca":"Презентация","source_code_2395ca74":"Код источника","spreadsheet_6d622119":"Динамическая таблица","text_document_eacbcdb7":"Текстовый документ","unknown_47a3b725":"Неизвестно","video_b9f27375":"Видео","web_page_146f9102":"Веб-страница"},"sl":{"archive_3f794d7e":"Arhiviraj","audio_dd489fcc":"Zvok","flash_6afbf65a":"Flash","image_8ad06":"Slika","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Navadno besedilo","presentation_2d9387ca":"Predstavitev","source_code_2395ca74":"Izvorna koda","spreadsheet_6d622119":"Preglednica","text_document_eacbcdb7":"Besedilni dokument","unknown_47a3b725":"Neznano","video_b9f27375":"Videoposnetek","web_page_146f9102":"Spletna stran"},"sv":{"archive_3f794d7e":"Arkivera","audio_dd489fcc":"Ljud","flash_6afbf65a":"Flash","image_8ad06":"Bild","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Oformaterad text","presentation_2d9387ca":"Presentation","source_code_2395ca74":"Källkod","spreadsheet_6d622119":"Kalkylblad","text_document_eacbcdb7":"Textdokument","unknown_47a3b725":"Okänd","video_b9f27375":"Video","web_page_146f9102":"Webbsida"},"sv-x-k12":{"archive_3f794d7e":"Arkivera","audio_dd489fcc":"Ljud","flash_6afbf65a":"Flash","image_8ad06":"Bild","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Oformaterad text","presentation_2d9387ca":"Presentation","source_code_2395ca74":"Källkod","spreadsheet_6d622119":"Kalkylblad","text_document_eacbcdb7":"Textdokument","unknown_47a3b725":"Okänd","video_b9f27375":"Video","web_page_146f9102":"Webbsida"},"th":{"archive_3f794d7e":"จัดเก็บแยก","audio_dd489fcc":"เสียง","flash_6afbf65a":"แฟลช","image_8ad06":"ภาพ","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"อักษรอย่างเดียว","presentation_2d9387ca":"การนำเสนอ","source_code_2395ca74":"รหัสข้อมูลต้นทาง","spreadsheet_6d622119":"กระดาษคำนวณ","text_document_eacbcdb7":"เอกสารแบบข้อความ","unknown_47a3b725":"ไม่รู้จัก","video_b9f27375":"วิดีโอ","web_page_146f9102":"เว็บเพจ"},"tr":{"archive_3f794d7e":"Arşiv","audio_dd489fcc":"Ses","flash_6afbf65a":"Flash","image_8ad06":"Resim","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Düz metin","presentation_2d9387ca":"Sunum","source_code_2395ca74":"Kaynak kodu","spreadsheet_6d622119":"Elektronik Tablo","text_document_eacbcdb7":"Metin belgesi","unknown_47a3b725":"Bilinmiyor","video_b9f27375":"Video","web_page_146f9102":"Web sayfası"},"uk":{"archive_3f794d7e":"Архів","audio_dd489fcc":"Звук","flash_6afbf65a":"Флеш","image_8ad06":"Зображення","pdf_d8236d9a":"Формат PDF","plain_text_e3ab33aa":"Простий текст","presentation_2d9387ca":"Презентація","source_code_2395ca74":"Вихідний код","spreadsheet_6d622119":"Електронна таблиця","text_document_eacbcdb7":"Текстовий документ","unknown_47a3b725":"Невідомий","video_b9f27375":"Відео","web_page_146f9102":"Веб-сторінка"},"vi":{"archive_3f794d7e":"Lưu trữ","audio_dd489fcc":"Âm thanh","flash_6afbf65a":"Flash","image_8ad06":"Hình ảnh","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"Văn bản thuần túy","presentation_2d9387ca":"Bài trình bày","source_code_2395ca74":"Mã nguồn","spreadsheet_6d622119":"Bảng Tính","text_document_eacbcdb7":"Tài liệu văn bản","unknown_47a3b725":"Không xác định","video_b9f27375":"Video","web_page_146f9102":"Trang web"},"zh-Hans":{"archive_3f794d7e":"存档","audio_dd489fcc":"音频","flash_6afbf65a":"Flash","image_8ad06":"图像","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"纯文本","presentation_2d9387ca":"展示","source_code_2395ca74":"源代码","spreadsheet_6d622119":"电子表格","text_document_eacbcdb7":"文本文档","unknown_47a3b725":"未知","video_b9f27375":"视频","web_page_146f9102":"网页"},"zh-Hant":{"archive_3f794d7e":"存檔","audio_dd489fcc":"音頻","flash_6afbf65a":"Flash","image_8ad06":"影像","pdf_d8236d9a":"PDF","plain_text_e3ab33aa":"純文字","presentation_2d9387ca":"簡報","source_code_2395ca74":"源代碼","spreadsheet_6d622119":"电子表格","text_document_eacbcdb7":"文本文件","unknown_47a3b725":"未知","video_b9f27375":"視訊","web_page_146f9102":"網頁"}}'))
t("jQeR")
t("0sPK")
var i=n["default"].scoped("mimeClass")
const r={audio:{get displayName(){return i.t("Audio")},mimeTypes:["audio/x-mpegurl","audio/x-pn-realaudio","audio/x-aiff","audio/3gpp","audio/mid","audio/x-wav","audio/basic","audio/mpeg"]},code:{get displayName(){return i.t("Source code")},mimeTypes:["text/xml","text/css","text/x-yaml","application/xml","application/javascript","text/x-csharp"]},doc:{get displayName(){return i.t("Text document")},mimeTypes:["application/x-docx","text/rtf","application/msword","application/rtf","application/vnd.oasis.opendocument.text","application/vnd.openxmlformats-officedocument.wordprocessingml.document"]},flash:{get displayName(){return i.t("Flash")},mimeTypes:["application/x-shockwave-flash"]},html:{get displayName(){return i.t("Web page")},mimeTypes:["text/html","application/xhtml+xml"]},image:{get displayName(){return i.t("Image")},mimeTypes:["image/png","image/x-psd","image/gif","image/pjpeg","image/jpeg"]},ppt:{get displayName(){return i.t("Presentation")},mimeTypes:["application/vnd.openxmlformats-officedocument.presentationml.presentation","application/vnd.ms-powerpoint"]},pdf:{get displayName(){return i.t("PDF")},mimeTypes:["application/pdf"]},text:{get displayName(){return i.t("Plain text")},mimeTypes:["text","text/plain"]},video:{get displayName(){return i.t("Video")},mimeTypes:["video/mp4","video/x-ms-asf","video/x-msvideo","video/x-sgi-movie","video/mpeg","video/quicktime","video/x-la-asf","video/3gpp","video/webm","video/avi"]},xls:{get displayName(){return i.t("Spreadsheet")},mimeTypes:["application/vnd.oasis.opendocument.spreadsheet","text/csv","application/vnd.openxmlformats-officedocument.spreadsheetml.sheet","application/vnd.ms-excel"]},zip:{get displayName(){return i.t("Archive")},mimeTypes:["application/x-rar-compressed","application/x-zip-compressed","application/zip","application/x-zip","application/x-rar"]}}
function d(e){return d.mimeClasses[e]||"file"}d.displayName=function(e){const a=r[d(e)]
return a&&a.displayName||i.t("Unknown")}
d.mimeClasses={}
for(const e in r){const a=r[e]
a.mimeTypes.forEach(a=>d.mimeClasses[a]=e)}},whu9:function(e,a,t){"use strict"
t.d(a,"a",(function(){return u}))
var n=t("VTBJ")
var o=t("1OyB")
var i=t("vuIU")
var r=t("Ji7U")
var d=t("LK+K")
var c=t("q1tI")
var s=t.n(c)
var l=t("hPGw")
var _=s.a.createElement("path",{d:"M1838.86029,1451.57632 L1920,1532.94589 L1558.4341,1894.51179 L361.565904,1894.51179 L0,1532.94589 L81.2546391,1451.57632 L409.146414,1779.58302 L1510.85359,1779.58302 L1838.86029,1451.57632 Z M962.333054,25 L1462.61798,525.284928 L1381.47827,606.654495 L1019.68251,244.973662 L1019.68251,1432.53262 L904.86867,1432.53262 L904.86867,244.973662 L543.187837,606.654495 L462.048126,525.284928 L962.333054,25 Z",fillRule:"evenodd",stroke:"none",strokeWidth:"1"})
var u=function(e){Object(r["a"])(t,e)
var a=Object(d["a"])(t)
function t(){Object(o["a"])(this,t)
return a.apply(this,arguments)}Object(i["a"])(t,[{key:"render",value:function(){return s.a.createElement(l["a"],Object.assign({},this.props,{name:"IconUpload",viewBox:"0 0 1920 1920"}),_)}}])
t.displayName="IconUploadLine"
return t}(c["Component"])
u.glyphName="upload"
u.variant="Line"
u.propTypes=Object(n["a"])({},l["a"].propTypes)}}])

//# sourceMappingURL=module_dnd-c-17cf0d141f.js.map