<?php

use App\Contracts\Entities\InfoContract;
use App\Info;
use Illuminate\Database\Seeder;

class TheatreSeeder extends Seeder
{
    protected $json = '[
  {
    "name_kz": "КМҚК \"Махамбет атындағы облыстық қазақ драма театры\"",
    "contact_telefon": "8(7122)326849",
    "address": "г. Атырау,                    ул. Абая, 8",
    "geoposition": "47.107018295975784,\n51.92403020337224\n",
    "rukovoditelya_kz": "Джаменов Берік Қилекешұлы",
    "schedule_kz": "Дс-Сб: 09.00-18.00",
    "vidy_uslug_kz": "Түрлі сахналық іс-шараларды, театр қойылымдарын ұйымдастыру. Түрлі тақырыптағы театр фестивальдарын, конкурстарды өткізу. Басқа театрлармен, концерттік ұйымдармен және қоғамдық қорлармен бірлесіп, гастрольдер өткізу",
    "address_kz": "Атырау қаласы, Абай көшесі, 8",
    "rukovoditelya": "Джаменов Берік Қилекешұлы",
    "name": "КГКП \"Областной казахский  драматический театр имени Махамбета\"",
    "schedule": "Пн-Сб: 09.00-18.00 ",
    "email": "kazdramteatr@rambler,ru",
    "id": "1",
    "vidy_uslug": "Организация различных сценических мероприятий, театральных постановок. Проведение театральных фестивалей, конкурсов на разные тематики. Совместное проведение гастролей с другими театрами, концертными организациями и общественными фондами"
  }
]';

/**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = json_decode($this->json);

        foreach ($data as $row) {
            $row    = (array) $row;
            $values = array_only($row, InfoContract::FIELD_LIST);
            $values = array_map('trim', $values);

            Info::create(
                array_merge(
                    $values,
                    [
                        InfoContract::FIELD_TYPE => InfoContract::TYPE_THEATRE,
                    ]
                )
            );
        }
    }
}
