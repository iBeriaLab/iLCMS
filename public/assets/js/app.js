
// World map
$('.map-world').vectorMap({
    map: 'world_mill_en',
    backgroundColor: 'transparent',
    regionStyle: {
        initial: {
            fill: '#7E57C2'
        }
    }
});

var postId = 0;
var postBodyElement = null;

$('.post').find('.interaction').on('click', function (event) {
   event.preventDefault();

   postBodyElement = event.target.parentNode.parentNode.childNodes[1];
   var postBody = postBodyElement.textContent;
   postId = event.target.parentNode.parentNode.dataset['postid'];
   $('#post-body').val(postBody);
   $('#edit-modal').modal();
});

$('#modal-save').on('click', function () {
   $.ajax({
       method: 'POST',
       url: urlEdit,
       data: {body: $('#post-body').val(), postId: postId, _token: token}
   })
       .done(function (msg) {
           $(postBodyElement).text(msg['new_body']);
           $('#edit-modal').mode('hide');
       })
});


$('.like').on('click', function (event) {
    console.log(event);
});




// qveynebi vue










