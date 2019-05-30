

document.addEventListener("DOMContentLoaded", ready);
var numberPerson=1;
var discount=1;
var total=0;
var price=0;

function ready()
{
	//alert("DOM");
	// price=document.getElementById("price").getElementsByTagName("p")[0].innerHTML.slice(0,4);
	var buttons_add=document.querySelectorAll(".btn_add");
	
	
	for(var index=0; index<buttons_add.length; index++)
	{
		button_add=buttons_add[index];
		button_add.addEventListener("click",addClientForm);
		
	}
}
 function addRemovelistener()
 {
 	var buttons_remove=document.querySelectorAll(".btn_remove");
 	button_remove=buttons_remove[index];
	button_remove.addEventListener("click",removeClientForm);
 }
function addClientForm(event)
{
	console.log("AAA");
	numberPerson++;
	var priceDiv=document.getElementById("price").getElementsByTagName("p")[0].innerHTML.slice(0,4);
	price=document.getElementById("price").getElementsByTagName("p")[0].innerHTML.slice(0,4);
		console.log(price);
	var parentElem=document.querySelector(".client__form");
	var sourceDiv=document.querySelector(".addclient");
	var newDiv=sourceDiv.cloneNode(true);
	parentElem.appendChild(newDiv);
	var submitbut=$('#submitbut').remove();
	submitbut.appendTo('#myForm');	
	
	newDiv.querySelector(".btn_remove").addEventListener("click",removeClientForm);
	newDiv.querySelector(".btn_add").addEventListener("click",addClientForm);
	if(numberPerson>=5)
	{
		discount=0.8;
	}
	console.log(price);

            $('#total_price').html(price*numberPerson*discount+ "рублей");
            $('#total_discount').html("Скидка:"+Math.round(((1-discount)*price*numberPerson)*100)/100);
	//ready();

}
function removeClientForm(event)
{
	var targetDiv=event.target.parentElement.parentElement;
	console.log(targetDiv.parentElement);
	targetDiv.parentElement.removeChild(targetDiv);
}

