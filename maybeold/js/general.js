/*����js��*/

/*����ʵ��������php��include���ܵ�js����*/

function include_js(path,reload)
{
      var scripts = document.getElementsByTagName("script");
      if (!reload)
      for (var i=0;i<scripts.length;i++)
            if (scripts[i].src && scripts[i].src.toLowerCase() == path.toLowerCase() ) return;
      var sobj = document.createElement('script');
      sobj.type = "text/javascript";
      sobj.src = path;
      var headobj = document.getElementsByTagName('head')[0];
      headobj.appendChild(sobj);
}

function includenavi()
{
	document.write(navi)
	}