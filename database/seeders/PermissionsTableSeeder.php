<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'asset_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'asset_category_create',
            ],
            [
                'id'    => 19,
                'title' => 'asset_category_edit',
            ],
            [
                'id'    => 20,
                'title' => 'asset_category_show',
            ],
            [
                'id'    => 21,
                'title' => 'asset_category_delete',
            ],
            [
                'id'    => 22,
                'title' => 'asset_category_access',
            ],
            [
                'id'    => 23,
                'title' => 'asset_location_create',
            ],
            [
                'id'    => 24,
                'title' => 'asset_location_edit',
            ],
            [
                'id'    => 25,
                'title' => 'asset_location_show',
            ],
            [
                'id'    => 26,
                'title' => 'asset_location_delete',
            ],
            [
                'id'    => 27,
                'title' => 'asset_location_access',
            ],
            [
                'id'    => 28,
                'title' => 'asset_status_create',
            ],
            [
                'id'    => 29,
                'title' => 'asset_status_edit',
            ],
            [
                'id'    => 30,
                'title' => 'asset_status_show',
            ],
            [
                'id'    => 31,
                'title' => 'asset_status_delete',
            ],
            [
                'id'    => 32,
                'title' => 'asset_status_access',
            ],
            [
                'id'    => 33,
                'title' => 'asset_create',
            ],
            [
                'id'    => 34,
                'title' => 'asset_edit',
            ],
            [
                'id'    => 35,
                'title' => 'asset_show',
            ],
            [
                'id'    => 36,
                'title' => 'asset_delete',
            ],
            [
                'id'    => 37,
                'title' => 'asset_access',
            ],
            [
                'id'    => 38,
                'title' => 'assets_history_access',
            ],
            [
                'id'    => 39,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 40,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 41,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 42,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 43,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 44,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 45,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 46,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 47,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 48,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 49,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 50,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 51,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 52,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 53,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 54,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 55,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 56,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 57,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 58,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 59,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 60,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 61,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 62,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 63,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 64,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 65,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 66,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 67,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 68,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 69,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 70,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 71,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 72,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 73,
                'title' => 'task_create',
            ],
            [
                'id'    => 74,
                'title' => 'task_edit',
            ],
            [
                'id'    => 75,
                'title' => 'task_show',
            ],
            [
                'id'    => 76,
                'title' => 'task_delete',
            ],
            [
                'id'    => 77,
                'title' => 'task_access',
            ],
            [
                'id'    => 78,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 79,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 80,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 81,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 82,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 83,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 84,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 85,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 86,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 87,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 88,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 89,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 90,
                'title' => 'expense_create',
            ],
            [
                'id'    => 91,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 92,
                'title' => 'expense_show',
            ],
            [
                'id'    => 93,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 94,
                'title' => 'expense_access',
            ],
            [
                'id'    => 95,
                'title' => 'income_create',
            ],
            [
                'id'    => 96,
                'title' => 'income_edit',
            ],
            [
                'id'    => 97,
                'title' => 'income_show',
            ],
            [
                'id'    => 98,
                'title' => 'income_delete',
            ],
            [
                'id'    => 99,
                'title' => 'income_access',
            ],
            [
                'id'    => 100,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 101,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 102,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 103,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 104,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 105,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 106,
                'title' => 'currency_create',
            ],
            [
                'id'    => 107,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 108,
                'title' => 'currency_show',
            ],
            [
                'id'    => 109,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 110,
                'title' => 'currency_access',
            ],
            [
                'id'    => 111,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 112,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 113,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 114,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 115,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 116,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 117,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 118,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 119,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 120,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 121,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 122,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 123,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 124,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 125,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 126,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 127,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 128,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 129,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 130,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 131,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 132,
                'title' => 'client_create',
            ],
            [
                'id'    => 133,
                'title' => 'client_edit',
            ],
            [
                'id'    => 134,
                'title' => 'client_show',
            ],
            [
                'id'    => 135,
                'title' => 'client_delete',
            ],
            [
                'id'    => 136,
                'title' => 'client_access',
            ],
            [
                'id'    => 137,
                'title' => 'project_create',
            ],
            [
                'id'    => 138,
                'title' => 'project_edit',
            ],
            [
                'id'    => 139,
                'title' => 'project_show',
            ],
            [
                'id'    => 140,
                'title' => 'project_delete',
            ],
            [
                'id'    => 141,
                'title' => 'project_access',
            ],
            [
                'id'    => 142,
                'title' => 'note_create',
            ],
            [
                'id'    => 143,
                'title' => 'note_edit',
            ],
            [
                'id'    => 144,
                'title' => 'note_show',
            ],
            [
                'id'    => 145,
                'title' => 'note_delete',
            ],
            [
                'id'    => 146,
                'title' => 'note_access',
            ],
            [
                'id'    => 147,
                'title' => 'document_create',
            ],
            [
                'id'    => 148,
                'title' => 'document_edit',
            ],
            [
                'id'    => 149,
                'title' => 'document_show',
            ],
            [
                'id'    => 150,
                'title' => 'document_delete',
            ],
            [
                'id'    => 151,
                'title' => 'document_access',
            ],
            [
                'id'    => 152,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 153,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 154,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 155,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 156,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 157,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 158,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 159,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 160,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 161,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 162,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 163,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 164,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 165,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 166,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 167,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 168,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 169,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 170,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 171,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 172,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 173,
                'title' => 'time_management_access',
            ],
            [
                'id'    => 174,
                'title' => 'time_work_type_create',
            ],
            [
                'id'    => 175,
                'title' => 'time_work_type_edit',
            ],
            [
                'id'    => 176,
                'title' => 'time_work_type_show',
            ],
            [
                'id'    => 177,
                'title' => 'time_work_type_delete',
            ],
            [
                'id'    => 178,
                'title' => 'time_work_type_access',
            ],
            [
                'id'    => 179,
                'title' => 'time_project_create',
            ],
            [
                'id'    => 180,
                'title' => 'time_project_edit',
            ],
            [
                'id'    => 181,
                'title' => 'time_project_show',
            ],
            [
                'id'    => 182,
                'title' => 'time_project_delete',
            ],
            [
                'id'    => 183,
                'title' => 'time_project_access',
            ],
            [
                'id'    => 184,
                'title' => 'time_entry_create',
            ],
            [
                'id'    => 185,
                'title' => 'time_entry_edit',
            ],
            [
                'id'    => 186,
                'title' => 'time_entry_show',
            ],
            [
                'id'    => 187,
                'title' => 'time_entry_delete',
            ],
            [
                'id'    => 188,
                'title' => 'time_entry_access',
            ],
            [
                'id'    => 189,
                'title' => 'time_report_create',
            ],
            [
                'id'    => 190,
                'title' => 'time_report_edit',
            ],
            [
                'id'    => 191,
                'title' => 'time_report_show',
            ],
            [
                'id'    => 192,
                'title' => 'time_report_delete',
            ],
            [
                'id'    => 193,
                'title' => 'time_report_access',
            ],
            [
                'id'    => 194,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
