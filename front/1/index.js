const button = document.querySelector('.button_type');
const buttonMore = document.querySelector('.button_more');
const tileList = document.querySelector('.tile-list');
const URL = 'https://jsonplaceholder.typicode.com/photos?_limit=17';

button.addEventListener("click", function (){
    tileList.classList.toggle('new-width');
});

fetch(URL)
    .then((response) => response.json())
    .then(data => drawTile(data))
    .catch((error) => console.log(console.log(error)));

function drawTile(data){
    if(data.length > 6) {
        buttonMore.classList.add('visible');
        buttonMore.addEventListener("click", function(){
            const tilesLength = document.querySelectorAll('.tile').length;

            if(tilesLength >= data.length - 5){
                for (let i = tilesLength; i < data.length; i++){
                    const image = document.createElement('img');
                    image.setAttribute("src", data[i].url);
                    image.classList.add('tile');
                    tileList.appendChild(image);
                };
                buttonMore.classList.remove('visible');

            } else {
                for (let i = tilesLength - 1; i < tilesLength + 5; i++){
                    const image = document.createElement('img');
                    image.setAttribute("src", data[i].url);
                    image.classList.add('tile');
                    tileList.appendChild(image);
                };
            }
        });
    };

    for (let i = 0; i < 6; i++){
        const image = document.createElement('img');
        image.setAttribute("src", data[i].url);
        image.classList.add('tile');
        tileList.appendChild(image);
    };
};
