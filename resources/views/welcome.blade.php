<!DOCTYPE html>
<html>
<title>HOME</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous">
<link rel="stylesheet" href="4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">


<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

    body, html {
        height: 100%;
        line-height: 1.8;
    }

    /* Full height image header */
    .bgimg-1 {
        background-position: center;
        background-size: cover;
        background-image: url("images/yyyt.jpg");

        /*padding-bottom: -2px;*/
        /*margin-top: 0px;*/
        /*opacity: 0.5;*/
        min-height: 100%;
    }

    .w3-bar .w3-button {
        padding: 16px;
    }
    footer {
      padding-top: 5rem;
      padding-bottom: 5rem;
        /*background-image: url("images/zzx.png");*/
      background-color: rgba(185, 153, 0, 0.82);
      color: #005d09;
    }
/*.foot{*/
/*    background-color: #1c7430;*/
/*}*/


</style>
<body>
{{--<audio src="elvis.ogg" controls preload="auto"></audio>--}}
<!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar" style="margin-top: -20px; height: 75px;">
        <div style="margin: 15px; font-size: 150%;"><a href="{{ url('/') }}" class="w3-bar-item w3-button w3-wide" >IMDAL</a></div>
        <!-- Right-sided navbar links -->
        <div class="w3-right w3-hide-small" ></i>

            @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <div ><a href="{{ url('/home') }}" class="text-sm text-black-50 underline"><i class="fa fa-home" style="margin-right: 20px; font-size: x-large">HOME </i></a></div>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-black-50 underline">
                                          <i class="fa fa-envelope" style="margin-right: 20px; font-size: x-large">Log in</i>
                                    </a>


                            @endauth

                        </div>

                    @endif
        </div>
        <!-- Hide right-floated links on small screens and replace them with a menu icon -->
{{--        <ul class="navbar-nav ml-auto" class="w3-bar-item w3-button">--}}


{{--            <a  class="dropdown-item" href="{{ route('logout') }}" style="margin-top: 13px"--}}
{{--                onclick="event.preventDefault();--}}
{{--                                                                                 document.getElementById('logout-form').submit();">--}}
{{--                <i class="fa fa-envelope"></i>--}}
{{--                {{ __('Logout') }}--}}
{{--            </a>--}}

{{--            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                @csrf--}}
{{--            </form>--}}

{{--        </ul>--}}
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>



<br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif




            </div>


        </div>
    </div>
</div>


<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" class="w3-image">
        <p id="caption" class="w3-opacity w3-large"></p>
    </div>
</div>




<!-- Header with full-height image -->


<header class="bgimg-1  w3-display-container w3-grayscale-min"  id="home" style="margin-top: -10px">
    <br>

{{--        <span class="w3-xxlarge w3-hide-large w3-hide-medium">Start something that matters</span><br>--}}
    <div class="alert alert-danger"  style="color: white; width: 10px; margin-left: 25px ;margin-bottom: 30px;   color: #000000; font-family:Copperplate,Papyrus,fantasy; width: 1450px;" >
    <span class="w3-large" ><span style=" font-size:x-large;">It is worth noting that the nature of human resources work is suitable for all businesses, and the world is not without a company that needs this important section in it, accordingly, our</span> <spaan style="font-size: xxx-large; color: #b99900 ">IMDAL</spaan> <span style="font-size: x-large;">application, can provide a benefit to companies, whether local or global, and enables work in educational centers and institutions Such as colleges, schools and universities.</span></span>

    </div>


    <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>

</header>


<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
    <h2 class="w3-center" style="font-family:Copperplate,Papyrus,fantasy; color:#b99900 ">ABOUT THE APPLICATION</h2>
    <p class="w3-center w3-large">Key features of our Application</p>
    <div class="w3-row-padding w3-center" style="margin-top:64px">
        <div class="w3-quarter">
            <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"  style="color:rgba(185, 153, 0, 0.82) "></i>
            <p class="w3-large" >Administration</p>
            <p>A human resource management system or human resource information system is a form of human resource software that combines a number of systems and processes to ensure the ease of managing human resources, business processes, and data.</p>
        </div>
        <div class="w3-quarter">
            <i class="fa fa-heart w3-margin-bottom w3-jumbo"  style="color:rgba(185, 153, 0, 0.82) "></i>
            <p class="w3-large">learning</p>
            <p>Companies use HR software to bring together several functions that human resource management performs, such as storing employee data, preparing payroll and hiring processes, managing benefits, and keeping track of attendance records.</p>
        </div>
        <div class="w3-quarter">
            <i class="fa fa-diamond w3-margin-bottom w3-jumbo"  style="color:rgba(185, 153, 0, 0.82) "></i>
            <p class="w3-large">Absence Management</p>
            <p>Follow up on attendance records.</p>
        </div>
        <div class="w3-quarter">
            <i class="fa fa-cog w3-margin-bottom w3-jumbo"  style="color:rgba(185, 153, 0, 0.82) "></i>
            <p class="w3-large">Payroll management</p>
            <p>HRIS provides the means to acquire, store, analyze and distribute information to various stakeholders.</p>
        </div>
    </div>
</div>


<!-- Footer -->
<div class="foot">
<footer class="w3-center  w3-padding-64">

    <a href="#home"  class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <span style="float: left" class="w3-xlarge w3-section">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </span>
    <span style="float: right">Powered by <a  href="/" title="IMDAL" target="_blank" class="w3-hover-text-green">IMDAL</a></span>

</footer>
</div>
<script>
    // Modal Image Gallery
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
    }


    // Toggle between showing and hiding the sidebar when clicking the menu icon
    var mySidebar = document.getElementById("mySidebar");

    function w3_open() {
        if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
        } else {
            mySidebar.style.display = 'block';
        }
    }

    // Close the sidebar with the close button
    function w3_close() {
        mySidebar.style.display = "none";
    }
</script>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
    <script src="../../ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>

