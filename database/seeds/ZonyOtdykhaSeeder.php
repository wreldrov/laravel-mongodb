<?php

use App\Contracts\Entities\ZonyOtdykhaContract;
use App\ZonyOtdykha;
use Illuminate\Database\Seeder;

class ZonyOtdykhaSeeder extends Seeder
{
    protected $json = '[
  {
    "addresskz": "Назарбаев даңғылы н/з",
    "sezon": "жыл бойы круглый год",
    "namekz": "«Арай» аквапаркі",
    "rejimkz": "09.00-20.00",
    "uslugiru": "досуговый семейный центр",
    "nameru": "аквапарк «Арай» ",
    "raigorkz": "Қызылорда қаласы",
    "fioruk": "Абсаттаров Ердос",
    "addressru": "пр. Назарбаева б/н",
    "rejimru": "09.00-20.01",
    "uslugikz": "жанұялық демалыс орны",
    "tel": "87242/70-04-44",
    "id": "1",
    "raigorru": "город Кызылорда",
    "geopozition": "44.807707, 65.515261",
    "god": "2014",
    "email": "arayclub.kz@gmail.com"
  },
  {
    "addresskz": "Сабалак саяжайы",
    "sezon": "маусымдық в летнее время",
    "namekz": "«Селена аква»",
    "rejimkz": "09.00-20.00",
    "uslugiru": "досуговый семейный центр",
    "nameru": "«Селена аква»",
    "raigorkz": "Қызылорда қаласы",
    "fioruk": "Хан Вероника Моисеевна",
    "addressru": "дача Сабалак ",
    "rejimru": "09.00-20.01",
    "uslugikz": "жанұялық демалыс орны",
    "tel": "87242/27-58-30, 30-06-00",
    "id": "2",
    "raigorru": "город Кызылорда",
    "geopozition": "44.761848, 65.533979",
    "god": "2010"
  },
  {
    "addresskz": "Гидроузел №19",
    "sezon": "маусымдық в летнее время",
    "namekz": "«Agua House»",
    "rejimkz": "09.00-20.00",
    "uslugiru": "досуговый семейный центр",
    "nameru": "«Agua House»",
    "raigorkz": "Қызылорда қаласы",
    "fioruk": "Смагулова Сулушаш",
    "addressru": "Гидроузел №19",
    "rejimru": "09.00-20.01",
    "uslugikz": "жанұялық демалыс орны",
    "tel": "87768802525",
    "id": "3",
    "raigorru": "город Кызылорда",
    "geopozition": "44.835904, 65.493830",
    "god": "2010"
  },
  {
    "addresskz": "Алмағамбетов к-сі №1",
    "sezon": "маусымдық в летнее время",
    "namekz": "«Гранд Аква»",
    "rejimkz": "09.00-20.00",
    "uslugiru": "досуговый семейный центр",
    "nameru": "«Гранд Аква»",
    "raigorkz": "Қызылорда қаласы",
    "fioruk": "Гришаева Юлия\n",
    "addressru": "ул. Алмаганбетов №1",
    "rejimru": "09.00-20.01",
    "uslugikz": "жанұялық демалыс орны",
    "tel": "87763393939",
    "id": "4",
    "raigorru": "город Кызылорда",
    "geopozition": "44.836108, 65.494011",
    "god": "2017"
  },
  {
    "addresskz": "Әбдіқадыров к-сі",
    "sezon": "маусымдық в летнее время",
    "namekz": "Балалар жағажайы",
    "rejimkz": "09.00-20.00",
    "uslugiru": "досуговый семейный центр",
    "nameru": "Детский пляж",
    "raigorkz": "Белкөл кенті",
    "fioruk": "Нұрсаитов Мұрат Тоқманұлы",
    "addressru": "Абдикадырова б/н",
    "rejimru": "09.00-20.01",
    "uslugikz": "жанұялық демалыс орны",
    "tel": "87242/30-00-08",
    "id": "5",
    "raigorru": "поселок Белькол",
    "geopozition": "44.808859, 65.590239",
    "god": "2017"
  },
  {
    "addresskz": "Сабалак саяжайы",
    "sezon": "маусымдық в летнее время",
    "namekz": "«Сабалақ аква» ",
    "rejimkz": "09.00-20.00",
    "uslugiru": "досуговый семейный центр",
    "nameru": "«Сабалак аква» ",
    "raigorkz": "Қызылорда қаласы",
    "fioruk": "Сақтағанов Абзал",
    "addressru": "дача Сабалак ",
    "rejimru": "09.00-20.01",
    "uslugikz": "жанұялық демалыс орны",
    "tel": "87762148282\n87052417107\n",
    "id": "6",
    "raigorru": "город Кызылорда",
    "geopozition": "44.761848, 65.533979",
    "god": "2017"
  },
  {
    "addresskz": "ПМК-29 саяжайы",
    "sezon": "маусымдық в летнее время",
    "namekz": "«Керуен» ",
    "rejimkz": "09.00-20.00",
    "uslugiru": "досуговый семейный центр",
    "nameru": "«Керуен» ",
    "raigorkz": "Қызылорда қаласы",
    "fioruk": "Таджибаева Гүлназ\n",
    "addressru": "дача ПМК-29 ",
    "rejimru": "09.00-20.01",
    "uslugikz": "жанұялық демалыс орны",
    "tel": "87774550149",
    "id": "7",
    "raigorru": "город Кызылорда",
    "geopozition": "44.761848, 65.533979",
    "god": "2012"
  },
  {
    "addresskz": "Көксу",
    "sezon": "маусымдық в летнее время",
    "namekz": "«Сырдария толқыны» ",
    "rejimkz": "09.00-20.00",
    "uslugiru": "досуговый семейный центр",
    "nameru": "«Волны Сырдарии»",
    "raigorkz": "Қызылорда қаласы",
    "fioruk": "Алтаев Рамазан Уайтович\n",
    "addressru": "Коксу",
    "rejimru": "09.00-20.01",
    "uslugikz": "жанұялық демалыс орны",
    "tel": "87751251754",
    "id": "8",
    "raigorru": "город Кызылорда",
    "geopozition": "-",
    "god": "2012"
  },
  {
    "addresskz": "Автоцон ғимаратына қарама-қарсы",
    "sezon": "маусымдық в летнее время",
    "namekz": "«DalaPark»",
    "rejimkz": "09.00-20.00",
    "uslugiru": "досуговый семейный центр",
    "nameru": "«DalaPark»",
    "raigorkz": "Қызылорда қаласы",
    "fioruk": "Кенжеев Сакен Сүлейменұлы",
    "addressru": "напротив Автоцон ",
    "rejimru": "09.00-20.01",
    "uslugikz": "жанұялық демалыс орны",
    "tel": "87773515008, 870519604804",
    "id": "9",
    "raigorru": "город Кызылорда",
    "geopozition": "44.723910, 65.544046",
    "god": "2019"
  },
  {
    "addresskz": "«Наурыз» саяжайы\nТұрғанбаев көшесі\n",
    "sezon": "маусымдық в летнее время",
    "namekz": "«Шах» ",
    "rejimkz": "09.00-20.00",
    "uslugiru": "досуговый семейный центр",
    "nameru": "«Шах»",
    "raigorkz": "Қызылорда қаласы",
    "fioruk": "Кенесов Нурлыбек",
    "addressru": "дача «Наурыз» улица Турганбаева",
    "rejimru": "09.00-20.01",
    "uslugikz": "жанұялық демалыс орны",
    "tel": "87774562434",
    "id": "10",
    "raigorru": "город Кызылорда",
    "geopozition": "44.773988, 65.471069",
    "god": "2019"
  },
  {
    "addresskz": "Қамбаш көлі",
    "sezon": "Маусым - Тамыз Июнь-август",
    "namekz": "Қамбаш демалыс аймағы",
    "rejimkz": "09.00-20.00",
    "uslugiru": "питания, дом отдыха, ",
    "nameru": "Камбашзона отдых",
    "raigorkz": "Арал ауданы Қамыстыбас ауылдык округ",
    "fioruk": "Исаев Алдаберген",
    "addressru": "Озера Камбаш",
    "rejimru": "09.00-20.01",
    "uslugikz": "тамақтану, демалыс үйі ",
    "tel": "8-775-056-53-78, 8747-146-11-41",
    "id": "11",
    "raigorru": "Аральский район, а/о Камыстыбас",
    "geopozition": "46.199176, 61.799824",
    "god": "2015"
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
            $values = array_only($row, ZonyOtdykhaContract::FIELD_LIST);
            $values = array_map('trim', $values);

            ZonyOtdykha::create($values);
        }
    }
}
