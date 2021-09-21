
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
                     $('#data-table').dataTable().fnClearTable();
                     $('#data-table').dataTable().fnAddData(data);


               },
            error: function(message,xhr,status){
                alert(message.responseText);


            }
        });

   });
});

 </script>
