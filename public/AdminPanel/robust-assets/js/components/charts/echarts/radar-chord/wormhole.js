$(window).on("load",function(){require.config({paths:{echarts:"../../../robust-assets/js/plugins/charts/echarts"}}),require(["echarts","echarts/chart/radar","echarts/chart/chord"],function(a){var b=a.init(document.getElementById("wormhole"));chartOptions={tooltip:{trigger:"item",backgroundColor:"rgba(0,0,250,0.2)"},legend:{data:function(){for(var a=[],b=1;b<=28;b++)a.push(b+2e3);return a}()},polar:[{indicator:[{text:"IE8-",max:400},{text:"IE9+",max:400},{text:"Safari",max:400},{text:"Firefox",max:400},{text:"Chrome",max:400}],center:["50%",240],radius:150}],color:["#FF847C"],calculable:!0,series:function(){for(var a=[],b=1;b<=28;b++)a.push({name:"Browser (data purely fictional)",type:"radar",symbol:"none",itemStyle:{normal:{lineStyle:{width:1}},emphasis:{areaStyle:{color:"rgba(0,250,0,0.3)"}}},data:[{value:[10*(40-b),4*(38-b)+60,5*b+10,9*b,b*b/2],name:b+2e3}]});return a}()},b.setOption(chartOptions),$(function(){function a(){setTimeout(function(){b.resize()},200)}$(window).on("resize",a),$(".menu-toggle").on("click",a)})})});