const body = document.querySelector('body');

if( typeof popupId === "number" ) {

  var URL = "http://yii/testdrive/popup/" + popupId;
  var getJSON = function (url, callback) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);
    xhr.responseType = 'json';
    xhr.onload = function() {
      var status = xhr.status;
      if (status === 200) {
        callback(null, xhr.response);
      } else {
        callback(status, xhr.response);
      }
    };
    xhr.send();
  };

  var modal = document.createElement('div');
  modal.style.visibility = "hidden";
  getJSON(URL,
    function(err, data) {
      if (err !== null) {
        console.log('Error: ' + err);
      } else {
        if (data.html != ''){
          modal.innerHTML = data.html;
          body.append(modal);

          var timeout = setTimeout(function(){
            updateTime();
          }, 10000);
          clearTimeout(updateTime);
        }
      }
    }
  );

}




function existVerticalScroll() {
   return document.body.offsetHeight > window.innerHeight
}

function getBodyScrollTop() {
    return self.pageYOffset || (document.documentElement && document.documentElement.ScrollTop) || (document.body && document.body.scrollTop);
  }

function updateTime(){
  body.dataset.scrollY = getBodyScrollTop();

  modal.querySelector('.modal').classList.add('modal_opened');
  modal.style.visibility = "visible";

  if(existVerticalScroll()) {
     body.classList.add('body-lock');
     body.style.top = `-${body.dataset.scrollY}px`;
   }

   let closeModalButton = modal.querySelector('.btn-close');
   closeModalButton.addEventListener('click', e => {
     e.preventDefault();

     modal.querySelector('.modal').classList.remove('modal_opened');
     modal.querySelector('.modal').style.visibility = "hidden";

     if(existVerticalScroll()) {
      body.classList.remove('body-lock');
      window.scrollTo(0, body.dataset.scrollY);
     }
   })

}
