export function contact() {

    /***************
     * FORMULAIRE
     ***************/

    byId('myForm').addEventListener("submit", function (e) {
        e.preventDefault();

        // FormData permet de récupérer toutes les clés/valeurs du formulaire
        let data = new FormData(this);
        let xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                log(this.response);
            } else {
                log("erreur AJAX connexion au serveur");
            }
        };
        xhr.open("POST", "../src/contactForm.php", true);
        xhr.responseType = "json";
        //   xhr.setRequestHeader("Content-type", "application/w-www-form-urlencoded");
        xhr.send(data);

        // return 'false' pour etre sur de ne pas soumettre le formulaire malgré e.preventDefault()
        return false;
    });
}