<!DOCTYPE html>
<html>
<title>GST Service</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
#div1 {animation-timing-function: linear;}
@keyframes mymove {
  from {left: 100px;}
  to {left: 850px;}
}
<!-- media query -->
 @media screen and (max-width:482px) {
   .navbar {width:50%}
 }

</style>
<body style="background-color:#f55970">

<!-- Links (sit on top) -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">A Platform to learn Coding for Kids</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services.php">Our Services </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact.php">Contact Us</a>
      </li>
    </ul>
  <!--  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>  -->
  </div>
</nav>



<!-- Content -->
<div class="w3-content" style="max-width:1500px; margin-top:0px; margin-bottom:40px">
<div class="row">
    <div class="col-sm-2" style="background-color:#52c7be; padding-top:30px"> 
        <img src="image/logo.jpeg" class="rounded-circle" >
    </div>
    <div class="col-sm-10" style="background-color:#52c7be">
            <h1 class="display-3"> Taxcon GST </h1>
            <h4 class="p-3"> A Professional Accounting & GST Filling Service </h4>
            <p class="text-right" style="margin-right:30px; color:teal"><b> Mobile : 7678690893 </b></p>
    </div>
  </div>
</div>
</div>

<!-- Welcome -->
<div style="margin-bottom:40px"> 
  <h2 class="text-center"><b> Welcome to Our Website </b></h2>
</div>
<div class="w3-content" style="max-width:1200px; margin-bottom:40px"> 
  <div class="row"> 
    <div class="col-sm-5">  
      <img src="image/accounting.jpeg" style="height:300px; width:500px">
    </div>
    <div class="col-sm-7" style="background-color:#fada5e">
      <p class="p-4"> Welcome All of You. We provide advice when your business needs it, not just when you ask for it.  We provide professional services in the areas of GST Registration, Returns & Compliance, Income tax return, R.O.C, P. Tax, D.S.C, MSME Registration and Book-keeping. We are a team of Chartered Accountants, Company Secretaries dedicated to bringing more values so as to enhance our client experience. </p>
    </div>
  </div>

<!-- latest news -->
<div style="margin-top:40px">
<div class="w3-center">
      <button class="btn btn-primary" style="font-size:20px">Latest News Update</button>
</div>
</div>
</div>

<!-- Services -->
    <div style="margin-bottom:40px">
        <h2 class="text-center"> Our Services </h2>
    </div>
<div class="w3-row-padding">
  <div class="w3-container-fluid w3-third">
    <img src="image/gst1.jpg" style="height:320px; width:320px; margin-left:80px; cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity"><br>
    <a href="#" class="btn btn-primary" style="margin-left:180px; margin-top:20px" > See Details </a>
  </div>
  <div class="w3-container-fluid w3-third">
    <img src="image/gst3.jpg" style="height:320px; width:320px; margin-left:80px; cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
    <a href="#" class="btn btn-primary" style="margin-left:180px; margin-top:20px" > See Details </a>
  </div>
  <div class="w3-container=fluid w3-third">
    <img src="image/gst2.jpg" style="height:320px; width:320px; margin-left:80px; cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
    <a href="#" class="btn btn-primary" style="margin-left:180px; margin-top:20px" > See Details </a>
  </div>
</div>

<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom">
    <img id="img01" style="width:100%; height:600px">
  </div>
</div>

<!-- Need -->
<div style="margin-top:40px; margin-bottom:40px">
        <h2 class="text-center"> Why need GST ? </h2>
