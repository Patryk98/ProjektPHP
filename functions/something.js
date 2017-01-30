var  nrPhoto = 0;
function HidePhoto()
{
  $("#head2").fadeOut(1000);
}
function LoadImage()
{
  nrPhoto++;
  if(nrPhoto>=4)
  {
    nrPhoto=1;
  }
	var tagImg = "<a href='#' id='odnosnik'><img id='slajd' src='Images/image"+nrPhoto+".png' /></a>";
	document.getElementById("head2").innerHTML = tagImg;
  $("#head2").fadeIn(1000);


  setTimeout("LoadImage()",6000);
  setTimeout("HidePhoto()",5000);


}
