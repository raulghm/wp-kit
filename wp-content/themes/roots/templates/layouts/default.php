<!doctype html>
<html class="no-js" {{ language_attributes() }}>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ wp_title('|', true, 'right') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{ wp_head() }}
  {{ wp_footer() }}
  <script>var SITE_URL = '{{ site_url() }}';</script>

</head>

<body {{ body_class() }}>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  @yield('content')

</body>
</html>
