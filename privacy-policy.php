<?php
//--Include Statments--//
include('session.php');
include('functions.php');
unset($_SESSION['try_again']);
unset($_SESSION['error']);

//--Auto Log In As Guest
if(!isset($_SESSION['login_user'])){
$_SESSION['login_user'] = 'Guest';
$_SESSION['username'] = 'Guest';
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy</title>
    <link rel="shortcut icon" href="assets/branding/favicon.ico" />
    <meta name="description" content="seo_description_goes_here">
    <meta name="keywords" content="seo_keywords_here">

    <!-- FontAwesome Icons -->
    <script src="https://kit.fontawesome.com/1572784ea9.js" crossorigin="anonymous"></script>

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171706122-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-171706122-1');
    </script>

</head>

<!--HTML Body-->
<body class="template-page">
   
<!--NavBar-->
<?php NavBar() ?>

<!--Privacy Policy-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Privacy Policy</h1>
                <p>Last updated May 04, 2020</p>
                <p>Thank you for choosing to be part of our community at Stuudeo, (“Company”, “we”, “us”, or “our”). We are committed to protecting your personal information and your right to privacy. If you have any questions or concerns about our policy, or our practices with regards to your personal information, please contact us at <a href="mailto:hello@stuudeo.com" target="_blank">hello@stuudeo.com.</a></p>
                <p>When you visit us and use our services, you trust us with your personal information. We take your privacy very seriously. In this privacy policy, we seek to explain to you in the clearest way possible what information we collect, how we use it and what rights you have in relation to it. We hope you take some time to read through it carefully, as it is important. If there are any terms in this privacy policy that you do not agree with, please discontinue use of our and our services.</p>
                <p>This privacy policy applies to all information collected through our and/or any related services, sales, marketing or events (we refer to them collectively in this privacy policy as the "Services").</p>
                <p>Please read this privacy policy carefully as it will help you make informed decisions about sharing your personal information with us.</p><br />
                <p>TABLE OF CONTENTS</p>
                <p>1. WHAT INFORMATION DO WE COLLECT?</p>
                <p>2. WILL YOUR INFORMATION BE SHARED WITH ANYONE?</p>
                <p>3. DO WE USE COOKIES AND OTHER TRACKING TECHNOLOGIES?</p>
                <p>4. HOW DO WE HANDLE YOUR SOCIAL LOGINS?</p>
                <p>5. IS YOUR INFORMATION TRANSFERRED INTERNATIONALLY?</p>
                <p>6. WHAT IS OUR STANCE ON THIRD-PARTY WEBSITES?</p>
                <p>7. HOW LONG DO WE KEEP YOUR INFORMATION?</p>
                <p>8. DO WE COLLECT INFORMATION FROM MINORS?</p>
                <p>9. WHAT ARE YOUR PRIVACY RIGHTS?</p>
                <p>10. CONTROLS FOR DO-NOT-TRACK FEATURES</p>
                <p>11. DO CALIFORNIA RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?</p>
                <p>12. DO WE MAKE UPDATES TO THIS POLICY?</p>
                <p>13. HOW CAN YOU CONTACT US ABOUT THIS POLICY?</p><br />
                <p><strong>1. WHAT INFORMATION DO WE COLLECT?</strong></p>
                <p>Personal information you disclose to us</p>
                <p>In Short: We collect personal information that you provide to us.</p>
                <p>We collect personal information that you voluntarily provide to us when registering at the expressing an interest in obtaining information about us or our products and services, when participating in activities on the (such as posting messages in our online forums or entering competitions, contests or giveaways) or otherwise contacting us.</p>
                <p>The personal information that we collect depends on the context of your interactions with us and the , the choices you make and the products and features you use. The personal information we collect can include the following:</p>
                <p>Social Media Login Data. We may provide you with the option to register using social media account details, like your Facebook, Twitter or other social media account. If you choose to register in this way, we will collect the Information described in the section called &quot;HOW DO WE HANDLE YOUR SOCIAL LOGINS&quot; below.</p>
                <p>All personal information that you provide to us must be true, complete and accurate, and you must notify us of any changes to such personal information.</p>
                <p><em><strong>Information automatically collected</strong></em></p>
                <p>In Short: Some information &mdash; such as IP address and/or browser and device characteristics &mdash; is collected automatically when you visit our .</p>
                <p>We automatically collect certain information when you visit, use or navigate the . This information does not reveal your specific identity (like your name or contact information) but may include device and usage information, such as your IP address, browser and device characteristics, operating system, language preferences, referring URLs, device name, country, location, information about how and when you use our and other technical information. This information is primarily needed to maintain the security and operation of our , and for our internal analytics and reporting purposes.</p>
                <p>Like many businesses, we also collect information through cookies and similar technologies.</p><br />
                <p><strong>2. WILL YOUR INFORMATION BE SHARED WITH ANYONE?</strong></p>
                <em>In Short:  We only share information with your consent, to comply with laws, to provide you with services, to protect your rights, or to fulfill business obligations.</em>
                <p>We may process or share data based on the following legal basis:</p>
                <ul>
                    <li>Consent: We may process your data if you have given us specific consent to use your personal information in a specific purpose.</li>
                    <li>Legitimate Interests: We may process your data when it is reasonably necessary to achieve our legitimate business interests.</li>
                    <li>Performance of a Contract: Where we have entered into a contract with you, we may process your personal information to fulfill the terms of our contract.</li>
                    <li>Legal Obligations: We may disclose your information where we are legally required to do so in order to comply with applicable law, governmental requests, a judicial proceeding, court order, or legal process, such as in response to a court order or a subpoena (including in response to public authorities to meet national security or law enforcement requirements).</li>
                    <li>Vital Interests: We may disclose your information where we believe it is necessary to investigate, prevent, or take action regarding potential violations of our policies, suspected fraud, situations involving potential threats to the safety of any person and illegal activities, or as evidence in litigation in which we are involved.</li>
                </ul>
                <p>More specifically, we may need to process your data or share your personal information in the following situations:</p>
                <ul>
                    <li>Vendors, Consultants and Other Third-Party Service Providers. We may share your data with third party vendors, service providers, contractors or agents who perform services for us or on our behalf and require access to such information to do that work. Examples include: payment processing, data analysis, email delivery, hosting services, customer service and marketing efforts. We may allow selected third parties to use tracking technology on the , which will enable them to collect data about how you interact with the over time. This information may be used to, among other things, analyze and track data, determine the popularity of certain content and better understand online activity. Unless described in this Policy, we do not share, sell, rent or trade any of your information with third parties for their promotional purposes.</li>
                    <li>Business Transfers. We may share or transfer your information in connection with, or during negotiations of, any merger, sale of company assets, financing, or acquisition of all or a portion of our business to another company.</li>
                    <li>Third-Party Advertisers. We may use third-party advertising companies to serve ads when you visit the . These companies may use information about your visits to our Website(s) and other websites that are contained in web cookies and other tracking technologies in order to provide advertisements about goods and services of interest to you.</li>
                    <li>Affiliates. We may share your information with our affiliates, in which case we will require those affiliates to honor this privacy policy. Affiliates include our parent company and any subsidiaries, joint venture partners or other companies that we control or that are under common control with us.</li>
                    <li>Business Partners. We may share your information with our business partners to offer you certain products, services or promotions.</li>
                    <li>Other Users. When you share personal information or otherwise interact with public areas of the , such personal information may be viewed by all users and may be publicly distributed outside the in perpetuity. If you interact with other users of our and register through a social network (such as Facebook), your contacts on the social network will see your name, profile photo, and descriptions of your activity. Similarly, other users will be able to view descriptions of your activity, communicate with you within our , and view your profile.</li>
                </ul><br />
                <p><strong>3. DO WE USE COOKIES AND OTHER TRACKING TECHNOLOGIES?</strong></p>
                <p><em>In Short:  We may use cookies and other tracking technologies to collect and store your information.</em></p>
                <p>We may use cookies and similar tracking technologies (like web beacons and pixels) to access or store information. Specific information about how we use such technologies and how you can refuse certain cookies is set out in our Cookie Policy.</p><br />
                <p><strong>4. HOW DO WE HANDLE YOUR SOCIAL LOGINS?</strong></p>
                <p><em>In Short:  If you choose to register or log in to our services using a social media account, we may have access to certain information about you.</em></p>
                <p>Stuudeo offers you the ability to register and login using your third party social media account details (like your Facebook or Twitter logins). Where you choose to do this, we will receive certain profile information about you from your social media provider. The profile Information we receive may vary depending on the social media provider concerned, but will often include your name, e-mail address, friends list, profile picture as well as other information you choose to make public.</p>
                <p>We will use the information we receive only for the purposes that are described in this privacy policy or that are otherwise made clear to you. Please note that we do not control, and are not responsible for, other uses of your personal information by your third party social media provider. We recommend that you review their privacy policy to understand how they collect, use and share your personal information, and how you can set your privacy preferences on their sites and apps.</p> <br />
                <p><strong>5. IS YOUR INFORMATION TRANSFERRED INTERNATIONALLY?</strong></p>
                <p><em>In Short:  We may transfer, store, and process your information in countries other than your own.</em></p>
                <p>Our servers are located in Chicago, Illinois. If you are accessing our from outside, please be aware that your information may be transferred to, stored, and processed by us in our facilities and by those third parties with whom we may share your personal information (see "WILL YOUR INFORMATION BE SHARED WITH ANYONE?" above), in and other countries.</p>
                <p>If you are a resident in the European Economic Area, then these countries may not have data protection or other laws as comprehensive as those in your country. We will however take all necessary measures to protect your personal information in accordance with this privacy policy and applicable law.</p> <br />
                <p><strong>6. WHAT IS OUR STANCE ON THIRD-PARTY WEBSITES?</strong></p>
                <p><em>In Short:  We are not responsible for the safety of any information that you share with third-party providers who advertise, but are not affiliated with, our websites.</em></p>
                <p>Stuudeo may contain advertisements from third parties that are not affiliated with us and which may link to other websites, online services or mobile applications. We cannot guarantee the safety and privacy of data you provide to any third parties. Any data collected by third parties is not covered by this privacy policy. We are not responsible for the content or privacy and security practices and policies of any third parties, including other websites, services or applications that may be linked to or from the . You should review the policies of such third parties and contact them directly to respond to your questions.</p> <br />
                <p><strong>7. HOW LONG DO WE KEEP YOUR INFORMATION?</strong></p>
                <p><em>In Short:  We keep your information for as long as necessary to fulfill the purposes outlined in this privacy policy unless otherwise required by law.</em></p>
                <p>We will only keep your personal information for as long as it is necessary for the purposes set out in this privacy policy, unless a longer retention period is required or permitted by law (such as tax, accounting or other legal requirements). No purpose in this policy will require us keeping your personal information for longer than 365 days.</p>
                <p>When we have no ongoing legitimate business need to process your personal information, we will either delete or anonymize it, or, if this is not possible (for example, because your personal information has been stored in backup archives), then we will securely store your personal information and isolate it from any further processing until deletion is possible.</p> <br />
                <p><strong>8. DO WE COLLECT INFORMATION FROM MINORS?</strong></p>
                <p><em>In Short:  We do not knowingly collect data from or market to children under 18 years of age.</em></p>
                <p>We do not knowingly solicit data from or market to children under 18 years of age. By using the , you represent that you are at least 18 or that you are the parent or guardian of such a minor and consent to such minor dependent’s use of the . If we learn that personal information from users less than 18 years of age has been collected, we will deactivate the account and take reasonable measures to promptly delete such data from our records. If you become aware of any data we have collected from children under age 18, please contact us at <a href="mailto:hello@stuudeo.com" target="_blank">hello@stuudeo.com</a>.</p> <br />
                <p><strong>9. WHAT ARE YOUR PRIVACY RIGHTS?</strong></p>
                <p><em>In Short:  You may review, change, or terminate your account at any time.</em></p>
                <p>If you are resident in the European Economic Area and you believe we are unlawfully processing your personal information, you also have the right to complain to your local data protection supervisory authority. <a href="http://ec.europa.eu/justice/data-protection/bodies/authorities/index_en.htm" target="_blank">You can find their contact details here</a>.</p>
                <p><strong><em>Account Information</em></strong></p>
                <p>If you would at any time like to review or change the information in your account or terminate your account, you can:</p>
                <p>Upon your request to terminate your account, we will deactivate or delete your account and information from our active databases. However, some information may be retained in our files to prevent fraud, troubleshoot problems, assist with any investigations, enforce our Terms of Use and/or comply with legal requirements.</p>
                <p><u>Opting out of email marketing:</u> You can unsubscribe from our marketing email list at any time by clicking on the unsubscribe link in the emails that we send or by contacting us using the details provided below. You will then be removed from the marketing email list – however, we will still need to send you service-related emails that are necessary for the administration and use of your account.</p> <br />
                <p><strong>10. CONTROLS FOR DO-NOT-TRACK FEATURES</strong></p>
                <p>Most web browsers and some mobile operating systems and mobile applications include a Do-Not-Track (“DNT”) feature or setting you can activate to signal your privacy preference not to have data about your online browsing activities monitored and collected. No uniform technology standard for recognizing and implementing DNT signals has been finalized. As such, we do not currently respond to DNT browser signals or any other mechanism that automatically communicates your choice not to be tracked online. If a standard for online tracking is adopted that we must follow in the future, we will inform you about that practice in a revised version of this privacy policy.</p><br />
                <p><strong>11. DO CALIFORNIA RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?</strong></p>
                <p><em>In Short:  Yes, if you are a resident of California, you are granted specific rights regarding access to your personal information.</em></p>
                <p>California Civil Code Section 1798.83, also known as the “Shine The Light” law, permits our users who are California residents to request and obtain from us, once a year and free of charge, information about categories of personal information (if any) we disclosed to third parties for direct marketing purposes and the names and addresses of all third parties with which we shared personal information in the immediately preceding calendar year. If you are a California resident and would like to make such a request, please submit your request in writing to us using the contact information provided below.</p>
                <p>If you are under 18 years of age, reside in California, and have a registered account with the , you have the right to request removal of unwanted data that you publicly post on the . To request removal of such data, please contact us using the contact information provided below, and include the email address associated with your account and a statement that you reside in California. We will make sure the data is not publicly displayed on the , but please be aware that the data may not be completely or comprehensively removed from our systems.</p> <br />
                <p><strong>12. DO WE MAKE UPDATES TO THIS POLICY?</strong></p>
                <p><em>In Short:  Yes, we will update this policy as necessary to stay compliant with relevant laws.</em></p>
                <p>We may update this privacy policy from time to time. The updated version will be indicated by an updated “Revised” date and the updated version will be effective as soon as it is accessible. If we make material changes to this privacy policy, we may notify you either by prominently posting a notice of such changes or by directly sending you a notification. We encourage you to review this privacy policy frequently to be informed of how we are protecting your information.</p> <br />
                <p><strong>13. HOW CAN YOU CONTACT US ABOUT THIS POLICY?</strong></p>
                <p>If you have questions or comments about this policy, you may email us at <a href="mailto:hello@stuudeo.com" target="_blank">hello@stuudeo.com</a>.</p> <br />
                <p><strong>HOW CAN YOU REVIEW, UPDATE, OR DELETE THE DATA WE COLLECT FROM YOU?</strong></p>
                <p>Based on the laws of some countries, you may have the right to request access to the personal information we collect from you, change that information, or delete it in some circumstances. To request to review, update, or delete your personal information, please email <a href="mailto:hello@stuudeo.com" target="_blank">hello@stuudeo.com</a>. We will respond to your request within 30 days.</p>
            </div>
        </div>
    </div>

    <?php // include_once('prefooter.php'); ?>
    <?php include_once('footer.php'); ?>

</body>
</html>
