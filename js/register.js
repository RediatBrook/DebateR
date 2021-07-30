function validate(){
    let p1 = document.forms["rgform"]["password"].value;
    let p2 = document.forms["rgform"]["passwordr"].value;
    if(p1===p2){
        if(p1.length<8){
            alert("Password should contain atleast 8 characters");
            return false;
        }
        else{
            return true;
        }
    }
    else{
        alert("Password entered in the first field and second field are different.");
        return false;
    }
}