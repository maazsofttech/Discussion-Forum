function confirmpsswrd( ) 
{
    var a = document.getElementById('p1').value ;
    
    var b = document.getElementById('p2').value ;
    
    if (a === b)
        
    {
         
        return    confirmpsswrd();
    }
    else
    {
        alert('make sure you have entered same password in "confirm password" feild');
        return false;
        }   
}






function allLetter(inputtxt)
      { 
      var letters = /^[A-Za-z]+$/;
      if(inputtxt.value.match(letters))
      {
           
          
    //  alert('Your name have accepted : you can try another');
      return   allLetter2(document.form1.last_name);
   
      }
      else
      {
      alert('Please input a valid name in "first name field"');
      return false;
      
    }
      }
      
      
      
 

       function alphanumeric(inputtxt)
{ 
var letters = /^[0-9a-zA-Z]+$/;
if(inputtxt.value.match(letters))
{
// alert('Your registration number have accepted : you can try another');
 
return confirmpsswrd( );
}
else
{
alert('Please input  alphanumeric characters only in "password field"');
return false;
}
}


function ValidateEmail(inputText)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.value.match(mailformat))
{
 
return   alphanumeric(document.form1.password);
}
else
{
alert("please enter a valid email address!");
 
return false;
}
}


function allLetter2(inputtxt)
      { 
      var letters = /^[A-Za-z]+$/;
      if(inputtxt.value.match(letters))
      {
           
          
    //  alert('Your name have accepted : you can try another');
      return  ValidateEmail(document.form1.email);
      }
      else
      {
      alert('Please input a valid name in "last name field"');
      return false;
      
    }
      }
      