<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2017                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Contribute/ContributionSoft.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:eb1e493dc7ff4da34167ad0828d61fd4)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
/**
 * CRM_Contribute_DAO_ContributionSoft constructor.
 */
class CRM_Contribute_DAO_ContributionSoft extends CRM_Core_DAO {
  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_contribution_soft';
  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var boolean
   */
  static $_log = true;
  /**
   * Soft Contribution ID
   *
   * @var int unsigned
   */
  public $id;
  /**
   * FK to contribution table.
   *
   * @var int unsigned
   */
  public $contribution_id;
  /**
   * FK to Contact ID
   *
   * @var int unsigned
   */
  public $contact_id;
  /**
   * Amount of this soft contribution.
   *
   * @var float
   */
  public $amount;
  /**
   * 3 character string, value from config setting or input via user.
   *
   * @var string
   */
  public $currency;
  /**
   * FK to civicrm_pcp.id
   *
   * @var int unsigned
   */
  public $pcp_id;
  /**
   *
   * @var boolean
   */
  public $pcp_display_in_roll;
  /**
   *
   * @var string
   */
  public $pcp_roll_nickname;
  /**
   *
   * @var string
   */
  public $pcp_personal_note;
  /**
   * Soft Credit Type ID.Implicit FK to civicrm_option_value where option_group = soft_credit_type.
   *
   * @var int unsigned
   */
  public $soft_credit_type_id;
  /**
   * Class constructor.
   */
  function __construct() {
    $this->__table = 'civicrm_contribution_soft';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'contribution_id', 'civicrm_contribution', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'contact_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'pcp_id', 'civicrm_pcp', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = array(
        'contribution_soft_id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Soft Contribution ID') ,
          'description' => 'Soft Contribution ID',
          'required' => true,
          'import' => true,
          'where' => 'civicrm_contribution_soft.id',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
          'table_name' => 'civicrm_contribution_soft',
          'entity' => 'ContributionSoft',
          'bao' => 'CRM_Contribute_BAO_ContributionSoft',
          'localizable' => 0,
        ) ,
        'contribution_id' => array(
          'name' => 'contribution_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Soft Contribution - Contribution') ,
          'description' => 'FK to contribution table.',
          'required' => true,
          'table_name' => 'civicrm_contribution_soft',
          'entity' => 'ContributionSoft',
          'bao' => 'CRM_Contribute_BAO_ContributionSoft',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contribute_DAO_Contribution',
        ) ,
        'contribution_soft_contact_id' => array(
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contact ID') ,
          'description' => 'FK to Contact ID',
          'required' => true,
          'import' => true,
          'where' => 'civicrm_contribution_soft.contact_id',
          'headerPattern' => '/contact(.?id)?/i',
          'dataPattern' => '/^\d+$/',
          'export' => true,
          'table_name' => 'civicrm_contribution_soft',
          'entity' => 'ContributionSoft',
          'bao' => 'CRM_Contribute_BAO_ContributionSoft',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'amount' => array(
          'name' => 'amount',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Soft Contribution Amount') ,
          'description' => 'Amount of this soft contribution.',
          'required' => true,
          'precision' => array(
            20,
            2
          ) ,
          'import' => true,
          'where' => 'civicrm_contribution_soft.amount',
          'headerPattern' => '/total(.?am(ou)?nt)?/i',
          'dataPattern' => '/^\d+(\.\d{2})?$/',
          'export' => true,
          'table_name' => 'civicrm_contribution_soft',
          'entity' => 'ContributionSoft',
          'bao' => 'CRM_Contribute_BAO_ContributionSoft',
          'localizable' => 0,
        ) ,
        'currency' => array(
          'name' => 'currency',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Soft Contribution Currency') ,
          'description' => '3 character string, value from config setting or input via user.',
          'maxlength' => 3,
          'size' => CRM_Utils_Type::FOUR,
          'default' => 'NULL',
          'table_name' => 'civicrm_contribution_soft',
          'entity' => 'ContributionSoft',
          'bao' => 'CRM_Contribute_BAO_ContributionSoft',
          'localizable' => 0,
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'table' => 'civicrm_currency',
            'keyColumn' => 'name',
            'labelColumn' => 'full_name',
            'nameColumn' => 'name',
          )
        ) ,
        'pcp_id' => array(
          'name' => 'pcp_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Soft Contribution PCP') ,
          'description' => 'FK to civicrm_pcp.id',
          'default' => 'NULL',
          'table_name' => 'civicrm_contribution_soft',
          'entity' => 'ContributionSoft',
          'bao' => 'CRM_Contribute_BAO_ContributionSoft',
          'localizable' => 0,
          'FKClassName' => 'CRM_PCP_DAO_PCP',
          'pseudoconstant' => array(
            'table' => 'civicrm_pcp',
            'keyColumn' => 'id',
            'labelColumn' => 'title',
          )
        ) ,
        'pcp_display_in_roll' => array(
          'name' => 'pcp_display_in_roll',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Soft Contribution Display on PCP') ,
          'table_name' => 'civicrm_contribution_soft',
          'entity' => 'ContributionSoft',
          'bao' => 'CRM_Contribute_BAO_ContributionSoft',
          'localizable' => 0,
        ) ,
        'pcp_roll_nickname' => array(
          'name' => 'pcp_roll_nickname',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Soft Contribution PCP Nickname') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'default' => 'NULL',
          'table_name' => 'civicrm_contribution_soft',
          'entity' => 'ContributionSoft',
          'bao' => 'CRM_Contribute_BAO_ContributionSoft',
          'localizable' => 0,
        ) ,
        'pcp_personal_note' => array(
          'name' => 'pcp_personal_note',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Soft Contribution PCP Note') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'default' => 'NULL',
          'table_name' => 'civicrm_contribution_soft',
          'entity' => 'ContributionSoft',
          'bao' => 'CRM_Contribute_BAO_ContributionSoft',
          'localizable' => 0,
        ) ,
        'soft_credit_type_id' => array(
          'name' => 'soft_credit_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Soft Credit Type') ,
          'description' => 'Soft Credit Type ID.Implicit FK to civicrm_option_value where option_group = soft_credit_type.',
          'default' => 'NULL',
          'table_name' => 'civicrm_contribution_soft',
          'entity' => 'ContributionSoft',
          'bao' => 'CRM_Contribute_BAO_ContributionSoft',
          'localizable' => 0,
          'pseudoconstant' => array(
            'optionGroupName' => 'soft_credit_type',
            'optionEditPath' => 'civicrm/admin/options/soft_credit_type',
          )
        ) ,
      );
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }
  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName() {
    return self::$_tableName;
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog() {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'contribution_soft', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'contribution_soft', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of indices
   */
  public static function indices($localize = TRUE) {
    $indices = array(
      'index_id' => array(
        'name' => 'index_id',
        'field' => array(
          0 => 'pcp_id',
        ) ,
        'localizable' => false,
        'sig' => 'civicrm_contribution_soft::0::pcp_id',
      ) ,
    );
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }
}