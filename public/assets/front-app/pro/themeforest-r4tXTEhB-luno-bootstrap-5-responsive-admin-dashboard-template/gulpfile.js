var gulp = require('gulp');
var concat = require('gulp-concat');
var sass = require('gulp-sass')(require('sass'));
var rename = require('gulp-rename');

gulp.task('js', function (done) {
    // array of all the js paths you want to bundle.
    var scriptSourcesArr = [
		{
			fileName: "libscripts.bundle.js",
			dest: "dist/assets/bundles",
			source: [
				"node_modules/jquery/dist/jquery.js", // jQuery plugin file
				"node_modules/bootstrap/dist/js/bootstrap.bundle.js", // Bootstrap js file
				"dist/assets/plugin/colorpicker/colorpicker.js",
				"dist/assets/js/template.js" // Colorpicker js file
			]
		},
		{
			fileName: "apexcharts.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/apexcharts/dist/apexcharts.min.js"]
		},
		{
			fileName: "chartist.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/chartist/dist/chartist.js"]
		},
		{
			fileName: "jqueryknob.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/jquery-knob/dist/jquery.knob.min.js"]
		},
		{
			fileName: "sparkline.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/jquery-sparkline/jquery.sparkline.js"]
		},
		{
			fileName: "summernote.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/summernote/dist/summernote.min.js"]
		},
		{
			fileName: "dropify.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/dropify/dist/js/dropify.min.js"]
		},
		{
			fileName: "select2.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/select2/dist/js/select2.js"]
		},
		{
			fileName: "sweetalert2.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/sweetalert2/dist/sweetalert2.all.min.js"]
		},
		{
			fileName: "daterangepicker.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/daterangepicker/moment.min.js", "node_modules/daterangepicker/daterangepicker.js"]
		},
		{
			fileName: "bootstrapdatepicker.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"]
		},
		{
			fileName: "rangeslider.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/ion-rangeslider/js/ion.rangeSlider.js"]
		},
		{
			fileName: "toastr.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/toastr/build/toastr.min.js"]
		},
		{
			fileName: "fullcalendar.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/fullcalendar/main.min.js"]
		},
		{
			fileName: "dataTables.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/datatables.net/js/jquery.dataTables.js","node_modules/datatables.net-bs5/js/dataTables.bootstrap5.js","node_modules/datatables.net-responsive/js/dataTables.responsive.js"]
		},
		{
			fileName: "jsgrid.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/jsgrid/dist/jsgrid.js"]
		},
		{
			fileName: "nestable.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/jquery-nestable/jquery.nestable.js"]
		},
		{
			fileName: "owlcarousel.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/owl.carousel/dist/owl.carousel.min.js"]
		},
		{
			fileName: "masonry.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/masonry-layout/dist/masonry.pkgd.js"]
		},
		{
			fileName: "nouislider.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/nouislider/dist/nouislider.min.js"]
		},
		{
			fileName: "fancybox.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/jquery.fancybox/source/jquery.fancybox.js"]
		},
		{
			fileName: "skedtape.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/jquery-sked-tape/dist/jquery.skedTape.js"]
		},
		{
			fileName: "typedjs.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/typed.js/lib/typed.js","node_modules/typed.js/assets/demos.js"]
		},
		{
			fileName: "jquerycounterup.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/waypoints/lib/jquery.waypoints.js","node_modules/jquery.counterup/jquery.counterup.js"]
		},
		{
			fileName: "cropper.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/cropper/dist/cropper.min.js"]
		},
		{
			fileName: "clipboard.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/clipboard/dist/clipboard.min.js"]
		},
		{
			fileName: "flatpickr.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/flatpickr/dist/flatpickr.js"]
		},
		{
			fileName: "inputmask.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/inputmask/dist/inputmask.js"]
		},
		{
			fileName: "bs-maxlength.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/bootstrap-maxlength/dist/bootstrap-maxlength.js"]
		},
		{
			fileName: "bootstraptagsinput.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.js"]
		},
		{
			fileName: "multiselectsplitter.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.js"]
		},
		{
			fileName: "jkanban.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/jkanban/dist/jkanban.js"]
		},
		{
			fileName: "jquerysteps.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/jquery.steps/dist/jquery-steps.js"]
		},
		{
			fileName: "jquerysteps.bundle.js",
			dest: "dist/assets/bundles",
			source: ["node_modules/jquery.steps/dist/jquery-steps.js"]
		},
		{
			fileName: "x-editable.bundle.js",
			dest: "dist/assets/bundles",
			source: ["dist/assets/plugin/x-editable/moment.min.js","node_modules/x-editable-4-bs4/dist/bootstrap4-editable/js/bootstrap-editable.min.js"]
		},
		{
			fileName: "tabledragger.bundle.js",
			dest: "dist/assets/bundles",
			source: ["dist/assets/plugin/table-dragger/table-dragger.min.js"]
		},
		{
			fileName: "invoice.bundle.js",
			dest: "dist/assets/bundles",
			source: ["dist/assets/plugin/invoice/beacon.min.js","dist/assets/plugin/invoice/example.js"]
		},
		{
			fileName: "tui-calendar.bundle.js",
			dest: "dist/assets/bundles",
			source: ["dist/assets/plugin/tui-calendar/tui-code-snippet.min.js","dist/assets/plugin/tui-calendar/tui-time-picker.min.js","dist/assets/plugin/tui-calendar/tui-date-picker.min.js","dist/assets/plugin/tui-calendar/moment.min.js","dist/assets/plugin/tui-calendar/chance.min.js","dist/assets/plugin/tui-calendar/tui-calendar.js","dist/assets/plugin/tui-calendar/calendars.js","dist/assets/plugin/tui-calendar/schedules.js","dist/assets/plugin/tui-calendar/app.js"]
		},
	];
	
	scriptSourcesArr.forEach(function(gulpObject) {
		gulp.src(gulpObject.source)
        // name of the new file all your js files are to be bundled to.
        .pipe(concat(gulpObject.fileName))
        // the destination where the new bundled file is going to be saved to.
        .pipe(gulp.dest(gulpObject.dest));
    });
    done();
});

