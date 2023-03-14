const serachMovie = (searchTExt,page) =>{
    fetch(`https://api.themoviedb.org/3/search/movie?api_key=a9e207044af35b1fdbb56539947ae49a&language=en-US&query=${searchTExt}&page=${page}&include_adult=false`)
    .then ((res) => res.json())
    .then (data => displaySearch(data));
}
const displaySearch = selected=>{
    console.log(selected);
}
document.getElementById('searchBtn').addEventListener('click', function(){
    const searchField = document.getElementById('searchArea');
    searchField.value='';
    const searchTExt = searchField.value;
    serachMovie(searchTExt,page);
})