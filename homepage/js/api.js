const topRated = (type) => {
    fetch(`https://api.themoviedb.org/3/movie/${type}?api_key=a9e207044af35b1fdbb56539947ae49a&language=en-US&page=1`)    
    .then((res) => res.json())
    .then(data => displayTop(data.results))
}
const displayTop = topR =>{
    const topContainer = document.getElementById('topRatedHome');
    // topContainer.textContent ='';

    topR.forEach(topMo => {
        const topDiv = document.createElement('div');
        topDiv.classList.add('col-4');
        topDiv.innerHTML =`
        <div class="movie-item movie-item-two">
        <div class="movie-poster">
            <img src=""https://image.tmdb.org/t/p/original${topMo.poster_path}" alt="">
            <ul class="overlay-btn">
                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                <li><a href="movie-details.html" class="btn">Details</a></li>
            </ul>
        </div>
        <div class="movie-content">
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="title"><a href="movie-details.html">Message in a Bottle</a></h5>
            <span class="rel">Adventure</span>
            <div class="movie-content-bottom">
                <ul>
                    <li class="tag">
                        <a href="#">HD</a>
                        <a href="#">English</a>
                    </li>
                    <li>
                        <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
        `
    })
    topContainer.appendChild(topDiv);
}

topRated('top_rated');

const loadData = (type) => {
    fetch(`https://api.themoviedb.org/3/movie/${type}?api_key=a9e207044af35b1fdbb56539947ae49a&language=en-US&page=1`)    
    .then((res) => res.json())
    .then(data => displayMovie(data.results))
}

const displayMovie = movies =>{

    const movieContainer = document.getElementById('movieDiv');
    movieContainer.textContent ='';

    movies = movies.slice(0,9);
    movies.forEach(movie => {
        // const upContainer = document.getElementById('upContainer');
        // upContainer.textContent='';
        const movieDiv = document.createElement('div');
        movieDiv.classList.add('movie-item','mb-50','col-4');
        movieDiv.innerHTML = `
                    <div class="movie-poster">
                        <a href=""><img class="img-fluid" src="https://image.tmdb.org/t/p/original${movie.poster_path}" alt=""></a>
                    </div>
                    <div class="movie-content">
                        <div class="top">
                            <h5 class="title"><a href="movie-details.html?id=${movie.id}">${movie.title ? movie.title : 'Coming Update Soon...'}</a></h5>
                            <span class="date">${movie.release_date ? movie.release_date: 'Coming Soon..'}</span>
                        </div>
                        <div class="bottom">
                            <ul>
                                <li><span class="quality">hd</span></li>
                                <li>
                                    <span class="duration"><i class="fa-solid fa-star"></i>${movie.vote_average}</span>
                                    <span class="rating"><i class="fas fa-thumbs-up"></i>${movie.vote_count}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                
        `

        movieContainer.appendChild(movieDiv);
    })
}
// document.getElementById('movies-tab').addEventListener('click', function(){
//     loadData('popular')
// })

loadData('upcoming');


// 677179
// const displayDetails = (id) => {
//     fetch(`https://api.themoviedb.org/3/movie/${id}?api_key=a9e207044af35b1fdbb56539947ae49a&language=en-US`) 
//     .then((res) => res.json())
//     .then(data => displayMovie(data));
// }
// const displayMovie = details=>{

// }


