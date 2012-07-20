var base_url = $('#baseurl').val();
var lendername;
var liability1;
var liability2;
var ref;
var SLtotal;
var liabiltyrow;
var liabilityTotal = 0;
var USliabilityTotal = 0;

var assetDescription;
var assetValue;
var assetOutstanding;
var assetEquity;
var assetSole;

var CCJcourt;
var CCJcourtref;
var CCJclaimant;
var CCJamount;
var CCJsolicitor;
var CCJref;

var time;
// remap jQuery to $
(function($) {

})(this.jQuery);

// usage: log('inside coolFunc',this,arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function() {
	log.history = log.history || []; // store logs to an array for reference
	log.history.push(arguments);
	if (this.console) {
		console.log(Array.prototype.slice.call(arguments));
	}
};

$(document).ready(function() {

	var slideShow1 = $('.slideshow');
	var slideShow2 = $('.slideshow2');

	slideShow1.cycle({
		speedIn : 2000,
		speedOut : 2000,
		timeout : 5000,
		fx : 'fade' // choose your transition type, ex: fade, scrollUp, shuffle,
					// etc...
	});

	slideShow2.cycle({
		speedIn : 2000,
		speedOut : 2000,
		timeout : 5000,
		fx : 'fade' // choose your transition type, ex: fade, scrollUp, shuffle,
					// etc...
	});

	slideShow2.fadeIn(2000);
	slideShow1.fadeIn(2000);

});

// catch all document.write() calls
(function(doc) {
	var write = doc.write;
	doc.write = function(q) {
		log('document.write(): ', arguments);
		if (/docwriteregexwhitelist/.test(q))
			write.apply(doc, arguments);
	};
})(document);

// wymeditor
jQuery(function() {
	jQuery('.wymeditor').wymeditor();
});

$(document).ready(function() {
	$(".services").hover(function() {
		$(this).stop().animate({
			opacity : 0.8
		}, 500);
		$(this).find("h2").stop().animate({
			color : "#000000"
		}, 500);
	}, function() {
		$(this).stop().animate({
			opacity : 1.0
		}, 500);
		$(this).find("h2").stop().animate({
			color : "#319825"
		}, 500);
	});
});

// gallery image mouse overs
$(document).ready(function() {
	$(".thumbnails").hover(function() {
		$(this).stop().animate({
			opacity : 0.5
		}, 300);
	}, function() {
		$(this).stop().animate({
			opacity : 1.0
		}, 300);
	})

});

/** ******************************************** */
/*******************************************************************************
 * MouseOver hover thing for sidebox buttons
 * 
 * 
 ******************************************************************************/
$(document).ready(function() {

	$("#sidebox img").hover(function() {

		$(this).stop().animate({
			opacity : 0.5

		}, 150);

		$(this).find('.clickhere').fadeIn(100);
	}, function() {

		$(this).stop().animate({

			opacity : 1

		}, 150);

	});

});

/** ******************************************** */
/*******************************************************************************
 * Drop Down Menu
 * 
 * 
 ******************************************************************************/

$(document).ready(function() {

	// cache nav
	var nav = $("#menutop");

	// add indicator and hovers to submenu parents
	nav.find("a").each(function() {
		if ($(this).find("ul").length > 0) {
			// $("<span>").text("^").appendTo($(this).children(":first"));

			// show subnav on hover
			$(this).mouseenter(function() {
				$(this).stop().animate({

					color : '#ffffff'

				}, 150);
				$(this).find("ul").stop(true, true).slideDown('fast');
			});

			// hide submenus on exit
			$(this).mouseleave(function() {
				$(this).stop().css({

					color : '#000'

				}, 150);
				$(this).stop().animate({

				}, 150);
				$(this).find("ul").stop(true, true).slideUp('fast');
			});
		} else {
			// show subnav on hover
			$(this).mouseenter(function() {
				$(this).stop().css({
					color : '#009ebb'

				}, 150);

			});

			// hide submenus on exit
			$(this).mouseleave(function() {
				$(this).stop().css({
					color : '#000000'

				}, 150);
				$(this).stop().animate({

				}, 150);

			});
		}
	});
});

