const button = document.getElementById("btn");
const url = "/handler.php";

button.addEventListener("click", () => {
      async function doFecth() {
         const response = await fetch(url);

         json = await response.json()

         // формирую html
         const data = document.querySelector('.data');

         // если нет фалов, то вывожу сообщение
         if (Object.keys(json).length === 0) {
            const notFound = document.createElement('p');
            notFound.innerHTML = 'Сохранённых пользователей нет';
            notFound.classList.add('text')
            data.appendChild(notFound);
         } 

         // добавляю данные всех пользователей
         for (let i = 0; i < Object.keys(json).length; i++) {

            const div = document.createElement('div');
            data.appendChild(div);
            div.classList.add('data__user');

            const img = document.createElement('img');
            img.src  = '/images/icon.svg'
            img.alt = 'icon'
            div.appendChild(img)
            img.classList.add('icon');

            const name = document.createElement('p');
            name.innerHTML = json[i]["name"];
            name.classList.add('text')
            div.appendChild(name);

            const email = document.createElement('p');
            email.innerHTML = json[i]["email"];
            email.classList.add('text')
            div.appendChild(email);

            const activity = document.createElement('p');
            activity.innerHTML = json[i]["activity"];
            activity.classList.add('text')
            div.appendChild(activity);
         }
      }

   doFecth();
})