<?php
require "header.php";
?>
<h2>The welfare committee</h2>
<p>The welfare committee is comprised of the following members:</p>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Position</th>
      <th>Name</th>
      <th>Email (@rcsa.co.uk)</th>
    </tr>
  </thead>
  <tbody>
<?php
$json = json_decode(file_get_contents("data/committee.json"), true);
if ($json) {
  $officers = array(
    "Welfare Officer" => "",
    "Women's Officer" => "women",
    "Men's Officer" => "",
    "Ethnic Minorities Officer" => "ethnic",
    "Overseas Officer" => "",
    "LGBT+ Officer" => "lgbt"
  );
  foreach ($officers as $thing => $page) {
    if ($page === "") {
      echo "<tr><td>$thing</td><td>".$json[$thing]["name"]."</td><td>".$json[$thing]["email"]."</td></tr>";
    } else {
      echo "<tr><td><a href=\"$page\">$thing</a></td><td>".$json[$thing]["name"]."</td><td>".$json[$thing]["email"]."</td></tr>";

    }
  }
}
?>
  </tbody>
</table>

<p>
<h2>About me</h2>
<p>I'm Gabrielle McGuinness, the College Welfare Officer which involves many duties, but all to do with maintaining and improving the health and wellbeing of Robinson College students. Aside from this, I am an English second year who is obsessed with all things cultural, clothes, coffee, dogs and feminism.</p>

<p>One of the other key aspects of my job is to be there to support students throughout their degree, which is why I run my weekly drop-in sessions but I can also be emailed to arrange a meeting at any time. Raising awareness of mental health issues is one of my key passions and I will be doing this by organising fortnightly discussion groups headed by the Welfare sub-committee on pertinent issues, such as mental health, LGBT+ rights, racism and tackling gender issues. I want to create an open dialogue within college regarding these issues and hopefully tackle stigma against mental health. I also will be doing this behind the scenes by liaising with senior staff and trying to improve college relations and welfare provisions.</p>

<p>For this year, I am the Queen of Condoms. I will be handing out C-Cards in the Cafe for an hour every week, which I will tell you about in my weekly bulletin email. I will also ensure that the Welfare locker is replenished regularly for your emergency needs. If you need any other supplies or sexual health related advice, I am the one to contact.</p>

<p>Since we all tend to feel a little tired or losing motivation by Week 5, I am going to try and change things by running more welfare related events. This will involve cake, music, comedy and general fun that will allow us to remember to relax and enjoy our studies, rather than be defeated by them. Last term we ran a highly successful Christmas party in the JCR, which we hope will become tradition.</p>

<p>Stay positive and I am here to help whenever! Much love x.</p>

<hr />
<h2>Resources</h2>
<h3>In-college resources</h3>
<ul>
  <li><b>Gabrielle</b>, <b>Cammy</b>, <b>Dan</b>, <b>Matt</b>, <b>Sneha</b>, <b>Louise</b> form the rest of the welfare team so feel free to contact us at any time. We are all obliged to keep everything you say confidential.</li>
  <li>Your <b>TUTOR</b>: Your tutor should be there for you on a pastoral level but you can also go to <strong>ANY</strong> other tutor in college. You can also change your tutor at any time if you feel they are not right for you. Tutors are bound to a confidentiality agreement and so you are safe to speak to them. The list can be found on page 43 of the Junior member handbook <a href="http://www.robinson.cam.ac.uk/assets/about/junior_members_handbook.pdf">http://www.robinson.cam.ac.uk/assets/about/junior_members_handbook.pdf</a>.</b></li>
