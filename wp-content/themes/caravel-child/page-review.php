<?php
/**
 * Template Name: Page Review
 *
 * @package WordPress
 * @subpackage Twenty_Twentysixteen
 * @since Twenty Twentysixteen 1.0
 */

get_header(); 

global $post;
$post_slug=$post->post_name;

$bg_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );

if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<div class="section-banner section-banner-subpage">
	<div class="bg-inline banner-bg banner-subpage" style="background-image: url('<?php echo $bg_img[0]; ?>');"></div>
	<div class="banner-caption subpage-banner-caption">
		<h1><?php the_title(); ?></h1>
	</div>
</div>
<div class="section-content">
	<div class="container">
		<div class="tab-content">
			<div role="tabpanel">
				<div class="section-title text-center">
					<h3>personal information</h3>
				</div>
				<div class="gap-50"></div>
				<div class="form-personal-info">
					<div class="form-personal-holder form--personal-holder afterclear">
						<div class="col-md-8 p-0">
							<div class="form-group">
							    <label>Full Name <div>*</div></label>
							    <input type="text" class="form-control" value="Galileo Galilei">
							    <p>Last Name, First Name & Middle Name</p>
						  	</div>
						</div>
						<div class="col-md-4 p-0">
							<div class="form-group">
							    <label>Upload Latest Photo <div>*</div></label>
							    <div class="button-holder">
								    <div class="inline-grp">
										<span id="file-name">No file selected</span>
								    </div>
								    <div class="inline-grp fl-right">
								    	<button type="button" id="application-choose-file">Choose File</button>
								    	<input type="file" class="form-control" id="input-file" style="display: none">
								    </div>
							    </div>
							    
							    <p >Note: .Png or .jpg only</p>
						  	</div>
						</div>
					</div>
					<div class="form-personal-holder afterclear">
						<div class="col-md-12 p-0">
							<div class="form-group">
							    <label>Address <div>*</div></label>
							    <input type="text" class="form-control" value="B18 L27 P4 Foxglove St. Primarosa Subd. Buhay na Tubi">
						  	</div>
						</div>
						
					</div>
					<div class="form-personal-holder afterclear">
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Age <div>*</div></label>
							    <input type="text" class="form-control" value="43 years old">
						  	</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Gender <div>*</div></label>
							    <select class="form-control">
								  <option value="select">-Select-</option>
								  <option value="male" selected="selected">Male</option>
								  <option value="female">Female</option>
								</select>
						  	</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Date of Birth <div>*</div></label>
							    <input type="date" class="form-control" value="1970-01-31">
						  	</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Place of Birth <div>*</div></label>
							    <input type="text" class="form-control" value="Manila">
						  	</div>
						</div>
					</div>
					<div class="form-personal-holder afterclear">
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Nationality <div>*</div></label>
							    <input type="text" class="form-control" value="Filipino">
						  	</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Civil Status <div>*</div></label>
							    <select class="form-control">
								  <option value="select">-Select-</option>
								  <option value="married" selected="selected">Married</option>
								  <option value="widowed">Widowed</option>
								  <option value="separate">Separated</option>
								  <option value="divorced">Divorced</option>
								  <option value="single">Single</option>
								</select>
						  	</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Religion <div>*</div></label>
							    <input type="text" class="form-control" value="Christian">
						  	</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Contact Number <div>*</div></label>
							    <input type="text" class="form-control" value="0947-9950345">
						  	</div>
						</div>
					</div>
					<div class="form-personal-holder afterclear">
						<div class="col-md-2 p-0">
							<div class="form-group">
							    <label>Blood Type <div>*</div></label>
							    <input type="text" class="form-control" value="A">
						  	</div>
						</div>
						<div class="col-md-2 p-0">
							<div class="form-group">
							    <label>Height (cm) <div>*</div></label>
							    <input type="text" class="form-control" value="165">
						  	</div>
						</div>
						<div class="col-md-2 p-0">
							<div class="form-group">
							    <label>Weight (kg) <div>*</div></label>
							    <input type="text" class="form-control" value="71">
						  	</div>
						</div>
						<div class="col-md-2 p-0">
							<div class="form-group">
							    <label>Waist (cm) <div>*</div></label>
							    <input type="text" class="form-control" value="42">
						  	</div>
						</div>
						<div class="col-md-2 p-0">
							<div class="form-group">
							    <label>Coat Size <div>*</div></label>
							    <input type="text" class="form-control" value="L">
						  	</div>
						</div>
						<div class="col-md-2 p-0">
							<div class="form-group">
							    <label>Shoe Size <div>*</div></label>
							    <input type="text" class="form-control" value="7">
						  	</div>
						</div>
					</div>
				</div>
				<div class="form-personal-info">
					<div class="form-personal-holder afterclear">
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>SSS <div>*</div></label>
							    <input type="text" class="form-control" value="3320541301">
						  	</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Philhealth <div>*</div></label>
							    <input type="text" class="form-control" value="190509534466">
						  	</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Tax ID Number <div>*</div></label>
							    <input type="text" class="form-control" value="191-322-409">
						  	</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Pag-ibig <div>*</div></label>
							    <input type="text" class="form-control" value="121107264400">
						  	</div>
						</div>
					</div>
				</div>
			</div>
			<div role="tabpanel">
				<div class="gap-50"></div>
				<div class="section-title text-center">
					<h3>Next of Kin</h3>
				</div>
				<div class="gap-30"></div>
				<div class="form-personal-info">
					<div class="form-personal-holder afterclear">
						<div class="col-md-8 p-0">
							<div class="form-group">
							    <label>Next of Kin (full name) <div>*</div></label>
							    <input type="text" class="form-control" value="Dolor D. Gallego">
							    <p>Last Name, First Name & Middle Name</p>
						  	</div>
						</div>
						<div class="col-md-4 p-0">
							<div class="form-group">
							    <label>Relation <div>*</div></label>
							    <input type="text" class="form-control" value="Wife">
							    <p class="text-white">relation</p>
						  	</div>
						</div>
					</div>
					<div class="form-personal-holder afterclear">
						<div class="col-md-8 p-0">
							<div class="form-group">
							    <label>Address <div>*</div></label>
							    <input type="text" class="form-control" value="B18 L27 P4 Foxglove st. Primarosa Subd. Buhay na tubig, Imus Cavite / 0947-9">
						  	</div>
						</div>
						<div class="col-md-4 p-0">
							<div class="form-group">
							    <label>Contact Number <div>*</div></label>
							    <input type="text" class="form-control" value="0947-9959466">
						  	</div>
						</div>
					</div>
				</div>
				<div class="section-title text-center">
					<div class="gap-50"></div>
					<h3>Dependents</h3>
				</div>
				<div class="gap-30"></div>
				<div class="form-personal-info">
					<div class="form-personal-holder afterclear">
						<div class="col-md-8 p-0">
							<div class="form-group">
							    <label>Dependent 1 (full name) <div>*</div></label>
							    <input type="text" class="form-control" value="Gallego, Dolor Dayao">
							    <p>Last Name, First Name & Middle Name</p>
						  	</div>
						</div>
						<div class="col-md-4 p-0">
							<div class="form-group">
							    <label>Date of Birth <div>*</div></label>
							    <input type="date" class="form-control" value="1994-04-29">
							    <p class="text-white">date-birth</p>
						  	</div>
						</div>
					</div>
					<div class="form-personal-holder afterclear">
						<div class="col-md-8 p-0">
							<div class="form-group">
							    <label>Dependent 2 (full name) <div>*</div></label>
							    <input type="text" class="form-control" value="Gallego, Danna Giselle Dayao">
							    <p>Last Name, First Name & Middle Name</p>
						  	</div>
						</div>
						<div class="col-md-4 p-0">
							<div class="form-group">
							    <label>Date of Birth <div>*</div></label>
							    <input type="date" class="form-control" value="1995-07-01">
							    <p class="text-white">date-birth</p>
						  	</div>
						</div>
					</div>
					<div class="form-personal-holder afterclear">
						<div class="col-md-8 p-0">
							<div class="form-group">
							    <label>Dependent 3 (full name) <div>*</div></label>
							    <input type="text" class="form-control" value="Gallego, Gerald Dayao">
							    <p>Last Name, First Name & Middle Name</p>
						  	</div>
						</div>
						<div class="col-md-4 p-0">
							<div class="form-group">
							    <label>Date of Birth <div>*</div></label>
							    <input type="date" class="form-control" value="1997-10-07">
							    <p class="text-white">date-birth</p>
						  	</div>
						</div>
					</div>
					<div class="form-personal-holder afterclear">
						<div class="col-md-8 p-0">
							<div class="form-group">
							    <label>Dependent 4 (full name) <div>*</div></label>
							    <input type="text" class="form-control" value="Gallego, Darlene Ysabella Dayao">
							    <p>Last Name, First Name & Middle Name</p>
						  	</div>
						</div>
						<div class="col-md-4 p-0">
							<div class="form-group">
							    <label>Date of Birth <div>*</div></label>
							    <input type="date" class="form-control" value="2000-08-22">
							    <p class="text-white">date-birth</p>
						  	</div>
						</div>
					</div>
				</div>
			</div>
			<div role="tabpanel">
				<div class="gap-50"></div>
				<div class="section-title text-center">
					<h3>Educational Background</h3>
				</div>
				<div class="gap-30"></div>
				<div class="form-personal-info">
					<div class="form-personal-holder afterclear">
						<div class="col-md-6 p-0">
							<div class="form-group">
							    <label>School <div>*</div></label>
							    <input type="text" class="form-control" value="PMI Colleges">
						  	</div>
						</div>
						<div class="col-md-6 p-0">
							<div class="form-group">
							    <label>Course <div>*</div></label>
							    <input type="text" class="form-control" value="Assoc. in Marine Engineer">
						  	</div>
						</div>
					</div>
					<div class="form-personal-holder afterclear">
						<div class="col-md-6 p-0">
							<div class="form-group">
							    <label>Year Graduated <div>*</div></label>
							    <input type="text" class="form-control" value="1994">
						  	</div>
						</div>
						<div class="col-md-6 p-0">
							<div class="form-group">
							    <label>English Proficiency <div>*</div></label>
							    <input type="text" class="form-control" value="Good">
						  	</div>
						</div>
					</div>
				</div>
				<div class="section-title text-center">
					<div class="gap-50"></div>
					<h3>Employment</h3>
				</div>
				<div class="gap-30"></div>
				<div class="form-personal-info">
					<div class="form-personal-holder afterclear">
						<div class="col-md-4 p-0">
							<div class="form-group">
							    <label>ID Number <div>*</div></label>
							    <input type="text" class="form-control" value="GGAL155918">
						  	</div>
						</div>
						<div class="col-md-4 p-0">
							<div class="form-group">
							    <label>Rank <div>*</div></label>
							    <input type="text" class="form-control" value="Chief Engineer">
						  	</div>
						</div>
						<div class="col-md-4 p-0">
							<div class="form-group">
							    <label>Vessel <div>*</div></label>
							    <input type="text" class="form-control" value="Chief Engineer">
						  	</div>
						</div>
					</div>
					<div class="form-personal-holder afterclear">
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Total Sea Service <div>*</div></label>
							    <input type="text" class="form-control" value="12Yrs. & 4Mos.">
						  	</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Seatime (Pres.Rank) <div>*</div></label>
							    <input type="text" class="form-control" value="2Yrs. & 11Mos.">
						  	</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Years with Company <div>*</div></label>
							    <input type="text" class="form-control" value="0Yr. & 0Mo.">
						  	</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Years with GLOCAL/Kambara <div>*</div></label>
							    <input type="text" class="form-control" value="0Yr. & 0Mo.">
						  	</div>
						</div>
					</div>
				</div>
			</div>
			<div role="tabpanel">
				<div class="gap-50"></div>
				<div class="section-title text-center">
					<h3>Documents, Licenses, & Certificates</h3>
				</div>
				<div class="gap-30"></div>
				<div class="form-personal-info">
					<div class="form-personal-holder afterclear">
						<div class="col-md-4 p-0">
							<div class="form-group">
							    <label>Passport Number <div>*</div></label>
							    <input type="text" class="form-control" value="EB9501367">
							    <p class="text-white">passport</p>
						  	</div>
						</div>
						<div class="col-md-4 p-0">
							<div class="form-group">
							    <label>Issued <div>*</div></label>
							    <input type="date" class="form-control" value="2013-11-05">
							    <p class="text-white">issued</p>
						  	</div>
						</div>
						<div class="col-md-4 p-0">
							<div class="form-group">
							    <label>Expiry <div>*</div></label>
							    <input type="date" class="form-control" value="2018-11-05">
							    <p class="text-white">expiry</p>
						  	</div>
						</div>
					</div>
				</div>
				<div class="form-personal-info">
					<div class="form-personal-holder afterclear">
						<div class="col-md-4 p-0">
							<div class="form-group">
							    <label>Sbook (PH) <div>*</div></label>
							    <input type="text" class="form-control" value="C0159802">
							    <p class="text-white">sbook</p>
						  	</div>
						</div>
						<div class="col-md-4 p-0">
							<div class="form-group">
							    <label>Issued <div>*</div></label>
							    <input type="date" class="form-control" value="2013-11-05">
							    <p class="text-white">issued</p>
						  	</div>
						</div>
						<div class="col-md-4 p-0">
							<div class="form-group">
							    <label>Expiry <div>*</div></label>
							    <input type="date" class="form-control" value="2018-11-05">
							    <p class="text-white">expiry</p>
						  	</div>
						</div>
					</div>
				</div>
				<div class="form-personal-info">
					<div class="form-personal-holder afterclear">
						<div class="col-md-8 p-0">
							<div class="form-group">
							    <label>SRC <div>*</div></label>
							    <input type="text" class="form-control" value="0154363-94">
							    <p class="text-white">src</p>
						  	</div>
						</div>
						<div class="col-md-4 p-0">
							<div class="form-group">
							    <label>Issued <div>*</div></label>
							    <input type="date" class="form-control" value="2009-11-09">
							    <p class="text-white">issued</p>
						  	</div>
						</div>
					</div>
				</div>
				<div class="form-personal-info">
					<div class="form-personal-holder afterclear">
						<div class="col-md-8 p-0">
							<div class="form-group">
							    <label>License (PH) <div>*</div></label>
							    <input type="text" class="form-control" value="E1-0026737">
							    <p class="text-white">license</p>
						  	</div>
						</div>
						<div class="col-md-4 p-0">
							<div class="form-group">
							    <label>Issued <div>*</div></label>
							    <input type="date" class="form-control" value="2009-09-30">
							    <p class="text-white">issued</p>
						  	</div>
						</div>
					</div>
				</div>
				<div class="form-personal-info">
					<div class="form-personal-holder afterclear">
						<div class="col-md-8 p-0">
							<div class="form-group">
							    <label>US Visa <div>*</div></label>
							    <input type="text" class="form-control" value="20130793360017">
							    <p class="text-white">us visa</p>
						  	</div>
						</div>
						<div class="col-md-4 p-0">
							<div class="form-group">
							    <label>Expiry <div>*</div></label>
							    <input type="date" class="form-control" value="2018-03-09">
							    <p class="text-white">expiry</p>
						  	</div>
						</div>
					</div>
				</div>
				<div class="form-personal-info">
					<div class="gap-30"></div>
					<div class="form-personal-holder afterclear">
						<div class="gray-div"></div>
						<div class="col-md-8 p-0">
							<div class="form-group">
							    <label>Document Name <div>*</div></label>
							    <input type="text" class="form-control" value="Training in Advance Firefighting (COP)">
							    <p class="text-white">docname</p>
						  	</div>
						</div>
						<div class="col-md-4 p-0">
							<div class="form-group">
							    <label>Document Number <div>*</div></label>
							    <input type="text" class="form-control" value="17-6817">
							    <p class="text-white">docnumber</p>
						  	</div>
						</div>
					</div>
					<div class="form-personal-holder afterclear">
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Req'd 4 <div>*</div></label>
							    <input type="text" class="form-control" value="Officer">
							    <p class="text-white">reqd</p>
						  	</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Grade <div>*</div></label>
							    <input type="text" class="form-control">
							    <p class="text-white">grade</p>
						  	</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Issued <div>*</div></label>
							    <input type="date" class="form-control" value="2015-04-06">
							    <p class="text-white">issued</p>
						  	</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Expiry <div>*</div></label>
							    <input type="date" class="form-control" value="2020-04-06">
							    <p class="text-white">expiry</p>
						  	</div>
						</div>
					</div>
				</div>
				<div class="form-personal-info">
					<div class="gap-30"></div>
					<div class="form-personal-holder afterclear">
						<div class="gray-div"></div>
						<div class="col-md-8 p-0">
							<div class="form-group">
							    <label>Document Name <div>*</div></label>
							    <input type="text" class="form-control" value="Medical Firs Aid (COP)">
							    <p class="text-white">docname</p>
						  	</div>
						</div>
						<div class="col-md-4 p-0">
							<div class="form-group">
							    <label>Document Number <div>*</div></label>
							    <input type="text" class="form-control" value="18-169908">
							    <p class="text-white">docnumber</p>
						  	</div>
						</div>
					</div>
					<div class="form-personal-holder afterclear">
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Req'd 4 <div>*</div></label>
							    <input type="text" class="form-control" value="Officer">
							    <p class="text-white">reqd</p>
						  	</div>
						</div>	
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Grade <div>*</div></label>
							    <input type="text" class="form-control" value="C/E">
							    <p class="text-white">grade</p>
						  	</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Issued <div>*</div></label>
							    <input type="date" class="form-control" value="2015-03-09">
							    <p class="text-white">issued</p>
						  	</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Expiry <div>*</div></label>
							    <input type="date" class="form-control" value="2016-03-09">
							    <p class="text-white">expiry</p>
						  	</div>
						</div>
					</div>
				</div>
			</div>
			<div role="tabpanel">
				<div class="gap-50"></div>
				<div class="section-title text-center">
					<h3>Service History</h3>
				</div>
				<div class="gap-30"></div>
				<div class="form-personal-info">
					<div class="form-personal-holder afterclear">
						<div class="gray-div"></div>
						<div class="col-md-12 p-0">
							<div class="form-group">
							    <label>Company Name</label>
							    <input type="text" class="form-control" value="Maersk">
							    <p class="text-white">companyname</p>
						  	</div>
						</div>
					</div>
					<div class="form-personal-holder afterclear">
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Rank</label>
							    <input type="text" class="form-control" value="C/E">
							    <p class="text-white">rank</p>
						  	</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Embark</label>
							    <input type="date" class="form-control" value="2010-02-08">
							    <p class="text-white">embark</p>
						  	</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Disembark</label>
							    <input type="date" class="form-control" value="2010-05-01">
							    <p class="text-white">disembark</p>
						  	</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Vessel Name</label>
							    <input type="text" class="form-control" value="NedlloydAdrian">
							    <p class="text-white">vesselname</p>
						  	</div>
						</div>
					</div>
					<div class="form-personal-holder afterclear">
						<div class="col-md-2 p-0">
							<div class="form-group">
							    <label>Type</label>
							    <input type="text" class="form-control" value="CNTR">
							    <p class="text-white">type</p>
						  	</div>
						</div>
						<div class="col-md-2 p-0">
							<div class="form-group">
							    <label>GT</label>
							    <input type="text" class="form-control" value="26,833">
							    <p class="text-white">gt</p>
						  	</div>
						</div>
						<div class="col-md-2 p-0">
							<div class="form-group">
							    <label>Engine</label>
							    <input type="text" class="form-control" value="SLZR">
							    <p class="text-white">engine</p>
						  	</div>
						</div>
						<div class="col-md-2 p-0">
							<div class="form-group">
							    <label>HP</label>
							    <input type="text" class="form-control" value="21,560">
							    <p class="text-white">21,560</p>
						  	</div>
						</div>
						<div class="col-md-2 p-0">
							<div class="form-group">
							    <label>Reason</label>
							    <input type="text" class="form-control" value="Completed">
							    <p class="text-white">reason</p>
						  	</div>
						</div>
						<div class="col-md-2 p-0">
							<div class="form-group">
							    <label>FR</label>
							    <input type="text" class="form-control" value="N.A">
							    <p class="text-white">fr</p>
						  	</div>
						</div>
					</div>
				</div>
				<div class="form-personal-info">
					<div class="gap-30"></div>
					<div class="form-personal-holder afterclear">
						<div class="gray-div"></div>
						<div class="col-md-12 p-0">
							<div class="form-group">
							    <label>Company Name</label>
							    <input type="text" class="form-control" value="Maersk">
							    <p class="text-white">companyname</p>
						  	</div>
						</div>
					</div>
					<div class="form-personal-holder afterclear">
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Rank</label>
							    <input type="text" class="form-control" value="C/E">
							    <p class="text-white">rank</p>
						  	</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Embark</label>
							    <input type="date" class="form-control" value="2010-02-08">
							    <p class="text-white">embark</p>
						  	</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Disembark</label>
							    <input type="date" class="form-control" value="2010-05-01">
							    <p class="text-white">disembark</p>
						  	</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="form-group">
							    <label>Vessel Name</label>
							    <input type="text" class="form-control" value="NedlloydAdrian">
							    <p class="text-white">vesselname</p>
						  	</div>
						</div>
					</div>
					<div class="form-personal-holder afterclear">
						<div class="col-md-2 p-0">
							<div class="form-group">
							    <label>Type</label>
							    <input type="text" class="form-control" value="CNTR">
							    <p class="text-white">type</p>
						  	</div>
						</div>
						<div class="col-md-2 p-0">
							<div class="form-group">
							    <label>GT</label>
							    <input type="text" class="form-control" value="26,833">
							    <p class="text-white">gt</p>
						  	</div>
						</div>
						<div class="col-md-2 p-0">
							<div class="form-group">
							    <label>Engine</label>
							    <input type="text" class="form-control" value="SLZR">
							    <p class="text-white">engine</p>
						  	</div>
						</div>
						<div class="col-md-2 p-0">
							<div class="form-group">
							    <label>HP</label>
							    <input type="text" class="form-control" value="21,560">
							    <p class="text-white">21,560</p>
						  	</div>
						</div>
						<div class="col-md-2 p-0">
							<div class="form-group">
							    <label>Reason</label>
							    <input type="text" class="form-control" value="Completed">
							    <p class="text-white">reason</p>
						  	</div>
						</div>
						<div class="col-md-2 p-0">
							<div class="form-group">
							    <label>FR</label>
							    <input type="text" class="form-control" value="N.A">
							    <p class="text-white">fr</p>
						  	</div>
						</div>
					</div>
				</div>
				<div class="back-to-page">
					<div class="gap-30"></div>
					<div class="inline-grp">
						<div class="back-to-text">
							<a href=""><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Edit</a>
						</div>
					</div>
					<div class="inline-grp fl-right">
						<div class="back-to-text">
							<a href="" class="blck-grp">By clicking the submit button, you agree to the <span>terms & conditions</span>.</a>
							<div class="gap-30"></div>
							<a href="#" type="submit" class="btn btn-default btn-submit btn-red fl-right m-0">Submit</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
endwhile; else :
endif;
get_footer(); ?>