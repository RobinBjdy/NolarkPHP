/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
const fixe=1100;
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
function testAncien(){
    var erreur=0;
    for(i=-12;i<12;i++){
        if(CalculeAnciennete(fixe,i)!=2.80){
          erreur=erreur;
        }
        
    }
    console.log('Il y a '+erreur+' pour anciennete'+"\n");
}

function CalculeCommissionS20(nbVendus){
        return (nbVendus*140)*0.02;
    }
    
 function testS20(){
     var erreur=0;
     for(i=-12;i<500;i++){
         if(!CalculeCommissionS20(i)){
             console.log('Erreur : Probleme avec la valeur '+i+" pour S20\n");
             erreur++;
         }
     }
     console.log('Il y a '+erreur+' pour les S20'+"\n");
 }   