/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function validEnvoi(){
    if (window.document.querySelector("#i_nom").value === "" &&
        window.document.querySelector("#i_prenom").value === "") {
        alert("Le nom et le prenom doivent être remplis");
    }
    else {
        window.document.querySelector("#form_contact").submit();
    }
}
window.addEventListener("load", function(){
    window.document.querySelector("#btn_envoyer").addEventListener("click",validEnvoi);
});

