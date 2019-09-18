<?php
/* Template Name: Contact */
get_header();
if ( have_posts() ) :
while ( have_posts() ) : the_post(); ?>

    <article id="main-body" class="container">
        <div class="row">
            <div class="col-12">				
				<div class="row">
            		<div class="large-10 large-offset-1 columns">
            			<h1><?php echo get_the_title() ?></h1>
            			
            			<?php echo the_content() ?>

            			<!-- Note :
   - You can modify the font style and form style to suit your website. 
   - Code lines with comments ???Do not remove this code???  are required for the form to work properly, make sure that you do not remove these lines of code. 
   - The Mandatory check script can modified as to suit your business needs. 
   - It is important that you test the modified form before going live.-->
<div id='crmWebToEntityForm' style='width:600px;margin:auto;'>
   <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
   <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads1647323000000085073 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory()' accept-charset='UTF-8'>

	 <!-- Do not remove this code. -->
	<input type='text' style='display:none;' name='xnQsjsdp' value='0ac55b669f765b244fa370028f88a187813cc08e0d93551e61e156267a979a30'/>
	<input type='hidden' name='zc_gad' id='zc_gad' value=''/>
	<input type='text' style='display:none;' name='xmIwtLD' value='c8d9cd4862172f552bd05490f328524585d4091bd7e685f2509e7791f488ad27'/>
	<input type='text' style='display:none;'  name='actionType' value='TGVhZHM='/>

	<input type='text' style='display:none;' name='returnURL' value='http&#x3a;&#x2f;&#x2f;www.goldstarit.com&#x2f;' /> 
	 <!-- Do not remove this code. -->
	<input type='text' style='display:none;' id='ldeskuid' name='ldeskuid'></input>
	<input type='text' style='display:none;' id='LDTuvid' name='LDTuvid'></input>
	 <!-- Do not remove this code. -->
	<style>
		tr , td { 
			padding:6px;
			border-spacing:0px;
			border-width:0px;
			}
	</style>
	
	<ul>
		<li class="row">
			<div class="large-6 small-12 columns">
				<label for="first_name">First Name</label>
				<input id="first_name" type='text'  maxlength='80' name='First Name' />	
			</div>
			<div class="large-6 small-12 columns">
				<label for="last_name">Last Name</label>
				<input for="last_name" type='text'  maxlength='80' name='Last Name' />	
			</div>
		</li>
		<li class="row">
			<div class="large-12 small-12 columns">
				<label for="company">Company</label>
				<input id="company" type='text'  maxlength='100' name='Company' />
			</div>
		</li>
		<li class="row">
			<div class="large-12 small-12 columns">
				<label for="how">How can we help?</label>
				<textarea id="how" name='Description' maxlength='32000'>&nbsp;</textarea>
			</div>
		</li>
		<li class="row" style="display:none">
			<div class="large-12 small-12 columns">
				<label>Lead source</label>
				<select name='Lead Source'>
					<option value='-None-'>-None-</option>
					<option value='4N'>4N</option>
					<option value='LinkedIn'>LinkedIn</option>
					<option value='Action&#x20;Coach'>Action Coach</option>
					<option value='BNI'>BNI</option>
					<option value='Chat'>Chat</option>
					<option value='Cold&#x20;Call'>Cold Call</option>
					<option value='Conference'>Conference</option>
					<option value='Facebook'>Facebook</option>
					<option value='Friend'>Friend</option>
					<option value='FSB'>FSB</option>
					<option value='Google&#x20;AdWords'>Google AdWords</option>
					<option value='Google&#x2b;'>Google&#x2b;</option>
					<option value='Hastings&#x20;Voice'>Hastings Voice</option>
					<option value='Other&#x20;networking'>Other networking</option>
					<option value='PA&#x20;Lead&#x20;Generation'>PA Lead Generation</option>
					<option value='Partner'>Partner</option>
					<option value='Research'>Research</option>
					<option value='Twitter'>Twitter</option>
					<option value='Job&#x20;Management&#x20;Marketing'>Job Management Marketing</option>
				<option selected value='Website'>Website</option>
					<option value='ServiceM8'>ServiceM8</option>
				</select>
			</div>
		</li>
		<li class="row">
			<div class="large-12 small-12 columns">
				<input type='submit' value='Submit' />
			</div>
		</li>
	</ul>






	<!-- <table style='width:600px;background-color:white;color:black'>

	<tr><td colspan='2' style='text-align:left;color:black;font-family:Tahoma;font-size:14px;'><strong>Website Contact Form</strong></td></tr>

	<tr><td  style='nowrap:nowrap;text-align:left;font-size:12px;font-family:Tahoma;width:200px;'>First Name<span style='color:red;'>*</span></td><td style='width:250px;' ><input type='text' style='width:250px;'  maxlength='40' name='First Name' /></td></tr>

	<tr><td  style='nowrap:nowrap;text-align:left;font-size:12px;font-family:Tahoma;width:200px;'>Last Name<span style='color:red;'>*</span></td><td style='width:250px;' ><input type='text' style='width:250px;'  maxlength='80' name='Last Name' /></td></tr>

	<tr><td  style='nowrap:nowrap;text-align:left;font-size:12px;font-family:Tahoma;width:200px;'>Email<span style='color:red;'>*</span></td><td style='width:250px;' ><input type='text' style='width:250px;'  maxlength='100' name='Email' /></td></tr>

	<tr><td  style='nowrap:nowrap;text-align:left;font-size:12px;font-family:Tahoma;width:200px;'>Company</td><td style='width:250px;' ><input type='text' style='width:250px;'  maxlength='100' name='Company' /></td></tr>

	<tr><td  style='nowrap:nowrap;text-align:left;font-size:12px;font-family:Tahoma;width:200px;'>How can we help&#x3f;<span style='color:red;'>*</span> </td><td> <textarea name='Description' maxlength='32000' style='width:250px;'>&nbsp;</textarea></td></tr>

	<tr style='display:none;' ><td style='nowrap:nowrap;text-align:left;font-size:12px;font-family:Tahoma;width:50%'>Lead Source</td><td style='width:250px;'>
		<select style='width:250px;' name='Lead Source'>
			<option value='-None-'>-None-</option>
			<option value='4N'>4N</option>
			<option value='LinkedIn'>LinkedIn</option>
			<option value='Action&#x20;Coach'>Action Coach</option>
			<option value='BNI'>BNI</option>
			<option value='Chat'>Chat</option>
			<option value='Cold&#x20;Call'>Cold Call</option>
			<option value='Conference'>Conference</option>
			<option value='Facebook'>Facebook</option>
			<option value='Friend'>Friend</option>
			<option value='FSB'>FSB</option>
			<option value='Google&#x20;AdWords'>Google AdWords</option>
			<option value='Google&#x2b;'>Google&#x2b;</option>
			<option value='Hastings&#x20;Voice'>Hastings Voice</option>
			<option value='Other&#x20;networking'>Other networking</option>
			<option value='PA&#x20;Lead&#x20;Generation'>PA Lead Generation</option>
			<option value='Partner'>Partner</option>
			<option value='Research'>Research</option>
			<option value='Twitter'>Twitter</option>
			<option value='Job&#x20;Management&#x20;Marketing'>Job Management Marketing</option>
		<option selected value='Website'>Website</option>
			<option value='ServiceM8'>ServiceM8</option>
		</select></td></tr>

	<tr><td colspan='2' style='text-align:center; padding-top:15px;'>
		<input style='font-size:12px;color:#131307'  type='submit' value='Submit' />
		<input type='reset' style='font-size:12px;color:#131307' value='Reset' />
	    </td>
	</tr>
   </table> -->
	<script>
 	  var mndFileds=new Array('Email','First Name','Last Name','Description');
 	  var fldLangVal=new Array('Email','First Name','Last Name','How can we help?');
		var name='';
		var email='';

 	  function checkMandatory() {
		for(i=0;i<mndFileds.length;i++) {
		  var fieldObj=document.forms['WebToLeads1647323000000085073'][mndFileds[i]];
		  if(fieldObj) {
			if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length==0) {
			 if(fieldObj.type =='file')
				{ 
				 alert('Please select a file to upload.'); 
				 fieldObj.focus(); 
				 return false;
				} 
			alert(fldLangVal[i] +' cannot be empty'); 
   	   	  	  fieldObj.focus();
   	   	  	  return false;
			}  else if(fieldObj.nodeName=='SELECT') {
  	   	   	 if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {
				alert(fldLangVal[i] +' cannot be none'); 
				fieldObj.focus();
				return false;
			   }
			} else if(fieldObj.type =='checkbox'){
 	 	 	 if(fieldObj.checked == false){
				alert('Please accept  '+fldLangVal[i]);
				fieldObj.focus();
				return false;
			   } 
			 } 
			 try {
			     if(fieldObj.name == 'Last Name') {
				name = fieldObj.value;
 	 	 	    }
			} catch (e) {}
		    }
		}
		trackVisitor();
	}