/** ******************************************** */
/*******************************************************************************
 * infobox hover
 * 
 * 
 ******************************************************************************/
$(document).ready(function() {

	$('.hoverbox').hover(function() {
		$('.infobox', this).stop(true, true).slideDown('fast');
	}, function() {
		$('.infobox', this).stop(true, true).slideUp('fast');
	})

});

jQuery(function() {
	$('#timepicker1').timepicker();
	$('#timepicker2').timepicker();
});

/** ************************************************* */
/*******************************************************************************
 * tables on calculator
 * 
 * 
 ******************************************************************************/
$(document)
		.ready(
				function() {

					$('#addLiability')
							.click(
									function() {
										$('#liabilityDiv').fadeIn();
										timeNow = Math.round(new Date()
												.getTime());

										lendername = $('input[name=lendername]')
												.val();
										liability1 = $('input[name=liability1]')
												.val();
										liability2 = $('input[name=liability2]')
												.val();
										ref = $('input[name=ref]').val();
										SLtotal = $('input[name=SLtotal]')
												.val();
										
										liabilityTotal = parseFloat(liabilityTotal) + parseFloat($('input[name=SLtotal]').val());
										$('#liabilityTotal2').empty();
										$('#liabilityTotal2').append('Total:' + liabilityTotal);

										var liabiltyrow = "<tr class='"
												+ timeNow
												+ "'><td>"
												+ lendername
												+ "</td><td>"
												+ liability1
												+ "</td><td>"
												+ liability2
												+ "</td><td>"
												+ ref
												+ "</td><td>"
												+ SLtotal
												+ "</td><td><span class='delrow1'>x</span></td></tr>";
										$('#liabilityTable  > tbody:last')
												.append(liabiltyrow);
										$('#liabilityentry').val('');
										$('#liabilityentry').val(
												$('#liabilityentry').val()
														+ $("#liabilityDiv")
																.html());
										
										$("input[name='lendername']").val('');
										$("input[name='liability1']").val('');
										$("input[name='liability2']").val('');
										$("input[name='ref']").val('');
										$("input[name='SLtotal']").val('');

									});

					$('#addUSLiability')
							.click(
									function() {
										$('#USliabilityDiv').fadeIn();
										timeNow = Math.round(new Date()
												.getTime());

										creditorname = $(
												'input[name=creditorname]')
												.val();
										USLref = $('input[name=USLref]').val();
										USLamount = $('input[name=USLamount]')
												.val();
										
										USliabilityTotal = parseFloat(USliabilityTotal) + parseFloat($('input[name=USLamount]').val());
										$('#USliabilityTotal2').empty();
										$('#USliabilityTotal2').append('Total:' + USliabilityTotal);

										var USLliabiltyrow = "<tr class='"
												+ timeNow
												+ "'><td>"
												+ creditorname
												+ "</td><td>"
												+ USLref
												+ "</td><td>"
												+ USLamount
												+ "</td><td><span class='delrow2'>x</span></td></tr>";
										$('#USliabilityTable  > tbody:last')
												.append(USLliabiltyrow);
										$('#USliabilityentry').val('');
										$('#USliabilityentry').val(
												$('#USliabilityentry').val()
														+ $("#USliabilityDiv")
																.html());
										
										$("input[name='creditorname']").val('');
										$("input[name='USLref']").val('');
										$("input[name='USLamount']").val('');
										

									});

					$('#addasset')
							.click(
									function() {
										$('#assetDiv').fadeIn();
										timeNow = Math.round(new Date()
												.getTime());

										assetDescription = $(
												'input[name=assetDescription]')
												.val();
										assetValue = $('input[name=assetValue]')
												.val();
										assetOutstanding = $(
												'input[name=assetOutstanding]')
												.val();
										assetEquity = $(
												'input[name=assetEquity]')
												.val();
										assetSole = $('input[name=assetSole]')
												.val();

										var USLliabiltyrow = "<tr class='"
												+ timeNow
												+ "'>"
												+ "<td>"
												+ assetDescription
												+ "</td>"
												+ "<td>"
												+ assetValue
												+ "</td>"
												
												+ "<td>"
												+ assetOutstanding
												+ "</td>"
												+ "<td>"
												+ assetEquity
												+ "</td>"
												+ "<td>"
												+ assetSole
												+ "</td>"
												+ "<td><span class='delrow'>x</span></td></tr>";
										$('#assetTable  > tbody:last')
												.append(USLliabiltyrow);
										$('#assetentry').val('');
										$('#assetentry').val(
												$('#assetentry').val()
														+ $("#assetDiv")
																.html());
										
										$("input[name='assetDescription']").val('');
										$("input[name='assetValue']").val('');
										$("input[name='assetOutstanding']").val('');
										$("input[name='assetEquity']").val('');
										$("input[name='assetSole']").val('');
										

									});
					
					
					var CCJcourt;
					var CCJcourtref;
					var CCJclaimant;
					var CCJamount;
					var CCJsolicitor;
					var CCJref;
					
					$('#addCCJ')
					.click(
							function() {
								$('#CCJDiv').fadeIn();
								timeNow = Math.round(new Date()
										.getTime());

								CCJcourt = $(
										'input[name=CCJcourt]')
										.val();
								CCJcourtref = $('input[name=CCJcourtref]')
										.val();
								CCJclaimant = $(
										'input[name=CCJclaimant]')
										.val();
								CCJamount = $(
										'input[name=CCJamount]')
										.val();
								CCJsolicitor = $('input[name=CCJsolicitor]')
										.val();
								CCJref = $('input[name=CCJref]')
								.val();

								var CCJrow = "<tr class='"
										+ timeNow
										+ "'>"
										+ "<td>"
										+ CCJcourt
										+ "</td>"
										+ "<td>"
										+ CCJcourtref
										+ "</td>"
										
										+ "<td>"
										+ CCJamount
										+ "</td>"
										+ "<td>"
										+ CCJclaimant
										+ "</td>"
										+ "<td>"
										+ CCJsolicitor
										+ "</td>"
										+ "<td>"
										+ CCJref
										+ "</td>"
										+ "<td><span class='delrow'>x</span></td></tr>";
								$('#CCJTable  > tbody:last')
										.append(CCJrow);
								$('#CCJentry').val('');
								$('#CCJentry').val(
										$('#CCJentry').val()
												+ $("#CCJDiv")
														.html());
								
								$("input[name='CCJcourt']").val('');
								$("input[name='CCJcourtref']").val('');
								$("input[name='CCJamount']").val('');
								$("input[name='CCJclaimant']").val('');
								$("input[name='CCJsolicitor']").val('');
								$("input[name='CCJref']").val('');

							});
					$('.delrow1').live(
							"click",
							function() {
								var delclass = $(this).parent().parent().attr(
										"class");
								var value23 =$(this).parent().prev().text();
								liabilityTotal = parseFloat(liabilityTotal) - parseFloat(value23);

								$('.' + delclass).remove();
								$('#liabilityentry').val('');
								$('#liabilityentry').val(
										$('#liabilityentry').val()
												+ $("#liabilityDiv").html());
								
								$('#liabilityTotal2').empty();
								$('#liabilityTotal2').append('Total:' + liabilityTotal);


							});
					
					$('.delrow2').live(
							"click",
							function() {
								var delclass = $(this).parent().parent().attr(
										"class");
								var value234 =$(this).parent().prev().text();
								USliabilityTotal = parseFloat(USliabilityTotal) - parseFloat(value234);

								$('.' + delclass).remove();
								$('#USliabilityentry').val('');
								$('#USliabilityentry').val(
										$('#USliabilityentry').val()
												+ $("#USliabilityDiv").html());
								
								$('#USliabilityTotal2').empty();
								$('#USliabilityTotal2').append('Total:' + USliabilityTotal);


							});
					$('.delrow').live(
							"click",
							function() {
								var delclass = $(this).parent().parent().attr(
										"class");
								var value23 =$(this).parent().prev().text();
							

								$('.' + delclass).remove();
							
							
								$('#assetentry').val('');
								$('#assetentry').val(
										$('#assetentry').val()
												+ $("#assetDiv").html());
								$('#CCJentry').val('');
								$('#CCJentry').val(
										$('#CCJentry').val()
												+ $("#CCJDiv").html());


							});
				});

