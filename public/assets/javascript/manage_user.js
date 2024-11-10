$('.delete_user').click(function() {
    let userID = $(this).parent().siblings()[2].textContent
    $.ajax({
      success: function() {
        console.log(this);

        window.location.href = `/manageuser?id=${userID}`;
      }
    })
  })