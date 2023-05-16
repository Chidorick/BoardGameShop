import './bootstrap';
import.meta.glob([
  '../images/**',
]);

const hexBtn = document.querySelector('.btn-ok');
const colors = ['#4caf50', '#388e3c', '#2e7d32', '#1b5e20'];

let currentIndex = 0;

function changeBackgroundColor() {
  hexBtn.style.backgroundColor = colors[currentIndex];

  currentIndex++;
  if (currentIndex >= colors.length) {
    currentIndex = 0;
  }
  setTimeout(changeBackgroundColor, 500);
}

changeBackgroundColor(); 