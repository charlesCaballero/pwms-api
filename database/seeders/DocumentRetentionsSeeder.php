<?php

namespace Database\Seeders;

use App\Models\DocumentRetentions;
use Illuminate\Database\Seeder;

class DocumentRetentionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DocumentRetentions::insert(
            [
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "1",
                    "series_title_description" => "APPLICATION FOR ACCREDITATION - Hospital",
                    "retention_period" => "3",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "1",
                    "series_title_description" => "APPLICATION FOR ACCREDITATION - Other Institution",
                    "retention_period" => "3",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "1",
                    "series_title_description" => "APPLICATION FOR ACCREDITATION - Professional",
                    "retention_period" => "4",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "1",
                    "series_title_description" => "APPLICATION FOR ACCREDITATION - Rural Health",
                    "retention_period" => "3",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "2",
                    "series_title_description" => "CERTIFICATES OF ACCREDITATION",
                    "retention_period" => "3",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "3",
                    "series_title_description" => "LOGBOOKS FOR ACCREDITATION",
                    "retention_period" => "3",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "4",
                    "series_title_description" => "MASTERLIST - Accreditation, Hospital, Hospital with Revoked Accreditation, Other Institution, Professional, Rural Health",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "5",
                    "series_title_description" => "MONTHLY MANDATORY HOSPITAL REPORTS",
                    "retention_period" => "2",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "6",
                    "series_title_description" => "ACCOMPLISHMENT REPORTS - Annual",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "6",
                    "series_title_description" => "ACCOMPLISHMENT REPORTS - Quarterly/ Monthly/ Daily",
                    "retention_period" => "2",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "7",
                    "series_title_description" => "ACKNOWLEDGEMENT RECEIPTS",
                    "retention_period" => "1",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "8",
                    "series_title_description" => "CERTIFICATES OF APPEARANCE",
                    "retention_period" => "1",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "9",
                    "series_title_description" => "CLEARANCES",
                    "retention_period" => "1",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "10",
                    "series_title_description" => "COMMUNICATIONS -Non-routine/ Routine",
                    "retention_period" => "2",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "11",
                    "series_title_description" => "DIRECTIVES/ISSUANCES - Issued By Or For The Head Of The Agency Documenting Policies / Functions/ Programs Of The Agency",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "11",
                    "series_title_description" => "DIRECTIVES/ISSUANCES - Issued By Or For The Head Of The Agency Reflecting Routinary Information Or Instruction",
                    "retention_period" => "2",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "12",
                    "series_title_description" => "LEGISLATIVE / EXECUTIVE ORDERS - Senate/ Congress/ Malacañang",
                    "retention_period" => "2",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "13",
                    "series_title_description" => "LOGBOOKS OF INCOMING / OUTGOING COMMUNICATIONS",
                    "retention_period" => "2",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "14",
                    "series_title_description" => "MAILING LISTS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "15",
                    "series_title_description" => "MEMORANDA / LETTERS",
                    "retention_period" => "2",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "16",
                    "series_title_description" => "MINUTES OF STAFF MEETING - Agenda/Notice",
                    "retention_period" => "1",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "17",
                    "series_title_description" => "ORGANIZATIONAL STRUCTURE",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "18",
                    "series_title_description" => "TRANSMITTAL / INDORSEMENT AND ACKNOWLEDGEMENT RECEIPTS",
                    "retention_period" => "",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "19",
                    "series_title_description" => "TRAVEL PAPERS",
                    "retention_period" => "2",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "20",
                    "series_title_description" => "ANNUAL BUDGETS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Budget Division"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "21",
                    "series_title_description" => "BUDGET PROPOSALS",
                    "retention_period" => "3",
                    "dept_unit" => "Budget Division"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "22",
                    "series_title_description" => "CASH ALLOCATION CEILINGS / NOTICE OF CASH ALLOCATION",
                    "retention_period" => "3",
                    "dept_unit" => "Budget Division"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "23",
                    "series_title_description" => "GENERAL APPROPRIATION ACTS",
                    "retention_period" => "3",
                    "dept_unit" => "Budget Division"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "24",
                    "series_title_description" => "REQUESTS FOR OBLIGATION OF ALLOTMENT",
                    "retention_period" => "3",
                    "dept_unit" => "Budget Division"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "25",
                    "series_title_description" => "WORK AND FINANCIAL PLANS",
                    "retention_period" => "3",
                    "dept_unit" => "Budget Division"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "26",
                    "series_title_description" => "ABSTRACTS OF SUB-VOUCHERS",
                    "retention_period" => "2",
                    "dept_unit" => "Finance Management"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "27",
                    "series_title_description" => "ADVICE OF CHECKS ISSUED AND CANCELLED",
                    "retention_period" => "4",
                    "dept_unit" => "Finance Management"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "28",
                    "series_title_description" => "ANNUAL STATEMENTS OF ACCOUNTS PAYABLE",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Finance Management"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "29",
                    "series_title_description" => "FINANCIAL STATEMENT REPORTS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Finance Management"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "30",
                    "series_title_description" => "NOTICES - Dissallowance/Suspension",
                    "retention_period" => "3",
                    "dept_unit" => "Finance Management"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "31",
                    "series_title_description" => "OFFICIAL RECEIPTS",
                    "retention_period" => "10",
                    "dept_unit" => "Finance Management"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "32",
                    "series_title_description" => "PAYROLLS",
                    "retention_period" => "10",
                    "dept_unit" => "Finance Management"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "33",
                    "series_title_description" => "SUBSIDIARY LEDGERS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Finance Management"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "34",
                    "series_title_description" => "TREASURY BANK REPORTS",
                    "retention_period" => "10",
                    "dept_unit" => "Finance Management"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "35",
                    "series_title_description" => "VOUCHERS",
                    "retention_period" => "10",
                    "dept_unit" => "Finance Management"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "36",
                    "series_title_description" => "201 FILES",
                    "retention_period" => "15",
                    "dept_unit" => "Human Resource Management"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "37",
                    "series_title_description" => "APPLICATIONS FOR LEAVE",
                    "retention_period" => "1",
                    "dept_unit" => "Human Resource Management"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "38",
                    "series_title_description" => "CERTIFICATES",
                    "retention_period" => "1",
                    "dept_unit" => "Human Resource Management"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "39",
                    "series_title_description" => "DAILY TIME RECORDS",
                    "retention_period" => "1",
                    "dept_unit" => "Human Resource Management"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "40",
                    "series_title_description" => "LOGBOOKS OF TIME RECORDS / IN & OUT",
                    "retention_period" => "1",
                    "dept_unit" => "Human Resource Management"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "41",
                    "series_title_description" => "NOTICES - Abscences/ Vacancy",
                    "retention_period" => "1",
                    "dept_unit" => "Human Resource Management"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "42",
                    "series_title_description" => "OVERTIME FILES",
                    "retention_period" => "1",
                    "dept_unit" => "Human Resource Management"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "43",
                    "series_title_description" => "PERFORMANCE EVALUATION REPORTS / COMMITMENTS",
                    "retention_period" => "1",
                    "dept_unit" => "Human Resource Management"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "44",
                    "series_title_description" => "PLANS AND TARGETS",
                    "retention_period" => "1",
                    "dept_unit" => "Human Resource Management"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "45",
                    "series_title_description" => "PLANTILLAS OF PERSONNEL",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Human Resource Management"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "46",
                    "series_title_description" => "STATEMENTS OF ASSETS AND LIABILITIES",
                    "retention_period" => "10",
                    "dept_unit" => "Human Resource Management"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "47",
                    "series_title_description" => "SUMMARIES OF ATTENDANCE",
                    "retention_period" => "1",
                    "dept_unit" => "Human Resource Management"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "48",
                    "series_title_description" => "BACKUP AND FILE MAINTENANCE CHECKLIST / DATABASES",
                    "retention_period" => "1",
                    "dept_unit" => "Management Information System Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "49",
                    "series_title_description" => "DATABASE FILE UPDATE AND ADJUSTMENT REQUEST / SYSTEM AND DATABASE UPDATE REQUEST",
                    "retention_period" => "1",
                    "dept_unit" => "Management Information System Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "50",
                    "series_title_description" => "EVALUATION REPORTS OF DEFECTIVE INFORMATION TECHNOLOGY EQUIPMENT",
                    "retention_period" => "1",
                    "dept_unit" => "Management Information System Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "51",
                    "series_title_description" => "INFORMATION TECHNOLOGY FILES - Equipment Inventory",
                    "retention_period" => "1",
                    "dept_unit" => "Management Information System Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "51",
                    "series_title_description" => "INFORMATION TECHNOLOGY FILES - Equipment Transfer Form",
                    "retention_period" => "1",
                    "dept_unit" => "Management Information System Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "51",
                    "series_title_description" => "INFORMATION TECHNOLOGY FILES - Related Research",
                    "retention_period" => "3",
                    "dept_unit" => "Management Information System Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "51",
                    "series_title_description" => "INFORMATION TECHNOLOGY FILES - Standard Manual",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Management Information System Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "51",
                    "series_title_description" => "INFORMATION TECHNOLOGY FILES - Training Course",
                    "retention_period" => "1",
                    "dept_unit" => "Management Information System Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "52",
                    "series_title_description" => "PROPOSALS / QUOTATIONS",
                    "retention_period" => "1",
                    "dept_unit" => "Management Information System Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "53",
                    "series_title_description" => "REPORTS",
                    "retention_period" => "2",
                    "dept_unit" => "Management Information System Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "54",
                    "series_title_description" => "MIS PROCEDURED MANUAL",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Management Information System Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "55",
                    "series_title_description" => "REQUESTS ON AMENDMENT NOTIFICATION",
                    "retention_period" => "1",
                    "dept_unit" => "Management Information System Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "56",
                    "series_title_description" => "USER MANUALS OF EQUIPMENT",
                    "retention_period" => "2",
                    "dept_unit" => "Management Information System Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "57",
                    "series_title_description" => "WAIVER FORMS",
                    "retention_period" => "1",
                    "dept_unit" => "Management Information System Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "58",
                    "series_title_description" => "APPEALED CLAIMS",
                    "retention_period" => "5",
                    "dept_unit" => "Office of Chief Operating Officer"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "59",
                    "series_title_description" => "EX-GRATIA FILES",
                    "retention_period" => "3",
                    "dept_unit" => "Office of Chief Operating Officer"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "60",
                    "series_title_description" => "LOGBOOKS OF APPEALED CLAIMS AND COMMUNICATIONS",
                    "retention_period" => "2",
                    "dept_unit" => "Office of Chief Operating Officer"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "61",
                    "series_title_description" => "MATRIX OF PRESENTED APPEALS FILES",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Office of Chief Operating Officer"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "62",
                    "series_title_description" => "REPORTS",
                    "retention_period" => "2",
                    "dept_unit" => "Office of Chief Operating Officer"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "63",
                    "series_title_description" => "BATCHLIST COMPILATION FOR SERVICE BUREAUS",
                    "retention_period" => "5",
                    "dept_unit" => "Contribution Accounts Management Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "64",
                    "series_title_description" => "INDEX CARDS OF GOVERNMENT OFFICES",
                    "retention_period" => "5",
                    "dept_unit" => "Contribution Accounts Management Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "65",
                    "series_title_description" => "INDICATIVE PLANS(TARGETS)",
                    "retention_period" => "1",
                    "dept_unit" => "Contribution Accounts Management Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "66",
                    "series_title_description" => "INDORSEMENTS ON MEMBERSHIP",
                    "retention_period" => "1",
                    "dept_unit" => "Contribution Accounts Management Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "67",
                    "series_title_description" => "INQUIRIES / VERIFICATIONS",
                    "retention_period" => "1",
                    "dept_unit" => "Contribution Accounts Management Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "68",
                    "series_title_description" => "JUSTIFICATION REQUESTS FOR EQUIPMENT",
                    "retention_period" => "1",
                    "dept_unit" => "Contribution Accounts Management Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "69",
                    "series_title_description" => "MANUALS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Contribution Accounts Management Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "70",
                    "series_title_description" => "PHILHEALTH REMITTANCE REPORTS (RF-1)",
                    "retention_period" => "10",
                    "dept_unit" => "Contribution Accounts Management Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "71",
                    "series_title_description" => "PROOFLISTS FROM SERVICE BUREAUS",
                    "retention_period" => "2",
                    "dept_unit" => "Contribution Accounts Management Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "72",
                    "series_title_description" => "REFUND AND CONFIRMATION LETTERS",
                    "retention_period" => "1",
                    "dept_unit" => "Contribution Accounts Management Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "73",
                    "series_title_description" => "REMITTANCE STATUS REPORTS",
                    "retention_period" => "10",
                    "dept_unit" => "Contribution Accounts Management Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "74",
                    "series_title_description" => "REQUESTS",
                    "retention_period" => "1",
                    "dept_unit" => "Contribution Accounts Management Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "75",
                    "series_title_description" => "VALIDATION LISTS FROM MIS",
                    "retention_period" => "2",
                    "dept_unit" => "Contribution Accounts Management Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "76",
                    "series_title_description" => "ADMINISTRATIVE CASES",
                    "retention_period" => "15",
                    "dept_unit" => "Fact Finding and Administrative Investigation Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "77",
                    "series_title_description" => "CERTIFICATES OF PHONE CALLS",
                    "retention_period" => "1",
                    "dept_unit" => "Fact Finding and Administrative Investigation Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "78",
                    "series_title_description" => "HOSPITALS CLAIMS CASES",
                    "retention_period" => "5",
                    "dept_unit" => "Fact Finding and Administrative Investigation Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "79",
                    "series_title_description" => "AGENCY PROCUREMENT REQUESTS",
                    "retention_period" => "2",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "80",
                    "series_title_description" => "ANNUAL PROCUREMENT PLANS",
                    "retention_period" => "3",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "81",
                    "series_title_description" => "AUTHORITIES TO RELEASE",
                    "retention_period" => "1",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "82",
                    "series_title_description" => "BIN/ STOCK CARDS",
                    "retention_period" => "3",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "83",
                    "series_title_description" => "CERTIFICATES OF ACCEPTANCE WITH ATTACHMENTS",
                    "retention_period" => "5",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "84",
                    "series_title_description" => "CONTRACTS WITH ATTACHMENTS",
                    "retention_period" => "5",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "85",
                    "series_title_description" => "DELIVERY RECEIPT REPORTS",
                    "retention_period" => "2",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "86",
                    "series_title_description" => "EQUIPMENT LEDGER / HISTORY CARDS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "87",
                    "series_title_description" => "GATE PASSES",
                    "retention_period" => "1",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "88",
                    "series_title_description" => "INSPECTION REPORTS",
                    "retention_period" => "2",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "89",
                    "series_title_description" => "INVENTORIES OF EQUIPMENT",
                    "retention_period" => "1",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "90",
                    "series_title_description" => "INVENTORY AND INSPECTION REPORTS OF UNSERVICEABLE PROPERTIES",
                    "retention_period" => "1",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "91",
                    "series_title_description" => "INVOICE RECEIPTS OF PROPERTIES",
                    "retention_period" => "3",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "92",
                    "series_title_description" => "JOB REQUESTS / ORDERS",
                    "retention_period" => "1",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "93",
                    "series_title_description" => "MEMORANDUM RECEIPTS",
                    "retention_period" => "1",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "94",
                    "series_title_description" => "PETTY CASH WITHDRAWAL SLIPS",
                    "retention_period" => "1",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "95",
                    "series_title_description" => "PETTY CASH VOUCHERS",
                    "retention_period" => "10",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "96",
                    "series_title_description" => "PHYSICAL INVENTORY REPORTS OF EQUIPMENT / SEMI-EXPENDABLE",
                    "retention_period" => "2",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "97",
                    "series_title_description" => "PROPERTIES",
                    "retention_period" => "1",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "98",
                    "series_title_description" => "PULL-OUT FOR REPAIR / RECEIPT OF EQUIPMENT",
                    "retention_period" => "5",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "99",
                    "series_title_description" => "PURCHASE ORDERS",
                    "retention_period" => "4",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "100",
                    "series_title_description" => "REPORTS",
                    "retention_period" => "2",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "101",
                    "series_title_description" => "REQUESTS FOR TRANSFER OF ACCOUNTABILITIES",
                    "retention_period" => "1",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "102",
                    "series_title_description" => "REQUISITION AND ISSUE VOUCHERS / SLIPS",
                    "retention_period" => "1",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "103",
                    "series_title_description" => "RETURN REGISTRY RECEIPTS",
                    "retention_period" => "",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "104",
                    "series_title_description" => "STATEMENTS OF OF ACCOUNTS / BILLING STATEMENTS, TELEPHONE",
                    "retention_period" => "5",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "105",
                    "series_title_description" => "SUPPLIES WITHDRAWAL SLIPS",
                    "retention_period" => "1",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "106",
                    "series_title_description" => "ACKNOWLEDGEMENT LETTERS",
                    "retention_period" => "1",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "107",
                    "series_title_description" => "LETTER INQUIRIES FROM MEMBERS",
                    "retention_period" => "1",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "108",
                    "series_title_description" => "MEMBERS DATA RECORDS WITH DEFICIENCY",
                    "retention_period" => "5",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "109",
                    "series_title_description" => "MIAs (MEMBERS DATA RECORD FORM)",
                    "retention_period" => "10",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "110",
                    "series_title_description" => "MIB'S IPM (INDIVIDUAL PAYING MEMBERS)",
                    "retention_period" => "10",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "111",
                    "series_title_description" => "MIC (NON-PAYING MEMBERS)",
                    "retention_period" => "10",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "112",
                    "series_title_description" => "REQUESTS FOR AMENDMENT / COMPLIANCES",
                    "retention_period" => "10",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "113",
                    "series_title_description" => "TRANSMITTAL LISTS OF ID's RELEASED",
                    "retention_period" => "1",
                    "dept_unit" => "General Services Department"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "114",
                    "series_title_description" => "BOARD RESOLUTIONS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Office of the Corporate Board Secretary"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "115",
                    "series_title_description" => "CERTIFICATES OF ATTENDANCE TO BOARD MEETINGS",
                    "retention_period" => "1",
                    "dept_unit" => "Office of the Corporate Board Secretary"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "116",
                    "series_title_description" => "MINUTES OF BOARD MEETINGS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Office of the Corporate Board Secretary"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "117",
                    "series_title_description" => "SUMMARY OF CALLS",
                    "retention_period" => "1",
                    "dept_unit" => "Office of the Corporate Board Secretary"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "118",
                    "series_title_description" => "DISTRIBUTION LISTS",
                    "retention_period" => "2",
                    "dept_unit" => "Office of the President"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "119",
                    "series_title_description" => "MINUTES OF MEETINGS",
                    "retention_period" => "5",
                    "dept_unit" => "Office of the President"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "120",
                    "series_title_description" => "REPORTS - Internal Audit Department",
                    "retention_period" => "2",
                    "dept_unit" => "Office of the President"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "",
                    "series_title_description" => "REPORTS - Management Services Sector",
                    "retention_period" => "15",
                    "dept_unit" => "Office of the President"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "",
                    "series_title_description" => "REPORTS - Philhealth Regional Office ",
                    "retention_period" => "3",
                    "dept_unit" => "Office of the President"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "",
                    "series_title_description" => "REPORTS - Protest And Appeals Review Department",
                    "retention_period" => "15",
                    "dept_unit" => "Office of the President"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "121",
                    "series_title_description" => "FINANCIAL REPORTS",
                    "retention_period" => "5",
                    "dept_unit" => "Office of the Senior Vice President Management Services Sector"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "122",
                    "series_title_description" => "HEALTH AND FINANCE DEVELOPMENT PROJECT FILES",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Office of the Senior Vice President Management Services Sector"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "123",
                    "series_title_description" => "NOTICES OF REGULAR BOARD MEETINGS",
                    "retention_period" => "1",
                    "dept_unit" => "Office of the Senior Vice President Management Services Sector"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "124",
                    "series_title_description" => "OPERATION MANUALS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Office of the Senior Vice President Management Services Sector"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "125",
                    "series_title_description" => "PRO FINANCIAL PROFILES ",
                    "retention_period" => "4",
                    "dept_unit" => "Office of the Senior Vice President Management Services Sector"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "126",
                    "series_title_description" => "REPORTS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Office of the Senior Vice President Management Services Sector"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "127",
                    "series_title_description" => "STAFFING MODIFICATION FILES",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Office of the Senior Vice President Management Services Sector"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "128",
                    "series_title_description" => "SUMMARIES OF INVESTIBLE",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Office of the Senior Vice President Management Services Sector"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "129",
                    "series_title_description" => "ADMINISTRATIVE CASES WITH RELEVANT ATTACHMENTS",
                    "retention_period" => "15",
                    "dept_unit" => "Office of the Vice President - Legal Services Group"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "130",
                    "series_title_description" => "CERTIFICATES NO PENDING CASE",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Office of the Vice President - Legal Services Group"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "131",
                    "series_title_description" => "CONTRACTS - Broadcast/Lease/Security/Service",
                    "retention_period" => "5",
                    "dept_unit" => "Office of the Vice President - Legal Services Group"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "131",
                    "series_title_description" => "CONTRACTS - Purchase of Land/ Building",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Office of the Vice President - Legal Services Group"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "132",
                    "series_title_description" => "LEGAL OPINIONS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Office of the Vice President - Legal Services Group"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "133",
                    "series_title_description" => "LOGBOOKS OF CASES AND COMPLAINTS",
                    "retention_period" => "5",
                    "dept_unit" => "Office of the Vice President - Legal Services Group"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "134",
                    "series_title_description" => "MINUTES OF COMMITTEE MEETINGS (LABOR MANAGEMENT/ ACCREDITATION)",
                    "retention_period" => "5",
                    "dept_unit" => "Office of the Vice President - Legal Services Group"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "135",
                    "series_title_description" => "RESEARCH STUDIES",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Office of the Vice President - Legal Services Group"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "136",
                    "series_title_description" => "CONSOLIDATED UTILIZATION / MONITORING REPORTS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Quality Assurance and Research Policy Development Group (QARPDG)"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "137",
                    "series_title_description" => "INVITATIONS",
                    "retention_period" => "1",
                    "dept_unit" => "Quality Assurance and Research Policy Development Group (QARPDG)"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "138",
                    "series_title_description" => "LETTERS / FOR INFORMATION/ ADVISORY",
                    "retention_period" => "1",
                    "dept_unit" => "Quality Assurance and Research Policy Development Group (QARPDG)"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "139",
                    "series_title_description" => "MANUALS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Quality Assurance and Research Policy Development Group (QARPDG)"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "140",
                    "series_title_description" => "MINUTES OF MEETINGS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Quality Assurance and Research Policy Development Group (QARPDG)"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "141",
                    "series_title_description" => "NEWSLETTERS / ARTICLES",
                    "retention_period" => "1",
                    "dept_unit" => "Quality Assurance and Research Policy Development Group (QARPDG)"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "142",
                    "series_title_description" => "PRESENTATION MATERIALS",
                    "retention_period" => "1",
                    "dept_unit" => "Quality Assurance and Research Policy Development Group (QARPDG)"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "143",
                    "series_title_description" => "RESEARCH DATA COLLECTION FORMS / SURVEY FORMS (ACCOMPLISHED)",
                    "retention_period" => "2",
                    "dept_unit" => "Quality Assurance and Research Policy Development Group (QARPDG)"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "144",
                    "series_title_description" => "RESEARCH OUTPUTS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Quality Assurance and Research Policy Development Group (QARPDG)"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "145",
                    "series_title_description" => "TERMS OF REFERENCE / MEMORANDUM OF AGREEMENT / MEMORANDUM OF UNDERSTANDING",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Quality Assurance and Research Policy Development Group (QARPDG)"
                ],
                [
                    "rds_no" => "RDS-A",
                    "rds_item_no" => "146",
                    "series_title_description" => "UTILIZATION / MONITORING CONSOLIDATED REPORTS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Quality Assurance and Research Policy Development Group (QARPDG)"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "1",
                    "series_title_description" => "CLAIMS ACCOUNTING CLEARANCES",
                    "retention_period" => "10",
                    "dept_unit" => "Claims Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "2",
                    "series_title_description" => "DENIED CLAIMS FILES (HOSPITAL / MEMBERS) ",
                    "retention_period" => "3",
                    "dept_unit" => "Claims Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "3",
                    "series_title_description" => "CLAIMS REQUESTS FOR CHECK REPLACEMENT AND SUPPORTING DOCUMENTS",
                    "retention_period" => "10",
                    "dept_unit" => "Claims Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "4",
                    "series_title_description" => "CLAIMS DEBIT CREDIT SYSTEM (DCS) ALLOWANCES",
                    "retention_period" => "10",
                    "dept_unit" => "Claims Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "5",
                    "series_title_description" => "INDORSEMENT OF STALE AND RETURN TO SENDER (RTS) CHECKS",
                    "retention_period" => "10",
                    "dept_unit" => "Claims Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "6",
                    "series_title_description" => "LISTS ",
                    "retention_period" => "3",
                    "dept_unit" => "Claims Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "7",
                    "series_title_description" => "LOGBOOKS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Claims Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "8",
                    "series_title_description" => "MASTERLISTS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Claims Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "9",
                    "series_title_description" => "MEMBER'S AND PROFESSIONAL BENEFITS PAYMENT NOTICES (BPN) (RETURN TO SENDER)",
                    "retention_period" => "2",
                    "dept_unit" => "Claims Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "10",
                    "series_title_description" => "ORDER OF PAYMENTS",
                    "retention_period" => "10",
                    "dept_unit" => "Claims Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "11",
                    "series_title_description" => "REPORTS - Claims Status /Daily Auto Credit Summary Reports/Indigent (Monthly Operation Report)",
                    "retention_period" => "2",
                    "dept_unit" => "Claims Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "11",
                    "series_title_description" => "REPORTS - Monthly Reports",
                    "retention_period" => "10",
                    "dept_unit" => "Claims Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "11",
                    "series_title_description" => "REPORTS - Statistical",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Claims Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "12",
                    "series_title_description" => "REQUESTS OF BENEFIT CLAIMS ADJUSTMENT",
                    "retention_period" => "2",
                    "dept_unit" => "Claims Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "13",
                    "series_title_description" => "SCHEDULES OF ACCOUNTS ",
                    "retention_period" => "3",
                    "dept_unit" => "Claims Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "14",
                    "series_title_description" => "STATEMENTS OF ACCOUNTS - Payable ",
                    "retention_period" => "10",
                    "dept_unit" => "Claims Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "14",
                    "series_title_description" => "STATEMENTS OF ACCOUNTS - Receivables",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Claims Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "15",
                    "series_title_description" => "SUMMARIES OF BENEFITS PAYMENT",
                    "retention_period" => "10",
                    "dept_unit" => "Claims Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "16",
                    "series_title_description" => "TRANSMITTAL LISTS OF ID's RELEASED",
                    "retention_period" => "10",
                    "dept_unit" => "Claims Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "17",
                    "series_title_description" => "VOUCHERS WITH SUPPORTING DOCUMENTS",
                    "retention_period" => "10",
                    "dept_unit" => "Claims Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "18",
                    "series_title_description" => "WITHHOLDING TAX CERTIFICATES (RETURN TO SENDER",
                    "retention_period" => "4",
                    "dept_unit" => "Claims Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "19",
                    "series_title_description" => "AUDIT OBSERVATION MEMORANDUM ",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Comptrollership Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "20",
                    "series_title_description" => "BOOKS OF FINAL ENTRY",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Comptrollership Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "21",
                    "series_title_description" => "BOOKS OF ORIGINAL ENTRY ",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Comptrollership Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "22",
                    "series_title_description" => "BUDGET RELEASE ORDERS (BROs) ADN FUND TRANSFERS (FTs)",
                    "retention_period" => "3",
                    "dept_unit" => "Comptrollership Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "23",
                    "series_title_description" => "CORPORATE OPERATING BUDGETS - Budget Proposals",
                    "retention_period" => "3",
                    "dept_unit" => "Comptrollership Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "23",
                    "series_title_description" => "CORPORATE OPERATING BUDGETS - Details Of Approved Corporate Operating Budget",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Comptrollership Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "23",
                    "series_title_description" => "CORPORATE OPERATING BUDGETS - Status",
                    "retention_period" => "7",
                    "dept_unit" => ""
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "24",
                    "series_title_description" => "FINANCIAL REPORTS WITH SUPPORTING DOCUMENTS",
                    "retention_period" => "10",
                    "dept_unit" => "Comptrollership Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "25",
                    "series_title_description" => "LIST OF REMITTANCES",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Comptrollership Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "26",
                    "series_title_description" => "MONTHLY SCHEDULE OF ACCOUNTS ",
                    "retention_period" => "10",
                    "dept_unit" => "Comptrollership Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "27",
                    "series_title_description" => "NOTICE OF DISALLOWANCES / SUSPENSIONS",
                    "retention_period" => "3",
                    "dept_unit" => "Comptrollership Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "28",
                    "series_title_description" => "SUMMARIES OF DISALLOWANCES ",
                    "retention_period" => "3",
                    "dept_unit" => "Comptrollership Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "29",
                    "series_title_description" => "IMPLEMENTING RULES AND REGULATIONS (IRR) OF THE NATIONAL HEALTH INSURANCE ACT OF 1995 (R.A. 7875 AS AMENDED BY R.A. 9241)",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Corporate Planning Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "30",
                    "series_title_description" => "POSITION PAPERS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Corporate Planning Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "31",
                    "series_title_description" => "REPORTS OF OPERATIONS - Annual",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Corporate Planning Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "31",
                    "series_title_description" => "REPORTS OF OPERATIONS - Monthly",
                    "retention_period" => "2",
                    "dept_unit" => "Corporate Planning Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "32",
                    "series_title_description" => "RESEARCH MATERIALS ",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Corporate Planning Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "33",
                    "series_title_description" => "RESEARCH / STUDIES OF OUT PATIENT BENEFITS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Corporate Planning Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "34",
                    "series_title_description" => "APPLICATIONS - Clearance/Employment",
                    "retention_period" => "1",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "34",
                    "series_title_description" => "APPLICATIONS - Relief Of Accountability",
                    "retention_period" => "5",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "35",
                    "series_title_description" => "ANNUAL MEDICAL EXAM RESULTS",
                    "retention_period" => "2",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "36",
                    "series_title_description" => "ANNUAL SUMMARY REPORTS FOR REPLACEMENT PROGRAM FOR NON-ELIGIBLES",
                    "retention_period" => "5",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "37",
                    "series_title_description" => "ATM PROOFLISTS",
                    "retention_period" => "2",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "38",
                    "series_title_description" => "AUTHORITIES / REQUESTS TO FILL IN VACANT POSITIONS",
                    "retention_period" => "2",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "39",
                    "series_title_description" => "CERTIFICATES OF ELIGIBLES",
                    "retention_period" => "1",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "40",
                    "series_title_description" => "DELIBERATION DOCUMENTS - MATRIX APPLICANTS",
                    "retention_period" => "5",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "41",
                    "series_title_description" => "DISTRIBUTION LISTS",
                    "retention_period" => "1",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "42",
                    "series_title_description" => "EMPLOYEES INTERVIEW RECORDS",
                    "retention_period" => "1",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "43",
                    "series_title_description" => "HUMAN RESOURCE ORGANIZATIONAL DEVELOPMENT RECORDS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "44",
                    "series_title_description" => "HUMAN RESOURCE PROJECTS  (CHANGE MGT./RE-ENGINEERING)",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "45",
                    "series_title_description" => "JOB ORDER CONTRACT",
                    "retention_period" => "1",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "46",
                    "series_title_description" => "LEAVE CREDIT CARDS",
                    "retention_period" => "15",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "47",
                    "series_title_description" => "MANUALS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "48",
                    "series_title_description" => "MERIT PROMOTION PLANS",
                    "retention_period" => "1",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "49",
                    "series_title_description" => "NOTICES",
                    "retention_period" => "2",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "50",
                    "series_title_description" => "PERFORMANCE FILES ",
                    "retention_period" => "1",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "51",
                    "series_title_description" => "PERSONAL DATA SHEETS (CURRICULUM VITAE/ RESUME)",
                    "retention_period" => "1",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "52",
                    "series_title_description" => "PERSONNEL FOLDERS (201 FILES)",
                    "retention_period" => "15",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "53",
                    "series_title_description" => "PLANTILLAS OF PERSONNEL (REGULAR / CONTRACTOR/ CONTRACTUAL)",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "54",
                    "series_title_description" => "POSITION CLASSIFICATION AND PAY PLANS",
                    "retention_period" => "5",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "55",
                    "series_title_description" => "REQUESTS - Approval Of Promotion, Change Of Status , Reinstatement, Transfer",
                    "retention_period" => "1",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "55",
                    "series_title_description" => "REQUESTS - Bonding Officials / Employees",
                    "retention_period" => "3",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "55",
                    "series_title_description" => "REQUESTS - Change Of Work Schedules/Fill Vacant Positions/Performance Management (pms) Documents",
                    "retention_period" => "1",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "56",
                    "series_title_description" => "SERVICE CARDS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "57",
                    "series_title_description" => "SIGNATURE OF HANDWRITING SPECIMENS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "58",
                    "series_title_description" => "TEST QUESTIONNAIRES",
                    "retention_period" => "2",
                    "dept_unit" => "Human Resource Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "59",
                    "series_title_description" => "CALENDARS",
                    "retention_period" => "1",
                    "dept_unit" => "Training Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "60",
                    "series_title_description" => "COURSE DESIGNS / OUTLINES / SYLLABI",
                    "retention_period" => "1",
                    "dept_unit" => "Training Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "61",
                    "series_title_description" => "MASTERLISTS",
                    "retention_period" => "Permanent ",
                    "dept_unit" => "Training Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "62",
                    "series_title_description" => "PLANS / PROGRAMS",
                    "retention_period" => "1",
                    "dept_unit" => "Training Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "63",
                    "series_title_description" => "REPORTS - Terminal",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Training Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "63",
                    "series_title_description" => "REPORTS - Training ",
                    "retention_period" => "2",
                    "dept_unit" => "Training Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "64",
                    "series_title_description" => "RESOURCE SPEAKER PROFILES ",
                    "retention_period" => "1",
                    "dept_unit" => "Training Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "65",
                    "series_title_description" => "SCHEDULES",
                    "retention_period" => "1",
                    "dept_unit" => "Training Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "66",
                    "series_title_description" => "HARDWARE AND SOFTWARE ALLOCATION MATRICES",
                    "retention_period" => "2",
                    "dept_unit" => "Information Technology Management Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "67",
                    "series_title_description" => "INFORMATION SYSTEM STRATEGIC PLANS (ISSPs)",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Information Technology Management Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "68",
                    "series_title_description" => "SOFTWARE PAPER LICENSES",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Information Technology Management Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "69",
                    "series_title_description" => "SYSTEM FILES",
                    "retention_period" => "1",
                    "dept_unit" => "Information Technology Management Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "70",
                    "series_title_description" => "AUDIT REPORTS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Office of the Vice President - IAD and Internal Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "71",
                    "series_title_description" => "AUDIT WORKING PAPERS",
                    "retention_period" => "5",
                    "dept_unit" => "Office of the Vice President - IAD and Internal Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "72",
                    "series_title_description" => "COMMENTS AND CORRESPONDING ON AUDIT",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Office of the Vice President - IAD and Internal Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "73",
                    "series_title_description" => "EVALUATION SHEETS",
                    "retention_period" => "2",
                    "dept_unit" => "Office of the Vice President - IAD and Internal Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "74",
                    "series_title_description" => "INTERNAL AUDIT LOGBOOKS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Office of the Vice President - IAD and Internal Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "75",
                    "series_title_description" => "PROGRESS / REJOINDER REPORTS",
                    "retention_period" => "5",
                    "dept_unit" => "Office of the Vice President - IAD and Internal Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "76",
                    "series_title_description" => "BOARD MEETING PRESENTATIONS",
                    "retention_period" => "2",
                    "dept_unit" => "Office of the Chief Operating Officer"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "77",
                    "series_title_description" => "COMMITTEE / EXECOM RECORDS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Office of the Chief Operating Officer"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "78",
                    "series_title_description" => "CONFIDENTIAL RECORDS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Office of the Chief Operating Officer"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "79",
                    "series_title_description" => "ATTENDANCE SHEETS (BAC-ITR AND BAC-GS",
                    "retention_period" => "5",
                    "dept_unit" => "Office of the Secretariat - Bidding and Awards Committee"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "80",
                    "series_title_description" => "BID DOCUMENTS",
                    "retention_period" => "5",
                    "dept_unit" => "Office of the Secretariat - Bidding and Awards Committee"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "81",
                    "series_title_description" => "CASH ADVANCES ",
                    "retention_period" => "10",
                    "dept_unit" => "Office of the Secretariat - Bidding and Awards Committee"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "82",
                    "series_title_description" => "MINUTES OF THE MEETING (BAC)",
                    "retention_period" => "5",
                    "dept_unit" => "Office of the Secretariat - Bidding and Awards Committee"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "83",
                    "series_title_description" => "PROCUREMENT MONITORING REPORTS",
                    "retention_period" => "5",
                    "dept_unit" => "Office of the Secretariat - Bidding and Awards Committee"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "84",
                    "series_title_description" => "REQUESTS FOR PROPOSAL",
                    "retention_period" => "2",
                    "dept_unit" => "Office of the Secretariat - Bidding and Awards Committee"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "85",
                    "series_title_description" => "COMMITTEE FILES",
                    "retention_period" => "2",
                    "dept_unit" => "Office of the Senior Vice President - Operations Sector"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "86",
                    "series_title_description" => "MEETINGS - Fora /Study Tours/Sectoral/Special Sectoral",
                    "retention_period" => "3",
                    "dept_unit" => "Office of the Senior Vice President - Operations Sector"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "86",
                    "series_title_description" => "MEETINGS - Quality Improvement Demonstration Study",
                    "retention_period" => "2",
                    "dept_unit" => "Office of the Senior Vice President - Operations Sector"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "87",
                    "series_title_description" => "MEMO TO ASSISTANT VICE PRESIDENTS (AVP's)",
                    "retention_period" => "4",
                    "dept_unit" => "Office of the Senior Vice President - Operations Sector"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "88",
                    "series_title_description" => "ACTUARIAL FILES ",
                    "retention_period" => "10",
                    "dept_unit" => "Office of the Senior Vice President - Office of the Actuary"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "89",
                    "series_title_description" => "ANALYSIS",
                    "retention_period" => "10",
                    "dept_unit" => "Office of the Senior Vice President - Office of the Actuary"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "90",
                    "series_title_description" => "ANNUAL CORPORATE OPERATING BUDGETS (COB)",
                    "retention_period" => "10",
                    "dept_unit" => "Office of the Senior Vice President - Office of the Actuary"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "91",
                    "series_title_description" => "ANNUAL OPERATING BUDGETS (COB)",
                    "retention_period" => "10",
                    "dept_unit" => "Office of the Senior Vice President - Office of the Actuary"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "92",
                    "series_title_description" => "ANNUAL VALUATION OF NATIONAL HEALTH INSURANCE PROGRAMS (NHIP) FUND DETERMINATION OF RESERVES",
                    "retention_period" => "10",
                    "dept_unit" => "Office of the Senior Vice President - Office of the Actuary"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "93",
                    "series_title_description" => "REPORTS",
                    "retention_period" => "10",
                    "dept_unit" => "Office of the Senior Vice President - Office of the Actuary"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "94",
                    "series_title_description" => "CASE FILES ",
                    "retention_period" => "7",
                    "dept_unit" => "Legal Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "95",
                    "series_title_description" => "CASE STATUS REPORTS",
                    "retention_period" => "5",
                    "dept_unit" => "Legal Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "96",
                    "series_title_description" => "CONTRACT FILES",
                    "retention_period" => "5",
                    "dept_unit" => "Legal Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "97",
                    "series_title_description" => "LEGAL ISSUANCES ",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Legal Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "98",
                    "series_title_description" => "LEGAL OPINIONS ",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Legal Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "99",
                    "series_title_description" => "LOGBOOKS",
                    "retention_period" => "5",
                    "dept_unit" => "Legal Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "100",
                    "series_title_description" => "MEMORANDUM OF AGREEMENT (MOA)",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Legal Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "101",
                    "series_title_description" => "AGENDA OF DIFFERENT COMMITTEE MEETINGS",
                    "retention_period" => "2",
                    "dept_unit" => "Members Management Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "102",
                    "series_title_description" => "BENEFITS UTILIZATION",
                    "retention_period" => "2",
                    "dept_unit" => "Members Management Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "103",
                    "series_title_description" => "CAPACITY BUILDING FOR POVERTY REDUCTION ( JOINT UNDP-GOP PROJECT )",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Members Management Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "104",
                    "series_title_description" => "CERTIFICATIONS  OF TELEPHONE  BILLS ",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Members Management Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "105",
                    "series_title_description" => "COMMUNICATIONS (PHILHEALTH REGIONAL OFFICE (PRO) AND PROVIDERS)",
                    "retention_period" => "5",
                    "dept_unit" => "Members Management Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "106",
                    "series_title_description" => "ENHANCED  PCSO GREATER MEDICARE ACCESS PROGRAM  - Implementing Guidelines/- Memorandum Of Agreement (MOA)",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Members Management Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "106",
                    "series_title_description" => "ENHANCED  PCSO GREATER MEDICARE ACCESS PROGRAM - Local Government Unit (LGU) Receipts/ Reports Of Examination",
                    "retention_period" => "2",
                    "dept_unit" => "Members Management Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "107",
                    "series_title_description" => "FAMILY DATA SURVEY (FDSF)",
                    "retention_period" => "2",
                    "dept_unit" => "Members Management Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "108",
                    "series_title_description" => "GUIDELINES OF PHILHEALTH ORGANIZED GROUP INTERFACE MODULES 1&2",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Members Management Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "109",
                    "series_title_description" => "INDIGENT FILES - ID's",
                    "retention_period" => "1",
                    "dept_unit" => "Members Management Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "109",
                    "series_title_description" => "INDIGENT FILES - Test Questionnaires",
                    "retention_period" => "2",
                    "dept_unit" => "Members Management Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "110",
                    "series_title_description" => "JOINT RESOLUTIONS AND ORDINANCES (WITH LGU)",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Members Management Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "111",
                    "series_title_description" => "LINGAP PROGRAM (INDIGENTS)",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Members Management Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "112",
                    "series_title_description" => "MEMO ADDRESSED TO PRO's AND NCR-CPD ON CLARIFICATION / POLICIES ON CLAIMS PROCESSING",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Members Management Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "113",
                    "series_title_description" => "PHILHEALTH CAPITATION FUNDS",
                    "retention_period" => "10",
                    "dept_unit" => "Members Management Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "114",
                    "series_title_description" => "PHILHEALTH STATISTICS AND CHARTS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Members Management Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "115",
                    "series_title_description" => "RECEIVING SHEETS",
                    "retention_period" => "2",
                    "dept_unit" => "Members Management Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "116",
                    "series_title_description" => "REPORTS - Annual Claims",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Members Management Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "116",
                    "series_title_description" => "REPORTS - Daily Inventory Claims/Monthly Claims/ Weekly Claims Status",
                    "retention_period" => "2",
                    "dept_unit" => "Members Management Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "116",
                    "series_title_description" => "REPORTS - Debit / Credit System (DCS)",
                    "retention_period" => "2",
                    "dept_unit" => "Members Management Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "116",
                    "series_title_description" => "REPORTS - Monthly",
                    "retention_period" => "3",
                    "dept_unit" => "Members Management Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "116",
                    "series_title_description" => "REPORTS - Monthly Legislative Sponsorship Program",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Members Management Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "116",
                    "series_title_description" => "REPORTS - Monthly Consolidated 5 Million Plan/Monthly New Enrollees And Renewal/Monthly Private Sponsorship Program/Monthly Sponsored Program",
                    "retention_period" => "2",
                    "dept_unit" => "Members Management Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "117",
                    "series_title_description" => "REQUESTS",
                    "retention_period" => "2",
                    "dept_unit" => "Members Management Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "118",
                    "series_title_description" => "REVISED IRR VIS-A-VIS OLD IRR (CORP PLAN TRANSFER)",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Members Management Group Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "119",
                    "series_title_description" => "DEFICIENCIES COMPLIANCE ",
                    "retention_period" => "1",
                    "dept_unit" => "Special Programs Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "120",
                    "series_title_description" => "LETTERS",
                    "retention_period" => "2",
                    "dept_unit" => "Special Programs Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "121",
                    "series_title_description" => "MEMBERS DATA AMENDMENT ( FROM M2)",
                    "retention_period" => "10",
                    "dept_unit" => "Special Programs Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "122",
                    "series_title_description" => "MEMBERSHIP DATA RECORDS (OFW)",
                    "retention_period" => "10",
                    "dept_unit" => "Special Programs Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "123",
                    "series_title_description" => "OFW INFORMATION SHEETS",
                    "retention_period" => "10",
                    "dept_unit" => "Special Programs Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "124",
                    "series_title_description" => "OFW PREMIUM REFUND VOUCHERS ",
                    "retention_period" => "10",
                    "dept_unit" => "Special Programs Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "125",
                    "series_title_description" => "SUMMARY REPORTS OF OFW FOR REGISTRATION",
                    "retention_period" => "5",
                    "dept_unit" => "Special Programs Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "126",
                    "series_title_description" => "EVALUATION AND RECOMMENDATIONS ( FROM CONCERNED SUPERVISORS )",
                    "retention_period" => "2",
                    "dept_unit" => "Overtime Review Committee"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "127",
                    "series_title_description" => "ACKNOWLEDGEMENT RECEIPTS FOR EQUIPMENT (ARE)",
                    "retention_period" => "1",
                    "dept_unit" => "Physical Resources and Infrastructure Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "128",
                    "series_title_description" => "ADJUSTMENTS / AMENDMENTS / ADDENDA",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Physical Resources and Infrastructure Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "129",
                    "series_title_description" => " CERTIFICATES - Disposal (with Attachments)",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Physical Resources and Infrastructure Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "129",
                    "series_title_description" => " CERTIFICATES - Loading With Attachments (postal)/Mailing",
                    "retention_period" => "10",
                    "dept_unit" => "Physical Resources and Infrastructure Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "130",
                    "series_title_description" => "CHARGE OUT CARDS",
                    "retention_period" => "1",
                    "dept_unit" => "Physical Resources and Infrastructure Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "131",
                    "series_title_description" => "CONFIRMATION OF REQUESTS FOR BONDING OF OFFICIALS",
                    "retention_period" => "3",
                    "dept_unit" => "Physical Resources and Infrastructure Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "132",
                    "series_title_description" => "COURIER SERVICE PROVIDER FILES",
                    "retention_period" => "2",
                    "dept_unit" => "Physical Resources and Infrastructure Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "133",
                    "series_title_description" => "DAILY MONITORING SHEETS ",
                    "retention_period" => "1",
                    "dept_unit" => "Physical Resources and Infrastructure Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "134",
                    "series_title_description" => "DEEDS OF DONATIONS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Physical Resources and Infrastructure Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "135",
                    "series_title_description" => "INSURANCE OF PHIC VEHICLES / EQUIPMENT",
                    "retention_period" => "2",
                    "dept_unit" => "Physical Resources and Infrastructure Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "136",
                    "series_title_description" => "LOGBOOKS",
                    "retention_period" => "2",
                    "dept_unit" => "Physical Resources and Infrastructure Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "137",
                    "series_title_description" => "MANUAL OF OPERATIONS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Physical Resources and Infrastructure Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "138",
                    "series_title_description" => "ORGANIZATIONAL MISSION AND MEDICAL PROGRAMS ",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Physical Resources and Infrastructure Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "139",
                    "series_title_description" => "PHILIPPINE HEALTH INSURANCE CORPORATION (PHIC) RULES OF PROCEDURES",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Physical Resources and Infrastructure Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "140",
                    "series_title_description" => "PHILIPPINE MEDICAL CARE COMMISSION (PMCC) ORGANIZATIONAL CHART",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Physical Resources and Infrastructure Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "141",
                    "series_title_description" => "PROCEDURES ON MEDICAL REFUNDS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Physical Resources and Infrastructure Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "142",
                    "series_title_description" => "PHILHEALTH REGIONAL OFFICE (PRO)'S ACKNOWLEDGEMENT LETTERS / AUTHORIZATIONS",
                    "retention_period" => "2",
                    "dept_unit" => "Physical Resources and Infrastructure Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "143",
                    "series_title_description" => "REGISTRY RETURN RECEIPTS (RRR) - Checks",
                    "retention_period" => "5",
                    "dept_unit" => "Physical Resources and Infrastructure Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "143",
                    "series_title_description" => "REGISTRY RETURN RECEIPTS (RRR) - Other Documents",
                    "retention_period" => "2",
                    "dept_unit" => "Physical Resources and Infrastructure Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "144",
                    "series_title_description" => "REPORTS ",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Physical Resources and Infrastructure Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "145",
                    "series_title_description" => "REQUESTS - Cancellation / Hold Order/Copy Of Issuance/Withdrawal",
                    "retention_period" => "1",
                    "dept_unit" => "Physical Resources and Infrastructure Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "145",
                    "series_title_description" => "REQUESTS - Disposal (with Attachments)/Distribution List Per Department/- Storage",
                    "retention_period" => "2",
                    "dept_unit" => "Physical Resources and Infrastructure Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "145",
                    "series_title_description" => "REQUESTS - Mailing With Transmittal (for Legal / Claims )",
                    "retention_period" => "5",
                    "dept_unit" => "Physical Resources and Infrastructure Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "146",
                    "series_title_description" => "SUMMARY OF FUEL CONSUMPTIONS",
                    "retention_period" => "2",
                    "dept_unit" => "Physical Resources and Infrastructure Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "147",
                    "series_title_description" => "TRIP TICKETS",
                    "retention_period" => "1",
                    "dept_unit" => "Physical Resources and Infrastructure Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "148",
                    "series_title_description" => "TARGET REVIEW  MONITORING / OPERATIONAL PLANS",
                    "retention_period" => "3",
                    "dept_unit" => "Physical Resources and Infrastructure Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "149",
                    "series_title_description" => "BROADCAST CONTRACTS",
                    "retention_period" => "5",
                    "dept_unit" => "Public Affairs Records "
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "150",
                    "series_title_description" => "INFORMATION EDUCATION CAMPAIGN",
                    "retention_period" => "5",
                    "dept_unit" => "Public Affairs Records "
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "151",
                    "series_title_description" => "NEW CLIPPINGS (ABOUT / BY THE AGENCY)",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Public Affairs Records "
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "152",
                    "series_title_description" => "CLAIMS OF HEALTH CARE PROVIDERS OUTLIER FOR PERFORMANCE MONITORING, UTILIZATION AND REVIEW ",
                    "retention_period" => "10",
                    "dept_unit" => "Standards and Monitoring Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "153",
                    "series_title_description" => "NEWSLETTERS / ARTICLES (ABOUT / BT THE AGENCY)",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Standards and Monitoring Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "154",
                    "series_title_description" => "ABSTRACTS ",
                    "retention_period" => "5",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "155",
                    "series_title_description" => "ADVICES",
                    "retention_period" => "3",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "156",
                    "series_title_description" => "ANNUAL PROCUREMENT PLANS ",
                    "retention_period" => "3",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "157",
                    "series_title_description" => "CERTIFICATIONS OF PREMIUM REMITTANCES (ALL GOVERNMENT AGENCIES)",
                    "retention_period" => "7",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "158",
                    "series_title_description" => "COMPARATIVE BUDGETS",
                    "retention_period" => "3",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "159",
                    "series_title_description" => "CONSOLIDATED CASH DISBURSEMENTS",
                    "retention_period" => "3",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "160",
                    "series_title_description" => "DEPOSIT SLIPS",
                    "retention_period" => "10",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "161",
                    "series_title_description" => "DISHONORED CHECKS",
                    "retention_period" => "5",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "162",
                    "series_title_description" => "FUND TRANSFERS",
                    "retention_period" => "10",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "163",
                    "series_title_description" => "INVESTMENT FILES - Committee Minutes Of Meeting And Proposals/Permanent",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "163",
                    "series_title_description" => "INVESTMENT FILES - Justifications",
                    "retention_period" => "2",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "164",
                    "series_title_description" => "LETTERS OF INTRODUCTION (RE: INVESTMENT)",
                    "retention_period" => "3",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "165",
                    "series_title_description" => "LISTS - Payroll Register/Doctors (PRO / NCR )",
                    "retention_period" => "5",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "165",
                    "series_title_description" => "LISTS - Phic Home Bank Accounts/Unclaimed Atm Cards/Validation Reports",
                    "retention_period" => "3",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "165",
                    "series_title_description" => "LISTS - Seminars - Picpa",
                    "retention_period" => "1",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "166",
                    "series_title_description" => "LOGBOOKS",
                    "retention_period" => "2",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "167",
                    "series_title_description" => "MATERIALS OF DOCTORS FOR ATM RESERVATION",
                    "retention_period" => "3",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "168",
                    "series_title_description" => "MINUTES OF MEETINGS",
                    "retention_period" => "2",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "169",
                    "series_title_description" => "NOTICES OF TRANSFER OF FUNDS (NOF)",
                    "retention_period" => "3",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "170",
                    "series_title_description" => "PASSBOOKS (DBP/LBP)",
                    "retention_period" => "10",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "171",
                    "series_title_description" => "REPORTS - Cancelled Checks",
                    "retention_period" => "10",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "171",
                    "series_title_description" => "REPORTS - Monthly or Weekly Cash Positions",
                    "retention_period" => "3",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "171",
                    "series_title_description" => "REPORTS - Checks Issued ",
                    "retention_period" => "10",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "171",
                    "series_title_description" => "REPORTS - Agents Collection/Bank Remittance Section Report (RF2-A)",
                    "retention_period" => "5",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "171",
                    "series_title_description" => "REPORTS  - Summary Of Daily Collection (RF-2)",
                    "retention_period" => "7",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "171",
                    "series_title_description" => "REPORTS - Consolidated Reports",
                    "retention_period" => "6",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "171",
                    "series_title_description" => "REPORTS - Contribution Payment Return (CPR) / Philhealth Agency Request (PAR) Inventory",
                    "retention_period" => "5",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "171",
                    "series_title_description" => "REPORTS - Daily Collection Report (DCR)",
                    "retention_period" => "5",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "171",
                    "series_title_description" => "REPORTS - Dishonored Checks ",
                    "retention_period" => "10",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "171",
                    "series_title_description" => "REPORTS - Fund Transfer (MOOE) Maintenance And Other Operating Expenses",
                    "retention_period" => "3",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "171",
                    "series_title_description" => "REPORTS - Inventory And Distribution",
                    "retention_period" => "4",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "171",
                    "series_title_description" => "REPORTS - Monthly Report Of Accountability For Accountable Forms",
                    "retention_period" => "3",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "171",
                    "series_title_description" => "REPORTS - Prooflists (Regulars)",
                    "retention_period" => "10",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "171",
                    "series_title_description" => "REPORTS - Schedules ",
                    "retention_period" => "4",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "171",
                    "series_title_description" => "REPORTS - Status On Collection Vs Benefit Payment",
                    "retention_period" => "4",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "171",
                    "series_title_description" => "REPORTS - Stale Checks",
                    "retention_period" => "10",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "171",
                    "series_title_description" => "REPORTS - Transfer To Benefit Claims",
                    "retention_period" => "3",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "172",
                    "series_title_description" => "REQUESTS",
                    "retention_period" => "3",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "173",
                    "series_title_description" => "ROUTING SLIPS OF CHECKS FORWARDED TO INVESTMENT DIVISION FOR REPLACEMENT",
                    "retention_period" => "10",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "174",
                    "series_title_description" => "SCHEDULES MONTHLY INVESTIBLE FUNDS ",
                    "retention_period" => "3",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "175",
                    "series_title_description" => "STOP PAYMENT ORDERS ",
                    "retention_period" => "4",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "176",
                    "series_title_description" => "SUMMARIES - Claims Disbursement",
                    "retention_period" => "10",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "176",
                    "series_title_description" => "SUMMARIES - Investments Income",
                    "retention_period" => "3",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-B",
                    "rds_item_no" => "177",
                    "series_title_description" => "VALIDATED COLLECTION PAYMENT RECEIPTS (WITH ACB'S / M5, MI5)",
                    "retention_period" => "10",
                    "dept_unit" => "Treasury Records"
                ],
                [
                    "rds_no" => "RDS-C",
                    "rds_item_no" => "1",
                    "series_title_description" => "MEMBERS DATA RECORDS ",
                    "retention_period" => "5",
                    "dept_unit" => "Benefit Administration Section"
                ],
                [
                    "rds_no" => "RDS-C",
                    "rds_item_no" => "2",
                    "series_title_description" => "PHILHEALTH REMITTANCE REPORTS ",
                    "retention_period" => "5",
                    "dept_unit" => "Benefit Administration Section"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "1",
                    "series_title_description" => "ACCREDITATION RECORDS WITH SUPPORTING DOCUMENTS - Health Care Institutions/Hospital Infirmaries",
                    "retention_period" => "3",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "1",
                    "series_title_description" => "ACCREDITATION RECORDS WITH SUPPORTING DOCUMENTS - Professional",
                    "retention_period" => "4",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "2",
                    "series_title_description" => "AGENDA RECORDS",
                    "retention_period" => "2",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "3",
                    "series_title_description" => "CONTRACTING Z BENEFIT PACKAGE",
                    "retention_period" => "5",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "4",
                    "series_title_description" => "LISTS OF HEALTHCARE PROVIDERS DELIBERATED",
                    "retention_period" => "1",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "5",
                    "series_title_description" => "MANDATORY HOSPITAL REPORTS (MONTHLY)",
                    "retention_period" => "2",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "6",
                    "series_title_description" => "MASTERLIST OF ACCREDITED / CONTRACTED HEALTHCARE PROVIDERS / NETWORKS ",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "7",
                    "series_title_description" => "MINUTES OF MEETING ( ACCREDITATION COMMITTEE)",
                    "retention_period" => "5",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "8",
                    "series_title_description" => "REQUESTS",
                    "retention_period" => "2",
                    "dept_unit" => "Accreditation Department"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "9",
                    "series_title_description" => "RETURN WRIT OF EXECUTION ",
                    "retention_period" => "3",
                    "dept_unit" => "Arbitration Department"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "10",
                    "series_title_description" => "REPORTS - Summary Of Utilization Of News Release ",
                    "retention_period" => "2",
                    "dept_unit" => "Corporate Communications Office ( CorCom )"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "10",
                    "series_title_description" => "REPORTS - Terminal Reports Of Activities ",
                    "retention_period" => "5",
                    "dept_unit" => "Corporate Communications Office ( CorCom )"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "11",
                    "series_title_description" => "SPEECHES, MESSAGES, PRESENTATION MATERIALS (ABOUT THE AGENCY)",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Corporate Communications Office ( CorCom )"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "12",
                    "series_title_description" => "WORKING PAPERS ",
                    "retention_period" => "2",
                    "dept_unit" => "Corporate Communications Office ( CorCom )"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "13",
                    "series_title_description" => "DAILY TIME CORRECTION",
                    "retention_period" => "1",
                    "dept_unit" => "Human Resource Department"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "14",
                    "series_title_description" => "HUMAN RESOURCE MERIT PROMOTIONS AND SELECTION BOARD (HRMPSB) FILES ",
                    "retention_period" => "5",
                    "dept_unit" => "Human Resource Department"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "15",
                    "series_title_description" => "LABORATORY RESULTS",
                    "retention_period" => "5",
                    "dept_unit" => "Human Resource Department"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "16",
                    "series_title_description" => "LOGBOOKS",
                    "retention_period" => "2",
                    "dept_unit" => "Human Resource Department"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "17",
                    "series_title_description" => "OFFICIAL BUSINESS SLIPS (OBS)",
                    "retention_period" => "1",
                    "dept_unit" => "Human Resource Department"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "18",
                    "series_title_description" => "TRAINING PROGRAM RESOLUTION",
                    "retention_period" => "5",
                    "dept_unit" => "Human Resource Department"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "19",
                    "series_title_description" => "REQUESTS",
                    "retention_period" => "2",
                    "dept_unit" => "Information Technology Management Department"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "20",
                    "series_title_description" => "SERVICE TICKETS",
                    "retention_period" => "2",
                    "dept_unit" => "Information Technology Management Department"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "21",
                    "series_title_description" => "CUSTOMER ASSISTANCE AND RELATIONS EMPOWERMENT STAFF (CARES) FILES",
                    "retention_period" => "1",
                    "dept_unit" => "Member Management Group ( MMG)"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "22",
                    "series_title_description" => "LIFETIME MEMBER PROGRAM FILES  - Brochures ",
                    "retention_period" => "2",
                    "dept_unit" => "Member Management Group ( MMG)"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "22",
                    "series_title_description" => "LIFETIME MEMBER PROGRAM FILES  - Highlight Of The Meetings/Spot Surveys",
                    "retention_period" => "1",
                    "dept_unit" => "Member Management Group ( MMG)"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "22",
                    "series_title_description" => "LIFETIME MEMBER PROGRAM FILES - Memorandum Of Agreement (MOA)",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Member Management Group ( MMG)"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "23",
                    "series_title_description" => "MANUAL OF OPERATIONS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Member Management Group ( MMG)"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "24",
                    "series_title_description" => "PHILHEALTH MEMBER REGISTRATION",
                    "retention_period" => "5",
                    "dept_unit" => "Member Management Group ( MMG)"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "25",
                    "series_title_description" => "MANAGEMENT REVIEW REPORTS",
                    "retention_period" => "5",
                    "dept_unit" => "Organization and System Development Office"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "26",
                    "series_title_description" => "ORGANIZATION DESIGN FILES ",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Organization and System Development Office"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "27",
                    "series_title_description" => "PROJECT MANAGEMENT FILES",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Organization and System Development Office"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "28",
                    "series_title_description" => "AUTHORIZATION TO PICK-UP (CHECK)",
                    "retention_period" => "3",
                    "dept_unit" => "Physical Resources and Infrastructure Department ( PRID)"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "29",
                    "series_title_description" => "CARGO COMPUTATION SHEETS",
                    "retention_period" => "3",
                    "dept_unit" => "Physical Resources and Infrastructure Department ( PRID)"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "30",
                    "series_title_description" => "CERTIFICATIONS",
                    "retention_period" => "3",
                    "dept_unit" => "Physical Resources and Infrastructure Department ( PRID)"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "31",
                    "series_title_description" => "DAILY REPORTS",
                    "retention_period" => "5",
                    "dept_unit" => "Physical Resources and Infrastructure Department ( PRID)"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "32",
                    "series_title_description" => "LAND TITLES",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Physical Resources and Infrastructure Department ( PRID)"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "33",
                    "series_title_description" => "PRICING DAILY MONITORING SHEETS",
                    "retention_period" => "2",
                    "dept_unit" => "Physical Resources and Infrastructure Department ( PRID)"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "34",
                    "series_title_description" => "PROOF OF MAILING DELIVERY",
                    "retention_period" => "5",
                    "dept_unit" => "Physical Resources and Infrastructure Department ( PRID)"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "35",
                    "series_title_description" => "REQUESTS FOR POSTING ",
                    "retention_period" => "2",
                    "dept_unit" => "Physical Resources and Infrastructure Department ( PRID)"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "36",
                    "series_title_description" => "SUMMARY OF MAILING CERTIFICATES ",
                    "retention_period" => "3",
                    "dept_unit" => "Physical Resources and Infrastructure Department ( PRID)"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "37",
                    "series_title_description" => "UNIFIED MULTI PURPOSE (UM-ID) SYSTEM REGISTRATION",
                    "retention_period" => "5",
                    "dept_unit" => "Project Management Office ( PMO)"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "38",
                    "series_title_description" => "BOARD MEMBERS FILES",
                    "retention_period" => "15",
                    "dept_unit" => "Office of the Corporate Secretary ( CorSec )"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "39",
                    "series_title_description" => "COMMITTEE MEETING FILES",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Office of the Corporate Secretary ( CorSec )"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "40",
                    "series_title_description" => "SECRETARY'S CERTIFICATE",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Office of the Corporate Secretary ( CorSec )"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "41",
                    "series_title_description" => "TRANSMITTALS OF PHILHEALTH BOARD RESOLUTION",
                    "retention_period" => "5",
                    "dept_unit" => "Office of the Corporate Secretary ( CorSec )"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "42",
                    "series_title_description" => "CONSULTANT'S RECORDS",
                    "retention_period" => "5",
                    "dept_unit" => "Office of the Chief Information"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "43",
                    "series_title_description" => "MINUTES OF THE AD HOC COMMITTEE MEETING",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Office of the Chief Legal Executive"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "44",
                    "series_title_description" => "DOCUMENT REPRODUCTION REQUESTS (DRR)",
                    "retention_period" => "3",
                    "dept_unit" => "Quality Management System (OMS)"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "45",
                    "series_title_description" => "EXTERNAL DISTRIBUTION LISTS",
                    "retention_period" => "5",
                    "dept_unit" => "Quality Management System (OMS)"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "46",
                    "series_title_description" => "INTERNAL QUALITY AUDIT (IQA) FILES",
                    "retention_period" => "5",
                    "dept_unit" => "Quality Management System (OMS)"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "47",
                    "series_title_description" => "ISSUANCES RECORDS ",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Quality Management System (OMS)"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "48",
                    "series_title_description" => "MASTERLISTS",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Quality Management System (OMS)"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "49",
                    "series_title_description" => "QUALITY MANAGEMENT SYSTEM FILES",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Quality Management System (OMS)"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "49",
                    "series_title_description" => "QUALITY MANAGEMENT SYSTEM FILES - Quality Management System (QMS)",
                    "retention_period" => "3",
                    "dept_unit" => "Quality Management System (OMS)"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "50",
                    "series_title_description" => "ROUTINE ISSUANCES (OBSOLETE COPIES) ",
                    "retention_period" => "3",
                    "dept_unit" => "Quality Management System (OMS)"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "51",
                    "series_title_description" => "STATUS OF NONCONFORMITY CORRECTIVE AND PREVENTIVE ACTION REPORTS (NCPAR)",
                    "retention_period" => "5",
                    "dept_unit" => "Quality Management System (OMS)"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "52",
                    "series_title_description" => "ANNUAL RISK REPORTS ",
                    "retention_period" => "Permanent",
                    "dept_unit" => "Risk Management Department"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "53",
                    "series_title_description" => "RISK MANAGEMENT COMMITTEE FILES",
                    "retention_period" => "3",
                    "dept_unit" => "Risk Management Department"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "54",
                    "series_title_description" => "REPORT OF ACTIVITIES",
                    "retention_period" => "2",
                    "dept_unit" => "Social Health Insurance Academy"
                ],
                [
                    "rds_no" => "RDS-D",
                    "rds_item_no" => "55",
                    "series_title_description" => "REPORTS ",
                    "retention_period" => "5",
                    "dept_unit" => "Treasury Department"
                ]
            ]
        );
    }
}
