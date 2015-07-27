<?php
session_start();
if (!isset($_SESSION['username']) || empty($_SESSION['username']))
{
    header("Location: ../businessLogin.html");

}


$fontsize='15px';
$fontWeight='100';
$color= 'black';

$display1='block';
$display2='none';
$display3='none';
$display4='none';
$display5='none';


$selformatBackground1='#2eb161';
$selformatBackground2='#c6c6c6';

$selcolor1='#fff';
$selcolor2='black';


if (isset($_GET['order']))
{
    $ordVar=$_GET['order'];
    
    $fontsize='15.8px';
    $fontWeight='900';
    $color= '#2eb161';
    
    $display1='none';
    $display2='block';
    
    
    
    $display4='block';
    $display5='none';
    
    $selformatBackground2='2eb161';
$selformatBackground1='c6c6c6';

$selcolor2='#fff';
$selcolor1='#black';
    
}

/* ------AFTER FINAL LAUNCH OF SITE------

if (isset($_GET['prevVal']))
{
    $dataEntry1=$_GET['noPosts'];
    $dataEntry2=$_GET['deliveryTime'];
    $dataEntry3=$_GET['prevVal'];
    
    $display3='block';
    $display1='none';
    $display2='block';
    $display4='none';
    $display5='none';

}
*/

if (isset($_GET['prevVal']))
{
    $dataEntry1=$_GET['noPosts'];
    $dataEntry2=$_GET['deliveryTime'];
    $dataEntry3=$_GET['prevVal'];
    

$topic=$_GET['topic'];
$industry=$_GET['industry'];
    
function checkbox($name)
{
    if (isset($_GET[$name]))
    {
        return 1;
    }
    
    else
    {
        return 0;
    }
}
    
    $goal1=checkbox('goal1');
    $goal2=checkbox('goal2');
    $goal3=checkbox('goal3');
    $goal4=checkbox('goal4');
    $goal5=checkbox('goal5');
    $goal6=checkbox('goal6');
    
    $goal=$goal1.$goal2.$goal3.$goal4.$goal5.$goal6;
    
    $styleOfWriting1=checkbox('style1');
    $styleOfWriting2=checkbox('style2');
    $styleOfWriting3=checkbox('style3');
    $styleOfWriting4=checkbox('style4');
    $styleOfWriting5=checkbox('style5');
    $styleOfWriting6=checkbox('style6');
    
$styleOfWriting=$styleOfWriting1.$styleOfWriting2.$styleOfWriting3.$styleOfWriting4.$styleOfWriting5.$styleOfWriting6;
    
    
$sampleBlog=$_GET['sampleBlog'];

    
    
function radio($name)
{   
    if (isset($_GET[$name]))
    {
        return $_GET[$name];
    }
    else
    {
        return 0;
    }
}
    
$pointOfView=radio('pointOfView');
    
    
    $blogStructure1=checkbox('blogStructure1');
    $blogStructure2=checkbox('blogStructure2');
    $blogStructure3=checkbox('blogStructure3');
    
$blogStructure=$blogStructure1.$blogStructure2.$blogStructure3;
    
    
$targetAudience=$_GET['targetAudience'];
$keyPoints=$_GET['keyPoints'];
$avoid=$_GET['avoid'];
$keywords=$_GET['keywords'];
$specialInstructions=$_GET['specialInstructions'];
    
    
    
    
    $display3='block';
    $display1='none';
    $display2='block';
    $display4='none';
    $display5='none';

//}



//if (isset($_POST['orderEntry']))
//{
    
//    $dataEntry=$_POST['orderEntry'];
    
    
    
    
define('DB_NAME', 'whitepanda');
define('DB_USER', 'wpRootDatabase');
define('DB_PASSWORD', 'orthrox');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link)
{
	die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected)
{
	die('Ca\'t use ' . DB_NAME . ': ' . mysql_error());
}






function errorChk($sql)
{
    if (!mysql_query($sql))
    {
	   die('Error: ' . mysql_error());
    }
    
    
}


$user =$_SESSION['username'];

    
    /*
$orders =$dataEntry[0];
$noPost =$dataEntry[1];
$deliveryTime=$dataEntry[2];
*/
    

