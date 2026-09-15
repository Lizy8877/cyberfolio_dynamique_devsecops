async function fetchLatestBreach() {
    const apiUrl = 'https://haveibeenpwned.com/api/v3/latestbreach';

    try {
        // Effectuer la requête GET vers l'API
        const response = await fetch(apiUrl, {
            method: 'GET',
            headers: {
                'Accept': 'application/json',
                // Si nécessaire, ajoutez votre clé API ici : 
                // 'hibp-api-key': 'VOTRE_CLÉ_API'
            }
        });

        if (!response.ok) {
            throw new Error(`Erreur HTTP ! statut : ${response.status}`);
        }

        // Récupérer les données au format JSON
        const data = await response.json();

        // Sauvegarder ces données dans un fichier téléchargeable
        saveDataToFile(data);

        // Afficher les données sur la page
        displayData(data);
    } catch (error) {
        console.error('Erreur lors de la récupération des données :', error);
    }
}

// Fonction pour afficher les données sur la page
function displayData(data) {
    const outputDiv = document.getElementById('output');
    outputDiv.innerHTML = `
        <h2>${data.Title}</h2>
        <p><strong>Nom :</strong> ${data.Name}</p>
        <p><strong>Domaine :</strong> ${data.Domain}</p>
        <p><strong>Date de la fuite :</strong> ${data.BreachDate}</p>
        <p><strong>Nombre de comptes concernés :</strong> ${data.PwnCount}</p>
        <p><strong>Description :</strong> ${data.Description}</p>
        <pre><strong>Classes de données :</strong> ${JSON.stringify(data.DataClasses, null, 2)}</pre>
    `;
}

// Fonction pour sauvegarder les données dans un fichier JSON téléchargeable
function saveDataToFile(data) {
    const jsonString = JSON.stringify(data, null, 2); // Convertir les données en chaîne JSON formatée
    const blob = new Blob([jsonString], { type: 'application/json' }); // Créer un objet Blob avec le JSON
    const url = URL.createObjectURL(blob); // Créer une URL temporaire pour le Blob

    // Créer un élément <a> pour permettre le téléchargement du fichier
    const a = document.createElement('a');
    a.href = url;
    a.download = 'latestbreach.json'; // Nom du fichier à télécharger
    document.body.appendChild(a); // Ajouter le lien au DOM temporairement
    a.click(); // Simuler un clic pour télécharger le fichier

    // Nettoyer après le téléchargement
    document.body.removeChild(a);
    URL.revokeObjectURL(url); // Révoquer l'URL temporaire
}

// Lancer la récupération des données dès que la page est chargée
fetchLatestBreach();
