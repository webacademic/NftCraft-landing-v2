const popupBtn = document.querySelector('.popup-btn.serv'),
    popup = document.querySelector('.popup.serv'),
    form = document.querySelector('form');


if (popupBtn) {
    const inputs = form.querySelectorAll('input')
    popupBtn.addEventListener('click', (e) => {
        e.preventDefault();
        popup.classList.add('active');
    })
    
    popup.addEventListener('click', (e) => {
        const target = e.target;
    
        if (target.classList.contains('popup') || target.classList.contains('popup-close')) {
            popup.classList.remove('active');
        }
    })
    inputs.forEach(item => {
        item.addEventListener('input', () => {
    
            if (inputs[0].value !== '' && inputs[1].value !== ''  && inputs[2].value !== '') {
                form.querySelector('button').classList.remove('inactive')
            } else {
                form.querySelector('button').classList.add('inactive')
            }
        })
    })
}




