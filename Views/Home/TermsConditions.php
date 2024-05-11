<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        // You Can Change the Page Title as you like
        $pageTitle = "Terms and Conditions";
        // Include the Template
        include '../../Templates/MetaTags.php';
        ?>
    <link rel="stylesheet" href="<?php echo $HomepagePath; ?>">
      <style>
        body {
            font-family: Arial, sans-serif;
            background-color: var(--Body-Background);
            padding: 50px;
            text-align: center;
            align-items: center;
            display: flex;
            justify-content: center;
            height: 250vh;
            margin: 0;
        }
        .container {
            background-color: #002cb6;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }
        h1 {
            color: #f9fafc;
            font-size: 24px;
            margin-bottom: 20px;
        }
        p {
            color: #f9fafc;
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 50px;
            text-align: left;
        }
       </style> 
</head>
<body>
    <!-- Include the navbar -->
    <?php include $HomepageLayout; ?>
        <!-- لم اقم بربط هذة الصفحة مع باقي الصفح  -->
        <div class="container">
    <h1>Terms and Conditions</h1>
        <p>
        <B>Information we collect:
Contact and account data: When you and your employees register on our website for the first time and if you modify the data again.
Application data: When you or any of your employees visit our website or through the application, we usually collect your contact information such as (name, email, phone number) and any other information you shared with us. This also applies to the free trial.</B><br></p>

<p><B>How we use the information you provide,Contact and account data:
We use your contact information so that we can provide our services, meet your requests, billing, and manage the account related to employees, and this also in the case of hiring a team from the company to operate the application and provide the monthly report to the purchasing company. We may also use this information for marketing or communication purposes, and you can stop it at any time. We also use this data so that we can analyze service trends.
If you register to participate in an event on our website or application, we may transmit your name, email address, phone number and company name to the organizer or sponsors of the selected event for marketing purposes.</B><br></p>

<p><B>Client database:
We collect and process this data on your behalf so that we can perform services related to recording the attendance and absence of your employees. This data is recorded either by collecting and entering it through us or through the employees’ login.</B><br></p>

<p><B>Access, update, or delete personal informationContact and account data:
You certainly have access to the personal data you previously provided to log in for the first time and update it. You can do this at any time by connecting to your personal account atSIS. If you want to permanently delete your account or personal information for a valid reason, please contact us to request that. If you encounter any problem, we will take all measures to permanently delete your account unless we want to keep it for legal reasons. This also applies to the free trial session.</B><br></p>

<p><B>Protection policy:
Given the importance and sensitivity of personal information to the company and its employees, we take a large number of security precautions to ensure that this information is processed, stored, and kept securely from loss and unauthorized access.
You can also create your own database on your personal server if you want to ensure greater protection.</B><br></p>

<p><B>Data privacy policy:
Data retention</B><br></p>


<p><B>Contact and account data:
This data will be retained only when necessary, and for the purpose for which it was collected, as described in this policy, including the statutory retention period, or the period used for promotion.</B><br></p>

<p><B>Application data:
If we do not hire you, we may keep the information you provide for up to a year, so that we can contact you again if there is anything new.</B><br></p>

<p><B>Browser data:
We may retain this data for a maximum period of 6 months, unless we need to retain it for security reasons.</B><br></p>

<p><B>Customer database:
We will keep this data if necessary, to be able to provide the services that you have seen due to our need for it so that it can reach your employees easily. Also, your database is kept up to 3 months after the last use, and it can be deleted at the request of the responsible manager. Data may be retained for legal reasons.
        </p>
    </div>
</body>
</html>