</div>
<div class="w3-content" style="max-width:1200px; margin-bottom:40px; border: 2px solid #fada5e; background:#fada5e"> 
<p style="margin-bottom:10px; font-size:17px"> <b>The need for GST </b> in Indian Taxation System will add value at each stage and will set off the rates both at state and at central level. Introducing GST, will increase the efficiency of taxation, improves the economic growth and it will bring whole nation to one national market. </p> 
<p style="margin-bottom:10px; margin-left:40px; font-size:17px"> <b> Our present taxation system </b> is very complex and very confusing, corruption chance is there, which leads to distrust of government, there are hidden tax for exports, whereas no charge applicable on Importing of Goods/Services from one state to another. </p>
<p style="margin-bottom:10px; margin-left:80px; font-size:17px"> <b>Just to overcome these issues,</b> Rajya Sabha introduced GST bill, which will bring transparency to taxation and consumer will get to know how much tax amount they are paying to government for sale/ purchase/ manufacturing. </p>
<p class="py-3" style="font-size:18px"><img src="image/gsttag.jpeg" alt="gst" style="width:300px;height:300px;margin-right:35px; float:left">
    <b>Following are some of the points that can easily explain the need for GST:-</b>  </br>
    <ul>
      <li style="font-size:17px"><b>Tax Structure will be Simple: –</b> At present, there are huge number of taxes that has to pay by consumers, with GST it will single tax to pay, which is much easier to understand. For businesses, accounting complexities will reduce and results less paperwork, which will save both time and money. GST will increase economic GDP by 2%-2.5%. </br> </li>

 

      <li style="font-size:17px"> <b>Tax revenue will increase:</b> Simple tax structure will bring more tax payers and in return it will be revenue for government.</br> </li>

      <li style="font-size:17px"> <b> Competitive pricing:</b> What GST will do? Well, it will eliminate all other taxes of indirect taxes and this will effectively mean that tax amount paid by end users (consumers) will reduce. As in Economics, lower will the prices, more will be demand for that product, results in more consumption of goods, which will be benefited to companies.</br> </li>

      <li style="font-size:17px"> <b>Boost to exports: </b>If Indian market will be competitive in pricing, then more and more foreign players will try to enter the market, which results in more numbers of exporters and benefits to Indian Market. As far there is no tax rate is finalized, but yes GST is much needed in the countries where, it lacks transparency and complex taxation system.</br> </li>
    </ul>
</p>
</div>

<!-- gst works -->
<div style="margin-top:40px; margin-bottom:40px">
        <h2 class="text-center"> How GST works in INDIA ? </h2>
</div>
<div class="w3-content" style="max-width:1200px; margin-bottom:40px"> 
  <div class="row"> 
    <div class="col-sm-7" style="background-color:#fada5e">
      <p class="p-3" style="font-size:17px"> <b>GST </b> will be imposed on manufacturing, sale and consumption of goods and services rendered at national level. According to Indian Government, they will opt for Dual System GST, which means tax will be collected and levy by Centre and State. Imposing of tax and collected at Centre level will be CGST (Central Goods and Services Tax), and other, which will be levy and collected at State level will be SGST (State Goods and Services Tax). Another, which will be collected at Intermediate level will be IGST (Intermediate Goods and Services Tax).  </p> </p>
      <p class="p-2" style="font-size:17px">  If we talk about GST, it is imposed on value added on goods and services at each stage while sale and purchase. What our present system says? It states that initially there is set off of taxes to be paid, means that every seller recover tax from buyers, which ultimately put burden of taxes to those who are end users( customers), of goods and services. </p>
    </div>
    <div class="col-sm-5"> 
      <div class="w3-container w3-center w3-animate-right">
        <img src="image/work.jpeg" style="height:350px; width:500px">
      </div>
    </div>
  </div>
</div>

  <!-- contact us -->
  <section class="my-5">
    <div id="contact us" class="py-5">
        <h2 class="text-center"> Contact Us </h2>
    </div>
    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
        <div class="form-group">
          <lable>Username</lable>
          <input type="text" name="user" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <lable>Email ID</lable>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <lable>Mobile</lable>
          <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <lable>Comments</lable>
          <textarea class="form-control" name="comments"> </textarea>
        </div>
        <button type="submit" class="btn btn-success">Sumbit</button>
      </form>
    </div>
</section>

<!-- <h1 style="text-align:right; color:lightgrey"> Taxcon GST </h1>  -->

<!-- footer -->
 <footer class="w3-padding-64 w3-light-grey w3-small" id="footer">
    <div class="w3-row-padding">  
        <div class="w3-col s4 w3-center">
            <h5>Contact Details</h5>
            <p style="font-size:16px"><i class="fa fa-fw fa-map-marker"></i>Kolkata, Barrackpur, Jagadal, Chandannagar</p>
            <p style="font-size:16px"><i class="fa fa-fw fa-phone"></i> 767690893 </p>
            <p style="font-size:16px"><i class="fa fa-fw fa-envelope"></i> deepakgour000@mail.com</p>
          </div>
          <div class="w3-col s4 w3-center"> 
          <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
          </div>
          <div class="w3-col s4 w3-center">
            <h3>Follow Us</h3> <br>
            <a href="#"><i class="fa fa-facebook-official w3-hover-opacity w3-xxlarge"></i></a>
            <a href="#"><i class="fa fa-twitter w3-hover-opacity w3-xxlarge"></i></a>
            <a href="#"><i class="fa fa-instagram w3-hover-opacity w3-xxlarge"></i></a>
          </div>
    </div>
</footer>   

    
  <div class="w3-#fada5e w3-padding-24" style="text-align:center; color:lightgrey">gst@copyright2021</div>

 














<!-- service -->
<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </body>
</html>
