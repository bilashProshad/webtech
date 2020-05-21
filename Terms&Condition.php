<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Tutor Finder</title>
	<style>
	.container{
        padding-top:5%;
        padding-left:20%;
        padding-right:20%;
        padding-bottom: 10%;
        background-color: white;
        }
    p{
        color: black;
    }
    h2{
        color: dodgerblue;
    }
    .header{
    text-align: center;
    color: #454b50;
    margin: 10px;
}
*{
	
    padding: 0;
    margin: 0;
    text-decoration: none;
    box-sizing: border-box;
}
	</style>
</head>
<body>
    <div class="header">
        <h1>Online Tutor Finder</h1>
        <h4>Learn Teach Earn</h4>
    </div>
    <hr>
    
    <div class="container">
        <h2>Details:</h2>
        <br>
        <p>
        <?php
            include 'control/connection.php';
            $q = "SELECT * FROM `systeminfo`";
            $query = mysqli_query($con,$q);
            while($res = mysqli_fetch_array($query)){
                echo $res['description'];
            }
        ?>
        </p><br> <br> <br>

        <h2>Tearms and Conditions</h2>
        <br>
        <p>
        You are required to agree to the Terms of Use prior to use of the website. We may
modify Terms of Use at any time by posting the revised terms at: Online Tutor Finder.
All changes will be effective immediately after we post them. We will notify you via
email of any material changes to the Terms of Use. You are required to agree to the
changes to the Terms of Use prior to further use of the Online Tutor Finder website. 
        </p><br>
        <p><b>
        PLEASE READ THESE TERMS OF USE CAREFULLY BEFORE USING THIS
SITE, DOWNLOADING, INSTALLING OR USING OUR MOBILE
APPLICATION AND SERVICES OFFERED BY Online Tutor Finder. THIS
AGREEMENT SETS FORTH THE LEGALLY BINDING TERMS AND
CONDITIONS FOR YOUR USE OF THE WEBSITE AT Online Tutor Finder
AND ALL SERVICES PROVIDED ON THE SITE.

        </b>
    </p>
        <br>
        <p>
        By clicking on Accept or Agree to the Terms of Use when this option is made available
to you or by using the Site in any manner, including but not limited to visiting or
browsing the Site, you ("member, user, student, tutor, buyer, or seller") agree to be bound
by this Agreement. This Agreement applies to all members of the Site, including without
limitation members who are vendors, customers, and merchants, contributors of content,
information and other materials or services on the Site. 
        </p>
        <br><br>
        <h4><i>Online Tutor Finder is a Marketplace</i></h4>
        <hr>
        <br>
        <p>
        THE SITE OFFERS A MARKETPLACE FOR THOSE WHO ARE SEEKING
TUTORING SERVICES TO CONNECT WITH THOSE WHO ARE SEEKING TO
PROVIDE TUTORING SERVICES. THE TUITION RATINGS ARE SET BY
PARENT(S)/ STUDENT(S)/ GUARDIAN(S). YOU UNDERSTAND AND AGREE
THAT ONLINE TUTOR FINDER HAS NO CONTROL OVER THE ACTS OR
OMISSIONS OF ANY USER AND THAT ONLINE TUTOR FINDER MAKES NO
REPRESENTATIONS OR WARRANTIES ABOUT THE QUALITY OF THE 
SERVICES PROVIDED BY ANY USER. YOU UNDERSTAND AND AGREE THAT
ONLINE TUTOR FINDER IS NOT RESPONSIBLE FOR THE PERFORMANCE OR
CONDUCT, WHETHER ONLINE OR OFFLINE, OF ANY USER OF THE SITE.
<br><br> <b>
YOU ARGREE THAT ONLINE TUTOR FINDER IS AN ONLINE TUTOR
MATCHING MARKETPLACE & THAT HELPS ITS USERS TO FIND THE
RIGHT TUTOR & TUITION. ONLINE TUTOR FINDER WILL NOT BE
RESPONSIBLE FOR ANY DIPUTES MATTERS ARISING OUT OF THE
CONTEXT OF TUITION ENGAGEMETN BETWEEN THE TUTOR AND
PARENTS OR STUDENT. YOU SUE THE SERVICE AT YOUR OWN RISK.</b>
        </p><br> <br>

        <h4><i>Membership Eligibility</i></h4>
        <hr>
        <br>
        <p>
        If you are a minor i.e. under the age of 18 years, you will not be able to register as a User
