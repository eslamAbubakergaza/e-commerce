$(window).on("load",function(){require.config({paths:{echarts:"../../../robust-assets/js/plugins/charts/echarts"}}),require(["echarts","echarts/chart/funnel","echarts/chart/gauge"],function(a){var b=a.init(document.getElementById("right-align-funnel"));chartOptions={tooltip:{trigger:"item",formatter:"{a} <br/>{b}: {c}%"},legend:{orient:"vertical",x:"left",y:75,data:["Work","Eat","Commute","Watch TV","Sleep"]},color:["#99B898","#FECEA8","#FF847C","#E84A5F","#2A363B"],calculable:!0,series:[{name:"Funnel",type:"funnel",funnelAlign:"right",x:"25%",x2:"25%",y:"17.5%",width:"50%",height:"80%",itemStyle:{normal:{label:{position:"left"}}},data:[{value:60,name:"Work"},{value:30,name:"Eat"},{value:10,name:"Commute"},{value:80,name:"Watch TV"},{value:100,name:"Sleep"}]}]},b.setOption(chartOptions),$(function(){function a(){setTimeout(function(){b.resize()},200)}$(window).on("resize",a),$(".menu-toggle").on("click",a)})})});