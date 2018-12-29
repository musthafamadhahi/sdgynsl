@include('login.home')

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">District</th>
        <th scope="col">Division</th>
    </tr>
    </thead>
@if(count($res) > 0)
    <div class="container">
        <div class="row justify-content-center">

    <tbody>
    <tr>
        <th scope="row">{{$r->id}}</th>
        <td>{{$r->name}}</td>
        <td>{{$r->distirct}}</td>
        <td>{{$r->division}}</td>
        <td>{{$r->email}}</td>
        <td>{{$r->role}}</td>
    </tr>

    </tbody>
        </div>
    </div>
</table>


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