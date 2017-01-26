var  nrPhoto = 1;
function LoadImage()
{
  if(nrPhoto>=4)
  {
    nrPhoto=1;
  }
  else
  {

  }
	var tagImg = "<img id='slajd' src='Images/image"+nrPhoto+".png' />";
	document.getElementById("head2").innerHTML = tagImg;
  nrPhoto++;
  setTimeout("LoadImage()",3000);

}
