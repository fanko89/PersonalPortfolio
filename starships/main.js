import { starships } from '../data/starships.js'
import { getLastNumber, removeChildren } from '../utils/index.js'

console.log(starships.length)

const ships = document.querySelector('ships')
const shipList = document.querySelector('.shipList')
const shipView = document.querySelector('.shipView')

const modal = document.querySelector('.modal')
const modalCloseButton = document.querySelector('.modal-close')

modalCloseButton.addEventListener('click', () => {
    modal.classList.remove('is-active')
})

function populateNav(starships) {
    starships.forEach((starship) => {
        let anchorWrap = document.createElement('a');
        anchorWrap.href = '#';
        anchorWrap.textContent = starship.name; // Set text content directly to anchor element
        anchorWrap.addEventListener('click', (event) => {
            event.preventDefault(); // Prevent default behavior
            populateShipView(starship);
        });
        let listItem = document.createElement('li');
        listItem.appendChild(anchorWrap);
        shipList.appendChild(listItem);
    });
}
function populateShipView(shipData) {
    removeChildren(shipView);
    let shipNum = getLastNumber(shipData.url);
    let shipContainer = document.createElement('div');
    shipContainer.classList.add('ship-container');
    let shipImage = document.createElement('img');
    shipImage.src = `https://starwars-visualguide.com/assets/img/starships/${shipNum}.jpg`;

    
    shipImage.addEventListener('error', (err) => {
        console.log(`Oops! Image doesn't exist.`);
        modal.classList.add('is-active'); 
    });

   
    shipImage.addEventListener('load', () => {
      
        modal.classList.remove('is-active');
    });

    shipContainer.appendChild(shipImage);

 
    const closeButton = document.createElement('button');
    closeButton.textContent = '×'; 
    closeButton.classList.add('close-button');
    closeButton.addEventListener('click', () => {
        removeChildren(shipView);
    });
    shipContainer.appendChild(closeButton);

    shipView.appendChild(shipContainer);
}

function addStarField(element, numStars) {
    element.style.setProperty('background-color', '#000')
    for (let i = 0; i < numStars; i++) {
        let star = document.createElement('div')
        star.style.setProperty('position', 'absolute')
        star.style.setProperty('width', '2px')
        star.style.setProperty('height', '1px')
        star.style.setProperty('background-color', 'white')
        let xy = getRandomPosition()
        star.style.left = `${xy[0]}px`
        star.style.top = `${xy[1]}px`
        element.appendChild(star)
    }
}

function getRandomPosition() {
    let y = document.body.scrollHeight
    let x = document.body.scrollWidth
    let randomY = Math.floor(Math.random() * y)
    let randomX = Math.floor(Math.random() * x)
    return [randomX, randomY]
}

populateNav(starships)

addStarField(document.querySelector('body'), 1000)
