$(document).ready(function(){
    var visible=false;
    $('#show_about').click(function(){
        
        if(visible==false)
        {
            visible=true;
            var routeID=$(this).val();
            $.ajax({
            url:"show_about.php",
            // method:"POST",
            // data:{ RouteID: routeID},
            dataType:"json",
            success:function(data)
            {
                console.log( "Oh my gosh!" );
                $('#show_about_desc').html(data.output);
                
                console.log( data.output);
                $('#show_about').text("СКРЫТЬ ИНФОРМАЦИЮ О ТУРАХ");
                document.getElementById('show_about_desc').style.display = 'grid';
                



            },
            error:function(xhr, status, error)
            {
                console.log( xhr );
            }
            });
        }
        else
        {
            $('#show_about').text("ПОКАЗАТЬ ИНФОРМАЦИЮ О ТУРАХ");
            document.getElementById('show_about_desc').style.display = 'none';
            visible=false;
        }
        

    });
    

  });

