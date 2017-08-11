!function(a,b,c){"use strict";function d(a,b,c){a.push(Math.floor(Math.random()*(c-b+1))+b),a.shift(),j.update()}c("#deals-list-scroll, #customer-list-scroll").perfectScrollbar();var e=!1;"RTL"==c("html").data("textdirection")&&(e=!0),c(".knob").knob({rtl:e,draw:function(){var a=this.$,b=a.attr("style");b=b.replace("bold","normal"),b=b.replace("font-size: 30px","font-size: 50px");var d=a.attr("data-knob-icon");if(a.hide(),c('<i class="knob-center-icon '+d+'"></i>').insertAfter(a).attr("style",b),"tron"==this.$.data("skin")){this.cursorExt=.3;var e,f=this.arc(this.cv),g=1;return this.g.lineWidth=this.lineWidth,this.o.displayPrevious&&(e=this.arc(this.v),this.g.beginPath(),this.g.strokeStyle=this.pColor,this.g.arc(this.xy,this.xy,this.radius-this.lineWidth,e.s,e.e,e.d),this.g.stroke()),this.g.beginPath(),this.g.strokeStyle=g?this.o.fgColor:this.fgColor,this.g.arc(this.xy,this.xy,this.radius-this.lineWidth,f.s,f.e,f.d),this.g.stroke(),this.g.lineWidth=2,this.g.beginPath(),this.g.strokeStyle=this.o.fgColor,this.g.arc(this.xy,this.xy,this.radius-this.lineWidth+1+2*this.lineWidth/3,0,2*Math.PI,!1),this.g.stroke(),!1}}});var f=b.getElementById("earning-chart").getContext("2d"),g={responsive:!0,maintainAspectRatio:!1,datasetStrokeWidth:3,pointDotStrokeWidth:4,tooltipFillColor:"rgba(0,0,0,0.8)",legend:{display:!1,position:"bottom"},hover:{mode:"label"},scales:{xAxes:[{display:!1}],yAxes:[{display:!1,ticks:{min:0,max:7e3}}]},title:{display:!1,fontColor:"#FFF",fullWidth:!1,fontSize:40,text:"82%"}},h={labels:["January","February","March","April","May","June","July"],datasets:[{label:"Net Profit($)",data:[2800,3500,3600,4800,4600,4200,5e3],backgroundColor:"rgba(45,149,191,0.1)",borderColor:"transparent",borderWidth:0,strokeColor:"#ff6c23",capBezierPoints:!0,pointColor:"#fff",pointBorderColor:"rgba(45,149,191,1)",pointBackgroundColor:"#FFF",pointBorderWidth:2,pointRadius:4}]},i={type:"line",options:g,data:h},j=new Chart(f,i);setInterval(function(){d(j.data.datasets[0].data,2e3,4500)},3500),require.config({paths:{echarts:"../../../robust-assets/js/plugins/charts/echarts"}}),require(["echarts","echarts/chart/funnel","echarts/chart/gauge","echarts/chart/pie"],function(d){var e=d.init(b.getElementById("monthly-deals-funnel")),f={tooltip:{trigger:"item",formatter:"{a} <br/>{b}: {c}%"},legend:{orient:"horizontal",x:"left",y:0,data:["Opened","Lost","Demo","Contacted","Won","No Show"]},color:["#967ADC","#DA4453","#F6BB42","#3BAFDA","#37BC9B","#55595c"],calculable:!0,series:[{name:"Deals",type:"funnel",funnelAlign:"left",x:"25%",x2:"25%",y:"17.5%",width:"50%",height:"80%",data:[{value:100,name:"Opened"},{value:70,name:"Lost"},{value:60,name:"Demo"},{value:40,name:"Contacted"},{value:20,name:"Won"},{value:10,name:"No Show"}]}]};e.setOption(f),c(function(){function b(){setTimeout(function(){e.resize()},200)}c(a).on("resize",b),c(".menu-toggle").on("click",b)});var e=d.init(b.getElementById("new-customer")),f={title:{text:"New Customer ",subtext:"Monthly new customer report",x:"center",textStyle:{color:"#FFF"},subtextStyle:{color:"#FFF"}},tooltip:{trigger:"item",formatter:"{a} <br/>{b}: +{c}$ ({d}%)"},color:["#ffd775","#ff847c","#e84a5f","#2a363b","#7fd5c3","#61a781","#f0c75e","#df8c7d","#e8ed8a","#55bcbb","#e974b9","#2f9395"],toolbox:{show:!0,orient:"vertical",feature:{magicType:{show:!0,title:{pie:"Switch to pies",funnel:"Switch to funnel"},type:["pie","funnel"]},restore:{show:!0,title:"Restore"}},color:"#FFF"},calculable:!0,series:[{name:"Increase (brutto)",type:"pie",radius:["15%","73%"],center:["50%","57%"],roseType:"area",itemStyle:{normal:{label:{textStyle:{color:"#FFF"}},labelLine:{lineStyle:{color:"#FFF"}}}},width:"40%",height:"78%",x:"30%",y:"17.5%",max:450,sort:"ascending",data:[{value:440,name:"January"},{value:260,name:"February"},{value:350,name:"March"},{value:250,name:"April"},{value:210,name:"May"},{value:350,name:"June"},{value:300,name:"July"},{value:430,name:"August"},{value:400,name:"September"},{value:450,name:"October"},{value:330,name:"November"},{value:200,name:"December"}]}]};e.setOption(f),c(function(){function b(){setTimeout(function(){e.resize()},200)}c(a).on("resize",b),c(".menu-toggle").on("click",b)})}),c("#world-map-markers").vectorMap({map:"world_mill",zoomOnScroll:!1,backgroundColor:"#607D8B",series:{regions:[{values:visitorData,scale:["#78909C","#CFD8DC"],normalizeFunction:"polynomial"}]},onRegionTipShow:function(a,b,c){b.html(b.html()+" (Visitor - "+visitorData[c]+")")}}),Morris.Line({element:"bounce-rate",data:[{y:"1",a:14},{y:"2",a:12},{y:"3",a:4},{y:"4",a:13},{y:"5",a:9},{y:"6",a:14},{y:"7",a:12},{y:"8",a:20}],xkey:"y",ykeys:["a"],labels:["Likes"],axes:!1,grid:!1,behaveLikeLine:!0,ymax:20,resize:!0,pointSize:4,pointFillColors:["#FFF"],pointStrokeColors:["#FF6E40"],smooth:!1,numLines:6,lineWidth:2,lineColors:["#FF6E40"],hideHover:"auto"}),Morris.Line({element:"map-total-profit",data:[{y:"1",a:14},{y:"2",a:12},{y:"3",a:4},{y:"4",a:13},{y:"5",a:7},{y:"6",a:14},{y:"7",a:8},{y:"8",a:20}],xkey:"y",ykeys:["a"],labels:["Likes"],axes:!1,grid:!1,behaveLikeLine:!0,ymax:20,resize:!0,pointSize:4,pointFillColors:["#FFF"],pointStrokeColors:["#1DE9B6"],smooth:!1,numLines:6,lineWidth:2,lineColors:["#1DE9B6"],hideHover:"auto"});var k=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];Morris.Area({element:"monthly-revenue-graph",data:[{month:"2016-01",total:0,pipeline:0},{month:"2016-02",total:4500,pipeline:6e3},{month:"2016-03",total:1500,pipeline:3e3},{month:"2016-04",total:4500,pipeline:5500},{month:"2016-05",total:6500,pipeline:4e3},{month:"2016-06",total:4500,pipeline:6e3},{month:"2016-07",total:7e3,pipeline:5500},{month:"2016-08",total:5500,pipeline:6e3},{month:"2016-09",total:9500,pipeline:8e3},{month:"2016-10",total:7500,pipeline:8500},{month:"2016-11",total:6e3,pipeline:6500},{month:"2016-12",total:9500,pipeline:6500}],xkey:"month",ykeys:["pipeline","total"],labels:["Pipeline","Total"],xLabelFormat:function(a){var b=k[a.getMonth()];return b},dateFormat:function(a){var b=k[new Date(a).getMonth()];return b},behaveLikeLine:!0,ymax:1e4,resize:!0,pointSize:0,pointStrokeColors:["#C9BBAE","#258e74"],smooth:!0,gridLineColor:"#e3e3e3",numLines:6,gridtextSize:14,lineWidth:0,fillOpacity:.4,hideHover:"auto",lineColors:["#C9BBAE","#258e74"]});var e=!1;"RTL"==c("html").data("textdirection")&&(e=!0),e===!0&&c(".tweet-slider").attr("dir","rtl"),e===!0&&c(".fb-post-slider").attr("dir","rtl"),c(".tweet-slider").unslider({autoplay:!0,arrows:!1,nav:!1,infinite:!0}),c(".fb-post-slider").unslider({autoplay:!0,delay:3500,arrows:!1,nav:!1,infinite:!0}),c("#dpz-single-file").dropzone({paramName:"file",maxFiles:1,init:function(){this.on("maxfilesexceeded",function(a){this.removeAllFiles(),this.addFile(a)})}})}(window,document,jQuery);