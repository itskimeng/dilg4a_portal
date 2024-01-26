
Database Table/s:
-- Assigning aliases to table names
A = dbc_claim
B = dbc_claim_transaction
C = dbc_status
D = dbc_status_next_step
E = dbc_status_role
F = dbc_transaction
G = officialposition
H = tblbarangay
I = tblcitymun
J = tblcivil_status
K = tbldeath_reasons
L = tbleduc_status
M = tblhea
N = tblposition
O = tblprofile
P = tblprovince
Q = tblregion
R = tblreligion
S = tblsex
T = tblstatus
U = tblsuspension
V = tblterm
W = tbltype


Required Fields:
A = id | official_id | date_filed | claimant | remarks | claimant_id | check_no | dbc_controll_no | sub_allotment_no
B = id | claim_id | transaction_id | reviewed | reviewed_date
C = id | action_label | status_label | return_id | order | require_saro | require_nta | require_check_no | lgu_type | require_sub_allotment | require_files | file_count | file_message | generate_dbc_ctrl_number | dbc_ctrl_number |        group_dbc_control_num | activation_status 
D = id | status | next_step
E = id | status | type | role
F = id | date_processed | status | remarks | user_id | region_c | province_c | citymun_c | saro_no | nta_no | sub_allotment_no
G = id | title | benefit_id | color | icon | official_number | monitor_status | acronym | arrangement
H = region_c | province_c | citymun_c | barangay_c | district_c | barangay_m | income | population | classification
I = region_c | province_c | district_c | citymun_c | citymun_m | lgu_type | income
J = id | title
K =  id | death_reason
L = id | title
M = id | title
N = position_c | position_m | pos_cat_c | position_acronym | salary_grade
O = id | profile_c | region_c | province_c | citymun_c | barangay_c | term_id | position_id | rank | term | type_id | eadate | lastname | firstname | middlename | suffix | birthdate | birthplace | sex | civil_status | religion | res_address | res_tno | mobile_no | email_add | bh_telno | highest_ea | educ_status | occupation | honorarium | status_id | deathdate | reason | death_reason_id | succession | appointed_position | edate | updating_activation | date_created | date_updated | philsys_card_no
P = region_c | province_c | province_m | income | lgu_type
Q = region_c | region_m | abbreviation | region_sort
R = id | title
S = id | title
T = id | category | title
U = id | official_id | from | to | reason
V = id | title | date | to_date | sk_election
W = id | title
