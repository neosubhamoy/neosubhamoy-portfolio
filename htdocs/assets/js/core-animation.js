//---hello textbox on pome page (hero-section) config
function animate_hello() {
    const texts = ["Namaste! 🙏", "Hello! 👋", "Konnichiwa! 😄", "Anyeonghaseyo! 😊", "Hola! 😃", "Bonjour! 😄", "Zdravstvuyte! 🙂", "Marhabaan! 😊", "Olá! 😃", "Salve! 🤠"];
    const textContainer = document.getElementById("helloContainer");
    
    let currentIndex = 0;
    function animateText() {
        textContainer.textContent = texts[currentIndex];
        currentIndex = (currentIndex + 1) % texts.length;
    
        setTimeout(() => {
            animateText();
        }, 3000);
    }
    animateText();
}

if(document.getElementById("helloContainer")) {
    animate_hello();
}

//---hoverAnimatedContainer animation config
const animate_card_mouseover_effect = e => {
    const { currentTarget: target } = e;
    const rect = target.getBoundingClientRect(),
        x = e.clientX - rect.left,
        y = e.clientY - rect.top;

    target.style.setProperty("--mouse-x",`${x}px`);
    target.style.setProperty("--mouse-y",`${y}px`);
}

if(document.querySelectorAll(".hoverAnimatedContainer")){
    for(const card of document.querySelectorAll(".hoverAnimatedContainer")){
        card.onmousemove = e => animate_card_mouseover_effect(e);
    }
}