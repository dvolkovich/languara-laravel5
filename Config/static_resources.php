<?php

// Languara FuelPHP Plugin Configuration
// For more information visit http://languara.com
// (c) 2015 - Languara.  All rights reserved.
//

return array(
    "endpoints" => array(
        "translation" => "api/translation/find_all.json",
        "resource" => "api/resource/find_all.json",
        "resource_group" => "api/resourcegroup/find_all.json",
        "project_locale" => "api/project/locales.json",
        "upload_translations" => "api/project/process_batch_data",
        "register" => "api/user/register.json",
        "get_translation_quote" => "api/project/get_project_translation_price",
        "translate_project" => "api/project/order_project_translation",
        "connect_plugin" => "api/project/connect_plugin",
    ),
    "config_files" => array(
        'project_config' => '/Config/languara.php',
        'static_resources' => '/config/static_resources.php',
    ),
    "origin_site" => "https://languara.dev/",
    "platform" => "Laravel",
    "messages" => array(
        // error messages
        'error_language_location' => 'ERROR: Language location is not set correctly, check the config file or download a new config file from Languara and replace the old one!',
        'error_language_dir_missing' => 'ERROR: Language directory not found, check the location of the language directory in the config file and try again!',
        'error_malformed_resource_cd' => 'ERROR: Some resource codes do not comply to the Languara guidelines and will not be processed: ',
        'error_action_aborted' => 'ERROR: Action aborted by user!',
        'error_plugin_problem' => 'ERROR: There was a problem with the plugin, re-download the plugin and try again!',
        'error_language_dir_not_writable' => 'ERROR: Language directory is not writable, make sure the proper permission are set!',
        'error_project_no_languages' => 'ERROR: Project has no languages, add some languages on Languara and then try pulling your content!',
        'error_config_file_error' => 'ERROR: Could not create the config file, make sure the config folder is writable!',
        'error_retrieving_endpoint' => 'ERROR: Failed to retrieving endpoint. Check your local configuration and make sure the endpoints array is correctly defined or just download a new config file from the server. Endpoint: ',
        'error_general_request_error' => 'ERROR: There was a error processing your request, please try again. If that does not work contact the administrators for more information!',
        'error_config_file_help_info' => 'Make sure your local config file is configured correctly. If you are not sure how to do that generate a new plugin files on Languara and replace the ones you have on your server at the moment!',
        'error_languara_servers_respond' => 'Oops: ',
        'error_curl_not_enabled' => 'ERROR: CURL is not enabled for translation service, please enable curl and try again!',
        'error_storage_engine' => 'ERROR: Storage engine is not supported!',
        'error_no_local_content' => 'ERROR: Looks like you don\'t have any language resources defined in ',
        'error_add_more_languages' => 'ERROR: You need to add or upload more then your primary language in Languara before you can translate, or the uploaded languages to the server are not supported by the current translation method!',
        'error_invalid_translation_method' => 'ERROR: Invalid tranlsation method!',
        'error_invalid_private_key' => 'You need to enter a private key for you project in order to proceed!',
        // notice messages
        'notice_retrieve_data' => 'Scanning project for locales and translations.',
        'notice_resource_cd_help_link' => 'See http://docs.languara.com for resource code format requirements!',
        'notice_pushing_content' => 'Pushing language data to Languara.',
        'notice_retrieve_languages' => 'Retrieving supported languages',
        'notice_languages_downloaded' => 'Languages downloaded: ',
        'notice_resource_groups_downloaded' => 'Resource groups downloaded: ',
        'notice_translations_downloaded' => 'Translations downloaded: ',
        'notice_retrieve_resource_groups' => 'Retrieving resource groups.',
        'notice_retrieve_translations' => 'Retrieving translations.',
        'notice_backing_up_data' => 'Backing up local language data.',
        'notice_removing_files' => 'Removing stale language files.',
        'notice_adding_content' => 'Creating fresh language files.',
        'notice_languages_pushed' => 'Languages pushed:',
        'notice_resource_groups_pushed' => 'Resource groups pushed:',
        'notice_translations_pushed' => 'Translations pushed:',
        'notice_available_commands' => 'Available commands:',
        'notice_fuel_push_command' => 'php oil refine languara:push',
        'notice_fuel_pull_command' => 'php oil refine languara:pull',
        'notice_fuel_register_command' => 'php oil refine languara:register',
        'notice_fuel_translate_command' => 'php oil refine languara:translate',
        'notice_fuel_connect_command' => 'php oil refine languara:connect',
        'notice_push_command_info' => 'This command is used for uploading content to Languara',
        'notice_pull_command_info' => 'This command is used for downloading content from Languara',
        'notice_register_command_info' => 'Register for a new Languara account',
        'notice_translate_command_info' => 'Translate your content on Languara, you can choose either human or machine translation',
        'notice_connect_command_info' => 'Connect your plugin with your project through the CLI by just providing the private key for you project.',
        'notice_starting_upload' => 'Pushing local language files to Languara',
        'notice_starting_download' => 'Pulling translations from Languara',
        'notice_register_command' => 'Create a new Languara account:  (Note: If you already have one, visit http://languara.com and setup an integration online)!',
        'notice_start_translate' => 'Starting the translation process:',
        'notice_no_account_associated' => 'Looks like you don\'t have an account...',
        'notice_requested_translations' => 'Requested translation: ',
        'notice_credits_remaining' => 'Credits remaining:     ',
        'notice_no_charge' => 'There is no charge to complete this translation.',
        'notice_current_rate' => 'Current rate for additional credits: ',
        'notice_plans_and_pricing' => 'For plans and pricing visit: https://languara.com/service/plans_and_pricing',
        'notice_account_charge' => 'Account will be charged: ',
        'notice_credits_remain_after_transaction' => 'Credits remaining after transaction: ',
        'notice_start_connect' => 'Connecting your plugin to your project, please be patient.',
        // success messages
        'success_upload_successful' => 'Push complete!',
        'success_download_successful' => 'Pull complete!',
        'success_registration_completed' => 'You are now registered!',
        'success_content_translated_successfully' => 'Content translated.',
        'success_translate_completed' => 'Translation completed!',
        'success_connected' => 'Plugin successfully connected!',
        // prompt messages
        'prompt_proceed_with_upload' => 'Do you want to push your content [y/n]? ',
        'prompt_enter_first_name' => 'Enter you First Name: ',
        'prompt_first_name_validation' => 'First name should consist of letters!',
        'prompt_enter_password' => 'Enter you password: ',
        'prompt_password_validation' => 'Password should consost of 6 to 15 alpha-numeric or special chars!',
        'prompt_enter_last_name' => 'Enter you Last Name: ',
        'prompt_last_name_validation' => 'Last name should consist of letters!',
        'prompt_enter_email' => 'Enter you Email Address: ',
        'prompt_email_validation' => 'Enter a valid email addess!',
        'prompt_create_language_dir' => 'Do you want to create the language folder? [y/n] ',
        'prompt_push_content' => 'Push your content to Languara? [y/n] ',
        'prompt_pull_content' => 'Do you want to pull your content from Languara? [y/n] ',
        'prompt_continue_translating' => 'Do you want to continue? [y/n] ',
        'prompt_register_before_continue' => 'Create a Languara account? [y/n] ',
    ),
);