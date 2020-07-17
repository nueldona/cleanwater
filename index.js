// water bubbles

function createBubble() {
  const header = document.querySelector('header');
  const main = document.querySelector('.main');

  const createElement = document.createElement('span');
  const createBigElement = document.createElement('span');

  let size = Math.random() * 80;

  // size
  createElement.style.width = size + 'px';
  createElement.style.height = size + 'px';
  createElement.style.left = Math.random() * innerWidth + 'px';


  // appending elements
  header.appendChild(createElement);

  setTimeout(() => {
    createElement.remove()
  }, 3000);
}

setInterval(createBubble, 20)


// big size bubble

// function createBigBubble() {
//   const main = document.querySelector('.main');
//   const createBigElement = document.createElement('span');

//   let bigSize = Math.random() * 100;

//   // big size
//   createBigElement.style.width = bigSize + 'px';
//   createBigElement.style.height = bigSize + 'px';
//   createBigElement.style.left = Math.random() * innerWidth + 'px';

//   // appending elements
//   main.appendChild(createBigElement);

//   setTimeout(() => {
//     createBigElement.remove()
//   }, 12000);
// }

// setInterval(createBigBubble, 20)