/** ************************************************* */
/*******************************************************************************
 * tabs
 * 
 * 
 ******************************************************************************/
$(document).ready(function() {
	$('#tabvanilla').tabs({
		fx : {
			height : 'toggle',
			opacity : 'toggle'
		}
	});
});
/**
 * --------------------------------------------------------------------
 * jQuery-Plugin "pngFix" Version: 1.2, 09.03.2009 by Andreas Eberhard,
 * andreas.eberhard@gmail.com http://jquery.andreaseberhard.de/
 * 
 * Copyright (c) 2007 Andreas Eberhard Licensed under GPL
 * (http://www.opensource.org/licenses/gpl-license.php)
 * 
 * Changelog: 09.03.2009 Version 1.2 - Update for jQuery 1.3.x, removed @ from
 * selectors 11.09.2007 Version 1.1 - removed noConflict - added png-support for
 * input type=image - 01.08.2007 CSS background-image support extension added by
 * Scott Jehl, scott@filamentgroup.com, http://www.filamentgroup.com 31.05.2007
 * initial Version 1.0
 * --------------------------------------------------------------------
 * @example $(function(){$(document).pngFix();});
 * @desc Fixes all PNG's in the document on document.ready
 * 
 * jQuery(function(){jQuery(document).pngFix();});
 * @desc Fixes all PNG's in the document on document.ready when using noConflict
 * 
 * @example $(function(){$('div.examples').pngFix();});
 * @desc Fixes all PNG's within div with class examples
 * 
 * @example $(function(){$('div.examples').pngFix( { blankgif:'ext.gif' } );});
 * @desc Fixes all PNG's within div with class examples, provides blank gif for
 *       input with png
 *       --------------------------------------------------------------------
 */

