@include('login.home')
@if(count($res) > 0)
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($res as $r)
                    <div class="card">
                        <div class="card-body">
                            <h3>{{$r->name}}</h3><br>
                            <p>{{$r->division}}</p><br>

                        </div>
                    </div><br><br>
                @endforeach
            </div>
        </div>
    </div>
@else
    <h3>No Members Yet</h3>
@endif