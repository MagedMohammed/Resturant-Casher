$(document).ready(function(){
    $("ul li:first-child").addClass("active");
    $(".tab-content").children("div:first-child").addClass("tab-pane fade in active");
});

var number1,
    number2,
    itemName,
    tottalprice;

function tottal(){
    number1 =document.querySelector('input[id="iteam"]:checked').value;   
    number2 =document.querySelector('input[id="result"]').value;
    itemName =document.querySelector('input[id="iteam"]:checked').getAttribute("itemName");
         if (number2 == ""){ number2 = "1"}
            tottalPrice = number1 * number2;
                document.getElementById("res").innerHTML +='<tr><td class="td1">'+itemName+'</td><td class="td2">'
                +number2+'</td><td class="td3">'
                +tottalPrice+'</td><td><p onclick="deleteRow(this);sumColumn();"><a href="#">X</a></p></td></tr>';
/* Tottal of prices Column*/sumColumn(); /*Function fo Ajax*/passVar();
}
//Function of  Delete Row from Table  
function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("res").deleteRow(i);
    passVar();
}
//Sum columns of tottalPrice Function::
function sumColumn() {
    var sum=0,
    sumcol=document.querySelectorAll(".td3");
        for (var i=0;i <= sumcol.length; i++){
            if (typeof sumcol[i] !== 'undefined')
            {sum+=parseFloat(sumcol[i].innerHTML);} 
             }
    document.getElementById("sumcol-res").innerHTML= sum +" جنيه ";
};
// ajax functo
function passVar(){
    //items Name 
    var td1=document.querySelectorAll(".td1"),
        td1array = [];
            for(var i = 0; i <+ td1.length ; ++i) td1array.push(td1[i].innerHTML);
    //items 
    var td2=document.querySelectorAll(".td2"),
        td2array = [];
            for(var i = 0; i <+ td2.length ; ++i) td2array.push(td2[i].innerHTML); 
    //items Prices
    var td3=document.querySelectorAll(".td3"),
        td3array = [];
            for(var i = 0; i <+ td3.length ; ++i) td3array.push(td3[i].innerHTML);
    // ajax var
    var ajax =  new XMLHttpRequest();
        ajax.onreadystatechange=function(){
             if(this.readyState == 4 && this.status == 200){
            }};

     ajax.open("post","index.php", true);
     ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     ajax.send("x="+td1array+"&y="+td2array+"&z="+td3array);
}
