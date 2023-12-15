
<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<link rel="icon" href="https://sman1bangkalan.sch.id/wp-content/uploads/2018/03/favicon.png">
		<title>Sistem Informasi Pelanggaran Siswa</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- bootstrap & fontawesome -->

		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/colorbox.min.css" />


		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-rtl.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chosen.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/daterangepicker.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-colorpicker.min.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@50&display=swap" rel="stylesheet">
		<style>
			*{
			font-family: 'Poppins', sans-serif;
			}
			
		</style>

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?php echo base_url(); ?>assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	</head>

	<?php if ($_SESSION['id_hak_akses'] == 1) { ?>

		<body class="no-skin">
		<?php } else if ($_SESSION['id_hak_akses'] == 2) { ?>

			<body class="skin-1">
			<?php } else { ?>

				<body class="skin-1">
				<?php } ?>

				<?php $this->load->view('plus/navbar.php'); ?>

				<div class="main-container ace-save-state" id="main-container">
					<script type="text/javascript">
						try {
							ace.settings.loadState('main-container')
						} catch (e) {}
					</script>

					<div id="sidebar" class="sidebar responsive ace-save-state">
						<script type="text/javascript">
							try {
								ace.settings.loadState('sidebar')
							} catch (e) {}
						</script>

						<div class="sidebar-shortcuts" id="sidebar-shortcuts">
							<!-- <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
								<img src="<?php echo base_url('assets/logos.png')?>" style="width: 80%;padding: 10px">
							</div> -->
							<h5 style="font-weight:bold; color:#0583d2; padding:30px">NAMA SEKOLAH</h5><br/>

						</div><!-- /.sidebar-shortcuts -->

						<?php $this->load->view('plus/menu.php'); ?>

						<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
							<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
						</div>
					</div>

					<?php echo $contents; ?>
				</div>
				</div>
				</div>

				<div class="footer">
					<div class="footer-inner">
						<div class="footer-content">
							<span class="bigger-120">
								<span class="blue bolder">Sekolah </span>
								 &copy; 2023
							</span>
						</div>
					</div>
				</div>

				<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
					<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
				</a>
				</div>

				<div class="modal fade" id="chPassword" role="dialog">
					<div class="modal-dialog modal-md">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Ganti Password</h4>
							</div>
							<div class="modal-body">
								<form method="post" action="<?php echo base_url('index.php/c_auth/chPassword'); ?>">
									<input type="hidden" value="<?php echo $_SESSION['password']; ?>" class="form-control" name="pass">
									<input type="hidden" value="<?php echo $_SESSION['id_user']; ?>" class="form-control" name="id_user">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="bmd-label-floating">Password Lama</label>
												<input type="password" class="form-control" name="pass_lama" required>
												<p id="notif_false" style="color:red;font-size:10pt;"></p>
												<p id="notif_true" style="color:green;font-size:10pt;"></p>
											</div>
											<div class="form-group">
												<label class="bmd-label-floating">Password Baru</label>
												<input type="password" class="form-control" name="pass_baru" required>

											</div>
											<div class="form-group">
												<label class="bmd-label-floating">Confirm Password Baru</label>
												<input type="password" class="form-control" name="pass_confirm" required>
												<p id="notif_confirm_false" style="color:red;font-size:10pt;"></p>
												<p id="notif_confirm_true" style="color:green;font-size:10pt;"></p>
											</div>
										</div>
									</div>
									<button type="submit" class="btn btn-primary pull-right" name="button">Ganti</button>
									<div class="clearfix"></div>
								</form>
							</div>
						</div>
					</div>
				</div>


				<!-- /.main-container -->


				<!-- basic scripts -->

				<!--[if !IE]> -->
				<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/md5/jquery.crypt.js"></script>
				<!-- <![endif]-->

				<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
				<script type="text/javascript">
					if ('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url(); ?>assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
				</script>
				<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

				<!-- page specific plugin scripts -->
				<script src="<?php echo base_url(); ?>assets/js/jquery.colorbox.min.js"></script>

				<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>


		<![endif]-->

				<script src="<?php echo base_url(); ?>assets/js/jquery-ui.custom.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/jquery.easypiechart.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/jquery.sparkline.index.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/jquery.flot.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/jquery.flot.pie.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/jquery.flot.resize.min.js"></script>

				<!-- ace scripts -->
				<script src="<?php echo base_url(); ?>assets/js/ace-elements.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/ace.min.js"></script>


				<!-- inline scripts related to this page -->
				<!-- page specific plugin scripts -->
				<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.bootstrap.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/dataTables.buttons.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/buttons.flash.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/buttons.html5.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/buttons.print.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/buttons.colVis.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/dataTables.select.min.js"></script>

				<!-- page specific plugin scripts -->

				<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
				<script src="<?php echo base_url(); ?>assets/js/jquery-ui.custom.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/chosen.jquery.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/spinbox.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/bootstrap-timepicker.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/moment.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/daterangepicker.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/bootstrap-datetimepicker.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/bootstrap-colorpicker.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/jquery.knob.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/autosize.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/jquery.inputlimiter.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/jquery.maskedinput.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/bootstrap-tag.min.js"></script>




				<script type="text/javascript">
					//ini script table


					$("input[name='pass_lama']").change(function() {
						var pass_lama = $("input[name='pass']").val();
						var pass_baru = $("input[name='pass_lama']").val();
						var strMD5 = $().crypt({
							method: "md5",
							source: pass_baru
						});
						if (pass_lama == strMD5) {
							$("input[name='pass_baru']").show();
							$("input[name='pass_confirm']").show();
							$("button[name='button']").show();
							$('#notif_true').text('Password Sama');
							$('#notif_false').text('');
						} else {
							$("input[name='pass_baru']").hide();
							$("input[name='pass_confirm']").hide();
							$("button[name='button']").hide();
							$('#notif_false').text('Password Tidak Sama');
							$('#notif_true').text('');
						}
					});

					$("input[name='pass_confirm']").change(function() {
						var pass_lama = $("input[name='pass_baru']").val();
						var pass_baru = $("input[name='pass_confirm']").val();
						var strMD51 = $().crypt({
							method: "md5",
							source: pass_lama
						});

						var strMD52 = $().crypt({
							method: "md5",
							source: pass_baru
						});
						if (strMD51 == strMD52) {
							$("button[name='button']").show();
							$('#notif_confirm_true').text('Password Sama');
							$('#notif_confirm_false').text('');
						} else {
							$("button[name='button']").hide();
							$('#notif_confirm_false').text('Password Tidak Sama');
							$('#notif_confirm_true').text('');
						}
					});

					jQuery(function($) {
						//initiate dataTables plugin
						var myTable =
							$('#dynamic-table')
							//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
							.DataTable({
								bAutoWidth: false,
								"aoColumnDefs": [{
										"aTargets": [0, 1],
										"bSortable": true
									},
									{
										"aTargets": ['_all'],
										"bSortable": false
									}
								],
								"aaSorting": [],


								//"bProcessing": true,
								//"bServerSide": true,
								//"sAjaxSource": "http://127.0.0.1/table.php"	,

								//,
								//"sScrollY": "200px",
								//"bPaginate": false,

								//"sScrollX": "100%",
								//"sScrollXInner": "120%",
								//"bScrollCollapse": true,
								//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
								//you may want to wrap the table inside a "div.dataTables_borderWrap" element

								//"iDisplayLength": 50


								select: {
									style: 'multi'
								}
							});



						$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

						new $.fn.dataTable.Buttons(myTable, {
							buttons: [{
									"extend": "colvis",
									"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
									"className": "btn btn-white btn-primary btn-bold",
									columns: ':not(:first):not(:last)'
								},
								{
									"extend": "copy",
									"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
									"className": "btn btn-white btn-primary btn-bold"
								},
								{
									"extend": "csv",
									"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
									"className": "btn btn-white btn-primary btn-bold"
								},
								{
									"extend": "excel",
									"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
									"className": "btn btn-white btn-primary btn-bold"
								},
								{
									"extend": "pdf",
									"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
									"className": "btn btn-white btn-primary btn-bold"
								},
								{
									"extend": "print",
									"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
									"className": "btn btn-white btn-primary btn-bold",
									autoPrint: false,
									message: 'This print was produced using the Print button for DataTables'
								}
							]
						});
						myTable.buttons().container().appendTo($('.tableTools-container'));

						//style the message box
						var defaultCopyAction = myTable.button(1).action();
						myTable.button(1).action(function(e, dt, button, config) {
							defaultCopyAction(e, dt, button, config);
							$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
						});


						var defaultColvisAction = myTable.button(0).action();
						myTable.button(0).action(function(e, dt, button, config) {

							defaultColvisAction(e, dt, button, config);


							if ($('.dt-button-collection > .dropdown-menu').length == 0) {
								$('.dt-button-collection')
									.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
									.find('a').attr('href', '#').wrap("<li />")
							}
							$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
						});

						////

						setTimeout(function() {
							$($('.tableTools-container')).find('a.dt-button').each(function() {
								var div = $(this).find(' > div').first();
								if (div.length == 1) div.tooltip({
									container: 'body',
									title: div.parent().text()
								});
								else $(this).tooltip({
									container: 'body',
									title: $(this).text()
								});
							});
						}, 500);





						myTable.on('select', function(e, dt, type, index) {
							if (type === 'row') {
								$(myTable.row(index).node()).find('input:checkbox').prop('checked', true);
							}
						});
						myTable.on('deselect', function(e, dt, type, index) {
							if (type === 'row') {
								$(myTable.row(index).node()).find('input:checkbox').prop('checked', false);
							}
						});


						//table checkboxes
						$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

						//select/deselect all rows according to table header checkbox
						$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function() {
							var th_checked = this.checked; //checkbox inside "TH" table header

							$('#dynamic-table').find('tbody > tr').each(function() {
								var row = this;
								if (th_checked) myTable.row(row).select();
								else myTable.row(row).deselect();
							});
						});

						//select/deselect a row when the checkbox is checked/unchecked
						$('#dynamic-table').on('click', 'td input[type=checkbox]', function() {
							var row = $(this).closest('tr').get(0);
							if (this.checked) myTable.row(row).deselect();
							else myTable.row(row).select();
						});



						$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
							e.stopImmediatePropagation();
							e.stopPropagation();
							e.preventDefault();
						});



						//And for the first simple table, which doesn't have TableTools or dataTables
						//select/deselect all rows according to table header checkbox
						var active_class = 'active';
						$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function() {
							var th_checked = this.checked; //checkbox inside "TH" table header

							$(this).closest('table').find('tbody > tr').each(function() {
								var row = this;
								if (th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
								else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
							});
						});

						//select/deselect a row when the checkbox is checked/unchecked
						$('#simple-table').on('click', 'td input[type=checkbox]', function() {
							var $row = $(this).closest('tr');
							if ($row.is('.detail-row ')) return;
							if (this.checked) $row.addClass(active_class);
							else $row.removeClass(active_class);
						});



						/********************************/
						//add tooltip for small view action buttons in dropdown menu
						$('[data-rel="tooltip"]').tooltip({
							placement: tooltip_placement
						});

						//tooltip placement on right or left
						function tooltip_placement(context, source) {
							var $source = $(source);
							var $parent = $source.closest('table')
							var off1 = $parent.offset();
							var w1 = $parent.width();

							var off2 = $source.offset();
							//var w2 = $source.width();

							if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2)) return 'right';
							return 'left';
						}




						/***************/
						$('.show-details-btn').on('click', function(e) {
							e.preventDefault();
							$(this).closest('tr').next().toggleClass('open');
							$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
						});
						/***************/





						/**
						//add horizontal scrollbars to a simple table
						$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
						  {
							horizontal: true,
							styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
							size: 2000,
							mouseWheelLock: true
						  }
						).css('padding-top', '12px');
						*/

					});

					jQuery(function($) {
						var $overflow = '';
						var colorbox_params = {
							rel: 'colorbox',
							reposition: true,
							scalePhotos: true,
							scrolling: false,
							previous: '<i class="ace-icon fa fa-arrow-left"></i>',
							next: '<i class="ace-icon fa fa-arrow-right"></i>',
							close: '&times;',
							current: '{current} of {total}',
							maxWidth: '100%',
							maxHeight: '100%',
							onOpen: function() {
								$overflow = document.body.style.overflow;
								document.body.style.overflow = 'hidden';
							},
							onClosed: function() {
								document.body.style.overflow = $overflow;
							},
							onComplete: function() {
								$.colorbox.resize();
							}
						};

						$('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
						$("#cboxLoadingGraphic").html("<i class='ace-icon fa fa-spinner orange fa-spin'></i>"); //let's add a custom loading icon


						$(document).one('ajaxloadstart.page', function(e) {
							$('#colorbox, #cboxOverlay').remove();
						});
					})


					jQuery(function($) {
						$('.easy-pie-chart.percentage').each(function() {
							var $box = $(this).closest('.infobox');
							var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
							var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
							var size = parseInt($(this).data('size')) || 50;
							$(this).easyPieChart({
								barColor: barColor,
								trackColor: trackColor,
								scaleColor: false,
								lineCap: 'butt',
								lineWidth: parseInt(size / 10),
								animate: ace.vars['old_ie'] ? false : 1000,
								size: size
							});
						})

						$('.sparkline').each(function() {
							var $box = $(this).closest('.infobox');
							var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
							$(this).sparkline('html', {
								tagValuesAttribute: 'data-values',
								type: 'bar',
								barColor: barColor,
								chartRangeMin: $(this).data('min') || 0
							});
						});


						//flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
						//but sometimes it brings up errors with normal resize event handlers
						$.resize.throttleWindow = false;

						var placeholder = $('#piechart-placeholder').css({
							'width': '90%',
							'min-height': '150px'
						});
						var data = [{
								label: "social networks",
								data: 38.7,
								color: "#68BC31"
							},
							{
								label: "search engines",
								data: 24.5,
								color: "#2091CF"
							},
							{
								label: "ad campaigns",
								data: 8.2,
								color: "#AF4E96"
							},
							{
								label: "direct traffic",
								data: 18.6,
								color: "#DA5430"
							},
							{
								label: "other",
								data: 10,
								color: "#FEE074"
							}
						]

						function drawPieChart(placeholder, data, position) {
							$.plot(placeholder, data, {
								series: {
									pie: {
										show: true,
										tilt: 0.8,
										highlight: {
											opacity: 0.25
										},
										stroke: {
											color: '#fff',
											width: 2
										},
										startAngle: 2
									}
								},
								legend: {
									show: true,
									position: position || "ne",
									labelBoxBorderColor: null,
									margin: [-30, 15]
								},
								grid: {
									hoverable: true,
									clickable: true
								}
							})
						}
						drawPieChart(placeholder, data);

						/**
						we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
						so that's not needed actually.
						*/
						placeholder.data('chart', data);
						placeholder.data('draw', drawPieChart);


						//pie chart tooltip example
						var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
						var previousPoint = null;

						placeholder.on('plothover', function(event, pos, item) {
							if (item) {
								if (previousPoint != item.seriesIndex) {
									previousPoint = item.seriesIndex;
									var tip = item.series['label'] + " : " + item.series['percent'] + '%';
									$tooltip.show().children(0).text(tip);
								}
								$tooltip.css({
									top: pos.pageY + 10,
									left: pos.pageX + 10
								});
							} else {
								$tooltip.hide();
								previousPoint = null;
							}

						});

						$(document).one('ajaxloadstart.page', function(e) {
							$tooltip.remove();
						});




						var d1 = [];
						for (var i = 0; i < Math.PI * 2; i += 0.5) {
							d1.push([i, Math.sin(i)]);
						}

						var d2 = [];
						for (var i = 0; i < Math.PI * 2; i += 0.5) {
							d2.push([i, Math.cos(i)]);
						}

						var d3 = [];
						for (var i = 0; i < Math.PI * 2; i += 0.2) {
							d3.push([i, Math.tan(i)]);
						}


						var sales_charts = $('#sales-charts').css({
							'width': '100%',
							'height': '220px'
						});
						$.plot("#sales-charts", [{
								label: "Domains",
								data: d1
							},
							{
								label: "Hosting",
								data: d2
							},
							{
								label: "Services",
								data: d3
							}
						], {
							hoverable: true,
							shadowSize: 0,
							series: {
								lines: {
									show: true
								},
								points: {
									show: true
								}
							},
							xaxis: {
								tickLength: 0
							},
							yaxis: {
								ticks: 10,
								min: -2,
								max: 2,
								tickDecimals: 3
							},
							grid: {
								backgroundColor: {
									colors: ["#fff", "#fff"]
								},
								borderWidth: 1,
								borderColor: '#555'
							}
						});


						$('#recent-box [data-rel="tooltip"]').tooltip({
							placement: tooltip_placement
						});

						function tooltip_placement(context, source) {
							var $source = $(source);
							var $parent = $source.closest('.tab-content')
							var off1 = $parent.offset();
							var w1 = $parent.width();

							var off2 = $source.offset();
							//var w2 = $source.width();

							if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2)) return 'right';
							return 'left';
						}


						$('.dialogs,.comments').ace_scroll({
							size: 300
						});


						//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
						//so disable dragging when clicking on label
						var agent = navigator.userAgent.toLowerCase();
						if (ace.vars['touch'] && ace.vars['android']) {
							$('#tasks').on('touchstart', function(e) {
								var li = $(e.target).closest('#tasks li');
								if (li.length == 0) return;
								var label = li.find('label.inline').get(0);
								if (label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation();
							});
						}

						$('#tasks').sortable({
							opacity: 0.8,
							revert: true,
							forceHelperSize: true,
							placeholder: 'draggable-placeholder',
							forcePlaceholderSize: true,
							tolerance: 'pointer',
							stop: function(event, ui) {
								//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
								$(ui.item).css('z-index', 'auto');
							}
						});
						$('#tasks').disableSelection();
						$('#tasks input:checkbox').removeAttr('checked').on('click', function() {
							if (this.checked) $(this).closest('li').addClass('selected');
							else $(this).closest('li').removeClass('selected');
						});


						//show the dropdowns on top or bottom depending on window height and menu position
						$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
							var offset = $(this).offset();

							var $w = $(window)
							if (offset.top > $w.scrollTop() + $w.innerHeight() - 100)
								$(this).addClass('dropup');
							else $(this).removeClass('dropup');
						});

					});
				</script>

				</body>

	</html>

