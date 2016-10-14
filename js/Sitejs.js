function changeColor(x){
  if (x === "Steel Valley"){
    document.getElementById("header").style.backgroundColor = "maroon";
    document.getElementById("footer").style.backgroundColor = "maroon";
    document.getElementById("leftIndex").style.backgroundColor = "maroon";
  }
  else if (x === "Pitt"){
    document.getElementById("header").style.backgroundColor = "#0000cd";
    document.getElementById("footer").style.backgroundColor = "#0000cd";
    document.getElementById("leftIndex").style.backgroundColor = "#0000cd";
  }
  else if (x === "Steelers"){
    document.getElementById("header").style.backgroundColor = "black";
    document.getElementById("footer").style.backgroundColor = "black";
    document.getElementById("leftIndex").style.backgroundColor = "black";
  }
}

function greetingsText(x){
  if (x==="matt" || x==="Matt"){
    document.getElementById("nameForm").style.display = "none";
    document.getElementById("revealName").innerHTML = "Hello " + x + "! You are the best professor at Pitt! Welcome to my site!";
    document.getElementById("revealName").style.display = "block";
  }
  else {
    document.getElementById("nameForm").style.display = "none";
    document.getElementById("revealName").innerHTML = "Hello " + x + "! Welcome to my site!";
    document.getElementById("revealName").style.display = "block";
  }
}