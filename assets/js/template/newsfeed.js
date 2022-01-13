var coll = document.getElementsByClassName("collapsible");

for (var i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "none") {
      content.style.display = "block";
    }
    else {
      content.style.display = "none";
    }
  });
}

var coll2 = document.getElementsByClassName("collapsibleOption");

for (var j = 0; j < coll2.length; j++) {
  coll2[j].addEventListener("click", function() {
    this.classList.toggle("active");
    var contentOption = this.nextElementSibling;
    if (contentOption.style.display === "none") {
      contentOption.style.display = "block";
    }
    else {
      contentOption.style.display = "none";
    }
  });
}

var coll3 = document.querySelectorAll(".btn-comment");
var coll4 = document.querySelectorAll(".comments");

coll3.foreach((btn, index) => {
  btn.addEventListener("click", function(e) {
    console.log(e.target);
    console.log("hello");
    this.classList.toggle("active");
    var contentOption = coll4[index];
    if (contentOption.style.display === "none") {
      contentOption.style.display = "block";
    }
    else {
      contentOption.style.display = "none";
    }
  });
}
)
//AJAX FOR COMMENT
/* $(document).ready(function(){
  $('#comment-form').on('submit',function(event){
    event.preventDefault();
    $.ajax({
      url: "process_add_comment.php",
      method: "post",
      data:{txt_comment: $(this).val()},
      success: function(res){
        $("#comment-form").reset();
      }
    })
  })
}) */