<li>Although technically meant to stay academic, it can be important to keep you DoS in the loop about certain issues, many students prefer to speak to their DoS regarding some problems, especially if they feel it relates to their subject.</li>
<li><b>The nurse: Kim Freeman</b> (<a href="mailto:kf340@cam.ac.uk">kf340@cam.ac.uk</a>) who is here 5-6pm for drop-in sessions from Monday-Thursday (4-5 if you book) and 3-4pm on a Friday (4-5pm if you book).</li>
<li><b>The chaplain, Simon Perry</b>, is often a popular source of support who will happily chat to you regarding your problems. (<a href="mailto:chaplain@robinson.cam.ac.uk">chaplain@robinson.cam.ac.uk</a>)</li>
</ul>
<h3>Outside college resources</h3>
<ul>
  <li><b>Your doctor</b>: you can book an appointment with your GP if you wish to talk with a professional for guidance</li>
  <li><b>UCS (University Counselling Service)</b>: This is for <strong>EVERYONE</strong> if they need it, and there's nothing wrong with that if you feel you want extra, professional support. It is TOTALLY free. This website has some self-help guides and further info about the services: <a href="http://www.counselling.cam.ac.uk/">http://www.counselling.cam.ac.uk/</a> and here is the online form for counselling: <a href="https://forms.counselling.cam.ac.uk/titanium/wcmenu.aspx">https://forms.counselling.cam.ac.uk/titanium/wcmenu.aspx</a></li>
  <li><b>Students' Unions' Advice Service</b>: This is a free, confidential and independent support service for all Cambridge students, and part run by professional advisors and CUSU sabbatical reps. They are open Monday - Friday, 9am - 5pm all year.

  <ul>
    <li>Where: 17 Mill Lane</li>
    <li>When: Tuesdays and Thursdays from 12-2pm are the DROP-INs</li>
    <li>Email: at <a href="mailto:advice@studentadvice.cam.ac.uk">advice@studentadvice.cam.ac.uk</a> and they will reply in 48 hour.</li>
    <li>Phone Number: 01223 746999 for advice or to book an appointment.</li>
    <li>Website: <a href="www.studentadvice.cam.ac.uk">www.studentadvice.cam.ac.uk</a></li>
  </ul>
  </li>
  <li><b>Linkline</b>: Between 7pm and 7am of EVERY NIGHT in the week during Cambridge University full-term to talk about whatever is on your mind. It is an incredible support system for those moments in the evening when you realise you are down or stressed etc.
  <ul>
    <li>Phone number: 01223 744444</li>
    <li>There is also now an instant messaging service online, at <a href="www.linkline.org.uk">www.linkline.org.uk</a></li>
  </ul>
  </li>
</ul>
<h3>Cambridge-based Facebook groups</h3>
<ul>
  <li>CUSU LGBT+: <a href="https://www.facebook.com/groups/2202197406/"></a></li>
  <li>Cambridge Students' Disability Community: <a href="https://www.facebook.com/groups/101125766899899/">https://www.facebook.com/groups/101125766899899/</a></li>
  <li>The Disabled Students' Campaign: <a href="https://www.facebook.com/groups/363775395562/?fref=ts">https://www.facebook.com/groups/363775395562/?fref=ts</a></li>
  <li>Cambridge Ask-A-Student: <a href="https://www.facebook.com/groups/200749143308432/">https://www.facebook.com/groups/200749143308432/</a></li>
  <li>Fly (BME Women's Network, for self-identifying women of Colour only) <a href="https://www.facebook.com/groups/359049374186552/?fref=nf">https://www.facebook.com/groups/359049374186552/?fref=nf</a></li>
  <li>Soar (BME Men's Network) <a href="https://www.facebook.com/groups/ThisIsSoar/?fref=ts">https://www.facebook.com/groups/ThisIsSoar/?fref=ts</a></li>
</ul>
<h3>Other contacts</h3>
<ul>
<li>Poppy Ellis Logan: (CUSU/GU Welfare &amp; Rights Officer and Acting President of the Graduate Union): <a href="mailto:welfare@cusu.cam.ac.uk">welfare@cusu.cam.ac.uk</a></li>
</ul>
<h3>Useful links</h3>
<ul>
  <li>NHS advice: This is a good first step as it offers various options to go down and lots of advice. <a href="http://www.nhs.uk/conditions/stress-anxiety-depression/pages/mental-health-helplines.aspx">http://www.nhs.uk/conditions/stress-anxiety-depression/pages/mental-health-helplines.aspx</a></li>
  <li>Student Minds: An amazing student mental health charity with an incredible team working here in Cambridge too. Here is the website: <a href="http://www.studentminds.org.uk/">http://www.studentminds.org.uk/</a> and the Cambridge group’s facebook page: <a href="https://www.facebook.com/SMCMentalWealth/?fref=ts">https://www.facebook.com/SMCMentalWealth/?fref=ts</a></li>
  <li>Time to Change are an incredible charity, keen to end mental health discrimination and with lots of resources on their website. <a href="http://www.time-to-change.org.uk/">http://www.time-to-change.org.uk/</a></li>
  <li>Mind not only have lots available on their website to help you out, they also have a phoneline open Monday-Friday 9am to 6pm at 0300 123 3393. <a href="http://www.mind.org.uk/">http://www.mind.org.uk/</a></li>
  <li>The University of Cambridge website is worth checking over to see what Uni-wide guidelines are regarding mental health. <a href="http://www.cambridgestudents.cam.ac.uk/welfare-and-wellbeing">http://www.cambridgestudents.cam.ac.uk/welfare-and-wellbeing<a/></li>
</ul>

<?php require "footer.php"?>
