<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title> @yield('pageTitle') </title>
        
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">

        
        <!-- CSS ICON -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    </head>

    <body>
        <section class="home-section">
            <div class="topbar">

                    
            </div>
            
            <div class="sectionView">
              @yield('pageView')
            </div>
        </section>


    </body>
</html>
