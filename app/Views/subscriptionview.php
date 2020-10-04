<div class="header">
		<div class="container">
			<div class="header-top-navbar">
				<div class="navabar wow fadeIn">
					<a href="#" class="logo">
						<img class="wow fadeIn" src="<?php echo base_url('image/logo.png');?>">
					</a>
					<a href="javascript:void(0);" class="icon" onclick="topNavabar()"><img src="<?php echo base_url('image/menu.svg');?>"></a>
					<div id="nav" class="wow fadeIn">
						<div class="menu scroll">
							<ul>
								<li><a class="" href="#relotz">What We Do</a></li>
								<li><a class="" href="#realtors">What We Offer</a></li>
								<li><a class="" href="#faq">FAQ</a></li>
								<li><a class="" href="#">Get In Touch</a></li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
			<div class="header-top">
				<div class="logo">
				<a href="<?php base_url();?>">
				<img class="wow fadeIn" src="<?php echo base_url('image/logo.png');?>"></a>
				</div>
				<div class="manu scroll wow fadeIn">
					<ul>
						<li><a class="wow fadeIn" href="#relotz">What We Do</a></li>
						<li><a class="wow fadeIn" href="#realtors">What We Offer</a></li>
						<li><a class="wow fadeIn" href="#faq">FAQ</a></li>
					</ul>
				</div>
				<div class="button wow fadeIn">
				<a href="tel:+919410029261">Get In Touch</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container-2">
		<div class="banner">
			<div class="heading">
				<h1 class="">Flip Your Next Property Hands-Free</h1>
				<span class="">Only 10% Down<br> Up to $2,000,000</span>
				<div class="border">
				  	<div class="border-bottom"></div>
				</div>
				<div class="banner-form">
				<?php if(isset($message)){
					echo	'<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Hello!</strong>'.$message.
				  '</div>';
				}else{
	

				}
				
				?>
					<p class="">Download Our Recent Deal Scenario</p>
					<form action="<?php echo base_url('/Relotzfnf');?>" method="post" class="download-form">
						<input type="text" name="users_name" placeholder="Your Name" required />
						<input type="email" name="email" placeholder="Email" required />
						<button type="submit" name="submit wow fadeIn" class="download-btn">Download Now</button>
					</form>
				</div>
			</div>
			<div class="banner-image">
				<img class="wow fadeIn" src="<?php echo base_url('image/banner.png');?>">
			</div>
		</div>
	</div>
	<div class="contant" id="relotz">
		<div class="container-2">
			<div class="contant-data">
				<div class="lable">
					<p class="highligte">IMAGINE FLIPPING REAL ESTATE</p>
					<p>WITHOUT DOING ANY OF THE WORK.</p>
					<div class="lable-border">
					  	<div class="border-bottom wow fadeIn"></div>
					</div>
				</div>
				<div class="planing">
					<div class="planing-data">
						<img class="set-image investor wow fadeIn" src="<?php echo base_url('image/hand-shak.png');?>">
						<p class="wow fadeIn">We work with seasoned investors, first time investors, or everyday individuals looking to increase their income.</p>
					</div>
					<div class="planing-data">
						<img class="good-bye wow fadeIn" src="<?php echo base_url('image/good-bye.png');?>">
						<p class="wow fadeIn">Say goodbye to dealing with real estate agents, the bank, appraisers, attorneys, and anything of the like. Simply put, we flip for you!</p>
					</div>
				</div>
				<div class="lable">
					<h1>HOW WE DO IT</h1>
					<div class="lable-border">
					  	<div class="border-bottom wow fadeIn"></div>
					</div>
				</div>
				<div class="planing">
					<div class="planing-data">
						<img class="mt-18 wow fadeIn" src="<?php echo base_url('image/hand-shak-2.png');?>">
						<p class="wow fadeIn">Like most great things, we didn't happen overnight but with time and much effort, we birthed an incredible way for investors to fix 'n' flip properties without doing the work.</p>
					</div>
					<div class="planing-data">
						<img class="imagene wow fadeIn" src="<?php echo base_url('image/small-banner.png');?>">
						<p class="wow fadeIn">Imagine flipping real estate without doing any of the work. Avoid the typical headaches of renovation while we: finance the property, manage the project, acquire the blueprints, secure the permits, and complete the renovation.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="middle-contant" id="realtors">
		<div class="container-2">
			<div class="diagram"><img class="wow fadeIn" src="<?php echo base_url('image/relotz.png');?>"></div>
			<div class="lable">
				<h1 class="fix-header">WHEN WE SAID HANDS-FREE, WE MEANT IT.</h1>
				<div class="lable-border">
				  	<div class="border-bottom"></div>
				</div>
			</div>
		</div>
		<div class="hockeye-image">
			<div class="container-2">
				<div class="hockeye">
					<div class="acquisition diagram-details">
						<div class="diagram-image wow fadeIn"><img class="wow fadeIn" src="<?php echo base_url('image/home.png');?>"></div>
						<div class="diagram-list">
							<h3>Acquisition</h3>
							<ul class="wow fadeIn">
								<li>Find the Best Property at the Best Price</li>
								<li>Analyze Comparable Properties</li>
								<li>Determine Market Trends</li>
								<li>Manage Every Detail from Start to Closing</li>
							</ul>
						</div>
					</div>
					<div class="finance diagram-details">
						<div class="diagram-image wow fadeIn"><img class="wow fadeIn" src="<?php echo base_url('image/finace.png');?>"></div>
						<div class="diagram-list">
							<h3>Finance</h3>
							<ul class="wow fadeIn">
								<li>Locate the Best Lender with the Best Rate</li>
								<li>Execute Due Diligence</li>
								<li>Gather All Documentation</li>
								<li>Prepare the Loan Package for Submission</li>
							</ul>
						</div>
					</div>
					<div class="services diagram-details">
						<div class="diagram-image wow fadeIn"><img class="wow fadeIn" src="<?php echo base_url('image/service.png');?>"></div>
						<div class="diagram-list">
							<h3>Pre-Construction Studies & Services</h3>
							<ul class="wow fadeIn">
								<li>Architectural Design & Blueprints</li>
								<li>Building Permits</li>
								<li>Site Plans & Surveys</li>
							</ul>
						</div>
					</div>
					<div class="management diagram-details">
						<div class="diagram-image wow fadeIn"><img  class="wow fadeIn" src="<?php echo base_url('image/project.png');?>"></div>
						<div class="diagram-list">
							<h3>Project Management</h3>
							<ul class="wow fadeIn">
								<li>Dedicated Relotz Project Manager</li>
								<li>Accurate Estimates</li>
								<li>Schedule of Completion</li>
								<li>Bidding Process</li>
							</ul>
						</div>
					</div>
					<div class="renovation diagram-details">
						<div class="diagram-image wow fadeIn"><img class="wow fadeIn" src="<?php echo base_url('image/renovation.png');?>"></div>
						<div class="diagram-list">
							<h3>Renovation Construction</h3>
							<ul class="wow fadeIn">
								<li>Hire & Manage Subcontractors</li>
								<li>Execute Inspections</li>
								<li>Complete Project on Time</li>
							</ul>
						</div>
					</div>
					<div class="sell diagram-details">
						<div class="diagram-image wow fadeIn"><img class="wow fadeIn" src="<?php echo base_url('image/sale.png');?>"></div>
						<div class="diagram-list ">
							<h3>Sell</h3>
							<ul class="wow fadeIn">
								<li>Access our Database of Real</li>
								<li>Estate Agents</li>
								<li>Place with Real Estate Agent</li>
								<li>Oversee the Sale of the Property</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom-contant">
		<div class="container-2">
			<div class="lable">
				<h1 class="wow fadeIn">WE DO ALL THE HEAVY LIFTING!</h1>
				<div class="lable-border">
				  	<div class="border-bottom wow fadeIn"></div>
				</div>
			</div>
			<div class="lifting">
				<div class="lifting-list">
					<ul class="wow fadeIn">
						<li><a id="tab-1"><span>About Us</span><img src="<?php echo base_url('image/arrow-right.png');?>"></a></li>
						<li><a id="tab-2"><span>How Awesome Are We</span><img src="<?php echo base_url('image/arrow-right.png');?>"></a></li>
						<li><a id="tab-3"><span>We’re an Open Book</span><img src="<?php echo base_url('image/arrow-right.png');?>"></a></li>
						<li><a id="tab-4"><span>Cash to Close</span><img src="<?php echo base_url('image/arrow-right.png');?>"></a></li>
						<li><a id="tab-5"><span>Small Fees for Big Profits</span><img src="<?php echo base_url('image/arrow-right.png');?>"></a></li>
						<li><a id="tab-6"><span>No Hidden Agenda</span><img src="<?php echo base_url('image/arrow-right.png');?>"></a></li>
					</ul>
				</div>
				<div id="tab-1d" class="lifting-data">
					<div class="lifting-image">
						<img src="<?php echo base_url('image/about.png');?>">
					</div>
					<div class="lifting-details wow fadeIn">
						<h3>About Us</h3>
						<span>We are a team of real estate experts in construction, technology, finance, and marketing. We provide an end to end enterprise solution to first time & experienced real estate investors who don't have the time, resources, or experience to fix-n-flip real estate.</span>
					</div>
				</div>
				<div id="tab-2d" class="lifting-data">
					<div class="lifting-image">
						<img src="<?php echo base_url('image/awesome.png');?>">
					</div>
					<div class="lifting-details">
						<h3>How Awesome Are We</h3>
						<span>We run preliminary studies to create an accurate estimation of the scope of work needed to complete a flip ready property for you. We expertly perform every aspect of the project from beginning to end including providing financing, managing the construction process, and listing the property for sale. To ensure that our properties are the best flip for you, we provide bottom line gross and net profits projections. We are licensed, insured, and bonded. Our model has been tried & proven to maximize profits with minimum investment & little to no involvement from you.</span>
					</div>
				</div>
				<div id="tab-3d" class="lifting-data">
					<div class="lifting-image">
						<img src="<?php echo base_url('image/openbook.png');?>">
					</div>
					<div class="lifting-details">
						<h3>We’re an Open Book</h3>
						<span>In the spirit of full transparency, we outline every cost, expense, and fee imaginable. We determine a true and uninflated net profit for our investors’ pockets. Our strategic approach evaluates market trends, conditions, rehab cost, and scope of work. We formulate an accurate
