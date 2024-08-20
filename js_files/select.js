function random_function()
{
    var a=document.getElementById("country").value;
    if(a==="Lahore")
    {
        var arr=["Multan","Layyah"];
    }
    else if(a==="Multan")
    {
        var arr=["Layyah","Lahore"]
    }
    else if(a==="Layyah")
    {
        var arr=["Lahore","Multan"];
    }
   

    
    var string="";	
 
    for(i=0;i<arr.length;i++)
    {
        string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
    }
    document.getElementById("city").innerHTML=string;
}