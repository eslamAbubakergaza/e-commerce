$(window).on("load",function(){var a=dimple.newSvg("#dual-measure-line","100%",500);d3.tsv("../../../robust-assets/demo-data/dimple/example-data.tsv",function(b){function c(){setTimeout(function(){d.draw(0,!0),e.titleShape.remove(),f.titleShape.remove()},100)}var d=new dimple.chart(a,b);d.setBounds(0,0,"100%","100%"),d.setMargins(40,50,10,50);var e=d.addMeasureAxis("x","Distribution");e.overrideMin=20;var f=d.addMeasureAxis("y","Price");f.overrideMin=50;var g=d.addSeries(["Month","Owner"],dimple.plot.line);g.addOrderRule("Date"),g.aggregate=dimple.aggregateMethod.avg,d.addLegend(0,10,"100%","5%","right"),d.defaultColors=[new dimple.color("#673AB7"),new dimple.color("#E91E63"),new dimple.color("#00BCD4"),new dimple.color("#FF5722"),new dimple.color("#FFC107"),new dimple.color("#009688"),new dimple.color("#3F51B5"),new dimple.color("#FFEB3B")],e.fontSize="12",f.fontSize="12",d.draw(),e.titleShape.remove(),f.titleShape.remove(),$(window).on("resize",c),$(".menu-toggle").on("click",c)})});