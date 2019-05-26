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
            $('#when__end').html(data.period);
            $('#price').html(data.price);
            $('#worker').html(data.worker);
            console.log( data.period );
        },
        error:function(xhr, status, error)
        {
            console.log( xhr );
        }
        });

    });
  });