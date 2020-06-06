function executeScripts() {
	new MortgageSummary();
	new BalanceGraph();
	new InterestPrincipalGraph();
}

/***************************************************
 * Mortgage Summary
 ***************************************************/

var MortgageSummary = function(){
	var canvas = document.getElementById("mortgageSummaryGraph").getElementsByTagName("canvas")[0];
	var ctx = canvas.getContext("2d");
	
	var data = [
		{
			value: 45.544,
			color:"indianred"
		},
		{
			value : 5.356,
			color : "steelblue"
		},
		{
			value : 13.391,
			color : "seagreen"
		},
		{
			value : 35.709,
			color : "palegoldenrod"
		},
	]
	
	var options = {
		animation: false,
		segmentStrokeWidth: 1
	};
	
	new Chart(ctx).Pie(data, options);
};

/***************************************************
 * Balance Graph
 ***************************************************/

var BalanceGraph = function(){
	var lineData = [
		{ strokeColor : "indianred", data : [250000, 233400.71, 211503.16, 180800.25, 138336.94, 79617.69, 0] }
	];
	
	new LineGraph("balanceGraph",lineData);
};

/***************************************************
 * Interest/Principal Graph
 ***************************************************/
 
var InterestPrincipalGraph = function(){
	var lineData = [
		{ strokeColor : "indianred", data : [1354.17, 1267.65, 1148.01, 982.57, 753.80, 437.45,  8.51] },
		{ strokeColor : "steelblue", data : [226,     312.52,  432.16,  597.60, 826.37, 1142.72, 1571.66] }
	];
	
	new LineGraph("interestPrincipalGraph",lineData);
};

/***************************************************
 * Line Graph
 ***************************************************/

var LineGraph = function(identifier, lineData){
	var canvas = document.getElementById(identifier).getElementsByTagName("canvas")[0];
	var ctx = canvas.getContext("2d");
	
	var data = {
		labels : ["", "2010", "", "2020", "", "2030", ""],
		datasets: lineData
	};
	
	var options = {
		animation: false,
		bezierCurve : false,
		pointDot: false,
		datasetFill: false
	}
	
	new Chart(ctx).Line(data,options);
};