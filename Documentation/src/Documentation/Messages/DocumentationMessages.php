<?php

/**
 * LoginMessages interface
 * This file is used manage login module messages
 *
 * @category Login
 * @package  Messages
 *
 */
namespace Documentation\Messages;

/**
 * LoginMessages interface
 * This file is used manage login module messages
 *
 * @category Login
 * @package Messages
 *         
 */
interface DocumentationMessages
{

    const DATA_NOT_SAVED = 'Data not saved';

    const DATA_NOT_EXIST = 'Data does not exist.';

    const DATA_EXIST = 'Data found.';

    const INTERNAL_ERROR = 'Internal server error.';

    const BASIC_SETTINGS_SUCCESS = 'Basic settings of Credit Union';

    const BASIC_SETTINGS_NOT_EXISTS = 'Basic settings of Credit Union does not exist';

    const PARAMETER_MISMATCH = 'Parameter mismatch.';

    const EMPLOYEE_FOUND_SUCCESS = 'List of employees found.';

    const EMPLOYEE_FOUND_ERROR = 'None employees found.';

    const SURVEY_FOUND_ERROR = 'None surveys found.';

    const SURVEY_FOUND_ERROR_TITLE = 'Unprocessed survey listing.';

    const SURVEY_QUES_ERROR_TITLE = 'Unprocessed survey question listing.';

    const EMPLOYEE_FOUND_ERROR_TITLE = 'Unprocessed employee list.';

    const EMAIL_EXISTS_ERROR = 'Email already exists.';

    const EMAIL_EXISTS_ERROR_TITLE = 'Unprocessed email id.';

    const EMPLOYEE_ADD_SUCCESS_TITLE = 'Employee was added successfully.';

    const EMPLOYEE_EDIT_SUCCESS_TITLE = 'Employee was updated successfully.';

    const EMPLOYEE_DISABLE_SUCCESS_TITLE = 'Employee was successfully disabled.';

    const EMPLOYEE_ENABLE_SUCCESS_TITLE = 'Employee was successfully enabled.';

    const EMPLOYEE_NOT_FOUND = 'Employee does not exist.';

    const SURVEY_NOT_FOUND = 'Survey does not exist.';

    const SURVEY_RESPONSE_INVALID = 'Survey response invalid.';

    const EMPLOYEE_NOT_FOUND_TITLE = 'Unprocessed employee.';

    const SURVEY_NOT_FOUND_TITLE = 'Unprocessed survey.';

    const SURVEY_RESPONSE_ERROR_TITLE = 'Unprocessed survey response.';

    const ERROR = "ERROR";

    const SUCCESS = "SUCCESS";

    const DATA_NOT_UPDATED = 'Data not updated';

    const ROLE_EXISTS_ERROR_TITLE = 'Unprocessed role.';

    const ROLE_EXISTS_ERROR_DETAIL = 'Role was assigned already.';

    const ASSIGN_ROLE_SUCCESS_TITLE = 'Role assignment.';

    const ASSIGN_ROLE_SUCCESS_DETAIL = 'Role was assigned successfully.';

    const EMPLOYEE_EXISTS_ERROR_TITLE = 'Unprocessed employee.';

    const FETCH_LOGO_SUCCESS = 'Logo has been found successfully.';

    const FETCH_LOGO_ERROR = 'Unprocessed logo and color scheme.';

    const FETCH_LOGO_ERROR_DETAIL = 'Logo and color was not  found.';

    const COMPONENT_MGMT_TITLE = 'Component Management';

    const COMPONENT_MGMT_SUCCESS = 'Component was updated successfully.';

    const EXCEL_HEADER = 'Mandatory column missing. Use pre-defined format only';

    const EXCEL_FIELD = 'Mandatory field missing';

    const EXCEL_FIELD_ALBHABET = "Invalid Employee First Name or Last Name.";

    const EXCEL_FIELD_DIGIT = "Invalid Phone number.";

    const PLAN_EXISTS_ERROR_TITLE = 'Unprocessed plan id.';

    const PRIORITY_EXISTS_ERROR_TITLE = 'Unprocessed priority id.';

    const GOAL_EXISTS_ERROR_TITLE = 'Unprocessed goal id.';

    const AI_EXISTS_ERROR_TITLE = 'Unprocessed action item id.';

    const KPI_EXISTS_ERROR_TITLE = 'Unprocessed kpi id.';

