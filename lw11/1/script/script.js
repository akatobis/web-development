const popupBg = document.querySelector('.popup-bg');
const popupContent = document.querySelector('.popup__content')
const openPopupBtn = document.querySelectorAll('.button');
const closePopup = document.querySelector('.btn_close-popup');
const sendPopupBtn = document.querySelector('.form__button');
const popup = document.querySelector('.popup');

openPopupBtn.forEach((button) => {
   button.addEventListener("click", () => {
      popupBg.classList.add('active')
      popupContent.classList.add('active')
   })
})

closePopup.addEventListener('click', () => {
   popupBg.classList.remove('active')
   popupContent.classList.remove('active')
})

document.addEventListener('click', (e) => {
   if (e.target === popupBg) {
      popupBg.classList.remove('active')
      popupContent.classList.remove('active')
   }
})

document.addEventListener('keydown', (e) => {
   if (e.key === "Escape") {
      popupBg.classList.remove('active')
      popupContent.classList.remove('active')
   }
})

const email = document.getElementById('email');
const name = document.getElementById('name');
const profession = document.getElementById('profession');
const agreement = document.getElementById('agreement');

let value = false;

function validate(email, name) {
   let validEmail = /^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/i.test(email.value);
   let validName = /^[a-zа-яё]+$/i.test(name.value)

   if ((!validEmail)) {
      email.style.borderColor = '#EE5858';
   } else {
      email.style.borderColor = '#C0C0C0';
   }

   if ((!validName)) {
      name.style.borderColor = '#EE5858';
   } else {
      name.style.borderColor = '#C0C0C0';
   }

   return validEmail && validName;
}

popupContent.addEventListener('click', () => {
   if ((email.value !== '') && (name.value !== '')) {
      validate(email, name)
   }
})

sendPopupBtn.addEventListener('click', () => {
   if (email.value === '') {
      email.style.borderColor = '#EE5858';
   }

   if (name.value === '') {
      name.style.borderColor = '#EE5858';
   }

   if (validate(email, name)) {
      let upload = {
                "name": name.value,
                "email": email.value,
                "profession": profession.value,
                "agreement": agreement.checked
            };

      async function doFecth() {
         const response = await fetch("form_handler.php",
         {
            method: "POST",
            headers: {
               "Content-type": "application/json; charset=utf-8"
            },
            body: JSON.stringify(upload)
         });

         // декодировать json и проверить на ошибку
         json = await response.json()
         console.log(json);

         if (response.ok) {
            popupBg.classList.remove('active');
            popup.classList.remove('active');
            name.value = '';
            email.value = '';
            profession.value = '';
            agreement.checked = 0;
         } else {
            popupContent.classList.add('disable');
            const error = document.createElement('h2');
            error.innerHTML = 'Упс.. Произошла ошибка!';
            error.classList.add('popup__error-message')
            popup.appendChild(error);
         }
      }

      doFecth();
   }
})


