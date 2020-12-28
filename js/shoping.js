var price;
var qty;
var total;
var grandTotal;
var json;
var name;

price=document.getElementsByClassName('shoping__cart__price');
qty=document.getElementsByClassName('qty');
total=document.getElementsByClassName('shoping__cart__total');
name=document.getElementsByClassName('pname');




grandTotal=document.getElementById('carttotal');


var i=0;
var sum=0;
var temp;
for(i=0;i<price.length;++i){

   temp=(parseInt(qty[i].value)*parseInt(price[i].innerHTML));
   total[i].innerHTML=temp;
   sum+=temp;


}

grandTotal.value=sum;

ujson();

function update(){
    
 i=0;
 sum=0;
temp;

    for(i=0;i<price.length;++i){

        temp=(parseInt(qty[i].value)*parseInt(price[i].innerHTML));
        total[i].innerHTML=temp;
        sum+=temp;
     
     
     }
     
     grandTotal.value=sum;
     ujson();


}


function changel(){
    
    var p=document.getElementsByClassName('inp');

    
    if(p[0].value.trim()=="" || p[1].value.trim()=="" || p[2].value.trim()==""){

      alert("Please enter personal details");

     }


    else{
    var str=" ";
    var pname=document.getElementsByClassName('pname');
    var producer=document.getElementsByClassName('p_man');
    var pqty=document.getElementsByClassName('p_qty');

    var order="placeorder.php?";
    
    var pd=document.getElementsByClassName('inp');

    order=order+"name="+pd[0].value+"&number="+pd[1].value+"&address="+pd[2].value+"&order=";
    
    for(i=0;i<price.length;++i){
        
       str=str+producer[i].innerHTML+" "+pname[i].innerHTML+" "+pqty[i].innerHTML+" (X "+qty[i].value+"),";


    }

    order=order+str;
     order=order+"&amount=";
    order=order+document.getElementById('carttotal').value;



     document.getElementById('submit1').href=order;
    }

   

}

function ujson(){

   let order = document.getElementById('order');
   let qty=document.getElementsByClassName('qty');
   let name=document.getElementsByClassName('pname');

   let json='{"order": [';


   for(let i=0;i<qty.length;++i){
    

      if(i==(qty.length-1)){
      json=json+'{ "name": "'+ name[i].innerHTML+'", "qty": "'+qty[i].value+'", "price": "'+price[i].innerHTML.trim()+'"}';
   }

   else{
      json=json+'{ "name": "'+name[i].innerHTML+'", "qty": "'+qty[i].value+'", "price": "'+price[i].innerHTML.trim()+'"},';
   }

   }

   json=json+'], "grandtotal" : "'+grandTotal.value+'"}';

   order.value=json;

}