@include('login.loginheader')

<br>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<br>
<div class="container">
    <form action="{{ url('/view_livestream/update') }}" method="post">
        {{ csrf_field() }}
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Link</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
            @if(count($res) > 0)

                <div class="row justify-content-center">
                    @foreach($res as $r)
                        <tbody>
                            <tr>

                                <div class="card">
                                    <div class="card-body">
                                        <th scope="row"><input type="number"name="id[]"value="{{$r->id}}" hidden>{{$r->id}}</th>
                                        <td>{{$r->name}}</td>
                                        <td>{{$r->link}}</td>
                                        <td>{{$r->status}}</td>
                                        <td>
                                            <div >
                                                <select name="changeStatus[]" class="form-control">
                                                    <option selected>Choose Status</option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div></td>

                                    </div>
                                </div>
                            </tr>
                        @endforeach

                        <tr><td></td><td></td><td></td><td></td><td><input type="submit"name="change" ></td></tr>
                        </tbody>

                </div>

        </table>
    </form>
</div>


@else
    <h3>No Stremings Currently</h3>
@endif
<br>
@include('layouts.footer')