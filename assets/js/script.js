// var flipContainer = $('.container-slider'),
//     flipItemContainer = flipContainer.find('.gallery'),
//     flipItem = flipContainer.find('li');

//     $(flipContainer).flipster({
//       loop: true,
//       start: 0,
//       style: 'carousel',
//       spacing: 0.1,
//       scrollwheel: false,
//       nav: 'after',
//       buttons: true,
//       autoplay: 5000,
//       pauseOnHover: true,
//       touch: true,

//   });
 
    AOS.init({
      offset: 70,
      delay: 200, 
      easing: 'ease',
      duration: 700, 
    });
  
    const actualBtn = document.getElementById('actual-btn');

    const fileChosen = document.getElementById('file-chosen');

    actualBtn.addEventListener('change', function(){
        fileChosen.textContent = this.files[0].name
    })

