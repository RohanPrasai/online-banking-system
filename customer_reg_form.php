<?php ob_start() ?>

<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="css/customer_reg_form.css"/>
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');


.container{
  height:150px;
  width: 200px;
  position: relative;
}
.container .wrapper{

}
.wrapper.active{
  border: none;
}
.wrapper .image{

}
.wrapper img{

}
.wrapper .icon{

}
.wrapper .text{

}


.wrapper .file-name{
  position: absolute;

}
.wrapper.active:hover .file-name{
  display: block;
}
.container #custom-btn{
  margin-top: 10px;
  display: block;
  width: 80%;
  height: 30px;
  border: none;
  outline: none;
  border-radius: 15px;
  color: #fff;
  font-size: 10px;
  font-weight: 800;
  letter-spacing: 1px;
  text-transform: uppercase;
  cursor: pointer;
  background:rgb(45, 71, 112) ;
}

.container #customsig-btn{
  margin-top: 10px;
  display: block;
  width: 80%;
  height: 30px;
  border: none;
  outline: none;
  border-radius: 15px;
  color: #fff;
  font-size: 10px;
  font-weight: 800;
  letter-spacing: 1px;
  text-transform: uppercase;
  cursor: pointer;
  background:rgb(45, 71, 112) ;
}
</style>
	
	
	

    
<?php include'header.php';  ?>
	
    </head>
    <body>
    <div class="container_regfrm_container_parent">
	<h3>Online Account Opening Form</h3>
	<div class="container_regfrm_container_parent_child">
		<form method="post">
    
      <img name="ppimage" id="ppimage" src="img\UploadImg.png" height="150px" width="150px">
      <div class="container">
         <div class="wrapper">
            <div class="image">
              </div>
            
            <div id="cancel-btn">
               <i class="fas fa-times"></i>
            </div>
            <div class="file-name" id="ppFile">
               
            </div>
         </div>
		 
		
		 <!-- photo_end -->
         <button onclick="defaultBtnActive()" id="custom-btn">Choose a file</button>
         <input id="default-btn" type="file" hidden>
      </div>

	
			<!-- photo -->

    
			
				 <input type="text" name="name" placeholder="Name" required />
				 <select name ="gender" required >
					  <option class="default" value="" disabled selected>Gender</option>
					  <option value="Male" required >Male</option>
					  <option value="Female">Female</option>
					  <option value="Others">Others</option>
				</select>
				 <input type="text" name="mobile" placeholder="Mobile no" required />
				 <input type="text" name="email" placeholder="Email id" />
				 <input type="text" name="landline" placeholder="Landline no" />
				 <input type="text" name="dob" placeholder="Date of Birth" onfocus="(this.type='date')" required />
				 <input type="text" name="pan_no" placeholder="PAN Number" required />
				 <input type="text" name="citizenship" placeholder="Citizenship Number" required />
				 <input class="address" type="text" name="homeaddrs" placeholder="Home Address" required  />
				 <input class="address" type="text" name="officeaddrs" placeholder="Office Address" />
				 <input type="text" name="country" placeholder="Nepal" value="Nepal" readonly="readonly" />



				 <select name ="state" required >
					  <option class="default" value="" disabled selected>State</option>
					  
					  <option value="state 1">state 1</option>
					  <option value="state 2">state 2</option>
					  <option value="state 3">state 3</option>
					  <option value="state 4">state 4</option>
					  <option value="state 5">state 5</option>
					  <option value="state 6">state 6</option>
					 
				</select>



				 <select name ="city" required >
					  <option class="default" value="" disabled selected>City</option>
					  <option value="Kathmandu">Kathmandu</option>
					  <option value="Biratnagar">Biratnagar</option>
					  <option value="Birgunj">Birgunj</option>
					  <option value="Hetauda">Hetauda</option>
					  <option value="Nepalgunj">Nepalgunj</option>
					  <option value="Butwal">Butwal</option>
					  <option value="Jhapa">Jhapa</option>
					  
					  
				</select>



				 
				 <input type="text" name="pin" placeholder="Pin Code" required />
				 <input type="text" name="arealoc" placeholder="Area/Locality" required />
				 <input type="text" name="nominee_name" placeholder="Nominee Name (If any)" />
				 <input type="text" name="nominee_ac_no" placeholder="Nominee Account no"  />
				 
				 <select name ="acctype" required >
					  <option class="default" value="" disabled selected>Account Type</option>
					  <option value="Saving">Saving</option>
					  <option value="Current">Current</option>
				</select>


				<input type="submit" name="submit" value="Submit">
				</form>

       
        <img id="sigimage" src="img\UploadImg.png" height="150px" width="150px">
				<div class="container">
         <div class="wrapper">
            <div class="image">
               <img src="" alt="">
            </div>
            <div class="content">
               <div class="icon">
                  <i class="fas fa-cloud-upload-alt"></i>
               </div>
               <div class="text">
                  <p>Upload your signature<p>
               </div><br>
            </div>
            <div id="cancel-btn">
               <i class="fas fa-times"></i>
            </div>
            <div class="file-name" id="sigfile">
               
            </div>
         </div>
		 
         <button onclick="SignatureBtnActive()" id="customsig-btn">Choose a file</button>
         <input id="sig-btn" type="file" hidden>
	
     
         </div>
		 </div>

     <script>
         const fileName = document.querySelector(".file-name#ppFile");
         const sigfileName = document.querySelector(".file-name#sigfile");
         const defaultBtn = document.querySelector("#default-btn");
         const sigBtn = document.querySelector("#sig-btn");
         const customBtn = document.querySelector("#custom-btn");
         const cancelBtn = document.querySelector("#cancel-btn i");
         const sigcustomBtn = document.querySelector("#customsig-btn");
         const sigcancelBtn = document.querySelector("#customsig-btn i");
         const img = document.querySelector("#ppimage");
         const sigimg = document.querySelector("#sigimage");
         let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
         function defaultBtnActive(){
           defaultBtn.click();
         }
         defaultBtn.addEventListener("change", function(){
           const file = this.files[0];
           if(file){
             const reader = new FileReader();
             reader.onload = function(){
               const result = reader.result;
               img.src = result;
               //wrapper.classList.add("active");
             }
             cancelBtn.addEventListener("click", function(){
               img.src = "";
              // wrapper.classList.remove("active");
             })
             reader.readAsDataURL(file);
           }
           if(this.value){
             let valueStore = this.value.match(regExp);
            // fileName.textContent = valueStore;
           }
         });

         function SignatureBtnActive(){
           sigBtn.click();
         }
         sigBtn.addEventListener("change", function(){
           const file = this.files[0];
           if(file){
             const reader = new FileReader();
             reader.onload = function(){
               const result = reader.result;
               sigimg.src = result;
               //wrapper.classList.add("active");
             }
             sigcustomBtn.addEventListener("click", function(){
              sigimg.src = "";
               //wrapper.classList.remove("active");
             })
             reader.readAsDataURL(file);
           }
           if(this.value){
             let valueStore = this.value.match(regExp);
             //fileName.textContent = valueStore;
           }
         });

      </script>
	
		 <!-- <?php include 'footer.php';?> -->
    
