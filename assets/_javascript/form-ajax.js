export function form(){

  let demo = 'toto';

  let xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function(){
    console.log(this);
    if(this.readyState == 4 && this.status == 200){

    }
  }
  xhr.open('POST', 'text.txt', true);
  xhr.send(); 
}

