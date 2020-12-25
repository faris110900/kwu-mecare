 <!-- Vendor JS Files -->
 <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
 <script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/counterup/counterup.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
 <script src="https://cdnjs.com/libraries/Chart.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
 <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
 <!-- Template Main JS File -->
 <script src="{{ asset('assets/js/main.js') }}"></script>
 <script>
     AOS.init();
   </script>
@include('sweetalert::alert')
@stack('footer-scripts')