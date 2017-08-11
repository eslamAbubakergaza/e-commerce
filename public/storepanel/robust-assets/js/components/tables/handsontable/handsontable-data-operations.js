document.addEventListener("DOMContentLoaded",function(){function a(){return[[1,"George Washington","http://en.wikipedia.org/wiki/George_Washington","30/04/1789","4/03/1797","Independent ","Virginia"],[2,"John Adams","http://en.wikipedia.org/wiki/John_Adams","4/03/1797","4/03/1801","Federalist ","Massachusetts"],[3,"Thomas Jefferson","http://en.wikipedia.org/wiki/Thomas_Jefferson","4/03/1801","4/03/1809","Democratic-Republican ","Virginia"],[4,"James Madison","http://en.wikipedia.org/wiki/James_Madison","4/03/1809","4/03/1817","Democratic-Republican ","Virginia"],[5,"James Monroe","http://en.wikipedia.org/wiki/James_Monroe","4/03/1817","4/03/1825","Democratic-Republican ","Virginia"],[6,"John Quincy Adams","http://en.wikipedia.org/wiki/John_Quincy_Adams","4/03/1825","4/03/1829","Democratic-Republican/National Republican ","Massachusetts"],[7,"Andrew Jackson","http://en.wikipedia.org/wiki/Andrew_Jackson","4/03/1829","4/03/1837","Democratic ","Tennessee"],[8,"Martin Van Buren","http://en.wikipedia.org/wiki/Martin_Van_Buren","4/03/1837","4/03/1841","Democratic ","New York"],[9,"William Henry Harrison","http://en.wikipedia.org/wiki/William_Henry_Harrison","4/03/1841","4/04/1841","Whig","Ohio"],[10,"John Tyler","http://en.wikipedia.org/wiki/John_Tyler","4/04/1841","4/03/1845","Whig","Virginia"],[11,"James K. Polk","http://en.wikipedia.org/wiki/James_K._Polk","4/03/1845","4/03/1849","Democratic ","Tennessee"],[12,"Zachary Taylor","http://en.wikipedia.org/wiki/Zachary_Taylor","4/03/1849","9/07/1850","Whig","Louisiana"],[13,"Millard Fillmore","http://en.wikipedia.org/wiki/Millard_Fillmore","9/07/1850","4/03/1853","Whig","New York"],[14,"Franklin Pierce","http://en.wikipedia.org/wiki/Franklin_Pierce","4/03/1853","4/03/1857","Democratic ","New Hampshire"],[15,"James Buchanan","http://en.wikipedia.org/wiki/James_Buchanan","4/03/1857","4/03/1861","Democratic ","Pennsylvania"],[16,"Abraham Lincoln","http://en.wikipedia.org/wiki/Abraham_Lincoln","4/03/1861","15/04/1865","Republican/National Union","Illinois"],[17,"Andrew Johnson","http://en.wikipedia.org/wiki/Andrew_Johnson","15/04/1865","4/03/1869","Democratic/National Union","Tennessee"],[18,"Ulysses S. Grant","http://en.wikipedia.org/wiki/Ulysses_S._Grant","4/03/1869","4/03/1877","Republican ","Ohio"],[19,"Rutherford B. Hayes","http://en.wikipedia.org/wiki/Rutherford_B._Hayes","4/03/1877","4/03/1881","Republican ","Ohio"],[20,"James A. Garfield","http://en.wikipedia.org/wiki/James_A._Garfield","4/03/1881","19/09/1881","Republican ","Ohio"],[21,"Chester A. Arthur","http://en.wikipedia.org/wiki/Chester_A._Arthur","19/09/1881","4/03/1885","Republican ","New York"],[22,"Grover Cleveland","http://en.wikipedia.org/wiki/Grover_Cleveland","4/03/1885","4/03/1889","Democratic ","New York"],[23,"Benjamin Harrison","http://en.wikipedia.org/wiki/Benjamin_Harrison","4/03/1889","4/03/1893","Republican ","Indiana"],[24,"Grover Cleveland (2nd term)","http://en.wikipedia.org/wiki/Grover_Cleveland","4/03/1893","4/03/1897","Democratic ","New York"],[25,"William McKinley","http://en.wikipedia.org/wiki/William_McKinley","4/03/1897","14/9/1901","Republican ","Ohio"],[26,"Theodore Roosevelt","http://en.wikipedia.org/wiki/Theodore_Roosevelt","14/9/1901","04/03/09","Republican ","New York"],[27,"William Howard Taft","http://en.wikipedia.org/wiki/William_Howard_Taft","04/03/09","04/03/13","Republican ","Ohio"],[28,"Woodrow Wilson","http://en.wikipedia.org/wiki/Woodrow_Wilson","04/03/13","04/03/21","Democratic ","New Jersey"],[29,"Warren G. Harding","http://en.wikipedia.org/wiki/Warren_G._Harding","04/03/21","02/08/23","Republican ","Ohio"],[30,"Calvin Coolidge","http://en.wikipedia.org/wiki/Calvin_Coolidge","02/08/23","04/03/29","Republican ","Massachusetts"],[31,"Herbert Hoover","http://en.wikipedia.org/wiki/Herbert_Hoover","04/03/29","04/03/33","Republican ","Iowa"],[32,"Franklin D. Roosevelt","http://en.wikipedia.org/wiki/Franklin_D._Roosevelt","04/03/33","12/04/45","Democratic","New York"],[33,"Harry S. Truman","http://en.wikipedia.org/wiki/Harry_S._Truman","12/04/45","20/01/53","Democratic","Missouri"],[34,"Dwight D. Eisenhower","http://en.wikipedia.org/wiki/Dwight_D._Eisenhower","20/01/53","20/01/61","Republican ","Texas"],[35,"John F. Kennedy","http://en.wikipedia.org/wiki/John_F._Kennedy","20/01/61","22/11/63","Democratic","Massachusetts"],[36,"Lyndon B. Johnson","http://en.wikipedia.org/wiki/Lyndon_B._Johnson","22/11/63","20/01/69","Democratic","Texas"],[37,"Richard Nixon","http://en.wikipedia.org/wiki/Richard_Nixon","20/01/69","09/08/74","Republican","California"],[38,"Gerald Ford","http://en.wikipedia.org/wiki/Gerald_Ford","09/08/74","20/01/77","Republican","Michigan"],[39,"Jimmy Carter","http://en.wikipedia.org/wiki/Jimmy_Carter","20/01/77","20/01/81","Democratic ","Georgia"],[40,"Ronald Reagan","http://en.wikipedia.org/wiki/Ronald_Reagan","20/01/81","20/01/89","Republican ","California"],[41,"George H. W. Bush","http://en.wikipedia.org/wiki/George_H._W._Bush","20/01/89","20/01/93","Republican ","Texas"],[42,"Bill Clinton","http://en.wikipedia.org/wiki/Bill_Clinton","20/01/93","20/01/01","Democratic ","Arkansas"],[43,"George W. Bush","http://en.wikipedia.org/wiki/George_W._Bush","20/01/01","20/01/09","Republican ","Texas"],[44,"Barack Obama","http://en.wikipedia.org/wiki/Barack_Obama","20/01/09","Incumbent ","  Democratic   ","Illinois"]]}var b,c=document.getElementById("sorting");b=new Handsontable(c,{data:a(),rowHeaders:!0,colHeaders:!0,colWidths:[45,220,110,280],columnSorting:!0,manualColumnResize:!0,columns:[{data:0},{data:1},{data:6},{data:5}],sortIndicator:!0});var d=function(){var a=[[1,2,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[1,2,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],[1,2,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[1,2,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],[1,2,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[1,2,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],[1,2,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[1,2,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0],[1,2,3,4,5,6,7,8,9,0],[0,0,0,0,0,0,0,0,0,0]];return function(){for(var b=parseInt(window.location.hash.replace("#",""),10)||1,c=6,d=(b-1)*c,e=b*c,f=[];d<e;d++)f.push(a[d]);return f}}();c=document.getElementById("paginating"),paginating=new Handsontable(c,{data:d(),colHeaders:!0}),Handsontable.Dom.addEvent(window,"hashchange",function(a){console.log("heher"),paginating.loadData(d())});var e=[["Nissan",2012,"black","black"],["Nissan",2013,"blue","blue"],["Chrysler",2014,"yellow","black"],["Volvo",2015,"yellow","gray"]],f=document.getElementById("searching"),g=document.getElementById("search_field");b=new Handsontable(f,{data:e,colHeaders:!0,search:!0}),Handsontable.Dom.addEvent(g,"keyup",function(a){b.search.query(this.value);b.render()})});