/********************************************************************************|
 # This copyright notice must be kept untouched in the stylesheet at all times.  |
 # The original version of this script and the associated (x)html                |
 # is available at http://www.encodez.com/                                       |
 # Copyright (c) 2009 Encodez Systems. All rights reserved.                      |
 # ------------------------------------------------------------------------------|
 # This script and the associated (x)html may be modified in any                 | 
 # way to fit your requirements.                                                 |
 #                                                                               | 
 # DYNAMIC MULTI TRANSITION BANNER                                               |                                                                              |
 # Author       : MUNEER SAHEED                                                  |
 # Released on  : 16 June 2009                                                   |
 # Version      : 1.0.0                                                          |
 # Website      : http://www.encodez.com/                                        |
 # Contact      : muneer AT encodez DOT c o m                                    |
 #-------------------------------------------------------------------------------|
 *
 *
 *
 * Properties
 * Following properties of can be editable according to
 * the final result expected.
 *
 * width of the banner
 * If changing this varibale, please do not forget to change
 * the CSS 
 * I    "#bannerTD"
 * II   "#bannerContainer"
 * III  "#bannerFooter"
 * IV   "#bannerFooterNav"
 */ 
var encBannerWidth = 900;

/*
 * This peroperty describes how the banner transition will be
 * The option availbale are
 * I    "slide"         - This slides the banner from left to right.
 * II   "slideDown"     - This slides the banner from top to bottom.
 * III  "fade"          - This makes the banner fade in/fade out.
 */
var encTransitionType = "fade";

/*
 * Describes the number of background images and thumbnail images
 * are there. 
 * Recomended values are 3 or 4
 * Can be 1 to max possible according to the width of banner.
 */
var encNumOfImages = 4;

/*
 * This array contains the path to large version of background images.
 * Path can be configured according to the user path.
 * Arrange the images in order. This order will be executed while processing.
 */
var encImageArray = new Array("img/banners/castrol.gif", "img/banners/mobil.gif", "img/banners/petrobras.gif", "img/banners/shell.gif"),"img/banners/texaco.gif");

/*
 * This array contains the path to thumbnail version of background images.
 * Path can be configured according to the user path.
 */
var encThumbNailImageArray = new Array("banner/thumb/img_1.png", "banner/thumb/img_2.png", "banner/thumb/img_3.png", "banner/thumb/img_4.png");

/*
 * This property describes the transition of the banner.
 * If it is set to true, the banner will automatically change according to the Timeout
 * value. The selected transition type will be applied while auto transition.
 */
var encAutoRotateBanner = true;

/*
 * Transition timeout.
 */
var encAutoRotateTimeout = 5000;

/*
 * Enable or disable description footer containing thumbnail image.
 * If this is set to true, the properties "encDisableTextsAll", "encEnableThumbImageLink",
 * "encEnableDescription", "encEnableReadMore" will not be executed.
 */
var encEnableFooter = false;

/*
 * Disable all text from the footer
 * except the thumbnail image. This will make possible to 
 * maximise the number of thumbnail image using variable "encNumOfImages".
 */
var encDisableTextsAll = false;

/*
 * Enable/disable link for thumbnail click event.
 */
var encEnableThumbImageLink = false;

/*
 * Enable/disable description in footer
 */
var encEnableDescription = true;

/*
 * Enable/disable readmore button in footer.
 * read more button is described using ".bttnMore" class
 */
var encEnableReadMore = true;

/*
 * This array contains the contents used in footer.
 * The sample values can be changed,
 * the array size can be altered according to the need.
 * It contains
 * I    Title
 * II   Description
 * II   Link
 * If wanted to remove the link only for a single item, just remove the value.
 */
var encBannerTexts = new Array(4);

encBannerTexts[0] = new Array(3);
encBannerTexts[0][0] = "OUR COMPANY";
encBannerTexts[0][1] = "We are dedicated in designing your..";
encBannerTexts[0][2] = "http://www.google.com";

encBannerTexts[1] = new Array(3);
encBannerTexts[1][0] = "DESIGN POLICY";
encBannerTexts[1][1] = "Our design is the dream of you.";
encBannerTexts[1][2] = "http://www.yahoo.com";

encBannerTexts[2] = new Array(3);
encBannerTexts[2][0] = "UNLIMITED CHOICES";
encBannerTexts[2][1] = "We provide you with the number of choices.";
encBannerTexts[2][2] = "http://www.bing.com";

encBannerTexts[3] = new Array(3);
encBannerTexts[3][0] = "STAY CONNECTED";
encBannerTexts[3][1] = "Keep in touch 365 days with us.";
encBannerTexts[3][2] = "http://www.msn.com";

/*
 * STOP !
 * WARNING !!!!
 * pLease do not change the below variables.
 * Thosea are private variables and used for runtime configuration
 */
var encBusy = false;
var encCurrentBanner = -1;
var encImg = new Array(encNumOfImages);
var encThumbs = new Array(encNumOfImages);
/*
 *  THANK YOU for leaving them.
 */


/*
 * The "encLoadBanner()" is the main function to start the banner.
 * It can be placed inside "$(document).ready(function()" jquery document ready
 * funciton or inside the "onload=function()" javascript document onload function.
 * both will work. The advantage of placing inside "onload=function()" is, 
 * the banner image will be loaded after the complete website rendered in to browser.
 */
onload=function() {
    encLoadBanner();
}

