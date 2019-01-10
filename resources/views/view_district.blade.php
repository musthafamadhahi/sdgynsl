@include('login.loginheader')

<br>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<br>
<div class="container">
    <form action="{{ url('/view_district/delete') }}" method="post">
        {{ csrf_field() }}
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">District</th>
                <th scope="col" >Delete</th>
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
                                        <td>{{$r->district}}</td>
                                        <td>
                                            <div class="form-group row">
                                                <div class="col-sm-8">
                                                    <input type="checkbox" name=delete[] value="{{$r->id}}">
                                                </div>
                                            </div>
                                        </td>

                                    </div>
                                </div>
                            </tr>
                        @endforeach

                        <tr><td></td><td></td><td></td><td></td><td><input type="submit"name="delete" ></td></tr>
                        </tbody>

                </div>

        </table>
    </form>
</div>


@else
    <h3>No District at the moment</h3>
@endif
<br>
@include('layouts.footer')
