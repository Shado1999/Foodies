// MUSIC POPUP SCRIPT

function popmusic(URL) {
var popup_width = 400
var popup_height = 220
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,left = 100,top = 100,width='+popup_width+',height='+popup_height+'');");
}

//  End