(function($) {

	jQuery.fn.pngFix = function(settings) {

		// Settings
		settings = jQuery.extend({
			blankgif : 'blank.gif'
		}, settings);

		var ie55 = (navigator.appName == "Microsoft Internet Explorer"
				&& parseInt(navigator.appVersion) == 4 && navigator.appVersion
				.indexOf("MSIE 5.5") != -1);
		var ie6 = (navigator.appName == "Microsoft Internet Explorer"
				&& parseInt(navigator.appVersion) == 4 && navigator.appVersion
				.indexOf("MSIE 6.0") != -1);

		if (jQuery.browser.msie && (ie55 || ie6)) {

			// fix images with png-source
			jQuery(this)
					.find("img[src$=.png]")
					.each(
							function() {

								jQuery(this)
										.attr('width', jQuery(this).width());
								jQuery(this).attr('height',
										jQuery(this).height());

								var prevStyle = '';
								var strNewHTML = '';
								var imgId = (jQuery(this).attr('id')) ? 'id="'
										+ jQuery(this).attr('id') + '" ' : '';
								var imgClass = (jQuery(this).attr('class')) ? 'class="'
										+ jQuery(this).attr('class') + '" '
										: '';
								var imgTitle = (jQuery(this).attr('title')) ? 'title="'
										+ jQuery(this).attr('title') + '" '
										: '';
								var imgAlt = (jQuery(this).attr('alt')) ? 'alt="'
										+ jQuery(this).attr('alt') + '" '
										: '';
								var imgAlign = (jQuery(this).attr('align')) ? 'float:'
										+ jQuery(this).attr('align') + ';'
										: '';
								var imgHand = (jQuery(this).parent()
										.attr('href')) ? 'cursor:hand;' : '';
								if (this.style.border) {
									prevStyle += 'border:' + this.style.border
											+ ';';
									this.style.border = '';
								}
								if (this.style.padding) {
									prevStyle += 'padding:'
											+ this.style.padding + ';';
									this.style.padding = '';
								}
								if (this.style.margin) {
									prevStyle += 'margin:' + this.style.margin
											+ ';';
									this.style.margin = '';
								}
								var imgStyle = (this.style.cssText);

								strNewHTML += '<span ' + imgId + imgClass
										+ imgTitle + imgAlt;
								strNewHTML += 'style="position:relative;white-space:pre-line;display:inline-block;background:transparent;'
										+ imgAlign + imgHand;
								strNewHTML += 'width:' + jQuery(this).width()
										+ 'px;' + 'height:'
										+ jQuery(this).height() + 'px;';
								strNewHTML += 'filter:progid:DXImageTransform.Microsoft.AlphaImageLoader'
										+ '(src=\''
										+ jQuery(this).attr('src')
										+ '\', sizingMethod=\'scale\');';
								strNewHTML += imgStyle + '"></span>';
								if (prevStyle != '') {
									strNewHTML = '<span style="position:relative;display:inline-block;'
											+ prevStyle
											+ imgHand
											+ 'width:'
											+ jQuery(this).width()
											+ 'px;'
											+ 'height:'
											+ jQuery(this).height()
											+ 'px;'
											+ '">'
											+ strNewHTML
											+ '</span>';
								}

								jQuery(this).hide();
								jQuery(this).after(strNewHTML);

							});

			// fix css background pngs
			jQuery(this)
					.find("*")
					.each(
							function() {
								var bgIMG = jQuery(this)
										.css('background-image');
								if (bgIMG.indexOf(".png") != -1) {
									var iebg = bgIMG.split('url("')[1]
											.split('")')[0];
									jQuery(this)
											.css('background-image', 'none');
									jQuery(this).get(0).runtimeStyle.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"
											+ iebg + "',sizingMethod='scale')";
								}
							});

			// fix input with png-source
			jQuery(this)
					.find("input[src$=.png]")
					.each(
							function() {
								var bgIMG = jQuery(this).attr('src');
								jQuery(this).get(0).runtimeStyle.filter = 'progid:DXImageTransform.Microsoft.AlphaImageLoader'
										+ '(src=\''
										+ bgIMG
										+ '\', sizingMethod=\'scale\');';
								jQuery(this).attr('src', settings.blankgif)
							});

		}

		return jQuery;

	};

})(jQuery);

