// из-за копировании текста зи телеграмма при вставке произошли корявые изменения с кавычками, поправил и теперь всё норм
const btn = document.querySelector('.js-myButton')
const formOverlay = document.getElementById('myForm')
const formContent = formOverlay.querySelector('.form-container')
const formCloseBtn = formContent.querySelector('#js-form_close')

function openForm () {
  formOverlay.style.visibility = 'visible'
}

function closeForm () {
  formOverlay.style.visibility = 'hidden'
}

btn.addEventListener('click', () => {
    openForm()
  },
)

formContent.addEventListener('click', event => {
  event.stopPropagation()
})

formOverlay.addEventListener('click', event => {
  closeForm()
})

formCloseBtn.addEventListener('click', event => {
  closeForm()
})