    const CATEGORY_EXISTS_ERROR_TITLE = 'Unprocessed category id.';

    const CATEGORY_SUCCESS_TITLE = 'Question was added successfully.';

    const CATEGORY_EXISTS_ERROR = 'Category id was not exists.';

    const SURVEY_QUESTION_NOT_FOUND = 'Survey question was not exist';

    const SURVEY_TYPE_INCORRECT = 'Survey type incorrect.';

    const TOOL_LEVEL_INCORRECT = 'Incorrect level for analysis. Must be (plan/key-priority/goal).';

    const TOOL_LEVEL_ID_NOT_FOUND = 'Level id was not exist for analysis';

    const MAIL_NOT_SEND = "Problem in sending mail.";

    const SURVEY_QUESTION_FOUND_TITLE = 'Survey Question Found';

    const SURVEY_ADD_SUCCESS_TITLE = 'Survey was added successfully.';

    const HOSE_ADD_SUCCESS_TITLE = 'HOSE was added successfully.';

    const SWOT_ADD_SUCCESS_TITLE = 'SWOT was added successfully.';

    const SWOT_NOT_FOUND = 'SWOT id was not exist';

    const HOSE_NOT_FOUND = 'HOSE id was not exist';

    const SWOT_MANDATORY = 'All SWOT properties required.Please fill all fields(strength, weakness, opportunity, threat)';

    const HOSE_MANDATORY = 'All HOSE properties required.Please fill all fields(high value, orignal, significant, emotional)';

    const SWOT_MANDATORY_ANY = 'Please fill any SWOT property.';

    const HOSE_MANDATORY_ANY = 'Please fill any HOSE property.';

    const SWOT_RESPONSE_ADD_SUCCESS_TITLE = "SWOT response was added successfully.";

    const HOSE_RESPONSE_ADD_SUCCESS_TITLE = "HOSE response was added successfully.";

    const SWOT_RESPONSE_FOUND = 'SWOT employee response found.';

    const HOSE_RESPONSE_FOUND = 'HOSE employee response found.';
    
    const SWOT_NOT_ALLOW_RESPONSE = 'You are not able to submit this SWOT form.';
    
    const HOSE_NOT_ALLOW_RESPONSE = 'You are not able to submit this HOSE form.';

    const SWOT_REMINDER_SENT = 'SWOT reminder notification was sent successfully';

    const HOSE_REMINDER_SENT = 'HOSE reminder notification was sent successfully';

    const SWOT_EXPIRE_TITLE = 'SWOT completion date was expired';

    const HOSE_EXPIRE_TITLE = 'HOSE completion date was expired';

    const SWOT_COMPLETE_TITLE = 'SWOT is already completed.';

    const HOSE_COMPLETE_TITLE = 'HOSE is already completed.';

    const SWOT_REMINDER_ALREADY_SENT = 'SWOT reminder notification already sent';

    const HOSE_REMINDER_ALREADY_SENT = 'HOSE reminder notification already sent';

    const SWOT_ID_MANDATORY = 'SWOT id mandatory';

    const HOSE_ID_MANDATORY = 'HOSE id mandatory';

    const FETCH_EMP_SURVEY_SUCCESS_TITLE = 'Survey listing found.';

    const SURVEY_RESPONSE_SUCCESS = 'Survey response updated.';

    const SURVEY_QUESTION_RESPONSE_SUCCESS = 'Survey Responses found.';

    const SURVEY_QUESTION_RESPONSE_ERROR = 'Survey Responses was not found.';

    const SURVEY_QUESTION_RESPONSE_NOT_FOUND = 'Survey Responses was not found.';

    const SURVEY_MASTER_RESPONSE_FOUND_SUCCESS = 'Master Response was found';

    const SURVEY_MASTER_RESPONSE_NOT_FOUND = 'Master Response was not found';

    const SURVEY_MASTER_RESPONSE_SUCCESS = 'Master Response was saved successfully.';

    const SURVEY_MASTER_RESPONSE_FOUND = 'Only Master Response found. Employee Response was not exist.';

    const PRIORITY_SUCCESS_ADD_TITLE = 'Priority was added successfully.';

    const PRIORITY_SUCCESS_EDIT_TITLE = 'Priority was edited successfully.';

    const PRIORITY_DELETE_TITLE = 'Priority wasn deleted successfully.';

