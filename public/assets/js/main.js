// Ajax to get form value and translate it:

$("#translate").submit(function(e) {

e.preventDefault();

var form = $(this);
var url = form.attr('action');

$.ajax({
    type: "GET",
    url: url,
    data: form.serialize(),
    
    success: function(data)
    {
        $('#translateTable tbody tr').remove();
        $('#translateTable tbody').append("<tr><td>Request</td><td>" + data.requested + "</td></tr><tr><td>Translation</td><td>" + data.translated + "</td></tr><tr><td>Pronounce</td><td>" + data.pronounce + "</td></tr>");
        $('#translateTable').show();
    }
    });

});