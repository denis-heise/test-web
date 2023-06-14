const form = document.querySelector('.form');
const inputs = form.querySelectorAll('input');
const backButton = document.querySelector('.back');
let totalArray = [];

inputs.forEach(item => {
    item.addEventListener("keydown", function(){
        const objData = {
            id: this.dataset.id,
            value: this.value
        };

        totalArray.push(objData);
    });
});

backButton.addEventListener("click", function(){
    if(totalArray.length !== 0){
        const previousValue = totalArray[totalArray.length - 1];

        inputs.forEach(item => {
            if(item.dataset.id === previousValue.id){
                item.value = previousValue.value
            };
        });
    
        totalArray.pop();
    }
});
