<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>

		<title>Data-Design-Okayplayer</title>
	</head>
	<body>

		<!-- begin persona -->

		<!-- this is the header -->
		<h2>Persona</h2>

		<!-- this is the main page content -->
		<main>

			<!-- begin description of persona -->
			<section>
			<img src="img/images.jpeg" alt="images"/>
				<ul>
					<li>Name: Ocupada Amiga </li>
					<li>Age: 50</li>
					<li>Profession: Busy professional who is the CEO of a fortune 500 company. She has an unsatiable hunger for information in regards to her favorite thing outside of her professional life, music. She has a reputation for traveling the globe to attend concerts.</li>
					<li>Technology: Primarily an iPhone user. Also uses other apple products. </li>
					<li>Attitudes and Behaviors: She is very busy.</li>
				</ul>
			</section>

			<!-- begin needs, goals and features -->

		<!-- this is the header -->
		<h2>Needs, Goals And Features</h2>

		<!-- begin description of needs, goals and features -->
			<section>
				<ul>
					<li>Have highlighted features standout</li>
					<li>Lots of information in a short period of time</li>
					<li>Stay up to date</li>
					<li>Create links to all related stories</li>
					<li>"I don't have a lot of time."</li>
					<li>"Use more pics."</li>
					<li>Persona may like more stories about their favorite artists.</li>
				</ul>
			</section>

			<!-- begin use case -->

			<!-- this is the header -->
			<h2>Use Case</h2>

		<!-- begin description of use case -->
			<section>
				<p>Ocupada has a free moment and accesses our site via her iPhone. She scrolls and scans the page for posts that interest her. Once she locates a post of interest she selects the post. She has the option of leaving a comment. She has the option of being linked to related posts.</p>
			</section>

			<!-- begin interaction flow -->

			<!-- this is the header -->
			<h2>Interaction Flow</h2>

			<!-- begin description of interaction flow -->
			<section>
				<ul>
					<li>The user gets a free moment</li>
					<li>The user utilizes her phone to access our site</li>
					<li>The user scans page using finger gestures</li>
					<li>The user selects posts that catches her eye</li>
					<li>The user leaves a comment</li>
				</ul>
			</section>

			<!-- begin entities -->

			<!-- this is the header -->
			<h2>Entities</h2>

			<!-- begin description of entities -->
			<section>
				<ul>
					<li>Post</li>
					<li>Profile</li>
					<li>Comment</li>
				</ul>
			</section>

			<!-- begin conceptual model -->

			<!-- this is the header -->
			<h2>Conceptual Model</h2>

			<!-- begin description of conceptual model -->
			<section>
				<ul>
					<h3>Post</h3>
						<li>postDateTime</li>
						<li>postAuthor</li>
						<li>postTitle</li>
						<li>postContent</li>
						<li>postId (primary key)</li>
					<h3>Profile</h3>
						<li>profileId (primary key)</li>
						<li>profileName</li>
						<li>profileEmail</li>
					<h3>Comment</h3>
						<li>commentId (primary key)</li>
						<li>commentProfileId (primary key)</li>
						<li>commentPostId (foreign key)</li>
						<li>commentContent</li>
						<li>commentDateTime</li>
				</ul>
			</section>
		</main>
	</body>
</html>