    const PLAN_OWNER_BACKUP_OWNER_ERROR = 'Plan owner and Backup Plan owner should not be same.';

    const PLAN_DETAIL_ADD_SUCCESS_TITLE = 'Plan details was added successfully.';

    const FETCH_SURVEY_SUCCESS_TITLE = 'Survey listing found.';

    const GOAL_SUCCESS_ADD_TITLE = 'Goal was added successfully.';

    const GOAL_SUCCESS_EDIT_TITLE = 'Goal was edited successfully.';

    const GOAL_DELETE_TITLE = 'Goal was deleted successfully.';

    const AI_SUCCESS_ADD_TITLE = 'Action Item was added successfully.';

    const AI_SUCCESS_EDIT_TITLE = 'Action Item was edited successfully.';

    const AI_DELETE_TITLE = 'Action Item was deleted successfully.';

    const PEER_GROUP_NOT_EXIST = 'No Peer Group created yet.';

    const PEER_GROUP_TITLE = 'List of created peer groups.';

    const PEER_GROUP_DETAIL = 'Detail of peer group.';

    const PEER_GROUP_INACTIVE = 'This peer group is inactive.';

    const PEER_GROUP_DELETED = 'This peer group is deleted.';

    const PEER_GROUP_NOT_DEFINE = 'There is no data in selected peer group.';

    const CRITERIA_NOT_EXIST = 'No criteria exists yet.';

    const CRITERIA_TITLE = 'List of active criteria.';

    const CRITERIA_DETAIL = 'Detail of criteria.';

    const CRITERIA_INACTIVE = 'This criteria is inactive.';

    const CRITERIA_DELETED = 'This criteria is deleted.';

    const CRITERIA_NOT_DEFINE = 'There is no data in selected criteria.';

    const INITIAL_STEP_ID_INCORRECT = "Initial setup id is incorrect.";

    const SETUP_EMPLOYEE = "Add Employee to complete initial setup step-2";

    const SETUP_UPDATED_SUCCESSFULLY = "Initial setup step was updated successfully.";

    const INCORRECT_LOGIN_CREDENTIALS = "Incorrect login credentials.";

    const SUCCESS_LOGIN = "Successfully logged in.";

    const AUTH_CLIENT = "Access tocken";

    const KPI_SUCCESS_ADD_TITLE = 'Kpi was added successfully.';

    const KPI_SUCCESS_EDIT_TITLE = 'Kpi was edited successfully.';

    const KPI_DELETE_TITLE = 'Kpi was deleted successfully.';

    const VALIDATION_TITLE_OF_PEER_GROUP_ON_FAILURE = 'You were not authorized to create more peer groups.';

    const VALIDATION_TITLE_OF_PEER_GROUP_ON_SUCCESS = 'You were authorized to create more peer groups';

    const AUTHORIZATION_ERROR = 'Permission denied error.';

    const CS_SUCCESS_EDIT_TITLE = "Create Statements was update successfully";

    const AUTH_CLIENT_TITLE = "Access Tocken";

    const LOGIN_EXCEPTION = "You can login after some time.Try later.";

    const LABEL_OPTION_UPDATED = 'Label option updated';

    const LABEL_OPTION_ERROR = 'Unprocessed label option.';

    const CREDIT_UNION_NOT_EXISTS = 'Credit union was not exists.';

    const LIST_OF_CREDIT_UNION = 'List of credit unions';

    const INVALID_CRITERIA = "Criteria code are invalid.";

    const NO_CREDIT_UNION_FOUND = "There are no credit union in that range ";

    const MIN_MAX_VALUE = "Minimum value is greater than maximim value ";

    const PEER_GROUP_NOT_FOUND = "Peer group not found ";

    const PEER_GROUP_CREATED = "Peer group  was created successfully.";

    const PEER_GROUP_UPDATED = "Peer group was updated successfully.";

    CONST NAME_ALREADY_EXISTS = "This name already exists.";

    CONST ROLES_FOUND_SUCCESS = "Roles found.";

    CONST ROLES_FOUND_ERROR = "No roles found.";

    CONST ROLES_FOUND_ERROR_TITLE = "Unprocessed roles.";

    CONST ROLES_ERROR = "Invalid role.";

    CONST SUPPORT_EMAIL_SUCCESS = "Form has been submitted successfully. Will back to you soon.";

    CONST STATE_FOUND_SUCCESS = "State listing found.";
    