</script><script type='text/javascript' id='VisitorTracking'>var $zoho= $zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode:'485803d2765346e9de222c913c6f588f53652437108c9e22183b43a3a4fe7557', values:{},ready:function(){$zoho.salesiq.floatbutton.visible('hide');}};var d=document;s=d.createElement('script');s.type='text/javascript';s.id='zsiqscript';s.defer=true;s.src='https://salesiq.zoho.com/widget';t=d.getElementsByTagName('script')[0];t.parentNode.insertBefore(s,t);function trackVisitor(){try{if($zoho){var LDTuvidObj = document.forms['WebToLeads1647323000000085073']['LDTuvid'];if(LDTuvidObj){LDTuvidObj.value = $zoho.salesiq.visitor.uniqueid();}var firstnameObj = document.forms['WebToLeads1647323000000085073']['First Name'];if(firstnameObj){name = firstnameObj.value +' '+name;}$zoho.salesiq.visitor.name(name);var emailObj = document.forms['WebToLeads1647323000000085073']['Email'];if(emailObj){email = emailObj.value;$zoho.salesiq.visitor.email(email);}}} catch(e){}}</script>
	<input type='hidden' name='eo' value='14f4ec16431e0686150daa43f3210513'/> <input type='hidden' name='te' value='true'/><img id='tr_img' src='https://crm.zohopublic.com/crm/WebFormAnalyticsServlet?rid=c8d9cd4862172f552bd05490f328524585d4091bd7e685f2509e7791f488ad27gid0ac55b669f765b244fa370028f88a187813cc08e0d93551e61e156267a979a30gida378f81585080d3b6fb1acbec6638b71gid885e3c1045bd9bdcc91bdf30f82b5696gid14f4ec16431e0686150daa43f3210513' style='display: none;' /> <script>var rs=false; function sf(ev){var te = ev.target ? ev.target : ev.srcElement; var nd = te.nodeName ? te.nodeName.toLowerCase() : ''; if (!rs && ((nd == 'input' && te.type != 'file' ) || (nd == 'input' && te.type=='file' && ev.type=='click') || nd == 'select' || nd == 'textarea' || nd == 'div') ) {document.getElementById('tr_img').setAttribute('src', 'https://crm.zohopublic.com/crm/WebFormAnalyticsServlet?rid=c8d9cd4862172f552bd05490f328524585d4091bd7e685f2509e7791f488ad27gid0ac55b669f765b244fa370028f88a187813cc08e0d93551e61e156267a979a30gid364f49863aa1c6f080988c8e111a90b8gid885e3c1045bd9bdcc91bdf30f82b5696gid14f4ec16431e0686150daa43f3210513');rs=true} }if ( document.addEventListener ){document.addEventListener('click', sf);document.addEventListener('change', sf);}else{document.attachEvent('onclick', sf);document.attachEvent('onchange', sf);}</script></form>
