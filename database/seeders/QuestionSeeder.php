<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'section' => 'contact_details',
                'key' => 'first_name',
                'question' => 'First Name',
                'type' => 'string',
                'is_required' => 1,
            ],
            [
                'section' => 'contact_details',
                'key' => 'last_name',
                'question' => 'Last Name',
                'type' => 'string',
                'is_required' => 1,
            ],
            [
                'section' => 'contact_details',
                'key' => 'legal_entity_name',
                'question' => 'Legal Entity Name',
                'type' => 'string',
                'is_required' => 1,
            ],
            [
                'section' => 'contact_details',
                'key' => 'state_of_formation',
                'question' => 'State of Formation for Entity',
                'type' => 'string',
                'is_required' => 1,
            ],
            [
                'section' => 'contact_details',
                'key' => 'email',
                'question' => 'Email',
                'type' => 'email',
                'is_required' => 1,
            ],
            [
                'section' => 'contact_details',
                'key' => 'phone',
                'question' => 'Phone',
                'type' => 'phone',
                'is_required' => 1,
            ],
            [
                'section' => 'address',
                'key' => 'street_address',
                'question' => 'Street Address',
                'type' => 'string',
                'is_required' => 1,
            ],
            [
                'section' => 'address',
                'key' => 'address_line_2',
                'question' => 'Address Line 2',
                'type' => 'string',
                'is_required' => 0,
            ],
            [
                'section' => 'address',
                'key' => 'city',
                'question' => 'City',
                'type' => 'string',
                'is_required' => 1,
            ],
            [
                'section' => 'address',
                'key' => 'state_province_region',
                'question' => 'State / Province / Region',
                'type' => 'string',
                'is_required' => 1,
            ],
            [
                'section' => 'address',
                'key' => 'zip',
                'question' => 'ZIP / Postal Code',
                'type' => 'string',
                'is_required' => 1,
            ],
            [
                'section' => 'address',
                'key' => 'country',
                'question' => 'Country',
                'type' => 'string',
                'is_required' => 1,
            ],
            [
                'section' => 'opposing_party',
                'key' => 'is_there_an_opposing_party',
                'question' => 'Is there an Opposing Party?',
                'type' => 'boolean',
                'is_required' => 1,
                'default' => '0',
            ],
            [
                'section' => 'opposing_party',
                'key' => 'individual_name',
                'parent_key' => 'is_there_an_opposing_party',
                'question' => 'Individual Name(s)',
                'type' => 'string',
                'is_required' => 1,
            ],
            [
                'section' => 'opposing_party',
                'key' => 'company_name',
                'parent_key' => 'is_there_an_opposing_party',
                'question' => 'Company Name(s)',
                'type' => 'string',
                'is_required' => 1,
            ],
            [
                'section' => 'opposing_party',
                'key' => 'anything_else',
                'parent_key' => 'is_there_an_opposing_party',
                'question' => 'Is there anything else you would like to add regarding the Opposing Party?',
                'type' => 'string',
                'is_required' => 1,
            ],
            [
                'section' => 'billing_details',
                'key' => 'billing_details_same_as_contact_details',
                'question' => 'Same as Contact Details',
                'type' => 'boolean',
                'is_required' => 1,
                'default' => '1',
            ],
            [
                'section' => 'billing_details',
                'key' => 'billing_contact_name',
                'parent_key' => 'billing_details_same_as_contact_details',
                'question' => 'Billing Contact Name',
                'type' => 'string',
                'is_required' => 1,
            ],
            [
                'section' => 'billing_details',
                'key' => 'billing_contact_email',
                'parent_key' => 'billing_details_same_as_contact_details',
                'question' => 'Billing Contact Email',
                'type' => 'email',
                'is_required' => 1,
            ],
            [
                'section' => 'billing_details',
                'key' => 'billing_contact_phone',
                'parent_key' => 'billing_details_same_as_contact_details',
                'question' => 'Billing Contact Phone',
                'type' => 'phone',
                'is_required' => 1,
            ],
            [
                'section' => 'trademark_details',
                'key' => 'trademark_details_same_as_contact_details',
                'question' => 'Same as Contact Details',
                'type' => 'boolean',
                'is_required' => 1,
                'default' => '1',
            ],
            [
                'section' => 'trademark_details',
                'key' => 'trademark_contact_name',
                'parent_key' => 'trademark_details_same_as_contact_details',
                'question' => 'Trademark Contact Name',
                'type' => 'string',
                'is_required' => 1,
            ],
            [
                'section' => 'trademark_details',
                'key' => 'trademark_contact_email',
                'parent_key' => 'trademark_details_same_as_contact_details',
                'question' => 'Trademark Contact Email',
                'type' => 'email',
                'is_required' => 1,
            ],
            [
                'section' => 'trademark_details',
                'key' => 'trademark_contact_phone',
                'parent_key' => 'trademark_details_same_as_contact_details',
                'question' => 'Trademark Contact Phone',
                'type' => 'phone',
                'is_required' => 1,
            ],
            [
                'section' => 'associates',
                'key' => 'is_there_any_associate',
                'question' => 'Is there any associate',
                'type' => 'boolean',
                'is_required' => 1,
                'default' => '0',
            ],
            [
                'section' => 'feedback',
                'key' => 'feedback',
                'question' => 'What can you tell us to make sure we do a good job',
                'type' => 'textarea',
                'is_required' => 0,
            ],
        ];

        foreach ($questions as $key => $question) {
            Question::updateOrCreate([
                'key' => $question['key']
            ], $question);
        }
    }
}