timeline, budget, and provide finishing specifications & selections for you to sign off.</span>
					</div>
				</div>
				<div id="tab-4d" class="lifting-data">
					<div class="lifting-image">
						<img src="<?php echo base_url('image/cash.png');?>">
					</div>
					<div class="lifting-details">
						<h3>Cash to Close</h3>
						<span>It’s simple, bring your cash to closing. Our process is straightforward with no hassle. Pick your project, choose your net profit, & prepare for closing.</span>
					</div>
				</div>
				<div id="tab-5d" class="lifting-data">
					<div class="lifting-image">
						<img src="<?php echo base_url('image/fees.png');?>">
					</div>
					<div class="lifting-details">
						<h3>Small Fees for Big Profits</h3>
						<span>We charge a project management fee that is 20% of your net profit once your property is listed and sold.</span>
					</div>
				</div>
				<div id="tab-6d" class="lifting-data">
					<div class="lifting-image">
						<img src="<?php echo base_url('image/agenda.png');?>">
					</div>
					<div class="lifting-details">
						<h3>No Hidden Agenda</h3>
						<span>It’s no secret that our clients flip more real estate than the average real estate investor using our hands-free flipping technique. We guarantee your success or we’ll pay for your failure.</span>
					</div>
				</div>
				
			</div>
			<div class="lable modify-lable" id ="faq">
				<p>FIX & FLIP PROCESS</p>
				<h1>FAQ</h1>
				<div class="lable-border">
				  	<div class="border-bottom"></div>
				</div>
			</div>
			<!-- <div class="dropdown-data">
				<div class="tag">
					<span class="text-bottom">Project Planning and management</span>
					<span class="plusminus">-</span>
				</div>
				
				<div class="action-body" style="display: block;">
					<div class="tag-data">
						<img  class="wow fadeIn" src="image/project-planing.png">
						<span class="wow fadeIn" >Our project planning and managing services allow you to relax while we facilitate the fix and flip process. From start to finish we assign dedicated crew members to follow market trends and analytics based on preliminary and detailed studies. These results are then utilized to create the project scope of work and to the maximum after repair value.</span>
					</div>
				</div> -->
				
				<div class="tag">
					<span class="text-bottom">What are the requirements for financing?</span>
					<span class="plusminus">+</span>
				</div>
				<div class="action-body">
					<div class="tag-data">
						<img src="<?php echo base_url('image/finacing.png');?>">
						<span>Our underwriting guidelines require all investors to meet a minimum credit score of 620.</span>
					</div>
				</div>
				
				<div class="tag">
					<span class="text-bottom">How does the process work when acquiring a property?</span>
					<span class="plusminus">+</span>
				</div>
				<div class="action-body">
					<div class="tag-data">
						<img src="<?php echo base_url('image/property.png');?>">
						<span>To acquire a vetted fix and flip property register as an approved buyer, select one of our properties for sale, review the comparables report provided, and adhere to the investor deal scenario for the required down payment and acquisition expenses.</span>
					</div>
				</div>
				
				<div class="tag">
					<span class="text-bottom">Is earnest money required?</span>
					<span class="plusminus">+</span>
				</div>
				<div class="action-body">
					<div class="tag-data">
						<img src="<?php echo base_url('image/money.png');?>">
						<span>Yes. We require earnest money anytime a purchase agreement is executed and before scheduling a closing date. The minimum earnest money required is $2,500 at binding and shall be held in escrow with the closing attorney listed on the purchase agreement.</span>
					</div>
				</div>
				
				<div class="tag">
					<span class="text-bottom">How soon can I close?</span>
					<span class="plusminus">+</span>
				</div>
				<div class="action-body">
					<div class="tag-data">
						<img src="<?php echo base_url('image/soon.png');?>">
						<span>Closings are normally scheduled 7 - 10 days from binding. Additional documentation will be provided to preprare for closing. Down payment and acquisition expenses (cash to close) should be disbursed directly from investor bank account to the closing attorney escrow account prior to the closing date.</span>
					</div>
				</div>
				
				<div class="tag">
					<span class="text-bottom">Can I invest from out of state?</span>
					<span class="plusminus">+</span>
				</div>
				<div class="action-body">
					<div class="tag-data">
						<img src="<?php echo base_url('image/invest.png');?>">
						<span>Yes. mail away closing are avilable for distant or out of state investors.</span>
					</div>
				</div>
				
				<div class="tag">
					<span class="text-bottom">What participation is required from investors?</span>
					<span class="plusminus">+</span>
				</div>
				<div class="action-body">
					<div class="tag-data">
						<img src="<?php echo base_url('image/participation.png');?>">
						<span>Investors may be required to make and/or receive phone calls while undergoing the application process. We also required to investor to advance a minimum via a draw request and then recycled back into the project and repeated until construction is completed.</span>
					</div>
				</div>
				
				<div class="tag">
					<span class="text-bottom">How soon does construction start after closing?</span>
					<span class="plusminus">+</span>
				</div>
				<div class="action-body">
					<div class="tag-data">
						<img src="<?php echo base_url('image/construction.png');?>">
						<span>Project completion timelines can range from 30 to 90  days on average. The scope of work provided is utilized as a guideline for completion. In addition, there are many variables that can disrupt a project such as inspections, materials, weather conditions, etc.</span>
					</div>
				</div>
				
				<div class="tag">
					<span class="text-bottom">How much money can I make?</span>
					<span class="plusminus">+</span>
				</div>
				<div class="action-body">
					<div class="tag-data">
						<img src="<?php echo base_url('image/makemoney.png');?>">
						<span>Our investors are yielding 100% - $150% ROI based on their cash to close minus any seller expenses such as carrying cost, agent commissions, etc.</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<p class="copy-right">&copy; Copyright 2020 | All Rights Reserved</p>
	</div>