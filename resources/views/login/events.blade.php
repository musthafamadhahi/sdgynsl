@include('login.loginheader')
@foreach($events as $e)
<section class="section1">
    <div class="container clearfix">
        <div class="content col-lg-12 col-md-12 col-sm-12 clearfix">
            <div class="general-title text-center">
                <h3>{{$e->title}}</h3>

                <hr>
            </div>
            <div class="divider"></div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="he-wrap tpl2">
                    <img src="img/office.png" alt="" class="img-responsive">

                </div>
            </div>
            <!-- he wrap -->
        </div>
            <!-- end col-6 -->

        <div>
            <ul>
                <li><p>Date : {{$e->date}}</p></li>
                <li><p>Time : {{$e->time}}</p></li>
                <li><p>Venue : {{$e->venue}}</p></li>
            </ul>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p>{{$e->description}}</p>
            </div>
        </div>

            <!-- end col-6 -->
        </div>

    </div>
    <!-- end container -->
</section>
@endforeach
  @include('layouts.footer')