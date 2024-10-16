let purchases = document.querySelector('.purchases')
let selfProjects = document.querySelector('.self-projects')
let purchasesBtn = document.querySelector('.purchases-btn')
let selfProjectBtn = document.querySelector('.self-project-btn')

selfProjects.style.display = 'none'
purchases.style.display = 'block'
purchasesBtn.classList.add('active')

function showPurchases() {
	if (purchasesBtn.classList.contains('active')) {
		console.log('Кнопка уже нажата')
	} else {
		purchasesBtn.classList.add('active')
		selfProjectBtn.classList.remove('active')
		purchases.style.opacity = '0'
		selfProjects.style.opacity = '0'
		setTimeout(() => {
			selfProjects.style.display = 'none'
			purchases.style.display = 'block'
			setTimeout(() => {
				purchases.style.opacity = '1'
			}, 250)
		}, 250)
	}
}
function showSelfProjects() {
	if (selfProjectBtn.classList.contains('active')) {
		console.log('Кнопка уже нажата')
	} else {
		selfProjectBtn.classList.add('active')
		purchasesBtn.classList.remove('active')
		purchases.style.opacity = '0'
		selfProjects.style.opacity = '0'
		setTimeout(() => {
			selfProjects.style.display = 'block'
			purchases.style.display = 'none'
			setTimeout(() => {
				selfProjects.style.opacity = '1'
			}, 250)
		}, 250)
	}
}
