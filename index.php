

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Check In</title>
  </head>
  <style type="text/css">
  #image_preview {
  width: 200px;
  height: 200px;
  }
  </style>
  

 <h1>Purchase Tickets:</h1>
  

  <body>
    <label for="image_input">Upload Photo:</label>
    <input type="text" id="image_input" value="http://cn.faceplusplus.com/static/resources/python_demo/1.jpg">
    <label for="image_input">FULL NAME:</label>
    <input type="text" id="name_input" value="Joe Doe">
      <input type="button" value="Register" id="checkin_manually_first_time">
    

    <div> <img id="image_preview"></div>
    <pre id="response1">Loading...</pre><hr>
    <pre id="response2">Loading...</pre><hr>
    <pre id="response3">Loading...</pre><hr>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="facepp-sdk.min.js"></script>
    <script type="text/javascript">
      $("#checkin_manually_first_time").on("click", function() {


       var name = document.getElementById("name_input").value;
        var api = new FacePP('2633e8ac35fb94c496edae424907722b',
                     'yzL4PYsX8babhtqRAh6-Sq1Nt8rL33LQ ',
                     { apiURL: 'http://apius.faceplusplus.com/v2' });
        api.request('person/create', {
         person_name: name
        }, function(err, result) {
          if (err) {
             document.getElementById('response1').innerHTML = "User already exists";
            return;
          } else {

      	// first time user

      	var image = document.getElementById("image_input").value;
      	$('#image_preview').attr("src", $("#image_input").val()); 
       var api = new FacePP('2633e8ac35fb94c496edae424907722b',
                     'yzL4PYsX8babhtqRAh6-Sq1Nt8rL33LQ ',
                     { apiURL: 'http://apius.faceplusplus.com/v2' });
        api.request('faceset/create', {
        
        }, function(err, result) {
          if (err) {
            // TODO handle error
            return;
          }
          // TODO use result
          var tag = result.tag;
          
          document.getElementById('response1').innerHTML = JSON.stringify(result, null, 2);
        
        });
  

      	var image = document.getElementById("image_input").value;
        var api = new FacePP('2633e8ac35fb94c496edae424907722b',
                     'yzL4PYsX8babhtqRAh6-Sq1Nt8rL33LQ ',
                     { apiURL: 'http://apius.faceplusplus.com/v2' });
        api.request('detection/detect', {
         url: image
        }, function(err, result) {
          if (err) {
            // TODO handle error
            return;
          }

          document.getElementById('response2').innerHTML = JSON.stringify(result, null, 2);

          });
     



          document.getElementById('response3').innerHTML = JSON.stringify(result, null, 2);
          }

        });
        
  
      });   

     
  

    </script>
  </body>
</html>
