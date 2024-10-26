<?php
include('config.php');
include('checklogin.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="CodeCamp,Coding academy camp">
    <meta name="theme-color" content="green">
    <meta name="application-name" content="Achievers Health Center Management System">
    <meta name="robots" content="all">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="green">
    <meta name="description" content="A web application for managing and providing digital services that are required by an Healthcare Organizatio of the Achievers University,Owo.">
    <meta name="author" content="Olamide Olateju Emmanuel">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Achievers University Health Center Manaagement System,AUO HCMS, Achievers University Health Center">
    
    <meta name="theme-color" content="#7952b3">
    <title>FIRST AID PROCEDURES</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/docs.css">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="icon" href="../assets/school.png" type="image/png">

<!-- few scripts -->
    <script src="../assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.js" defer></script>
    <script src="../assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="../assets/font-awesome/" defer></script>
    <!-- other sylesheets -->
    <link rel="stylesheet" href="../assets/boxicons/css/boxicons.css">
    <link rel="stylesheet" href="../assets/boxicons/css/boxicons.min.css">
</head>
<body>

<?php include("header.php"); ?>

<div class="container mt-4" style="padding-bottom:100px">
    <h2 class="text-center">First Aid Procedures</h2>
    
    <div class="accordion" id="firstAidAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingCPR">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCPR" aria-expanded="true" aria-controls="collapseCPR">
                    CPR (Cardiopulmonary Resuscitation)
                </button>
            </h2>
            <div id="collapseCPR" class="accordion-collapse collapse show" aria-labelledby="headingCPR" data-bs-parent="#firstAidAccordion">
                <div class="accordion-body">
                    CPR is a lifesaving technique used when someone's breathing or heartbeat has stopped. Start by calling emergency services. If unresponsive, place the person on their back and begin 30 chest compressions at a rate of 100-120 compressions per minute. Follow with 2 rescue breaths. Continue this cycle until help arrives or the person starts to breathe on their own. Remember to ensure the scene is safe and check for any obstructions in the airway.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingChoking">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseChoking" aria-expanded="false" aria-controls="collapseChoking">
                    Choking Relief
                </button>
            </h2>
            <div id="collapseChoking" class="accordion-collapse collapse" aria-labelledby="headingChoking" data-bs-parent="#firstAidAccordion">
                <div class="accordion-body">
                    If someone is choking and unable to speak, perform the Heimlich maneuver. Stand behind the person, wrap your arms around their waist, and make a fist above the navel. Thrust inward and upward until the object is expelled. For infants, lay them face down on your forearm and deliver 5 back blows, followed by 5 chest thrusts. If the person becomes unconscious, start CPR and call for emergency help.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingWoundCare">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWoundCare" aria-expanded="false" aria-controls="collapseWoundCare">
                    Wound Care
                </button>
            </h2>
            <div id="collapseWoundCare" class="accordion-collapse collapse" aria-labelledby="headingWoundCare" data-bs-parent="#firstAidAccordion">
                <div class="accordion-body">
                    For minor cuts or scrapes, gently clean the wound with soap and water to remove debris. Apply an antiseptic to prevent infection and cover with a sterile bandage. Monitor for signs of infection, such as increased redness, swelling, or pus. For deeper cuts or wounds that won’t stop bleeding, apply pressure with a clean cloth and seek medical help immediately.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingBurns">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBurns" aria-expanded="false" aria-controls="collapseBurns">
                    Burn Treatment
                </button>
            </h2>
            <div id="collapseBurns" class="accordion-collapse collapse" aria-labelledby="headingBurns" data-bs-parent="#firstAidAccordion">
                <div class="accordion-body">
                    For burns, immediately cool the burn under running water for at least 10 minutes. For minor burns, apply a sterile dressing without ointments. For serious burns, cover them with a sterile, non-stick dressing and do not break blisters. Seek immediate medical help for large or severe burns, or if the burn is located on the face, hands, feet, or genitals.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingAsthma">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAsthma" aria-expanded="false" aria-controls="collapseAsthma">
                    Asthma Attack Management
                </button>
            </h2>
            <div id="collapseAsthma" class="accordion-collapse collapse" aria-labelledby="headingAsthma" data-bs-parent="#firstAidAccordion">
                <div class="accordion-body">
                    If someone is experiencing an asthma attack, help them sit upright and remain calm. Instruct them to use their rescue inhaler, following the correct technique. If symptoms persist for more than 10 minutes after using the inhaler, or if they are struggling to breathe, call for emergency medical help immediately. Encourage them to breathe slowly and deeply to reduce anxiety.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSeizure">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeizure" aria-expanded="false" aria-controls="collapseSeizure">
                    Seizure Management
                </button>
            </h2>
            <div id="collapseSeizure" class="accordion-collapse collapse" aria-labelledby="headingSeizure" data-bs-parent="#firstAidAccordion">
                <div class="accordion-body">
                    If someone is having a seizure, keep calm and ensure their safety by clearing the area of hazards. Do not restrain them or put anything in their mouth. After the seizure, gently turn them onto their side to keep their airway clear. Stay with them until they regain consciousness and offer reassurance. If it’s their first seizure or it lasts longer than 5 minutes, seek medical help.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingHeatExhaustion">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHeatExhaustion" aria-expanded="false" aria-controls="collapseHeatExhaustion">
                    Heat Exhaustion Treatment
                </button>
            </h2>
            <div id="collapseHeatExhaustion" class="accordion-collapse collapse" aria-labelledby="headingHeatExhaustion" data-bs-parent="#firstAidAccordion">
                <div class="accordion-body">
                    To treat heat exhaustion, move the person to a cooler, shaded area. Have them lie down and provide cool water to drink. Apply cool cloths to the body, particularly on the neck, armpits, and groin. Monitor their condition closely; if symptoms worsen or do not improve, seek medical attention, as heat exhaustion can lead to heatstroke, which is more severe.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingHypothermia">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHypothermia" aria-expanded="false" aria-controls="collapseHypothermia">
                    Hypothermia Response
                </button>
            </h2>
            <div id="collapseHypothermia" class="accordion-collapse collapse" aria-labelledby="headingHypothermia" data-bs-parent="#firstAidAccordion">
                <div class="accordion-body">
                    In cases of hypothermia, quickly move the person to a warm area and remove any wet clothing. Wrap them in warm blankets or sleeping bags and provide warm, non-alcoholic beverages if they are conscious. Avoid direct heat sources like hot water or heating pads, as these can cause burns. Seek immediate medical assistance, as hypothermia can be life-threatening.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFirstAidKit">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFirstAidKit" aria-expanded="false" aria-controls="collapseFirstAidKit">
                    First Aid Kit Essentials
                </button>
            </h2>
            <div id="collapseFirstAidKit" class="accordion-collapse collapse" aria-labelledby="headingFirstAidKit" data-bs-parent="#firstAidAccordion">
                <div class="accordion-body">
                    A comprehensive first aid kit should include adhesive bandages, sterile gauze pads, antiseptic wipes, tweezers, scissors, adhesive tape, a digital thermometer, and a first aid manual. It’s essential to regularly check the kit for expired items and replenish supplies to ensure that you are prepared for emergencies.
                </div>
            </div>
        </div>
 

</div>



<script src="../assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
