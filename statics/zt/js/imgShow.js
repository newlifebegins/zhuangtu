function fnCreate(src){
        
            /* 要创建的div的classname */
            var ClassName = "thumbviewbox";
        
            if(src == '')
            {
                return false;
            }
            
            /* 优先创建图片，如果图片没有加载成功，回调自己 */
            var img = document.createElement('img');
            img.setAttribute('src',src);
            var imgwd = img.width;
            var imghg = img.height;
            
            if(imgwd<1)
            {
                var timer = setTimeout("fnCreate('"+src+"')",100);
                return false;
            }else{
                clearInterval(timer);
            }
            
            /* 清除已经弹出的窗口，防止冒泡 */    
            em = document.getElementsByClassName(ClassName)
            
            for(var i=em.length-1; i>=0; i--){
                var p = em[i];
                p.parentNode.removeChild(p);
            }    
            
            /* 各项参数 */
            var htmlWidth = window.innerWidth;            //可见区域宽度
            var htmlHeight = window.innerHeight;        //可见区域高度
            var divleft = 0;                            //将要创建的div的左边距
            var divtop =0;                                //将要创建的div的右边距
            var closefunction = 'em=document.getElementsByClassName("'+ClassName+'");for(var i=em.length-1;i>=0;i--){var p=em[i];p.parentNode.removeChild(p);}';    //关闭div的代码
            
            img.setAttribute('onclick',closefunction);
            
            /* 计算通过图片计算div应该在的位置，保证弹窗在页面中央 */
            if(imgwd>htmlWidth*0.8)
            {
                img.setAttribute('width',htmlWidth*0.8);
                divleft=htmlWidth*0.1;
                if(imghg>htmlHeight*0.8)
                {
                    divtop = htmlHeight*0.1;
                }else{
                    divtop = (htmlHeight-imghg)/2;
                }
            }else{
                img.setAttribute('width',imgwd);
                divleft= (htmlWidth-imgwd)/2;
                if(imghg>htmlHeight*0.8)
                {
                    divtop = htmlHeight*0.1;
                }
                else
                {
                    divtop = (htmlHeight-imgwd)/2;
                }
            }
    
            /* 创建关闭按钮 */
            var closebtn = document.createElement('a');
            closebtn.setAttribute('class','close');
            closebtn.setAttribute('href','javascript:;');
            closebtn.setAttribute('style','position:absolute;top:-20px;right:-5px;cursor:pointer;background:#444;color:#FFF;');
            closebtn.innerHTML = '[close/关闭]';
            closebtn.setAttribute('onclick',closefunction);
            
            /* 创建弹窗 */
            var element = document.createElement('div');
            element.appendChild(img);
            element.appendChild(closebtn);
            element.setAttribute('class',ClassName);
            element.setAttribute('style','border:5px solid #444;position:absolute;top:'+Math.round(divtop)+'px;left:'+Math.round(divleft)+'px;border-radius:5px;background:#FFF');
                
            document.body.appendChild(element);
    }