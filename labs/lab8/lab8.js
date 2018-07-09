 var counter = 0;
 function start()
 {
 	counter ++;
 	document.getElementById('seal').src = "./gold.png";
 	document.getElementById('seal').src = "./black.png";
 }

setInterval(start,1000)
window.addEventListenenr("load",start,false);






