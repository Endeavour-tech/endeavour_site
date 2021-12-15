const $ = (selector) => document.querySelector(selector)
//Scroll scripts

function scrollDown() {
    const scrollTo__bottom__btn = $('.scrollTo__bottom__btn')
    const web__dev__service__title = $('.web__dev')
    
    scrollTo__bottom__btn.addEventListener('click', function() {
        const titleHeight = getComputedStyle(web__dev__service__title).height.split('.')[0]
        window.scrollTo(0, Number(titleHeight) || window.innerHeight)
    })

}

//export

export default scrollDown