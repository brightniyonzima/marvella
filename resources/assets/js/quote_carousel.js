import Siema from "siema";

function elementExists(element) {
    let foundElement = document.querySelector(element);
    return foundElement || false
}

//quotes
if (elementExists('#quotes')) {
    const quotes = new Siema({
        selector: '#quotes',
        duration: 300,
        loop: true,
        easing: 'ease-out',
        draggable: true,
        threshold: 20,
    });

    //auto scroll
    setInterval(() => quotes.next(), 10000);
}

//flows
if (elementExists('#flows')) {
    const flows = new Siema({
        selector: '#flows',
        duration: 200,
        easing: 'ease-out'
    });
    document.querySelector('.button.prev').addEventListener('click', () => flows.prev());
    document.querySelector('.button.next').addEventListener('click', () => flows.next());
}

//products
if (elementExists('.products')) {
    const products = new Siema({
        selector: '.products',
        duration: 200,
        easing: 'ease-out'
    });
    document.querySelector('#products .button.prev').addEventListener('click', () => products.prev());
    document.querySelector('#products .button.next').addEventListener('click', () => products.next());
}