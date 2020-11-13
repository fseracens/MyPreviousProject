<?php
	//User login into the system
    if (isset($_POST['login']) && !empty($_POST['user']) && !empty($_POST['pass'])) {
		
		//Check username and password
        if ($_POST['user'] == 'Programmer' && $_POST['pass'] == 'cpt211') {
            $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time();
            $_SESSION['username'] = 'Programmer';
        }
		
		//If the username and password is invalid
        else 
        {
            echo '<script type="text/JavaScript">
            alert("Username or password is invalid. Please try again");
            </script>';
            sleep(2);
        }
    }
?>

<!--Start HTML code-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />	
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Assignment 2 CPT211</title>				<!--Title-->
    <link rel="stylesheet" href="style.css" />		<!--Link with CSS code file-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>
    <div class="container">
      <nav class="navbar">
        <ul>
          <li><!--Home Button-->
            <a
              href="#Home"						
              style="
                font-family: Century Gothic;
                font-size: 16px;
                font-weight: 600;
              "
              >Home</a
            >
          </li>
          <li><!--About Button-->
            <a
              href="#About"
              style="
                font-family: Century Gothic;
                font-size: 16px;
                font-weight: 600;
              "
              >About Us</a
            >
          </li>
          <li><!--Essay Writing Button-->
            <a
              href="#EssayWriting"
              style="
                font-family: Century Gothic;
                font-size: 16px;
                font-weight: 600;
              "
              >Essay Writing</a
            >
          </li>
          <li><!--Job Interview Button-->
            <a
              href="#Job"
              style="
                font-family: Century Gothic;
                font-size: 16px;
                font-weight: 600;
              "
              >Job Interview</a
            >
          </li>
          <li><!--Oral Presentation Button-->
            <a
              href="#OralPresentation"
              style="
                font-family: Century Gothic;
                font-size: 16px;
                font-weight: 600;
              "
              >Oral Presentation</a
            >
          </li>
        </ul><!--Sign In Button-->
        <?php if (!isset($_SESSION['username'])) : ?>
        <button
          onclick="document.getElementById('modal-wrapper').style.display='block'"
          class="signinpage"
        >
          Sign In
        </button>
        <?php    else : ?>
          <style>a.nani{font-family: New Times Roman; font-size: 20px; font-weight: 600;}</style>
         <h4 style="margin: 0 1rem;
                    padding: 1rem;
                    position: absolute;
                    top: -1px;
                    right: 30px;font-family: Arial;
                font-size: 16px;
                font-weight: 600;">Hi, <?php echo $_SESSION['username']; ?><a class="nani" href="logout.php" style="color: white; font-family: Arial; font-size: 16px;">Logout</a></h4><!--If user Sign In, the Log Out button will be display-->
        <?php endif ?>
      </nav>
		
	  <!--Pop up sign in-->
      <div id="modal-wrapper" class="modal">
        <form class="modal-content animate" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
          <div class="imgcontainer">
            <span
              onclick="document.getElementById('modal-wrapper').style.display='none'"
              class="close"
              title="Close PopUp"
              >&times;</span
            >
            <img src="usm.png" alt="Avatar" class="avatar" />
            <h1
              style="
                text-align: center;
                color: #52307c;
                font-size: 18px;
                font-family: Calibri;
                font-weight: bold;
              "
            >
              Don't miss your opportunity to get great news from us.
            </h1>
          </div>

          <div class="container">
            <input type="text" placeholder="Username = Programmer" name="user" />
            <input type="password" placeholder="Password = cpt211" name="pass" />
            <button type="submit" class="butlogin" name="login">Login</button><!--Login button in pop up sign in-->
    
          </div>
        </form>
      </div>
		
		<!--Home section-->
      <section id="Home">
        <div class="img1">
          <img src="logo.png" width="145" height="80" alt="" />
        </div>
        <img src="home-background.jpg" alt="" class="homeBackground" />
		
		<!--Home main page words of encouragement-->
        <div class="text-wrapper">
          <h1 class="headline">
            The English language is a work<br />
            in progress. Have fun with it!
          </h1>
			
		  <!--LSP 404-->
          <h2 class="sub-headline">
            <br />LSP404 <br />(TECHNICAL AND ENGINEERING ENGLISH)
          </h2>
        </div>
        <div class="boxTopic">
          <div class="TopicOne"><!--Essay writing box-->
            <img src="topic-one-picture-box.jpg" alt="" class="EssayBox" />
            <div class="layerOnTopicOne">
              <p id="titleTopicOne">Essay Writing</p>
              <p2 id="descriptionTopicOne"><!--Explanation-->
                Essays are common in middle school, high school and college. You
                may even need to write essays in the business world (although
                <br />they are usually called "reports" at that point). An essay
                is defined <br />as "a short piece of writing that expresses
                information as well as the writer's opinion."
              </p2>
            </div>
          </div>
          <div class="TopicTwo"><!--Job Interview & Resume box-->
            <img src="topic-two-picture-box.jpg" alt="" class="JobBox" />
            <div class="layerOnTopicTwo">
              <p id="titleTopicTwo">Job Interview & Resume</p>
              <p2 id="descriptionTopicTwo"><!--Explanation-->
                A resume is a written compilation of your education, work
                experience, credentials, and accomplishments. Most professional
                positions <br />require applicants to submit a resume and cover
                letter as part of the application process.
              </p2>
            </div>
          </div>
          <div class="TopicThree"><!--Oral Presentation box-->
            <img src="topic-three-picture-box.png" alt="" class="OralBox" />
            <div class="layerOnTopicThree">
              <p id="titleTopicThree">Oral Presentation</p>
              <p2 id="descriptionTopicThree"><!--Explanation-->
                An oral presentation is a short talk on a set topic given to a
                tutorial or seminar group. In an oral presentation one (or more)
                students give a talk to a tutorial group and present views on a
                topic based on their readings or research. The rest of the group
                then joins in a discussion <br />of the topic.
              </p2>
            </div>
          </div>
        </div>
      </section>
      <section id="About" ><!--About us menu-->
        <h1 id="headline2">About Us</h1>
		  
        <div class="card " data-aos="fade-up"><!--Muhd Fakhruddin profile-->
          <h3 class="titleProfile">Field-Marshall</h3>
          <div class="bar">
            <div class="emptybar"></div>
            <div class="filledbar"></div>
          </div>
          <div class="profile-detail">
            <img src="pakufinal.jpg" alt="" />
            <h2 class="name">Muhammad Fakhruddin</h2>
            <h3 class="post-title">Leader</h3>
            <p class="post-description">
              Muhd Fakhruddin bin Norulhaizy<br />
              Majoring in Multimedia Computing<br />
              141162<br />
            </p>
          </div>
        </div>
		  
        <div class="card" data-aos="fade-down"><!--Azwaar Khan profile-->
          <h3 class="titleProfile">General</h3>
          <div class="bar">
            <div class="emptybar"></div>
            <div class="filledbar"></div>
          </div>
          <div class="profile-detail">
            <img src="azwaarfinal.jpg" alt="" />
            <h2 class="name">Azwaar Khan</h2>
            <h3 class="post-title">Graphic Designer</h3>
            <p class="post-description">
              Azwaar Khan bin Azlim Khan <br />
              Majoring in Artificial Intelligence<br />
              141878<br />
            </p>
          </div>
        </div>
		  
        <div class="card" data-aos="fade-up"><!--Muhd Faikal profile-->
          <h3 class="titleProfile">Lieutenant-General</h3>
          <div class="bar">
            <div class="emptybar"></div>
            <div class="filledbar"></div>
          </div>
          <div class="profile-detail">
            <img src="faikalfinal.jpg" alt="" />
            <h2 class="name">Muhammad Faikal</h2>
            <h3 class="post-title">JavaScript Programmer</h3>
            <p class="post-description">
              Muhammad Faikal Izham bin Abdul Rahim<br />
              Majoring in Network Computing<br />
              141969<br />
            </p>
          </div>
        </div>
		  
        <div class="card" data-aos="fade-down"><!--Muhd Amirul profile-->
          <h3 class="titleProfile">Major</h3>
          <div class="bar">
            <div class="emptybar"></div>
            <div class="filledbar"></div>
          </div>
          <div class="profile-detail">
            <img src="bobfinal.jpg" alt="" />
            <h2 class="name">Muhammad Amirul</h2>
            <h3 class="post-title">Programmer</h3>
            <p class="post-description">
              Muhammad Amirul bin Surali<br />
              Majoring in Network Computing<br />
              142739<br />
            </p>
          </div>
        </div>
		  
        <div class="card" data-aos="fade-up"><!--Muhd Aiman profile-->
          <h3 class="titleProfile">Captain</h3>
          <div class="bar">
            <div class="emptybar"></div>
            <div class="filledbar"></div>
          </div>
          <div class="profile-detail">
            <img src="aimanfinal.jpg" alt="" />
            <h2 class="name">Muhamad Aiman</h2>
            <h3 class="post-title">PHP Programmer</h3>
            <p class="post-description">
              Muhamad Aiman Zikri bin Muhamad Asri<br />
              Majoring in Network Computing<br />
              141361<br />
            </p>
          </div>
        </div>
		  
      </section><!--Essay writing slide show-->
      <section id="EssayWriting">
        <div id="slideshow1" class="slideshow-container">
          <div class="mySlides fade">
            <div class="numbertext">1 / 11</div><!--Display number of slide had been played-->
            <img
              src="essaywrite.jpg"
              class="essaywrite"
              style="width: 100%; height: 100%;"
              alt=""
            />
            <div class="text">Essay Writing</div><!--Main Slide Page-->
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">2 / 11</div><!--Display number of slide had been played-->
            <div class="secondessay" style="width: 100%; height: 100%;"></div>
            <div class="text">Format of the Essay</div><!--Slide Title-->
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">3 / 11</div><!--Display number of slide had been played-->
            <div class="essayintro" style="width: 100%; height: 100%;"></div>
            <div
              class="text"
              style="font-size: 40px; position: absolute; top: 180px;"
            >
              Introduction
            </div>
            <div class="text" style="font-size: 30px;">
              <br style="line-height: 2;" />
              <ul style="text-align: left; margin-left: 200px;">
                <li><!--Explanation of introduction essay-->
                  Guides your reader into the paper by introducing the topic. It
                  should begin <br />with a hook that catches the reader’s
                  interest. This hook could be a quote, <br />an analogy, a
                  question, or others.
                </li>
                <li>
                  Should give some background information on the topic. The
                  ideas within the <br />introduction should be general enough
                  for the reader to understand the main <br />claim
                </li>
                <li>
                  Then, it gradually become more specific to lead into the
                  thesis statement.
                </li>
              </ul>
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">4 / 11</div><!--Display number of slide had been played-->
            <div class="essayintro" style="width: 100%; height: 100%;"></div>
            <div
              class="text"
              style="font-size: 40px; position: absolute; top: 180px;"
            >
              Thesis Statement
            </div>
            <div class="text" style="font-size: 30px;">
              <br style="line-height: 0.5;" />
              <ul style="text-align: center;"><!--Explanation of thesis statement-->
                <li>Sets limits on the topic.</li>
                <li>Indicate the organization of the essay.</li>
                <li>States the main idea or argument of the essay.</li>
                <li>
                  A road map for the entire essay by showing the readers
                  <br />what you have to say.
                </li>
              </ul>
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">5 / 11</div><!--Display number of slide had been played-->
            <div class="essayintro" style="width: 100%; height: 100%;"></div>
            <div
              class="text"
              style="font-size: 40px; position: absolute; top: 180px;"
            >
              Body
            </div>
            <div class="text" style="font-size: 30px;">
              <br style="line-height: 0.5;" />
              <ul style="text-align: left; margin-left: 200px;"><!--Explanation of essay body-->
                <li>
                  Supports the main points presented in the thesis. Each point
                  is developed by <br />one or more paragraphs and supported
                  with specific details.
                </li>
                <li>
                  Can include support from research and experiences, depending
                  on the <br />assignment.
                </li>
                <li>
                  The author’s own analysis and discussion of the topic ties
                  ideas together and <br />draws conclusions that support the
                  thesis.
                </li>
              </ul>
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">6 / 11</div><!--Display number of slide had been played-->
            <div class="essayintro" style="width: 100%; height: 100%;"></div>
            <div
              class="text"
              style="font-size: 40px; position: absolute; top: 180px;"
            >
              Conclusion
            </div>
            <div class="text" style="font-size: 30px;">
              <ul style="text-align: left; margin-left: 300px;"><!--Explanation of essay conclusion-->
                <li>
                  Brings together all the main points of the essay. It refers
                  back to <br />the thesis statement and leaves readers with a
                  final thought.
                </li>
                <li>Address the implications of the argument.</li>
                <li>
                  New topics or ideas that were not developed in the paper
                  should <br />not be introduced.
                </li>
              </ul>
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">7 / 11</div><!--Display number of slide had been played-->
            <div class="secondessay" style="width: 100%; height: 100%;"></div>
            <div class="text">Parts of a Paragraph</div><!--Part of paragraph essay-->
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">8 / 11</div><!--Display number of slide had been played-->
            <div class="essayintro" style="width: 100%; height: 100%;"></div>
            <div
              class="text"
              style="font-size: 40px; position: absolute; top: 180px;"
            >
              Topic Sentence
            </div>
            <div class="text" style="font-size: 30px;">
              <ul style="text-align: left; margin-left: 250px;"><!--Explanation of topic sentence-->
                <li>
                  The main idea of each paragraph is stated in a topic sentence
                  that shows <br />how the idea relates to the thesis.
                </li>
                <li>
                  The topic sentence is placed at the beginning of a paragraph,
                  but the <br />location and placement may vary according to
                  individual organization <br />and audience expectation.
                </li>
              </ul>
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">9 / 11</div><!--Display number of slide had been played-->
            <div class="essayintro" style="width: 100%; height: 100%;"></div>
            <div
              class="text"
              style="font-size: 40px; position: absolute; top: 180px;"
            >
              Supporting Details
            </div>
            <div class="text" style="font-size: 30px;">
              <ul style="text-align: left; margin-left: 350px;"><!--Explanation of supporting details-->
                <li>Elaborate upon the topic sentences and thesis.</li>
                <li>
                  Supporting details should be drawn from a variety of sources
                  <br />determined by the assignment guidelines and genre, and
                  <br />should include the writer’s own analysis.
                </li>
              </ul>
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">10 / 11</div><!--Display number of slide had been played-->
            <div class="essayintro" style="width: 100%; height: 100%;"></div>
            <div
              class="text"
              style="font-size: 40px; position: absolute; top: 180px;"
            >
              Concluding Sentence
            </div>
            <div class="text" style="font-size: 30px;">
              <ul style="text-align: left; margin-left: 350px;"><!--Explanation of concluding sentence-->
                <li>
                  Each paragraph should end with a final statement that
                  <br />brings together the ideas brought up in the paragraph.
                </li>
                <li>
                  Sometimes, it can serve as a transition to the next paragraph.
                </li>
              </ul>
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">11 / 11</div><!--Display number of slide had been played-->
            <div class="essayintro" style="width: 100%; height: 100%;"></div>
            <div
              class="text"
              style="font-size: 40px; position: absolute; top: 180px;"
            >
              Unity and Coherence
            </div>
            <div class="text" style="font-size: 30px;">
              <ul style="text-align: left; margin-left: 300px;">
                <br style="line-height: 3;" /><!--Explanation of unity and coherence sentence-->
                <li>
                  Unity is the continuity of a single idea (the thesis)
                  throughout the <br />essay. Each detail and example should
                  develop logically and refer <br />back to the original focus.
                </li>
                <li>
                  Coherence means that each point should be linked to the
                  previous and <br />following points to help the essay flow and
                  progress logically and clearly. <br />An easy way to link
                  paragraphs together is through transitions in <br />each
                  paragraph’s topic sentence.
                </li>
              </ul>
            </div>
          </div>

          <!--End-->
          <div class="mySlides fade">
            <div class="secondjob" style="width: 100%; height: 100%;"></div>
            <div class="text">The End</div><!--The End slide-->
          </div>
          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1,slideshow1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1,slideshow1)">&#10095;</a>
		  <!--Current slide-->
          <div style="text-align: center;">
            <span class="dot" onclick="currentSlide(1, slideshow1)"></span>
            <span class="dot" onclick="currentSlide(2, slideshow1)"></span>
            <span class="dot" onclick="currentSlide(3, slideshow1)"></span>
          </div>
        </div>
      </section><!--End of Essay slides-->
		
      <section id="Job"><!--Job slide-->
        <!-- Slideshow container -->
        <div id="slideshow2" class="slideshow-container">
          <!--Cover Letter-->
          <div class="mySlides fade">
            <div class="numbertext">1 / 16</div><!--Display number of slide had been played-->
            <img
              src="letters-letter-old-photos-vintage.jpg"
              class="firstjob"
              style="width: 100%; height: 100%;"
              alt=""
            />
            <div class="text">Job Interview</div><!--Job Interview slide-->
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">2 / 16</div><!--Display number of slide had been played-->
            <div class="secondjob" style="width: 100%; height: 103.5%;"></div>
            <div class="text">Writing a Cover Letter</div><!--Writing a Cover Letter slide-->
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">3 / 16</div><!--Display number of slide had been played-->
            <div class="thirdjob" style="width: 100%; height: 103.5%;"></div>
            <div class="text" style="font-size: 30px;"><!--Writing a Cover Letter explanation-->
              Give prospective employers sufficient information for them to
              decide whether they would <br />consider you for an interview.
              Letter and resume will reflect your personality, attention
              <br />to detail, communication skills, ethusiasm, intellect and
              your interest.<br /><br />You must let the reader know:<br /><br />1.
              Why you fit in with that company?<br />2. Why you want to work at
              that specific company?<br />3. How you qualify for the position to
              which you are applying?
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">4 / 16</div><!--Display number of slide had been played-->
            <div class="thirdjob" style="width: 100%; height: 103.5%;"></div>
            <div class="text" style="font-size: 75px;"><!--Content of cover letter slide-->
              Contents of a Cover Letter
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">5 / 16</div><!--Display number of slide had been played-->
            <div
              class="thirdjob"
              style="width: 100%; height: 103.5%; font-size: 30px;"
            ></div>
            <div
              class="text"
              style="font-size: 40px; position: absolute; top: 180px;"
            >
              Introduction
            </div>
            <div class="text" style="font-size: 30px;"><!--Intoduction explanation-->
              <ul>
                <li>State that you are applying the job.</li>
                <li>State where you found the job advertisement.</li>
              </ul>
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">6 / 16</div><!--Display number of slide had been played-->
            <div class="thirdjob" style="width: 100%; height: 103.5%;"></div>
            <div
              class="text"
              style="font-size: 40px; position: absolute; top: 150px;"
            >
              Body of the Letter
            </div>
            <div class="text" style="font-size: 30px;"><!--Body of letter explanation-->
              <br style="line-height: 4;" />Paragraph 2: Pick the most relevant
              qualifications listed in <br />your resume and discuss them in
              detail.<br /><br />Paragraph 3: Demonstrate how you can benefit
              the company with your <br />experience and skills learnt from your
              participation in extra-curricular activities.<br /><br />Paragraph
              4: Explain how you can transfer your skills learnt and experience
              gained <br />your industrial training to your would-be employer.
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">7 / 16</div><!--Display number of slide had been played-->
            <div
              class="thirdjob"
              style="width: 100%; height: 103.5%; font-size: 30px;"
            ></div>
            <div
              class="text"
              style="font-size: 40px; position: absolute; top: 180px;"
            >
              *Additional Paragraph
            </div>
            <div class="text" style="font-size: 30px;">
              <ul style="text-align: left; margin-left: 260px;"><!--Additional paragraph explanation-->
                <li>
                  Volunteer work on a regular basis: State the charitable
                  organisation <br />you are involved in, what you have been
                  doing, duration your <br />involvement and amount of time
                  devoted to doing the volunteer work.
                </li>
                <li>
                  Special skills: State the special skills you have (music,
                  sports, arts, etc.), <br />award and prizes received and how
                  this skills will help their company.
                </li>
              </ul>
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">8 / 16</div><!--Display number of slide had been played-->
            <div
              class="thirdjob"
              style="width: 100%; height: 103.5%; font-size: 30px;"
            ></div>
            <div
              class="text"
              style="font-size: 40px; position: absolute; top: 180px;"
            >
              Conclusion
            </div>
            <div class="text" style="font-size: 30px;"><!--Conclusion paragraph explanation-->
              <ul>
                <li>
                  Request for an interview and state where and when you can be
                  reached.
                </li>
                <li>
                  Express your willingness to come to an interview or supply
                  further information.
                </li>
                <li>
                  Close by thanking your reader for his or her time and
                  consideration.
                </li>
              </ul>
            </div>
          </div>

          <!--Resume-->
          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">9 / 16</div><!--Display number of slide had been played-->
            <div class="secondjob" style="width: 100%; height: 103.5%;"></div>
            <div class="text">Writing an Effective Resume</div><!--Writing an Effective Resume slide-->
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">10 / 16</div><!--Display number of slide had been played-->
            <div class="thirdjob" style="width: 100%; height: 103.5%;"></div>
            <div class="text" style="font-size: 30px;"><!--Writing an Effective Resume explanation-->
              A resume is a persuasive summary of your qualifications for
              employment.<br />Having a resume makes you look well-organised and
              prepared.<br /><br />How employers use resumes:
              <ol style="text-align: left; margin-left: 250px;">
                <br />
                <li>
                  To decide whom to interview. Resume are used to screen out
                  applicants.
                </li>
                <li>
                  Employers assume that your cover letter and resume represent
                  your <br />best work.
                </li>
                <li>
                  Interviews usually re-read your resume before the interview to
                  refresh <br />their memory.
                </li>
                <li>
                  The search committee skims resumes. A resume gets a quick
                  glance <br />for 8-30 seconds. Use layout and visual impact to
                  highlight your credentials.
                </li>
              </ol>
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">11 / 16</div><!--Display number of slide had been played-->
            <div class="thirdjob" style="width: 100%; height: 103.5%;"></div>
            <div class="text" style="font-size: 75px;"><!--Guidelines for Resume slides-->
              Guidelines for Resume
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">12 / 16</div><!--Display number of slide had been played-->
            <div
              class="thirdjob"
              style="width: 100%; height: 103.5%; font-size: 30px;"
            ></div>
            <div
              class="text"
              style="font-size: 40px; position: absolute; top: 180px;"
            >
              Length
            </div>
            <div class="text" style="font-size: 30px;"><!--Resume length slides-->
              The average resume is now two pages long. Staple your second page
              to the <br />first page. Remember to put your name and 'Page 2' or
              'Cont.' on the second page.
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">13 / 16</div><!--Display number of slide had been played-->
            <div
              class="thirdjob"
              style="width: 100%; height: 103.5%; font-size: 30px;"
            ></div>
            <div
              class="text"
              style="font-size: 40px; position: absolute; top: 180px;"
            >
              Emphasis
            </div>
            <div class="text" style="font-size: 30px;"><!--Emphasis slides-->
              <ul>
                The things you have done that:
                <br style="line-height: 1.5;" />
                <li>Are most relevant to the position applied</li>
                <li>Show your superiority to other applicants</li>
                <li>Are recent</li>
              </ul>
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">14 / 16</div><!--Display number of slide had been played-->
            <div
              class="thirdjob"
              style="width: 100%; height: 103.5%; font-size: 30px;"
            ></div>
            <div
              class="text"
              style="font-size: 40px; position: absolute; top: 180px;"
            >
              Details
            </div>
            <div class="text" style="font-size: 30px;"><!--Resume details slides-->
              <ul>
                <li>Provide evidence to support your claims</li>
                <li>Convince the interviewer</li>
                <li>Make you stand out from the rest</li>
              </ul>
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">15 / 16</div><!--Display number of slide had been played-->
            <div
              class="thirdjob"
              style="width: 100%; height: 103.5%; font-size: 30px;"
            ></div>
            <div
              class="text"
              style="font-size: 40px; position: absolute; top: 280px;"
            >
              Writing Style
            </div>
            <div class="text" style="font-size: 30px;"><!--Resume writing style slides-->
              Be as concise as possible without sacrificing content
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">16 / 16</div><!--Display number of slide had been played-->
            <div
              class="thirdjob"
              style="width: 100%; height: 103.5%; font-size: 30px;"
            ></div>
            <div
              class="text"
              style="font-size: 40px; position: absolute; top: 200px;"
            >
              Layout, Printing and Paper
            </div>
            <div class="text" style="font-size: 30px;"><!--Resume's Layout, Printing and Paper slides-->
              <ul>
                <li>Use A4 white and good quality paper</li>
                <li>Print using a reliable quality printer</li>
                <li>Avoid loud colours and abstract designs</li>
              </ul>
            </div>
          </div>

          <!--End-->
          <div class="mySlides fade">
            <div class="secondjob" style="width: 100%; height: 103.5%;"></div>
            <div class="text">The End</div><!--The End slides-->
          </div>
          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1,this.parentNode)">&#10094;</a>
          <a class="next" onclick="plusSlides(1,this.parentNode)">&#10095;</a>
		  <!--Current slide-->
          <div style="text-align: center;">
            <span class="dot" onclick="currentSlide(1, slideshow2)"></span>
            <span class="dot" onclick="currentSlide(2, slideshow2)"></span>
            <span class="dot" onclick="currentSlide(3, slideshow2)"></span>
          </div>
        </div>
        <br />
      </section><!--End of Resume slides-->
		
      <section id="OralPresentation"><!--Oral presentations slides start-->
        <!-- Slideshow container -->
        <div id="slideshow3" class="slideshow-container">
          <!--Present-->
          <div class="mySlides fade">
            <div class="numbertext">1 / 18</div><!--Display number of slide had been played-->
            <img
              src="public-speaking.jpeg"
              class="oral"
              style="width: 100%; height: 100%;"
              alt=""
            />
            <div class="text">Oral Presentation</div><!--Oral presentations slides main-->
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">2 / 18</div><!--Display number of slide had been played-->
            <div class="secondessay" style="width: 100%; height: 100%;"></div>
            <div class="text">Preparing an Oral Presentation</div><!--Oral presentations slides-->
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">3 / 18</div><!--Display number of slide had been played-->
            <div class="oralback" style="width: 100%; height: 100%;"></div>
            <div
              class="text"
              style="font-size: 75px; position: absolute; top: 280px;"
            ><!--Oral presentations step 1 explanation-->
              <br />Step 1: <br />Choosing the Suitable Topic
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">4 / 18</div><!--Display number of slide had been played-->
            <div
              class="oralback"
              style="width: 100%; height: 100%; font-size: 30px;"
            ></div>
            <div class="text" style="font-size: 30px;"><!--Oral presentations step 1 explanation-->
              <br />
              <ul>
                You need to be very clear about what exactly it is that you want
                to talk.<br />
                There are three potential ares that can help you to come with a
                topic:
                <ul style="text-align: left; margin-left: 350px;">
                  <li>
                    One area is regarding areas that you know a lot about.
                  </li>
                  <li>
                    Subjects that are of interest to you and which you would
                    <br />like to learn more about.
                  </li>
                  <li>Subjects or issues on which you hold strong views.</li>
                </ul>
              </ul>
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">5 / 18</div><!--Display number of slide had been played-->
            <div class="oralback" style="width: 100%; height: 100%;"></div>
            <div
              class="text"
              style="font-size: 75px; position: absolute; top: 280px;"
            ><!--Oral presentations step 2 explanation-->
              <br />Step 2: <br />Fine Tune your Topic <br />(Determine General
              Purpose)
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">6 / 18</div><!--Display number of slide had been played-->
            <div
              class="oralback"
              style="width: 100%; height: 100%; font-size: 30px;"
            ></div>
            <div class="text" style="font-size: 30px;">
              <br />
              <ul><!--Oral presentations step 2 explanation-->
                You have to decide whether the purpose of your speech is:
                <ul style="text-align: left; margin-left: 500px;">
                  <li>Inform your audience.</li>
                  <li>Persuade them of a certain point of view.</li>
                  <li>Stand on an issue.</li>
                </ul>
              </ul>
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">7 / 18</div><!--Display number of slide had been played-->
            <div class="oralback" style="width: 100%; height: 100%;"></div>
            <div
              class="text"
              style="font-size: 75px; position: absolute; top: 280px;"
            ><!--Oral presentations step 3 explanation-->
              <br />Step 3: <br />Fine Tune your Topic <br />
              (Determine Specific Purpose)
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">8 / 18</div><!--Display number of slide had been played-->
            <div
              class="oralback"
              style="width: 100%; height: 100%; font-size: 30px;"
            ></div>
            <div class="text" style="font-size: 30px;">
              <br />
              <ul><!--Oral presentations step 3 explanation-->
                You need to focus on one aspect of your topic, for example:
                <ul style="text-align: left; margin-left: 400px;">
                  <li>
                    Topic: The Penn State Football Team<br />General Purpose: To
                    inform<br />Specific Purpose: To inform my audience how
                    the<br />football team prepares each week for its next game
                  </li>
                </ul>
              </ul>
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">9 / 18</div><!--Display number of slide had been played-->
            <div class="oralback" style="width: 100%; height: 100%;"></div>
            <div
              class="text"
              style="font-size: 75px; position: absolute; top: 280px;"
            ><!--Oral presentations step 4 explanation-->
              <br />Step 4: <br />Fine Tune your Topic <br />
              (Phrasing the Central Idea)
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">10 / 18</div><!--Display number of slide had been played-->
            <div
              class="oralback"
              style="width: 100%; height: 100%; font-size: 30px;"
            ></div>
            <div class="text" style="font-size: 30px;">
              <br />
              <ul><!--Oral presentations step 4 explanation-->
                <li style="text-align: left; margin-left: 273px;">
                  The Specific Purpose of a speech is what you hope to
                  accomplish.
                </li>
                <li style="text-align: left; margin-left: 273px;">
                  Central idea is what you expect to say. For example:
                </li>
                <ul style="text-align: left; margin-left: 360px;">
                  <li>
                    Topic: The Penn State football team<br />General Purpose: To
                    inform<br />Specific Purpose: To inform my audience how
                    the<br />
                    football team prepares each week for its next game<br />Central
                    Idea: Preparing for each weeks football game<br />
                    involves five major steps that begin almost as soon as
                    <br />
                    the previous game is over.
                  </li>
                </ul>
              </ul>
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">11 / 18</div><!--Display number of slide had been played-->
            <div class="oralback" style="width: 100%; height: 100%;"></div>
            <div
              class="text"
              style="font-size: 75px; position: absolute; top: 280px;"
            ><!--Oral presentations step 5 explanation-->
              <br />Step 5: <br />Developing the Body of Your Speech
              <br />(Gathering Materials for your Speech)
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">12 / 18</div><!--Display number of slide had been played-->
            <div
              class="oralback"
              style="width: 100%; height: 100%; font-size: 30px;"
            ></div>
            <div class="text" style="font-size: 30px;">
              <br />
              <ul style="text-align: left; margin-left: 180px;">
                <li><!--Oral presentations step 5 explanation-->
                  You need to know what material to gather in order to build the
                  content of your speech.
                </li>
                <li>
                  You need to developed relevant details for your central ideas
                  (identifies the main points).
                </li>
                <li>
                  Do thorough preparation to build the content of your speech
                  with relevant <br />supporting details.
                </li>
                <li>There are few ways of going about this:</li>
                <ul style="text-align: left; margin-left: 100px;">
                  <li>Search the archives of your personal experiences</li>
                  <li>Read books and magazines</li>
                  <li>Surf the internet</li>
                  <li>Speak to persons knowledgeable about your topic</li>
                  <li>
                    Reflect on the material that you have gathered to derive
                    insights <br />and draw connections
                  </li>
                  <li>
                    Organize the material that you have gathered into an outline
                  </li>
                </ul>
              </ul>
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">13 / 18</div><!--Display number of slide had been played-->
            <div class="oralback" style="width: 100%; height: 100%;"></div>
            <div
              class="text"
              style="font-size: 75px; position: absolute; top: 280px;"
            ><!--Oral presentations step 6 explanation-->
              <br /><br />Step 6: <br />Organizing your Material for the Body
              <br />
              of a Speech in the Form of a Speech Outline
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">14 / 18</div><!--Display number of slide had been played-->
            <div
              class="oralback"
              style="width: 100%; height: 100%; font-size: 30px;"
            ></div>
            <div class="text" style="font-size: 30px;">
              <br />
              <ul><!--Oral presentations step 6 explanation-->
                <li>Main points in your central idea are only assertions.</li>
                <li>
                  The listeners need supporting materials to accept what a
                  speaker says.
                </li>
              </ul>
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">15 / 18</div><!--Display number of slide had been played-->
            <div class="oralback" style="width: 100%; height: 100%;"></div>
            <div
              class="text"
              style="font-size: 75px; position: absolute; top: 280px;"
            ><!--Oral presentations step 7 explanation-->
              <br />Step 7: <br />The Introduction <br />(During Oral
              Presentation)
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">16 / 18</div><!--Display number of slide had been played-->
            <div
              class="oralback"
              style="width: 100%; height: 100%; font-size: 30px;"
            ></div>
            <div class="text" style="font-size: 30px;">
              <br /><!--Oral presentations step 7 explanation-->
              <ul style="text-align: left; margin-left: 240px;">
                <li>Keep your introduction brief and to the point.</li>
                <li>
                  There are four objectives that you need to achieve through the
                  introduction <br />of your speech:
                </li>
                <ul style="text-align: left; margin-left: 100px;">
                  <li>
                    Get the attention and interest of your audience by doing the
                    following:
                  </li>
                  <ul style="text-align: left; margin-left: 70px;">
                    <li>relating the topic to the audience</li>
                    <li>stating the importance of the topic</li>
                    <li>
                      starting with an interesting or intriguing statement
                    </li>
                    <li>arousing the curiosity of the audience</li>
                    <li>beginning with a quotation</li>
                  </ul>
                  <li>Reveal the topic of your speech</li>
                  <li>Establish your credibility and goodwill</li>
                  <li>Preview the body of your speech</li>
                </ul>
              </ul>
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">17 / 18</div><!--Display number of slide had been played-->
            <div class="oralback" style="width: 100%; height: 100%;"></div>
            <div
              class="text"
              style="font-size: 75px; position: absolute; top: 280px;"
            ><!--Oral presentations step 8 explanation-->
              <br />Step 8: <br />The Conclusion <br />(During Oral
              Presentation)
            </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext" style="z-index: 3;">18 / 18</div><!--Display number of slide had been played-->
            <div
              class="oralback"
              style="width: 100%; height: 100%; font-size: 30px;"
            ></div>
            <div class="text" style="font-size: 30px;">
              <br />
              <ul style="text-align: left; margin-left: 250px;">
                <li><!--Oral presentations step 8 explanation-->
                  Do not be long winded - be brief and to the point. There are
                  two major functions:
                  <ul style="text-align: left; margin-left: 90px;">
                    <li>
                      To let the audience know that you are ending the speech
                      <br />
                      (signal the end of the speech)
                    </li>
                    <li>
                      To reinforce the audience's understanding of the central
                      idea
                    </li>
                  </ul>
                </li>
                <li>Summarize your main points</li>
                <li>End your conclusion with a quotation</li>
                <li>Make a dramatic statement with your conclusion</li>
                <li>
                  Make the conclusion by refering back to the introduction
                </li>
              </ul>
            </div>
          </div>

          <!--End-->
          <div class="mySlides fade">
            <div class="secondessay" style="width: 100%; height: 100%;"></div>
            <div class="text">The End</div><!--The End slide-->
          </div>
          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1,slideshow3)">&#10094;</a>
          <a class="next" onclick="plusSlides(1,slideshow3)">&#10095;</a>
		  <!--Current slide-->
          <div style="text-align: center;">
            <span class="dot" onclick="currentSlide(1, slideshow3)"></span>
            <span class="dot" onclick="currentSlide(2, slideshow3)"></span>
            <span class="dot" onclick="currentSlide(3, slideshow3)"></span>
          </div>
        </div>
      </section><!--End of Oral Presentation slides-->
      <script src="main.js"></script><!--Link to javascript file-->
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
  offset: 400, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 1000 // values from 0 to 3000, with step 50ms
});

  </script>
  </body>
</html>
