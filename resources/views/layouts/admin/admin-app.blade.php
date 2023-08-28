<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('assets/admin/js/soft-ui-dashboard.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
     <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/admin/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/nucleo-svg.css') }}" rel="stylesheet" />

    <!-- Styles -->
    <link id="pagestyle" href="{{ asset('assets/admin/css/soft-ui-dashboard.css?v=1.1.1') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/soft-ui-dashboard.css') }}" rel="stylesheet">
</head>
<body class="g-sidenav-show  bg-gray-100">
  <!-- Sidebar -->
  @include('layouts.admin.sidebar')
  <!-- End Sidebar -->
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('layouts.admin.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
    @yield('content')

    @include('layouts.admin.footer')
    
    </div>
  </main>
  
</body>
 <!-- Script -->
    <script src="{{ asset('assets/admin/js/core/popper.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/core/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/plugins/smooth-scrollbar.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/plugins/fullcalendar.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/soft-ui-dashboard.min.js?v=1.1.1')}}"></script>
    <script src="{{ asset('assets/admin/js/plugins/smooth-scrollbar.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/plugins/choices.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/plugins/dropzone.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/plugins/quill.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/plugins/multistep-form.js')}}"></script>
    <script src="{{ asset('assets/admin/js/plugins/smooth-scrollbar.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/plugins/datatables.js')}}"></script>
    <script src="{{ asset('assets/admin/js/plugins/sweetalert.min.js')}}"></script>
    <script>
      const dataTableBasic = new simpleDatatables.DataTable("#datatable-basic", {
        searchable: true,
        fixedHeight: true
      });

      const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
        searchable: true,
        fixedHeight: true
      });
    </script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>
    <script>
      var ctx = document.getElementById("chart-bars").getContext("2d");

      new Chart(ctx, {
        type: "bar",
        data: {
          labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
            label: "Sales",
            tension: 0.4,
            borderWidth: 0,
            borderRadius: 4,
            borderSkipped: false,
            backgroundColor: "#fff",
            data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
            maxBarThickness: 6
          }, ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
              },
              ticks: {
                suggestedMin: 0,
                suggestedMax: 500,
                beginAtZero: true,
                padding: 15,
                font: {
                  size: 14,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
                color: "#fff"
              },
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false
              },
              ticks: {
                display: false
              },
            },
          },
        },
      });


      var ctx2 = document.getElementById("chart-line").getContext("2d");

      var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

      gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
      gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
      gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

      var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

      gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
      gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
      gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

      new Chart(ctx2, {
        type: "line",
        data: {
          labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
              label: "Mobile apps",
              tension: 0.4,
              borderWidth: 0,
              pointRadius: 0,
              borderColor: "#cb0c9f",
              borderWidth: 3,
              backgroundColor: gradientStroke1,
              fill: true,
              data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
              maxBarThickness: 6

            },
            {
              label: "Websites",
              tension: 0.4,
              borderWidth: 0,
              pointRadius: 0,
              borderColor: "#3A416F",
              borderWidth: 3,
              backgroundColor: gradientStroke2,
              fill: true,
              data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
              maxBarThickness: 6
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                padding: 10,
                color: '#b2b9bf',
                font: {
                  size: 11,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                color: '#b2b9bf',
                padding: 20,
                font: {
                  size: 11,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
          },
        },
      });


      (function() {
        const container = document.getElementById("globe");
        const canvas = container.getElementsByTagName("canvas")[0];

        const globeRadius = 100;
        const globeWidth = 4098 / 2;
        const globeHeight = 1968 / 2;

        function convertFlatCoordsToSphereCoords(x, y) {
          let latitude = ((x - globeWidth) / globeWidth) * -180;
          let longitude = ((y - globeHeight) / globeHeight) * -90;
          latitude = (latitude * Math.PI) / 180;
          longitude = (longitude * Math.PI) / 180;
          const radius = Math.cos(longitude) * globeRadius;

          return {
            x: Math.cos(latitude) * radius,
            y: Math.sin(longitude) * globeRadius,
            z: Math.sin(latitude) * radius
          };
        }

        function makeMagic(points) {
          const {
            width,
            height
          } = container.getBoundingClientRect();

          // 1. Setup scene
          const scene = new THREE.Scene();
          // 2. Setup camera
          const camera = new THREE.PerspectiveCamera(45, width / height);
          // 3. Setup renderer
          const renderer = new THREE.WebGLRenderer({
            canvas,
            antialias: true
          });
          renderer.setSize(width, height);
          // 4. Add points to canvas
          // - Single geometry to contain all points.
          const mergedGeometry = new THREE.Geometry();
          // - Material that the dots will be made of.
          const pointGeometry = new THREE.SphereGeometry(0.5, 1, 1);
          const pointMaterial = new THREE.MeshBasicMaterial({
            color: "#989db5",
          });

          for (let point of points) {
            const {
              x,
              y,
              z
            } = convertFlatCoordsToSphereCoords(
              point.x,
              point.y,
              width,
              height
            );

            if (x && y && z) {
              pointGeometry.translate(x, y, z);
              mergedGeometry.merge(pointGeometry);
              pointGeometry.translate(-x, -y, -z);
            }
          }

          const globeShape = new THREE.Mesh(mergedGeometry, pointMaterial);
          scene.add(globeShape);

          container.classList.add("peekaboo");

          // Setup orbital controls
          camera.orbitControls = new THREE.OrbitControls(camera, canvas);
          camera.orbitControls.enableKeys = false;
          camera.orbitControls.enablePan = false;
          camera.orbitControls.enableZoom = false;
          camera.orbitControls.enableDamping = false;
          camera.orbitControls.enableRotate = true;
          camera.orbitControls.autoRotate = true;
          camera.position.z = -265;

          function animate() {
            // orbitControls.autoRotate is enabled so orbitControls.update
            // must be called inside animation loop.
            camera.orbitControls.update();
            requestAnimationFrame(animate);
            renderer.render(scene, camera);
          }
          animate();
        }

        function hasWebGL() {
          const gl =
            canvas.getContext("webgl") || canvas.getContext("experimental-webgl");
          if (gl && gl instanceof WebGLRenderingContext) {
            return true;
          } else {
            return false;
          }
        }

        function init() {
          if (hasWebGL()) {
            window
            window.fetch("https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-dashboard-pro/assets/js/points.json")
              .then(response => response.json())
              .then(data => {
                makeMagic(data.points);
              });
          }
        }
        init();
      })();
    </script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>  
    <script>
      if (document.getElementById('edit-deschiption')) {
        var quill = new Quill('#edit-deschiption', {
          theme: 'snow' // Specify theme in configuration
        });
      };

      if (document.getElementById('choices-category')) {
        var element = document.getElementById('choices-category');
        const example = new Choices(element, {
          searchEnabled: false
        });
      };

      if (document.getElementById('choices-sizes')) {
        var element = document.getElementById('choices-sizes');
        const example = new Choices(element, {
          searchEnabled: false
        });
      };

      if (document.getElementById('choices-currency')) {
        var element = document.getElementById('choices-currency');
        const example = new Choices(element, {
          searchEnabled: false
        });
      };

      if (document.getElementById('choices-tags')) {
        var tags = document.getElementById('choices-tags');
        const examples = new Choices(tags, {
          removeItemButton: true
        });

        
      }
  </script>
  <!-- End Script -->
</html>