// jquery ui buttons
$(function() {
	$("button, input:submit").button();

});

// date picker on menu page

$(document).ready(
		function() {
			$("#datepicker").datepicker(
					{
						dateFormat : 'DD, d MM, yy',
						onSelect : function(dateText, inst) {
							var epoch = $.datepicker.formatDate('@', $(this)
									.datepicker('getDate')) / 1000;

							$('#alternate').val(epoch);
						}
					});

			$("#datepicker2").datepicker(
					{
						dateFormat : 'DD, d MM, yy',
						onSelect : function(dateText, inst) {
							var epoch = $.datepicker.formatDate('@', $(this)
									.datepicker('getDate')) / 1000;

							$('#alternate2').val(epoch);
						}
					});

		});

$(function() {

	$(".sortable").sortable({
		update : function(event, ui) {
			$.post(base_url + "admin/sort_gallery", {
				pages : $('.sortable').sortable('serialize')
			});
		}
	});
	$(".sortable").disableSelection();

});




function initialize() {
	var map;

	var seedbed = new google.maps.LatLng(51.588770, 0.600858);
  var myLatlng = new google.maps.LatLng(-25.363882,131.044922);
  var myOptions = {
    zoom: 15,
    center: seedbed,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  
  var marker = new google.maps.Marker({
      position: seedbed, 
      map: map,
      title:"SLB"
  });   
}




  google.maps.event.addDomListener(window, 'load', initialize);
