$(window).on("load",function(){function a(a){k.transition().duration(750).tween("scale",function(){var b=d3.interpolate(f.domain(),[a.x,a.x+a.dx]),c=d3.interpolate(g.domain(),[a.y,1]),d=d3.interpolate(g.range(),[a.y?20:0,radius]);return function(a){f.domain(b(a)),g.domain(c(a)).range(d(a))}}).selectAll("path").attrTween("d",function(a){return function(){return j(a)}})}var b=d3.select("#zoomable-sunburst"),c=b.node().getBoundingClientRect().width,d=400;radius=Math.min(c,d)/2-10;var e=d3.format(",d"),f=d3.scale.linear().range([0,2*Math.PI]),g=d3.scale.sqrt().range([0,radius]),h=d3.scale.ordinal().range(["#99B898","#FECEA8","#FF847C","#E84A5F","#C06C84","#6C5B7B","#355C7D"]),i=d3.layout.partition().value(function(a){return a.size}),j=d3.svg.arc().startAngle(function(a){return Math.max(0,Math.min(2*Math.PI,f(a.x)))}).endAngle(function(a){return Math.max(0,Math.min(2*Math.PI,f(a.x+a.dx)))}).innerRadius(function(a){return Math.max(0,g(a.y))}).outerRadius(function(a){return Math.max(0,g(a.y+a.dy))}),k=b.append("svg").attr("width",c).attr("height",d).append("g").attr("transform","translate("+c/2+","+d/2+")");d3.json("../../../robust-assets/demo-data/d3/circle/flare.json",function(b,c){if(b)throw b;k.selectAll("path").data(i.nodes(c)).enter().append("path").attr("d",j).style("fill",function(a){return h((a.children?a:a.parent).name)}).on("click",a).append("title").text(function(a){return a.name+"\n"+e(a.value)})}),d3.select(self.frameElement).style("height",d+"px")});