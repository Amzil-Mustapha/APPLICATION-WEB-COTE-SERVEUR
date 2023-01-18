let arrNumFour = [];
let arrNumUsine = [];
let f = false;
let u = false;

let fourSelect = document.getElementById('four')
let usineSelect = document.getElementById('usine')
let produitSelect = document.getElementById('Produit')
let quantiteInput = document.getElementById('quat')

fourSelect.innerHTML = '<option value="default">Fournisseurs</option></select>'
usineSelect.innerHTML = '<option value="default">Usines</option></select>'
produitSelect.innerHTML = '<option value="default">Produit</option></select>'


function villeOption(str) {

    $.ajax({
        type: "GET",
        url: "../app/controller/ajaxFour.php",
        data: { str: str },
        dataType: 'json',
        success: function (response) {
            response[0].forEach(ele => {
                if (ele.ville == response[1]) {
                    fourSelect.innerHTML += `<option value=${ele.ville}>${ele.nom}</option>`
                    arrNumFour.push(ele.num);
                    f = true;
                }
            });
        }
    });
    
    $.ajax({
        type: "GET",
        url: "../app/controller/ajaxUsine.php",
        data: { str: str },
        dataType: 'json',
        success: function (response) {
            response[0].forEach(ele => {
                if (ele.ville == response[1]) {
                    usineSelect.innerHTML += `<option value=${ele.ville}>${ele.nom}</option>`
                    arrNumUsine.push(ele.num);
                    u = true;
                }
            });
            if (f && u ) {
                produitOption();
                
            }
        }
    });

}
let ProdVals = [];
function produitOption() {

$.ajax({
        type: "GET",
        url: "../app/controller/ajaxProduit.php",
        data: {arrNumFour: arrNumFour, arrNumUsine:arrNumUsine},
        dataType: 'json',
    success: function (response) {
        response.forEach(ele => {
                produitSelect.innerHTML += `<option value=${ele.nom.substring(ele.nom.length -1, ele.nom.length)}>${ele.nom}</option>`
                ProdVals.push({'val': ele.nom.substring(ele.nom.length -1, ele.nom.length), 'quantite': ele.quantite});
            });
        }
    });

}

function funProduitSelect() {
    let valPro = produitSelect.value;
$.ajax({
        success: function (res) {
            ProdVals.forEach(ele => {
                if (valPro == ele.val) {
                    quantiteInput.value = ele.quantite;
                }
            });
        }
    });
}