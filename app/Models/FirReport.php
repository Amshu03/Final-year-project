<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirReport extends Model
{
    use HasFactory;
    protected $fillable = [
        'dist',
        'ps',
        'year',
        'fir_no',
        'date',
        'occurrence_offense',
        'information_recieved_at_ps',
        'ganeral_diary_reference_entry_no',
        'ganeral_diary_reference_time',
        'type_of_information',
        'direction_distance_from_ps',
        'beat_no',
        'address',
        'outside_of_limit_ps_name',
        'district',
        'name',
        'father_or_husband_name',
        'date_of_birth',
        'nationality',
        'occupation',
        'person_address',
        'value_of_properties_stolen',
        'investigation',
        'rank',
        'transfer_to_ps',
        'officer_name',
        'officer_rank',
        'officer_no',
        'officer_signature',
        'officer_date',
        'transfer_to_ps',
        'fir_contents',
        'inquest_report',
        'particulars_of_properties_stolen',
        'reason_for_delay_report',
        'detail_of_suspected',
        'act_section',
        'evidance_file',
        'properties_stole_file',
        'detail_of_known_file',
        'are_you_18',
        'lat', 'lng',
        'uploder_id',
    ];
}