encLoadBanner = function() {
    encImg = encPreloadImages(encImageArray, encNumOfImages);
    if(encEnableFooter) {
        encThumbs = encPreloadImages(encThumbNailImageArray, encNumOfImages);        
    }
    
    $("#bannerBody").html("");
    
    $("div#bannerContainerCover").css("background-image", "url(" + encImg[encImg.length-1].src + ")");
    encTransformBanner(0);
    
    if(encEnableFooter) {
        var tmpCellWidth = Math.floor(encBannerWidth/encNumOfImages);
        var tmpLastCellWidth = tmpCellWidth + (encBannerWidth%encNumOfImages);
        
        var footerContents = "<table cellpadding='0' cellspacing='0' width='" + encBannerWidth + "' align='center'><tr>";
        for(i=0; i<encNumOfImages; i++) {
            if((i+1) == encNumOfImages)
                footerContents += "<td class='footerCell' width='" + tmpCellWidth + "'>";
            else
                footerContents += "<td class='footerCell' width='" + tmpLastCellWidth + "'>";
                
            footerContents += "<div class='imgBgDiv_i'><div id='thumbDiv_" + i + "' class='imgDiv' style='background:url(" + encThumbs[i].src + ") 0px 0px no-repeat;'></div></div>";
            footerContents += "<ul id='footerContents_" + i + "'>";
            footerContents += "<li class='footerTitle'></li>";
            footerContents += "<li class='footerDesc'></li>";
            footerContents += "<li class='footerLink'></li>";
            footerContents += "</ul>";
            footerContents += "</td>";
        }
        footerContents += "</tr></table>";
        $("#bannerFooterNav").html(footerContents);
        $("#bannerFooter").fadeTo("fast", 0.4);
        showFooter();
        $(".imgDiv").fadeTo("fast", 0.75);
    }
    
    
    if(! encDisableTextsAll && encEnableFooter) {
        for(i=0; i<encNumOfImages; i++) {
            $(".footerTitle:eq(" + i + ")").html(encBannerTexts[i][0]);
            if(encEnableDescription) $(".footerDesc:eq(" + i + ")").html(encBannerTexts[i][1]);
            if(encBannerTexts[i][2] != "" & encEnableReadMore) {
                $(".footerLink:eq(" + i + ")").html("<div class='bttnMore'><a href='" + encBannerTexts[i][2] + "'>&nbsp;</a></div>");
            }
        } 
    }
    
    if(encEnableThumbImageLink && encEnableFooter) {
        for(i=0; i<encNumOfImages; i++) {
            link = encBannerTexts[i][2];
            $("#thumbDiv_" + i).attr("onclick", "window.location.href='" + link + "'")
        }
    }
    
    if(encEnableFooter) {
        a=0;
        $(".imgDiv").each(function() {
            var ids = a;
            $(this).mouseover(function() {
                $(this).fadeTo("fast", 1);
                var cssObj = {"margin-top": "0px", "margin-bottom": "2px"}
                $(this).css(cssObj);
                encBusy = true;
                encTransformBanner(ids);
                $(document).pngFix();
            })
            a++;
        }).mouseout(function() {
           $(this).fadeTo("fast", 0.75);
           var cssObj = {"margin-top": "2px", "margin-bottom": "0px"}
           $(this).css(cssObj);
           encBusy = false;
           $(document).pngFix();
        });
        
        $(document).pngFix(); 
    }
    
    if(encAutoRotateBanner) {
        var tmpBannerTimer = setTimeout("encAutorotate(0)", encAutoRotateTimeout);
    }
}

showFooter=function() {
    $("div#bannerFooter").animate({ width: '900px', opacity: '0.5' }, 'slow');
}

encTransformBanner = function(ids) {
    encCurrentBanner = ids;
    var currentBg = $("div#bannerContainerCover").css("background-image");
    $("div#bannerContainer").css("background-image", currentBg);
    
    var cssObj = {"opacity": "0.1", "background-repeat": "no-repeat", "background-image": "url(" + encImg [ids].src + ")"}
    $("div#bannerContainerCover").css(cssObj);
    
    if(encTransitionType == "slide") {     
        $("div#bannerContainerCover").css("background-position", "-50px 0");                
        $("div#bannerContainerCover").stop().animate({backgroundPosition:"(0 0)", opacity:"1"}, {duration:600});
    }    
    else if(encTransitionType == "slideDown") {      
        $("div#bannerContainerCover").css("background-position", "0 -50px");                
        $("div#bannerContainerCover").stop().animate({backgroundPosition:"(0 0)", opacity:"1"}, {duration:600});
    } else {      
        $("div#bannerContainerCover").stop().animate({opacity:"1"}, {duration:1000});
    }
}

encAutorotate = function(bannerID) {
    if(encCurrentBanner > -1) {
        bannerID = encCurrentBanner;
        encCurrentBanner = -1;
    }
    
    if(!encBusy) {
        if(bannerID < (encNumOfImages-1) && bannerID >= 0)
            bannerID++;
        else
            bannerID =0;
            
        encTransformBanner(bannerID);
    }
    
    var tmpBannerTimer = setTimeout("encAutorotate(" + bannerID + ")", encAutoRotateTimeout);
}

encPreloadImages = function(images, size) {
    var tmpArray = new Array(size);
    for(i=0; i<size; i++) {
        tmpArray[i]      = new Image;
        tmpArray[i].src  = images[i];
    }
    return tmpArray;
}