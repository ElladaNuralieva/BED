$(document).ready(function(){
    $('#selectRoute').change(function(){
        //console.log( "ready!" );
        var routeID=$(this).val();
        $.ajax({
        url:"fetch_data.php",
        method:"POST",
        data:{ RouteID: routeID},
        dataType:"json",
        success:function(data)
        {
            console.log( "rsseady!" );
            $('#dataSelect').html(data.ms);
            $('#comment').html(data.comm);
            console.log( data.comm );
        },
        error:function(xhr, status, error)
        {
            console.log( xhr );
        }
        });

    });
  });