function exercices1(Montant, Devise, Taux) {
  if (!Montant || isNaN(Montant) || Montant <= 0) {
      return "Veuillez entrer un montant valide.";
  }

  switch (Devise) {
      case "USD":
          return Montant * 100 + " Unités";
      case "CDF":
          return ((Montant / Taux) * 100).toFixed(1) + " Unités";
      case "U":
          let varusd = (Montant / 100).toFixed(2) + " USD";
          let varcdf = ((Montant / 100) * Taux).toFixed(2) + " CDF";
          return `L'équivalent en dollar : ${varusd} <br> L'équivalent en franc congolais : ${varcdf}`;
      default:
          return "Devise non reconnue";
  }
}

function getSelectedValue() {
  let montant = document.querySelector("#amount").value;
  let devise = document.querySelector("#currency").value;
  let taux = 3000; // Taux de conversion USD/CDF

  let result = exercices1(montant, devise, taux);
  
  document.querySelector("#resultat").innerHTML = result;
}



// Déconnexion automatique après 2 minutes d'inactivité
let timeout;

function resetTimer() {
    clearTimeout(timeout);
    timeout = setTimeout(() => {
        window.location.href = 'Formulaire de connexion.php'; // Redirige vers la page de connexion
    }, 240000); // 4 minutes
}

// Écoutez les événements d'activité
window.onload = resetTimer;
window.onmousemove = resetTimer;
window.onkeydown = resetTimer;

