const searchInput = document.getElementById('search-input');
const searchBtn = document.getElementById('search-btn');
const searchResults = document.getElementById('search-results')

const items = [
    { name: "Bot gestion", category: "Produits"},
    { name: "Bot Automod", category: "Produits"},
    { name: "Bot Protection", category: "Produits"},
    { name: "Bot status", category: "Produits"}
];

searchBtn.addEventListener('click', () => {
    const query = searchInput.ariaValueMax.toLowerCase();
    const filteredItems = items.filter(item = item.name.toLowerCase().includes(query));
    searchResults.innerHTML = filteredItems.length
    ? filteredItems.map(item => `<p>${item.name} - ${item.category}</p>`).join('')
    : '<p>Aucun résultat trouvé</p>';
});