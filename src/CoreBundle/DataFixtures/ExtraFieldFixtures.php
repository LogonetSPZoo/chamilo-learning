<?php

declare(strict_types=1);

/* For licensing terms, see /license.txt */

namespace Chamilo\CoreBundle\DataFixtures;

use Chamilo\CoreBundle\Entity\ExtraField;
use Chamilo\CoreBundle\Entity\ExtraFieldOptions;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;

class ExtraFieldFixtures extends Fixture implements FixtureGroupInterface
{
    public static function getGroups(): array
    {
        return ['extrafield-update'];
    }

    public static function getExtraFields(): array
    {
        return [
            [
                'variable' => 'legal_accept',
                'display_text' => 'Prawny',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'already_logged_in',
                'display_text' => 'Już zalogowany',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'update_type',
                'display_text' => 'Typ aktualizacji skryptu',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'tags',
                'display_text' => 'tagi',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TAG,
            ],
            [
                'variable' => 'rssfeeds',
                'display_text' => 'RSS',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'dashboard',
                'display_text' => 'Pulpit nawigacyjny',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'user_chat_status',
                'display_text' => 'Status czatu użytkownika',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'google_calendar_url',
                'display_text' => 'URL Kalendarza Google',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'captcha_blocked_until_date',
                'display_text' => 'Konto zablokowane do',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'tags',
                'display_text' => 'Tagi',
                'item_type' => ExtraField::COURSE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TAG,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'video_url',
                'display_text' => 'Url Wideo',
                'item_type' => ExtraField::COURSE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'image',
                'display_text' => 'Obraz',
                'item_type' => ExtraField::SESSION_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_FILE_IMAGE,
                'visible_to_self' => true,
                'changeable' => true,
            ],

            [
                'variable' => 'mail_notify_invitation',
                'display_text' => 'Powiadom o zaproszeniach e-mailem',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_SELECT,
                'visible_to_self' => true,
                'default_value' => 1,
                'add_options' => true,
            ],
            [
                'variable' => 'mail_notify_message',
                'display_text' => 'Powiadom o wiadomościach e-mailem',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_SELECT,
                'visible_to_self' => true,
                'default_value' => 1,
                'add_options' => true,
            ],
            [
                'variable' => 'mail_notify_group_message',
                'display_text' => 'Powiadom o wiadomościach grupowych e-mailem',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_SELECT,
                'visible_to_self' => true,
                'default_value' => 1,
                'add_options' => true,
            ],
            [
                'variable' => 'skype',
                'display_text' => 'Skype',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'linkedin_url',
                'display_text' => 'Url LinkedIn',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'send_notification_at_a_specific_date',
                'display_text' => 'Wyślij powiadomienie w określonym dniu',
                'item_type' => ExtraField::COURSE_ANNOUNCEMENT,
                'value_type' => ExtraField::FIELD_TYPE_DATE,
            ],
            [
                'variable' => 'date_to_send_notification',
                'display_text' => 'Data wysłania powiadomienia',
                'item_type' => ExtraField::COURSE_ANNOUNCEMENT,
                'value_type' => ExtraField::FIELD_TYPE_DATE,
            ],
            [
                'variable' => 'send_to_users_in_session',
                'display_text' => 'Wyślij do użytkowników w sesji',
                'item_type' => ExtraField::SESSION_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
            ],
            [
                'variable' => 'session_courses_read_only_mode',
                'display_text' => 'Zablokuj kurs w sesji',
                'item_type' => ExtraField::COURSE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
            ],
            [
                'variable' => 'is_mandatory',
                'display_text' => 'Jest obowiązkowy',
                'item_type' => ExtraField::SURVEY_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
            ],
            [
                'variable' => 'show_in_catalogue',
                'display_text' => 'Pokaż w katalogu',
                'item_type' => ExtraField::COURSE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_RADIO,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'multiple_language',
                'display_text' => 'W wielu językach',
                'item_type' => ExtraField::COURSE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_SELECT_MULTIPLE,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'acquisition',
                'display_text' => 'Pozyskanie',
                'item_type' => ExtraField::LP_VIEW_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_RADIO,
            ],
            [
                'variable' => 'invisible',
                'display_text' => 'Niewidoczny',
                'item_type' => ExtraField::LP_VIEW_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
            ],
            [
                'variable' => 'start_date',
                'display_text' => 'Data rozpoczęcia',
                'item_type' => ExtraField::LP_ITEM_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_DATETIME,
            ],
            [
                'variable' => 'end_date',
                'display_text' => 'Data zakończenia',
                'item_type' => ExtraField::LP_ITEM_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_DATETIME,
            ],
            [
                'variable' => 'attachment',
                'display_text' => 'Załącznik',
                'item_type' => ExtraField::SCHEDULED_ANNOUNCEMENT,
                'value_type' => ExtraField::FIELD_TYPE_FILE,
            ],
            [
                'variable' => 'send_to_coaches',
                'display_text' => 'Wyślij do trenerów',
                'item_type' => ExtraField::SCHEDULED_ANNOUNCEMENT,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
            ],
            [
                'variable' => 'work_time',
                'display_text' => 'Uwzględniony czas pracy',
                'item_type' => ExtraField::WORK_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_INTEGER,
            ],
            [
                'variable' => 'address',
                'display_text' => 'Adres użytkownika',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'advancedcourselist',
                'display_text' => 'Lista kursów zaawansowanych',
                'item_type' => ExtraField::EXERCISE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_SELECT_MULTIPLE,
            ],
            [
                'variable' => 'ask_for_revision',
                'display_text' => 'Poproś o rewizję',
                'item_type' => ExtraField::FORUM_POST_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
            ],
            [
                'variable' => 'ask_new_password',
                'display_text' => 'Poproś o nowe hasło',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
            ],
            [
                'variable' => 'authenticationDate',
                'display_text' => 'Data uwierzytelnienia',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_DATETIME,
            ],
            [
                'variable' => 'authenticationMethod',
                'display_text' => 'Metoda uwierzytelnienia',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'azure_id',
                'display_text' => 'Azure ID',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'birthday',
                'display_text' => 'Data urodzenia',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_DATE,
            ],
            [
                'variable' => 'block_category',
                'display_text' => 'Kategoria blokady',
                'item_type' => ExtraField::EXERCISE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
            ],
            [
                'variable' => 'buycourses_company',
                'display_text' => 'Firma kupującego',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'buycourses_vat',
                'display_text' => 'NIP/VAT kupującego',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'buycourses_address',
                'display_text' => 'Adres kupującego',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'cas_user',
                'display_text' => 'Użytkownik CAS',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'careerid',
                'display_text' => 'ID kariery',
                'item_type' => ExtraField::CAREER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_INTEGER,
            ],
            [
                'variable' => 'career_urls',
                'display_text' => 'URL-e kariery',
                'item_type' => ExtraField::CAREER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'career_diagram',
                'display_text' => 'Schemat kariery',
                'item_type' => ExtraField::CAREER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'collapsed',
                'display_text' => 'Zamknięte',
                'item_type' => ExtraField::SESSION_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
            ],
            [
                'variable' => 'created_by',
                'display_text' => 'Utworzony przez',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'credentialType',
                'display_text' => 'Typ poświadczeń',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'differentiation',
                'display_text' => 'Różnicowanie',
                'item_type' => ExtraField::QUESTION_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
            ],
            [
                'variable' => 'disable_emails',
                'display_text' => 'Wyłącz wszystkie e-maile',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
            ],
            [
                'variable' => 'disable_import_calendar',
                'display_text' => 'Wyłącz import kalendarza',
                'item_type' => ExtraField::COURSE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
            ],
            [
                'variable' => 'downloaded_at',
                'display_text' => 'Pobrane o',
                'item_type' => ExtraField::USER_CERTIFICATE,
                'value_type' => ExtraField::FIELD_TYPE_DATETIME,
            ],
            [
                'variable' => 'drupal_user_id',
                'display_text' => 'ID użytkownika Drupal',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'state',
                'display_text' => 'Stan',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'end_pause_date',
                'display_text' => 'Data zakończenia przerwy',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_DATETIME,
            ],
            [
                'variable' => 'gdpr',
                'display_text' => 'Zgodność z RODO',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
            ],
            [
                'variable' => 'isFromNewLogin',
                'display_text' => 'Pochodzi z nowego logowania',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
            ],
            [
                'variable' => 'language',
                'display_text' => 'Język',
                'item_type' => ExtraField::FORUM_CATEGORY_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'longTermAuthenticationRequestTokenUsed',
                'display_text' => 'Użyty token żądania długoterminowego uwierzytelnienia',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
            ],
            [
                'variable' => 'moodle_password',
                'display_text' => 'Hasło Moodle',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'my_terms',
                'display_text' => 'Moje warunki',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'new_tracking_system',
                'display_text' => 'Użyj alternatywnego systemu śledzenia',
                'item_type' => ExtraField::COURSE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
            ],
            [
                'variable' => 'level',
                'display_text' => 'Poziom',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'no_automatic_validation',
                'display_text' => 'Pomiń automatyczną walidację',
                'item_type' => ExtraField::LP_ITEM_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
            ],
            [
                'variable' => 'notification_event',
                'display_text' => 'Powiadomienia o wydarzeniach',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'notifications',
                'display_text' => 'Powiadomienia',
                'item_type' => ExtraField::EXERCISE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
            ],
            [
                'variable' => 'number_of_days_for_completion',
                'display_text' => 'Liczba dni na ukończenie',
                'item_type' => ExtraField::LP_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'oauth2_id',
                'display_text' => 'OAuth2 ID',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'office_address',
                'display_text' => 'Adres biura',
                'item_type' => ExtraField::COURSE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'office_phone_extension',
                'display_text' => 'Rozszerzenie telefonu biurowego',
                'item_type' => ExtraField::COURSE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'organisationemail',
                'display_text' => 'E-mail organizacyjny',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'pause_formation',
                'display_text' => 'Wstrzymaj szkolenie',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
            ],
            [
                'variable' => 'popular_courses',
                'display_text' => 'Popularne kursy',
                'item_type' => ExtraField::COURSE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
            ],
            [
                'variable' => 'quality',
                'display_text' => 'Jakość',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'remedialcourselist',
                'display_text' => 'Lista kursów wyrównawczych',
                'item_type' => ExtraField::COURSE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'request_for_delete_account',
                'display_text' => 'Poproś o usunięcie konta',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
            ],
            [
                'variable' => 'request_for_delete_account_justification',
                'display_text' => 'Uzasadnienie usunięcia konta',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXTAREA,
            ],
            [
                'variable' => 'request_for_legal_agreement_consent_removal',
                'display_text' => 'Poproś o usunięcie zgody na umowę prawną',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
            ],
            [
                'variable' => 'request_for_legal_agreement_consent_removal_justification',
                'display_text' => 'Uzasadnienie usunięcia zgody',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXTAREA,
            ],
            [
                'variable' => 'revision_language',
                'display_text' => 'Język rewizji',
                'item_type' => ExtraField::FORUM_POST_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'session_career',
                'display_text' => 'Link do kariery sesji',
                'item_type' => ExtraField::SESSION_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_INTEGER,
            ],
            [
                'variable' => 'successful_AuthenticationHandlers',
                'display_text' => 'Pomyślnie obsługiwane mechanizmy uwierzytelniania',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'termactivated',
                'display_text' => 'Włączone warunki',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => false,
                'changeable' => true,
            ],
            [
                'variable' => 'terms_villedustage',
                'display_text' => 'Miasto warunków praktyk',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],

            [
                'variable' => 'timezone',
                'display_text' => 'Strefa czasowa',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'uid',
                'display_text' => 'UID',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => false,
                'changeable' => true,
            ],
            [
                'variable' => 'use_score_as_progress',
                'display_text' => 'Użyj wyniku jako postępu',
                'item_type' => ExtraField::LP_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
            ],
            [
                'variable' => 'terms_ville',
                'display_text' => 'Warunki miasta',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'time',
                'display_text' => 'Czas',
                'item_type' => ExtraField::QUESTION_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_INTEGER,
            ],
        ];
    }

