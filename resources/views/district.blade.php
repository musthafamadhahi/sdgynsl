@include('login.loginheader')
<br>
<div class="container">
    <h3>Add Districts</h3>
    <br>
    <form action="{{url('/district')}}" method="post">
        @csrf
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Enter New District</label>
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