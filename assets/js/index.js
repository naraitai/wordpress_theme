// Find all scoller item buttons
var btn = document.getElementsByClassName('scroller-itm');

// Loop through all and listen for click
for (var i = 0; i < btn.length; i++) {
    btn[i].addEventListener('click', function(event) {
        event.preventDefault();

        // Store post id
        var value = this.value;

        // Set formData
        var formData = new FormData;
        formData.append('post_id', value);
        formData.append('action', 'wordpress_theme_select_post');
        
        //Set and open request
        var request = new XMLHttpRequest();
        request.open('POST', the_ajax_script.ajaxurl, true);

        // Wait for response
        request.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                
                // Display response in detail section
                var out = document.getElementById('overlay-card');
                out.innerHTML = request.responseText;
            }
        };
        
        // Send request
        request.send(formData);
    });
}

function expdMenu() {
    var x = document.getElementById("nav-main");
    if (x.className === "nav") {
      x.className += " responsive";
    } else {
      x.className = "nav";
    }
  }

function on() {
document.getElementById("overlay").style.display = "block";
}
  
function off() {
document.getElementById("overlay").style.display = "none";
}