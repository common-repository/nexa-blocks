(()=>{var e,o={47:(e,o,t)=>{"use strict";const n=window.wp.blocks,l=window.wp.i18n,a=[{label:(0,l.__)("Preset One","nexa-blocks"),value:"style-1"},{label:(0,l.__)("Preset Two","nexa-blocks"),value:"style-2"}],r=((0,l.__)("Auto","nexa-blocks"),(0,l.__)("Fixed","nexa-blocks"),(0,l.__)("Full","nexa-blocks"),[{label:(0,l.__)("Icons Library","nexa-blocks"),value:"icons_library"},{label:(0,l.__)("Upload SVG","nexa-blocks"),value:"upload_svg"}]),c=[{label:(0,l.__)("Icons Library","nexa-blocks"),value:"icons_library"},{label:(0,l.__)("Upload","nexa-blocks"),value:"upload_svg"}],i=[{label:(0,l.__)("Top","nexa-blocks"),value:"mt_position"},{label:(0,l.__)("Left","nexa-blocks"),value:"ml_position"},{label:(0,l.__)("Right","nexa-blocks"),value:"mr_position"}],s="contentAlign",b="itemBorder",m="itemBradius",x="itemPadding",d="itemBg",u="itemHbg",p="itemBshadow",v="itemHbshadow",_="biconCsize",g="biconSize",k="biconBorder",y="biconBradius",h="biconPadding",N="biconMargin",S="biconBg",w="biconHbg",E="biconGap",C="titleTypo",f="titleMargin",I="descTypo",$="descMargin",B="btnTypo",A="btnBorder",T="btnBradius",j="btnPadding",P="btnMargin",M="btnBg",R="btnHbg",F="btnBshadow",L="btnHbshadow",O="iconGap",D="iconSize",H="iconBorder",G="iconBradius",q="iconPadding",z="iconBg",U="iconHbg",{generateBackgroundAttributes:V,generateBorderAttributes:W,generateResBoxControlAttributes:J,generateBoxShadowAttributes:K,generateResRangeAttributes:Q,generateAlignmentAttributes:X,generateTypographyAttributes:Y}=window.nexaModules,Z={globalSettings:{type:"object",default:{padding:{controlName:"mainPadding"},margin:{controlName:"mainMargin"},border:{controlName:"mainBorder"},borderRadius:{controlName:"mainBorderRadius"},boxShadow:{controlName:"mainBoxShadow"},bg:{controlName:"mainBg"}}},preset:{type:"string",default:"style-1"},showMediaIcon:{type:"boolean",default:!0},mediaIconSource:{type:"string",default:"icons_library"},mediaIcon:{type:"string",default:"fa-solid fa-award"},mediaSvgIcon:{type:"object",default:{id:"",url:"",alt:""}},mediaIconPosition:{type:"string",default:"mt_position"},showTitle:{type:"boolean",default:!0},title:{type:"string",default:"Top Rising Medal"},titleTag:{type:"string",default:"h5"},nx_titleColors:{type:"object",default:{normal:"",hover:""}},showDesc:{type:"boolean",default:!0},desc:{type:"string",default:"This website to modify the aspects of their web interface, ensuring a more tailored and enjoyable session."},nx_descColors:{type:"object",default:{normal:"",hover:""}},showBtn:{type:"boolean",default:!0},btnLabel:{type:"string",default:"Read More"},btnLink:{type:"object",default:{url:"#",openInNewTab:!1,addNoFollow:!1,addSponsored:!1}},nx_btnColors:{type:"object",default:{normal:"",hover:""}},showIcon:{type:"boolean",default:!0},iconSource:{type:"string",default:"icons_library"},icon:{type:"string",default:"fa-solid fa-angle-right"},svgIcon:{type:"object",default:{id:"",url:"",alt:""}},iconPosition:{type:"string",default:"right"},nx_iconColors:{type:"object",default:{normal:"",hover:""}},nx_boxIconColors:{type:"object",default:{normal:"",hover:""}},useAsGlobalLink:{type:"boolean",default:!1},...W({controlName:b}),...J({controlName:m}),...J({controlName:x}),...V({controlName:d}),...V({controlName:u}),...K({controlName:p}),...K({controlName:v}),...X({controlName:s}),...Q({controlName:_}),...Q({controlName:g}),...W({controlName:k}),...J({controlName:y}),...J({controlName:h}),...J({controlName:N}),...V({controlName:S}),...V({controlName:w}),...Q({controlName:E}),...Y({controlName:C}),...J({controlName:f}),...Y({controlName:I}),...J({controlName:$}),...W({controlName:A}),...J({controlName:T}),...V({controlName:M}),...V({controlName:R}),...J({controlName:j}),...J({controlName:P}),...K({controlName:F}),...K({controlName:L}),...Q({controlName:O}),...Q({controlName:D}),...W({controlName:H}),...J({controlName:G}),...J({controlName:q}),...V({controlName:z}),...V({controlName:U}),...Y({controlName:B})},ee=JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","apiVersion":2,"name":"nexa/icon-box","version":"1.0.0","title":"Icon Box","category":"nexa-blocks","description":"Showcase services or features with an icon box.","supports":{"html":false,"align":["wide","full"],"className":false,"customClassName":false},"example":{},"textdomain":"nexa-blocks","editorScript":"file:./index.js","editorStyle":"file:./index.css","style":"file:./style-index.css"}'),oe=window.React,te=window.wp.blockEditor,ne=window.wp.element;var le=t(942),ae=t.n(le);const re=window.wp.data,ce=(e,o=[])=>{let t="";return o.forEach((e=>{""!==e?.v&&null!=e?.v&&!1!==e?.v&&"-null"!==e?.v&&(t+=e?.p?`${e.p}:${e.v};`:`${e.v}`)})),t?`${e}{${t}}`:""},ie=e=>"object"!=typeof e?"":[...new Set(e)].join(" "),se=window.wp.components,be=window.wp.hooks,{HeaderTabs:me,ColorControl:xe,LinkControl:de,SwitcherControl:ue,BackgroundControl:pe,BorderControl:ve,ResBoxControl:_e,BoxShadowControl:ge,ButtonsGroupControl:ke,ResRangeControl:ye,IconPickerControl:he,AlignmentControl:Ne,TypographyControl:Se,Preview:we,UploadBtn:Ee,AdvancedSettings:Ce}=window.nexaModules,{HEADING_TAGS:fe}=window.nexaModules.GlobalConstants,Ie=e=>{const{attributes:o,setAttributes:t}=e,{preset:n,nx_boxIconColors:V,showMediaIcon:W,mediaIconSource:J,mediaIcon:K,mediaSvgIcon:Q,mediaIconPosition:X,showTitle:Y,title:ee,titleTag:ne,nx_titleColors:le,showDesc:ae,desc:re,nx_descColors:ce,showBtn:ie,btnLabel:Ie,btnLink:$e,nx_btnColors:Be,showIcon:Ae,icon:Te,iconPosition:je,nx_iconColors:Pe,iconSource:Me,svgIcon:Re,useAsGlobalLink:Fe}=o,Le={attributes:o,setAttributes:t,objAttributes:Z};return(0,oe.createElement)(te.InspectorControls,null,(0,oe.createElement)(me,{generalControls:(0,oe.createElement)(oe.Fragment,null,(0,oe.createElement)(se.PanelBody,{title:(0,l.__)("General","nexa-blocks"),initialOpen:!0},(0,oe.createElement)(se.SelectControl,{label:(0,l.__)("Presets","nexa-blocks"),value:n,options:(0,be.applyFilters)("nx.iconBox.presets",a),onChange:e=>{t({preset:e})}}),(0,oe.createElement)(se.ToggleControl,{label:(0,l.__)("Show Box Icon","nexa-blocks"),checked:W,onChange:()=>t({showMediaIcon:!W})}),(0,oe.createElement)(se.ToggleControl,{label:(0,l.__)("Show Title","nexa-blocks"),checked:Y,onChange:()=>t({showTitle:!Y})}),(0,oe.createElement)(se.ToggleControl,{label:(0,l.__)("Show Description","nexa-blocks"),checked:ae,onChange:()=>t({showDesc:!ae})}),(0,oe.createElement)(se.ToggleControl,{label:(0,l.__)("Show Call to Action","nexa-blocks"),checked:ie,onChange:()=>t({showBtn:!ie})}),(0,oe.createElement)(se.ToggleControl,{label:(0,l.__)("Use Link as Global","nexa-blocks"),checked:Fe,onChange:()=>t({useAsGlobalLink:!Fe}),help:(0,l.__)("The whole box will be wrapped with the link","nexa-blocks")}),(0,oe.createElement)(Ne,{label:(0,l.__)("Content Alignment","nexa-blocks"),controlName:s,objAttrs:Le})),W&&(0,oe.createElement)(se.PanelBody,{title:(0,l.__)("Box Icon","nexa-blocks"),initialOpen:!1},(0,oe.createElement)(oe.Fragment,null,(0,oe.createElement)(ke,{label:(0,l.__)("Icon Source","nexa-blocks"),value:J,onChange:e=>{t({mediaIconSource:e})},options:c}),"icons_library"===J&&(0,oe.createElement)(he,{label:(0,l.__)("Select Icon","nexa-blocks"),value:K,onChange:e=>{t({mediaIcon:e})}}),"upload_svg"===J&&(0,oe.createElement)(oe.Fragment,null,Q?.url?(0,oe.createElement)(we,{svgFormat:!0,url:Q.url,id:Q.id,alt:Q.alt,onSelect:e=>{t({mediaSvgIcon:{id:e.id,url:e.url,alt:e.alt}})},onDelete:()=>{t({mediaSvgIcon:{id:null,url:null,alt:null}})}}):(0,oe.createElement)(Ee,{title:(0,l.__)("Upload","nexa-blocks"),onSelect:e=>{t({mediaSvgIcon:{id:e.id,url:e.url,alt:e.alt}})}})),(0,oe.createElement)(ke,{label:(0,l.__)("Position","nexa-blocks"),value:X,onChange:e=>{t({mediaIconPosition:e})},options:i}),(0,oe.createElement)(ye,{label:(0,l.__)("Gap","nexa-blocks"),controlName:E,objAttrs:Le,min:10,max:200}))),Y&&(0,oe.createElement)(se.PanelBody,{title:(0,l.__)("Title","nexa-blocks"),initialOpen:!1},(0,oe.createElement)(se.TextControl,{label:(0,l.__)("Title","nexa-blocks"),value:ee,onChange:e=>t({title:e}),placeholder:(0,l.__)("title..","nexa-blocks")}),(0,oe.createElement)(se.SelectControl,{label:(0,l.__)("Select Title Tag","nexa-blocks"),value:ne,options:fe,onChange:e=>{t({titleTag:e})}})),ae&&(0,oe.createElement)(se.PanelBody,{title:(0,l.__)("Description","nexa-blocks"),initialOpen:!1},(0,oe.createElement)(se.TextareaControl,{label:(0,l.__)("Description","nexa-blocks"),help:(0,l.__)("Enter description here","nexa-blocks"),value:re,onChange:e=>t({desc:e}),placeholder:(0,l.__)("description..","nexa-blocks"),rows:8})),!ie&&Fe&&(0,oe.createElement)(se.PanelBody,{title:(0,l.__)("Box Link","nexa-blocks"),initialOpen:!1},(0,oe.createElement)(de,{label:(0,l.__)("Link","nexa-blocks"),value:$e,onChange:e=>{t({btnLink:e})},addNoFollow:!0,addSponsored:!0})),ie&&(0,oe.createElement)(se.PanelBody,{title:(0,l.__)("Button","nexa-blocks"),initialOpen:!1},(0,oe.createElement)(se.TextControl,{label:(0,l.__)("Label","nexa-blocks"),value:Ie,onChange:e=>t({btnLabel:e}),placeholder:(0,l.__)("button label..","nexa-blocks")}),(0,oe.createElement)(de,{label:(0,l.__)("Link","nexa-blocks"),value:$e,onChange:e=>{t({btnLink:e})},addNoFollow:!0,addSponsored:!0}),(0,oe.createElement)(se.ToggleControl,{label:(0,l.__)("Show Button Icon","nexa-blocks"),checked:Ae,onChange:()=>t({showIcon:!Ae})}),Ae&&(0,oe.createElement)(oe.Fragment,null,(0,oe.createElement)(ke,{label:(0,l.__)("Icon Source","nexa-blocks"),value:Me,onChange:e=>{t({iconSource:e})},options:r}),"icons_library"===Me&&(0,oe.createElement)(he,{label:(0,l.__)("Select Icon","nexa-blocks"),value:Te,onChange:e=>{t({icon:e})}}),"upload_svg"===Me&&(0,oe.createElement)(oe.Fragment,null,Re?.url?(0,oe.createElement)(we,{svgFormat:!0,url:Re.url,id:Re.id,alt:Re.alt,onSelect:e=>{t({svgIcon:{id:e.id,url:e.url,alt:e.alt}})},onClick:()=>{t({svgIcon:{id:null,url:null,alt:null}})}}):(0,oe.createElement)(Ee,{title:(0,l.__)("Upload SVG","nexa-blocks"),onSelect:e=>{t({svgIcon:{id:e.id,url:e.url,alt:e.alt}})}})),(0,oe.createElement)(ke,{label:(0,l.__)("Icon Position","nexa-blocks"),value:je,onChange:e=>{t({iconPosition:e})},options:[{label:(0,l.__)("Left","nexa-blocks"),value:"left"},{label:(0,l.__)("Right","nexa-blocks"),value:"right"}]})))),styleControls:(0,oe.createElement)(oe.Fragment,null,(0,oe.createElement)(se.PanelBody,{title:(0,l.__)("Item","nexa-blocks"),initialOpen:!0},(0,oe.createElement)(ve,{controlName:b,objAttrs:Le}),(0,oe.createElement)(_e,{label:(0,l.__)("Border Radius","nexa-blocks"),controlName:m,objAttrs:Le,units:["px","em","rem","%"]}),(0,oe.createElement)(_e,{label:(0,l.__)("Padding","nexa-blocks"),controlName:x,objAttrs:Le}),(0,oe.createElement)(ue,{normal:(0,oe.createElement)(oe.Fragment,null,(0,oe.createElement)(ge,{label:(0,l.__)("Box Shadow","nexa-blocks"),controlName:p,objAttrs:Le}),(0,oe.createElement)(pe,{label:(0,l.__)("Background","nexa-blocks"),controlName:d,objAttrs:Le})),hover:(0,oe.createElement)(oe.Fragment,null,(0,oe.createElement)(ge,{label:(0,l.__)("Hover Box Shadow","nexa-blocks"),controlName:v,objAttrs:Le}),(0,oe.createElement)(pe,{label:(0,l.__)("Hover Background","nexa-blocks"),controlName:u,objAttrs:Le}))})),W&&(0,oe.createElement)(se.PanelBody,{title:(0,l.__)("Box Icon","nexa-blocks"),initialOpen:!1},(0,oe.createElement)(ye,{label:(0,l.__)("Container Size","nexa-blocks"),controlName:_,objAttrs:Le,min:10,max:100}),"icons_library"===J&&(0,oe.createElement)(ye,{label:(0,l.__)("Icon Size","nexa-blocks"),controlName:g,objAttrs:Le,min:10,max:100}),(0,oe.createElement)(ve,{controlName:k,objAttrs:Le}),(0,oe.createElement)(_e,{label:(0,l.__)("Border Radius","nexa-blocks"),controlName:y,objAttrs:Le,units:["px","em","rem","%"]}),(0,oe.createElement)(_e,{label:(0,l.__)("Padding","nexa-blocks"),controlName:h,objAttrs:Le}),(0,oe.createElement)(_e,{label:(0,l.__)("Margin","nexa-blocks"),controlName:N,objAttrs:Le}),(0,oe.createElement)(ue,{normal:(0,oe.createElement)(oe.Fragment,null,"icons_library"===J&&(0,oe.createElement)(xe,{label:(0,l.__)("Icon Color","nexa-blocks"),color:V?.normal,onChange:e=>t({nx_boxIconColors:{...V,normal:e}})}),(0,oe.createElement)(pe,{label:(0,l.__)("Background","nexa-blocks"),controlName:S,objAttrs:Le})),hover:(0,oe.createElement)(oe.Fragment,null,"icons_library"===J&&(0,oe.createElement)(xe,{label:(0,l.__)("Icon Hover Color","nexa-blocks"),color:V?.hover,onChange:e=>t({nx_boxIconColors:{...V,hover:e}})}),(0,oe.createElement)(pe,{label:(0,l.__)("Hover Background","nexa-blocks"),controlName:w,objAttrs:Le}))})),Y&&(0,oe.createElement)(se.PanelBody,{title:(0,l.__)("Title","nexa-blocks"),initialOpen:!1},(0,oe.createElement)(Se,{label:(0,l.__)("Typography","nexa-blocks"),controlName:C,objAttrs:Le}),(0,oe.createElement)(_e,{label:(0,l.__)("Margin","nexa-blocks"),controlName:f,objAttrs:Le}),(0,oe.createElement)(ue,{normal:(0,oe.createElement)(xe,{label:(0,l.__)("Color","nexa-blocks"),color:le?.normal,onChange:e=>t({nx_titleColors:{...le,normal:e}})}),hover:(0,oe.createElement)(xe,{label:(0,l.__)("Hover Color","nexa-blocks"),color:le?.hover,onChange:e=>t({nx_titleColors:{...le,hover:e}})})})),ae&&(0,oe.createElement)(se.PanelBody,{title:(0,l.__)("Description","nexa-blocks"),initialOpen:!1},(0,oe.createElement)(Se,{label:(0,l.__)("Typography","nexa-blocks"),controlName:I,objAttrs:Le}),(0,oe.createElement)(_e,{label:(0,l.__)("Margin","nexa-blocks"),controlName:$,objAttrs:Le}),(0,oe.createElement)(ue,{normal:(0,oe.createElement)(xe,{label:(0,l.__)("Color","nexa-blocks"),color:ce?.normal,onChange:e=>t({nx_descColors:{...ce,normal:e}})}),hover:(0,oe.createElement)(xe,{label:(0,l.__)("Hover Color","nexa-blocks"),color:ce?.hover,onChange:e=>t({nx_descColors:{...ce,hover:e}})})})),ie&&(0,oe.createElement)(se.PanelBody,{title:(0,l.__)("Button","nexa-blocks"),initialOpen:!1},(0,oe.createElement)(Se,{label:(0,l.__)("Typography","nexa-blocks"),controlName:B,objAttrs:Le}),(0,oe.createElement)(ve,{controlName:A,objAttrs:Le}),(0,oe.createElement)(_e,{label:(0,l.__)("Border Radius","nexa-blocks"),controlName:T,objAttrs:Le}),(0,oe.createElement)(_e,{label:(0,l.__)("Padding","nexa-blocks"),controlName:j,objAttrs:Le}),(0,oe.createElement)(_e,{label:(0,l.__)("Margin","nexa-blocks"),controlName:P,objAttrs:Le}),(0,oe.createElement)(ue,{normal:(0,oe.createElement)(oe.Fragment,null,(0,oe.createElement)(xe,{label:(0,l.__)("Color","nexa-blocks"),color:Be?.normal,onChange:e=>t({nx_btnColors:{...Be,normal:e}})}),(0,oe.createElement)(ge,{label:(0,l.__)("Box Shadow","nexa-blocks"),controlName:F,objAttrs:Le}),(0,oe.createElement)(pe,{label:(0,l.__)("Background","nexa-blocks"),controlName:M,objAttrs:Le})),hover:(0,oe.createElement)(oe.Fragment,null,(0,oe.createElement)(xe,{label:(0,l.__)("Hover Color","nexa-blocks"),color:Be?.hover,onChange:e=>t({nx_btnColors:{...Be,hover:e}})}),(0,oe.createElement)(ge,{label:(0,l.__)("Hover Box Shadow","nexa-blocks"),controlName:L,objAttrs:Le}),(0,oe.createElement)(pe,{label:(0,l.__)("Background","nexa-blocks"),controlName:R,objAttrs:Le}))})),Ae&&(0,oe.createElement)(se.PanelBody,{title:(0,l.__)("Button Icon","nexa-blocks"),initialOpen:!1},(0,oe.createElement)(ye,{label:(0,l.__)("Gap","nexa-blocks"),controlName:O,objAttrs:Le,min:0,max:100}),(0,oe.createElement)(ye,{label:(0,l.__)("Size","nexa-blocks"),controlName:D,objAttrs:Le,min:10,max:100}),"icons_library"===Me&&(0,oe.createElement)(oe.Fragment,null,(0,oe.createElement)(ve,{controlName:H,objAttrs:Le}),(0,oe.createElement)(_e,{label:(0,l.__)("Border Radius","nexa-blocks"),controlName:G,objAttrs:Le,units:["px","em","rem","%"]}),(0,oe.createElement)(_e,{label:(0,l.__)("Padding","nexa-blocks"),controlName:q,objAttrs:Le}),(0,oe.createElement)(ue,{normal:(0,oe.createElement)(oe.Fragment,null,(0,oe.createElement)(xe,{label:(0,l.__)("Icon Color","nexa-blocks"),color:Pe?.normal,onChange:e=>t({nx_iconColors:{...Pe,normal:e}})}),(0,oe.createElement)(pe,{label:(0,l.__)("Background","nexa-blocks"),controlName:z,objAttrs:Le})),hover:(0,oe.createElement)(oe.Fragment,null,(0,oe.createElement)(xe,{label:(0,l.__)("Hover Color","nexa-blocks"),color:Pe?.hover,onChange:e=>t({nx_iconColors:{...Pe,hover:e}})}),(0,oe.createElement)(pe,{label:(0,l.__)("Hover Background","nexa-blocks"),controlName:U,objAttrs:Le}))})))),advancedControls:(0,oe.createElement)(oe.Fragment,null,(0,oe.createElement)(Ce,{attributes:o,setAttributes:t,objAttrs:Le}))}))},{generateBorderStyles:$e,generateResBoxStyles:Be,generateBoxShadowStyles:Ae,generateBgStyles:Te,generateRangeStyles:je,generateAlignmentStyles:Pe,generateTypographyStyles:Me,GlobalStyleHandler:Re}=window.nexaModules,Fe=e=>{const{attributes:o,setAttributes:t}=e,{uniqueId:n,nx_btnColors:l,nx_iconColors:a,nx_boxIconColors:r,nx_titleColors:c,nx_descColors:i}=o,{deskAlign:V,tabAlign:W,mobAlign:J}=Pe({controlName:s,attributes:o,propertyName:"text-align"}),{desktopStyles:K,tabletStyles:Q,mobileStyles:X,hoverColor:Y}=$e({controlName:b,attributes:o}),{boxDeskStyles:Z,boxTabStyles:ee,boxMobStyles:te}=Be({controlName:m,attributes:o,propertyName:"border-radius",forRadius:!0}),{boxDeskStyles:ne,boxTabStyles:le,boxMobStyles:ae}=Be({controlName:x,attributes:o,propertyName:"padding",forRadius:!1}),{bgStyle:re}=Te({controlName:d,attributes:o}),{bgStyle:ie}=Te({controlName:u,attributes:o}),{boxShadowStyles:se}=Ae({controlName:p,attributes:o}),{boxShadowStyles:be}=Ae({controlName:v,attributes:o}),{deskStyle:me,tabStyle:xe,mobStyle:de}=je({controlName:g,attributes:o,propertyName:"font-size"}),{deskStyle:ue,tabStyle:pe,mobStyle:ve}=je({controlName:_,attributes:o,propertyName:"width"}),{deskStyle:_e,tabStyle:ge,mobStyle:ke}=je({controlName:_,attributes:o,propertyName:"height"}),{desktopStyles:ye,tabletStyles:he,mobileStyles:Ne,hoverColor:Se}=$e({controlName:k,attributes:o}),{boxDeskStyles:we,boxTabStyles:Ee,boxMobStyles:Ce}=Be({controlName:y,attributes:o,propertyName:"border-radius",forRadius:!0}),{boxDeskStyles:fe,boxTabStyles:Ie,boxMobStyles:Fe}=Be({controlName:h,attributes:o,propertyName:"padding",forRadius:!1}),{boxDeskStyles:Le,boxTabStyles:Oe,boxMobStyles:De}=Be({controlName:N,attributes:o,propertyName:"margin",forRadius:!1}),{bgStyle:He}=Te({controlName:S,attributes:o}),{bgStyle:Ge}=Te({controlName:w,attributes:o}),{deskStyle:qe,tabStyle:ze,mobStyle:Ue}=je({controlName:E,attributes:o,propertyName:"gap"}),{boxDeskStyles:Ve,boxTabStyles:We,boxMobStyles:Je}=Be({controlName:f,attributes:o,propertyName:"margin",forRadius:!1}),{desktopStyles:Ke,tabletStyles:Qe,mobileStyles:Xe}=Me({controlName:C,attributes:o}),{boxDeskStyles:Ye,boxTabStyles:Ze,boxMobStyles:eo}=Be({controlName:$,attributes:o,propertyName:"margin",forRadius:!1}),{desktopStyles:oo,tabletStyles:to,mobileStyles:no}=Me({controlName:I,attributes:o}),{desktopStyles:lo,tabletStyles:ao,mobileStyles:ro}=Me({controlName:B,attributes:o}),{desktopStyles:co,tabletStyles:io,mobileStyles:so,hoverColor:bo}=$e({controlName:A,attributes:o}),{boxDeskStyles:mo,boxTabStyles:xo,boxMobStyles:uo}=Be({controlName:T,attributes:o,propertyName:"border-radius",forRadius:!0}),{boxShadowStyles:po}=Ae({controlName:F,attributes:o}),{boxShadowStyles:vo}=Ae({controlName:L,attributes:o}),{bgStyle:_o}=Te({controlName:M,attributes:o}),{bgStyle:go}=Te({controlName:R,attributes:o}),{boxDeskStyles:ko,boxTabStyles:yo,boxMobStyles:ho}=Be({controlName:j,attributes:o,propertyName:"padding",forRadius:!1}),{boxDeskStyles:No,boxTabStyles:So,boxMobStyles:wo}=Be({controlName:P,attributes:o,propertyName:"margin",forRadius:!1}),{deskStyle:Eo,tabStyle:Co,mobStyle:fo}=je({controlName:O,attributes:o,propertyName:"gap"}),{deskStyle:Io,tabStyle:$o,mobStyle:Bo}=je({controlName:D,attributes:o,propertyName:"font-size"}),{deskStyle:Ao,tabStyle:To,mobStyle:jo}=je({controlName:D,attributes:o,propertyName:"width"}),{deskStyle:Po,tabStyle:Mo,mobStyle:Ro}=je({controlName:D,attributes:o,propertyName:"height"}),{desktopStyles:Fo,tabletStyles:Lo,mobileStyles:Oo,hoverColor:Do}=$e({controlName:H,attributes:o}),{boxDeskStyles:Ho,boxTabStyles:Go,boxMobStyles:qo}=Be({controlName:G,attributes:o,propertyName:"border-radius",forRadius:!0}),{boxDeskStyles:zo,boxTabStyles:Uo,boxMobStyles:Vo}=Be({controlName:q,attributes:o,propertyName:"padding",forRadius:!1}),{bgStyle:Wo}=Te({controlName:z,attributes:o}),{bgStyle:Jo}=Te({controlName:U,attributes:o}),Ko=`\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-icon-box`,[{v:V},{v:K},{v:Z},{v:ne},{v:re},{v:se}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-icon-box.ml_position, .${n}.wp-block-nexa-icon-box .nexa-icon-box.mr_position`,[{v:qe}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-icon-box:hover`,[{v:Y},{v:ie},{v:be}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-icon-box .nexa-icon i`,[{v:me},{p:"color",v:r?.normal}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-icon-box:hover .nexa-icon i`,[{p:"color",v:r?.hover}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-icon-box .nexa-icon`,[{v:ue},{v:_e},{v:ye},{v:we},{v:fe},{v:Le},{v:He}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-icon-box:hover .nexa-icon`,[{v:Ge},{v:Se}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-icon-box .nexa-title`,[{v:Ve},{v:Ke},{p:"color",v:c?.normal}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-icon-box:hover .nexa-title`,[{p:"color",v:c?.hover}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-icon-box .nexa-text`,[{v:Ye},{v:oo},{p:"color",v:i?.normal}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-icon-box:hover .nexa-text`,[{p:"color",v:i?.hover}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-more-link`,[{v:co},{p:"color",v:l?.normal},{v:mo},{v:po},{v:_o},{v:ko},{v:No},{v:Eo},{v:lo}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-icon-box.style-1:hover .nexa-more-link`,[{v:bo},{p:"color",v:l?.hover},{v:vo},{v:go}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-icon-box.style-2 .nexa-more-link:hover`,[{v:bo},{p:"color",v:l?.hover},{v:vo},{v:go}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-more-link i`,[{v:Io},{v:Ao},{v:Po},{v:Fo},{v:Ho},{v:zo},{v:Wo},{p:"color",v:a?.normal}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-more-link img`,[{v:Ao},{v:Po}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-icon-box.style-1:hover .nexa-more-link i`,[{v:Jo},{p:"color",v:a?.hover},{v:Do}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-icon-box.style-2 .nexa-more-link:hover i`,[{v:Jo},{p:"color",v:a?.hover},{v:Do}])}\n    `,Qo=`\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-icon-box`,[{v:W},{v:Q},{v:ee},{v:le}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-icon-box.ml_position, .${n}.wp-block-nexa-icon-box .nexa-icon-box.mr_position`,[{v:ze}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-icon-box .nexa-icon`,[{v:pe},{v:ge},{v:he},{v:Ee},{v:Ie},{v:Oe}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-icon-box .nexa-icon i`,[{v:xe}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-icon-box .nexa-title`,[{v:We},{v:Qe}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-icon-box .nexa-text`,[{v:Ze},{v:to}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-more-link`,[{v:io},{v:xo},{v:yo},{v:So},{v:Co}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-more-link i`,[{v:$o},{v:Lo},{v:Go},{v:Uo}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-more-link img`,[{v:To},{v:Mo}])}\n    `,Xo=`\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-icon-box`,[{v:J},{v:X},{v:te},{v:ae}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-icon-box.ml_position, .${n}.wp-block-nexa-icon-box .nexa-icon-box.mr_position`,[{v:Ue}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-icon-box .nexa-icon`,[{v:ve},{v:ke},{v:Ne},{v:Ce},{v:Fe},{v:De}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-icon-box .nexa-icon i`,[{v:de}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-icon-box .nexa-title`,[{v:Je},{v:Xe}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-icon-box .nexa-text`,[{v:eo},{v:no}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-more-link`,[{v:so},{v:uo},{v:ho},{v:wo},{v:fo}])}\n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-more-link i`,[{v:Bo},{v:Oo},{v:qo},{v:Vo}])} \n        ${ce(`.${n}.wp-block-nexa-icon-box .nexa-more-link img`,[{v:jo},{v:Ro}])}\n    `;return(0,oe.createElement)(Re,{attributes:o,setAttributes:t,deskStyles:Ko,tabStyles:Qo,mobStyles:Xo})},{DynamicTag:Le}=window.nexaModules,{DynamicTag:Oe}=window.nexaModules,{BlockIcons:De}=window?.nexaModules;(0,n.registerBlockType)(ee,{icon:{src:De?.default["icon-box"]},attributes:Z,edit:e=>{const{attributes:o,setAttributes:t,clientId:n,isSelected:a}=e,{uniqueId:r,nexaId:c,preset:i,parentClassess:s,showMediaIcon:b,mediaIconSource:m,mediaIcon:x,mediaSvgIcon:d,mediaIconPosition:u,showTitle:p,title:v,titleTag:_,showDesc:g,desc:k,showBtn:y,btnLabel:h,btnLink:N,btnWidthType:S,showIcon:w,icon:E,iconPosition:C,iconSource:f,svgIcon:I,useAsGlobalLink:$}=o;(0,ne.useEffect)((()=>{(({uniqueId:e,setAttributes:o,clientId:t})=>{const n="nexa-blocks-"+Math.random().toString(36).substr(2,8);if(!e)return void o({uniqueId:n});const l=(0,re.select)("core/block-editor").getBlocks();let a=!1;const r=l=>{if(!a)for(const c of l){const{innerBlocks:l}=c;if(c.attributes.uniqueId===e){if(c.clientId!==t)return o({uniqueId:n}),void(a=!0);l.length>0&&r(l)}else l.length>0&&r(l)}};r(l)})({uniqueId:r,setAttributes:t,clientId:n})}),[]);const B=(0,te.useBlockProps)({className:ae()(r,i,ie(s))});let A="";return N?.openInNewTab&&(A+="noopener noreferrer "),N?.addNoFollow&&(A+="nofollow "),N?.addSponsored&&(A+="sponsored"),(0,oe.createElement)(ne.Fragment,null,a&&(0,oe.createElement)(Ie,{...e}),(0,oe.createElement)(Fe,{...e}),(0,oe.createElement)("div",{...B,...c&&{id:c}},(0,oe.createElement)(Le,{tagName:$?"a":"div",className:ae()("nexa-icon-box",i,u),...$&&{href:"#"}},b&&(0,oe.createElement)("div",{className:"nexa-icon"},"upload_svg"===m&&d?.url&&(0,oe.createElement)("img",{src:d.url,alt:d.alt}),"icons_library"===m&&(0,oe.createElement)("i",{className:x})),(0,oe.createElement)("div",{className:"nexa-item-body"},p&&(0,oe.createElement)(te.RichText,{tagName:_,className:"nexa-title",value:v,onChange:e=>t({title:e}),placeholder:(0,l.__)("title..","nexa-blocks")}),g&&(0,oe.createElement)(te.RichText,{tagName:"p",className:"nexa-text",value:k,onChange:e=>t({desc:e}),placeholder:(0,l.__)("description..","nexa-blocks")}),y&&(0,oe.createElement)(Le,{tagName:$?"div":"a",...!$&&{href:"#"},className:`nexa-more-link ${S} ${C}`},(0,oe.createElement)(te.RichText,{tagName:"span",value:h,onChange:e=>t({btnLabel:e}),placeholder:(0,l.__)("Read More","nexa-blocks")}),w&&(0,oe.createElement)("span",{className:"btn-icon"},"upload_svg"===f&&I?.url&&(0,oe.createElement)("img",{src:I.url,alt:I.alt}),"icons_library"===f&&(0,oe.createElement)("i",{className:E})))))))},save:e=>{const{attributes:o}=e,{uniqueId:t,nexaId:n,preset:l,parentClassess:a,showMediaIcon:r,mediaIconSource:c,mediaIcon:i,mediaSvgIcon:s,mediaIconPosition:b,showTitle:m,title:x,titleTag:d,showDesc:u,desc:p,showBtn:v,btnLabel:_,btnLink:g,btnWidthType:k,showIcon:y,icon:h,iconPosition:N,iconSource:S,svgIcon:w,useAsGlobalLink:E}=o,C=te.useBlockProps.save({className:ae()("wp-block-nexa-icon-box",t,ie(a))});let f="";return g?.openInNewTab&&(f+="noopener noreferrer"),g?.addNoFollow&&(f+=" nofollow"),g?.addSponsored&&(f+=" sponsored"),(0,oe.createElement)("div",{...C,...n&&{id:n}},(0,oe.createElement)(Oe,{tagName:E?"a":"div",...E&&{href:g?.url},...E&&f&&{rel:f},...E&&g?.openInNewTab&&{target:"_blank"},className:ae()("nexa-icon-box",l,b)},r&&(0,oe.createElement)("div",{className:"nexa-icon"},"upload_svg"===c&&s?.url&&(0,oe.createElement)("img",{src:s.url,alt:s.alt}),"icons_library"===c&&(0,oe.createElement)("i",{className:i})),(0,oe.createElement)("div",{className:"nexa-item-body"},m&&(0,oe.createElement)(te.RichText.Content,{tagName:d,className:"nexa-title",value:x}),u&&(0,oe.createElement)(te.RichText.Content,{tagName:"p",className:"nexa-text",value:p}),v&&(0,oe.createElement)(Oe,{tagName:E?"div":"a",...!E&&{href:g?.url},className:`nexa-more-link ${k} ${N}`,...!E&&f&&{rel:f},...!E&&g?.openInNewTab&&{target:"_blank"}},_,y&&(0,oe.createElement)("span",{className:"btn-icon"},"upload_svg"===S&&w?.url&&(0,oe.createElement)("img",{src:w.url,alt:w.alt}),"icons_library"===S&&(0,oe.createElement)("i",{className:h}))))))}})},942:(e,o)=>{var t;!function(){"use strict";var n={}.hasOwnProperty;function l(){for(var e="",o=0;o<arguments.length;o++){var t=arguments[o];t&&(e=r(e,a(t)))}return e}function a(e){if("string"==typeof e||"number"==typeof e)return e;if("object"!=typeof e)return"";if(Array.isArray(e))return l.apply(null,e);if(e.toString!==Object.prototype.toString&&!e.toString.toString().includes("[native code]"))return e.toString();var o="";for(var t in e)n.call(e,t)&&e[t]&&(o=r(o,t));return o}function r(e,o){return o?e?e+" "+o:e+o:e}e.exports?(l.default=l,e.exports=l):void 0===(t=function(){return l}.apply(o,[]))||(e.exports=t)}()}},t={};function n(e){var l=t[e];if(void 0!==l)return l.exports;var a=t[e]={exports:{}};return o[e](a,a.exports,n),a.exports}n.m=o,e=[],n.O=(o,t,l,a)=>{if(!t){var r=1/0;for(b=0;b<e.length;b++){for(var[t,l,a]=e[b],c=!0,i=0;i<t.length;i++)(!1&a||r>=a)&&Object.keys(n.O).every((e=>n.O[e](t[i])))?t.splice(i--,1):(c=!1,a<r&&(r=a));if(c){e.splice(b--,1);var s=l();void 0!==s&&(o=s)}}return o}a=a||0;for(var b=e.length;b>0&&e[b-1][2]>a;b--)e[b]=e[b-1];e[b]=[t,l,a]},n.n=e=>{var o=e&&e.__esModule?()=>e.default:()=>e;return n.d(o,{a:o}),o},n.d=(e,o)=>{for(var t in o)n.o(o,t)&&!n.o(e,t)&&Object.defineProperty(e,t,{enumerable:!0,get:o[t]})},n.o=(e,o)=>Object.prototype.hasOwnProperty.call(e,o),(()=>{var e={482:0,798:0};n.O.j=o=>0===e[o];var o=(o,t)=>{var l,a,[r,c,i]=t,s=0;if(r.some((o=>0!==e[o]))){for(l in c)n.o(c,l)&&(n.m[l]=c[l]);if(i)var b=i(n)}for(o&&o(t);s<r.length;s++)a=r[s],n.o(e,a)&&e[a]&&e[a][0](),e[a]=0;return n.O(b)},t=globalThis.webpackChunknexa_blocks=globalThis.webpackChunknexa_blocks||[];t.forEach(o.bind(null,0)),t.push=o.bind(null,t.push.bind(t))})();var l=n.O(void 0,[798],(()=>n(47)));l=n.O(l)})();