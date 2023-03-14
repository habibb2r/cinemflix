const displayDetails = (id) => {
    fetch(`https://api.themoviedb.org/3/movie/${id}?api_key=a9e207044af35b1fdbb56539947ae49a&language=en-US`) 
    .then((res) => res.json())
    .then(data => displayMovie(data));
}

const displayMovie = details=>{
    // localStorage.setItem('id',${details.id})
    const movieDetails = document.getElementById('movie-d-img');
    movieDetails.innerHTML=`
    <img src="https://image.tmdb.org/t/p/original${details.poster_path}" alt="" class="img-fluid">
    <a href="${details.homepage}" class="popup-video"><img src="img/images/play_icon.png" alt=""></a>
    `;
    const movieContent = document.getElementById('movie-d-c');
    movieContent.innerHTML=`
                    <h5>New ${details.genres[0].name}</h5>
                    <h2>Movie : <span>${details.original_title}</span></h2>
                    <div class="banner-meta">
                        <ul>
                            <li class="quality">
                                <span>Pg 18</span>
                                <span>hd</span>
                            </li>
                            <li class="category">
                                <a href="#">${details.genres[0].name},</a>
                                <a href="#">${details.genres[1].name}</a>
                            </li>
                            <li class="release-time">
                                <span><i class="far fa-calendar-alt"></i> ${details.release_date}</span>
                                <span><i class="far fa-clock"></i> ${details.runtime} min</span>
                            </li>
                        </ul>
                    </div>
                    <p>${details.overview}</p>
                    <div class="movie-details-prime">
                        <ul>
                            <li class="share"><a href="${details.homepage}"><i class="fas fa-share-alt"></i> Share</a></li>
                            <li class="streaming">
                                <h6>Prime Video</h6>
                                <span>Streaming Channels</span>
                            </li>
                            <li class="watch"><a href="${details.homepage}" class="btn popup-video"><i class="fas fa-play"></i> Watch Now</a></li>
                        </ul>
                    </div>
    `
}

const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const data = urlParams.get('id');
displayDetails(data);
localStorage.setItem('id',data);