$(document).ready(function(){function a(){var b=e.progressbar("value")||0;e.progressbar("value",b+2),b<99&&setTimeout(a,80)}$(".jui-slider-default").slider(),$(".jui-slider-custom-start").slider({value:60}),$(".jui-slider-increment-steps").slider({value:20,min:0,max:100,step:5}),$(".jui-slider-animation").slider({value:40,min:0,max:100,animate:"fast"}),$(".jui-slider-min").slider({range:"min",value:15,min:1,max:150}),$(".jui-slider-max").slider({range:"max",min:1,max:100,value:10}),$(".jui-slider-range").slider({range:!0,min:0,max:500,values:[75,300]}),$(".jui-slider-disabled").slider({value:20,disabled:!0}),$(".jui-slider-all-labels").slider({max:12}).slider("pips",{rest:"label"}),$(".jui-slider-hide-labels-pips").slider({max:20,range:!0,values:[5,15]}).slider("pips",{rest:!1}),$(".jui-slider-only-pips").slider({max:30}).slider("pips",{first:"pip",last:"pip"}),$(".jui-slider-prefix-suffix").slider({min:0,max:90,value:50,step:10}).slider("pips",{rest:"label",prefix:"$",suffix:".00Â¢"});var b=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],c=(new Date).getMonth();$(".jui-slider-months").slider({min:0,max:b.length-1,value:c}).slider("pips",{rest:"label",labels:b});var d=["ä¸€","äºŒ","ä¸‰","å››","äº”","å…­","ä¸ƒ","å…«","ä¹","å"];$(".jui-slider-more-custom-labels").slider({min:0,max:d.length-1,value:3}).slider("pips",{rest:"label",labels:d}).slider("float",{labels:d}),$(".jui-slider-pip-steps").slider({min:0,max:100,step:20}).slider("pips",{rest:"label"}),$(".jui-slider-multiplicative-steps").slider({min:0,max:100,step:10}).slider("pips",{rest:"label",step:2}).slider("float"),$(".jui-vert-slider-default > span").each(function(){var a=parseInt($(this).text(),10);$(this).empty(),$(this).slider({value:a,animate:"fast",orientation:"vertical"})}),$(".jui-vert-min-range-slider > span").each(function(){var a=parseInt($(this).text(),10);$(this).empty(),$(this).slider({value:a,range:"min",animate:!0,orientation:"vertical"}).slider("float")}),$(".jui-vert-max-range-slider > span").each(function(){var a=parseInt($(this).text(),10);$(this).empty(),$(this).slider({value:a,range:"max",animate:!0,orientation:"vertical"}).slider("float")}),$(".jui-vert-slider-pips > span").each(function(){var a=parseInt($(this).text(),10);$(this).empty(),$(this).slider({min:0,max:25,value:a,animate:"fast",range:"min",orientation:"vertical"})}),$(".jui-vert-slider-pips > span").slider("pips",{first:"pip",last:"pip"}),$(".jui-vert-slider-pips > span").slider("float"),$(".jui-vert-slider-pips-lables > span").each(function(){var a=parseInt($(this).text(),10);$(this).empty(),$(this).slider({min:0,max:8,value:a,animate:"fast",range:"min",orientation:"vertical"})}),$(".jui-vert-slider-pips-lables > span").slider("pips",{rest:"label"}),$(".jui-vert-slider-pips-lables > span").slider("float"),$(".jui-vert-hide-label-pip > span").each(function(){var a=parseInt($(this).text(),10);$(this).empty(),$(this).slider({min:0,max:10,value:a,animate:"fast",range:"min",orientation:"vertical"})}),$(".jui-vert-hide-label-pip > span").slider("pips",{rest:!1}),$(".jui-vert-hide-label-pip > span").slider("float"),$(".jui-vert-slider-size-default > span").each(function(){var a=parseInt($(this).text(),10);$(this).empty(),$(this).slider({value:a,range:"min",animate:!0,orientation:"vertical"}).slider("float")}),$(".jui-vert-slider-size-pips > span").each(function(){var a=parseInt($(this).text(),10);$(this).empty(),$(this).slider({min:0,max:10,value:a,range:"min",animate:!0,orientation:"vertical"}).slider("pips").slider("float")}),$(".ui-slider-vertical-range-max > span").each(function(){var a=parseInt($(this).text(),10);$(this).empty().slider({value:a,range:"max",animate:!0,orientation:"vertical"})}),$(".ui-slider-vertical-handle-default > span").each(function(){var a=parseInt($(this).text(),10);$(this).empty().slider({value:a,range:"min",animate:!0,orientation:"vertical"})}),$(".jui-default-color-slider, .jui-primary-color-slider, .jui-info-color-slider, .jui-success-color-slider, .jui-warning-color-slider, .jui-danger-color-slider").slider({range:!0,min:0,max:500,values:[100,400]}),$(".jui-slider-sizing-xl, .jui-slider-sizing-lg, .jui-slider-sizing-default, .jui-slider-sizing-sm, .jui-slider-sizing-xs").slider({range:!0,min:0,max:500,values:[100,400]}),$(".jui-slider-sizing-pips-xl, .jui-slider-sizing-pips-lg, .jui-slider-sizing-pips-default, .jui-slider-sizing-pips-sm, .jui-slider-sizing-pips-xs").slider({max:50,min:0,range:!0,values:[10,40]}).slider("pips",{first:"pip",last:"pip"}).slider("float"),$(".pgbar-basic").progressbar({value:67}),$(".pgbar-striped").progressbar({value:34}),$(".pgbar-striped-animated").progressbar({value:86}),$(".pgbar-custom-label").progressbar({value:67});var e=$(".pgbar-custom-label-bar"),f=$(".pgbar-custom-label");e.progressbar({value:!1,change:function(){f.text(e.progressbar("value")+"%")},complete:function(){f.text("Complete!")}}),setTimeout(a,2e3),$(".pgbar-max").progressbar({max:1024,value:840}),$(".pgbar-disabled").progressbar({disabled:!0,value:86}),$(".jui-spinner-default").spinner(),$(".jui-spinner-decimal").spinner({step:.01,numberFormat:"n"}),$(".change-decimal-culture").on("change",function(){var a=$(".jui-spinner-decimal").spinner("value");Globalize.culture($(this).val()),$(".jui-spinner-decimal").spinner("value",a)}),$(".change-currency").on("change",function(){$(".jui-spinner-currency").spinner("option","culture",$(this).val())}),$(".jui-spinner-currency").spinner({min:5,max:2500,step:25,start:1e3,numberFormat:"C"}),$(".jui-spinner-max").spinner({max:50}),$(".jui-spinner-min").spinner({min:5}),$(".jui-spinner-overflow").spinner({spin:function(a,b){return b.value>10?($(this).spinner("value",-10),!1):b.value<-10?($(this).spinner("value",10),!1):void 0}}),$.widget("ui.timespinner",$.ui.spinner,{options:{step:6e4,page:60},_parse:function(a){return"string"==typeof a?Number(a)==a?Number(a):+Globalize.parseDate(a):a},_format:function(a){return Globalize.format(new Date(a),"t")}}),$(".jui-spinner-time").timespinner(),$(".change-time-culture").on("change",function(){var a=$(".jui-spinner-time").timespinner("value");Globalize.culture($(this).val()),$(".jui-spinner-time").timespinner("value",a)}),$(".jui-spinner-set-value").spinner(),$(".spinner-set-value-btn").on("click",function(){$(".jui-spinner-set-value").spinner("value",5)}),$(".jui-spinner-steps").spinner({step:10}),$.widget("ui.customspinner",$.ui.spinner,{_buttonHtml:function(){return"<a tabindex='-1' aria-hidden='true' class='ui-spinner-button ui-spinner-up btn-success' role='button'><span class='ui-button-icon ui-icon'></span><span class='ui-button-icon-space'></span></a><a tabindex='-1' aria-hidden='true' class='ui-spinner-button ui-spinner-up btn-danger' role='button'><span class='ui-button-icon ui-icon'></span><span class='ui-button-icon-space'></span></a>"}}),$(".jui-spinner-color-buttons").customspinner(),$(".jui-spinner-disabled").spinner({disabled:!0})});