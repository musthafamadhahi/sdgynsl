@include('login.loginheader')
<br>
<div class="container">
    <h3>Edit District Coordinator</h3>
    <br>

    <form action="{{url('dc/update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-4">
                <input type="text" value="{{$res->email}}" name="email">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Name</label>
            <div class="col-sm-8">
                <input type="text" name="name" id="name" value="{{$res->name}}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Contact No</label>
            <div class="col-sm-8">
                <input type="text" name="contact_no" id="contact_no" value="{{$res->contact_no}}">
            </div>
        </div>

        <div class="form-group row">
            <div></div>
            <div class="col-sm-8">
                <input type="submit" name="submit">
            </div>
        </div>
    </form>

</div>

@include('layouts.footer')