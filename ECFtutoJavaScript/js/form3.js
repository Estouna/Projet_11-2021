document.getElementById("formInscription").addEventListener("submit",valider,false);
//Sélection id et ajout d'évènements

function valider(e)
{
    let estValide = true;

    let login = document.getElementById("txtLogin").value;
    let email = document.getElementById("email").value;
    let email2 = document.getElementById("email2").value;
    let password = document.getElementById("txtMdp").value;
    let password2 = document.getElementById("txtMdp2").value;

    if (!validerChampObligatoire(login))
    {
        document.getElementById("errLogin").textContent = "Veuillez saisir un nom d'utilisateur";
        estValide = false;
    }
    else{
        document.getElementById("errLogin").textContent = "";
    }

    if (!validerChampObligatoire(email))
    {
        document.getElementById("errMail").textContent = "Veuillez saisir une adresse email valide";
        estValide = false;
    }
    else{
        document.getElementById("errMail").textContent = "";
    }

    if (!validerChampObligatoire(email2))
    {
        document.getElementById("errMail2").textContent = "Veuillez confirmer votre adresse email";
        estValide = false;
    }
    else{
        document.getElementById("errMail2").textContent = "";
    }

    if (email != email2)
    {
        document.getElementById("errMail2").textContent = "Les adresses email ne sont pas identiques";
        estValide = false;
    }
    else{
        document.getElementById("errMail2").textContent = "";
    }

    if (!validerChampObligatoire(password))
    {
        document.getElementById("errMdp").textContent = "Veuillez saisir un mot de passe";
        estValide = false;
    }
    else{
        document.getElementById("errMdp").textContent = "";
    }

    if (!validerChampObligatoire(password2))
    {
        document.getElementById("errMdp2").textContent = "Veuillez confirmer votre mot de passe";
        estValide = false;
    }
    else{
        document.getElementById("errMdp2").textContent = "";
    }

    if (password != password2)
    {
        document.getElementById("errMdp2").textContent = "Les mots de passe ne sont pas identiques";
        estValide = false;
    }
    else{
        document.getElementById("errMdp2").textContent = "";
    }

    if(!estValide)// ! = n'est pas valide, sans ! est valide
    {
        // bloque l'envoi du formulaire (penser à mettre le e dans la parenthèse de la fonction sinon e sera inconnu)
        e.preventDefault();
    }

}

function validerChampObligatoire(champ)
{
    let estValide = true;

    if(champ.length == 0)
    {
        estValide = false;
    }

    return estValide;
}
