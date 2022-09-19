// contact function
 
function sendEmail(){
    Email.send({

        Host: "smtp.gmail.com",
        Username: "isaacmwiyikinwa08@gmail.com",
        Password: "",
        To: "isaacmwiyikinwa08@gmail.com",
        From: document.getElementById("email").value,
        Subject: "From KBRC Wakiso Website",
        Body:"Name" + document.getElementById("firstname").value 
              + " " + document.getElementById("lastname").value 
              + "<br> Phone:" + document.getElementById("phone").value 
              + "<br> Email: " + document.getElementById("email").value 
              + "<br> Message: " + document.getElementById("message").value
          

    }).then(
        message => alert("Message sent successfully")
    );
}


