


function openPopup() {
  document.getElementById('popup').style.display = "block";
}

function closePopup() {
    document.getElementById('popup').style.display = "none";
}


function toggleReadMore() {
    var extraText = document.getElementById('extraText');
    var readMoreBtn = document.getElementById('readMoreBtn');
  
    if (extraText.style.display === 'none' || extraText.style.display === '') {
      extraText.style.display = 'block';
      readMoreBtn.textContent = 'Read Less';
    } else {
      extraText.style.display = 'none';
      readMoreBtn.textContent = 'Read More';
    }
  }
// filter category
function filterObjects(category) {
  const galleryItems = document.querySelectorAll('.gallery-item');
  galleryItems.forEach(item => {
      const itemCategory = item.getAttribute('data-filter');
      if (category === 'All' || category === itemCategory) {
          item.parentElement.style.display = 'block';
      } else {
          item.parentElement.style.display = 'none';
      }
  });
}

function openModal(imageSrc) {
  const modalImg = document.querySelector("#gallery-Modal .modal-img");
  modalImg.src = imageSrc;

  const galleryModal = new bootstrap.Modal(document.getElementById('gallery-Modal'));
  galleryModal.show();
}
$(document).ready(function(){
  highlightActiveMenuitem();

  $(".navbar-nav .nav-item a").click(function() {
  
    $(".navbar-nav").find(".active").removeClass("active");
    $(this).parent().addClass("active");
  });
  function highlightActiveMenuitem(){
    
    var currentUrl=window.location.pathname;
    console.log(window.location.pathname);
    $(".navbar-nav .nav-item a").each(function () {
      var menuitemUrl = $(this).attr("href");
      if(currentUrl.includes(menuitemUrl)){
        $(this).parent().addClass("active");
        $(this).css("color","blue");
        $(this).css("background-color","lightpink");
      }
    });
  }
});



  
