/**
 * Created by Meander Studios Inc.
 */
// Omega Code
// © Meander Studios Inc 2016 - 2017
// Requires Permission From Meander Studios Inc. To Use


function write(input){
    document.write(input);
}
function writeln(input){
    write(input + '<br>');
}
function writelnTag(input,tagName){
    var startTag = '<' + tagName + '>';
    var endTag = '</' + tagName + '>';
    writeln(startTag + input + endTag);
}
function writeTag(input,tagName){
    var startTag = '<' + tagName + '>';
    var endTag = '</' + tagName + '>';
    write(startTag + input + endTag);
}
function log(input){
    console.log(input);
}
function createCopyright(){
    var date = new Date();
    var year = date.getFullYear();
    if (year==2016){
        writeTag('© Meander Studios Inc 2016', 'p');
    }else{
        writeTag('© Meander Studios Inc ' + year, 'p');
    }
}
function createTitle(input){
    writeTag('HW Diary Pro | ' + input,'title');
}
function writeTagAttribute(input,tagName,attribute,attributeValue){
    var startTag = '<' + tagName + ' ' + attribute + '="' + attributeValue + '">';
    var endTag = '</' + tagName + '>';
    write(startTag + input + endTag);
}
function editElementInnerHtml(id,input){
    document.getElementById(id).innerHTML = input;
}
function createStyle(styleElement,styleName, value){
    write('<style type="text/css">');
    write(styleElement + "{");
    write(styleName + ": " + value + ';');
    write('}');
    write('</style>');
}



function confirmLeaveUrl(url,websiteStatus){
    var leave = confirm("You Are About To Leave This Page To Go To " + url);
    if (leave == true) {
        if (websiteStatus==true){
            window.location = 'https://www.' + url;
        }
        if (websiteStatus==false){
            window.location = url;
        }
    }
}
function getColor(colorName){
    if (colorName=='carrot') {
        return '#e67e22';
    }else if(colorName=='alizarin'){
        return '#e74c3c';
    }else if(colorName=='emerald'){
        return '#2ecc71';
    }else if(colorName=='peter river'){
        return '#3498db';
    }else if(colorName=='amethyst'){
        return '#9b59b6';
    }else if(colorName=='wet asphalt'){
        return '#34495e';
    }else if(colorName=='midnight blue'){
        return '#2c3e50';
    }else if(colorName=='sun flower'){
        return '#f1c40f';
    }else if(colorName == 'white'){
        return '#e8e8e8';
    }
}
function createLoading(widthPercent){
  write("<img src='/HW-Diary-Pro/resources/img/gif/loading.gif' alt='Loading Image' width='" + widthPercent + "%' style='position: fixed; left: " + (50 - (widthPercent/2)) + "%; margin-top: 50vh; bottom: " + (widthPercent*1.5) + "vw;'>")
}
function createUnderlineLink(color1,color2,duration,text){
    underlineLinkNum = underlineLinkNum + 1;
    write("<style>");
    document.write("#j" + underlineLinkNum + "{color: " + color1 + ";text-decoration: none;border-bottom: 1px solid " + color1 + ";-webkit-transition-duration: " + duration +"s;}");
    document.write("#j" + underlineLinkNum + ":hover{color: " + color2 + ";border: none;background-color: " + color1 + ";text-decoration: none;cursor:pointer;}");
    write("</style>");
    writeTagAttribute(text,"a","id","j" + underlineLinkNum);
}
function createNoty(text,type){
  document.write("<script>" + "noty({ text: '<p>" + text + "</p>', type: '" + type + "', layout: 'topLeft'});" + "</script>")
}
function verifyEmail(email){
	var arrayEmail = Array.from(email);
	var indexAtSymbol = arrayEmail.indexOf("@");
	var indexPeriod = arrayEmail.indexOf(".");
	if(indexAtSymbol!=-1){
		if(indexPeriod!=-1){
			if(indexPeriod>indexAtSymbol){
				var theEmail = email.split("@");
				var theWebsite = theEmail[1];
				theWebsite = theWebsite.split('.');
				var theExtension = theWebsite[1];
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}else{
		return false;
	}
}
