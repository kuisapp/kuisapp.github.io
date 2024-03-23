// *****************************************Game Settings*****************************************

// selecting and getting diffculty level and categories


const gameProgress = document.querySelector('#wrapper');
// toggle sound icon on
const iconOn = document.querySelector("#off");

switcher = () => {
    iconOn.classList.toggle("fa-volume-up");
};

iconOn.addEventListener("click", switcher);
// Click Sound when volume on
const click = document.querySelector("#btnClick");
const allButtons = document.querySelectorAll(".btn");

clickBtn = () => {
    if (document.querySelector(".fa-volume-up ")) {
        click.play();
    }
};
Array.from(allButtons).forEach((a) => {
    a.addEventListener("click", clickBtn);
});