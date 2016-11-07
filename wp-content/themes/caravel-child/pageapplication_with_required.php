
<?php
/**
 * Template Name: Application Form
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
<?php if(!$_POST): ?>
	<div class="tab-panel-holder">
		<div class="container">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist" id="application-tabs">
				<li role="presentation" class="active">
					<div class="border-progress">
						<div class="progress-bar"></div>
					</div>
					<a href="#personal" aria-controls="personal" role="tab" data-toggle="tab">Personal Information</a>
				</li>
				<li role="presentation">
					<div class="border-progress">
						<div class="progress-bar"></div>
					</div>
					<a href="#nextkin" aria-controls="nextkin" role="tab" data-toggle="tab">Next of Kin & Dependents</a>
				</li>
				<li role="presentation">
					<div class="border-progress">
						<div class="progress-bar"></div>
					</div>
					<a href="#education" aria-controls="education" role="tab" data-toggle="tab">Education & Employment</a>
				</li>
				<li role="presentation">
					<div class="border-progress">
						<div class="progress-bar"></div>
					</div>
					<a href="#documents" aria-controls="documents" role="tab" data-toggle="tab">Documents/ Licenses/ Certificates</a>
				</li>
				<li role="presentation">
					<div class="border-progress">
						<div class="progress-bar"></div>
					</div>
					<a href="#service" aria-controls="service" role="tab" data-toggle="tab">Service History</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="section-content">
		<div class="container">
			<form  action="" method="post" enctype="multipart/form-data" id="application-form">
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="personal">
						<div class="section-title text-center">
							<h3>personal information</h3>
						</div>
						<div class="gap-30"></div>
						<div class="form-personal-info">
							<div class="form-personal-holder form--personal-holder afterclear">
								<div class="col-md-8 p-0">
									<div class="form-group">
									    <label>Full Name <div>*</div></label>
									    <input type="text" name="full-name" class="form-control"    placeholder="Galileo Galilei" required>
									    <p>Last Name, First Name & Middle Name</p>
									    <p class = "full_name_error_message error_messages label label-danger" style= "visibility: hidden; ">Full Name is required! </p>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Upload Latest Photo <div>*</div></label>
									    <div class="button-holder" class = "file-field">
										    <div class="inline-grp">
												<span id="file-name">No file selected</span>
										    </div>
										    <div class="inline-grp fl-right" >
										    	<button type="button" id="application-choose-file">Choose File</button>
										    	<input type="file" name="file-photo" class="form-control" id="input-file" style="display: none" required>
										    </div>
									    </div>
									    
									    <p >Note: .Png or .jpg only</p>
									    <p class = "file_photo_error_message error_messages label label-danger" style= "visibility: hidden; ">Files Photo is required! </p>


								  	</div>
								</div>
							</div>
							<div class="form-personal-holder afterclear">
								<div class="col-md-12 p-0">
									<div class="form-group">
									    <label>Address <div>*</div></label>
									    <input type="text" name="address" class="form-control" placeholder="B18 L27 P4 Foxglove St. Primarosa Subd. Buhay na Tubi" required>
								  	</div>
								  <p class = "address_error_message error_messages label label-danger" style= "visibility: hidden; ">Address is required! </p>

								</div>
								
							</div>
							<div class="form-personal-holder afterclear">
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Age <div>*</div></label>
									    <input type="text" name="age" class="form-control" required>
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Gender <div>*</div></label>
									    <select class="form-control" name="gender">
										  <option value="none">-Select-</option>
										  <option value="male">Male</option>
										  <option value="female">Female</option>
										</select>

									  <p class = "gender_error_message error_messages label label-danger" style= "visibility: hidden; ">Gender is required! </p>


								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Date of Birth <div>*</div></label>
									    <input type="date" name="date-birth" class="form-control" required>

									  <p class = "dob_error_message error_messages label label-danger" style= "visibility: hidden; ">Date of Birth is required! </p>

								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Place of Birth <div>*</div></label>
									    <input type="text" name="place-birth" class="form-control" required>

									  <p class = "place_birth_error_message error_messages label label-danger" style= "visibility: hidden; ">Place of Birth is required! </p>

								  	</div>
								</div>
							</div>
							<div class="form-personal-holder afterclear">
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Nationality <div>*</div></label>
									    <input type="text" name="nationality" class="form-control" required>
									
									  <p class = "nationality_error_message error_messages label label-danger" style= "visibility: hidden; ">Nationality
									  is required! </p>

								  	</div>	
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Civil Status <div>*</div></label>
									    <select class="form-control" name="civil-status">
										  <option value="none">-Select-</option>
										  <option value="married">Married</option>
										  <option value="widowed">Widowed</option>
										  <option value="separate">Separated</option>
										  <option value="divorced">Divorced</option>
										  <option value="single">Single</option>
										</select>

									  <p class = "civil_status_error_message error_messages label label-danger" style= "visibility: hidden; ">Civil Status is required! </p>

								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Religion <div>*</div></label>
									    <input type="text" name="religion" class="form-control" required>

									 	<p class = "religion_error_message error_messages label label-danger" style= "visibility: hidden; ">Religion is required! </p>
								  	
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Contact Number <div>*</div></label>
									    <input type="text" name="contact-number" class="form-control" required>
										
										<p class = "contact_num_error_message error_messages label label-danger" style= "visibility: hidden; ">Contact Number is required! </p>

								  	</div>
								</div>
							</div>
							<div class="form-personal-holder afterclear">
								<div class="col-md-2 p-0">
									<div class="form-group">
									    <label>Blood Type <div>*</div></label>
									    <input type="text" name="blood-type" class="form-control" required>

										<p class = "blood_type_error_message error_messages label label-danger" style= "visibility: hidden; ">Blood Type is required! </p>

								  	</div>
								</div>
								<div class="col-md-2 p-0">
									<div class="form-group">
									    <label>Height (cm) <div>*</div></label>
									    <input type="text" name="height" class="form-control" required>
										
										<p class = "height_error_message error_messages label label-danger" style= "visibility: hidden; ">Height is required! </p>
								  	</div>
								</div>
								<div class="col-md-2 p-0">
									<div class="form-group">
									    <label>Weight (kg) <div>*</div></label>
									    <input type="text" name="weight" class="form-control" required>
										
										<p class = "weight_error_message error_messages label label-danger" style= "visibility: hidden; ">Weight is required! </p>
								  	</div>
								</div>
								<div class="col-md-2 p-0">
									<div class="form-group">
									    <label>Waist (cm) <div>*</div></label>
									    <input type="text" name="waist" class="form-control" required>
										
										<p class = "waist_error_message error_messages label label-danger" style= "visibility: hidden; ">Waist is required! </p>
								  	</div>
								</div>
								<div class="col-md-2 p-0">
									<div class="form-group">
									    <label>Coat Size <div>*</div></label>
									    <input type="text" name="coat-size" class="form-control" required>
										
										<p class = "coat_size_error_message error_messages label label-danger" style= "visibility: hidden; ">Coat Size is 
										required! </p>
								  	</div>
								</div>
								<div class="col-md-2 p-0">
									<div class="form-group">
									    <label>Shoe Size <div>*</div></label>
									    <input type="text" name="shoe-size" class="form-control" required>
										
										<p class = "shoe_size_error_message error_messages label label-danger" style= "visibility: hidden; ">Shoe Size is required! </p>
								  	</div>
								</div>
							</div>
						</div>
						<div class="form-personal-info">
							<div class="form-personal-holder afterclear">
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>SSS <div>*</div></label>
									    <input type="text" name="sss" class="form-control" required>
										
										<p class = "sss_error_message error_messages label label-danger" style= "visibility: hidden; ">Height is required! 
										</p>
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Philhealth <div>*</div></label>
									    <input type="text" name="philhealth" class="form-control" required>
										
										<p class = "philhealth_error_message error_messages label label-danger" style= "visibility: hidden; ">Philhealth is required! </p>
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Tax ID Number <div>*</div></label>
									    <input type="text" name="tax-id" class="form-control" required>
										
										<p class = "tax_id_error_message error_messages label label-danger" style= "visibility: hidden; ">Text Id is required! </p>
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Pag-ibig <div>*</div></label>
									    <input type="text" name="pag-ibig" class="form-control" required>

										<p class = "pagibig_error_message error_messages label label-danger" style= "visibility: hidden; ">Pag- Ibig is required! </p>
								  	</div>
								</div>
							</div>
						</div>
						<div class="back-to-page">
							<div class="gap-30"></div>
							<div class="inline-grp">
								<div class="back-to-text">
									<a href="<?php echo site_url(); ?>/crew-applicants/"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back to Crew Applicants main page</a>

									 
								</div>
							</div>
							<div id="error-area">
								
							</div>
							<div class="inline-grp fl-right">
								<div class="back-to-text">
									<a href="" id="tab-1" class="btn btn-default btn-submit btn-red">Next <i class="fa fa-angle-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="nextkin">
						<div class="section-title text-center">
							<h3>Next of Kin</h3>
						</div>
						<div class="gap-30"></div>
						<div class="form-personal-info">
							<div class="form-personal-holder afterclear">
								<div class="col-md-8 p-0">
									<div class="form-group">
									    <label>Next of Kin (full name) <div>*</div></label>
									    <input type="text" name="next-kin" class="form-control" required>
									    <p>Last Name, First Name & Middle Name</p>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Relation <div>*</div></label>
									    <input type="text" name="relation" class="form-control" required>
									    <p class="text-white">relation</p>
								  	</div>
								</div>
							</div>
							<div class="form-personal-holder afterclear">
								<div class="col-md-8 p-0">
									<div class="form-group">
									    <label>Address <div>*</div></label>
									    <input type="text" name="kin-address" class="form-control" required>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Contact Number <div>*</div></label>
									    <input type="text" name="kin-number" class="form-control" required>
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
									    <label>Dependent 1 (full name) </label>
									    <input type="text" name="dependent-1" class="form-control" required>
									    <p>Last Name, First Name & Middle Name</p>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Date of Birth  </label>
									    <input type="date" name="dependent-birth-1" class="form-control" required>
									    <p class="text-white">date-birth</p>
								  	</div>
								</div>
							</div>
							<div class="form-personal-holder afterclear">
								<div class="col-md-8 p-0">
									<div class="form-group">
									    <label>Dependent 2 (full name) </label>
									    <input type="text" name="dependent-2" class="form-control" required>
									    <p>Last Name, First Name & Middle Name</p>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Date of Birth  </label>
									    <input type="date" name="dependent-birth-2" class="form-control" required>
									    <p class="text-white">date-birth</p>
								  	</div>
								</div>
							</div>
							<div class="form-personal-holder afterclear">
								<div class="col-md-8 p-0">
									<div class="form-group">
									    <label>Dependent 3 (full name)  </label>
									    <input type="text" name="dependent-3" class="form-control" required>
									    <p>Last Name, First Name & Middle Name</p>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Date of Birth  </label>
									    <input type="date" name="dependent-birth-3" class="form-control" required>
									    <p class="text-white">date-birth</p>
								  	</div>
								</div>
							</div>
							<div class="form-personal-holder afterclear">
								<div class="col-md-8 p-0">
									<div class="form-group">
									    <label>Dependent 4 (full name)  </label>
									    <input type="text" name="dependent-4" class="form-control" required>
									    <p>Last Name, First Name & Middle Name</p>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Date of Birth <div>*</div></label>
									    <input type="date" name="dependent-birth-4" class="form-control" required>
									    <p class="text-white">date-birth</p>
								  	</div>
								</div>
							</div>
						</div>
						<div class="back-to-page">
							<div class="gap-30"></div>
							<div class="inline-grp">
								<div class="back-to-text">
									<a href="" id="prev-tab-2"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Previous</a>
								</div>
							</div>
							<div class="inline-grp fl-right">
								<div class="back-to-text">
									<a href="" id="tab-2" class="btn btn-default btn-submit btn-red">Next <i class="fa fa-angle-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="education">
						<div class="section-title text-center">
							<h3>Educational Background</h3>
						</div>
						<div class="gap-30"></div>
						<div class="form-personal-info">
							<div class="form-personal-holder afterclear">
								<div class="col-md-6 p-0">
									<div class="form-group">
									    <label>School <div>*</div></label>
									    <input type="text" name="school" class="form-control" required>
								  	</div>
								</div>
								<div class="col-md-6 p-0">
									<div class="form-group">
									    <label>Course <div>*</div></label>
									    <input type="text" name="course" class="form-control" required>
								  	</div>
								</div>
							</div>
							<div class="form-personal-holder afterclear">
								<div class="col-md-6 p-0">
									<div class="form-group">
									    <label>Year Graduated <div>*</div></label>
									    <input type="text" name="yr-graduated" class="form-control" required>
								  	</div>
								</div>
								<div class="col-md-6 p-0">
									<div class="form-group">
									    <label>English Proficiency <div>*</div></label>
									    <input type="text" name="eng-prof" class="form-control" required>
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
									    <label>ID Number</label>
									    <input type="text" name="id-number" class="form-control" required>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Rank </label>
									    <input type="text" name="rank" class="form-control" required>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Vessel </label>
									    <input type="text" name="vessel" class="form-control" required>
								  	</div>
								</div>
							</div>
							<div class="form-personal-holder afterclear">
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Total Sea Service </label>
									    <input type="text" name="sea-service" class="form-control" required>
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Seatime (Pres.Rank)</label>
									    <input type="text" name="seatime" class="form-control" required>
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Years with Company </label>
									    <input type="text" name="yrs-company" class="form-control" required>
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Years with GLOCAL/Kambara </label>
									    <input type="text" name="yrs-glocal" class="form-control" required>
								  	</div>
								</div>
							</div>
						</div>
						<div class="back-to-page">
							<div class="gap-30"></div>
							<div class="inline-grp">
								<div class="back-to-text">
									<a href="" id="prev-tab-3"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Previous</a>
								</div>
							</div>
							<div class="inline-grp fl-right">
								<div class="back-to-text">
									<a href="#" id="tab-3" class="btn btn-default btn-submit btn-red">Next <i class="fa fa-angle-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="documents">
						<div class="section-title text-center">
							<h3>Documents, Licenses, & Certificates</h3>
						</div>
						<div class="gap-30"></div>
						<div class="form-personal-info">
							<div class="form-personal-holder afterclear">
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Passport Number <div>*</div></label>
									    <input type="text" name="passport-number" class="form-control" required>
									    <p class="text-white">passport</p>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Issued <div>*</div></label>
									    <input type="date" name="passport-issued" class="form-control" required>
									    <p class="text-white">issued</p>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Expiry <div>*</div></label>
									    <input type="date" name="passport-expiry" class="form-control" required>
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
									    <input type="text" name="sbook" class="form-control" required>
									    <p class="text-white">sbook</p>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Issued <div>*</div></label>
									    <input type="date" name="sbook-issued" class="form-control" required>
									    <p class="text-white">issued</p>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Expiry <div>*</div></label>
									    <input type="date" name="sbook-expiry" class="form-control" required>
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
									    <input type="text" name="src" class="form-control" required>
									    <p class="text-white">src</p>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Issued <div>*</div></label>
									    <input type="date" name="src-issued" class="form-control" required>
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
									    <input type="text" name="license" class="form-control" required>
									    <p class="text-white">license</p>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Issued <div>*</div></label>
									    <input type="date" name="license-issued" class="form-control" required>
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
									    <input type="text" name="us-visa" class="form-control" required>
									    <p class="text-white">us visa</p>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Expiry <div>*</div></label>
									    <input type="date" name="us-expiry" class="form-control" required>
									    <p class="text-white">expiry</p>
								  	</div>
								</div>
							</div>
						</div>
						<div class="form-personal-info">
							<div class="gap-30"></div>
							<div class="form-personal-holder afterclear">
								<div class="gray-div gray--div">
									<a href="javascript:void 0;" class="remove-certificates"><i class="fa fa-minus-circle" aria-hidden="true"></i> Remove</a>
								</div>
								<div class="col-md-8 p-0">
									<div class="form-group">
									    <label>Document Name <div>*</div></label>
									    <input type="text" name="docs-name[]" class="form-control" placeholder="Training in Advance Firefighting (COP)" value="Training in required Advance Firefighting (COP)">
									    <p class="text-white">docname</p>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Document Number <div>*</div></label>
									    <input type="text" name="docs-number[]" class="form-control" placeholder="17-6817" value="17-6817" required>
									    <p class="text-white">docnumber</p>
								  	</div>
								</div>
							</div>
							<div class="form-personal-holder afterclear">
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Req'd 4 <div>*</div></label>
									    <input type="text" name="docs-reqd[]" class="form-control" placeholder="Officer" value="Officer" required>
									    <p class="text-white">reqd</p>
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Grade <div>*</div></label>
									    <input type="text" name="docs-grade[]" class="form-control" required>
									    <p class="text-white">grade</p>
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Issued <div>*</div></label>
									    <input type="date" name="docs-issued[]" class="form-control" required>
									    <p class="text-white">issued</p>
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Expiry <div>*</div></label>
									    <input type="date" name="docs-expiry[]" class="form-control" required>
									    <p class="text-white">expiry</p>
								  	</div>
								</div>
							</div>
						</div>	
						<div class="add-docs">
							<div class="gap-20"></div>
							<a href="javascript:void 0;" class="certificates"><i class="fa fa-plus-circle" aria-hidden="true"></i> Adds document/license/certificate</a>
						</div>
						<div class="back-to-page">
							<div class="gap-30"></div>
							<div class="inline-grp">
								<div class="back-to-text">
									<a href="" id="prev-tab-4"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Previous</a>
								</div>
							</div>
							<div class="inline-grp fl-right">
								<div class="back-to-text">
									<a href="#" id="tab-4" class="btn btn-default btn-submit btn-red" data-trigger="next">Next <i class="fa fa-angle-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="service">
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
									    <input type="text" name="history-name[]" class="form-control" value="Maersk" required>
									    <p class="text-white">companyname</p>
								  	</div>
								</div>
							</div>
							<div class="form-personal-holder afterclear">
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Rank</label>
									    <input type="text" name="history-rank[]" class="form-control" value="C/E" required>
									    <p class="text-white">rank</p>
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Embark</label>
									    <input type="date" name="history-embark[]" class="form-control" value="2010-02-08" required>
									    <p class="text-white">embark</p>
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Disembark</label>
									    <input type="date" name="history-disembark[]" class="form-control" value="2010-05-01" required>
									    <p class="text-white">disembark</p>
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Vessel Name</label>
									    <input type="text" name="history-vessel[]" class="form-control" value="NedlloydAdrian" required>
									    <p class="text-white">vesselname</p>
								  	</div>
								</div>
							</div>
							<div class="form-personal-holder afterclear">
								<div class="col-md-2 p-0">
									<div class="form-group">
									    <label>Type</label>
									    <input type="text" name="history-type[]" class="form-control" value="CNTR" required>
									    <p class="text-white">type</p>
								  	</div>
								</div>
								<div class="col-md-2 p-0">
									<div class="form-group">
									    <label>GT</label>
									    <input type="text" name="history-gt[]" class="form-control" value="26,833" required>
									    <p class="text-white">gt</p>
								  	</div>
								</div>
								<div class="col-md-2 p-0">
									<div class="form-group">
									    <label>Engine</label>
									    <input type="text" name="history-engine[]" class="form-control" value="SLZR" required>
									    <p class="text-white">engine</p>
								  	</div>
								</div>
								<div class="col-md-2 p-0">
									<div class="form-group">
									    <label>HP</label>
									    <input type="text" name="history-hp[]" class="form-control" value="21,560" required>
									    <p class="text-white">21,560</p>
								  	</div>
								</div>
								<div class="col-md-2 p-0">
									<div class="form-group">
									    <label>Reason</label>
									    <input type="text" name="history-reason[]" class="form-control" value="Completed" required>
									    <p class="text-white">reason</p>
								  	</div>
								</div>
								<div class="col-md-2 p-0">
									<div class="form-group">
									    <label>FR</label>
									    <input type="text" name="history-fr" class="form-control" value="N.A" required>
									    <p class="text-white">fr</p>
								  	</div>
								</div>
							</div>
						</div>
						<div class="add-docs add-services">
							<div class="gap-20"></div>
							<a href="javascript:void 0" class="services"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add service history</a>
						</div>
						<div class="back-to-page">
							<div class="gap-30"></div>
							<div class="inline-grp">
								<div class="back-to-text">
									<a href="" id="prev-tab-5"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Previous</a>
								</div>
							</div>
							<div class="inline-grp fl-right">
								<div class="back-to-text">
									<input type="submit" class="btn btn-default btn-submit btn-red btn_review_form">Review <i class="fa fa-angle-right" aria-hidden="true"></i></input>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
			
		</div>
	</div>
<?php else: ?>
	<?php $form_data = $_POST; ?>
	<form action="<?php echo site_url(); ?>/thank-you/" method="post" enctype="multipart/form-data">
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
									    <input type="text" class="form-control" name="full-name" value="<?php echo $form_data["full-name"]; ?>" required>
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
										    	<input type="file" class="form-control" id="input-file" style="display: none" required>
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
									    <input type="text" name="address" class="form-control" value="<?php echo $form_data["address"]; ?>" required>
								  	</div>
								</div>
								
							</div>
							<div class="form-personal-holder afterclear">
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Age <div>*</div></label>
									    <input type="text" name="age" class="form-control" value="<?php echo $form_data["age"]; ?>" required>
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Gender <div>*</div></label>
									    <?php 
									    	if($form_data["gender"] == "male"){
									    		$female = '';
									    		$male   = 'selected="selected"';
									    	}else{
									    		$female = 'selected="selected"';
									    		$male   = '';
									    	}
									    ?>
									    <select name="gender" class="form-control">
										  <option value="none">Select-</option>
										  <option value="male" <?php echo $male; ?>>Male</option>
										  <option value="female" <?php echo $female; ?>>Female</option>
										</select>
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Date of Birth <div>*</div></label>
									    <input type="date" class="form-control" name="date-birth" value="<?php echo $form_data["date-birth"]; ?>" required>
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Place of Birth <div>*</div></label>
									    <input type="text" class="form-control" name="place-birth" value="<?php echo $form_data["place-birth"]; ?>" required>
								  	</div>
								</div>
							</div>
							<div class="form-personal-holder afterclear">
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Nationality <div>*</div></label>
									    <input type="text" class="form-control" name="nationality" value="<?php echo $form_data["nationality"]; ?>" required>
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Civil Status <div>*</div></label>
									    <select class="form-control" name="civil-status">
										  <?php echo '<option value="'.$form_data["civil-status"].'">'.$form_data["civil-status"].'</option>'; ?>
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
									    <input type="text" class="form-control" name="religion" value="<?php echo $form_data["religion"]; ?>" required>
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Contact Number <div>*</div></label>
									    <input type="text" name="contact-number" class="form-control" value=" <?php echo $form_data["contact-number"]; ?>" required>
								  	</div>
								</div>
							</div>
							<div class="form-personal-holder afterclear">
								<div class="col-md-2 p-0">
									<div class="form-group">
									    <label>Blood Type <div>*</div></label>
									    <input type="text" name="blood-type" class="form-control" value="<?php echo $form_data["blood-type"]; ?>" required>
								  	</div>
								</div>
								<div class="col-md-2 p-0">
									<div class="form-group">
									    <label>Height (cm) <div>*</div></label>
									    <input type="text" name="height" class="form-control" value="<?php echo $form_data["height"]; ?>" required>
								  	</div>
								</div>
								<div class="col-md-2 p-0">
									<div class="form-group">
									    <label>Weight (kg) <div>*</div></label>
									    <input type="text" name="weight" class="form-control" value="<?php echo $form_data["weight"]; ?>" required>
								  	</div>
								</div>
								<div class="col-md-2 p-0">
									<div class="form-group">
									    <label>Waist (cm) <div>*</div></label>
									    <input type="text" name="waist" class="form-control" value="<?php echo $form_data["waist"]; ?>" required>
								  	</div>
								</div>
								<div class="col-md-2 p-0">
									<div class="form-group">
									    <label>Coat Size <div>*</div></label>
									    <input type="text" name="coat-size" class="form-control" value="<?php echo $form_data["coat-size"]; ?>" required>
								  	</div>
								</div>
								<div class="col-md-2 p-0">
									<div class="form-group">
									    <label>Shoe Size <div>*</div></label>
									    <input type="text" name="shoe-size" class="form-control" value="<?php echo $form_data["shoe-size"]; ?>" required>
								  	</div>
								</div>
							</div>
						</div>
						<div class="form-personal-info">
							<div class="form-personal-holder afterclear">
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>SSS <div>*</div></label>
									    <input type="text" name="sss" class="form-control" value="<?php echo $form_data["sss"]; ?>" required>
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Philhealth <div>*</div></label>
									    <input type="text" name="philhealth" class="form-control" value="<?php echo $form_data["philhealth"]; ?>" required>
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Tax ID Number <div>*</div></label>
									    <input type="text" name="tax-id" class="form-control" value="<?php echo $form_data["tax-id"]; ?>" required>
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Pag-ibig <div>*</div></label>
									    <input type="text" name="pag-ibig" class="form-control" value="<?php echo $form_data["pag-ibig"]; ?>" required>
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
									    <input type="text" name="next-kin" class="form-control" value="<?php echo $form_data["next-kin"]; ?>" required>
									    <p>Last Name, First Name & Middle Name</p>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Relation <div>*</div></label>
									    <input type="text" name="relation" class="form-control" value="<?php echo $form_data["relation"]; ?>" required>
									    <p class="text-white">relation</p>
								  	</div>
								</div>
							</div>
							<div class="form-personal-holder afterclear">
								<div class="col-md-8 p-0">
									<div class="form-group">
									    <label>Address <div>*</div></label>
									    <input type="text" name="kin-address" class="form-control" value="<?php echo $form_data["kin-address"]; ?>" required>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Contact Number <div>*</div></label>
									    <input type="text" name="kin-number" class="form-control" value="<?php echo $form_data["kin-number"]; ?>" required>
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
									    <input type="text" name="dependent-1" class="form-control" value="<?php echo $form_data["dependent-1"]; ?>" required>
									    <p>Last Name, First Name & Middle Name</p>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Date of Birth <div>*</div></label>
									    <input type="date" name="dependent-birth-1" class="form-control" value="<?php echo $form_data["dependent-birth-1"]; ?>" required>
									    <p class="text-white">date-birth</p>
								  	</div>
								</div>
							</div>
							<div class="form-personal-holder afterclear">
								<div class="col-md-8 p-0">
									<div class="form-group">
									    <label>Dependent 2 (full name) <div>*</div></label>
									    <input type="text" name="dependent-2" class="form-control" value="<?php echo $form_data["dependent-2"]; ?>" required>
									    <p>Last Name, First Name & Middle Name</p>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Date of Birth <div>*</div></label>
									    <input type="date" name="dependent-birth-2" class="form-control" value="<?php echo $form_data["dependent-birth-2"]; ?>" required>
									    <p class="text-white">date-birth</p>
								  	</div>
								</div>
							</div>
							<div class="form-personal-holder afterclear">
								<div class="col-md-8 p-0">
									<div class="form-group">
									    <label>Dependent 3 (full name) <div>*</div></label>
									    <input type="text" name="dependent-3" class="form-control" value="<?php echo $form_data["dependent-3"]; ?>" required>
									    <p>Last Name, First Name & Middle Name</p>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Date of Birth <div>*</div></label>
									    <input type="date" name="dependent-birth-3" class="form-control" value="<?php echo $form_data["dependent-birth-3"]; ?>" required>
									    <p class="text-white">date-birth</p>
								  	</div>
								</div>
							</div>
							<div class="form-personal-holder afterclear">
								<div class="col-md-8 p-0">
									<div class="form-group">
									    <label>Dependent 4 (full name) </label>
									    <input type="text" name="dependent-4" class="form-control" value="<?php echo $form_data["dependent-4"]; ?>" required>
									    <p>Last Name, First Name & Middle Name</p>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Date of Birth </label>
									    <input type="date" name="dependent-birth-4" class="form-control" value="<?php echo $form_data["dependent-birth-4"]; ?>" required>
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
									    <input type="text" name="school" class="form-control" value="<?php echo $form_data["school"]; ?>" required>
								  	</div>
								</div>
								<div class="col-md-6 p-0">
									<div class="form-group">
									    <label>Course <div>*</div></label>
									    <input type="text" name="course" class="form-control" value="<?php echo $form_data["course"]; ?>" required>
								  	</div>
								</div>
							</div>
							<div class="form-personal-holder afterclear">
								<div class="col-md-6 p-0">
									<div class="form-group">
									    <label>Year Graduated <div>*</div></label>
									    <input type="text" name="yr-graduated" class="form-control" value="<?php echo $form_data["yr-graduated"]; ?>" required>
								  	</div>
								</div>
								<div class="col-md-6 p-0">
									<div class="form-group">
									    <label>English Proficiency <div>*</div></label>
									    <input type="text" name="eng-prof" class="form-control" value="<?php echo $form_data["eng-prof"]; ?>" required>
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
									    <input type="text" name="id-number" class="form-control" value="<?php echo $form_data["id-number"]; ?>" required>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Rank <div>*</div></label>
									    <input type="text" name="rank" class="form-control" value="<?php echo $form_data["rank"]; ?>" required>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Vessel <div>*</div></label>
									    <input type="text" name="vessel" class="form-control" value="<?php echo $form_data["vessel"]; ?>" required>
								  	</div>
								</div>
							</div>
							<div class="form-personal-holder afterclear">
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Total Sea Service <div>*</div></label>
									    <input type="text" name="sea-service" class="form-control" value="<?php echo $form_data["sea-service"]; ?>" required>
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Seatime (Pres.Rank) <div>*</div></label>
									    <input type="text" name="seatime" class="form-control" value="<?php echo $form_data["seatime"]; ?>" required>
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Years with Company <div>*</div></label>
									    <input type="text" name="yrs-company" class="form-control" value="<?php echo $form_data["yrs-company"]; ?>" required>
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Years with GLOCAL/Kambara <div>*</div></label>
									    <input type="text" name="yrs-glocal" class="form-control" value="<?php echo $form_data["yrs-glocal"]; ?>" required>
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
									    <input type="text" name="passport-number" class="form-control" value="<?php echo $form_data["passport-number"]; ?>" required>
									    <p class="text-white">passport</p>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Issued <div>*</div></label>
									    <input type="date" name="passport-issued" class="form-control" value="<?php echo $form_data["passport-issued"]; ?>" required>
									    <p class="text-white">issued</p>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Expiry <div>*</div></label>
									    <input type="date" name="passport-expiry" class="form-control" value="<?php echo $form_data["passport-expiry"]; ?>" required>
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
									    <input type="text" name="sbook" class="form-control" value="<?php echo $form_data["sbook"]; ?>" required>
									    <p class="text-white">sbook</p>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Issued <div>*</div></label>
									    <input type="date" name="sbook-issued" class="form-control" value="<?php echo $form_data["sbook-issued"]; ?>" required>
									    <p class="text-white">issued</p>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Expiry <div>*</div></label>
									    <input type="date" name="sbook-expiry" class="form-control" value="<?php echo $form_data["sbook-expiry"]; ?>" required>
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
									    <input type="text" name="src" class="form-control" value="<?php echo $form_data["src"]; ?>" required>
									    <p class="text-white">src</p>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Issued <div>*</div></label>
									    <input type="date" name="src-issued" class="form-control" value="<?php echo $form_data["src-issued"]; ?>" required>
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
									    <input type="text" name="license" class="form-control" value="<?php echo $form_data["license"]; ?>" required>
									    <p class="text-white">license</p>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Issued <div>*</div></label>
									    <input type="date" name="license-issued" class="form-control" value="<?php echo $form_data["license-issued"]; ?>" required>
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
									    <input type="text" name="us-visa" class="form-control" value="<?php echo $form_data["us-visa"]; ?>" required>
									    <p class="text-white">us visa</p>
								  	</div>
								</div>
								<div class="col-md-4 p-0">
									<div class="form-group">
									    <label>Expiry <div>*</div></label>
									    <input type="date" name="us-expiry" class="form-control" value="<?php echo $form_data["us-expiry"]; ?>" required>
									    <p class="text-white">expiry</p>
								  	</div>
								</div>
							</div>
						</div>

						<?php 
							$docs_name_count = count($form_data["docs-name"]);
							for ($i=0; $i < $docs_name_count; $i++) :
						?>
								<div class="form-personal-info">
									<div class="gap-30"></div>
									<div class="form-personal-holder afterclear">
										<div class="gray-div"></div>
										<div class="col-md-8 p-0">
											<div class="form-group">
											    <label>Document Name <div>*</div></label>
											    <input type="text" name="docs-name" class="form-control" value="<?php echo $form_data["docs-name"][$i]; ?>" required>
											    <p class="text-white">docname</p>
										  	</div>
										</div>
										<div class="col-md-4 p-0">
											<div class="form-group">
											    <label>Document Number <div>*</div></label>
											    <input type="text" name="docs-number" class="form-control" value="<?php echo $form_data["docs-number"][$i]; ?>" required>
											    <p class="text-white">docnumber</p>
										  	</div>
										</div>
									</div>
									<div class="form-personal-holder afterclear">
										<div class="col-md-3 p-0">
											<div class="form-group">
											    <label>Req'd 4 <div>*</div></label>
											    <input type="text" name="docs-reqd" class="form-control" value="<?php echo $form_data["docs-reqd"][$i]; ?>" required>
											    <p class="text-white">reqd</p>
										  	</div>
										</div>
										<div class="col-md-3 p-0">
											<div class="form-group">
											    <label>Grade <div>*</div></label>
											    <input type="text" name="docs-grade" class="form-control" value="<?php echo $form_data["docs-grade"][$i]; ?>" required>
											    <p class="text-white">grade</p>
										  	</div>
										</div>
										<div class="col-md-3 p-0">
											<div class="form-group">
											    <label>Issued <div>*</div></label>
											    <input type="date" name="docs-issued" class="form-control" value="<?php echo $form_data["docs-issued"][$i]; ?>" required>
											    <p class="text-white">issued</p>
										  	</div>
										</div>
										<div class="col-md-3 p-0">
											<div class="form-group">
											    <label>Expiry <div>*</div></label>
											    <input type="date" class="form-control" value="<?php echo $form_data["docs-expiry"][$i]; ?>" required>
											    <p class="text-white">expiry</p>
										  	</div>
										</div>
									</div>
								</div>
						<?php endfor; ?>	
					</div>
					<div role="tabpanel">
						<div class="gap-50"></div>
						<div class="section-title text-center">
							<h3>Service History</h3>
						</div>
						<div class="gap-30"></div>
						<?php 
							$history_name_count = count($form_data["history-name"]);
							for ($i=0; $i < $history_name_count; $i++) :
						?>
						<div class="form-personal-info">
							<div class="form-personal-holder afterclear">
								<div class="gray-div"></div>
								<div class="col-md-12 p-0">
									<div class="form-group">
									    <label>Company Name</label>
									    <input type="text" class="form-control" name="history-name" value="<?php echo $form_data["history-name"][$i]; ?>" required>
									    <p class="text-white">companyname</p>
								  	</div>
								</div>
							</div>
							<div class="form-personal-holder afterclear">
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Rank</label>
									    <input type="text" class="form-control" name="history-rank" value="<?php echo $form_data["history-rank"][$i]; ?>" required>
									    <p class="text-white">rank</p>
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Embark</label>
									    <input type="date" class="form-control" name="history-embark" value="<?php echo $form_data["history-embark"][$i]; ?>" required>
									    <p class="text-white">embark</p>
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Disembark</label>
									    <input type="date" class="form-control" name="history-disembark" value="<?php echo $form_data["history-disembark"][$i]; ?>" required>
									    <p class="text-white">disembark</p>
								  	</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="form-group">
									    <label>Vessel Name</label>
									    <input type="text" class="form-control" name="history-vessel" value="<?php echo $form_data["history-vessel"][$i]; ?>" required>
									    <p class="text-white">vesselname</p>
								  	</div>
								</div>
							</div>
							<div class="form-personal-holder afterclear">
								<div class="col-md-2 p-0">
									<div class="form-group">
									    <label>Type</label>
									    <input type="text" class="form-control" name="history-type" value="<?php echo $form_data["history-type"][$i]; ?>" required>
									    <p class="text-white">type</p>
								  	</div>
								</div>
								<div class="col-md-2 p-0">
									<div class="form-group">
									    <label>GT</label>
									    <input type="text" class="form-control" name="history-gt" value="<?php echo $form_data["history-gt"][$i]; ?>" required>
									    <p class="text-white">gt</p>
								  	</div>
								</div>
								<div class="col-md-2 p-0">
									<div class="form-group">
									    <label>Engine</label>
									    <input type="text" class="form-control" name="history-engine" value="<?php echo $form_data["history-engine"][$i]; ?>" required>
									    <p class="text-white">engine</p>
								  	</div>
								</div>
								<div class="col-md-2 p-0">
									<div class="form-group">
									    <label>HP</label>
									    <input type="text" class="form-control" name="history-hp" value="<?php echo $form_data["history-hp"][$i]; ?>" required>
									    <p class="text-white">21,560</p>
								  	</div>
								</div>
								<div class="col-md-2 p-0">
									<div class="form-group">
									    <label>Reason</label>
									    <input type="text" class="form-control" name="history-reason"  value="<?php echo $form_data["history-reason"][$i]; ?>" required>
									    <p class="text-white">reason</p>
								  	</div>
								</div>
								<div class="col-md-2 p-0">
									<div class="form-group">
									    <label>FR</label>
									    <input type="text" class="form-control"  name="history-fr" value="<?php echo $form_data["history-fr"][$i]; ?>" required>
									    <p class="text-white">fr</p>
								  	</div>
								</div>
							</div>
						</div>
						<?php endfor; ?>
						<div class="back-to-page">
							<div class="gap-30"></div>
							<div class="inline-grp">
								<div class="back-to-text">
									<a href=""><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Edit</a>
								</div>
							</div>
							<div class="inline-grp fl-right">
								<div class="back-to-text">
									<input type="checkbox" id="agreement" required>
									By clicking the submit button, you agree to the <span>terms & conditions</span>.
									<div class="gap-30"></div>
									<button href="#" type="submit" id="submit-form" class="btn btn-default btn-submit btn-red fl-right m-0" style="pointer-events:none">Submit</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
<?php endif; ?>
<?php
endwhile; else :
endif;
get_footer(); ?>

<script type="text/javascript">
	$(document).ready(function(){

		// Validation(){
		// $(document).on("submit", '#application-form',function(e) {
 		$.fn.serializeObject = function()
		{
		   var o = {};
		   var a = this.serializeArray();
		   $.each(a, function() {
		       if (o[this.name]) {
		           if (!o[this.name].push) {
		               o[this.name] = [o[this.name]];
		           }
		           o[this.name].push(this.value || '');
		       } else {
		           o[this.name] = this.value || '';
		       }
		   });
		   return o;
		};

 


		function personal_tab()
		{
    		var o = {};
			form = $('#application-form').serializeObject();
			var return_val = new Array();


			if(!$('input[name="file-photo"]').val()){
 
				return_val.push({  
	                status: 0,
	                message: 'file-photo',
	                class: 'file_photo_error_message',
	                name_field: 'file-photo'
    			});
			
			}

			if(!form["full-name"]){

				return_val.push ({  
	                status: 0,
	                message: 'full-name',
	                class: 'full_name_error_message',
	                name_field: 'full-name'
    			});

			}

 			if(!form["address"]){

    			return_val.push ({  
	                status: 0,
	                message: 'address',
	                class: 'address_error_message',
	                name_field: 'address'
    			});
			}
 			if(!form["age"]){

    			return_val.push ({  
	                status: 0,
	                message: 'age',
	                class: 'age_error_message',
	                name_field: 'age'

    			});

			}
 			if(!$('select[name="gender"]') || $('select[name="gender"]').val() == "none"){
				
				return_val.push ({  
	                status: 0,
	                message: 'gender',
	                class: 'gender_error_message',
	                name_field: 'gender'

    			});
  
			}

 			if(!form["date-birth"]){

				return_val.push ({  
	                status: 0,
	                message: 'date-birth',
	                class: 'dob_error_message',
	                name_field: 'date-birth'

    			});
			}

 
 			if(!form["place-birth"]){

				return_val.push ({  
	                status: 0,
	                message: 'place-birth',
	                class: 'place_birth_error_message',
	                name_field: 'place-birth'

    			}); 
			}

 			if(!form["nationality"]){

				return_val.push ({  
	                status: 0,
	                message: 'nationality',
	                class: 'nationality_error_message',
	                name_field: 'nationality'

    			}); 
			}

 			if(!$('select[name="civil-status"]').val() || $('select[name="civil-status"]').val() == "none"){

				return_val.push ({  
	                status: 0,
	                message: 'civil-status',
	                class: 'civil_status_error_message',
	                name_field: 'civil-status'

    			}); 
			}

 			if(!form["religion"]){

				return_val.push ({  
	                status: 0,
	                message: 'religion',
	                class: 'religion_error_message',
	                name_field: 'religion'

    			}); 
			}

 			if(!form["contact-number"]){
				
				return_val.push ({  
	                status: 0,
	                message: 'contact-number',
	                class: 'contact_num_error_message',
	                name_field: 'contact-number'

    			}); 

			}
 			if(!form["blood-type"]){

				return_val.push ({  
	                status: 0,
	                message: 'blood',
	                class: 'blood_type_error_message',
	                name_field: 'blood-type'

    			}); 
			}
 

 			if(!form["height"]){

				return_val.push ({  
	                status: 0,
	                message: 'height',
	                class: 'height_error_message',
	                name_field: 'height'

    			}); 

			}


 			if(!form["weight"]){

				return_val.push ({  
	                status: 0,
	                message: 'weight',
	                class: 'weight_error_message',
	                name_field: 'weight'


    			}); 
			}


 			if(!form["waist"]){

				return_val.push ({  
	                status: 0,
	                message: 'waist',
	                class: 'weight_error_message',
	                name_field: 'waist'

    			}); 
			}

 			if(!form["coat-size"]){

				return_val.push ({  
	                status: 0,
	                message: 'coat-size',
	                class: 'coat_size_error_message',
	                name_field: 'coat-size'

    			}); 
			}

 			if(!form["shoe-size"]){

				return_val.push ({  
	                status: 0,
	                message: 'shoe-size',
	                class: 'shoe_size_error_message',
	                name_field: 'shoe-size'

    			}); 
			}

  			if(!form["sss"]){

				return_val.push ({  
	                status: 0,
	                message: 'sss',
	                class: 'sss_error_message',
	                name_field: 'sss'

    			}); 

			}

 			if(!form["philhealth"]){

				return_val.push ({  
	                status: 0,
	                message: 'philhealth-size',
	                class: 'philhealth_error_message',
	                name_field: 'philhealth'

    			}); 

			}

 			if(!form["tax-id"]){
				
				return_val.push ({  
	                status: 0,
	                message: 'tax-id',
	                class: 'tax_id_error_message',
	                name_field: 'tax-id'

    			}); 
			}


 			if(!form["pag-ibig"]){

				return_val.push ({  
	                status: 0,
	                message: 'pag-ibig',
	                class: 'pagibig_error_message',
	                name_field: 'pag-ibig'

    			}); 
 			}


 			return return_val;

			
		}

		function next_kin_tab()
		{
    		var o = {};
			form = $('#application-form').serializeObject();
  			var return_val = new Array();

			if(!$('input[name="file-photo"]').val()){
 
				return_val.push({  
	                status: 0,
	                message: 'file-photo',
	                class: 'file_photo_error_message',
	                name_field: 'file-photo'
    			});
			
			}
 
			if(!form["next-kin"]){
				 
				return_val.push({  
	                status: 0,
	                message: 'next-kin',
	                class: 'next-kin_error_message',
	                name_field: 'next-kin'
    			});


			}

			if(!form["relation"]){
								 
				return_val.push({  
	                status: 0,
	                message: 'relation',
	                class: 'relation_error_message',
	                name_field: 'relation'
    			}); 
			}

			if(!form["kin-address"]){

					return_val.push({  
	                status: 0,
	                message: 'kin-address',
	                class: 'kin-address_error_message',
	                name_field: 'kin-address'
    			}); 

			}

			if(!form["kin-number"]){

				return_val.push({  
	                status: 0,
	                message: 'kin-number',
	                class: 'kin-number_error_message',
	                name_field: 'kin-number'
    			});  

			}

			// if(!form["dependent-1"]){
			// 	return {
			// 		status: 0,
			// 		message: "dependent-1"
			// 	}
			// }
			// if(!form["dependent-birth-1"]){
			// 	return {
			// 		status: 0,
			// 		message: "dependent-birth-1"
			// 	}
			// }
			// if(!form["dependent-2"]){
			// 	return {
			// 		status: 0,
			// 		message: "dependent-2"
			// 	}
			// }
			// if(!form["dependent-birth-2"]){
			// 	return {
			// 		status: 0,
			// 		message: "dependent-birth-2"
			// 	}
			// }
			// if(!form["dependent-3"]){
			// 	return {
			// 		status: 0,
			// 		message: "dependent-3"
			// 	}
			// }
			// if(!form["dependent-birth-3"]){
			// 	return {
			// 		status: 0,
			// 		message: "dependent-birth-3"
			// 	}
			// }
			// if(!form["dependent-4"]){
			// 	return {
			// 		status: 0,
			// 		message: "dependent-4"
			// 	}
			// }
			// if(!form["dependent-birth-4"]){
			// 	return {
			// 		status: 0,
			// 		message: "dependent-birth-4"
			// 	}
			// }
		
			return  return_val; 

		}

		function educational_tab()
		{
    		var o = {};
  			var return_val = new Array();
			form = $('#application-form').serializeObject();

			if(!form["school"]){

				return_val.push({  
	                status: 0,
	                message: 'school',
	                class: 'school_error_message',
	                name_field: 'school'
    			});  

			}

			if(!form["course"]){

				return_val.push({  
	                status: 0,
	                message: 'course',
	                class: 'course_error_message',
	                name_field: 'course'
    			});  

			}

			if(!form["yr-graduated"]){
				
				return_val.push({  
	                status: 0,
	                message: 'yr-graduated',
	                class: 'yr-graduated_error_message',
	                name_field: 'yr-graduated'
    			});  

			}
			

			if(!form["eng-prof"]){


				return_val.push({  
	                status: 0,
	                message: 'eng-prof',
	                class: 'eng-prof_error_message',
	                name_field: 'eng-prof'
    			});  
 
			 }



			// if(!form["id-number"]){
			// 	return {
			// 		status: 0,
			// 		message: "id-number"
			// 	}
			// }
			// if(!form["rank"]){
			// 	return {
			// 		status: 0,
			// 		message: "rank"
			// 	}
			// }
			// if(!form["vessel"]){
			// 	return {
			// 		status: 0,
			// 		message: "vessel"
			// 	}
			// }
			// if(!form["sea-service"]){
			// 	return {
			// 		status: 0,
			// 		message: "sea-service"
			// 	}
			// }
			// if(!form["seatime"]){
			// 	return {
			// 		status: 0,
			// 		message: "seatime"
			// 	}
			// }
			// if(!form["yrs-company"]){
			// 	return {
			// 		status: 0,
			// 		message: "yrs-company"
			// 	}
			// }
			// if(!form["yrs-glocal"]){
			// 	return {
			// 		status: 0,
			// 		message: "yrs-glocal"
			// 	}
			// }
		
			return return_val;

		}

		function documents_tab()
		{
  			var return_val = new Array();
			form = $('#application-form').serializeObject();

			console.log(form); 

			if(!form["passport-number"]){

					return_val.push({  
	                status: 0,
	                message: 'passport-number',
	                class: 'passport-number_error_message',
	                name_field: 'passport-number'
    			});  
  
			}
			if(!form["passport-issued"]){

				return_val.push({  
	                status: 0,
	                message: 'passport-issued',
	                class: 'passport-issued_error_message',
	                name_field: 'passport-issued'
    			});  
  
			}
			if(!form["passport-expiry"]){

				return_val.push({  
	                status: 0,
	                message: 'passport-expiry',
	                class: 'passport-expiry_error_message',
	                name_field: 'passport-expiry'
    			});  

			}

			if(!form["sbook"]){
				
				return_val.push({  
	                status: 0,
	                message: 'sbook',
	                class: 'sbook_error_message',
	                name_field: 'sbook'
    			});  
 
			}

			if(!form["sbook-issued"]){
					
				return_val.push({  
	                status: 0,
	                message: 'sbook-issued',
	                class: 'sbook-issued_error_message',
	                name_field: 'sbook-issued'
    			});  
 
			}

			if(!form["src"]){

				return_val.push({  
	                status: 0,
	                message: 'src',
	                class: 'src_error_message',
	                name_field: 'src'
    			});  			 

			}

			if(!form["src-issued"]){

				return_val.push({  
	                status: 0,
	                message: 'src-issued',
	                class: 'src_error_message',
	                name_field: 'src-issued'
    			});  			 
 
			}

			if(!form["license"]){

				return_val.push({  
	                status: 0,
	                message: 'license',
	                class: 'license_error_message',
	                name_field: 'license'
    			});  					 
 			}

			if(!form["license-issued"]){
				

				return_val.push({  
	                status: 0,
	                message: 'license-issued',
	                class: 'license-issued_error_message',
	                name_field: 'license-issued'
    			});  

			}

			if(!form["us-visa"]){
				
				return_val.push({  
	                status: 0,
	                message: 'us-visa',
	                class: 'us-visa_error_message',
	                name_field: 'us-visa'
    			}); 

			}

			if(!form["us-expiry"]){

				return_val.push({  
	                status: 0,
	                message: 'us-expiry',
	                class: 'us-expiry_error_message',
	                name_field: 'us-expiry'
    			}); 

			}
			// if(!form["docs-name"]){

			// 	return_val.push({  
	  //               status: 0,
	  //               message: 'docs-name',
	  //               class: 'docs-name_error_message',
	  //               name_field: 'docs-name'
   //  			}); 
 
			// }

			// if(!form["docs-number"]){

			// 	return_val.push({  
	  //               status: 0,
	  //               message: 'docs-number',
	  //               class: 'docs-number_error_message',
	  //               name_field: 'docs-number'
   //  			}); 
 
			// }

			// if(!form["docs-reqd"]){

			// 	return_val.push({  
	  //               status: 0,
	  //               message: 'docs-reqd',
	  //               class: 'docs-reqd_error_message',
	  //               name_field: 'docs-reqd'
   //  			});  
			
			// }

			// if(!form["docs-grade"]){

			// 	return_val.push({  
	  //               status: 0,
	  //               message: 'docs-grade',
	  //               class: 'docs-grade_error_message',
	  //               name_field: 'docs-grade'
   //  			});   
			// }

			// if(!form["docs-expiry"]){

			// 	return_val.push({  
	  //               status: 0,
	  //               message: 'docs-expiry',
	  //               class: 'docs-expiry_error_message',
	  //               name_field: 'docs-expiry'
   //  			});   
 
			// }

			return return_val;
			
		}
		

//* Next of Personal Information Next 

		$(document).on("click", '#tab-1', function (e) {

			var i;

			e.preventDefault();

			check = new Array();

			check = personal_tab();


			$("select").css("background-color", "");

			$("input").css("background-color", 	"");

			$("div .file-field").css("background-color", "");

			if(check.length){

				for(i = 0; i < check.length;i++){
   
   					if(check[i].name_field == "gender" || check[i].name_field == "civil-status")
						$("select[name='"+check[i].name_field+"']").css("background-color", "red");

   					else if(check[i].name_field == "file-photo")
						$("div #file-field").css("background-color", "red");

					else 
						$("input[name='"+check[i].name_field+"']").css("background-color", 	"red");
 				}

  				$('#error-area').html(check.message+" is empty");
 				return 1;
			}else{
				$('#application-tabs li:eq(1) a').tab('show');
  			}

		});

//* Next of Kind & Dependents Next 

		$(document).on("click", '#tab-2', function (e) {
			
			var i;

			e.preventDefault();

			check = new Array();

			check = personal_tab();

			$("select").css("background-color", "");

			$("input").css("background-color", 	"");

			$("div .file-field").css("background-color", "");

			if(check.length){

				$('li[class="active"]').prevAll('li').removeClass('visited');
				$('#application-tabs a[href="#personal"]').tab('show');

				for(i = 0; i < check.length;i++){
   
   					if(check[i].name_field == "gender" || check[i].name_field == "civil-status")
						$("select[name='"+check[i].name_field+"']").css("background-color", "red");

   					else if(check[i].name_field == "file-photo")
						$("div #file-field").css("background-color", "red");

					else 
						$("input[name='"+check[i].name_field+"']").css("background-color", 	"red");
 				}

  				$('#error-area').html("Some Field(s) in the Personal Form is missing! ");

 				return 1;

			}  
 
			check = next_kin_tab();

			if(check.length){

				$('#application-tabs a[href="#nextkin"]').tab('show');
				$('#application-tabs li:eq(1) a').tab('show');

				for(i = 0; i < check.length;i++){
   
   					if(check[i].name_field == "gender" || check[i].name_field == "civil-status")
						$("select[name='"+check[i].name_field+"']").css("background-color", "red");

   					else if(check[i].name_field == "file-photo")
						$("div #file-field").css("background-color", "red");

					else 
						$("input[name='"+check[i].name_field+"']").css("background-color", 	"red");
 				}


  				$('#error-area').html("Some Field(s) in the Next Kin Form is missing! ");
				return 1;

 			}else{
				$('#application-tabs li:eq(2) a').tab('show');
	            $('li[class="active"]').prevAll('li').addClass('visited');
			}


		});


//* Next of Educational Form Next 


		$(document).on("click", '#tab-3', function (e) {
			
			e.preventDefault();

			check = new Array();

			check = personal_tab();

			$("select").css("background-color", "");

			$("input").css("background-color", 	"");

			$("div .file-field").css("background-color", "");


			if(check.length){
				$('li[class="active"]').prevAll('li').removeClass('visited');
 				$('#application-tabs a[href="#personal"]').tab('show');
				$('#application-tabs li:eq(0) a').tab('show');
	            //$('li[class="active"]').nextAll('li').removeClass('visited');


				for(i = 0; i < check.length;i++){
   
   					if(check[i].name_field == "gender" || check[i].name_field == "civil-status")
						$("select[name='"+check[i].name_field+"']").css("background-color", "red");

   					else if(check[i].name_field == "file-photo")
						$("div #file-field").css("background-color", "red");

					else 
						$("input[name='"+check[i].name_field+"']").css("background-color", 	"red");
 				}


  				$('#error-area').html("Some Field(s) in the Personal Form is missing! ");
				
				return 1;
			}
			
			check = next_kin_tab();

			if(check.length){

				$('li[class="active"]').prevAll('li').removeClass('visited');
				$('#application-tabs a[href="#nextkin"]').tab('show');
				$('#application-tabs li:eq(1) a').tab('show');

				for(i = 0; i < check.length;i++){
   
   					if(check[i].name_field == "gender" || check[i].name_field == "civil-status")
						$("select[name='"+check[i].name_field+"']").css("background-color", "red");

   					else if(check[i].name_field == "file-photo")
						$("div #file-field").css("background-color", "red");

					else 
						$("input[name='"+check[i].name_field+"']").css("background-color", 	"red");
 				}


  				$('#error-area').html("Some Field(s) in the Next Kin Form is missing! ");

				return 1;
				// $('#error-area').html(check.message+" is empty");
			}

			check = educational_tab();

			if(check.length){

				$('#application-tabs a[href="#education"]').tab('show');
				$('#application-tabs li:eq(2) a').tab('show');
	            $('li[class="active"]').nextAll('li').addClass('visited');
				$('li[class="active"]').prevAll('li').removeClass('visited');

				for(i = 0; i < check.length;i++){
   
   					if(check[i].name_field == "gender" || check[i].name_field == "civil-status")
						$("select[name='"+check[i].name_field+"']").css("background-color", "red");

   					else if(check[i].name_field == "file-photo")
						$("div #file-field").css("background-color", "red");

					else 
						$("input[name='"+check[i].name_field+"']").css("background-color", 	"red");
 				}


  				$('#error-area').html("Some Field(s) in the Educational Form is missing! ");

				return 1;
				// $('#error-area').html(check.message+" is empty");
			}else{
				$('#application-tabs li:eq(3) a').tab('show');
	            $('li[class="active"]').prevAll('li').addClass('visited');
 			}
		});


//* Next of Document Form Next 


		$(document).on("click", '#tab-4', function (e) {
			
			e.preventDefault();

			$("select").css("background-color", "");

			$("input").css("background-color", 	"");

			$("div .file-field").css("background-color", "");

			check = new Array();

			check = personal_tab();
			if(check.length){
				$('li[class="active"]').prevAll('li').removeClass('visited');
				$('#application-tabs a[href="#personal"]').tab('show');
				$('#application-tabs li:eq(0) a').tab('show');
 


				for(i = 0; i < check.length;i++){
   
   					if(check[i].name_field == "gender" || check[i].name_field == "civil-status")
						$("select[name='"+check[i].name_field+"']").css("background-color", "red");

   					else if(check[i].name_field == "file-photo")
						$("div #file-field").css("background-color", "red");

					else 
						$("input[name='"+check[i].name_field+"']").css("background-color", 	"red");
 				}


  				$('#error-area').html("Some Field(s) in the Personal Form is missing! ");
				
  				alert("personal_tab Tab");

  				console.log(check);


				return 1;
			}
			
			check = next_kin_tab();

			if(check.length){

				$('li[class="active"]').prevAll('li').removeClass('visited');
				$('#application-tabs a[href="#nextkin"]').tab('show');
				$('#application-tabs li:eq(1) a').tab('show');


				for(i = 0; i < check.length;i++){
   
   					if(check[i].name_field == "gender" || check[i].name_field == "civil-status")
						$("select[name='"+check[i].name_field+"']").css("background-color", "red");

   					else if(check[i].name_field == "file-photo")
						$("div #file-field").css("background-color", "red");

					else 
						$("input[name='"+check[i].name_field+"']").css("background-color", 	"red");
 				}


  				alert("Next Kin Tab");

  				console.log(check);

  				$('#error-area').html("Some Field(s) in the Next Kin Form is missing! ");
				
				return 1;
				// $('#error-area').html(check.message+" is empty");
			}

			check = educational_tab();

			if(check.length){

				$('li[class="active"]').prevAll('li').removeClass('visited');
				$('#application-tabs a[href="#education"]').tab('show');
				$('#application-tabs li:eq(2) a').tab('show'); 				


				for(i = 0; i < check.length;i++){
   
   					if(check[i].name_field == "gender" || check[i].name_field == "civil-status")
						$("select[name='"+check[i].name_field+"']").css("background-color", "red");

   					else if(check[i].name_field == "file-photo")
						$("div #file-field").css("background-color", "red");

					else 
						$("input[name='"+check[i].name_field+"']").css("background-color", 	"red");
 				}

  				alert("Educational Tab");

  				console.log(check);

  				$('#error-area').html("Some Field(s) in the Educational Form is missing! ");
				
				return 1;
				// $('#error-area').html(check.message+" is empty");
			}

			check = documents_tab();

			if(check.length){

				$('li[class="active"]').prevAll('li').removeClass('visited');
				$('#application-tabs a[href="#documents"]').tab('show');
				$('#application-tabs li:eq(3) a').tab('show');
				

				for(i = 0; i < check.length;i++){
   
   					if(check[i].name_field == "gender" || check[i].name_field == "civil-status")
						$("select[name='"+check[i].name_field+"']").css("background-color", "red");

   					else if(check[i].name_field == "file-photo")
						$("div #file-field").css("background-color", "red");

					else 
						$("input[name='"+check[i].name_field+"']").css("background-color", 	"red");
 				}


  				$('#error-area').html("Some Field(s) in the Document Form is missing! ");
  				
  				alert("Documents Tab");

  				console.log(check);

				return 1;
				// $('#error-area').html(check.message+" is empty");
			}else{
				$('#application-tabs li:eq(4) a').tab('show');
	            $('li[class="active"]').prevAll('li').addClass('visited');
 			}


		});

 //* Next of Service History Form Review 


		$(document).on("click", '.btn_review_form',function(e) {
			

			$("select").css("background-color", "");

			$("input").css("background-color", 	"");

			$("div .file-field").css("background-color", "");

			check = new Array();

			check = personal_tab();
			if(check.length){
				$('li[class="active"]').prevAll('li').removeClass('visited');
				$('#application-tabs a[href="#personal"]').tab('show');
				$('#application-tabs li:eq(0) a').tab('show');
 


				for(i = 0; i < check.length;i++){
   
   					if(check[i].name_field == "gender" || check[i].name_field == "civil-status")
						$("select[name='"+check[i].name_field+"']").css("background-color", "red");

   					else if(check[i].name_field == "file-photo")
						$("div #file-field").css("background-color", "red");

					else 
						$("input[name='"+check[i].name_field+"']").css("background-color", 	"red");
 				}


  				$('#error-area').html("Some Field(s) in the Personal Form is missing! ");
				
				alert("Personal Info");
				
				e.preventDefault();

				return 1;
			}
			
			check = next_kin_tab();

			if(check.length){

				$('li[class="active"]').prevAll('li').removeClass('visited');
				$('#application-tabs a[href="#nextkin"]').tab('show');
				$('#application-tabs li:eq(1) a').tab('show');


				for(i = 0; i < check.length;i++){
   
   					if(check[i].name_field == "gender" || check[i].name_field == "civil-status")
						$("select[name='"+check[i].name_field+"']").css("background-color", "red");

   					else if(check[i].name_field == "file-photo")
						$("div #file-field").css("background-color", "red");

					else 
						$("input[name='"+check[i].name_field+"']").css("background-color", 	"red");
 				}


  				$('#error-area').html("Some Field(s) in the Next Kin Form is missing! ");
				
				alert("next_kin_tab Info");

				e.preventDefault();

				return 1;
				// $('#error-area').html(check.message+" is empty");
			}

			check = educational_tab();

			if(check.length){

				$('li[class="active"]').prevAll('li').removeClass('visited');
				$('#application-tabs a[href="#education"]').tab('show');
				$('#application-tabs li:eq(2) a').tab('show'); 				


				for(i = 0; i < check.length;i++){
   
   					if(check[i].name_field == "gender" || check[i].name_field == "civil-status")
						$("select[name='"+check[i].name_field+"']").css("background-color", "red");

   					else if(check[i].name_field == "file-photo")
						$("div #file-field").css("background-color", "red");

					else 
						$("input[name='"+check[i].name_field+"']").css("background-color", 	"red");
 				}

				alert("educational_tab Info");

  				$('#error-area').html("Some Field(s) in the Educational Form is missing! ");
				
				e.preventDefault();

				return 1;
				// $('#error-area').html(check.message+" is empty");
			}

			check = documents_tab();

			if(check.length){

				$('li[class="active"]').prevAll('li').removeClass('visited');
				$('#application-tabs a[href="#documents"]').tab('show');
				$('#application-tabs li:eq(3) a').tab('show');
				

				for(i = 0; i < check.length;i++){
   
   					if(check[i].name_field == "gender" || check[i].name_field == "civil-status")
						$("select[name='"+check[i].name_field+"']").css("background-color", "red");

   					else if(check[i].name_field == "file-photo")
						$("div #file-field").css("background-color", "red");

					else 
						$("input[name='"+check[i].name_field+"']").css("background-color", 	"red");
 				}


  				$('#error-area').html("Some Field(s) in the Document Form is missing! ");
				
				alert("documents_tab Info");

				e.preventDefault();

				return 1;
				// $('#error-area').html(check.message+" is empty");
			} 

 
		});



		// Previous
		$(document).on("click", '#prev-tab-2', function (e) {
			e.preventDefault();
            $('li[role="presentation"]').removeClass('active').removeClass('visited');

			$('#application-tabs a[href="#personal"]').tab('show');
            $('li[class="active"]').nextAll('li').removeClass('visited');
            $('li[class="active"]').prevAll('li').addClass('visited');
		});
		$(document).on("click", '#prev-tab-3', function (e) {
			e.preventDefault();
            $('li[role="presentation"]').removeClass('active').removeClass('visited');

			$('#application-tabs a[href="#nextkin"]').tab('show');
            $('li[class="active"]').nextAll('li').removeClass('visited');
            $('li[class="active"]').prevAll('li').addClass('visited');
		});
		$(document).on("click", '#prev-tab-4', function (e) {
			e.preventDefault();
            $('li[role="presentation"]').removeClass('active').removeClass('visited');

			$('#application-tabs a[href="#education"]').tab('show');
            $('li[class="active"]').nextAll('li').removeClass('visited');
            $('li[class="active"]').prevAll('li').addClass('visited');
		});
		$(document).on("click", '#prev-tab-5', function (e) {
			e.preventDefault();
            $('li[role="presentation"]').removeClass('active').removeClass('visited');

			$('#application-tabs a[href="#documents"]').tab('show');
            $('li[class="active"]').nextAll('li').removeClass('visited');
            $('li[class="active"]').prevAll('li').addClass('visited');
		});

		// Agreement
        $(document).on("click", "#agreement", function(){
         
			if($("#agreement").is(':checked')){
                $('#submit-form').css('pointer-events', "");
			}else{
                $('#submit-form').css('pointer-events', 'none');
			}
        });
		


        // $(document).on("click", "a[data-trigger='next']", function(e){
        //     e.preventDefault();

        //     $('li[class="active"]').next("li").trigger("click");
        // });

        /*
        * Add More Doc Forms
        **/
        $(document).on("click", ".certificates", function(e){
            e.preventDefault();

            html  = '<div class="form-personal-info">';
            html += '<div class="gap-30"></div>';
            html += '<div class="form-personal-holder afterclear">';
                html += '<div class="gray-div gray--div">';
                html += '<a href="javascript:void 0;" class="remove-certificates"><i class="fa fa-minus-circle" aria-hidden="true"></i> Remove</a>';
                html += '</div>';
                html += '<div class="col-md-8 p-0">';
                html += '<div class="form-group">';
                        html += '<label>Document Name <div>*</div></label>';
                        html += '<input type="text" name="docs-name[]" class="form-control" placeholder="Training in Advance Firefighting (COP)" required>';
                        html += '<p class="text-white">docname</p>';
                        html += '</div>';
                    html += '</div>';
                    html += '<div class="col-md-4 p-0">';
                        html += '<div class="form-group">';
                            html += '<label>Document Number <div>*</div></label>';
                            html += '<input type="text" name="docs-number[]" class="form-control" placeholder="17-6817" required>';
                            html += '<p class="text-white">docnumber</p>';
                        html += '</div>';
                    html += '</div>';
                html += '</div>';
                html += '<div class="form-personal-holder afterclear">';
                    html += '<div class="col-md-3 p-0">';
                        html += '<div class="form-group">';
                            html += '<label>Req\'d 4 <div>*</div></label>';
                            html += '<input type="text" name="docs-reqd[]" class="form-control" placeholder="Officer" required>';
                            html += '<p class="text-white">reqd</p>';
                        html += '</div>';
                    html += '</div>';
                    html += '<div class="col-md-3 p-0">';
                        html += '<div class="form-group">';
                            html += '<label>Grade <div>*</div></label>';
                            html += '<input type="text" name="docs-grade[]" class="form-control" required>';
                            html += '<p class="text-white">grade</p>';
                        html += '</div>';
                    html += '</div>';
                    html += '<div class="col-md-3 p-0">';
                        html += '<div class="form-group">';
                            html += '<label>Issued <div>*</div></label>';
                            html += '<input type="date" name="docs-issued[]" class="form-control" required>';
                            html += '<p class="text-white">issued</p>';
                        html += '</div>';
                    html += '</div>';
                    html += '<div class="col-md-3 p-0">';
                        html += '<div class="form-group">';
                            html += '<label>Expiry <div>*</div></label>';
                            html += '<input type="date" name="docs-expiry[]" class="form-control" required>';
                            html += '<p class="text-white">expiry</p>';
                html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';

            $(".add-docs").before(html);
        });

        /*
        * Remove a Doc Form
        **/
        $(document).on("click", ".remove-certificates", function(e){
            e.preventDefault();

            current_select = $(this);
            current_select.closest(".form-personal-info").css("visibility","hidden");
            current_select.closest(".form-personal-info").css("opacity",0);
            current_select.closest(".form-personal-info").css("transition","visibility 0s, opacity 0.5s linear");
            
            setTimeout( function() { 
                current_select.closest(".form-personal-info").remove();
            }, 500);
        });

        /*
        * Add More Service Forms
        **/
        $(document).on("click", ".services", function(e){
            e.preventDefault();

                html = '<div class="form-personal-info">';
                    html += '<div class="gap-30"></div>';
                    html += '<div class="form-personal-holder afterclear">';
                        html += '<div class="gray-div gray--div">';
                            html += '<a href="javascript:void 0;" class="remove-service"><i class="fa fa-minus-circle" aria-hidden="true"></i> Remove</a>';
                        html += '</div>';
                        html += '<div class="col-md[]2 p-0">';
                            html += '<div class="form-group">';
                                html += '<label>Company Name</label>';
                                html += '<input type="text" name="history-name[]" class="form-control" value="Maersk" required>';
                                html += '<p class="text-white">companyname</p>';
                            html += '</div>';
                        html += '</div>';
                    html += '</div>';
                    html += '<div class="form-personal-holder afterclear">';
                        html += '<div class="col-md-3 p-0">';
                            html += '<div class="form-group">';
                                html += '<label>Rank</label>';
                                html += '<input type="text" name="history-rank[]" class="form-control" value="C/E" required>';
                                html += '<p class="text-white">rank</p>';
                            html += '</div>';
                        html += '</div>';
                        html += '<div class="col-md-3 p-0">';
                            html += '<div class="form-group">';
                                html += '<label>Embark</label>';
                                html += '<input type="date" name="history-embark[]" class="form-control" value="2010-02-08" required>';
                                html += '<p class="text-white">embark</p>';
                            html += '</div>';
                        html += '</div>';
                        html += '<div class="col-md-3 p-0">';
                            html += '<div class="form-group">';
                                html += '<label>Disembark</label>';
                                html += '<input type="date" name="history-disembark[]" class="form-control" value="2010-05-01" required>';
                                html += '<p class="text-white">disembark</p>';
                            html += '</div>';
                        html += '</div>';
                        html += '<div class="col-md-3 p-0">';
                            html += '<div class="form-group">';
                                html += '<label>Vessel Name</label>';
                                html += '<input type="text" name="history-vessel[]" class="form-control" value="NedlloydAdrian" required>';
                                html += '<p class="text-white">vesselname</p>';
                            html += '</div>';
                        html += '</div>';
                    html += '</div>';
                    html += '<div class="form-personal-holder afterclear">';
                        html += '<div class="col-md-2 p-0">';
                            html += '<div class="form-group">';
                                html += '<label>Type</label>';
                                html += '<input type="text" name="history-type[]" class="form-control" value="CNTR" required>';
                                html += '<p class="text-white">type</p>';
                            html += '</div>';
                        html += '</div>';
                        html += '<div class="col-md-2 p-0">';
                            html += '<div class="form-group">';
                                html += '<label>GT</label>';
                                html += '<input type="text" name="history-gt[]" class="form-control" value="26,833" required>';
                                html += '<p class="text-white">gt</p>';
                            html += '</div>';
                        html += '</div>';
                        html += '<div class="col-md-2 p-0">';
                            html += '<div class="form-group">';
                                html += '<label>Engine</label>';
                                html += '<input type="text" name="history-engine[]" class="form-control" value="SLZR" required>';
                                html += '<p class="text-white">engine</p>';
                            html += '</div>';
                        html += '</div>';
                        html += '<div class="col-md-2 p-0">';
                            html += '<div class="form-group">';
                                html += '<label>HP</label>';
                                html += '<input type="text" name="history-hp[]" class="form-control" value="21,560" required>';
                                html += '<p class="text-white">21,560</p>';
                            html += '</div>';
                        html += '</div>';
                        html += '<div class="col-md-2 p-0">';
                            html += '<div class="form-group">';
                                html += '<label>Reason</label>';
                                html += '<input type="text" name="history-reason[]" class="form-control" value="Completed" required>';
                                html += '<p class="text-white">reason</p>';
                            html += '</div>';
                        html += '</div>';
                        html += '<div class="col-md-2 p-0">';
                            html += '<div class="form-group">';
                                html += '<label>FR</label>';
                                html += '<input type="text" name="history-fr[]" class="form-control" value="N.A" required>';
                                html += '<p class="text-white">fr</p>';
                            html += '</div>';
                        html += '</div>';
                    html += '</div>';
                html += '</div>';

            $(".add-services").before(html);
        });
        /*
        * Remove a Service Form
        **/
        $(document).on("click", ".remove-service", function(e){
            e.preventDefault();

            current_select = $(this);
            current_select.closest(".form-personal-info").css("visibility","hidden");
            current_select.closest(".form-personal-info").css("opacity",0);
            current_select.closest(".form-personal-info").css("transition","visibility 0s, opacity 0.5s linear");
            
            setTimeout( function() { 
                current_select.closest(".form-personal-info").remove();
            }, 500);
        });
});
</script> 

