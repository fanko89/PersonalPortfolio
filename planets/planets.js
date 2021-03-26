import { planets } from '../data/planets.js'
import { getLastNumber } from '../utils/index.js'


let planet = document.querySelector('#planetList')


for (let i = 0; i < planets.length; i++) {

    const foundPlanet = films.find(planet => getLastNumber(planet.url) === (i + 1).toString())
    let posterFig = document.createElement('figure')
    let figImg = document.createElement('img')
    figImg.src = `https://starwars-visualguide.com/assets/img/planets/${i + 1}.jpg`
    let figCaption = document.createElement('figcaption')

    figCaption.textContent = foundPlanet.title
    posterFig.appendChild(figImg)
    posterFig.appendChild(figCaption)

    filmList.appendChild(posterFig)
}
