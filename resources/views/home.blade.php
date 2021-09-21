@extends('layouts.app')




<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


<script type="text/javascript">
$(document).ready(function() {
//SEND DATA TO VIEW
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


 </script>
 <div class="container">
<h5><label for="city">Type City Names Separated By Commas</label></h5>
 <div class="form-group">
<input type="text" id="city" name="city"> <br>
</div>

{{-- <div class="radio">
<input type="radio"  value="imperial" name="unit" hidden>
<label>Imperial(Default)</label><br>
<div class="radio"> --}}

<div class="radio">
<input type="radio"  value="metric" name="unit" checked="true">
<label>Metric(Celsius) </label><br>
</div>

<div class="radio">
<input type="radio" value="kelvin" name="unit">
<label>Kelvin(Fahrenheit) </label><br>
</div>
<input type="button" value="Load" id="load">

<h3> <br> Data in Table</h3>
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
</div>

@section('content')

@endsection
