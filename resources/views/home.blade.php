
<html>
    <head>
        <title> @yield('title')</title>
    </head>
    <body>
        @extends('layouts.app')

  <div class="container">
    <form id="inputform">
        <h5><label for="city">Type City Names Separated By Commas</label></h5>
        <div class="form-group">
        <input type="text" id="city" name="city"> <br>
         </div>
        <div class="radio">
          <input type="radio"  value="metric" name="unit" checked="true">
          <label>Metric(Celsius) </label><br>
        </div>
         <div class="radio">
           <input type="radio" value="kelvin" name="unit">
           <label>Kelvin(Fahrenheit) </label><br>
        </div>
        <input type="button" value="Load" id="load">
    </form>

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

    </body>
</html>
