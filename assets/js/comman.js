var stopSubmittingForm = false;

function checkURLExistOrNot(event, element, url)
{
  //alert(url+"/"+element.value);
  $.get(url+'/'+element.value, function(responseData, status){
	                    //alert(responseData);
						//alert(status);
						if(responseData == 'exist' && status == 'success')
						{
						  stopSubmittingForm = true;
                          document.getElementById('urlMessage').innerHTML = "This URL is already exist";  						  
						}	
                        else if(responseData == 'notExist' && status == 'success')
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