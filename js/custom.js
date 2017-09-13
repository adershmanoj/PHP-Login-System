var url=window.location;
$('ul.nav a').filter(function(){
    return this.url==url;
}).parent.addClass('active');