of the Website and cannot transact on or use the Website. If you are above the age of 18,
you can use the Site or Services only in conjunction with, and under the supervision of,
your parent or guardian who has agreed to the Terms. If you are the parent or legal
guardian of a child under the age of 18, you may use the Site or Services on behalf of
such minor child. By using the Site or Services on behalf of a minor child, you represent
and warrant that you are the parent or legal guardian of such child. If you do not qualify
under these terms, do not use the Site or Services. Membership in the Services is void
where prohibited by applicable law, and the right to access the Site is revoked in such
jurisdictions. By using the Site and/or the Services, you represent and warrant that you
have the right, authority, and capacity to enter into these Terms and to abide by all of the
Terms set forth herein. You agree: (a) to provide accurate, current, and complete
information about you as may be prompted by a registration form on the website
("Registration Data"); (b) to maintain the security of your password and identification; (c)
to maintain and promptly update the Registration Data and any information you provide
to Online Tutor Finder, to keep it accurate, current and complete; and (e) to accept all
risks of unauthorized access to information and Registration Data. 
        </p><br><br>

        <h4><i>TUTORS (Providing Service)</i></h4>
        <hr>
        <br>

        <ul >
            <li >
             As a Tutor, you are obligated to complete the service requested by the Service Requester (Student,
Parents etc.)
If the Service Requester has chosen you as the Tutor, you are advised to contact the Service
Requester prior to submitting your offer, to eliminate all the possible terms and conditions that
would make you not fulfill the requested transaction. By submitting an offer you agree to be bound
by the conditions of the request of service included in the request's description as long as those
conditions are not in violation of this Agreement or unlawful.
            </li>
            <li>
            Tutors are bound to show proof or disclose their qualification details to the reasonable satisfaction
of the student or parent party before entering into a tuition engagement and also if and as
requested by them, later.
            </li>
            <li>
            Online Tutor Finder does not guarantee to secure a Tutor for a Student or ascertain any tuition
fees on behalf of any tutor or student
            </li>
            <li>
            All tuitions posted in our site are verified to the best of our knowledge. If the student or parent
does not disclose any information beforehand, Online Tutor Finder will not be responsible for the
same.
            </li>
            <li>
            We encourage our tutors to pay their platform charge through our online payment gateway
because this system is safe & secure.

            </li>
            <li>
            We do not charge fees for Tutors registration initially. Service charge is charged at Online Tutor
Finder when the tutor will verify their profile at our platform & they will successfully get a tuition
job. We normally charge a tutor 50% of his/ her first month's salary but it may change based on the
tuition duration. You have the opportunity to review and accept the fees that you will be charged.
Online Tutor Finder reserves the right to increase platform charge fees or to institute new fees at
any time, upon a notice posted in advance on the Site.
            </li>
            <li>
            The tutor is expected to conduct himself in a teacher/coach like manner which is generally
prevalent and acceptable in a teacher and student like a relationship.
            </li>
        </ul>
<br><br>
        <h4><i>STUDENTS/PARENTS (Requesting Service)</i></h4>
        <hr><br>
        <p>
        You must be legally able to request the services you post on the Site. You must describe
your request and all terms of service requested on the posting page of the Site. Your
posted requests may only include text descriptions, other content relevant to the posting
of that request. All posted request(s) must be posted in an appropriate category. The
following things you need to accept before accepting any services from Online Tutor
Finder: 
        </p><br>

        <ul>
            <li>
            For any kind of anti-social activity (stealing, threat, damages, kidnapping, raping, child abusing,
harassment or any) by the provided Tutor, Online Tutor Finder will not be liable for any
consequences. You can avoid such problem by collecting photo copy of all documents (Passport /
National ID Card & University ID Card)
            </li>
            <li>
            For any behavioral problem(s) by the provided Tutor, Online Tutor Finder will not be responsible in
this regards.
            </li>
            <li>
            Continuation or discontinuation of the tuition rights are entirely reserved by the provided tutors
only. Thus Online Tutor Finder has no involvement or does not have the right to do so.
 Registering as students (Tutor Requester) and posting requests on Online Tutor Finder is totally
free.
            </li>
            <li>
            During posting a tutor request, students/parents should enter as much details as possible for
better responses from tutors.
            </li>
            <li>
            Please note that we will live your tutor request in our job board, so that our registered tutors can
apply to your tuition job.

            </li>
            <li>
            No Tutor can guarantee good grades; therefore, the grade you achieve cannot be a reason for the
student to come back at a later time and demand refunds for services.
            </li>
            <li>
            We are not involved in any kind of interactions that takes place between the tutors and students,
and hence is not liable for any dispute or disagreement or misinterpretations or arguments arising 
between the parent(s) / student(s) and the tutor(s). The parent(s) / student(s) and the Tutor(s) are
however free to take feedback and suggestions from us to solve the issue amicably.

            </li>
            <li>
            Student(s) are expected to conduct themselves in a Student like manner which is generally
expected and regarded as ideal Student behavior prevalent in education stream.
            </li>
            <li>
            Students should take enough care and make an intuitive decision before taking up an assignment
to avoid any kind of repercussions. Online Tutor Finder would not be responsible and liable for any
such unforeseen and unfortunate event including but not limited to bodily injury, sexual or mental
harassment of any nature, if any.
            </li>
        </ul>
        <br>
        <br>
        <h4><i>Provide Accurate Information
</i></h4><hr>
    <br>
    <p>
    Information you provide is defined by any information you provide to us or other users in
