/*
*************************************************

swfIR
JS Functions

Created by the ridiculous Dan Mall
http://www.danielmall.com

*************************************************
*/

function addLoadEvent(func){
    var oldonload = window.onload;
    if(typeof window.onload != 'function'){
        window.onload = func;
    }else{
        window.onload = function(){
            oldonload();
            func();
        }
    }
}

/*---- Grey Initial Values ------ */

function greyInitialValues(){
	var filled = getElementsByClassName("filled");
	
	if(filled.length > 0){
		for(var i = 0; i < filled.length; i++){
			filled[i].className = "empty";
			filled[i].initialValue = filled[i].value;
			
			filled[i].onclick = filled[i].onfocus = function(){
				this.className = "filled";
				if(this.value == 'Search the Atlas'){
					this.value= "";
				}
			}
			
			filled[i].onblur = function(){
				if(this.value == this.initialValue || this.value == ""){
					this.className = "empty";
					this.value = this.initialValue;
				}else{
					this.className = "filled";
				}
			}
		}
	}else{ 
		return; 
	}
}
addLoadEvent(greyInitialValues);

/*---- Grey Initial Values ------ */





/* -----    getElementsByClassName  -----
	by SCOTT SCHILLER
	http://www.schillmania.com
-----------------------------------*/

function getElementsByClassName(className,oParent) {
  var doc = (oParent||document);
  var matches = [];
  var nodes = doc.all||doc.getElementsByTagName('*');
  for (var i=0; i<nodes.length; i++) {
    if (nodes[i].className == className || nodes[i].className.indexOf(className)+1 || nodes[i].className.indexOf(className+' ')+1 || nodes[i].className.indexOf(' '+className)+1) {
      matches[matches.length] = nodes[i];
    }
  }
  return matches; // kids, don't play with fire. ;)
}

/* end scripts by SS */
