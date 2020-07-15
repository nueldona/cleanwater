// water bubbles

function createBubble() {
  const header = document.querySelector('header');
  const createElement = document.createElement('span');

  let size = Math.random() * 80;

  createElement.style.width = size + 'px';
  createElement.style.height = size + 'px';
  createElement.style.left = Math.random() * innerWidth + 'px';

  header.appendChild(createElement);

  setTimeout(() => {
    createElement.remove()
  }, 4000);
}

setInterval(createBubble, 20)