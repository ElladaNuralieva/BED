$(function() {
  var specialElementHandlers = {
    '#editor': function(element, renderer) {
      return true;
    }
  };
  $('#pdfBut').click(function() {
    var doc = new jsPDF();
    doc.fromHTML($('#sec').html(), 15, 15, {
      'width': 170,
      'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
  });
});