</div>	
            		</div>
            	</div>
                
                <?php
                    if(get_field('related_page_links')):

                    	echo '<div class="row">
            					<div class="large-12 columns">';
                        
	                                // Repeater List
	                                $repeater = get_field('related_page_links'); 
	                                $x = 0;   
	                                foreach($repeater as $item) {
	                                    if( $x==0 ) {
	                                        echo '<div class="row related_page_links">
	                                                <a href="'.$item['page'].'" class="large-6 small-6 columns">';
	                                    } else {
	                                        echo '<a href="'.$item['page'].'" class="large-6  small-6 columns">';
	                                    }
	                                    
	                                        echo '<div class="content-wrapper">
	                                                <img src="'.$item['bg_image'].'" />
	                                                <h3>'.$item['title_if_different_from_page_title'].'</h3>';
	                                            echo '<div>'.$item['excerpt'].'</div>
	                                                <div class="button">Read more</button>
	                                            </div>';
	                                    
	                                    if( $x==1 ) {
	                                        echo '</div></a></div>';
	                                        $x = 0;
	                                    } else {
	                                        echo '</div></a>';
	                                        $x++;
	                                    }
	                                    
	                                }

		                    echo '</div>
		                    </div>';
                         
                     endif;
                ?>
                    
            </div>
        </div>
    </article> 


<?php
endwhile;
endif;
get_footer();
?>