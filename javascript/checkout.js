const checkoutContent = document.querySelector('.checkout-content');
const totalAmount = document.querySelector('.cart-total');
document.addEventListener('DOMContentLoaded', (e) => {
    showCheckoutData();
})
function readCookie(name) {
	var cookiename = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++)
	{
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(cookiename) == 0) return c.substring(cookiename.length,c.length);
	}
	return null;
}
function deleteItem(title) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./php/delete-data.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              if(data ==="success") {
                  console.log("item deleted");
                  location.reload();
              }
              else {
                  console.log(data);
              }
          }
      }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("incoming_id="+title);
}
function showCheckoutData() {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./php/checkout-data.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let output=xhr.response;
              checkoutContent.innerHTML = output;
              const name="MyCookie";
              const amount=readCookie('site');
              totalAmount.innerHTML=amount;
              const btn = [...document.querySelectorAll('.checkout-item')];
                btn.forEach( item => {
                    item.addEventListener('click',(e) => {
                        if(e.target.classList.contains('remove-button')) {
                            deleteItem(e.target.id);
                        }
                        e.preventDefault();
                    })
                });
          }
      }
    }
    xhr.send();
}
