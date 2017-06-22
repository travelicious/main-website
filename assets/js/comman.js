var stopSubmittingForm = false;

function checkURLExistOrNot(event, element, url)
{
  //alert(url+"/"+element.value.trim());
  $.get(url+'/'+element.value.trim(), function(responseData, status){
	                    //alert(responseData);
						//alert(status);
						if(responseData.trim() === 'exist' && status.trim() === 'success')
						{
						  stopSubmittingForm = true;
                          document.getElementById('urlMessage').innerHTML = "This URL is already exist";  						  
						}	
                        else if(responseData.trim() === 'notExist' && status === 'success')
						{
						  stopSubmittingForm = false;
						  document.getElementById('urlMessage').innerHTML = "";  						  
						}							 
                     }); 
}


function submitForm(event)
{
  //alert(stopSubmittingForm);
  //alert(event);
  if(stopSubmittingForm == true)
  {
    event.preventDefault();	  
  }	  
}