// Подключите все элементы в начале
let floatDiv = document.querySelector('.float')
let button1 = document.querySelector('.button1')
let button2 = document.querySelector('.button2')
let reg = document.querySelector('.register')
let login = document.querySelector('.login')
let newpassinput = document.querySelector('.password2')
let butregorlog = document.querySelector('.double_button')
let username = document.querySelector('.createusername')

// Инициализация кнопок и стилей
button1.style.color = 'black'
reg.style.display = 'none'
username.style.display = 'none'
login.style.display = 'block'

function Button1() {
	if (button1.style.color === 'black') {
		console.log('Кнопка уже нажата')
	} else {
		button1.style.color = 'black'
		floatDiv.style.left = '120px'
		floatDiv.style.left = '5px'
		button2.style.color = 'white'
		newpassinput.style.transform = 'translateY(-56px)'
		newpassinput.style.opacity = '0'
		newpassinput.style.visibility = 'hidden'
		setTimeout(() => {
			login.style.display = 'block'
			reg.style.display = 'none'
		}, 250)
	}
}

function Button2() {
	if (button2.style.color === 'black') {
		console.log('Кнопка уже нажата')
	} else {
		button1.style.color = 'white'
		floatDiv.style.left = '120px'
		floatDiv.style.left = '145px'
		button2.style.color = 'black'
		reg.style.display = 'block'
		login.style.display = 'none'
		setTimeout(() => {
			newpassinput.style.transform = 'translateY(0px)'
			newpassinput.style.opacity = '1'
			newpassinput.style.visibility = 'visible'
		}, 250)
	}
}

// Анимация появления модального окна
let modalwindow = document.querySelector('.modal-window')
let blurscreen = document.querySelector('.blur-screen')

function modalanim() {
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
}

function next() {
	const email = document.getElementById('email').value
	const password1 = document.getElementById('password1').value
	const password2 = document.getElementById('password2').value

	// Проверяем, что все поля заполнены
	if (email === '' || password1 === '' || password2 === '') {
		alert('Пожалуйста, заполните все поля')
		return false
	}

	// Проверяем совпадение паролей
	if (password1 !== password2) {
		alert('Пароли не совпадают')
		return false
	}
	// Обновите стили отображения
	reg.style.display = 'none'
	username.style.display = 'block'

	butregorlog.style.opacity = '0'
	setTimeout(() => {
		butregorlog.style.visibility = 'hidden'
	}, 250)
}
