var request, url;


function ajax(e,c_id){

    var active;
    active=document.getElementsByClassName('activeprod1');
     
    active[0].className="xy ";
    e.className=e.className+" activeprod1";
    

    if(window.XMLHttpRequest){

    request=new XMLHttpRequest();

    }
    else{

        request=new ActiveXObject('Microsoft.XMLHTTP');
    }

    url="ajax.php?c_id="+c_id;
    
    try{
         
        request.onreadystatechange=getInfo;
        request.open("GET",url,true);
        request.send();


    }catch(e){
   
        alert("Exception");

    }

}

function getInfo(){

      if(request.readyState==4){
    document.getElementById('result').innerHTML=request.responseText;
}

}