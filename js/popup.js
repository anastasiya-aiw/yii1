var timeout = setTimeout(function(){
  updateTime();
}, 1000);
clearTimeout(updateTime);

const body = document.querySelector('body');
const modal = document.querySelector('.modal');

function existVerticalScroll() {
   return document.body.offsetHeight > window.innerHeight
}

function getBodyScrollTop() {
    return self.pageYOffset || (document.documentElement && document.documentElement.ScrollTop) || (document.body && document.body.scrollTop);
  }

function updateTime(){
  body.dataset.scrollY = getBodyScrollTop();

  modal.classList.add('modal_opened');

  if(existVerticalScroll()) {
     body.classList.add('body-lock');
     body.style.top = `-${body.dataset.scrollY}px`;
   }
}

const closeModalButton = document.querySelector('.btn-close');
closeModalButton.addEventListener('click', e => {
  e.preventDefault();

  modal.classList.remove('modal_opened');

  if(existVerticalScroll()) {
   body.classList.remove('body-lock');
   window.scrollTo(0, body.dataset.scrollY);
  }
})
