const signUpButton=document.querySelector('.sign-up');
const form=document.querySelector('#sign-in .box form');
form.onsubmit = (e)=>{
    e.preventDefault();
}
signUpButton.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/sign-up.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              if(data === "success"){
                location.href="index.php";
              }else{
                  console.log(data);
              }
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}