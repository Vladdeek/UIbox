// Анимация появления модального окна
let modalwindow = document.querySelector('.modal-window')
let blurscreen = document.querySelector('.blur-screen')

let editimgform = document.querySelector('.edit-img')
let addcontentform = document.querySelector('.add-content')

editimgform.style.display = 'none'
addcontentform.style.display = 'none'

function editProfile() {
	editimgform.style.display = 'block'

	modalwindow.style.visibility = 'visible'
	modalwindow.style.opacity = '1'
	modalwindow.style.top = '15%'

	blurscreen.style.visibility = 'visible'
	blurscreen.style.opacity = '1'
}
function addcontent() {
	addcontentform.style.display = 'block'

=======

function editProfile() {

	modalwindow.style.visibility = 'visible'
	modalwindow.style.opacity = '1'
	modalwindow.style.top = '15%'

	blurscreen.style.visibility = 'visible'
	blurscreen.style.opacity = '1'
}

function hidemodal() {
	modalwindow.style.visibility = 'hidden'
	modalwindow.style.opacity = '0'
	modalwindow.style.top = '-35%'

	blurscreen.style.visibility = 'hidden'
	blurscreen.style.opacity = '0'
	setTimeout(() => {
		editimgform.style.display = 'none'
		addcontentform.style.display = 'none'
	}, 250)

}

const fileInput = document.getElementById('file')
const imagePreview = document.getElementById('imagePreview')
const uploadbtn = document.querySelector('.upload-button')
const subbtn = document.querySelector('.subbtn')

fileInput.addEventListener('change', () => {
	const file = fileInput.files[0]
	if (file && file.type.startsWith('image/')) {
		// Проверка на изображение
		const reader = new FileReader()

		reader.onload = function (e) {
			imagePreview.src = e.target.result
			imagePreview.style.display = 'flex'
			uploadbtn.style.display = 'none'
			subbtn.style.display = 'inline'
		}

		reader.readAsDataURL(file)
	}
})
