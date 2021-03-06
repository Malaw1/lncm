<!DOCTYPE html>
<html lang="en">
<head>
<title>Lims Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/backend_css/DataTables-1.10.16/css/dataTables.bootstrap.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/backend_css/AutoFill-2.2.2/css/autoFill.bootstrap.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/backend_css/Buttons-1.5.1/css/buttons.bootstrap.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/backend_css/Responsive-2.2.1/css/responsive.bootstrap.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/backend_css/RowGroup-1.0.2/css/rowGroup.bootstrap.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-responsive.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/fullcalendar.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/matrix-style.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/matrix-media.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/jquery.gritter.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/backend_css/DataTables/datatables.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/jq-3.2.1/dt-1.10.16/af-2.2.2/b-1.5.1/b-colvis-1.5.1/b-flash-1.5.1/b-html5-1.5.1/r-2.2.1/rg-1.0.2/datatables.min.css"/>
</head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

  @include('layouts.adminLayout.admin_header')
  @include('layouts.adminLayout.admin_sidebar')

  @yield('content')

  @include('layouts.adminLayout.admin_footer')

<script src="{{ asset('js/backend_js/jquery.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/jquery.ui.custom.js') }}"></script> 
<script src="{{ asset('js/backend_js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/jquery.uniform.js') }}"></script> 
<script src="{{ asset('js/backend_js/select2.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/jquery.validate.js') }}"></script> 
<script src="{{ asset('js/backend_js/matrix.js') }}"></script> 
<script src="{{ asset('js/backend_js/matrix.form_validation.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/jq-3.2.1/dt-1.10.16/af-2.2.2/b-1.5.1/b-colvis-1.5.1/b-flash-1.5.1/b-html5-1.5.1/r-2.2.1/rg-1.0.2/datatables.min.js"></script>
<script type="text/javascript" src="{{ asset('js/backend_js/DataTables/datatables.min.js') }}"></script>
</body>
</html>
