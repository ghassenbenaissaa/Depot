//sidebar

const allSideMenu =document.querySelectorAll('#sidebar .side-menu.top li a');
allSideMenu.forEach(item=>{
    const li = item.parentElement;

    item.addEventListener('click',function(){
        allSideMenu.forEach(i=>{
            i.parentElement.classList.remove('active');
        })
    li.classList.add('active');
    })
});

 

const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click' , function() {
    sidebar.classList.toggle('hide');
})




const searchButton = document.querySelector('#content nav form .form-input button');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click',function(e){
    if(window.innerWidth < 576){
    e.preventDefault() ;
    searchForm.classList.toggle('show');

    if(searchForm.classList.contains('show')){
    searchButtonIcon.classList.replace(' bx-search-alt-2','  bx-x');
    } else {
    searchButtonIcon.classList.replace('bx-x',' bx-search-alt-2');
    }
}
})


if(window.innerWidth < 768){
    sidebar.classList.add('hide');
} else if(window.innerWidth < 576) {
    searchButtonIcon.classList.replace('bx-x',' bx-search-alt-2');
    searchForm.classList.remove('show');
}


window.addEventListener('resize',function() {
if(this.innerWidth > 576) {
    searchButtonIcon.classList.replace('bx-x',' bx-search-alt-2');
    searchForm.classList.toggle('show');
}
})


/*  charts   */


const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Femme', 'Homme'],
        datasets: [{
           label:"nombre",
            
            data: [240, 90],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)'
              
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)'
                
            ],
          
            borderWidth: 1
        }]
    },
    options: {
   responsive: true,
    }
});