let isDivVisible = false; // Pour suivre l'état de la div

document.getElementById("reloadButton").addEventListener("click", function() {
    const outputDiv = document.getElementById("output");

    if (isDivVisible) {
        outputDiv.style.display = 'none'; // Cache la div
    } else {
        outputDiv.style.display = 'block'; // Affiche la div
        loadScript(); // Charge le script si la div est montrée
    }

    isDivVisible = !isDivVisible; // Change l'état de la div
});

function loadScript() {
    const script = document.createElement("script");
    script.src = "js/faille.js"; // Lien vers ton fichier JS
    document.body.appendChild(script); // Ajoute le script à la page
}