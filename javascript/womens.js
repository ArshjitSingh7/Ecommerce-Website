document.addEventListener('DOMContentLoaded', (e) => {
    showHatsData();
});

const womensPreview = document.querySelector('.collection-preview .preview-womens');
function showHatsData() {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./php/womens-data.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let output=xhr.response;
              womensPreview.innerHTML = output;
              const btn = [...document.querySelectorAll('.collection-item')];
                btn.forEach( item => {
                    item.addEventListener('click',(e) => {
                        if(e.target.classList.contains('cart-btn')) {
                            addToCart(e.target.id);
                        }
                        e.preventDefault();
                    })
                });
          }
      }
    }
    xhr.send();
}

function addToCart(id) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./php/add-to-cart.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              if(data ==="success") {
                  console.log("added");
              }
              else {
                alert("Log in to add items in cart");
              }
          }
      }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("incoming_id="+id);
}