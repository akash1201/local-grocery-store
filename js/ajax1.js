var request1, url1;

function cart(s_id,p_id,c_id){


    if(window.XMLHttpRequest){

        request1=new XMLHttpRequest();
    
        }
        else{
    
            request1=new ActiveXObject('Microsoft.XMLHTTP');
        }

        
        url1="add.php?s_id="+s_id+"&p_id="+p_id+"&c_id="+c_id;

        request1.onreadystatechange=resp;
        request1.open("GET",url1,true);
        request1.send();

}
var atcn=document.getElementById('cart1');
function resp(){
   
    if(request1.readyState==4){
        
        var res1=request1.responseText;

        
          if(res1=='y' || res1=='Y'){
            atcn.style.display="initial";
          var id=setTimeout(fun1,1000);
         
        }
       
      

    }

}

function fun1(){

    atcn.style.display="none";

}