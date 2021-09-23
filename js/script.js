function SaveAtServer() {
	const { jsPDF } = window.jspdf;
    doc = new jsPDF({  
        unit: 'px',  
        format: 'a4'  
    });  
	var pdfjs = document.querySelector('#html-template');
	doc.html(pdfjs, {
		callback: function(doc) {
			var p = btoa(doc.output()); 
			$.ajax({
				url: '/SaveHtmlAsPdf/upload.php', 
				type: "POST",
				data: {data:p},
				success: function(response){
					alert(response); 
					console.log("done ::: "+response+" +++")
				},
				error: function(err){
					alert(err);
					console.log("err ::: "+err+" +++")
				}
			});
		},
		x: 20,
		y: 20
	});
}
function SaveAtClient() {
	const { jsPDF } = window.jspdf;
    doc = new jsPDF({  
        unit: 'px',  
        format: 'a4'  
    });  
	var pdfjs = document.querySelector('#html-template');
	doc.html(pdfjs, {
		callback: function(doc) {
			doc.output('save','test.pdf'); 
		},
		x: 20,
		y: 20
	});
}

