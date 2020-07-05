
/*function printPage(ID) {
var winprint = window.open("","printer","");
var content = document.getElementById('print').innerHTML;
winprint.document.open();
winprint.document.write('<html><head><title>CHILDREN REPORT</title><body>');
winprint.document.write(content);
winprint.document.write('<br/><br/><a style="padding:5px;background:blue;color:#fff;" href="#" onclick="window.print();return false;">PRINT</a>   </body></html>');
winprint.document.close();
}*/

function PrintDoc() {
        var toPrint = document.getElementById('printarea');
        var popupWin = window.open('', '_blank', 'width=350,height=150,location=no,left=200px');
        popupWin.document.open();
        popupWin.document.write('<html><title>APPLICTION FORM</title><link rel="stylesheet" type="text/css" href="print.css" /></head><body onload="window.print()">')
        popupWin.document.write(toPrint.innerHTML);
        popupWin.document.write('</html>');
        popupWin.document.close();
    }
/*--This JavaScript method for Print Preview command--*/
    function PrintPreview() {
        var toPrint = document.getElementById('printarea');
        var popupWin = window.open('', '_blank', 'width=350,height=150,location=no,left=200px');
        popupWin.document.open();
        popupWin.document.write('<html><title>:APPLICTION FORM</title><link rel="stylesheet" type="text/css" href="Print.css" media="screen"/></head><body">')
        popupWin.document.write(toPrint.innerHTML);
        popupWin.document.write('</html>');
        popupWin.document.close();
    }