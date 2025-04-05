
/*
 * Editor client script for DB table online_exam_table
 * Created by http://editor.datatables.net/generator
 */

(function($){

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		ajax: 'php/table.online_exam_table.php',
		table: '#online_exam_table',
		fields: [
			{
				"label": "Exam Title:",
				"name": "online_exam_title"
			},
			{
				"label": "Date &amp; Time:",
				"name": "online_exam_datetime",
				"type": "datetime",
				"format": "YYYY-MM-DD HH:mm:ss"
			},
			{
				"label": "Duration:",
				"name": "online_exam_duration",
				"type": "select",
				"options": [
					"5",
					"30",
					"60",
					"120",
					"180"
				]
			},
			{
				"label": "Total Question:",
				"name": "total_question",
				"type": "select",
				"options": [
					"5",
					"10",
					"25",
					"50",
					"100",
					"200",
					"300"
				]
			},
			{
				"label": "Right Answer Mark:",
				"name": "marks_per_right_answer",
				"type": "select",
				"options": [
					"1",
					"2",
					"3",
					"4",
					"5"
				]
			},
			{
				"label": "Wrong Answer Mark:",
				"name": "marks_per_wrong_answer",
				"type": "select",
				"options": [
					"1",
					"1.25",
					"1.5",
					"2"
				]
			},
			{
				"label": "Exam Created on:",
				"name": "exam_created_on",
				"type": "datetime",
				"format": "DD-MM-YY"
			},
			{
				"label": "Status:",
				"name": "status"
			},
			{
				"label": "Enroll:",
				"name": "enroll"
			},
			{
				"label": "Question:",
				"name": "question"
			},
			{
				"label": "Result:",
				"name": "result"
			},
			{
				"label": "Action:",
				"name": "action"
			}
		]
	} );

	var table = $('#online_exam_table').DataTable( {
		dom: 'Bfrtip',
		ajax: 'php/table.online_exam_table.php',
		columns: [
			{
				"data": "online_exam_title"
			},
			{
				"data": "online_exam_datetime"
			},
			{
				"data": "online_exam_duration"
			},
			{
				"data": "total_question"
			},
			{
				"data": "marks_per_right_answer"
			},
			{
				"data": "marks_per_wrong_answer"
			},
			{
				"data": "exam_created_on"
			},
			{
				"data": "status"
			},
			{
				"data": "enroll"
			},
			{
				"data": "question"
			},
			{
				"data": "result"
			},
			{
				"data": "action"
			}
		],
		select: true,
		lengthChange: false,
		buttons: [
			{ extend: 'create', editor: editor },
			{ extend: 'edit',   editor: editor },
			{ extend: 'remove', editor: editor }
		]
	} );
} );

}(jQuery));

