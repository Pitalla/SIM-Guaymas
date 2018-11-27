@extends('adminlte::page')

@section('htmlheader_title')
Soporte Informatica
@endsection

@section('contentheader_title', 'Soporte Informatica')
@section('contentheader_description', 'Solicitudes')

@section('main-content')
	<div class="container-fluid spark-screen">


		      <div class="row">
		        <div class="col-xs-12">
		          <div class="">
		            <div class="box-header with-border  hide">
		              <h3 class="box-title">Acciones</h3>
		            </div>
		            <div class="box-body">
		              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
										<i class="fa  fa-plus-square"></i>
									 Nuevo
		              </button>
		              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-buscar">
										<i class="fa fa-search"></i>
									  Buscar
		              </button>
		              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-danger">
										<i class="fa  fa-info-circle"></i>
								   Información
		              </button>
		              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-warning">
										<i class="fa fa- fa-bar-chart"></i>
									  Reportes
		              </button>

		            </div>
		          </div>
		        </div>
		      </div>


		<div class="row">
		        <div class="col-xs-12">
		          <div class="box">



		            <div class="box-header with-border">
		              <h3 class="box-title">Solicitudes</h3>



									<div class="box-tools pull-right">

										<div class="input-group input-group-sm hide" style="width: 150px; float:left; margin-right:20px;">
		                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

		                  <div class="input-group-btn">
		                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
		                  </div>
		                </div>

										<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
										</button>

										<div class="btn-group hide">
										                  <button type="button" title="Reportes" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										                    <i class="fa fa-wrench"></i></button>
										                  <ul class="dropdown-menu" role="menu">
										                    <li><a href="#">Reporte mensual</a></li>
										                    <li><a href="#">Reporte trimestral</a></li>
										                    <li><a href="#">Reporte mensual por tecnico</a></li>
																				<li><a href="#">Reporte mensual por Dependencia</a></li>
										                    <li class="divider"></li>
										                    <li><a href="#">Todos los reportes</a></li>
										                  </ul>
										                </div>

										<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
									</div>


		            </div>
		            <!-- /.box-header -->
		            <div class="box-body table-responsive no-padding">
		              <table class="table table-hover">
		                <tbody><tr>
		                  <th>ID</th>
		                  <th>Dependencia</th>
		                  <th>Fecha</th>
		                  <th>Status</th>
		                  <th>Asunto</th>
											<th>Tecnico</th>
											<th>Dictamen</th>
											<th>

											</th>
		                </tr>
		                <tr>
		                  <td>1</td>
		                  <td>Direccion de Ingresos <br> <b>Manuel Villegas </b></td>
		                  <td>23-10-2018</td>
		                  <td><span class="label label-success">Listo</span></td>
		                  <td> La compu no prende</td>
											<td> Gabriel</td>
											 <td> El boton estaba atorado</td>
											 <td><a class="badge bg-green"> 	<i class="fa fa-search"></i> VER</a></td>
		                </tr>
		                <tr>
											<td>2</td>
											<td>Direccion de Imagen<br> <b> Nayeli </b></td>
											<td>23-10-2018</td>
		                  <td><span class="label label-warning">Pendiente</span></td>
											<td> Ocupola suit de Adobe</td>
											<td> </td>
											 <td></td>
											  <td><a class="badge bg-green"> 	<i class="fa fa-search"></i> VER</a></td>
									  </tr>
		                <tr>
											<td>3</td>
											<td>Oficialia Mayor <br> <b>Eriberto Borquez</b></td>
											<td>23-10-2018</td>
										 <td><span class="label label-primary">Fuera de Alcance</span></td>
										 <td> Ocupamos una carpeta compartida con egresos</td>
										 <td>Misael</td>
											<td> No se puede en este momento</td>
											 <td><a class="badge bg-green"> 	<i class="fa fa-search"></i> VER</a></td>
										 </tr>

										 <tr>
 											<td>4</td>
 											<td>Recursos humanos<br> <b>Maargarita Diaz</b></td>
 											<td>23-10-2018</td>
 		                  <td><span class="label label-warning">Pendiente</span></td>
 											<td> Ocupo un dictamen tecnico para mi pc</td>
 											<td>Abel</td>
 											 <td> </td>
 											 <td><a class="badge bg-green"> 	<i class="fa fa-search"></i> VER</a></td>
 										</tr>


		                <tr>
											<td>5</td>
											<td>DIF Guaymas<br> <b>Juan Perez</b></td>
											<td>23-10-2018</td>
		                  <td><span class="label label-danger">Cancelado</span></td>
											<td> La compu no prende</td>
											<td>Arturo</td>
											 <td> No corresponde a esta area</td>
											  <td><a class="badge bg-green"> 	<i class="fa fa-search"></i> VER</a></td>
										</tr>
		              </tbody></table>
		            </div>
		            <!-- /.box-body -->
								<div class="box-footer clearfix">

									<div class="btn-group pull-left">
									<button type="button" class="btn btn-danger">Ver todos</button>
									<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<span class="caret"></span>
									<span class="sr-only">Toggle Dropdown</span>
									</button>
									<ul class="dropdown-menu" role="menu">
									<li><a href="#">Pendientes</a></li>
									<li><a href="#">Fuera de alcance</a></li>
									<li><a href="#">Cancelados</a></li>
									<li class="divider"></li>
									<li><a href="#">Listos</a></li>
									</ul>
									</div>


								              <a href="javascript:void(0)" class="btn btn-sm btn-success   pull-right">Reporte Mensual</a>
								            </div>

		          </div>
		          <!-- /.box -->
		        </div>





		      </div>

					<div class="row">

						<div class="col-md-4">
		          <!-- AREA CHART -->
		          <div class="box box-primary">
		            <div class="box-header with-border">
		              <h3 class="box-title">Area Chart</h3>

		              <div class="box-tools pull-right">
		                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		                </button>
		                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
		              </div>
		            </div>
		            <div class="box-body">
		              <div class="chart">
		                <canvas id="areaChart" style="height:250px"></canvas>
		              </div>
		            </div>
		          </div>
		          <!-- /.box -->
 				</div>

		        <div class="col-md-4">
		          <!-- DONUT CHART -->
		          <div class="box box-danger">
		            <div class="box-header with-border">
		              <h3 class="box-title">Solicitudes por eje  - Noviembre</h3>

		              <div class="box-tools pull-right">
		                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		                </button>
		                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
		              </div>
		            </div>
		            <div class="box-body">
		              <canvas id="pieChart" style="height:250px"></canvas>
		            </div>
		            <!-- /.box-body -->
		          </div>
		          <!-- /.box -->

		        </div>
		        <!-- /.col (LEFT) -->
		        <div class="col-md-4">
		          <!-- BAR CHART -->
		          <div class="box box-success">
		            <div class="box-header with-border">
		              <h3 class="box-title">Comparativo Octubre - Noviembre</h3>

		              <div class="box-tools pull-right">
		                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		                </button>
		                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
		              </div>
		            </div>
		            <div class="box-body">
		              <div class="chart">
		                <canvas id="barChart" style="height:230px"></canvas>
		              </div>
		            </div>
		            <!-- /.box-body -->
		          </div>
		          <!-- /.box -->

		        </div>
		        <!-- /.col (RIGHT) -->




					</div>

	</div>





		<div class="modal fade" id="modal-default">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Nueva Solicitud</h4>
					</div>
					<div class="modal-body">
						<form id="formNuevaSolicitud" role="form" action="">
															<!-- text input -->
															<div class="form-group">
																<label>Nombre del Ineresado</label>
																<input type="text" name="interesado" class="form-control" placeholder="Enter ...">
															</div>
															<!-- text input -->
															<div class="form-group">
																<label>Teléfono del contacto</label>
																<input type="text" name="telefono" class="form-control" placeholder="Enter ...">
															</div>
															<!-- textarea -->
															<div class="form-group">
																<label>Asunto</label>
																<textarea name="asunto" class="form-control" rows="3" placeholder="Enter ..."></textarea>
															</div>
															<!-- select -->
															<div class="form-group">
																<label>Tema</label>
																<select name="tema" class="form-control">
																	<option>Soporte técnico</option>
																	<option>Redes (Conectividad)</option>
																	<option>Soporte Sistemas</option>
																	<option>Desarrollo de Software</option>
																	<option>Soporte Ofimática</option>
																	<option>Otro</option>
																</select>
															</div>
														</form>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
						<button type="submit" name="btnNuevaSolicitud" class="btn btn-success" form="formNuevaSolicitud">
						<i class="glyphicon glyphicon glyphicon-floppy-disk"></i>
			 Listo
						</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->






			<div class="modal fade" id="modal-buscar">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Buscar Solicitud</h4>
						</div>
						<div class="modal-body">
							<form id="formNuevaSolicitud" role="form" action="">

								<!-- text input -->
								<div class="form-group">
									<label>id</label>
									<input type="text" name="id" class="form-control" placeholder="Enter ...">
								</div>




								<!-- select -->
								<div class="form-group">
									<label>Dependencias</label>
									<select name="tema" class="form-control">
										<option>Tesoreria</option>
										<option>Oficialia</option>
									</select>
								</div>


								<!-- select -->
								<div class="form-group">
									<label>Unidades Administrativas</label>
									<select name="tema" class="form-control">
										<option>Informatica</option>
										<option>Recursos Materiales</option>
										<option>Recursos Humanos</option>
									</select>
								</div>

								<!-- select -->
								<div class="form-group">
									<label>Estado</label>
									<select name="Estado" class="form-control">
										<option>Pendiente</option>
										<option>Listo</option>
										<option>Cancelado</option>
										<option>Fuera de alcance</option>
									</select>
								</div>
																<!-- text input -->
																<div class="form-group">
																	<label>Fecha de Captura</label>
																	<input type="date" name="fechaCaptura" class="form-control" placeholder="Enter ...">
																</div>

																<!-- text input -->
																<div class="form-group">
																	<label>Nombre del Ineresado</label>
																	<input type="text" name="interesado" class="form-control" placeholder="Enter ...">
																</div>
																<!-- text input -->
																<div class="form-group">
																	<label>Teléfono del contacto</label>
																	<input type="text" name="telefono" class="form-control" placeholder="Enter ...">
																</div>
																<!-- textarea -->
																<div class="form-group">
																	<label>Asunto</label>
																	<textarea name="asunto" class="form-control" rows="3" placeholder="Enter ..."></textarea>
																</div>
																<!-- select -->
																<div class="form-group">
																	<label>Tema</label>
																	<select name="tema" class="form-control">
																		<option>Soporte técnico</option>
																		<option>Redes (Conectividad)</option>
																		<option>Soporte Sistemas</option>
																		<option>Desarrollo de Software</option>
																		<option>Soporte Ofimática</option>
																		<option>Otro</option>
																	</select>
																</div>
															</form>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
							<button type="submit" name="btnNuevaSolicitud" class="btn btn-success" form="formNuevaSolicitud">
							<i class="glyphicon glyphicon glyphicon-floppy-disk"></i>
				 Listo
							</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->





