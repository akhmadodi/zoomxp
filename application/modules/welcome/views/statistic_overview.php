<div class="row-col primary">
	<div class="col-xs-4 lt">
		<div class="p-a-md">
			<span class="pull-right">
				<i class="fa text fa-caret-up text-success"></i>
			</span>
			<span class="_500">Views</span>
			<div class="h3 _700 m-y">
				2,045k
			</div>
			<div>
				<span ui-jp="sparkline" ui-refresh="app.setting.color" ui-options="[2,3,4,6,5,4,3,5,4,3,4,3,4,3,2,2], {type:'line', height:20, width: '70', lineWidth:2, valueSpots:{'0:':'#fff'}, lineColor:'#fff', spotColor:'#fff', fillColor:'transparent', highlightLineColor:'#fff', spotRadius:0}" class="sparkline inline"></span>
			</div>
		</div>
	</div>
    <div class="col-xs-4 bg">
		<div class="p-a-md">
			<span class="pull-right">
				<i class="fa text fa-caret-down text-warn"></i>
			</span>
			<span class="_500">Referrals</span>
			<div class="h3 _700 m-y">
				69k
			</div>
			<div>
				<span ui-jp="sparkline" ui-refresh="app.setting.color" ui-options="[4,4,3,5,4,3,5,3,4,6,5,3,2,3,4,6], {type:'line', height:20, width: '70', lineWidth:2, valueSpots:{'0:':'#fff'}, lineColor:'#fff', spotColor:'#fff', fillColor:'transparent', highlightLineColor:'#fff', spotRadius:0}" class="sparkline inline"></span>
			</div>
		</div>
	</div>
	<div class="col-xs-4 dk">
		<div class="p-a-md">
			<span class="pull-right">
				<i class="fa text fa-caret-down text-danger"></i>
			</span>
			<span class="_500">Members</span>
			<div class="h3 _700 m-y">
				4,560
			</div>
			<div>
				<span ui-jp="sparkline" ui-refresh="app.setting.color" ui-options="[2,1,5,3,4,3,5,4,3,5,6,7,6,4,3,2], {type:'line', height:20, width: '70', lineWidth:2, valueSpots:{'0:':'#fff'}, lineColor:'#fff', spotColor:'#fff', fillColor:'transparent', highlightLineColor:'#fff', spotRadius:0}" class="sparkline inline"></span>
			</div>
		</div>
	</div>
</div>
<div class="row-col primary">
	<div class="col-md-8">
		<div class="row-col">
			<div class="col-sm-6">
				<div class="p-a-md p-r-0">
					<h6 class="m-b-sm">Sales Overview</h6>
					<p class="text-sm">
						<i class="fa fa-caret-down text-warn"></i> <span class="text-muted">Min:</span> $39,050 
						<i class="fa fa-caret-up text-success m-l-sm"></i> <span class="text-muted">Max:</span> $78,560 
					</p>
					<div class="list no-padding">
						<div class="list-item">
							<div class="list-left">
								<div class="progress progress-xs w-64 m-y-sm">
							        <div class="progress-bar dark-white" style="width: 45%"></div>
							    </div>
							</div>
							<div class="list-body">
								Google advertise network
							</div>
						</div>
						<div class="list-item">
							<div class="list-left">
								<div class="progress progress-xs w-64 m-y-sm">
							        <div class="progress-bar dark-white" style="width: 25%"></div>
							    </div>
							</div>
							<div class="list-body">
								Apple app store
							</div>
						</div>
						<div class="list-item">
							<div class="list-left">
								<div class="progress progress-xs w-64 m-y-sm">
							        <div class="progress-bar dark-white" style="width: 55%"></div>
							    </div>
							</div>
							<div class="list-body">
								Flatty inc.
							</div>
						</div>
						<div class="list-item">
							<div class="list-left">
								<div class="progress progress-xs w-64 m-y-sm">
							        <div class="progress-bar dark-white" style="width: 35%"></div>
							    </div>
							</div>
							<div class="list-body">
								Other app stores.
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 dk">
				<div class="p-a-md">
					<div class="clearfix m-b-lg">
						<div class="pull-right">
							<ul class="nav">
					          <li class="nav-item inline">
					            <a class="nav-link">
					              <i class="material-icons md-18">&#xe863;</i>
					            </a>
					          </li>
					        </ul>
						</div>
						<span>Total: $3,000</span>
					</div>
					<div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
		              [{data: 10, label: &#x27;Apple&#x27;}, {data: 15, label: &#x27;Google&#x27;}, {data: 35, label: &#x27;Flatty&#x27;}, {data: 45, label: &#x27;Other&#x27;}],
		              {
		                series: { pie: { show: true, tilt: 0.6, offset:{left: -30}, stroke: { width: 0 }, label: { show: true, threshold: 0.05 } } },
		                legend: {backgroundColor: 'transparent'},
		                colors: ['rgba(255,255,255,0.5)','rgba(255,255,255,0.6)','rgba(255,255,255,0.8)','#0cc2aa'],
		                grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#fff' },   
		                tooltip: true,
		                tooltipOpts: { content: '%s: %p.0%' }
		              }
		            " style="height:200px"></div>
	            </div>
			</div>
		</div>
	</div>
	<div class="col-md-4 lt v-b">
		<div class="p-a-md">
			<h6 class="m-b-sm">Market in 2015</h6>
			<small class="text-muted">Quick view of the trending of this year.</small>
		</div>
		<div style="overflow-x:hidden">
			<div style="margin: 0 -2px">
	            <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
	              [
	                { 
	                  data: [[1, 6.1], [2, 6.3], [3, 6.4], [4, 6.6], [5, 7.0], [6, 7.7], [7, 8.3]], 
	                  points: { show: true, radius: 0}, 
	                  splines: { show: true, tension: 0.45, lineWidth: 3, fill: 0.1 } 
	                }
	              ],
	              {
	                colors: ['#fff'],
	                series: { shadowSize: 3 },
	                xaxis: { show: false, font: { color: '#ccc' }, position: 'bottom' },
	                yaxis:{ show: false, font: { color: '#ccc' }, max:10, min: 2},
	                grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#ccc' },
	                tooltip: true,
	                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
	              }
	            " style="height:224px" >
	            </div>
            </div>
        </div>
	</div>
</div>