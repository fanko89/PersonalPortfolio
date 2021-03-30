import { senators } from '../data/senators.js'
import { representatives } from '../data/representatives.js'

console.log(senators.length, representatives.length)

const congressGrid = document.querySelector('.congressGrid')
const seniorityButton = document.querySelector('#seniorityButton')
const birthdayButton = document.querySelector('#birthdayButton')

seniorityButton.addEventListener('click', () => {
    senioritySort()
})

birthdayButton.addEventListener('click', () => {
    birthdaySort()
})

missedButton.addEventListener('click', () => {
    birthdaySort()
})

function populateCongressGrid(congressPeople) {
    congressPeople.forEach(person =>{
        let personDiv = document.createElement('div')
        let personFig = document.createElement('figure')
        let figImg = document.createElement('img')
        let figCaption = document.createElement('figcaption')

        figCaption.txtContent = '${person.name}'
        figImg.scr = person.imgURL

        personFig.appendChild(figImg)
        personFig.appendChild(figCaption)
        personDiv.appendChild(personFig)
        congressGrid.appendChild(personDiv)
    })
}

function getSimplifiedCongress(congressPeople) {
    return congressPeople.map(person =>{
        let middleName = person.middleName ? '${person.middle_name}' : ''
        return{
            id: person.id,
            name: '${person.first_name} ${middleName} ${person.last_name}'
            imgURL: `https://www.govtrack.us/static/legislator-photos/${person.govtrack_id}-100px.jpeg`
        }
    })