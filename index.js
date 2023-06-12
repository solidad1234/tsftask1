const media=document.querySelector(".media");
const sideMenu=document.querySelector(".side-menu")
media.addEventListener("click",function(){
   media.style.transform="translate(0%)";
   const bodyOverLay=document.createElement("div");
   bodyOverLay.classList.add("side-bar");
   setTimeout(function(){
    document.querySelector("body").append(bodyOverLay)
   },300)
});
document.getElementById("link").addEventListener("click",function(event){
   event.preventDefault();
   var alertBox=document.createElement('div');
   alertBox.style.backgroundColor='red';
   alertBox.style.color='white';
   alertBox.style.padding='10px';
   alertBox.innerText="you are already in the home page, select to view customers or transactions";
   document.body.appendChild(alertBox);
   
});
document.getElementById("btn").addEventListener("click",function(){
   alert("hey there");
})
document.getElementById("start-button").addEventListener("click",function(){
   window.location='transfer.php';
});
