<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/base.css">
    @yield('search-css')


    <!--JS-->
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}

    <title>KMPortal</title>
</head>
<body>

    <div class="search-bg">

        <div class="crossfade">
            <figure></figure>
            <figure></figure>
            <figure></figure>
            <figure></figure>
            <figure></figure>
          </div>

        <div class="search-section">
            

        <nav class="navbar d-flex justify-content-around" style="box-shadow: none; background-color: transparent;">
            <div class="iium-logo d-flex flex-row flex-wrap">
                <a href="https://www.iium.edu.my/v2/"><img src="https://www.iium.edu.my/v2/wp-content/uploads/2022/06/LOGO-IDENTITI-31012022-1920x240.png" alt="" id="vid"></a>
            </div>
            <div class="soc-med d-flex flex-row-reverse">
                <div class="contact-us"><a class="nav-link" href="https://www.facebook.com/OfficialIIUM/"style="padding: 0; color: white; font-weight: 500;"><strong>Contact Us</strong></a></div>
                <div class="p-2" style="padding:0.65rem !important;"><a class="nav-link" href="https://twitter.com/OfficialIIUM?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" style="padding: 0;"><img src="/images/connectivityW.png" alt=""></a></div>
                
             </div>
        </nav>
    
        @yield('search-container')

        </div> 

    </div>


{{-- 
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="/images/IIUMLib-Welcome-NewStudent.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/images/uia bg trans.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/images/Background 1.jpg" alt="Third slide">
          </div>
        </div>
        <h1>LMAO</h1>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> --}}


        @yield('cluster-container')
    


    <footer class="bg-light text-center text-lg-start" style="background: transparent;">
        <!-- Copyright -->
        <div class="text-center p-3">
            &copy; International Islamic University Malaysia, <script type="text/javascript">document.write( new Date().getFullYear() );</script>
        </div>
        <!-- Copyright -->
      </footer>


    
</body>


</html>