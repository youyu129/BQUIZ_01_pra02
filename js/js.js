// JavaScript Document
$(".mw").hide();
$(document).ready(function (e) {
	$(".mainmu").mouseover(
		function () {
			$(this).children(".mw").stop().show()
		}
	)
	$(".mainmu").mouseout(
		function () {
			$(this).children(".mw").hide()
		}
	)
});
function lo(x) {
	location.replace(x)
}
function op(x, y, url) {
	$(x).fadeIn()
	if (y)
		$(y).fadeIn()
	if (y && url)
		$(y).load(url)
}
function cl(x) {
	$(x).fadeOut();
}

function more() {
	console.log('more ok');
	let el = `
	<tr>
		<td>
			<input type="text" name="text2[]" id="text" style="width:90%">
		</td>
		<td>
			<input type="text" name="href2[]" id="href" style="width:90%">
		</td>
		<td>
		</td>
	</tr>
	`
	$("#more").before(el)
}
