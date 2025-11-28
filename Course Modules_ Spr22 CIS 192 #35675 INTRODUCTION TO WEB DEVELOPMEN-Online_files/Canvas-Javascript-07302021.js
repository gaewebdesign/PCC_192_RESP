// JavaScript Document

// Begin - eXplorance Blue Connector

var BLUE_CANVAS_SETUP={connectorUrl:"https://surveys.pasadena.edu/BlueConnector/",canvasAPI:"https://canvas.pasadena.edu",domainName:"com.explorance",consumerID:"4ka4tx4nLdejNUrQDGL9zA==",defaultLanguage:"en-us"},BlueCanvasJS=document.createElement("script");BlueCanvasJS.setAttribute("type","text/javascript");BlueCanvasJS.setAttribute("src","https://surveys.pasadena.edu/BlueConnector//Scripts/Canvas/BlueCanvas.min.js");document.getElementsByTagName("head")[0].appendChild(BlueCanvasJS);


// End - Blue

/**
 * JQuery is the javascript library used in many places across canvas.
 *
 * This script describes how you would change the text in the email box on the Canvas
 * Login page. By default, the text in the box is "Email" but this script will allow you
 * to change this.
 *
 * When implementing this script, replace <replacement> with the text you want to appear.
 * For example, you may want to have that text be "A-Number" rather than "email".
 *
 *
 *
 **/

window.onerror = function(message, url, lineNumber) {
    console.log(lineNumber, message);
};

$(document).ready(function() {

    $('#pseudonym_session_remember_me').parent().append('<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0 style="border-collapse:collapse;border:none"> <tr valign=top> <td> <a href="http://online.pasadena.edu/" target="_blank">Student Information/Resources</a></td></tr><tr> <td> <a href="http://online.pasadena.edu/faculty/"<strong>Faculty Information/Resources</strong></a> </tr> </table>');
    $("a:contains('Student Information/Resources')").css('color', '#ffffff');
    $("a:contains('Faculty Information/Resources')").css('color', '#ffffff');
});

$(document).ready(function(){
  var added_text = '<strong>PLEASE NOTE:</strong> Canvas does not support Internet Explorer (IE). Chrome and Firefox are the recommended web browsers.<br><br>By entering my unique PCC username and password to access a course in Canvas, I affirm that I am the student who is registered for the course, completing the course material and assignments, and receiving the academic credit. I understand and agree to follow PCC policies regarding academic integrity and the use of electronic resources.';
  var added_html_and_text = '<div style="clear:both"><p>' + added_text + '</p></div>';

  $('#login_form').append(added_html_and_text);


});

// BEGIN - Library and Tutoring Icons

var styleAdded = false;
    function addMenuItem(linkText, linkhref, icon, target) {
        var iconHtml = '',
            itemHtml,
            linkId = linkText.split(' ').join('_'),
            iconCSS = '<style type="text/css">' +
                '   i.custom_menu_list_icon:before {' +
                '       font-size: 27px;' +
                '       width: 27px;' +
                '       line-height: 27px;' +
                '   }' +
                '   i.custom_menu_list_icon {' +
                '       width: 27px;' +
                '       height: 27px;' +
                '   }' +
                '   body.primary-nav-expanded .menu-item__text.custom-menu-item__text {' +
                '       white-space: normal;' +
                '       padding: 0 2px;' +
                '   }' +
                '</style>';
        if (icon !== '') {
            // If it is a Canvas icon
            if (icon.indexOf('icon') === 0) {
                iconHtml = '<div class="menu-item-icon-container" role="presentation"><i class="' + icon + ' custom_menu_list_icon"></i></div>';
            // for an svg or other image
            } else if (icon !== '') {
                iconHtml = '<div class="menu-item-icon-container" role="presentation">' + icon + '</div>';
            }
        }
        // Process Target
        if (target !== undefined && target !== null && target !== '') {
            target = ' target="' + target + '"';
        } else {
            target = '';
        }
        // Build item html
        itemHtml = '<li class="ic-app-header__menu-list-item ">' +
                '   <a id="global_nav_' + linkId + '" href="' + linkhref + '" class="ic-app-header__menu-list-link" ' + target + '>' + iconHtml +
                '       <div class="menu-item__text custom-menu-item__text">' + linkText + '</div>' +
                '   </a>' +
                '</li>';
        $('#menu .ic-app-header__menu-list-item').last().before(itemHtml);
        // Add some custom css to the head the first time
        if (!styleAdded) {
            $('head').append(iconCSS);
            styleAdded = true;
        }
    }


