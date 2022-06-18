@extends('layouts.master')

@section('main-content')
@role('super-admin')    
 
    <div class="tabs-animation">
        <div class="row">
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-night-fade">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Completed Shipments</div>
                        
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>10896</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-arielle-smile">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Registered Clients</div>
                           
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>23568</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-happy-green">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Registered Branches</div>
                      
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>464</span></div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mb-3 card">
                    <div class="card-header-tab card-header-tab-animation card-header">
                        <div class="card-header-title">
                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                            Sales Graph
                        </div>
                    
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-eg-77">
                                <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                    <div class="widget-chat-wrapper-outer">
                                        <div class="widget-chart-content pt-3 pr-3 pl-3">
                                            <div class="widget-chart-flex">
                                            <div id="chartContainer" style="height: 370px; width: 100%;"></div>

                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="card-hover-shadow-2x mb-3 card">
                    <div class="rm-border responsive-center text-left card-header">
                        <div><h5 class="menu-header-title text-capitalize text-success">AWB Generated</h5></div>
                    </div>
                    <div class="widget-chart widget-chart2 text-left pt-0">
                        <div class="widget-chat-wrapper-outer">
                            <div class="widget-chart-content">
                                <div class="widget-chart-flex">
                                    <div class="widget-numbers">
                                        <div class="widget-chart-flex">
                                            <div class="text-success"><span>348</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-chart-wrapper widget-chart-wrapper-lg he-auto opacity-10 m-0">
                                <div id="dashboard-sparkline-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="card-hover-shadow-2x mb-3 card">
                    <div class="rm-border responsive-center text-left card-header">
                        <div><h5 class="menu-header-title text-capitalize text-danger">Delivered Shipments</h5></div>
                    </div>
                    <div class="widget-chart widget-chart2 text-left pt-0">
                        <div class="widget-chat-wrapper-outer">
                            <div class="widget-chart-content">
                                <div class="widget-chart-flex">
                                    <div class="widget-numbers">
                                        <div class="widget-chart-flex">
                                            <div class="text-danger"><span>425</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-chart-wrapper widget-chart-wrapper-lg he-auto opacity-10 m-0">
                                <div id="dashboard-sparkline-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 col-xl-4">
                <div class="card-hover-shadow-2x mb-3 card bg-dark">
                    <div class="rm-border bg-dark responsive-center text-left card-header">
                        <div><h5 class="menu-header-title text-capitalize text-warning">Pending Shipments</h5></div>
                    </div>
                    <div class="widget-chart widget-chart2 text-left pt-0">
                        <div class="widget-chat-wrapper-outer">
                            <div class="widget-chart-content">
                                <div class="widget-chart-flex">
                                    <div class="widget-numbers">
                                        <div class="widget-chart-flex">
                                            <div class="text-warning"><span>274</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-chart-wrapper widget-chart-wrapper-lg he-auto opacity-10 m-0">
                                <div id="dashboard-sparkline-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="row">
            <div class="col-md-12 col-lg-6 col-xl-6">
                <div class="mb-3 card">
                    <div class="card-header-tab card-header-tab-animation card-header">
                        <div class="card-header-title">
                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                            Stats
                        </div>
                      
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-eg-77">
                                <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                    <div class="widget-chat-wrapper-outer">
                                        <div class="widget-chart-content pt-3 pr-3 pl-3">
                                            <div class="widget-chart-flex">
                                            <div id="chartContainer2" style="height: 370px; width: 100%;">
                                           
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                       
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-6">
                <div class="mb-3 card">
                    <div class="card-header-tab card-header-tab-animation card-header">
                        <div class="card-header-title">
                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                            Client Stats (Shipments Created)
                        </div>
                      
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-eg-77">
                                <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                    <div class="widget-chat-wrapper-outer">
                                        <div class="widget-chart-content pt-3 pr-3 pl-3">
                                            <div class="widget-chart-flex">
                                            <div id="chartContainer3" style="height: 370px; width: 100%;">
                                           
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                       
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
            </div>        </div>
        
  

        <div class="row">
            <div class="col-12">
                <div class="mb-3 card">
                    <div class="card-header-tab card-header-tab-animation card-header">
                        <div class="card-header-title">
                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                            Graph
                        </div>
                    
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-eg-77">
                                <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                    <div class="widget-chat-wrapper-outer">
                                        <div class="widget-chart-content pt-3 pr-3 pl-3">
                                            <div class="widget-chart-flex">
                                            <div id="chartContainer4" style="height: 370px; width: 100%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
    </div>
    @endrole

    @role('branch-user')
    <h1 style="color:white">Welcom {{Auth::user()->name}}</h1>
    @endrole

