$('.chapter').click(function(e) {

	e.preventDefault();
	
	$("li").removeProp("class");
	$(this).parent().prop("class", "active");
	
	subj = $("#selectedsubject").html();
	chapter = $(this).html();
	
	$("#subjecttitle").html(chapter);
	
	$.ajax({
		url: "content/techref/" + subj.toLowerCase() + "/content_" + chapter.toLowerCase().replace(/ /g, "_") + ".html", 
		success: function(data) {
			$("#subjectcontent").html(data);
		},
		error: function(data) {
			$("#subjectcontent").html("<p>Not Yet Available</p>");
		}
	});
	
	$.ajax({
		url: "content/techref/" + subj.toLowerCase() + "/code_" + chapter.toLowerCase().replace(/ /g, "_") + ".html", 
		success: function(data) {
			$("#subjectcode").html(data);
		},
		error: function(data) {
			$("#subjectcode").html("<p>Not Yet Available</p>");
		}
	});
	
});