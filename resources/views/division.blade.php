@include('login.loginheader')
<br>
<div class="container">
    <h3>Add new Divisions</h3>
    <br>
    <form action="{{url('/division')}}" method="post">
        @csrf
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Enter New Division</label>
            <div class="col-sm-8">
                <input type="text" name="district">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Enter particular District</label>
            <div class="col-sm-8">
                <input type="text" name="district">
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