<script>

//Bar-Chart1
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	
	title:{
		text:"Sales Chart"
	},
	axisX:{
		interval: 1
	},
	axisY2:{
		interlacedColor: "rgba(230, 230, 230)",
		gridColor: "rgba(1,77,101,.1)",
		title: "Revenue"
	},
	data: [{
		type: "bar",
		name: "companies",
		axisYType: "secondary",
		color: "#e60000",
		dataPoints: [
			{ y: 300, label: "01-02-21" },
			{ y: 700, label: "01-02-21" },
			{ y: 5000, label: "01-02-21" },
			{ y: 9000, label: "01-02-21" },
			{ y: 7000, label: "01-02-21" },
			{ y: 7000, label: "01-02-21" },
			{ y: 9000, label: "01-02-21" },
			{ y: 8000, label: "01-02-21" },
			{ y: 11000, label: "01-02-21" },
			{ y: 15000, label: "01-02-22" },
			{ y: 12000, label: "01-02-22" },
			{ y: 15000, label: "01-02-22" },
			{ y: 25000, label: "01-02-22" },
			{ y: 28000, label: "01-02-22" },
			{ y: 29000, label: "01-02-22" },
			{ y: 52000, label: "01-02-22" },
			{ y: 103000, label: "01-02-22" },
			{ y: 134000, label: "01-02-22" }
		]
	}]
});
chart.render();

//Pie-Chart1
var chart = new CanvasJS.Chart("chartContainer2", {
	theme: "light2",
	animationEnabled: true,
	title: {
		text: "Shipment Stats",
        fontSize: 18
	},
	
	data: [{
		type: "pie",
		indexLabelFontSize: 18,
		radius: 80,
		indexLabel: "{label} - {y}",
		yValueFormatString: "###0.0\"%\"",
		click: explodePie,
		dataPoints: [
		
			{ y: 21, label: "Delivered"},
			{ y: 24.5, label: "Pending" },
			{ y: 9, label: "Cancelled" }
		
		]
	}]
});
chart.render();

//Pie-Chart2
var chart = new CanvasJS.Chart("chartContainer3", {
	theme: "light2",
	animationEnabled: true,
	title: {
		text: "Shipment Created",
        fontSize: 18
	},
	
	data: [{
		type: "pie",
		indexLabelFontSize: 18,
		radius: 80,
		indexLabel: "{label} - {y}",
		yValueFormatString: "###0.0\"%\"",
		click: explodePie,
		dataPoints: [
		
			{ y: 21, label: "Khaadi"},
			{ y: 2.5, label: "Gul Ahmed" },
			{ y: 9, label: "Alkaram" },
            { y: 9, label: "Nishat" },
            { y: 9, label: "Beech Tree" },
            { y: 9, label: "Ethnic" },
            { y: 9, label: "Sapphire" }
            
		
		]
	}]
});
chart.render();

function explodePie(e) {
	for(var i = 0; i < e.dataSeries.dataPoints.length; i++) {
		if(i !== e.dataPointIndex)
			e.dataSeries.dataPoints[i].exploded = false;
	}
}

//Bar-Chart2
var chart = new CanvasJS.Chart("chartContainer4", {
	animationEnabled: true,
	title:{
		text: "Shipment Count"
	},

	axisY: {
		suffix: "%"
	},
	toolTip: {
		shared: true
	},
	legend: {
		reversed: true,
		verticalAlign: "center",
		horizontalAlign: "right"
	},
	data: [{
		type: "stackedColumn100",
		name: "AWB-Generated",
		showInLegend: true,
		
		yValueFormatString: "#,##0\"%\"",
		dataPoints: [
			{y: 100,label:"Gul Ahmed"},
			{y: 50,label:"Beech Tree"},
			{y: 30,label:"Alkaram"},
		    {y: 80,label:"Sapphire"},
			
		]
	}, 
	{
		type: "stackedColumn100",
		name: "Delivered",
		showInLegend: true,
	
		yValueFormatString: "#,##0\"%\"",
		dataPoints: [
			{y: 50,label:"Gul Ahmed"},
			{y: 30,label:"Beech Tree"},
			{y: 25,label:"Alkaram"},
		    {y: 17,label:"Sapphire"},
		]
	}, 
	{
		type: "stackedColumn100",
		name: "Pending",
		showInLegend: true,
		
		yValueFormatString: "#,##0\"%\"",
		dataPoints: [
			{y: 10,label:"Gul Ahmed"},
			{y: 100,label:"Beech Tree"},
			{y: 20,label:"Alkaram"},
		    {y: 40,label:"Sapphire"},
		]
	}
	]
});
chart.render();
</script>
@endsection