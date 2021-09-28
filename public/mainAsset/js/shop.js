let color = 0

function loveclick() {
    const icon = document.getElementById('love-icon');


    if (color === 0) {
        icon.style.color = 'red';
        color = 1;
    } else {
        icon.style.color = 'black';
        color = 0;
    }

}
