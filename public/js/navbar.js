const menu = document.getElementById('menu')
const nav = document.querySelector('.nav')
menu.addEventListener('click', () => {
  menu.classList.toggle('bx-x')
  nav.classList.toggle('active')
})