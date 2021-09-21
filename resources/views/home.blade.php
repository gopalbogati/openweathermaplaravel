@extends('layouts.app')
<label for="city">Choose city</label>



{{-- <select name="city" id="city" multiple>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select> --}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css"></script>
<script src="//cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {

    $('#data-table').DataTable({
                        // data: data,
                         columns: [
                             {data: 'country'},
                             {data: 'name'},
                             {data: 'temperature'},
                             {data: 'temperature_min'},
                             {data: 'temperature_min'}
                            ]
                     });

    $('#load').on('click',function(e){
   e.preventDefault();

       var city = $("#city").val();
        var unit = $(":radio:checked").val();
        $.ajax({
           url : '/weather',
           datatype : 'json',
           type:'get',
           data : {city: city, unit: unit},
           success: function(data)
                  {

                     console.log(data);
                     $('#data-table').dataTable().fnClearTable();
                     $('#data-table').dataTable().fnAddData(data);


               }
        });

   });
});


// function loadData(e) {
//     e.preventDefault();
//         var city = document.getElementById("city");
//         var unit = document.getElementById("unit").value;
//         $.ajax({
//            url : '/weather',
//            data : {city: city, unit: unit},
//         //    success: function(data)
//         //           {
//         //               console.log("saveßßS")
//         //             //   console.log(data);

//         //        }
//         });
//         alert('hello')
//     }

    </script>
<input type="text" id="city" name="city"> <br>

<input type="radio"  value="imperial" name="unit">
<label>Imperial</label><br>

<input type="radio"  value="metric" name="unit" checked="true">
<label>Metric </label><br>

<input type="radio" value="kelvin" name="unit">
<label>Kelvin</label><br>

<input type="button" value="Load" id="load">


<table id="data-table">
    <thead>
        <tr>
            <th>Country</th>
            <th>Name</th>
            <th>Temperature</th>
            <th>Temperature Min</th>
            <th>Temperature Max</th>
        </tr>
    </thead>
</table>


@section('content')

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            @foreach ($current as $key => $value))
                    <p>This is user {{$key }}</p>
            @endforeach


                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
