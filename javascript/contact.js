const contactBtn=document.querySelector('.contact-btn');
const form=document.querySelector('#sign-in .box form');
form.onsubmit = (e)=>{
    e.preventDefault();
}
contactBtn.onclick = (e) => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/contact-data.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              if(data === "success"){
                alert("message sent")
                location.reload();
              }else{
                  console.log(data);
              }
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
    e.preventDefault();
}