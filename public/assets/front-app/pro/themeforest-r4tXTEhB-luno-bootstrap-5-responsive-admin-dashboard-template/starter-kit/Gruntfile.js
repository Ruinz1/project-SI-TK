module.exports = function(grunt) {
const sass = require('node-sass');
grunt.initConfig({
    sass: {
        options: {
            implementation: sass,
            includePaths: ["node_modules/bootstrap-sass/assets/stylesheets"],
        },
        dist: {
            options: {
                outputStyle: "compressed",
            },
            files: [{
                "dist/assets/css/luno.style.min.css":               ["scss/main.scss"],
                "dist/assets/css/onepage.kit.min.css":              ["scss/onepage-kit.scss"],
                "dist/assets/css/onepage.style.min.css":            ["scss/landing-onepage.scss"],
                "dist/hospital/landing/assets/css/hospital.style.min.css":           ["scss/landing-hospital.scss"],

                // plugin scss file
                "dist/assets/css/chartist.min.css":                 ["scss/plugin/chartist.scss"],
                "dist/assets/css/jkanban.min.css":                  ["scss/plugin/jkanban.scss"],

                // plugin css file node modules path
                "dist/assets/css/fullcalendar.min.css":             ["node_modules/fullcalendar/main.min.css"],
                "dist/assets/css/dataTables.min.css":               ["node_modules/datatables.net-bs5/css/dataTables.bootstrap5.css"],
                "dist/assets/css/jsgrid.min.css":                   ["node_modules/jsgrid/dist/jsgrid.css"],
                "dist/assets/css/summernote.min.css":               ["node_modules/summernote/dist/summernote.css"],
                "dist/assets/css/dropify.min.css":                  ["node_modules/dropify/dist/css/dropify.min.css"],
                "dist/assets/css/select2.min.css":                  ["node_modules/select2/dist/css/select2.css"],
                "dist/assets/css/sweetalert2.min.css":              ["node_modules/sweetalert2/dist/sweetalert2.css"],
                "dist/assets/css/dropify.min.css":                  ["node_modules/dropify/dist/css/dropify.css"],
                "dist/assets/css/skedtape.min.css":                 ["node_modules/jquery-sked-tape/dist/jquery.skedTape.css"],
                "dist/assets/css/cropper.min.css":                  ["node_modules/cropper/dist/cropper.css"],
                "dist/assets/css/fancybox.min.css":                 ["node_modules/jquery.fancybox/source/jquery.fancybox.css"],

                "dist/assets/css/daterangepicker.min.css":          ["node_modules/daterangepicker/daterangepicker.css"],
                "dist/assets/css/bootstrapdatepicker.min.css":      ["node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"],
                "dist/assets/css/flatpickr.min.css":                ["node_modules/flatpickr/dist/flatpickr.css"],
                "dist/assets/css/nouislider.min.css":               ["node_modules/nouislider/dist/nouislider.min.css"],
                "dist/assets/css/rangeslider.min.css":              ["node_modules/ion-rangeslider/css/ion.rangeSlider.min.css"],
                "dist/assets/css/jkanban.min.css":                  ["node_modules/jkanban/dist/jkanban.css"],
                "dist/assets/css/jquerysteps.min.css":              ["node_modules/jquery.steps/dist/jquery-steps.css"],
                "dist/assets/css/x-editable.min.css":               ["node_modules/x-editable-4-bs4/dist/bootstrap4-editable/css/bootstrap-editable.css"],
                "dist/assets/css/swiper.min.css":                   ["node_modules/swiper/swiper-bundle.min.css"],

                "dist/assets/css/tuicalendar.min.css":              ["dist/assets/plugin/tui-calendar/calendar.css"],
                "dist/assets/css/tabledragger.min.css":             ["dist/assets/plugin/table-dragger/table-dragger.min.css"],
            },],
        },
    },
    uglify: {
        my_target: {
            files: {

                // Project core js file bundle
                "dist/assets/bundles/libscripts.bundle.js":         [
                    "node_modules/jquery/dist/jquery.js", // jQuery plugin file
                    "node_modules/bootstrap/dist/js/bootstrap.bundle.js", // Bootstrap js file
                    "dist/assets/plugin/colorpicker/colorpicker.js",
                    "dist/assets/js/template.js" // Colorpicker js file
                ],
                
                // Chart plugin Js file node modules path
                "dist/assets/bundles/apexcharts.bundle.js":         ["node_modules/apexcharts/dist/apexcharts.min.js"],
                "dist/assets/bundles/chartist.bundle.js":           ["node_modules/chartist/dist/chartist.js"],
                "dist/assets/bundles/jqueryknob.bundle.js":         ["node_modules/jquery-knob/dist/jquery.knob.min.js"],
                "dist/assets/bundles/sparkline.bundle.js":          ["node_modules/jquery-sparkline/jquery.sparkline.js"],

                // Form plugin Js file node modules path
                "dist/assets/bundles/summernote.bundle.js":         ["node_modules/summernote/dist/summernote.min.js"],
                "dist/assets/bundles/dropify.bundle.js":            ["node_modules/dropify/dist/js/dropify.min.js"],
                "dist/assets/bundles/select2.bundle.js":            ["node_modules/select2/dist/js/select2.js"],
                "dist/assets/bundles/sweetalert2.bundle.js":        ["node_modules/sweetalert2/dist/sweetalert2.all.min.js"],
                "dist/assets/bundles/daterangepicker.bundle.js":    ["node_modules/daterangepicker/moment.min.js", "node_modules/daterangepicker/daterangepicker.js"],
                "dist/assets/bundles/bootstrapdatepicker.bundle.js":["node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"],
                "dist/assets/bundles/rangeslider.bundle.js":        ["node_modules/ion-rangeslider/js/ion.rangeSlider.js"],
                "dist/assets/bundles/toastr.bundle.js":             ["node_modules/toastr/build/toastr.min.js"],

                // More Plugin Js file node modules path
                "dist/assets/bundles/fullcalendar.bundle.js":       ["node_modules/fullcalendar/main.min.js"],
                "dist/assets/bundles/dataTables.bundle.js":         ["node_modules/datatables.net/js/jquery.dataTables.js","node_modules/datatables.net-bs5/js/dataTables.bootstrap5.js","node_modules/datatables.net-responsive/js/dataTables.responsive.js"],
                "dist/assets/bundles/jsgrid.bundle.js":             ["node_modules/jsgrid/dist/jsgrid.js"],
                "dist/assets/bundles/nestable.bundle.js":           ["node_modules/jquery-nestable/jquery.nestable.js"],
                "dist/assets/bundles/owlcarousel.bundle.js":        ["node_modules/owl.carousel/dist/owl.carousel.min.js"],
                "dist/assets/bundles/masonry.bundle.js":            ["node_modules/masonry-layout/dist/masonry.pkgd.js"],
                "dist/assets/bundles/nouislider.bundle.js":         ["node_modules/nouislider/dist/nouislider.min.js"],
                "dist/assets/bundles/fancybox.bundle.js":           ["node_modules/jquery.fancybox/source/jquery.fancybox.js"],
                "dist/assets/bundles/skedtape.bundle.js":           ["node_modules/jquery-sked-tape/dist/jquery.skedTape.js"],
                "dist/assets/bundles/typedjs.bundle.js":            ["node_modules/typed.js/lib/typed.js","node_modules/typed.js/assets/demos.js"],
                "dist/assets/bundles/jquerycounterup.bundle.js":    ["node_modules/waypoints/lib/jquery.waypoints.js","node_modules/jquery.counterup/jquery.counterup.js"],
                "dist/assets/bundles/cropper.bundle.js":            ["node_modules/cropper/dist/cropper.min.js"],
                "dist/assets/bundles/clipboard.bundle.js":          ["node_modules/clipboard/dist/clipboard.min.js"],
                "dist/assets/bundles/flatpickr.bundle.js":          ["node_modules/flatpickr/dist/flatpickr.js"],
                "dist/assets/bundles/inputmask.bundle.js":          ["node_modules/inputmask/dist/inputmask.js"],
                "dist/assets/bundles/bs-maxlength.bundle.js":       ["node_modules/bootstrap-maxlength/dist/bootstrap-maxlength.js"],
                "dist/assets/bundles/bootstraptagsinput.bundle.js": ["node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.js"],
                "dist/assets/bundles/multiselectsplitter.bundle.js":["node_modules/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.js"],
                "dist/assets/bundles/jkanban.bundle.js":            ["node_modules/jkanban/dist/jkanban.js"],
                "dist/assets/bundles/jquerysteps.bundle.js":        ["node_modules/jquery.steps/dist/jquery-steps.js"],
                "dist/assets/bundles/swiper.bundle.js":             ["node_modules/swiper/swiper-bundle.min.js"],

                "dist/assets/bundles/x-editable.bundle.js":         ["dist/assets/plugin/x-editable/moment.min.js","node_modules/x-editable-4-bs4/dist/bootstrap4-editable/js/bootstrap-editable.min.js"],
                "dist/assets/bundles/tabledragger.bundle.js":       ["dist/assets/plugin/table-dragger/table-dragger.min.js"],
                "dist/assets/bundles/invoice.bundle.js":            ["dist/assets/plugin/invoice/beacon.min.js","dist/assets/plugin/invoice/example.js"],
                "dist/assets/bundles/tui-calendar.bundle.js":       ["dist/assets/plugin/tui-calendar/tui-code-snippet.min.js","dist/assets/plugin/tui-calendar/tui-time-picker.min.js","dist/assets/plugin/tui-calendar/tui-date-picker.min.js","dist/assets/plugin/tui-calendar/moment.min.js","dist/assets/plugin/tui-calendar/chance.min.js","dist/assets/plugin/tui-calendar/tui-calendar.js","dist/assets/plugin/tui-calendar/calendars.js","dist/assets/plugin/tui-calendar/schedules.js","dist/assets/plugin/tui-calendar/app.js",],
            },
        },
    },
});
grunt.loadNpmTasks("grunt-sass");
grunt.loadNpmTasks('grunt-contrib-uglify');

grunt.registerTask("buildcss", ["sass"]);	
grunt.registerTask("buildjs", ["uglify"]);
};