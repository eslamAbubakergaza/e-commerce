$(window).on("load",function(){var a=d3.select("#tree-chart"),b={top:20,right:20,bottom:30,left:50},c=a.node().getBoundingClientRect().width-b.left-b.right,d=600-b.top-b.bottom,e=a.append("svg"),f=e.attr("width",c+b.left+b.right).attr("height",d+b.top+b.bottom).append("g").attr("transform","translate("+b.left+","+b.top+")"),g=d3.layout.tree().size([d,c-180]),h=d3.svg.diagonal().projection(function(a){return[a.y,a.x]});d3.json("../../../robust-assets/demo-data/d3/tree/tree.json",function(i,j){function k(){c=a.node().getBoundingClientRect().width-b.left-b.right,l=g.nodes(j),m=g.links(l),e.attr("width",c+b.left+b.right),f.attr("width",c+b.left+b.right),g.size([d,c-180]),f.selectAll(".d3-tree-link").attr("d",h),f.selectAll(".d3-tree-node").attr("transform",function(a){return"translate("+a.y+","+a.x+")"})}var l=g.nodes(j),m=g.links(l),n=f.append("g").attr("class","d3-tree-link-group"),o=(n.selectAll(".d3-tree-link").data(m).enter().append("path").attr("class","d3-tree-link").attr("d",h).style("fill","none").style("stroke","#e3e3e3").style("stroke-width",1.5),f.append("g").attr("class","d3-tree-node-group")),p=o.selectAll(".d3-tree-node").data(l).enter().append("g").attr("class","d3-tree-node").attr("transform",function(a){return"translate("+a.y+","+a.x+")"});p.append("circle").attr("r",4.5).attr("class","d3-tree-circle").style("fill","#fff").style("stroke","#E84A5F").style("stroke-width",1.5),p.append("text").attr("dx",function(a){return a.children?-12:12}).attr("dy",4).style("text-anchor",function(a){return a.children?"end":"start"}).style("font-size",12).text(function(a){return a.name}),$(window).on("resize",k),$(".menu-toggle").on("click",k)})});