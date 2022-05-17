const wElement = document.querySelector('.written-text');
const myTexts = ['Bienvenido', ' ', ' ', ' '];
let myWritterMachine = new WritterMachine(wElement, {
    texts: myTexts,
    speed: 250,
    prefix: '',
    sufix: '',
    lowerLimit: 0,
    upperLimit: 0,
    enableStyles: true,
    customStyles: ''
});