<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Slider - Range slider</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url();?>css/product_list.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<body>

  
 
<p>
  <label for="amount">Price range:</label>
  <input type="text" id="amount" readonly style="border:0; color:#f6931f;font-weight:bold;">
</p>


  <div id="slider-range"></div>
  <div class="content">
 
 <script>
  $(function() {
    load_product('30','600');
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 700,
      values: [ 30, 600],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );

        load_product(ui.values[0],ui.values[1]);

      }
    });

    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  });
    
    $('.content').html(loader);
    
    function load_product(minimum_range, maximum_range){
    $.ajax({
      url:'<?php echo base_url();?>index.php/Welcome/products',
      type:'POST',
      data:{min_price:minimum_range,max_price:maximum_range},
      success:function(output){
        //alert(output);
        //alert("Here");
          $('.content').fadeOut('slow',function(){
          $('.content').html(output).fadeIn('fast');
          
          });
      }
    });

  }

  
  </script>

 
</body>
</html>