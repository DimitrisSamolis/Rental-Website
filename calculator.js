//JAVASCRIPT SYNDEETAI ME TO CALCULATOR.HTML KAI KANEI TON YPOLOGISMO TOY KOSTOYS ENOIKIASHS

var submit = document.getElementById('submit-btn');

submit.addEventListener('click', calculateCost);

function costosAsf(age,cc){
    if(age>=18 && age<=21){
        return (age*0.00042*cc);
    }else if(age>=22 && age<=29){
        return (age*0.00036*cc);
    }else{
        return (age*0.00023*cc);
    }

   
}


function calculateCost(){
    let age = document.querySelector("#age").value ;
    let cc = document.querySelector("#cc").value;
    let days = document.querySelector("#days").value;
    let dayCost = 0;
    let finalCost =0;
    let costAs =0;
    
    if (age<18){
        alert("Sorry! You have to be at least 18 years old.")
    }
        
    if (age.length == 0 || cc.length == 0 || days.length == 0) { 
        alert("Please complete all input fields!");
        return;
      } 

        if(age>=18 && cc>0 && days>0){
            costAs = costosAsf(age,cc);
            if(days>0 && days<=5){

                if(cc>0 && cc<=1600){
                    dayCost=days*15.42;
                }else if(cc>=1601 && cc<=2000){
                    dayCost=days*16.82;
                }else{
                    dayCost=days*18.22;
                }

            }else if(days>=6 && days<=10){

                if(cc>0 && cc<=1600){
                    dayCost=days*14.62;
                }else if(cc>=1601 && cc<=2000){
                    dayCost=days*15.76;
                }else{
                    dayCost=days*17.10;
                }
            }else{

                if(cc>0 && cc<=1600){
                    dayCost=days*13.15;
                }else if(cc>=1601 && cc<=2000){
                    dayCost=days*14.80;
                }else{
                    dayCost=days*16.20;
                }

            }

             finalCost= costAs + dayCost;
             document.getElementById('result').innerText = finalCost.toFixed(2); //STROGGYLOPOIHSH SE 2 DEKADIKA PSHFIA
             return;
        }

}