@endsection

@section('scripts')
	<!-- jQuery 3
	<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>-->
	<!-- Bootstrap 3.3.7
	<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
-->
<script src="{{ asset('/js/app.js')}}" type="text/javascript"></script>

	<!-- ChartJS -->
	<script src="{{ asset('bower_components/chart.js/Chart.js') }}"></script>
	<!-- FastClick -->
	<script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>



	<script>
	  $(function () {
	    /* ChartJS
	     * -------
	     * Here we will create a few charts using ChartJS
	     */

	    //--------------
	    //- AREA CHART -
	    //--------------

	    // Get context with jQuery - using jQuery's .get() method.
	    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
	    // This will get the first returned node in the jQuery collection.
	    var areaChart       = new Chart(areaChartCanvas)

	    var areaChartData = {
	      labels  : ['Sop. Técnico', 'Redes ', 'Sop. Sistemas', 'Des. Software', 'Sop. Ofimática', 'Otros'],
	      datasets: [
	        {
	          label               : 'Electronics',
	          fillColor           : 'rgba(210, 214, 222, 1)',
	          strokeColor         : 'rgba(210, 214, 222, 1)',
	          pointColor          : 'rgba(210, 214, 222, 1)',
	          pointStrokeColor    : '#c1c7d1',
	          pointHighlightFill  : '#fff',
	          pointHighlightStroke: 'rgba(220,220,220,1)',
	          data                : [65, 59, 80, 81, 56, 55]
	        },
	        {
	          label               : 'Digital Goods',
	          fillColor           : 'rgba(60,141,188,0.9)',
	          strokeColor         : 'rgba(60,141,188,0.8)',
	          pointColor          : '#3b8bba',
	          pointStrokeColor    : 'rgba(60,141,188,1)',
	          pointHighlightFill  : '#fff',
	          pointHighlightStroke: 'rgba(60,141,188,1)',
	          data                : [28, 48, 40, 19, 86, 27, 90]
	        }
	      ]
	    }

	    var areaChartOptions = {
	      //Boolean - If we should show the scale at all
	      showScale               : true,
	      //Boolean - Whether grid lines are shown across the chart
	      scaleShowGridLines      : false,
	      //String - Colour of the grid lines
	      scaleGridLineColor      : 'rgba(0,0,0,.05)',
	      //Number - Width of the grid lines
	      scaleGridLineWidth      : 1,
	      //Boolean - Whether to show horizontal lines (except X axis)
	      scaleShowHorizontalLines: true,
	      //Boolean - Whether to show vertical lines (except Y axis)
	      scaleShowVerticalLines  : true,
	      //Boolean - Whether the line is curved between points
	      bezierCurve             : true,
	      //Number - Tension of the bezier curve between points
	      bezierCurveTension      : 0.3,
	      //Boolean - Whether to show a dot for each point
	      pointDot                : false,
	      //Number - Radius of each point dot in pixels
	      pointDotRadius          : 4,
	      //Number - Pixel width of point dot stroke
	      pointDotStrokeWidth     : 1,
	      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
	      pointHitDetectionRadius : 20,
	      //Boolean - Whether to show a stroke for datasets
	      datasetStroke           : true,
	      //Number - Pixel width of dataset stroke
	      datasetStrokeWidth      : 2,
	      //Boolean - Whether to fill the dataset with a color
	      datasetFill             : true,
	      //String - A legend template
	      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
	      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
	      maintainAspectRatio     : true,
	      //Boolean - whether to make the chart responsive to window resizing
	      responsive              : true
	    }
			areaChartOptions.datasetFill = false
	    //Create the line chart
       areaChart.Line(areaChartData, areaChartOptions)

			 /*
	    //-------------
	    //- LINE CHART -
	    //--------------
	    var lineChartCanvas          = $('#lineChart').get(0).getContext('2d')
	    var lineChart                = new Chart(lineChartCanvas)
	    var lineChartOptions         = areaChartOptions
	    lineChartOptions.datasetFill = false
	    lineChart.Line(areaChartData, lineChartOptions)
			*/



	    //-------------
	    //- PIE CHART -
	    //-------------
	    // Get context with jQuery - using jQuery's .get() method.
	    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
	    var pieChart       = new Chart(pieChartCanvas)
	    var PieData        = [
	      {
	        value    : 700,
	        color    : '#f56954',
	        highlight: '#f56954',
	        label    : 'Soporte técnico'
	      },
	      {
	        value    : 500,
	        color    : '#00a65a',
	        highlight: '#00a65a',
	        label    : 'Redes (Conectividad)'
	      },
	      {
	        value    : 400,
	        color    : '#f39c12',
	        highlight: '#f39c12',
	        label    : 'Soporte Sistemas'
	      },
	      {
	        value    : 600,
	        color    : '#00c0ef',
	        highlight: '#00c0ef',
	        label    : 'Desarrollo de Software'
	      },
	      {
	        value    : 300,
	        color    : '#3c8dbc',
	        highlight: '#3c8dbc',
	        label    : 'Soporte Ofimática'
	      },
	      {
	        value    : 100,
	        color    : '#d2d6de',
	        highlight: '#d2d6de',
	        label    : 'Otro'
	      }
	    ]
	    var pieOptions     = {
	      //Boolean - Whether we should show a stroke on each segment
	      segmentShowStroke    : true,
	      //String - The colour of each segment stroke
	      segmentStrokeColor   : '#fff',
	      //Number - The width of each segment stroke
	      segmentStrokeWidth   : 2,
	      //Number - The percentage of the chart that we cut out of the middle
	      percentageInnerCutout: 50, // This is 0 for Pie charts
	      //Number - Amount of animation steps
	      animationSteps       : 100,
	      //String - Animation easing effect
	      animationEasing      : 'easeOutBounce',
	      //Boolean - Whether we animate the rotation of the Doughnut
	      animateRotate        : true,
	      //Boolean - Whether we animate scaling the Doughnut from the centre
	      animateScale         : false,
	      //Boolean - whether to make the chart responsive to window resizing
	      responsive           : true,
	      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
	      maintainAspectRatio  : true,
	      //String - A legend template
	      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
	    }
	    //Create pie or douhnut chart
	    // You can switch between pie and douhnut using the method below.
	    pieChart.Doughnut(PieData, pieOptions)

	    //-------------
	    //- BAR CHART -
	    //-------------
	    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
	    var barChart                         = new Chart(barChartCanvas)
	    var barChartData                     = areaChartData
	    barChartData.datasets[1].fillColor   = '#00a65a'
	    barChartData.datasets[1].strokeColor = '#00a65a'
	    barChartData.datasets[1].pointColor  = '#00a65a'
	    var barChartOptions                  = {
	      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
	      scaleBeginAtZero        : true,
	      //Boolean - Whether grid lines are shown across the chart
	      scaleShowGridLines      : true,
	      //String - Colour of the grid lines
	      scaleGridLineColor      : 'rgba(0,0,0,.05)',
	      //Number - Width of the grid lines
	      scaleGridLineWidth      : 1,
	      //Boolean - Whether to show horizontal lines (except X axis)
	      scaleShowHorizontalLines: true,
	      //Boolean - Whether to show vertical lines (except Y axis)
	      scaleShowVerticalLines  : true,
	      //Boolean - If there is a stroke on each bar
	      barShowStroke           : true,
	      //Number - Pixel width of the bar stroke
	      barStrokeWidth          : 2,
	      //Number - Spacing between each of the X value sets
	      barValueSpacing         : 5,
	      //Number - Spacing between data sets within X values
	      barDatasetSpacing       : 1,
	      //String - A legend template
	      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
	      //Boolean - whether to make the chart responsive
	      responsive              : true,
	      maintainAspectRatio     : true
	    }

	    barChartOptions.datasetFill = false
	    barChart.Bar(barChartData, barChartOptions)
	  })
	</script>

@endsection