    public function load(ObjectManager $manager): void
    {
        $list = self::getExtraFields();

        foreach ($list as $data) {
            $extraField = $manager->getRepository(ExtraField::class)->findOneBy([
                'variable' => $data['variable'],
                'itemType' => $data['item_type'],
            ]);

            if (!$extraField) {
                $extraField = new ExtraField();
            }

            $extraField->setVariable($data['variable'])
                ->setDisplayText($data['display_text'])
                ->setItemType($data['item_type'])
                ->setValueType($data['value_type'])
                ->setChangeable($data['changeable'] ?? false)
                ->setVisibleToSelf($data['visible_to_self'] ?? false)
                ->setVisibleToOthers($data['visible_to_others'] ?? false)
                ->setFilter($data['filter'] ?? false)
            ;

            if (isset($data['default_value'])) {
                $extraField->setDefaultValue((string) $data['default_value']);
            }

            if (isset($data['add_options']) && $data['add_options']) {
                $options = ['At once', 'Daily', 'No'];
                foreach ($options as $option) {
                    $extraFieldOption = new ExtraFieldOptions();
                    $extraFieldOption->setField($extraField)
                        ->setDisplayText($option)
                        ->setOptionOrder(array_search($option, $options) + 1)
                    ;

                    $manager->persist($extraFieldOption);
                }
            }

            $manager->persist($extraField);
        }

        $manager->flush();
    }
}
