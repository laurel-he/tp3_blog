/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//分享到QQ空间  
            function share(){  
                var p = {  
                    url:location.href,  
                    showcount:'1',/*是否显示分享总数,显示：'1'，不显示：'0' */  
                    desc:'',/*默认分享理由(可选)*/  
                    summary:'测试测试，这是概述',/*分享摘要(可选)*/  
                    title:'<%$info.title%>',/*分享标题(可选)*/  
                    site:'来源',/*分享来源 如：腾讯网(可选)*/  
                    pics:'__IMG__<%$info.img.0.url%>', /*分享图片的路径(可选)*/  
                    style:'203',  
                    width:98,  
                    height:22  
                };  
                var s = [];  
                for(var i in p){  
                    s.push(i + '=' + encodeURIComponent(p[i]||''));  
                }  
                window.open("http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?"+s.join('&'));  
            }



