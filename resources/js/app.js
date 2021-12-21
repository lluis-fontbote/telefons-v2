require('./bootstrap');

const generate = () => {
  //Generating an ID so the flake can be removed later
  let id = "id"+Date.now() //i.e. "id1606322064360"
  
  //Creating flake to be added to DOM
  const flake = document.createElement("i");
  flake.classList.add("flake");
  flake.classList.add("far");
  flake.classList.add("fa-snowflake")
  flake.classList.add(id);
  
  //Random positioning and animation duration
  flake.style.left = Math.random() * 100 + "%";
  flake.style.animationDuration = Math.floor(Math.random()*5) + 1 + "s"
  
  //Adding flake to DOM
  document.body.appendChild(flake);
  
  //Remove flake from DOM after 5 seconds
  setTimeout(function(){
    let flakeToRemove = document.querySelector(`.${id}`)
    flakeToRemove.remove()
  }, 5000)
}

document.addEventListener('DOMContentLoaded', function() {
  setInterval(generate, 250);
});