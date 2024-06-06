// =============================================================
//------------ٍ--start-------LATE--------LATE------------------
// =============================================================
 function AjaxLate(){
	const xhr1 =new XMLHttpRequest();
	const elementLate1 =document.getElementById('late-time');
	// const result = document.getElementById('timedisplay').value;
	xhr1.onreadystatechange =function(){
	elementLate1.innerHTML = xhr1.responseText;
		// const  hi= "hinadathisfortest";
	};
xhr1.open("GET",'../../Controllers/Dashboard/ajax/php/late.php?reset=TESTForAJax',true);
xhr1.send();
	}
// =============================================================
//----------------START*******ABSENT*************------------
// =============================================================
function Ajaxabsent(){
	const xhr2 =new XMLHttpRequest();
	const elementLate2 =document.getElementById('absent-days');
	// const result = document.getElementById('timedisplay').value;
	xhr2.onreadystatechange =function(){
	elementLate2.innerHTML = xhr2.responseText;
};
xhr2.open("GET",'../../Controllers/Dashboard/ajax/php/absent.php?reset=TESTForAJax',true);
xhr2.send();
}
// =============================================================
//----------------START*******BREAK*************------------
// =============================================================
function Ajaxbreak(){
	const xhr3 =new XMLHttpRequest();
	const elementLate3 =document.getElementById('break-time');
	// const result = document.getElementById('timedisplay').value;
	xhr3.onreadystatechange =function(){
	elementLate3.innerHTML = xhr3.responseText;
};
xhr3.open("GET",'../../Controllers/Dashboard/ajax/php/break.php?reset=TESTForAJax',true);
xhr3.send();
}
// =============================================================
//----------------START*******PAYCHECK*************------------
// =============================================================
function Ajaxpaycheck(){
	const xhr4 =new XMLHttpRequest();
	const elementLate4 =document.getElementById('total-paycheck');
	// const result = document.getElementById('timedisplay').value;
	xhr4.onreadystatechange =function(){
	elementLate4.innerHTML = xhr4.responseText;
};
xhr4.open("GET",'../../Controllers/Dashboard/ajax/php/paycheck.php?reset=TESTForAJax',true);
xhr4.send();
}
// =============================================================
//----------------START*******HOLIDAY*************------------
// =============================================================
function Ajaxholiday(){
	const xhr5 =new XMLHttpRequest();
	const elementLate5 =document.getElementById('next-holidays');
	// const result = document.getElementById('timedisplay').value;
	xhr5.onreadystatechange =function(){
	elementLate5.innerHTML = xhr5.responseText;
};
xhr5.open("GET",'../../Controllers/Dashboard/ajax/php/holiday.php?reset=TESTForAJax',true);
xhr5.send();
}
// =============================================================
//----------------START*******TASK*************------------
// =============================================================
function Ajaxtask(){
	const xhr6 =new XMLHttpRequest();
	const elementLate6 =document.getElementById('task');
	// const result = document.getElementById('timedisplay').value;
	xhr6.onreadystatechange =function(){
	elementLate6.innerHTML = xhr6.responseText;
};
xhr6.open("GET",'../../Controllers/Dashboard/ajax/php/task.php?reset=TESTForAJax',true);
xhr6.send();
}
// =============================================================
//----------------START*******ALART AND COMMENT*************------------
// =============================================================
function AjaxcommentAlart(){
	const xhr7 =new XMLHttpRequest();
	const elementLate7 =document.getElementById('comment');
	// const result = document.getElementById('timedisplay').value;
	xhr7.onreadystatechange =function(){
	elementLate7.innerHTML = xhr7.responseText;
};
xhr7.open("GET",'../../Controllers/Dashboard/ajax/php/alart.php?reset=TESTForAJax',true);
xhr7.send();
}
// =============================================================
//----------------END*******ALART AND COMMENT*************----
// =============================================================




//-------end-------********absent*******---------end----------
//-----------star-----------for late day----------ajax
//  function AjaxReset(){
// 			const xhr8 =new XMLHttpRequest();
// 			const result8 = document.getElementById('timedisplay').textContent;
// 			const elementLate2 =document.getElementById('absent-days');
// 			xhr8.onreadystatechange =function(){
// 				elementLate2.innerHTML = xhr8.responseText;
			
// 		};
// 		xhr8.open("GET",'../../Controllers/Dashboard/ajax/php/reset.php?reset='+result8,true);
// 		xhr8.send();
// 	}
