
//this function will find today's date

function calender() {
		var day=['Sunday','Monday','Tuesday','Wednesday','Thrusday','Friday','Saturday'];
		var month=['January','February','March',,'April','May','June' ,'July','August' ,'September','November','December'];

		var d = new Date();
		setText('calender-day', day[d.getDay()]);
		setText('calender-date',d.getDate());
		setText('calender-month-year',month[d.getMonth()]+' '+(1900+d.getYear()));

};

//this function will set the text value of <p> tags
function setText(id,val){
	if(val <10){
		val  = '0' + val; //add leading 0 if val<10
	}
	document.getElementById(id).innerHTML = val;

};

//call calender() when the page load
window.onload = calender;