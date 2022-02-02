$(".selectFilter").on("change",function(){var e=$(this).data("target"),i=$(this).find(":selected").data("ref");$("select."+e).val("-1"),null==i?$("select."+e).find("option").each(function(){console.log("inside undefined"),$(this).removeAttr("disabled hidden")}):$("select."+e).find("option").each(function(){var e=$(this).data("belong"),t=$(this).val();i!=e&&-1!=t?($(this).prop("disabled",!0),$(this).prop("hidden",!0)):($(this).prop("disabled",!1),$(this).prop("hidden",!1))})});

function ValidateEmail(inputText)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.value.match(mailformat))
{
document.form1.email.focus();
return true;
}

else if(inputText.value==0){
	alert("Hiányzó e-mail cím!");
document.form1.email.focus();
}
else
{
alert("Helytelen e-mail cím!");
document.form1.email.focus();
return false;
}
}

function myFunction3() {
  
  
            var ele = document.getElementsByName('szesszio'); 
            var ele2 = document.getElementsByName('tema'); 
              
            for(i = 0; i < ele.length; i++) { 
                if(ele[i].selected ) 
              
                  alert( "Az altalad valasztott szesszio "+ele[i].value+" ")
            
            } 
          for(i = 0; i < ele2.length; i++) { 
                if(ele2[i].selected) 
              
                  alert( "Az altalad valasztott tema "+ele2[i].value+" ")
            } 

}

          





  function validate() {
   var d1 = document.getElementById("tanarok1");
    var d2 = document.getElementById("tanarok2");

    var firstInput = document.getElementById("mastanar1").value;
	var secondInput = document.getElementById("mastanar2").value;


   if (((firstInput==0 )||(secondInput==0))&&((d1.value==0)||(d2.value==0))){
   	 alert("Nincs kiválasztva tanár!");
   }
    else if ((d1.value == d2.value) ||(firstInput == secondInput)){
      alert("Nem választható kétszer ugyanaz a tanár!");
    }


	
if(!document.form1.checkbox.checked){
  alert('El kell fogadnod a felteteleket');
  return false; 

  }


}

