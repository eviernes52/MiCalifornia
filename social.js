const facebook = document.querySelector('.facebook');
const twitter = document.querySelector('.twitter');
const instagram = document.querySelector('.instagram');

const pageUrl = location.href
const message = 'Newly renovated Mi California Mexican Restaurant located at the heart of the south bay is now fully open!'

const twitterApi = `https://twitter.com/intent/tweet?text=${pageUrl}. ${message}`; 
const facebookApi = `https://www.facebook.com/sharer/sharer.php?u=` + pageUrl;
const instagramApi = `https://www.instagram.com/micaliforniarestaurant/` + pageUrl;

facebook.addEventListener('click', () => {
    console.log('facebook button clicked')
    window.open(url = facebookApi,target= '_blank')
})

twitter.addEventListener('click', () => {
    console.log('twitter button clicked')
    window.open(url = twitterApi,target= '_blank')
})


instagram.addEventListener('click', () => {
    console.log('instagram button clicked')
    window.open('https://www.instagram.com/micaliforniarestaurant/')
})
