$(window).on("load",function(){var a=d3.select("#nested-pie"),b={top:20,right:10,bottom:20,left:10},c=300,d=300;radius=(Math.min(c,d)-2*b)/2;var e=d3.scale.ordinal().range(["#99B898","#FECEA8","#FF847C","#E84A5F","#F8B195","#F67280","#C06C84"]);d3.csv("../../../robust-assets/demo-data/d3/pie/flights.csv",function(c){function d(a){var b=90*(a.startAngle+a.endAngle)/Math.PI-90;return b>90?b-180:b}var f=d3.nest().key(function(a){return a.origin}).entries(c),g=a.selectAll("svg").data(f).enter().append("svg").attr("width",2*(radius+b.left+b.right)).attr("height",2*(radius+b.left+b.right+b.top)).append("g").attr("transform","translate("+(radius+b.left+b.right)+","+(radius+b.left+b.right+b.top)+")"),h=d3.svg.arc().innerRadius(0).outerRadius(radius),i=d3.layout.pie().value(function(a){return+a.count}).sort(function(a,b){return b.count-a.count});g.append("text").attr("dy",".35em").attr("y",-150).style("text-anchor","middle").style("font-weight",500).text(function(a){return a.key});var j=g.selectAll("g").data(function(a){return i(a.values)}).enter().append("g").attr("class","d3-arc");j.append("path").attr("d",h).style("stroke","#fff").style("fill",function(a){return e(a.data.carrier)}).append("title").text(function(a){return a.data.carrier+": "+a.data.count}),j.filter(function(a){return a.endAngle-a.startAngle>.2}).append("text").attr("dy",".35em").attr("transform",function(a){return"translate("+h.centroid(a)+")rotate("+d(a)+")"}).style("fill","#fff").style("font-size",12).style("text-anchor","middle").text(function(a){return a.data.carrier})})});