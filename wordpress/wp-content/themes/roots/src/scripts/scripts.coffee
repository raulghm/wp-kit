$(document).ready ->
	setTimeout ->
		$("html").addClass "init"
	, 10

	setTimeout ->
		$("html").addClass "init-1"
	, 200

	setTimeout ->
		$("html").addClass "init-2"
	, 700

	$('.toggle-menu').click ->
		$('.menu.mobile').toggleClass 'toggle'
		$('.cd-panel-backdrop').toggleClass 'is-visible'
		$('body').toggleClass 'overflow'

	$('.menu.mobile a, .menu.mobile .close').click ->
		$('.menu.mobile').toggleClass 'toggle'
		$('.cd-panel-backdrop').toggleClass 'is-visible'
		$('body').toggleClass 'overflow'
