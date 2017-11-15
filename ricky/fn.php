<?php 
function loadcss($plugin){
	global $homepage;
	$css = '';
	foreach ($plugin as $key => $value) {
		switch ($value) {
			case 'bootstrap':
				$css.='<link rel="stylesheet" href="'.$homepage.'plugin/bootstrap/dist/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">';
				break;
			case 'fontawesome':
				$css.='<link rel="stylesheet" href="'.$homepage.'plugin/font-awesome-4.7.0/css/font-awesome.min.css">';
				break;
			case 'style':
				$css.='<link rel="stylesheet" href="'.$homepage.'ricky/style.css">';
				break;
			case 'owlcarousel':
				$css.='<link rel="stylesheet" href="'.$homepage.'plugin/owlcarousel/dist/assets/owl.carousel.min.css">';
				break;
			default:
				break;
		}
	}
	echo $css;
}

    	
 
function loadjs($plugin){
	global $homepage;
	$js = '';
	foreach ($plugin as $key => $value) {
		switch ($value) {
			case 'tinymce':
			$js.='
				<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apikey=jr5wwahic9q3wyaivy6sa3cginkn6d35gfv4fmuifkwzfoc3"></script>
				<script>
				tinymce.init({
				  	selector: "textarea",
			  	  	setup: function (editor) {
				        editor.on("change", function () {
				            editor.save();
				        });
				    },
				    relative_urls : false,
					remove_script_host : false,
					convert_urls : true,
				  	height: 300,
			  		images_upload_url: "tinymceimageupload.php",
					automatic_uploads: false,
				  	menubar: false,
				  	image_reuse_filename:false,
				  	plugins: [
				    	"advlist autolink lists link image charmap print preview anchor textcolor",
				    	"searchreplace visualblocks code fullscreen",
				    	"insertdatetime media table contextmenu paste code help"
				  	],
				  	toolbar: "insert | undo redo |  styleselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | code |  help",
				  	content_css: [
				    	"//fonts.googleapis.com/css?family=Lato:300,300i,400,400i",
				    	"//www.tinymce.com/css/codepen.min.css"
				    ]
				});
				</script>
			';
				break; 
			case 'chart':
				$js.='
				<script type="text/javascript" src="'.$homepage.'js/chart.js"></script>
				';
				break;
			case 'popper':
				$js.='<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>';
				break;
			case 'fancybox':
				$js.='
				<script type="text/javascript" src="'.$homepage.'vendors/fancybox-master/dist/jquery.fancybox.min.js"></script>
				<script type="text/javascript" src="'.$homepage.'vendors/fancybox-master/dist/a.js"></script>
				';
				break;
			case 'owlcarousel':
				$js.='
				<script src="'.$homepage.'plugin/owlcarousel/dist/owl.carousel.min.js"></script>
				';
				break;
			case 'tag':
				$js.='
				<script src="'.$homepage.'vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
				<script>
 					$(document).ready(function() {
        				$("#tags_1, .tags").tagsInput({
          					width: "auto",
          					defaultText: "Multi value"
        				});
      				});
 				</script>
				';
				break;
			case 'jquery':
				$js.='<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>';
				break;
			case 'select2':
				$js.='
				<script src="'.$homepage.'vendors/select2/dist/js/select2.full.min.js"></script>
				<!-- Select2 -->
    			<script>
      			$(document).ready(function() {
        			$(".selectbox").select2({
          				placeholder: "Pilih Data",
          				allowClear: true
        			});
      			});
    			</script>
    			<!-- /Select2 -->
				';
				break;
			case 'bootstrap':
				$js.='<script src="'.$homepage.'plugin/bootstrap/dist/js/bootstrap.min.js"></script>';
				break;
			case 'datatable':
				$js.='
				<script src="'.$homepage.'vendors/datatables.net/js/jquery.dataTables.min.js"></script>
				<script src="'.$homepage.'vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
				<script src="'.$homepage.'vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
				<script src="'.$homepage.'vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
				<script src="'.$homepage.'vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
				<script src="'.$homepage.'vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
				<script src="'.$homepage.'vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
				<script src="'.$homepage.'vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
				<script src="'.$homepage.'vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
				<script src="'.$homepage.'vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
				<script src="'.$homepage.'vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
				<script src="'.$homepage.'vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
				<script>
					var table;
					$(function(){
						table = $("#dataTable, .datatable").DataTable({
							"columnDefs": [{
				        		"searchable": false,
				        		"orderable": false,
				        		"targets": 0
				        	}]
						});
						table.on("order.dt search.dt", function () {
					        table.column(0, {search:"applied", order:"applied"}).nodes().each( function (cell, i) {
					            cell.innerHTML = i+1;
					        } );
					    }).draw();
					});
				</script>
				';
				break;
			case 'nprogress':
				$js.= '
				<script src="'.$homepage.'vendors/nprogress/nprogress.js"></script>
				';
				break;
			case 'icheck':
				$js.= '
				<script src="'.$homepage.'vendors/iCheck/icheck.min.js"></script>
				';
				break;
			case 'pnotify':
				$js.= '
				<script src="'.$homepage.'vendors/pnotify/dist/pnotify.js"></script>
				<script src="'.$homepage.'vendors/pnotify/dist/pnotify.buttons.js"></script>
				<script src="'.$homepage.'vendors/pnotify/dist/pnotify.nonblock.js"></script>
				';
				$js.= isset($_GET['sukses']) ? '
				<script> 
				$(function(){ 
					new PNotify({
					  	title: "'.$_GET["act"].'",
					  	type:"success",
						styling: "bootstrap3",
					  	text: "'.$_GET["sukses"].'",
					  	icon:"fa fa-check-circle"
					});
				});
				</script>':'';
				$js.= isset($_GET['error']) ? '
					<script>
					$(function(){ 
						new PNotify({
						  	title: "'.$_GET["act"].'",
						  	type:"error",
							styling: "bootstrap3",
						  	text: "'.$_GET["error"].'",
						  	icon:"fa fa-times-circle"
						});
					});
					</script>':'';
				break;
			case 'custom-admin':
				$js.= '
				<script src="'.$homepage.'vendors/custom/custom-admin.js"></script>
				';
				break;
			case 'daterangepicker':
				$js.='
				<script src="'.$homepage.'vendors/bootstrap-daterangepicker-master/moment.min.js"></script>
				<script src="'.$homepage.'vendors/bootstrap-daterangepicker-master/daterangepicker.js"></script>
    			<script>
					$(document).ready(function(){
						$("#datepicker").daterangepicker({
							singleDatePicker :true,
							timePickerSeconds: true,
							timePicker24Hour: true,
							timePicker : true,
							calender_style : "picker_2",
							locale :{
								format : "YYYY-MM-DD HH:mm:ss"
							}
						});
					});
    			</script>
				';
				break;
			default:
				break;
		}
	}


	echo $js;

}


