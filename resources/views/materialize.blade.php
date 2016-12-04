<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
        
    </head>

    <body>
    
    <div id="app">

        <div class="card-panel teal lighten-2">This is a card panel with a teal lighten-2 class</div>

        <div class="fixed-action-btn horizontal click-to-toggle">
            <a class="btn-floating btn-large red">
              <i class="material-icons">menu</i>
            </a>
            <ul>
              <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
              <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
              <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
              <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
            </ul>
        </div>
    
        <div>
            <table>
                <thead>
                  <tr>
                      <th data-field="id">Name</th>
                      <th data-field="name">Item Name</th>
                      <th data-field="price">Item Price</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                  </tr>
                  <tr>
                    <td>Alan</td>
                    <td>Jellybean</td>
                    <td>$3.76</td>
                  </tr>
                  <tr>
                    <td>Jonathan</td>
                    <td>Lollipop</td>
                    <td>$7.00</td>
                  </tr>
                </tbody>

            </table>
      </div>

    </div> <!-- APP -->

        <script src="{{ URL::asset('js/app.js') }}"></script>
        <script src="{{ URL::asset('js/materialize.js') }}"></script>
        
        <script type="text/javascript">
            $(document).ready(function(){
                console.log('Jquery Loaded');                    
            });
        </script>

    </body>

</html>
