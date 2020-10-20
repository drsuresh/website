 // 1. The basic part of the example
      var L;

      window.onload = function() {
        L.mapquest.key = 'ZGKsHEEy3vG58xNITzlfmJOeHqcJARcm';

        // 'map' refers to a <div> element with the ID map
        var map = L.mapquest.map('map', {
          center: [45.512230, -122.658722],
          layers: L.mapquest.tileLayer('map'),
          zoom: 12
        });

        map.addControl(L.mapquest.control({position: 'bottomright'}));
        L.marker([45.512230, -122.658722],{
          icon: L.mapquest.icons.marker({
            primaryColor: '#22407F',
            secondaryColor: '#3B5998',
            shadow: true,
            size: 'md',
            symbol: 'A'
          })
        })
        .bindPopup('This is Portland!')
        .addTo(map)
      }

const key = "3K1CMKhUtFhkyrVEBmpvxSfpF2fCqVv0";
const baseURL = 'https://api.nytimes.com/svc/search/v2/articlesearch.json';
let url;

const searchTerm = document.querySelector('.search');
const startDate = document.querySelector('.start-date');
const endDate = document.querySelector('.end-date');
const searchForm = document.querySelector('.formnyt');

const nextBtn = document.querySelector('.next');
const prevBtn = document.querySelector('.prev');

const section = document.querySelector('.sectionnyt');
const nav = document.querySelector('.navnyt');

nav.style.display = "none";

let pageNumber = 0;

searchForm.addEventListener('submit',submitSearch);
nextBtn.addEventListener('click',nextPage);
prevBtn.addEventListener('click',previousPage);

function submitSearch(e){
  pageNumber = 0;
  fetchResult(e);
}

function fetchResult(e){
  e.preventDefault();

  url = baseURL +'?api-key'+key+'&page='+pageNumber+'&q='+searchTerm.value+'&fq=document_type:("article")';

  if(startDate.value !== ''){
    url+= '&begin_date='+startDate.value;
  };

  if(endDate.value !== ''){
    url+= '&end_date='+endDate.value;
  };
  fetch(url).then(result=>result.json()).then(json=>display(json));
}

function displayResults(json){
  while(section.firstChild){
    section.removeChild(section.firstChild);
  }
  const article = json.response.docs;

  if(articles.length === 10){
    nav.style.display = 'block';
  } else {
    nav.style.display = 'none';
  }

  if(articles.length === 0){
    const para = document.createElement('p');
    para.textContent = 'No results returned.'
    section.appendChild(para);
  } else {
    for(var i = 0; i < articles.length; i++){
      const article = document.createElement('article');
      const heading = document.createElement('h2');
      const link = document.createElement('a');
      const img = document.createElement('img');
      const para1 = document.createElement('p');
      const para2 = document.createElement('p');
      const clearfix = document.createElement('div');

      let current = article[i];

      link.href = current.web.url;
      link.textContent = current.headline.main;
      para1.textContet = current.snippet;
      para2.textContent = 'Keywords: ';
      for(let j = 0; j < current.keywords.length;j++){
        const span = document.createElement('span');
        span.textContent += current.keywords[j].value + ' ';
        para2.appendChild(span);
      }

      if(current.multimedia.length > 0){
        img.src = 'http://www.nytimes.com/'+current.multimedia[0].url;
        img.alt = current.headline.main;
      }

      clearfix.setAttribute('class','clearfix');

      article.appendChild(heading);
      heading.appendChild(link);
      article.appendChild(img);
      article.appendChild(para1);
      article.appendChild(para2);
      article.appendChild(clearfix);
      section.appendChild(article);
    }
  }
}

function nextPage(e) {
  pageNumber++;
  fetchResults(e);
};

function previousPage(e) {
  if(pageNumber > 0) {
    pageNumber--;
  } else {
    return;
  }
  fetchResults(e);
};