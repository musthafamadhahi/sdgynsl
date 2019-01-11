@include('login.loginheader')    <br>
<div class="container">
    <h3>Update/Edit an event</h3>
    <br>
    <form action="{{url('/update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Title</label>
            <div class="col-sm-4">



                <select name="title" >
                    <option selected>Choose event title</option>

                    @foreach($events as $e)
                        <option>{{$e->title}}</option>
                        @endforeach
                </select>
            </div>

            <div class="col-sm-2">
                <button type="submit" name="view" class="btn-primary" formaction="{{url('/view')}}" formenctype="multipart/form-data">View</button>
            </div>
            <div class="col-sm-2">
                <button type="submit" name="delete" class="btn-warning" formaction="{{url('/delete')}}">Delete</button>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Date</label>
            <div class="col-sm-8">
                <input type="date" name="date" id="date">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label" >Time</label>
            <div class="col-sm-8">
                <input type="time" name="time" id="time">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Venue</label>
            <div class="col-sm-8">
                <input type="text" name="venue" id="venue">
            </div>

        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Description</label>
            <div class="col-sm-8">
                <textarea  name="description" rows="10"id="description"></textarea>
            </div>

        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label" >Member Registration</label>
            <div class="col-sm-8">
                <input type="checkbox" name=register value="yes">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label" >Attachments</label>
            <div class="col-sm-8">
                <input type="file" name=file[] multiple>
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