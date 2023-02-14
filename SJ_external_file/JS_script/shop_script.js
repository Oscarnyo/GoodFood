function page1Function(){
	document.getElementById("page1").className = "w3-bar-item w3-black w3-button page-button";
	document.getElementById("page2").className = "w3-bar-item w3-button w3-hover-black page-button";
	document.getElementById("page3").className = "w3-bar-item w3-button w3-hover-black page-button";

}

function page2Function(){

	document.getElementById("page1").className = "w3-bar-item w3-button w3-hover-black page-button";
	document.getElementById("page2").className = "w3-bar-item w3-black w3-button page-button";
	document.getElementById("page3").className = "w3-bar-item w3-button w3-hover-black page-button";
}

function page3Function(){
	document.getElementById("page1").className = "w3-bar-item w3-button w3-hover-black page-button";
	document.getElementById("page2").className = "w3-bar-item w3-button w3-hover-black page-button";
	document.getElementById("page3").className = "w3-bar-item w3-black w3-button page-button";
}

 function scrolltop(){
    window.scrollTo({top: 0});
  }



