@include('login.loginheader')
<br>
<body>

<div>
    <h1>Messages</h1>
</div>
<br>

@if(Auth::user()->role =='admin')
    @if(count($msg) > 0)
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @foreach($msg as $m)
                        <div class="card">
                            <div class="card-body">
                                <h3>{{$m->name}}</h3>
                                <small>{{$m->email}}</small>
                                <p> {!! $m->message !!}</p>
                                <small>Recived on {!! $m->created_at !!}</small><br><br>
                                <form action="{{url('/view_message')}}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-sm-8">
                                            <input type="text" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div></div>
                                        <div class="col-sm-8">
                                            <input type="submit" name="Reply">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><br><br>
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <h3>No Messages Found</h3>
    @endif

@else
    @if(count($msg) > 0)
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @foreach($msg as $m)
                        <div class="card">
                            <div class="card-body">
                                <h3>{{$m->name}}</h3>
                                <small>{{$m->email}}</small>
                                <p> {!! $m->message !!}</p>
                                <small>Recived on {!! $m->created_at !!}</small>
                            </div>
                        </div><br><br>
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <h3>No Messages Found</h3>
    @endif
@endif
</body>