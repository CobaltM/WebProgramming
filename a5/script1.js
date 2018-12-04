function submitEmps(){
var noemp=document.getElementById("noemp").value;
var i;
var out= [];
var table;
var row;
var col1;
var col2;
var col3;
var currHours;
var currPay;
var payTotl = 0;
if(noemp>0){
	for(i=0;i<noemp;i++){
		currHours = (parseInt(prompt("Enter Number of Hours worked for Employee "+(i+1),"0")));
		table = document.getElementById("outTable");
		row = table.insertRow(i+1);
		col1 = "<th>"+(i+1)+"</th>";
		col2 = "<th>"+currHours+"</th>";
		if(currHours>40){
			var surplus = currHours-40;
			currPay = (600+surplus*22.5);
			col3 = "<th>$"+currPay+"</th>";
		}
		else{
			currPay = (currHours*15);
			col3 = "<th>$"+currPay+"</th>";
		}
		row.insertCell(-1).outerHTML = col1;
		row.insertCell(-1).outerHTML = col2;
		row.insertCell(-1).outerHTML = col3;
		payTotl+=currPay;
	}
}
var p = document.createElement("p");
document.getElementById("total").appendChild(p.appendChild(document.createTextNode("Total to be paid: $"+payTotl)));
}