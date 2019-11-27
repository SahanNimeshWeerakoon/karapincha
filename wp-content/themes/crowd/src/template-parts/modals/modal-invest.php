<?php
/**
 * Displays Modal
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
?>
<!-- Modal -->
<section class="blokk-modal" id="investors_modal">
    <span class="overlay"></span>

    <!-- Modal content -->
    <div class="blokk-modal-content movedRight">
        <form id="investors_modal_form" method="post" enctype="multipart/form-data">
            <!-- Inner wrapper -->
            <div class="inner-wrapper">
            
                <!-- Modal Header -->
                <div class="blokk-modal-header">
                    
                    <!-- Title -->
                    <h2 class="title">
                        <span>Investors</span>
                    </h2><!-- // Title -->

                    <!-- Description -->
                    <div class="description">
                        <p><?php echo nl2br('Investing in Startups and early stage business involves risks, including illiquidity, lack of dividends, loss of investment and dilution. crowdisland is targeted exclusively at investors who are sufficiently sophisticated to understand these risks and make their own investment decisions.');?></p>
                    </div><!-- // Description -->
                </div><!-- // Modal Header -->

                <!-- Modal Success -->
                <div class="blokk-modal-success"></div><!-- // Modal Success -->
            
                <!-- Modal body --> 
                <div class="blokk-modal-body">
                    
                    <!-- Raise investment form -->
                    <div class="form">
                        
                        <!-- Form Group -->
                        <div class="blokk-form-group">

                            <!-- Input group -->
                            <div class="blokk-input-group mb0">

                                <div class="col-xs-12">
                                    <!-- Label -->
                                    <label class="blokk-input-group-label domains-label field-label">What industries are you familiar with? <span class="error-addon"></span></label><!-- // Label -->
                                </div><!-- ./col -->

                                <?php
                                    $domain_index = 1;
                                    $domains = [
                                        'Analytics',
                                        'HealthTech',
                                        'Artificial Intelligence',
                                        'InsureTech',
                                        'Augmented Reality',
                                        'IoT',
                                        'Automotive',
                                        'Machine Learning',
                                        'AgTech',
                                        'Marketplace',
                                        'Big Data',
                                        'Media',
                                        'E-commerce',
                                        'Robotics',
                                        'EdTech',
                                        'SaaS',
                                        'FinTech',
                                        'Sharing Economy',
                                        'Hardware',
                                        'Social Impact',
                                        'Virtual Reality',
                                    ];
                                ?>                            
                                <!-- Input fields -->
                                <div class="blokk-input-fields">
                                    <?php foreach ($domains as $domain) { ?>
                                    <!-- Input field -->
                                    <div class="input-field col col-xs-6">
                                        <div class="blokk-checkbox">
                                            <input id="investor_domain-<?php echo $domain_index;?>" type="checkbox" name="domain" value="<?php echo $domain; ?>">
                                            <label for="investor_domain-<?php echo $domain_index;?>"><?php echo $domain; ?></label>
                                        </div>
                                    </div><!-- // Input field -->
                                    <?php $domain_index++ ;} ?>                        
                                </div><!-- // Input fields -->
                            </div><!-- // Input group -->

                        </div><!-- // Form Group -->

                        <!-- Form group -->
                        <div class="blokk-form-group">
                            <!-- Input group -->
                            <div class="blokk-input-group">
                                <!-- Input fields -->
                                <div class="blokk-input-fields mb15">
                                    <!-- Input field -->
                                    <div class="blokk-input-field col col-xs-6">
                                        <!-- Blokk input -->
                                        <div class="blokk-input">
                                            <label class="field-label first_name-label" for="first_name">First name <span class="error-addon"></span></label>
                                            <input id="first_name" name="first_name" type="text" class="form-control">
                                        </div><!-- // Blokk input -->
                                    </div><!-- // Input field -->

                                    <!-- Input field -->
                                    <div class="blokk-input-field col col-xs-6">
                                        <!-- Blokk input -->
                                        <div class="blokk-input">
                                            <label class="field-label last_name-label" for="last_name">Last name <span class="error-addon"></span></label>
                                            <input id="last_name" name="last_name" type="text" class="form-control">
                                        </div><!-- // Blokk input -->
                                    </div><!-- // Input field -->
                                </div><!-- // Input fields -->

                                <!-- Input fields -->
                                <div class="blokk-input-fields mb15">
                                    <!-- Input field -->
                                    <div class="blokk-input-field col col-xs-12">
                                        <!-- Blokk input -->
                                        <div class="blokk-input">
                                            <label class="field-label email_address-label" for="email_address">Email Address <span class="error-addon"></span></label>
                                            <input id="email_address" name="email_address" type="text" class="form-control">
                                        </div><!-- // Blokk input -->
                                    </div><!-- // Input field -->
                                </div><!-- // Input fields -->

                                <!-- Input fields -->
                                <div class="blokk-input-fields mb15">
                                    <!-- Input field -->
                                    <div class="blokk-input-field col col-xs-12">
                                        <!-- Blokk input -->
                                        <div class="blokk-input">
                                            <label class="field-label mobile_number-label" for="mobile_number">Mobile Number <span class="error-addon"></span></label>
                                            <input id="mobile_number" name="mobile_number" type="text" class="form-control">
                                        </div><!-- // Blokk input -->
                                    </div><!-- // Input field -->
                                </div><!-- // Input fields -->

                                <!-- Input fields -->
                                <div class="blokk-input-fields mb15">
                                    <!-- Input field -->
                                    <div class="blokk-input-field col col-xs-12">
                                        <!-- Blokk input -->
                                        <div class="blokk-input">
                                            <label class="field-label linkedin-label" for="linkedin">LinkedIn URL <span class="error-addon"></span></label>
                                            <input id="linkedin" name="linkedin" type="text" class="form-control">
                                        </div><!-- // Blokk input -->
                                    </div><!-- // Input field -->
                                </div><!-- // Input fields -->

                                <!-- Input fields -->
                                <div class="blokk-input-fields mb15">
                                    <!-- Input field -->
                                    <div class="blokk-input-field col col-xs-12">
                                        <!-- Blokk input -->
                                        <div class="blokk-input">
                                            <label class="field-label country-label" for="country">Country <span class="error-addon"></span></label>
                                            <input id="country" name="country" type="text" class="form-control">
                                        </div><!-- // Blokk input -->
                                    </div><!-- // Input field -->
                                </div><!-- // Input fields -->
                            </div><!-- // Input group -->

                            <!-- Input group -->
                            <div class="blokk-input-group mb0">
                                <?php
                                    $i = 1;
                                    $has_invested = array(
                                        "Yes" => "checked",
                                        "No" => "",
                                    );
                                ?>

                                <div class="col-xs-12">
                                    <!-- Label -->
                                    <label class="blokk-input-group-label field-label has_invested-label">Have you invested in startups before? <span class="error-addon"></span></label><!-- // Label -->
                                </div><!-- ./col -->
                                
                                <!-- Input fields -->
                                <div class="blokk-input-fields">
                                    <?php foreach ($has_invested as $key => $value) { ?>
                                    <!-- Input field -->
                                    <div class="input-field col col-xs-2">
                                        <div class="blokk-radio">
                                            <input id="answer_<?php echo $i;?>" <?php echo $value; ?> name="has_invested" value="<?php echo $key; ?>" type="radio">
                                            <label for="answer_<?php echo $i;?>"><?php echo $key; ?></label>
                                        </div>
                                    </div><!-- // Input field -->
                                    <?php $i++ ;} ?>                        
                                </div><!-- // Input fields -->
                            </div><!-- // Input group -->
                        </div><!-- // Form group -->

                        <!-- Form group -->
                        <div class="blokk-form-group">

                            <!-- Input group -->
                            <div class="blokk-input-group">

                                <!-- Input fields -->
                                <div class="blokk-input-fields mb15">
                                    <!-- Input field -->
                                    <div class="blokk-input-field col col-xs-12">
                                        <!-- Blokk input -->
                                        <div class="blokk-input">
                                            <label class="field-label commitment_hours-label" for="commitment_hours">How many hours can you commit per week (Hours) <span class="error-addon"></span></label>
                                            <input id="commitment_hours" name="commitment_hours" type="text" class="form-control">
                                        </div><!-- // Blokk input -->
                                    </div><!-- // Input field -->
                                </div><!-- // Input fields -->

                                <!-- Input fields -->
                                <div class="blokk-input-fields mb15">
                                    <!-- Input field -->
                                    <div class="blokk-input-field col col-xs-12">
                                        <!-- Blokk input -->
                                        <div class="blokk-input">
                                            <label class="field-label minimum_investment-label" for="minimum_investment">What is your minimum investment per company (LKR) <span class="error-addon"></span></label>
                                            <input id="minimum_investment" name="minimum_investment" type="text" class="form-control">
                                        </div><!-- // Blokk input -->
                                    </div><!-- // Input field -->
                                </div><!-- // Input fields -->
                            </div><!-- // Input group -->
                        </div><!-- // Form group -->
                    </div><!-- // Raise investment form -->
                </div><!-- // Modal body -->
            </div><!-- // Inner wrapper -->

            <!-- Modal Footer -->
            <div class="blokk-modal-footer">
                <!-- Inner wrapper -->
                <div class="inner-wrapper">

                    <!-- Form submission -->
                    <div class="form-submission">
                        <button id="submitInvestors" class="submit submit-btn btn-primary">Submit</button>

                        <label id="InvestorSubmissionMessage" class="submission-message"></label>
                    </div><!-- // Form submission -->
                </div><!-- // Inner wrapper -->
            </div><!-- // Modal Footer -->
        </form>
    </div><!-- // Modal content -->
</section><!-- // Modal -->