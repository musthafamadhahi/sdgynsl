@include('login.loginheader')
<br>
<div class="container">
<table class="table">
    <form action="#" method="post">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">District</th>
        <th scope="col">Division</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col" ><input type="submit"name="change" >Change Role</th>
    </tr>
    </thead>
@if(count($res) > 0)

        <div class="row justify-content-center">

    <tbody>
    @foreach($res as $r)
    <tr>

            <div class="card">
                <div class="card-body">
        <th scope="row">{{$r->id}}</th>
        <td>{{$r->name}}</td>
        <td>{{$r->district}}</td>
        <td>{{$r->division}}</td>
        <td>{{$r->email}}</td>
        <td>{{$r->role}}@if (isset($_POST['change']))
                            <input type="checkbox">@endif
        </td>

    </div>
            </div>
    </tr>
    @endforeach
    </tbody>
        </div>
    </form>
</table>
</div>


@else
    <h3>No Members Yet</h3>
@endif