    CONST STATE_FOUND_ERROR = "Unprocessed state(s).";
    
    CONST SUPPORT_TYPE_ERROR = "Unprocessed support type value.";
    
    CONST SUPPORT_TYPE_ERROR_DETAIL = "Invalid support type value.";
    
    CONST DATA_SAVED = "Data saved.";
    
    CONST DATA_UPDATED = "Data updated.";
    
    CONST FORGOT_PASSWORD_RESET_SUBJECT = "Password Reset Mail";
    
    CONST EMAIL_NOT_SENT = "Email not sent.";
    
    /**
     * ERROR CODES
     */
    const SUCCESS_CODE = 200;

    const DUPLICATE_UPDATE_SAVE_ERROR_CODE = 202;

    const DATA_NOT_FOUND_CODE = 204;

    const DATA_UPDATED_SUCCESS = 205;

    const NOT_EXIST = 204;

    const EXCEL_FIELD_DIGIT_CODE = 98;

    const EXCEL_FIELD_ALBHABET_CODE = 99;

    const EXCEL_HEADER_CODE = 100;

    const EXCEL_FIELD_CODE = 101;

    const SURVEY_TYPE_INCORRECT_CODE = 104;

    const INITIAL_STEP_ID_INCORRECT_CODE = 105;

    const SETUP_EMPLOYEE_CODE = 106;

    const LOGIN_EXCEPTION_CODE = 111;

    const MASTER_SUCCESS_CODE = 115;

    const PERMISSION_ERROR = 504;

    const VALIDATION_FAILURE = 403;

    const TOOL_LEVEL_INCORRECT_CODE = 600;

    const TOOL_LEVEL_ID_NOT_FOUND_CODE = 601;

    const SWOT_MANDATORY_CODE = 602;

    const HOSE_MANDATORY_CODE = 603;

    const SWOT_REMINDER_SENT_CODE = 604;

    const SWOT_EXPIRE_TITLE_CODE = 605;

    const SWOT_COMPLETE_TITLE_CODE = 606;

    const HOSE_REMINDER_SENT_CODE = 607;

    const HOSE_EXPIRE_TITLE_CODE = 608;

    const HOSE_COMPLETE_TITLE_CODE = 609;

    const SWOT_REMINDER_ALREADY_SENT_CODE = 610;

    const HOSE_REMINDER_ALREADY_SENT_CODE = 611;

    const SOMETHING_WENT_WRONG = 'Something went wrong';

    const SOMETHING_WENT_WRONG_CODE = '202';

    const EMPLOYEE_ADD = 'Employee added successfully';

    const EMPLOYEE_EXIST_CODE = '102';

    const EMPLOYEE_EXIST_FIELD = 'Employee already exist';

    const RESET_TOKEN_EXPIRED = 'Your password has expired. Please try again.';

    const PASSWORD_MISMATCH = 'Password and confirm password should be same.';

    const CLIENT_ACTIVATED = 'Client has been activated successfully.';

    const PEER_GROUP_DEFAULT_VALIDATION_FAILURE = "There must be atleast one peer group with default";

    const CREATOR = 'PlanningPro';

    const ACTIVITY_REPORT_TITLE = 'PlanningPro User Activity Log Report';

    const ACTIVITY_REPORT_SHEET_TITLE = 'User Activiy Log Report';
    
    const RESOURCE_MY_TITLE = 'My Resource' ;
    
    const RESOURCE_MY_SAVE = 'Resource has been added successfully' ;
    
    const RESOURCE_MY_UPDATE = 'Resource has been updated successfully' ;
    
    const RESOURCE_ORDER_UPDATE = 'Resource order has been updated successfully' ;

    const PEER_GROUP_DEFAULT_VALIDATION_SUCCESS = "You can continue for next steps.";
    
    const RESOURCE_ALREADY_EXIT_TITLE = 'Resource title alredy exits.' ;

    const RESOURCE_ALREADY_EXIT_FILE = 'Resource file alredy exits.' ;
    
    const RESOURCE_RESOURCE_SWAP_NOT_EXIT = 'Swap resource id  not exits.' ;
    
    const RESOURCE_RESOURCE_CURRENT_NOT_EXIT= 'Current resource id  not exits.' ;
    
    const EMAIL_NOT_SENT_CODE = 612;
    
    const SETUP_PLAN_REPORT_SUCCESS_MESSAGE = "Setup Plan Report Component has been added successfully";
}

