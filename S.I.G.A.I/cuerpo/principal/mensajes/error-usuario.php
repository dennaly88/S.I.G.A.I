<!DOCTYPE html>
<html>

<head>




  <title>toastr QUnit Tests</title>
  <link href="toastr.min.css" rel="stylesheet" />
<body>
  <script src="jquery-3.6.0.min.js"></script>
  <script src="toastr.min.js"></script>
  <script>
    toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": false,
      "progressBar": true,
      "positionClass": "toast-top-left",
      "preventDuplicates": false,
      "onclick": true,
      "showDuration": "5",
      "hideDuration": "1",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
    toastr["error"]("<center>Usuario Y Contraseña Incorrecta");
  </script>
</body>
</html>