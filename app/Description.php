<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
 protected $fillable=[
     'product_id', 'announcement_date', 'sensors', 'flight_mode', 'control', 'audio', 'video',
     'headphone_jack', 'camera', 'front_camera', 'camera_functions', 'OS', 'weight', 'count_sim',
     'dimensions', 'multiple_sim', 'type', 'SIM_type', 'enclosure_type', 'management', 'cores_CPU',
     'internal_memory', 'RAM', 'CPU', 'memory_slot', 'battery', 'standby_time', 'battery_capacity',
     'talk_time', 'battery_type', 'charger_connector', 'A_GPS', 'satellite_navigation', 'standard',
     'diagonal', 'screen_rotation', 'image_size', 'touch_screen_type', 'screen_type', 'PPI'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
