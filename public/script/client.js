e=true;
function changer(){
  if(e){
    document.getElementById("password").setAtribute("type","text");
  }else{
    document.getElementById("password").set("type","password");
    e=true;
  }
}

let togg1 = document.getElementById("togg1");
let togg2 = document.getElementById("togg2");
let d1 = document.getElementById("d1");
let d2 = document.getElementById("d2");


if(togg1){
togg1.addEventListener("click", () => {
  if(getComputedStyle(d1).visibility != "visible"){
    d1.style.visibility = "visible";
  } else {
    d1.style.visibility = "hidden";
  }
})
}
function togg(){
  if(getComputedStyle(d2).visibility != "visible"){
    d2.style.visibility = "visible";
  } else {
    d2.style.visibility = "hidden";
  }
};
if(togg2){
togg2.onclick = togg;
}
