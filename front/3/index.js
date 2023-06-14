window.addEventListener('load', () => {
    setPlusIcon();
});

function setPlusIcon (){
    const items = document.querySelectorAll('.item');

    items.forEach(item => {
        const link = item.querySelector('a');

        link.addEventListener("click", aClick)

        if(item.querySelector('ul')){
            item.classList.add('plus');
        };
    });
};

function aClick (evt){
    const parentLi = this.closest('.item');
    const liList = parentLi.querySelector('ul');

    if(liList !== null){
        evt.preventDefault();
        liList.style.backgroundColor = 'grey';
    };
};