function validerInscription() {

//////TEST VALIDITÉ NOM & PRENOM
    var prenom = /^[A-Za-zéè ]+$/;
    var nom = /^[A-Za-zéè ]+$/;

    var leprenom = document.getElementById("prenom").value;
    if (leprenom.match(prenom) == null)
    {
        alert('Seules les lettres sont autorisées !');
        res = false;
    }
    var lenom = document.getElementById("nom").value;
    if (lenom.match(nom) == null)
    {
        alert('Seuls les lettre sont autorisées !');
        res = false;
    }


//////TEST VALIDITÉ EMAIL
    var email = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var lemail = document.getElementById("email").value;
    if (lemail.match(email) == null)
    {
        alert("Email invalide");
        res = false;
    }


////// TEST MDP (CORRESPONDANCE ENTRE LES 2 CHAMPS)
    var res = true;
    var mdp = document.getElementById("mdp1").value;
    var confirmer = document.getElementById("mdp2").value;
    if (mdp != confirmer) {
        alert("mdp différents.");
        res = false;
    }

    return res;
}