const caseStudyTiles = document.querySelectorAll('.case-study');

function showCaseStudy(e){
    console.log(e)
    const contentWrapper = e.srcElement.querySelector('.case-study-content');
    contentWrapper.classList.add('open');
}
function hideCaseStudy(e){
    const contentWrapper = e.srcElement.querySelector('.case-study-content');
    contentWrapper.classList.remove('open');
}



caseStudyTiles.forEach(tile =>  tile.addEventListener('mouseenter', showCaseStudy));
caseStudyTiles.forEach(tile =>  tile.addEventListener('mouseleave', hideCaseStudy));