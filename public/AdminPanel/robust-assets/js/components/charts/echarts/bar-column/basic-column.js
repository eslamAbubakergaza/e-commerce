$(window).on("load",function(){require.config({paths:{echarts:"../../../robust-assets/js/plugins/charts/echarts"}}),require(["echarts","echarts/chart/bar","echarts/chart/line"],function(a){var b=a.init(document.getElementById("basic-column"));chartOptions={grid:{x:40,x2:40,y:35,y2:25},tooltip:{trigger:"axis"},legend:{data:["Evaporation","Precipitation"]},color:["#99B898","#FF847C"],calculable:!0,xAxis:[{type:"category",data:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]}],yAxis:[{type:"value"}],series:[{name:"Evaporation",type:"bar",data:[2,4.9,7,23.2,25.6,76.7,135.6,162.2,32.6,20,6.4,3.3],itemStyle:{normal:{label:{show:!0,textStyle:{fontWeight:500}}}},markLine:{data:[{type:"average",name:"Average"}]}},{name:"Precipitation",type:"bar",data:[2.6,5.9,9,26.4,58.7,70.7,175.6,182.2,48.7,18.8,6,2.3],itemStyle:{normal:{label:{show:!0,textStyle:{fontWeight:500}}}},markLine:{data:[{type:"average",name:"Average"}]}}]},b.setOption(chartOptions),$(function(){function a(){setTimeout(function(){b.resize()},200)}$(window).on("resize",a),$(".menu-toggle").on("click",a)})})});