</body>
</html>


<?php 

if(isset($_POST['submit'])){

	session_start();
	$_SESSION['$cust_acopening'] = TRUE;
	$_SESSION['cust_name']=$_POST['name'];
	$_SESSION['cust_gender']=$_POST['gender'];
	$_SESSION['cust_mobile']=$_POST['mobile'];
	$_SESSION['cust_email']=$_POST['email'];
	$_SESSION['cust_landline']=$_POST['landline'];
	$_SESSION['cust_dob']=$_POST['dob'];
	$_SESSION['cust_pan=']=$_POST['pan_no'];
	$_SESSION['cust_citizenship']=$_POST['citizenship'];
	$_SESSION['cust_homeaddrs']=$_POST['homeaddrs'];
	$_SESSION['cust_officeaddrs']=$_POST['officeaddrs'];
	$_SESSION['cust_country']=$_POST['country'];
	$_SESSION['cust_state']=$_POST['state'];
	$_SESSION['cust_city']=$_POST['city'];
	$_SESSION['cust_pin']=$_POST['pin'];
	$_SESSION['arealoc']=$_POST['arealoc'];
	$_SESSION['nominee_name']=$_POST['nominee_name'];
	$_SESSION['nominee_ac_no']=$_POST['nominee_ac_no'];
	$_SESSION['cust_acctype']=$_POST['acctype'];
	
	header('location:cust_regfrm_confirm.php');
	
	
}

?>