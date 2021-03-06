@include('login.loginheader')
<body>


<section>
    <div class="container">

        @if(count($live)>0)
            <h3>Now streaming Live</h3>
            @foreach($live as $l)
                <p>{{$l->name}}</p>
                <iframe src="{{$l->link}}" frameborder="0" allowfullscreen></iframe>
                <br>
                <br>
            @endforeach
        @endif
    </div>
</section>


<section class="section1">

    <div class="owl-carousel owl-theme ">
        <div class="item " ><img src ="assets\img\goals\g1.png"></div>
        <div class="item "><img src ="assets\img\goals\g2.png"></div>
        <div class="item"><img src ="assets\img\goals\g3.png"></div>
        <div class="item"><img src ="assets\img\goals\g4.png"></div>
        <div class="item"><img src ="assets\img\goals\g5.png"></div>
        <div class="item"><img src ="assets\img\goals\g6.png"></div>
        <div class="item"><img src ="assets\img\goals\g7.png"></div>
        <div class="item"><img src ="assets\img\goals\g8.png"></div>
        <div class="item "><img src ="assets\img\goals\g9.png"></div>
        <div class="item"><img src ="assets\img\goals\g10.png"></div>
        <div class="item"><img src ="assets\img\goals\g11.png"></div>
        <div class="item"><img src ="assets\img\goals\g12.png"></div>
        <div class="item"><img src ="assets\img\goals\g13.png"></div>
        <div class="item"><img src ="assets\img\goals\g14.png"></div>
        <div class="item"><img src ="assets\img\goals\g15.png"></div>
        <div class="item"><img src ="assets\img\goals\g16.png"></div>
        <div class="item"><img src ="assets\img\goals\g17.png"></div>
    </div>

</section>

@include('layouts.footer')
<!-- JavaScript Libraries -->
<script src="assets/lib/jquery/jquery.min.js"></script>
<script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/lib/php-mail-form/validate.js"></script>
<script src="assets/lib/prettyphoto/js/prettyphoto.js"></script>
<script src="assets/lib/isotope/isotope.min.js"></script>
<script src="assets/lib/hover/hoverdir.js"></script>
<script src="assets/lib/hover/hoverex.min.js"></script>
<script src="assets/lib/unveil-effects/unveil-effects.js"></script>
<script src="assets/lib/owl-carousel/owl-carousel.js"></script>
<script src="assets/lib/jetmenu/jetmenu.js"></script>
<script src="assets/lib/animate-enhanced/animate-enhanced.min.js"></script>
<script src="assets/lib/jigowatt/jigowatt.js"></script>
<script src="assets/lib/easypiechart/easypiechart.min.js"></script>

<!-- Template Main Javascript File -->
<script src="assets/js/main.js"></script>

</body>
</html>