$date=date("Y-m-d H:i:s");


$sql ="INSERT INTO businesshomepage (email, orders,  noOfPosts, deliveryTime, topic, industry_of_experience, goal, style_of_writing, sample_blog, point_of_view, blog_structure, target_audience, key_points, things_to_avoid, keywords, special_instructions, dateOrder) VALUES ('$user', '$dataEntry3', '$dataEntry1', '$dataEntry2', '$topic', '$industry', '$goal', '$styleOfWriting', '$sampleBlog', '$pointOfView', '$blogStructure', '$targetAudience', '$keyPoints', '$avoid', '$keywords', '$specialInstructions', '$date')";





errorChk($sql);



mysql_close();

    
   
}

$servername = "localhost";
$username = "wpRootDatabase";
$password = "orthrox";
$dbname = "whitepanda";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$intercom="SELECT firstName, lastName FROM signup_business WHERE email='".$_SESSION['username']."'";


$con3=mysqli_fetch_object(mysqli_query($conn, $intercom));

$name= $con3->firstName." ".$con3->lastName;



?>




<html>
    <head>


        <link rel="stylesheet" type="text/css" href="../css/businessHomepage.css">
        <link rel="stylesheet" type="text/css" href="../css/reset.css">
        
        
        <script src = "../jquery/jquery-1.11.1.js"></script>
        <script src = "../jquery/businessHomepage_jquery-1.11.1.js"></script>
        

  
        <title>Business- White Panda</title>
        
        <script>
  window.intercomSettings = {
    
    name: "<?php echo $name; ?>",
    email: "<?php echo $_SESSION['username']; ?>",
    created_at: 1234567890,
    app_id: "nkuzzniw"
  };
	</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/nkuzzniw';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>









<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63498607-1', 'auto');
  ga('send', 'pageview');

</script>
        
        
<style type="text/css">
    
    #order
    {
        font-size:<?php echo $fontsize ?>;
        font-weight:<?php echo $fontWeight ?>;
        color:<?php echo $color ?>;
        
    }
    
    #welcome
    {
        display:<?php echo $display1 ?>;      
    }

    .business_main .tab_result .order_now .sel_format
    {
        display:<?php echo $display5 ?>;     
    }
    
    .business_main .tab_result .order_now
    {
        display:<?php echo $display2 ?>;
    }
    
    .business_main .tab_result .order_now .content_requirement
    {
        display:<?php echo $display4 ?>;
    }
    
    .business_main .tab_result .order_now .pay_now
    {
        display:<?php echo $display3 ?>;
        
    }
    
    #format li
    {
        background-color:<?php echo $selformatBackground1 ?>;
        color:<?php echo $selcolor1 ?>;
    }
    #requirement li
    {
        background-color:<?php echo $selformatBackground2 ?>;
        color:<?php echo $selcolor2 ?>;
    }
    
    
    
</style>
        
        
        
        
    </head>
    
    <body>
        <div class='nav_bar-writer'>
                <ul>
                    <li id="logo"><a href="../index.html"><img src='../images/full_logo.png'/></a></li>     
                    <li id='username' name='email'><a href="#"><?php echo $_SESSION['username'];  ?>  &#x25BC;</a></li>
                        
<!--                    <li><img src='../images/EmptyProfile.png'/></li>-->
                </ul>
                <br/>
                <ul class="accnt">
                    <li>
                        <ul>
                            <a href="#"><li>&nbsp; &nbsp; Edit account info</li></a>
                            <a href="signOutBusiness.php"><li>&nbsp; &nbsp; Sign out</li></a>
                        </ul>
                    </li>
                </ul>
        </div>
        
        
        
    
        
        <div class="business_main">
            
            
           

            <div class="business_tab">
                <ul>
                    
                    <a href="#"><li id="order">Order now</li></a>
                    <a href="#"><li id="received">Received files</li></a>
