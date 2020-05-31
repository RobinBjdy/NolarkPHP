/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    const fixe=1000;
    function CalculeAnciennete(fixe,anciennete) {
        if(anciennete>=10){
            return fixe*0.06;
        }
        else if(anciennete>=3){
            return fixe*0.03;
        }
        else{
            return 0;
        }
    }
    
    function CalculeCommissionS20(nbVendus){
        return (nbVendus*140)*0.02;
    }
    
    function CalculeCommissionXspirit(nbVendus){
        if(nbVendus>50){
            return (nbVendus-50)*0.06;
        }
        else{
            return 0;
        }
    }
    
    function CalculeCommissionMultitec(nbVendus){
        if(nbVendus>50){
            return (nbVendus-50)*0.10;
        }
        else if(nbVendus>20||nbVendus<=50){
            return nbVendus*0.06;
        }
        else{
            return nbVendus*0.04;
        }
    }
    
    function CalculeRemuneration(anciennete,nbS20,nbXspirit,nbMultitec){
        return CalculeAnciennete(fixe,anciennete)+CalculeCommissionS20(nbS20)+
                CalculeCommissionXspirit(nbXspirit)+CalculeCommissionMultitec(nbMultitec);
    }
    
   
    window.addEventListener("load",function(){
        window.document.querySelector("#btn_calcule").addEventListener("click",function(){
            
        });
    });




