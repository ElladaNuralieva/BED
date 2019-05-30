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
            $('#period').html(data.period);
            $('#price').html(data.price);
            $('#worker').html(data.worker);
            console.log( data.worker );
            console.log( data.comm );
            document.querySelector('.recieve').style.background = 'rgba(255, 248, 220,0.6)';
            price=document.getElementById("price").getElementsByTagName("p")[0].innerHTML.slice(0,4);
            console.log(price);
            $('#total_price').html(price*numberPerson*discount+ "рублей");
            $('#total_discount').html("Скидка:"+(1-discount)*price*numberPerson);
        },
        error:function(xhr, status, error)
        {
            console.log( xhr );
        }
        });
    });
  });