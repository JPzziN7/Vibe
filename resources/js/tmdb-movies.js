const API_KEY = '77e98f224dccea3fb6be3b097717f48c';
const BASE_URL = 'https://api.themoviedb.org/3';
const IMG_URL = 'https://image.tmdb.org/t/p/w500';

const moviesList = document.getElementById('movies-list');

async function loadRandomMovies() {
    try {
        const response = await fetch(
            `${BASE_URL}/movie/popular?api_key=${API_KEY}&language=pt-BR&page=1`
        );

        const data = await response.json();

        // embaralha os filmes
        const shuffled = data.results.sort(() => 0.5 - Math.random());

        // pega só 12 (quantidade dos cards)
        const selectedMovies = shuffled.slice(0, 25);

        moviesList.innerHTML = '';

        selectedMovies.forEach(movie => {
            if (!movie.poster_path) return;

            const li = document.createElement('li');
            li.innerHTML = `
                <a href="#">
                    <img 
                        src="${IMG_URL + movie.poster_path}" 
                        alt="${movie.title}"
                    >
                </a>
            `;

            moviesList.appendChild(li);
        });

    } catch (error) {
        console.error('Erro ao carregar filmes:', error);
    }
}

loadRandomMovies();
