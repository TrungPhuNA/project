

var mContent = document.getElementById("mContent");
mContent.innerHTML = "";
function drawShape()
{
    for (let i = 1; i <= 10; i++) {
        var elmb = document.createElement("p");
        elmb.innerHTML = i;
        elmb.onclick = function() {
            alert("Giá trị là : " + i);
        };
        mContent.appendChild(elmb);
    }
}


function clearShape()
{
   
    mContent.innerHTML = "";
}