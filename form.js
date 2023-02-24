// из-за копировании текста зи телеграмма при вставке произошли корявые изменения с кавычками, поправил и теперь всё норм
const btn = document.querySelector('.js-myButton')

function openForm () {
  document.getElementById('myForm').style.display = 'block'
}

function closeForm () {
  document.getElementById('myForm').style.display = 'none'
}

btn.addEventListener('click', () => {
    openForm()
  },
)