<!--                    <a href="#"><li id="wallet">Wallet</li></a>-->
            </div>
            
            <div class='tab_result'>
                <div id="welcome">
                    <h1>Welcome to our desk</h1>
                    <h5><img src="../images/desk2.png"/></h5>
                </div>
                
                
                <div class="order_now">
                    <div id="ord_tab">
                        <ul>
                            <a href="#" id='format'><li>SELECT FORMAT<img src="../im
                            ages/businessArrow.png"/></li></a>
                            <a href="#" id="requirement"><li>CONTENT REQUIREMENTS<img src="../images/businessArrow.png"/></li></a>
                            <a href="#" id='pay'><li>PAYMENT</li></a>
                        </ul>
                       
                    </div>
                    
                    
                    <div class="sel_format">
                        <ul class="c1">
                            <li><img src="../images/Temp/Blog_post.png"/>
                                <p><span>Standard Blog Post</span><br/>
                                    350-450 words<br/>
                                    Rs. 99.00/-
                                </p> 
                                 
                                <a id='order1' href="#"  onclick="orderid(1)"><h4>Order</h4></a>
                            </li>
                            <li><img src="../images/Temp/Blog_post.png"/>
                             
                                <p><span>Long Blog Post</span><br/>
                                    550-650 words<br/>
                                    Rs. 399.00/-
                                </p>
                                <a onclick="orderid(2)" href="#"><h4>Order</h4></a>
                            </li>
                            <li><img src="../images/Temp/Facebook_post.png"/>
                                <p><span>Facebook Posts</span><br/>
                                    1-2 sentences<br/>
                                    Rs. 149.00/-  for 25
                                </p>
                                <a onclick="orderid(3)" href="#"><h4>Order</h4></a>
                            </li>
                            <li><img src="../images/Temp/Tweets.png"/>
                                
                                <p><span>Tweets</span><br/>
                                    up to 140 characters<br/>
                                    Rs. 139.00/-
                                </p>
                                <a onclick="orderid(4)" href="#"><h4>Order</h4></a>
                            </li>
                        </ul>
                        
                        
                        <ul class="c2">
                            <li><img src="../images/Temp/website_pages.png"/>
                                <p><span>Website Pages</span><br/>
                                    350-450 words<br/>
                                    Rs. 129.00/-
                                </p>
                                <a onclick="orderid(5)" href="#"><h4>Order</h4></a>
                            </li>
                            <li><img src="../images/article.png"/>
                                <p><span>Articles</span><br/>
                                    850-950 words<br/>
                                    Rs. 199.00/-
                                </p>
                                <a onclick="orderid(6)" href="#"><h4>Order</h4></a>
                            </li>
                            <li><img src="../images/press.png"/>
                                <p><span>Press Release</span><br/>
                                    350-450 words<br/>
                                    Rs. 299.00/-
                                </p>
                                <a onclick="orderid(7)" href="#"><h4>Order</h4></a>
                            </li>
                            <li><img src="../images/Temp/product_description.png"/>
                                <p><span>Product Description</span><br/>
                                    1-2 sentences<br/>
                                    Rs. 99.00/-
                                </p>
                                <a onclick="orderid(8)" href="#"><h4>Order</h4></a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="content_requirement">
                        
                        <form method="get" action="businessHomepage.php">
                            <h2>How many post do you need?</h2>
                            <select name="noPosts">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                            <br/><br/><br/>
                            <h2>When do you need the first draft delivered by?</h2>
                            <select name="deliveryTime">
                                <option value="1">5 business days</option>
                                <option value="2">3 business days, +20% surcharge</option>
                            
                            </select>
                            <br/><br/><br/>
                            
                            <h2>Topic of your content</h2>
                            <input required='required' id='textbox' type="text" name="topic" placeholder="Focus of your Content" />
                            <br/><br/><br/>
                            
                            <h2>Industry in which the writer may have experience</h2>
                            <select name="industry">
                                <option value="1">Does not matter</option>
                                <option value="2">Business</option>
                                <option value="3">Art & Design</option>
                                <option value="4">Food & Beverage</option>
                                <option value="5">Entertainment</option>
                                <option value="6">Healthcare</option>
                                <option value="7">Journalism</option>
                                <option value="8">Publishing</option>
                                <option value="9">Lifestyle & Travel</option>
                                <option value="10">Education</option>
                                <option value="11">Software Technology</option>
                                <option value="12">Sports & Fitness</option>
                            </select>
                            
                            <br/>
                            <br/><br/><hr><br/><br/><br/>
                            
                            <h1><u>Optional Part</u></u></h1>
                        <br/>
                            <h2>Goal:</h2>
                            
                          
                        <p class="goal">
                        <span id="goal"><input type="checkbox" name="goal1" value='1'/>Generate clicks/SEO </span> <span id="goal"><input type="checkbox" name="goal2" value='2'/>Informed analysis</span> <span id="goal"> <input type="checkbox" name="goal3" value='3'/>Thought leadership</span><br> <br><br><br><br><span id="goal"> <input type="checkbox" name="goal4" value='4'/>Repurpose existing writing</span> <span id="goal"> <input type="checkbox" name="goal5" value='5'/>Promote topic</span> <span id="goal"> <input type="checkbox" name="goal6" value='6'/>Educate / provide instructions</span>
                        </p>
                        <br/><br/><br/>
                        <h2>Style of Writing:</h2>
                          
                        <p class="goal">
                        <span id="goal"><input type="checkbox" name="style1" value='1'/>Authoritative/Informed</span> <span id="goal"><input type="checkbox" name="style2" value='2'/>Serious / Formal</span> <span id="goal"> <input type="checkbox" name="style3" value='3'/>Advice / Instructional</span><br> <br><br><br><br><span id="goal"> <input type="checkbox" name="style4" value='4'/>Viral / Catchy</span> <span id="goal"> <input type="checkbox" name="style5" value='5'/>Casual / Tabloid</span> <span id="goal"> <input type="checkbox" name="style6" value='6'/>Satirical / Witty</span>
                        </p>
                        
                        <br/><br/><br/>
                        
                        <h2>Sample Blog:</h2>
                        <input id='textbox' type="text" name="sampleBlog" placeholder="Link to an existing content and describe why it's a good sample"/>
                        <br/><br/><br/>
                        <h2>Point of View:</h2>
                        <p class="goal">
                        <span id="goal"><input type="radio" name="pointOfView" value='1'/>1st person - I</span> <span id="goal"><input type="radio" name="pointOfView" value='2'/>2nd person - you</span> <span id="goal"> <input type="radio" name="pointOfView" value='3'/>3rd person - she / he</span>  
                        </p>
                        
                        <br/><br/><br/>
                        
                        <h2>Blog Structure:</h2>
                        <p class="goal">
                        <span id="goal"><input type="checkbox" name="blogStructure1" value='1'/>Paragraphs</span> <span id="goal"><input type="checkbox" name="blogStructure2" value='2'/>Subheads</span> <span id="goal"> <input type="checkbox" name="blogStructure3" value='3'/>Lists</span>  
                        </p>
                        
                        <br/><br/><br/>
                        <h2>Target Audience:</h2>
                        <input name='targetAudience' type="text" id="textbox" placeholder="Describe the particular group at which your content is aimed"/>
                        <br/><br/><br/>
                        
                        <h2>Key Points:</h2>
                        <input name='keyPoints' type="text" id="textbox" placeholder="List key points your writer should address"/>
                        
                        <br/><br/><br/>
                        
                        <h2>Things to Avoid:</h2>
                        <input name="avoid" type="text" id="textbox" placeholder="List specific examples (e.g. if competitors, list competitor names)"/>
                        
                        <br/><br/><br/>
                        <h2>Keywords:</h2>
                        <input name="keywords" type="text" id="textbox" placeholder="List keywords and how they should be integrated into post"/>
                        
                        
                        <br/><br/><br/>
                        <h2>Special Instructions:</h2>
                        <input name="specialInstructions" type="text" id="textbox" placeholder="Additional guidelines your writer should follow (e.g. should there be a call to action? what should the reader take away from the piece?)"/>
                        
                        
                        
                        
                            <br><br><br><br><br><br>
                            <button id='proceedPay' type="submit" name='prevVal' value="<?php echo $ordVar ?>">Proceed for payment</button>
                       </form>
                    </div>
                    
                    <div class='pay_now' onload="submitPayuForm()">
                        <?php
						// Merchant key here as provided by Payu
						$MERCHANT_KEY = "RVYpkd";
						
						// Merchant Salt as provided by Payu
						$SALT = "zKDU8nAp";
						
						// End point - change to https://secure.payu.in for LIVE mode
						$PAYU_BASE_URL = "https://test.payu.in";
						
						$action = '';
						
						$posted = array();
						if(!empty($_POST)) {
						    //print_r($_POST);
						  foreach($_POST as $key => $value) {    
						    $posted[$key] = $value; 
							
						  }
						}
						
						$formError = 0;
						
						if(empty($posted['txnid'])) {
						  // Generate random transaction id
						  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
						} else {
						  $txnid = $posted['txnid'];
						}
						$hash = '';
						// Hash Sequence
						$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
						if(empty($posted['hash']) && sizeof($posted) > 0) {
						  if(
						          empty($posted['key'])
						          || empty($posted['txnid'])
						          || empty($posted['amount'])
						          || empty($posted['firstname'])
						          || empty($posted['email'])
						          || empty($posted['phone'])
						          || empty($posted['productinfo'])
						          || empty($posted['surl'])
						          || empty($posted['furl'])
								  || empty($posted['service_provider'])
						  ) {
						    $formError = 1;
						  } else {
						    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
							$hashVarsSeq = explode('|', $hashSequence);
						    $hash_string = '';	
							foreach($hashVarsSeq as $hash_var) {
						      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
						      $hash_string .= '|';
						    }
						
						    $hash_string .= $SALT;
						
						
						    $hash = strtolower(hash('sha512', $hash_string));
						    $action = $PAYU_BASE_URL . '/_payment';
						  }
						} elseif(!empty($posted['hash'])) {
						  $hash = $posted['hash'];
						  $action = $PAYU_BASE_URL . '/_payment';
						}
						?>
						
						  <script>
						    var hash = '<?php echo $hash ?>';
						    function submitPayuForm() {
						      if(hash == '') {
						        return;
						      }
						      var payuForm = document.forms.payuForm;
						      payuForm.submit();
						    }
						  </script>
						  
						    <h2>Payment Gateway Form</h2>
						    <br/>
						    <?php if($formError) { ?>
							
						      <span style="color:red">Please fill all mandatory fields.</span>
						      <br/>
						      <br/>
						    <?php } ?>
						    <form action="<?php echo $action; ?>" method="post" name="payuForm">
						      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
						      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
						      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
						      <table>
						        <tr>
						          <td><b>Mandatory Parameters</b></td>
						        </tr>
						        <tr>
						          <td>Amount: </td>
						          <td><input name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" /></td>
						          <td>First Name: </td>
						          <td><input name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" /></td>
						        </tr>
						        <tr>
						          <td>Email: </td>
						          <td><input name="email" id="email" value="<?php echo (empty($posted['email'])) ? $_SESSION['username'] : $posted['email']; ?>" /></td>
						          <td>Phone: </td>
						          <td><input name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" /></td>
						        </tr>
						        <tr>
						          <td>Product Info: </td>
						          <td colspan="3"><textarea name="productinfo"><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea></td>
						        </tr>
						        <tr>
						          
						          <td colspan="3"><input type="hidden" name="surl" value="<?php echo (empty($posted['surl'])) ? 'http://whitepanda.in/php/successs.php' : $posted['surl'] ?>" size="64" /></td>
						        </tr>
						        <tr>
						          
						          <td colspan="3"><input type="hidden" name="furl" value="<?php echo (empty($posted['furl'])) ? 'http://whitepanda.in/php/failure.php' : $posted['furl'] ?>" size="64" /></td>
						        </tr>
						
						        <tr>
						          <td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
						        </tr>
						
						       
						        <tr>
						          <?php if(!$hash) { ?>
						            <td colspan="4"><input type="submit" value="Submit" /></td>
						          <?php } ?>
						        </tr>
						      </table>
						    </form>
						

                    </div>
                    
                </div>
                
                <div class="received_content">
                    <h1>No Content Received</h1>
                    <img src="../images/receivedContent.png"/>
                </div>
                
                
            </div>


        </div>
            
        <div class="foot">
            <br/>
            <a href = "../privacy.html">Privacy</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href = "../termsUse.html">Terms of Use</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href = "../writersAgreement.html">Writers' Privacy Agreement</a>
        </div>
    </body>
</html>
