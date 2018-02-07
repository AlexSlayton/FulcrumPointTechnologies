
<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113683868-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-113683868-1');
    </script>

    <!-- general meta data and SEO -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fulcrum Point Technologies is an Innovation and Solution provider that specializes in Operational and Technology optimization.">
    <meta name="author" content="Fulcrum Point Technologies">
    <meta name="keywords" content="fulcrum point technologies, technology, performance, cloud services, strategic planning, technology services, big data analytics, database services, security, governance, devops, dev ops, project management, vendor management, cloud readiness, it strategy, technology solutions, innovation, solution provider, technology optimization, operational optimization, analytics, hadoop, migration, sql, nosql, voice and data, system data, server, onshore, nearshore, application development, native app, mobile app, cloud, content management system, risk mitigation, performance metrics">
    <link rel="icon" type="image/x-icon" href="/img/FPTfaviconHR.ico">

    <!-- Facebook meta data -->
    <meta property="og:url" content="http://www.FulcrumPointTechnologies.com" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Fulcrum Point Technologies" />
    <meta property="og:description" content="Fulcrum Point Technologies is an Innovation and Solution provider that specializes in Operational and Technology optimization." />
    <meta property="og:image" content="http://www.FulcrumPointTechnologies.com/img/" />

    <title>Fulcrum Point Technologies</title>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="/css/cover.css" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Font Raleway -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">

  </head>

  <body id="page-top">

  <div id="navi">

    @include ('layouts.nav')
    </div>

    @yield ('content')
    
    <!-- Footer -->
    <div class="footerBottom">
    @include ('layouts.footer')
    </div>


   <!--  JavaScript/Jquery links -->
    <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.compatibility.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>

    <script type="text/javascript"></script>

    <!-- <script src="public/jquery-easing/jquery.easing.min.js"></script> -->

    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

    <script src="/js/frontEnd.js" ></script>
    

  </body>
</html>