the registration, offering or posting process, in any public message area or through any
email feature. You are solely responsible for your information, and we act as a passive
conduit for your online distribution and publication of your information. Information you
provide or any requests and services you post on the Site should not: (1) be false,
inaccurate or misleading; (2) be fraudulent; (3) infringe any third party's copyright,
patent, trademark, trade secret or other proprietary rights or rights of publicity or privacy;
(4) violate any law, statute, ordinance or regulation (including, but not limited to, those
governing export control, consumer protection, unfair competition, discrimination or
false advertising); (5) be defamatory, trade libelous, unlawfully threatening or unlawfully
harassing; (6) be obscene (7) contain any viruses or other computer programming
routines that may damage, detrimentally interfere with, intercept or expropriate any
system, data or personal information; (8) create liability for us or cause us to lose (in
whole or in part) the services of our ISPs or other suppliers; (9) link directly or indirectly
to or include descriptions of goods or services that: are prohibited under this Agreement;
You may not post any request on the Site (or consummate any transaction that was
initiated using our service) that could cause us to violate any applicable law, statute,
ordinance or regulation. Neither you, Tutors nor Service Requesters Students) may
manipulate the price (offer) of any item nor you may interfere with other user's postings
or transactions. We may suspend or terminate your account if we suspect any, without
limiting to, any of the above. Enable us to use the information you supply us with, so that
we are not violating any rights you might have in that information, you agree to grant us a
non-exclusive, worldwide, perpetual, irrevocable, royalty-free, sub licensable right to
exercise the copyright, publicity, and database rights (but no other rights) you have in
your information, in any media now known or not currently known. We will only use
your information in accordance with our Privacy Policy. Information on the Site is
proprietary or is licensed to “Online Tutor Finder” by our users or third parties. You
agree that you will not use any software or other automated means to access the Site for
any purpose without our express written permission. 
    </p><br><br>

    <h4><i>App Permission</i></h4><hr>
    <br>
    <p>
    Online Tutor Finder App needs certain permissions to run on Android and requires access
to certain systems within your device. App can save personalize data for user. A common
reason for storage permissions is that these data will help the user to get personalized
App experience. 
    </p><br><br>

    <h4><i>Text Messages & PUSH Notifications</i></h4><br>
    <p>
    We send various text messages and PUSH notifications to students/parents & tutors for
notifying them about their tutor request & tuition updates.
    </p><br><br>

    <h4><i>Breach</i></h4>
    <hr> <br>
    <p>
    We may limit your activity, immediately remove your offers or request postings, issue a
warning to our community of your actions, suspend or terminate your membership and
refuse to provide our services to you if: (1) you breach this Agreement or the documents
it incorporates by reference; (2) we are unable to verify or authenticate any information to
us; (3) we believe that your actions may cause financial loss or legal liability for you, our
users or us. 
    </p><br><br>

    <h4>Privacy</h4>
    <hr> <br>

    <p>
    We do not sell or rent your personal information to third parties for their marketing
purposes without your explicit consent and we only use your information as described in
the Privacy Policy. If you object to your information being transferred or used in this way
please do not use our services. 
    </p><br><br>

    <h4><i>Liability Limit</i></h4>
    <hr> <br>

    <p>
    In no event will we, nor other party involved in the design, development and maintenance
of the site, be liable for lost profits or any special, incidental or consequential damages
arising out of or in connection with our site, our services or this agreement (however
arising, including negligence). 
    </p><br> <br>

    <h4><i>Copyright Policy</i></h4> <hr> <br>

    <p>
    Online Tutor Finder respects copyright law and expects its users to do the same. It is
Online Tutor Finder's policy to terminate in appropriate circumstances the Online Tutor 
Finder Accounts of Members or other account holders who repeatedly infringe or are
believed to be repeatedly infringing the rights of copyright holders. 
    </p> <br> <br>

    <h4><i>General</i></h4> <hr> <br>
    <p>
    We do not guarantee that we will meet user's requirements. We do not guarantee
continuous, uninterrupted, secure access or error free operations to our services. The
operation of this Site may be interfered with by numerous factors outside of our control.
You agree not to reproduce, duplicate, copy, sell, resell or exploit for any commercial
purposes, any portion of the information provided by us, including any intellectual
property rights of Online Tutor Finder or any person, firm or corporation having posted
information for availability through the Services provided by us .You agree not to
reproduce, duplicate, copy, sell, resell or exploit for any commercial purposes, any
portion of the information provided by us, including any intellectual property rights of
Online Tutor Finder or any person firm or corporation having posted information for
availability through the Services provided by us. <br> <br>

You agree that in the event Your post or Your information violates any provision of this
Terms, we will have the right to refuse to provide You or any person acting on Your
behalf, access to the Site and Application, terminate and/ or suspend Your access if
applicable in the future. 

</p>
<br> <br> <br> <br>

<p align="center">
YOU HAVE READ THESE TERMS OF USE AND AGREE TO ALL OF THE
PROVISIONS CONTAINED ABOVE 
</p>

    </div>

    
	
</body>
</html>