addMenuItem('Library', 'https://pasadena.edu/library', '<img src="https://pasadena.edu/images/library_icon_30px.png">', '_blank');
addMenuItem('Tutoring', 'https://pasadena.edu/academics/support/success-centers/', '<img src="https://pasadena.edu/images/tutoring_icon_30px.png">', '_blank');

// END - Library and Tutoring Icons


// BEGIN - Ally Snippet

window.ALLY_CFG = {
    'baseUrl': 'https://prod.ally.ac',
    'clientId': 7137
};
$.getScript(ALLY_CFG.baseUrl + '/integration/canvas/ally.js');

// END - Ally Snippet


// BEGIN - Pronto Snippet

(function() {
    window.prontoInit = {"ixn":"canvas","cid":160,"version":"1.0"};
    var script = document.createElement('script');
    script.src = `https://chat.trypronto.com/js/embedded.js?cb=${Math.round(new Date().getTime() / 1000)}`;
    document.body.appendChild(script);
})();

// END - Pronto Snippet


// Start Pope Tech Accessibility Guide

(function(){function a(a,b){var c=document.createElement("script");c.type="text/javascript",c.readyState?c.onreadystatechange=function(){("loaded"===c.readyState||"complete"===c.readyState)&&(c.onreadystatechange=null,b())}:c.onload=function(){b()},c.src=a,document.getElementsByTagName("head")[0].appendChild(c)}function b(a){return a&&("TeacherEnrollment"===a||"TaEnrollment"===a||"DesignerEnrollment"===a)}var c="username",d="enrollments";if(-1!==window.location.href.indexOf("/login/canvas"))return localStorage.removeItem(`${"pt-instructor-guide"}.${c}`),localStorage.removeItem(`${"pt-instructor-guide"}.${"uuid"}`),localStorage.removeItem(`${"pt-instructor-guide"}.${"settings"}`),void localStorage.removeItem(`${"pt-instructor-guide"}.${d}`);if(-1!==window.location.href.indexOf("?login_success=1"))return localStorage.removeItem(`${"pt-instructor-guide"}.${c}`),void $.get("/api/v1/users/self",function(a){localStorage.setItem(`${"pt-instructor-guide"}.${c}`,a.name)});var e=window.location.pathname;if(-1!==e.indexOf("/edit")||-1!==e.indexOf("/new")||-1!==e.indexOf("/syllabus")||e.match(/\/courses\/[0-9]+\/pages\/?$/)||e.match(/\/courses\/[0-9]+\/?$/)){var f=localStorage.getItem(`${"pt-instructor-guide"}.${d}`);if(null===f)$.get("/api/v1/users/self/enrollments?type[]=DesignerEnrollment&type[]=TaEnrollment&type[]=TeacherEnrollment",function(c){for(var e=0;e<c.length;++e)if(localStorage.setItem(`${"pt-instructor-guide"}.${d}`,JSON.stringify(c)),b(c[e].type)){a("https://canvas-cdn.pope.tech/loader.min.js",function(){});break}});else{f=JSON.parse(f);for(var g=0;g<f.length;++g)if(b(f[g].type)){a("https://canvas-cdn.pope.tech/loader.min.js",function(){});break}}}})();

// End Pope Tech Accessibility Guide 