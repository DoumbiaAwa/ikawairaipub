<?php
namespace com\sellsy\sellsy\models;

if ( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

//if( !class_exists('TSetting')){
class TSetting extends \WP_Query {

    private $_table;

    function __construct()
    {
        $this->_table = SELLSY_PREFIXE_BDD."setting";
    }

    /**
     * retourn rows
     */
    public function getSettings($req = "", $params = "")
    {
        global $wpdb;
        $sql    = $wpdb->prepare("SELECT * FROM ".$this->_table." ".$req, $params);
        $r      = $wpdb->get_results($sql);
        return $r;
    }

    /**
     * retourn row
     * @param int $id
     */
    public function getSetting($id)
    {
        global $wpdb;
        $sql    = $wpdb->prepare("SELECT * FROM ".$this->_table." WHERE setting_id=%d", $id);
        $r      = $wpdb->get_results($sql);
        return $r;
    }

    /**
     * insert
     * @param $_POST $p
     */
    public function add($p)
    {
        global $wpdb;
        $r = $wpdb->insert(
            $this->_table,
            array(
                'setting_dt_create'         => current_time('mysql'),
                'setting_dt_update'         => current_time('mysql'),
                'setting_consumer_token'    => sanitize_key(trim($p['form_consumer_token'])),
                'setting_consumer_secret'   => sanitize_key(trim($p['form_consumer_secret'])),
                'setting_utilisateur_token' => sanitize_key(trim($p['form_utilisateur_token'])),
                'setting_utilisateur_secret'=> sanitize_key(trim($p['form_utilisateur_secret'])),
                'setting_clearbit_token'    => sanitize_key(trim($p['form_clearbit_token'])),
            ),
            array(
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s'
            )
        );
        return $r;
    }

    /**
     * update
     * @param $_POST $p
     */
    public function update($p)
    {
        global $wpdb;

        $r = $wpdb->update(
            $this->_table,
            // SET (valeur)
            array(
                'setting_dt_update'             => current_time('mysql'),
                'setting_consumer_token'        => sanitize_key(trim($p['form_consumer_token'])),
                'setting_consumer_secret'       => sanitize_key(trim($p['form_consumer_secret'])),
                'setting_utilisateur_token'     => sanitize_key(trim($p['form_utilisateur_token'])),
                'setting_utilisateur_secret'    => sanitize_key(trim($p['form_utilisateur_secret'])),
                'setting_clearbit_token'        => sanitize_key(trim($p['form_clearbit_token'])),

                'setting_tracking'              => $p['form_tracking'],
                'setting_recaptcha_key_status'  => $p['form_status'],
                'setting_recaptcha_key_version' => $p['form_version'],
                'setting_recaptcha_key_website' => sanitize_text_field(trim($p['form_recaptcha_key_website'])),
                'setting_recaptcha_key_secret'  => sanitize_text_field(trim($p['form_recaptcha_key_secret'])),
            ),
            // WHERE (valeur)
            array(
                'setting_id' => $p['form_id']
            ),
            // SET (type)
            array(
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',

                '%d',
                '%s',
                '%s',
                '%s',
                '%s'
            ),
            // WHERE (type)
            array(
                '%d'
            )
        );
        return $r;
    }

    /**
     * Tracking actived or desactived
     * @return bool
     */
    public function isTracking()
    {
        $m_setting = $this->getSetting(1);
        if (isset($m_setting[0]->setting_tracking) && $m_setting[0]->setting_tracking) {
            return false;
        }
        return true;
    }
}
//}
