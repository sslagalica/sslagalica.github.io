const page=document.querySelector("html").style;
const refresh=()=>{
  let scalex=window.innerWidth/1920;
  let scaley=window.innerHeight/1080;
  page.transform="scale("+Math.min(scalex,scaley)+")";
  page.left=Math.max((window.innerWidth-scaley*1920)/2,0)+"px";
}
refresh();
window.addEventListener("resize",refresh);
let time=0;
let total=105;
setInterval(()=>{document.querySelector("#time div").style.height=Math.min(time*100/total,100)+"%";time=(time+1)%106},1000);