const container = document.querySelector('.container');
const left = document.querySelector('.container__left');

if (window.innerWidth <= 768) {
  container.removeChild(left);
}