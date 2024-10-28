const myObserver = new IntersectionObserver((entries) => {
    entries.forEach( (entry) => {
        if(entry.isIntersecting) {
            entry.target.classList.add('show')
            entry.target.classList.add('show-socios')
        } else {
            entry.target.classList.remove('show')
            entry.target.classList.remove('show-socios')
        }
    })
})

const elements = document.querySelectorAll('.hidden, .hidden-socios')

elements.forEach((element) => myObserver.observe(element))