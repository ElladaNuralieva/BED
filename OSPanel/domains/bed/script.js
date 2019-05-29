document.addEventListener("DOMContentLoaded", ready);
function ready()
{
	//alert("DOM");
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
	var parentElem=document.querySelector(".client__form");
	var sourceDiv=document.querySelector(".addclient");
	var newDiv=sourceDiv.cloneNode(true);
	parentElem.appendChild(newDiv);
	newDiv.querySelector(".btn_remove").addEventListener("click",removeClientForm);
	newDiv.querySelector(".btn_add").addEventListener("click",addClientForm);
	//ready();

}
function removeClientForm(event)
{
	var targetDiv=event.target.parentElement.parentElement;
	console.log(targetDiv.parentElement);
	targetDiv.parentElement.removeChild(targetDiv);
}