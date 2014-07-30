@extends('layouts.master')

@section('content')
<div class="container">
	<!-- Team Member -->
	<div class="row">
		<div class="col-sm-2 blog-sidebar">
			<!-- Author Photo -->
			<div class="author-photo">
				<img src="img/Andre.jpg" alt="Andre">
			</div>
		</div>
	<div class="col-sm-10 pull-right">
		<h3 id="topParagraph">Summary:</h3>
		<p>I am a self-starter who brings a passion for transcending customer expectations by super charging their processes with innovative solutions.  As an experienced professional consultant, web/database developer, Project Management Professional, and veteran Air Force officer (20+ years); I understand how to analyze processes, uncover problems, communicate tasks, and build full stack web solutions.  I taught myself MS Access with which I built many innovative, database applications that successfully automated tedious, time consuming processes.  I am excited to build even smarter solutions using my recently learned web development skills (Laravel, PHP, MySQL, JQuery, Ajax, HTML5, and CSS).</p>

		<h3>Education:</h3>
		<ul>
			<li>Master of Science, Engineering Management, Air Force Institute of Technology</li>
			<li>Bachelor of Science, Electrical Engineering, University of Arkansas</li>
			<li>Air War College (Executive Level Military Leadership Course)</li>
			<li>Air Command & Staff College (Mid-Level Military Leadership Course)</li>
			<li>Squadron Officers School (Entry-Level Military Leadership Course)</li>
		</ul>
		<h3>Experience:</h3>

		<span class='companyName'>MWH Global, <span class='location'>San Antonio, TX</span> </span><span class='dates pull-right'>2012 – 2014</span><br>
		<span class='jobTitle'>Infrastructure Data Management Specialist</span> 
		<p class='accomplishment'>
		Primarily responsible for maintenance, deployment and implementation of new features for the Asset Management information management system (A-File) used by the US Air Force, Air National Guard, and Air Force Reserves.</p>
			<ul class="accomplishments">
				<li class="bulletAccomplish">Led the on-time delivery of several significant client-requested A-File feature upgrades</li>
				<li class="bulletAccomplish">Solved critical MS Access size limitation and data corruption issue by developing and implementing an improved database schema</li>
				<li class="bulletAccomplish">Developed numerous (40+) infrastructure investment data analyses which help AF decision makers better invest constrained resources</li>
				<li class="bulletAccomplish">Designed and built the Asset Management Decision Tool to improve MWH’s ability to analyze, recommend, and present solutions;  conceived/built on my own initiative and time in MS Access </li>
				<li class="bulletAccomplish">Trained hundreds of Air Force engineers to use the A-File and Asset Management principles</li>
			</ul>
		</p>

		<span class='companyName'>Booz Allen Hamilton (Client:  HQ 502 Air Base Wing) <span class='location'>San Antonio, TX</span> </span><span class='dates pull-right'>2010 to 2012</span><br>
		<span class='jobTitle'>Associate (Management Consulting)</span>
		<p class='accomplishment'>
			Supported the Joint Base San Antonio civil engineer community with advisory and assistance services as a member of the 502 Air Base Wing civil engineering headquarters staff.
			<ul class="accomplishments">
				<li class="bulletAccomplish">Developed local guidelines for measuring the Joint Base Common Output Level Standards (JB COLS) across three installations within the 502 ABW of Joint Base San Antonio (JBSA).</li>
				<li class="bulletAccomplish">Developed MS Access solution to collect quarterly inputs and produce automated PowerPoint slide presentation for JB COLS management review meeting.</li>
				<li class="bulletAccomplish">Built MS Access application which implemented the One Page Project Manager concepts and automatically built PowerPoint output; design consideration was to use tools currently installed on government computers</li>
				<li class="bulletAccomplish">Analyzed migrated data from the Army’s Integrated Facilities System (IFS) database to the Air Forces ACES real property database.  Identified anomalies and coordinated with Air Force database experts to implement corrections.</li>
				<li class="bulletAccomplish">Developed MS Access database to manage a comprehensive review of service contracts.  Application was used during meetings to present detailed data and immediately document decisions</li>
			</ul>
		</p>
		<span class='companyName'> <span class='location'>JB Balad, Iraq </span> </span><span class='dates pull-right'>2009 to 2010</span><br>
		<span class='jobTitle'>Facilities Engineer Team Chief</span> 
		<p class='accomplishment'>
			<ul class="accomplishments">
				<li class="bulletAccomplish">Led 9 engineers in rapid development of 129 plans, designs, statements of work, and cost estimates for school refurbishments, canal repairs, road improvements, development plans, bridges
		and other repairs worth $42M in essential infrastructure for the people of Iraq.</li>
				<li class="bulletAccomplish">Developed project management plan for transitioning a limited 90 engineer, decentralized engineering function to a centrally managed, 180 person countrywide engineering support organization which will execute plans for the withdrawal of forces from Iraq.
			</ul>
		</p>

		<span class='companyName'>HQ Air Education Training Command <span class='location'>Randolph AFB, TX</span> </span><span class='dates pull-right'>2008 to 2010</span><br>
		<span class='jobTitle'>Operations Support Section Chief</span> 
		<p class='accomplishment'>
			<ul class="accomplishments">
				<li class="bulletAccomplish">Led 9 program managers in providing policy and oversight to civil engineer organizations at 12 Air Force bases with a total physical plant value of $17.5B.</li>
				<li class="bulletAccomplish">Brought in as lead project manager responsible for planning, organizing, and establishing the civil engineering organization required to support the Department of Defense’s largest Joint Base; combined facility support functions from Lackland AFB, Randolph AFB, and Ft Sam Houston. Developed project management plan, budget plan, personnel training plan, and memorandum of agreement.
			</ul>
		</p>

		<span class='companyName'>US Army Corps of Engineers, Gulf Region Division <span class='location'>Baghdad, Iraq </span> </span><span class='dates pull-right'>2007 to 2007</span><br>
		<span class='jobTitle'>Program Manager</span> 
		<p class='accomplishment'>
			<ul class="accomplishments">
				<li class="bulletAccomplish">Oversaw 7 program managers in the management and execution of a $295M Iraqi Reconstruction Relief Fund construction program supporting Transportation and Communications projects throughout Iraq.</li>
				<li class="bulletAccomplish">Managed a $220M non-construction program that provided equipment and operations & maintenance services. </li>
				<li class="bulletAccomplish">Coordinated with Iraqi ministry officials to restart the $68M Iraqi roads and bridges Project Partnership Agreement.</li>
			</ul>
		</p>

		<span class='companyName'>HQ United States Air Forces Europe<span class='location'>Ramstein AB, GE</span> </span><span class='dates pull-right'>2005 to 2008</span><br>
		<span class='jobTitle'>Chief, Housing Branch</span> 
		<p class='accomplishment'>
			<ul class="accomplishments">
				<li class="bulletAccomplish">Led 5 housing and engineering professionals in managing over 18,000 military housing units.</li>
				<li class="bulletAccomplish">Responsible for developing and executing the $1.5B, 6-year operations, maintenance, lease and construction program for Air Force personnel in Europe.</li>
				<li class="bulletAccomplish">Conducted extensive analyses on housing requirements for Airmen and their families in Europe.</li>
				<li class="bulletAccomplish">Successfully fended off attempt to cut 1,000 on-base houses and saved two military housing construction projects worth $84M from Congressional cut.</li>
				<li class="bulletAccomplish">Assumed lead project manager duties for $132M build to lease program, put project back on schedule, and secured $58M in loan guarantees from German government officials.</li>
				<li class="bulletAccomplish">Developed project management plan, request for proposal, and strategy briefings.</li>
			</ul>
		</p>

		<span class='companyName'>AF Civil Engineer & Services School<span class='location'>Wright Patterson AFB, OH</span> </span><span class='dates pull-right'>2003 to 2005</span><br>
		<span class='jobTitle'>Director, Readiness Management Dept</span> 
		<p class='accomplishment'>
			<ul class="accomplishments">
				<li class="bulletAccomplish">Supervised 7 instructors in the delivery of upper-level graduate professional continuing education supporting a worldwide community of 60,000 engineering professionals. </li>
				<li class="bulletAccomplish">Guided
		an overhaul of the initial wartime engineering skills course which yielded an immediate savings of $16,000 per offering. </li>
				<li class="bulletAccomplish">Recognized by the Commandant of the Air Force Institute of Technology as the #1 field grade officer (Majors & Lieutenant Colonels) for 2003.</li>
			</ul>
		</p>
		<h3>Projects:</h3>
		<p class='accomplishment'>
			<ul class="accomplishments">
			<li class="bulletAccomplish">Tweets for Charity (Laravel, PHP, MySQL, HTML, CSS, Ajax, JQuery, and Bootstrap)</li>
			<li class="bulletAccomplish">AaIT Innovations Web Site ((Laravel, PHP, MySQL, HTML, CSS, and Bootstrap)
</li>
			<li class="bulletAccomplish">Whack a Mole (HTML, CSS, JQuery), Black Jack, Anagram, Diceware, Play Parser, etc (PHP)
</li>
			<li class="bulletAccomplish">Asset Management Decision Tool (MS Access, MS Excel, MS PowerPoint)
</li>
			<li class="bulletAccomplish">Portfolio Generator (MS Access, MS PowerPoint)
</li>
			<li class="bulletAccomplish">Dashboard Generator (MS Access, MS Excel)
</li>
			<li class="bulletAccomplish">One Page Project Manager (MS Access, MS PowerPoint)
</li>
			<li class="bulletAccomplish">JB COLS Tool (MS Access, MS PowerPoint)
</li>
			<li class="bulletAccomplish">CPVF Tool (MS Access, MS PowerPoint)
</li>
			<li class="bulletAccomplish">MILCON Manager (MS Access)
</li>
			<li class="bulletAccomplish">FindlT (MS Access)
</li>
			<li class="bulletAccomplish">ReportIT (MS Access)
</li>
			<li class="bulletAccomplish">Superior Performers Tool (MS Access)
</li>
			<li class="bulletAccomplish">ATSO Event Pro (MS Access, MS Excel, MS PowerPoint)
</li>
			<li class="bulletAccomplish"><strong>Let me add YOUR project to the list!!</strong>
</li>

			</ul>

		
	
	</div>

</div>
</div>
@stop