var i=1;
var j=1;
var msg='';
var d='';

while (i<10){
	d='d'+i;
	msg = '';
	j=1;
while(j<10){
msg += i+'*' + j+'=' +j * i + "<br/>";
j++;
}

i ++;

document.getElementById(d).innerHTML=msg;
}