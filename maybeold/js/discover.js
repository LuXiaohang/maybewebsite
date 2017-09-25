function showa(){
  if(document.all.a.className.indexOf("active1")+1){
    str=document.all.a.className;
    s=str.split(" active1");
    document.all.a.className=s[0];
  }
  else {
    if(document.all.b.className.indexOf("active1")+1){
      str=document.all.b.className;
      s=str.split(" active1");
      document.all.b.className=s[0];
    }
    document.all.a.className=document.all.a.className+' active1';
  }
  show();
}
function showb(){
  //alert(document.all.t1.className.indexOf("active1"));
  //首先判断这个按钮是active1还是不是active1
  //如果是active1，在类中去除active1类，使按钮恢复为没有点击的状态
  if(document.all.b.className.indexOf("active1")+1){
    str=document.all.b.className;
    s=str.split(" active1");
    document.all.b.className=s[0];
  }
  //如果不是active1，在类中添加active1类，使按钮显示为active1的状态，把不是它的id都none
  else {
    if(document.all.a.className.indexOf("active1")+1){
      str=document.all.a.className;
      s=str.split(" active1");
      document.all.a.className=s[0];
    }
    document.all.b.className=document.all.b.className+' active1';
  }
  show();
}
function show1(){
  if(document.all.t1.className.indexOf("active1")+1){
    str=document.all.t1.className;
    s=str.split(" active1");
    document.all.t1.className=s[0];
  }
  //如果不是active1，在类中添加active1类，使按钮显示为active1的状态，把不是它的id都none
  else {
    if(document.all.t2.className.indexOf("active1")+1){
      str=document.all.t2.className;
      s=str.split(" active1");
      document.all.t2.className=s[0];
    }
    document.all.t1.className=document.all.t1.className+' active1';
  }
  show();
}
function show2(){
  if(document.all.t2.className.indexOf("active1")+1){
    str=document.all.t2.className;
    s=str.split(" active1");
    document.all.t2.className=s[0];
  }
  //如果不是active1，在类中添加active1类，使按钮显示为active1的状态，把不是它的id都none
  else {
    if(document.all.t1.className.indexOf("active1")+1){
      str=document.all.t1.className;
      s=str.split(" active1");
      document.all.t1.className=s[0];
    }
    document.all.t2.className=document.all.t2.className+' active1';
  }
  show();
}
function show(){
  document.getElementById('line1').style.display="none";
  document.getElementById('line2').style.display="none";
  document.getElementById('line3').style.display="none";
  document.getElementById('line4').style.display="none";
  if(document.all.a.className.indexOf("active1")+1){
    if(document.all.t1.className.indexOf("active1")+1){
      document.getElementById('line1').style.display="block";
    }
    else if(document.all.t2.className.indexOf("active1")+1){
      document.getElementById('line3').style.display="block";
    }
    else{
      document.getElementById('line1').style.display="block";
      document.getElementById('line3').style.display="block";
    }

  }
  else if(document.all.b.className.indexOf("active1")+1){
    if(document.all.t1.className.indexOf("active1")+1){
      document.getElementById('line2').style.display="block";
    }
    else if(document.all.t2.className.indexOf("active1")+1){
      document.getElementById('line4').style.display="block";
    }
    else{
      document.getElementById('line2').style.display="block";
      document.getElementById('line4').style.display="block";
    }
  }
  else{
    if(document.all.t1.className.indexOf("active1")+1){
      document.getElementById('line1').style.display="block";
      document.getElementById('line2').style.display="block";
    }
    else if(document.all.t2.className.indexOf("active1")+1){
      document.getElementById('line3').style.display="block";
      document.getElementById('line4').style.display="block";
    }
    else{
      document.getElementById("line1").style.display="block";
      document.getElementById('line2').style.display="block";
      document.getElementById('line3').style.display="block";
      document.getElementById('line4').style.display="block";
    }
  }
}
function showed(){
  if(document.all.eding.className.indexOf("active1")+1){
    //alert("hahah");
    str=document.all.eding.className;
    s=str.split(" active1");
    document.all.eding.className=s[0];
    document.getElementById("line1").style.display="block";
    document.getElementById('line2').style.display="block";
    document.getElementById('line3').style.display="block";
    document.getElementById('line4').style.display="block";
    document.getElementById('ed').style.display="none";
  }
  //如果不是active1，在类中添加active1类，使按钮显示为active1的状态，把不是它的id都none
  else {
    document.all.eding.className=document.all.eding.className+' active1';
    //alert(document.all.eding.className);
    document.getElementById('line1').style.display="none";
    document.getElementById('line2').style.display="none";
    document.getElementById('line3').style.display="none";
    document.getElementById('line4').style.display="none";
    document.getElementById('ed').style.display="block";
  }
}
