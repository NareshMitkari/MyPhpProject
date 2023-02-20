
function saveData(){

     var name= $("#firstName").val();
     var lastName= $("#lastName").val();
     var phoneNumber= $("#phoneNumber").val();
     var email= $("#email").val();
     var password= $("#password").val();
     var confirmpassword= $("#confirmpassword").val();
     var gender =$('input[name="gender"]:checked').val();
     var termsCondition=$("#termsCondition").is(":checked");
   // alert(termsCondition);
     console.log(name+"_"+lastName+"_"+phoneNumber+"_"+email+"_"+password+"_"+confirmpassword+"_"+gender+"_"+termsCondition);
     
     if(name.length>3){

        alert("name is valid");
     }else{
        alert("Name is not valid");
     }

    }