var imgArray = new Array("bike001.jpg","bike005.jpg","bike006.jpg");
var imgCount = 0;
function startTime() {
    if(imgCount == imgArray.length) {
        imgCount = 0;
    }
    document.getElementById("img1").src = imgArray[imgCount];
    imgCount++;
    setTimeout("startTime()", 3000);
}

function login(){
        if(document.getElementById('login').style.display == 'block'){
            document.getElementById('login').style.display = '';
        }
        else{
        document.getElementById('login').style.display = 'block';
        }
	return false;
}	