gulp.task('css', function (done) {
	var scssSourcesArr = [
		{
			fileName: "luno.style.min.css",
			dest: "dist/assets/css",
			source: ["scss/main.scss"]
		},
		{
			fileName: "chartist.min.css",
			dest: "dist/assets/css",
			source: ["scss/plugin/chartist.scss"]
		},
		{
			fileName: "jkanban.min.css",
			dest: "dist/assets/css",
			source: ["node_modules/jkanban/dist/jkanban.css"]
		},
		{
			fileName: "fullcalendar.min.css",
			dest: "dist/assets/css",
			source: ["node_modules/fullcalendar/main.min.css"]
		},
		{
			fileName: "dataTables.min.css",
			dest: "dist/assets/css",
			source: ["node_modules/datatables.net-bs5/css/dataTables.bootstrap5.css"]
		},
		{
			fileName: "jsgrid.min.css",
			dest: "dist/assets/css",
			source: ["node_modules/jsgrid/dist/jsgrid.css"]
		},
		{
			fileName: "summernote.min.css",
			dest: "dist/assets/css",
			source: ["node_modules/summernote/dist/summernote.css"]
		},
		{
			fileName: "dropify.min.css",
			dest: "dist/assets/css",
			source: ["node_modules/dropify/dist/css/dropify.min.css"]
		},
		{
			fileName: "select2.min.css",
			dest: "dist/assets/css",
			source: ["node_modules/select2/dist/css/select2.css"]
		},
		{
			fileName: "sweetalert2.min.css",
			dest: "dist/assets/css",
			source: ["node_modules/sweetalert2/dist/sweetalert2.css"]
		},
		{
			fileName: "skedtape.min.css",
			dest: "dist/assets/css",
			source: ["node_modules/jquery-sked-tape/dist/jquery.skedTape.css"]
		},
		{
			fileName: "cropper.min.css",
			dest: "dist/assets/css",
			source: ["node_modules/cropper/dist/cropper.css"]
		},
		{
			fileName: "daterangepicker.min.css",
			dest: "dist/assets/css",
			source: ["node_modules/daterangepicker/daterangepicker.css"]
		},
		{
			fileName: "bootstrapdatepicker.min.css",
			dest: "dist/assets/css",
			source: ["node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"]
		},
		{
			fileName: "flatpickr.min.css",
			dest: "dist/assets/css",
			source: ["node_modules/flatpickr/dist/flatpickr.css"]
		},
		{
			fileName: "nouislider.min.css",
			dest: "dist/assets/css",
			source: ["node_modules/nouislider/dist/nouislider.min.css"]
		},
		{
			fileName: "rangeslider.min.css",
			dest: "dist/assets/css",
			source: ["node_modules/ion-rangeslider/css/ion.rangeSlider.min.css"]
		},
		{
			fileName: "jquerysteps.min.css",
			dest: "dist/assets/css",
			source: ["node_modules/jquery.steps/dist/jquery-steps.css"]
		},
		{
			fileName: "x-editable.min.css",
			dest: "dist/assets/css",
			source: ["node_modules/x-editable-4-bs4/dist/bootstrap4-editable/css/bootstrap-editable.css"]
		},
		{
			fileName: "tuicalendar.min.css",
			dest: "dist/assets/css",
			source: ["dist/assets/plugin/tui-calendar/calendar.css"]
		},
		{
			fileName: "tabledragger.min.css",
			dest: "dist/assets/css",
			source: ["dist/assets/plugin/table-dragger/table-dragger.min.css"]
		}
	]
	scssSourcesArr.forEach(function(gulpObject) {
		gulp.src(gulpObject.source)
        .pipe(sass({outputStyle: 'compressed'}))
		.pipe(rename(gulpObject.fileName))
        .pipe(gulp.dest(gulpObject.dest));
	});
	
	
	
	done();
});

gulp.task('default', gulp.series('js','css'));