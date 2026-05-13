var banner = document.getElementById('background')

banners = [
    'cabos.jpg',
    'predio.jpg'
]

bannerActual = 0

function trocarBanner() {
    bannerActual = (bannerActual + 1) % banners.length;
    banner.style.backgroundImage = "url('assets/images/" + banners[bannerActual] + "')"
}

setInterval(trocarBanner, 1000 * 45)