@extends('layouts.header')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="container box">
                <h3 align="center">Select District and Division</h3><br />
                <div class="form-group">
                    <select name="district" id="district" class="form-control input-lg dynamic" data-dependent="division">
                        <option value="">Select District</option>
                        @foreach($district_list as $district)
                            <option value="{{ $district->district}}">{{ $district->district }}</option>
                        @endforeach
                    </select>
                </div>
                <br />
                <div class="form-group">
                    <select name="division" id="division" class="form-control input-lg">
                        <option value="">Select Division</option>
                    </select>
                </div>
                {{ csrf_field() }}
                <br />
                <br />
            </div>

            <script>
                $(document).ready(function(){

                    $('.dynamic').change(function(){
                        if($(this).val() != '')
                        {
                            var select = $(this).attr("id");
                            var value = $(this).val();
                            var dependent = $(this).data('dependent');
                            var _token = $('input[name="_token"]').val();
                            $.ajax({
                                url:"{{ route('membersview.fetch') }}",
                                method:"POST",
                                data:{select:select, value:value, _token:_token, dependent:dependent},
                                success:function(result)
                                {
                                    $('#'+dependent).html(result);
                                }

                            })
                        }
                    });

                    $('#district').change(function(){
                        $('#division').val('');
                    });


                });
            </script>
        </div>
    </div>

@endsection
