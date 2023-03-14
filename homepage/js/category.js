const loadType = (type, page) => {
    fetch(`https://api.themoviedb.org/3/movie/${type}?api_key=a9e207044af35b1fdbb56539947ae49a&language=en-US&page=${page}`)
    .then((res) => res.json())
    .then(data => displayMovie(data.results));
}

const displayMovie = movies =>{
    // console.log(movies);
    const movieContainer = document.getElementById('popularDiv');
    // movieContainer.textContent ='';
    movies.forEach(movie => {
        const d = new Date(`${movie.release_date}`);
        let year = d.getFullYear();
        const movieDiv = document.createElement('div');
        movieDiv.classList.add('col-3','grid-item','grid-sizer','cat-two');
        movieDiv.innerHTML = `

        <div class="movie-item movie-item-three mb-50">
            <div class="movie-poster">
                <img src="https://image.tmdb.org/t/p/original${movie.poster_path}" alt="">
                <ul class="overlay-btn">
                    <li class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </li>
                    <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                    <li><a href="movie-details.html?id=${movie.id}" class="btn">Details</a></li>
                </ul>
            </div>
            <div class="movie-content">
                <div class="top">
                    <h5 class="title"><a href="movie-details.html?id=${movie.id}">${movie.title ? movie.title : 'Coming Update Soon...'}</a></h5>
                    <span class="date">${year}</span>
                </div>
                <div class="bottom">
                    <ul>
                        <li><span class="quality">hd</span></li>
                        <li>
                            <span class="duration"><i class="fa-solid fa-star"></i> ${movie.vote_average} </span>
                            <span class="rating"><i class="fa-solid fa-heart"></i> ${movie.vote_count}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
                
        `

        movieContainer.appendChild(movieDiv);
    })
}

const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const data = urlParams.get('id');
const page = urlParams.get('page');
loadType(data,page);
console.log(data,page);
const reco = localStorage.getItem('id');

const loadReco = (id,page) =>{
    fetch(`https://api.themoviedb.org/3/movie/${id}/recommendations?api_key=a9e207044af35b1fdbb56539947ae49a&language=en-US&page=${page}`)
    .then((res) => res.json())
    .then(data => displayMovie(data.results));
}
loadReco(reco,page);


