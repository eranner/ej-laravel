let cards = document.querySelectorAll('.card')

cards.forEach(card => {
    card.style.transition = 'all .5s'
    card.addEventListener('mouseover', ()=> {
        card.style.transform = 'scale(1.05)'
    })
    card.addEventListener('mouseout', ()=> {
        card.style.transform = 'scale(1)'
    })
})