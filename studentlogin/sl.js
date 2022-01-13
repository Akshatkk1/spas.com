function validate()
{
    var Studentid=document.getElementById("Student id").value;
    var password=document.getElementById("password").value;
    if(Studentid=="111" && password=="abc")
    {
        alert("login successfully");
        return false;
    }
    else
    {
        alert("login failed");
    }
}