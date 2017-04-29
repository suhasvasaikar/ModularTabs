function showFunction(link,organism,moduleid){
	var x = jQuery(link).position().left+jQuery(link).outerWidth();
	var y = jQuery(link).position().top - jQuery(document).scrollTop();
	var file = organism+"_function.json";
	var iT = "DB_ID"+moduleid;
	$.getJSON(file, function(data) {
              
	      var d = eval("data."+iT);
	      //var html = '<font size="2"><ul><li>Biological Process:'+d.B+'</li><li>Cellular Component:'+d.C+'</li><li>Molecular Function:'+d.MF+'</li></ul></font>';
	      var html = '<font size="2"><ul><li>Biological Process:'+d.B+' (p='+d.B_P+')</li><li>Cellular Component:'+d.C+' (p='+d.C_P+')</li><li>Molecular Function:'+d.MF+' (p='+d.MF_P+')</li></ul></font>';
	    
		var dig = $(html).dialog({
                	resizable:false,
                	autoOpen:true,
                	title:'Related Function',
                	width:400,
			position:[x,y]
                });
        });
}

function showFunction_S(image,information){
       var x = jQuery(image).position().left+jQuery(image).outerWidth();
       var y = jQuery(image).position().top - jQuery(document).scrollTop();
       var html = "<p>"+information+"</p>";
       var dig = $(html).dialog({
                 resizable:false,
                 autoOpen:true,
                 title:'Information',
                 width:400,
                 position:[x,y]
        });
 
}
