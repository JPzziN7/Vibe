const seriesList = document.getElementById('series-list');

async function loadRandomSeries() {
    try {
        // TVmaze endpoint popular (lista geral)
        const response = await fetch('https://api.tvmaze.com/shows');
        const data = await response.json();

        // embaralha as séries
        const shuffled = data.sort(() => Math.random() - 0.5);

        // pega só 12
        const selectedSeries = shuffled.slice(0, 25);

        seriesList.innerHTML = '';

        selectedSeries.forEach(show => {
            if (!show.image || !show.image.medium) return;

            const li = document.createElement('li');
            li.innerHTML = `
                <a href="#">
                    <img 
                        src="${show.image.medium}" 
                        alt="${show.name}"
                    >
                </a>
            `;

            seriesList.appendChild(li);
        });

    } catch (error) {
        console.error('Erro ao carregar séries:', error);
    }
}

loadRandomSeries();
