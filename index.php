<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Load More Button Using HTML CSS & jQuery - Pure Coding</title>
</head>
<body>
    <div class="container">
        <div class="row" id="huwala">
        
        </div>
        
        <button class="btn">Load More</button>
    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            load_data();

            console.log($(".col"));
            
            function load_data(){
                    $.ajax({
                        url:"artikel.php",
                        method:"POST",
                        success:function(data){
                            // console.log(data);
                            $('.container #huwala').html(data);
                        }
                    });
            }

            // $(".col").slice(0, 3).show();
        
            // if ($(".col").length <= 3) {
            // $(".btn").hide();
            // }else{
            // $(".btn").show();
            // }
              
        })

       




        $(".btn").on("click", function(){
            $(".col:hidden").slice(0, 3).slideDown()
            if ($(".col:hidden").length == 0) {
                $(".btn").fadeOut('slow')
            }
        })
    </script>
</body>
</html>
