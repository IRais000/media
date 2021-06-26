const burger = document.getElementById('burger');
const nav = document.getElementById('nav');
const headline = document.getElementById('headline');
const button = document.getElementById('logo');

burger.onclick = function() {
    this.classList.toggle('open');
    nav.classList.toggle('show');
    headline.classList.toggle('hide');
    button.classList.toggle('hide');
};


const articles = document.querySelectorAll('article');

for (const article of articles.values()) {
    
    new Waypoint.Inview({
        
        element: article,
        entered(direction) {
            if (direction == 'down') {
                article.classList.remove('move-down');
            }
        },
        exit(direction) {
            if (direction == 'up') {
                article.classList.add('move-down');
            }
        }
    });
    
}