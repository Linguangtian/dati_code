function layer_show(title,url,w,h){
	if (title == null || title == '') {
		title=false;
	};
	if (url == null || url == '') {
		url="404.html";
	};
	if (w == null || w == '') {
		w=800;
	};
	if (h == null || h == '') {
		h=($(window).height() - 50);
	};
	layer.open({
		type: 2,
		area: [w+'px', h +'px'],
		fix: false, //涓嶅浐瀹�
		maxmin: true,
		shade:0.4,
		title: title,
		content: url
	});
}
/*鍏抽棴寮瑰嚭妗嗗彛*/
function layer_close(){
	var index = parent.layer.getFrameIndex(window.name);
	parent.layer.close(index);
}



require.config({
    paths : {
    	'jquery':[public+"lib/valiform/jquery.min"],
        "upload" : [public+"lib/uploader/webuploader.min"],
        'valiform':[public+"lib/valiform/valiform_5.32_min"],
    }
})

 function json(r){

   	return eval('(' + r + ')');
   }
