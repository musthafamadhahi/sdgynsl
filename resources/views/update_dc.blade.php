@include('login.loginheader')
<br>
<div class="container">
    <h3>Edit District Coordinator</h3>
    <br>
    <form action="{{url('/dc/update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">District</label>
            <div class="col-sm-4">



                <select name="email" >
                    <option selected>Choose Email</option>

                    @foreach($dc as $e)
                        <option>{{$e->email}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-sm-2">
                <button type="submit" name="search" class="btn-primary" formaction="{{url('/search')}}" formenctype="multipart/form-data">Search</button>
            </div>

        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Name</label>
            <div class="col-sm-8">
                <input type="text" name="venue" id="name">
            </div>
        </div>


        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Contact No</label>
            <div class="col-sm-8">
                <input type="text" name="venue" id="contact_no">
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