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
<section class="blokk-modal" id="startups_modal">
    <span class="overlay"></span>

    <!-- Modal content -->
    <div id="raiseModal" class="blokk-modal-content movedRight">
        <form id="raiseInvestment" method="post" enctype="multipart/form-data">
            <!-- Inner wrapper -->
            <div class="inner-wrapper">
            
                <!-- Modal Header -->
                <div class="blokk-modal-header">
                    
                    <!-- Title -->
                    <h2 class="title">
                        <span>Startups</span>
                    </h2><!-- // Title -->

                    <!-- Description -->
                    <div class="description">
                        <p><?php echo nl2br('We don’t have any deadlines. We don’t run any competitions or hackathons. And we don’t accept lengthy business plans.

                            Hey! Oh!! Let’s Go!!!');?></p>
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
                                    <label class="blokk-input-group-label domains-label field-label">Which of these domains/verticals describes your business? (Please check ALL that apply.) <span class="error-addon"></span></label><!-- // Label -->
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
                                            <input id="domain-<?php echo $domain_index;?>" type="checkbox" name="domain" value="<?php echo $domain; ?>">
                                            <label for="domain-<?php echo $domain_index;?>"><?php echo $domain; ?></label>
                                        </div>
                                    </div><!-- // Input field -->
                                    <?php $domain_index++ ;} ?>                        
                                </div><!-- // Input fields -->
                            </div><!-- // Input group -->
                            
                            <!-- Input group -->
                            <div class="blokk-input-group">
                                <!-- Input fields -->
                                <div class="blokk-input-fields mb15">
                                    <!-- Input field -->
                                    <div class="blokk-input-field col col-xs-12">
                                        <!-- Blokk input -->
                                        <div class="blokk-input">
                                            <label class="field-label startupname-label" for="startup-name">Startup name <span class="error-addon"></span></label>
                                            <input id="startup-name" name="startupname" type="text" class="form-control">
                                        </div><!-- // Blokk input -->
                                    </div><!-- // Input field -->
                                </div><!-- // Input fields -->

                                <!-- Input fields -->
                                <div class="blokk-input-fields">
                                    <!-- Input field -->
                                    <div class="blokk-input-field col col-xs-12">
                                        <!-- Blokk input -->
                                        <div class="blokk-input">
                                            <label class="field-label webaddress-label" for="web_address">Web Address <span class="error-addon"></span></label>
                                            <input id="web_address" name="webaddress" type="text" class="form-control">
                                        </div><!-- // Blokk input -->
                                    </div><!-- // Input field -->
                                </div><!-- // Input fields -->
                            </div><!-- // Input group -->

                            <!-- Input group -->
                            <div class="blokk-input-group mb0">
                                <?php
                                    $i = 1;
                                    $is_registered = array(
                                        "Yes" => "checked",
                                        "No" => "",
                                    );
                                ?>
                                
                                <div class="col-xs-12">
                                    <!-- Label -->
                                    <label class="blokk-input-group-label field-label is_registered-label">Is your startup registered? <span class="error-addon"></span></label><!-- // Label -->
                                </div><!-- ./col -->
                                
                                <!-- Input fields -->
                                <div class="blokk-input-fields">
                                    <?php foreach ($is_registered as $key => $value) { ?>
                                    <!-- Input field -->
                                    <div class="input-field col col-xs-2">
                                        <div class="blokk-radio">
                                            <input id="answer_<?php echo $i;?>" <?php echo $value; ?> name="is_registered" value="<?php echo $key; ?>" type="radio">
                                            <label for="answer_<?php echo $i;?>"><?php echo $key; ?></label>
                                        </div>
                                    </div><!-- // Input field -->
                                    <?php $i++ ;} ?>                        
                                </div><!-- // Input fields -->
                            </div><!-- // Input group -->
                        </div><!-- // Form Group -->

                        <!-- Form group -->
                        <div class="blokk-form-group">
                            <!-- Group Title -->
                            <div class="blokk-form-group-title col-xs-12">
                                <h4 class="field-label team-label">Team Details <span class="error-addon"></span></h4>
                            </div><!-- // Group Title -->

                            <!-- Input group -->
                            <div class="blokk-input-group">
                                <?php for ($x = 1; $x <= 3; $x++) { ?>
                                <!-- Input fields -->
                                <div class="blokk-input-fields founder mb15">
                                    <!-- Input field -->
                                    <div class="blokk-input-field col col-xs-8">
                                        <!-- Blokk input -->
                                        <div class="blokk-input">
                                            <label for="founder_<?php echo $x; ?>">Founder <?php echo $x; ?></label>
                                            <input id="founder_<?php echo $x; ?>" type="text" class="form-control" name="founder_name">
                                        </div><!-- // Blokk input -->
                                    </div><!-- // Input field -->

                                    <!-- Input field -->
                                    <div class="input-field col col-xs-4">
                                        <div class="blokk-checkbox mt34 mb0 founder_availability_checkbox">
                                            <input id="is_founder-<?php echo $x;?>-fulltime" value="Founder <?php echo $x;?> is Fulltime" type="checkbox" name="founder_availability">
                                            <label for="is_founder-<?php echo $x;?>-fulltime">Full time</label>
                                        </div>
                                    </div><!-- // Input field -->
                                </div><!-- // Input fields -->
                                <?php } ?>
                            </div><!-- // Input group -->
                        </div><!-- // Form group -->

                        <!-- Form group -->
                        <div class="blokk-form-group">
                            <!-- Group Title -->
                            <div class="blokk-form-group-title col-xs-12">
                                <h4>Primary Contact Person</h4>
                            </div><!-- // Group Title -->

                            <!-- Input group -->
                            <div class="blokk-input-group">
                                <!-- Input fields -->
                                <div class="blokk-input-fields mb15">
                                    <!-- Input field -->
                                    <div class="blokk-input-field col col-xs-12">
                                        <!-- Blokk input -->
                                        <div class="blokk-input">
                                            <label class="field-label primary_contact_name-label" for="primary-contact-name">Name <span class="error-addon"></span></label>
                                            <input id="primary-contact-name" name="primary_contact_name" type="text" class="form-control">
                                        </div><!-- // Blokk input -->
                                    </div><!-- // Input field -->
                                </div><!-- // Input fields -->

                                <!-- Input fields -->
                                <div class="blokk-input-fields mb15">
                                    <!-- Input field -->
                                    <div class="blokk-input-field col col-xs-12">
                                        <!-- Blokk input -->
                                        <div class="blokk-input">
                                            <label class="field-label primary_contact_email-label" for="primary-contact-email">Email <span class="error-addon"></span></label>
                                            <input id="primary-contact-email" name="primary_contact_email" type="text" class="form-control">
                                        </div><!-- // Blokk input -->
                                    </div><!-- // Input field -->
                                </div><!-- // Input fields -->

                                <!-- Input fields -->
                                <div class="blokk-input-fields">
                                    <!-- Input field -->
                                    <div class="blokk-input-field col col-xs-12">
                                        <!-- Blokk input -->
                                        <div class="blokk-input">
                                            <label class="field-label primary_contact_mobile-label" for="primary-contact-mobile">Mobile <span class="error-addon"></span></label>
                                            <input id="primary-contact-mobile" name="primary_contact_mobile" type="text" class="form-control">
                                        </div><!-- // Blokk input -->
                                    </div><!-- // Input field -->
                                </div><!-- // Input fields -->
                            </div><!-- // Input group -->
                        </div><!-- // Form group -->

                        <!-- Form group -->
                        <div class="blokk-form-group">
                            <!-- Group Title -->
                            <div class="blokk-form-group-title col-xs-12">
                                <h4>Type of the startup</h4>
                            </div><!-- // Group Title -->

                            <!-- Input group -->
                            <div class="blokk-input-group">
                                <!-- Input fields -->
                                <div class="blokk-input-fields mb15">
                                    <!-- Input field -->
                                    <div class="blokk-input-field col col-xs-12">
                                        <!-- Blokk input -->
                                        <div class="blokk-input">
                                            <label class="field-label problem_trying_to_solve-label" for="problem">What is the problem you’re trying to solve? <span class="error-addon"></span></label>
                                            <textarea id="problem" name="problem_trying_to_solve" class="form-control"></textarea>
                                        </div><!-- // Blokk input -->
                                    </div><!-- // Input field -->
                                </div><!-- // Input fields -->

                                <!-- Input fields -->
                                <div class="blokk-input-fields">
                                    <!-- Input field -->
                                    <div class="blokk-input-field col col-xs-12">
                                        <!-- Blokk input -->
                                        <div class="blokk-input">
                                            <label class="field-label why_you-label" for="why-you">Why are you (startup) the one to solve this problem? <span class="error-addon"></span></label>
                                            <textarea id="why-you" name="why_you" class="form-control"></textarea>
                                        </div><!-- // Blokk input -->
                                    </div><!-- // Input field -->
                                </div><!-- // Input fields -->
                            </div><!-- // Input group -->
                        </div><!-- // Form group -->

                        <!-- Form group -->
                        <div class="blokk-form-group">

                            <!-- Input group -->
                            <div class="blokk-input-group mb0">
                                <?php
                                    $i = 1;
                                    $is_launched = array(
                                        'Yes, it’s public' => '',
                                        'Yes, it’s on private beta' => '',
                                        'Yes, it’s on public beta' => '',
                                        'No' => 'checked',
                                    );
                                ?>

                                <div class="col-xs-12">
                                    <!-- Label -->
                                    <label class="blokk-input-group-label field-label is_launched-label">Have you launched your product? <span class="error-addon"></span></label><!-- // Label -->
                                </div><!-- ./col -->
                                
                                <!-- Input fields -->
                                <div class="blokk-input-fields">
                                    <?php foreach ($is_launched as $key => $value) { ?>
                                    <!-- Input field -->
                                    <div class="input-field col col-xs-6">
                                        <div class="blokk-radio">
                                            <input id="l_answer-<?php echo $i;?>" <?php echo $value; ?> type="radio" name="is_launched" value="<?php echo $key; ?>">
                                            <label for="l_answer-<?php echo $i;?>"><?php echo $key; ?></label>
                                        </div>
                                    </div><!-- // Input field -->
                                    <?php $i++ ;} ?>                        
                                </div><!-- // Input fields -->
                            </div><!-- // Input group -->
                        </div><!-- // Form group -->

                        <!-- Form group -->
                        <div class="blokk-form-group">
                            <!-- Group Title -->
                            <div class="blokk-form-group-title col-xs-12">
                                <h4 class="field-label month_revenue-label">What was your last 3 months revenue like (LKR)? <span class="error-addon"></span></h4>
                            </div><!-- // Group Title -->

                            <!-- Input group -->
                            <div class="blokk-input-group mb0">
                                <!-- Input fields -->
                                <div class="blokk-input-fields rev-month mb15">
                                    <?php for ($x = 1; $x <= 3; $x++) { ?>
                                    <!-- Input field -->
                                    <div class="blokk-input-field col col-xs-4">
                                        <!-- Blokk input -->
                                        <div class="blokk-input">
                                            <label class="field-label month_revenue_<?php echo $x; ?>-label" for="month-<?php echo $x; ?>">Month <?php echo $x; ?></label>
                                            <input id="month-<?php echo $x; ?>" type="text" class="form-control" name="month_revenue_<?php echo $x; ?>">
                                        </div><!-- // Blokk input -->
                                    </div><!-- // Input field -->
                                    <?php } ?>
                                </div><!-- // Input fields -->
                            </div><!-- // Input group -->

                            <!-- Input group -->
                            <div class="blokk-input-group mb0">
                                <?php
                                    $i = 1;
                                    $financial_recs = array(
                                        "Yes" => "checked",
                                        "No" => "",
                                    );
                                ?>

                                <div class="col-xs-12">
                                    <!-- Label -->
                                    <label class="blokk-input-group-label field-label financial_recs-label">Do you have financial records to prove the above? <span class="error-addon"></span></label><!-- // Label -->
                                </div><!-- ./col -->
                                
                                <!-- Input fields -->
                                <div class="blokk-input-fields">
                                    <?php foreach ($financial_recs as $key => $value) { ?>
                                    <!-- Input field -->
                                    <div class="input-field col col-xs-2">
                                        <div class="blokk-radio">
                                            <input id="f_answer-<?php echo $i;?>" <?php echo $value; ?> type="radio" name="financial_recs" value="<?php echo $key; ?>">
                                            <label for="f_answer-<?php echo $i;?>"><?php echo $key; ?></label>
                                        </div>
                                    </div><!-- // Input field -->
                                    <?php $i++ ;} ?>                        
                                </div><!-- // Input fields -->
                            </div><!-- // Input group -->

                            <!-- Input group -->
                            <div class="blokk-input-group">

                                <!-- Input fields -->
                                <div class="blokk-input-fields mb15">
                                    <!-- Input field -->
                                    <div class="blokk-input-field col col-xs-12">
                                        <!-- Blokk input -->
                                        <div class="blokk-input">
                                            <label class="field-label monthly_burn_rate-label" for="monthly-burn-rate">What is your monthly Burn Rate? <span class="error-addon"></span></label>
                                            <input id="monthly-burn-rate" type="text" class="form-control" name="monthly_burn_rate">
                                        </div><!-- // Blokk input -->
                                    </div><!-- // Input field -->
                                </div><!-- // Input fields -->

                                <!-- Input fields -->
                                <div class="blokk-input-fields">
                                    <!-- Input field -->
                                    <div class="blokk-input-field col col-xs-12">
                                        <!-- Blokk input -->
                                        <div class="blokk-input">
                                            <label class="field-label more_comments-label" for="more-comments">Anything else we should know about <span class="error-addon"></span></label>
                                            <textarea id="more-comments" class="form-control" name="more_comments"></textarea>
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
                        <button id="submitStartups" class="submit submit-btn btn-primary">Submit</button>

                        <label id="SubmissionMessage" class="submission-message"></label>
                    </div><!-- // Form submission -->
                </div><!-- // Inner wrapper -->
            </div><!-- // Modal Footer -->
        </form>
    </div><!-- // Modal content -->
</section><!-- // Modal -->