var bg=document.getElementsByTagName('tr');
for(var i=0,j=0;i<bg.length;i++)
{
    if(bg[i].className!='b')
    {    j++;
        bg[i].className=j%2==0?'tr1':'tr2';
        }
    else
    {bg[i].className='tr3'}
}
