var  nrPhoto = 1;
function HidePhoto()
{
  $("#head2").fadeOut(1000);
}
function LoadImage()
{
  if(nrPhoto>=4)
  {
    nrPhoto=1;
  }
  else
  {

  }
	var tagImg = "<a href=\"#\" id=\"odnosnik/">"<img id='slajd' src='Images/image"+nrPhoto+".png' />";
	document.getElementById("head2").innerHTML = tagImg;
  $("#head2").fadeIn(1000);
  nrPhoto++;
  setTimeout("HidePhoto()".5000);
  setTimeout("LoadImage()",6000);


}
