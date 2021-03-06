<?php
//
// +----------------------------------------------------------------------+
// | PHP Version 4                                                        |
// +----------------------------------------------------------------------+
// | Copyright (c) 1997-2003 The PHP Group                                |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the PHP license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available at through the world-wide-web at                           |
// | http://www.php.net/license/2_02.txt.                                 |
// | If you did not receive a copy of the PHP license and are unable to   |
// | obtain it through the world-wide-web, please send a note to          |
// | license@php.net so we can mail you a copy immediately.               |
// +----------------------------------------------------------------------+
// | Authors: KUBO Atsuhiro <kubo@isite.co.jp>                            |
// +----------------------------------------------------------------------+
//
// $Id$
//

/**
 * Display infomation mapping for DoCoMo
 *
 * @package Net_UserAgent_Mobile
 * @version $Revision$
 * @author  KUBO Atsuhiro <kubo@isite.co.jp>
 * @access  public
 * @see     Net_UserAgent_Mobile_Display()
 */
class Net_UserAgent_Mobile_DoCoMoDisplayMap
{

    /**
     * returns display infomation of the model
     *
     * @param string $model name of the model
     * @return array
     * @access public
     * @static
     */
    function get($model)
    {
        $display_map =
            &PEAR::getStaticProperty('Net_UserAgent_Mobile_DoCoMoDisplayMap',
                                     'display_map'
                                     );
        if ($display_map === null) {
            $display_map = array(
                                'N504iS' => array(
                                                  'width'  => 160,
                                                  'height' => 180,
                                                  'depth'  => 65536,
                                                  'color'  => TRUE
                                                 ),
                                'F212i' => array(
                                                 'width'  => 132,
                                                 'height' => 136,
                                                 'depth'  => 65536,
                                                 'color'  => TRUE
                                                 ),
                                'P503iS' => array(
                                                  'width'  => 120,
                                                  'height' => 130,
                                                  'depth'  => 256,
                                                  'color'  => TRUE
                                                  ),
                                'D503i' => array(
                                                 'width'  => 132,
                                                 'height' => 126,
                                                 'depth'  => 4096,
                                                 'color'  => TRUE
                                                 ),
                                'F503i' => array(
                                                 'width'  => 120,
                                                 'height' => 130,
                                                 'depth'  => 256,
                                                 'color'  => TRUE
                                                 ),
                                'P209iS' => array(
                                                  'width'  => 96,
                                                  'height' => 87,
                                                  'depth'  => 256,
                                                  'color'  => TRUE
                                                  ),
                                'N503i' => array(
                                                 'width'  => 118,
                                                 'height' => 128,
                                                 'depth'  => 4096,
                                                 'color'  => TRUE
                                                 ),
                                'P503i' => array(
                                                 'width'  => 120,
                                                 'height' => 130,
                                                 'depth'  => 256,
                                                 'color'  => TRUE
                                                 ),
                                'F502it' => array(
                                                  'width'  => 96,
                                                  'height' => 91,
                                                  'depth'  => 256,
                                                  'color'  => TRUE
                                                  ),
                                'ER209i' => array(
                                                  'width'  => 120,
                                                  'height' => 72,
                                                  'depth'  => 2,
                                                  'color'  => FALSE
                                                  ),
                                'R692i' => array(
                                                 'width'  => 96,
                                                 'height' => 98,
                                                 'depth'  => 4096,
                                                 'color'  => TRUE
                                                 ),
                                'SH251i' => array(
                                                  'width'  => 120,
                                                  'height' => 130,
                                                  'depth'  => 65536,
                                                  'color'  => TRUE
                                                  ),
                                'SO211i' => array(
                                                  'width'  => 120,
                                                  'height' => 112,
                                                  'depth'  => 4096,
                                                  'color'  => TRUE
                                                  ),
                                'SH821i' => array(
                                                  'width'  => 96,
                                                  'height' => 78,
                                                  'depth'  => 256,
                                                  'color'  => TRUE
                                                  ),
                                'SO502i' => array(
                                                  'width'  => 120,
                                                  'height' => 120,
                                                  'depth'  => 4,
                                                  'color'  => FALSE
                                                  ),
                                'N502it' => array(
                                                  'width'  => 118,
                                                  'height' => 128,
                                                  'depth ' => 256,
                                                  'color'  => TRUE
                                                  ),
                                'D504i' => array(
                                                 'width'  => 132,
                                                 'height' => 144,
                                                 'depth'  => 262144,
                                                 'color'  => TRUE
                                                 ),
                                'SO502iWM' => array(
                                                    'width'  => 120,
                                                    'height' => 113,
                                                    'depth'  => 256,
                                                    'color'  => TRUE
                                                    ),
                                'F504i' => array(
                                                 'width'  => 132,
                                                 'height' => 136,
                                                 'depth'  => 65536,
                                                 'color'  => TRUE
                                                 ),
                                'D209i' => array(
                                                 'width'  => 96,
                                                 'height' => 90,
                                                 'depth'  => 256,
                                                 'color'  => TRUE
                                                 ),
                                'F209i' => array(
                                                 'width'  => 96,
                                                 'height' => 91,
                                                 'depth'  => 256,
                                                 'color'  => TRUE
                                                 ),
                                'N504i' => array(
                                                 'width'  => 160,
                                                 'height' => 180,
                                                 'depth'  => 65536,
                                                 'color'  => TRUE
                                                 ),
                                'P504i' => array(
                                                 'width'  => 132,
                                                 'height' => 144,
                                                 'depth'  => 65536,
                                                 'color'  => TRUE
                                                 ),
                                'N209i' => array(
                                                 'width'  => 108,
                                                 'height' => 82,
                                                 'depth'  => 4,
                                                 'color'  => FALSE
                                                 ),
                                'P209i' => array(
                                                 'width'  => 96,
                                                 'height' => 87,
                                                 'depth'  => 4,
                                                 'color'  => FALSE
                                                 ),
                                'R209i' => array(
                                                 'width'  => 96,
                                                 'height' => 72,
                                                 'depth'  => 4,
                                                 'color'  => FALSE
                                                 ),
                                'F503iS' => array(
                                                  'width'  => 120,
                                                  'height' => 130,
                                                  'depth'  => 4096,
                                                  'color'  => TRUE
                                                  ),
                                'SO212i' => array(
                                                  'width'  => 120,
                                                  'height' => 112,
                                                  'depth'  => 65536,
                                                  'color'  => TRUE
                                                  ),
                                'D210i' => array(
                                                 'width'  => 96,
                                                 'height' => 91,
                                                 'depth'  => 256,
                                                 'color'  => TRUE
                                                 ),
                                'F210i' => array(
                                                 'width'  => 96,
                                                 'height' => 113,
                                                 'depth'  => 256,
                                                 'color'  => TRUE
                                                 ),
                                'N503iS' => array(
                                                  'width'  => 118,
                                                  'height' => 128,
                                                  'depth'  => 4096,
                                                  'color'  => TRUE
                                                  ),
                                'D501i' => array(
                                                 'width'  => 96,
                                                 'height' => 72,
                                                 'depth'  => 2,
                                                 'color'  => FALSE
                                                 ),
                                'SO503i' => array(
                                                  'width'  => 120,
                                                  'height' => 113,
                                                  'depth'  => 65536,
                                                  'color'  => TRUE
                                                  ),
                                'F501i' => array(
                                                 'width'  => 112,
                                                 'height' => 84,
                                                 'depth'  => 2,
                                                 'color'  => FALSE
                                                 ),
                                'P504iS' => array(
                                                  'width'  => 132,
                                                  'height' => 144,
                                                  'depth'  => 65536,
                                                  'color'  => TRUE
                                                  ),
                                'N210i' => array(
                                                 'width'  => 118,
                                                 'height' => 113,
                                                 'depth'  => 256,
                                                 'color'  => TRUE
                                                 ),
                                'P210i' => array(
                                                 'width'  => 96,
                                                 'height' => 91,
                                                 'depth'  => 256,
                                                 'color'  => TRUE
                                                 ),
                                'N501i' => array(
                                                 'width'  => 118,
                                                 'height' => 128,
                                                 'depth'  => 2,
                                                 'color'  => FALSE
                                                 ),
                                'P501i' => array(
                                                 'width'  => 96,
                                                 'height' => 120,
                                                 'depth'  => 2,
                                                 'color'  => FALSE
                                                 ),
                                'N2001' => array(
                                                 'width'  => 118,
                                                 'height' => 128,
                                                 'depth'  => 4096,
                                                 'color'  => TRUE
                                                 ),
                                'N2002' => array(
                                                 'width'  => 118,
                                                 'height' => 128,
                                                 'depth'  => 65536,
                                                 'color'  => TRUE
                                                 ),
                                'P2002' => array(
                                                 'width'  => 118,
                                                 'height' => 128,
                                                 'depth'  => 65536,
                                                 'color'  => TRUE
                                                 ),
                                'D251iS' => array(
                                                  'width'  => 132,
                                                  'height' => 144,
                                                  'depth'  => 262144,
                                                  'color'  => TRUE
                                                  ),
                                'KO209i' => array(
                                                  'width'  => 96,
                                                  'height' => 96,
                                                  'depth'  => 256,
                                                  'color'  => TRUE
                                                  ),
                                'D2101V' => array(
                                                  'width'  => 120,
                                                  'height' => 130,
                                                  'depth'  => 262144,
                                                  'color'  => TRUE
                                                  ),
                                'F671iS' => array(
                                                  'width'  => 160,
                                                  'height' => 120,
                                                  'depth'  => 65536,
                                                  'color'  => TRUE
                                                  ),
                                'D211i' => array(
                                                 'width'  => 100,
                                                 'height' => 91,
                                                 'depth'  => 4096,
                                                 'color'  => TRUE
                                                 ),
                                'F211i' => array(
                                                 'width'  => 96,
                                                 'height' => 113,
                                                 'depth'  => 4096,
                                                 'color'  => TRUE
                                                 ),
                                'P251iS' => array(
                                                  'width'  => 132,
                                                  'height' => 144,
                                                  'depth'  => 65536,
                                                  'color'  => TRUE
                                                  ),
                                'D502i' => array(
                                                 'width'  => 96,
                                                 'height' => 90,
                                                 'depth'  => 256,
                                                 'color'  => TRUE
                                                 ),
                                'SO504i' => array(
                                                  'width'  => 120,
                                                  'height' => 112,
                                                  'depth'  => 65536,
                                                  'color'  => TRUE
                                                  ),
                                'D251i' => array(
                                                 'width'  => 132,
                                                 'height' => 144,
                                                 'depth'  => 262144,
                                                 'color'  => TRUE
                                                 ),
                                'F502i' => array(
                                                 'width'  => 96,
                                                 'height' => 91,
                                                 'depth'  => 256,
                                                 'color'  => TRUE
                                                 ),
                                'F251i' => array(
                                                 'width'  => 132,
                                                 'height' => 140,
                                                 'depth'  => 65536,
                                                 'color'  => TRUE
                                                 ),
                                'P2101V' => array(
                                                  'width'  => 163,
                                                  'height' => 182,
                                                  'depth'  => 262144,
                                                  'color'  => TRUE
                                                  ),
                                'N211i' => array(
                                                 'width'  => 118,
                                                 'height' => 128,
                                                 'depth'  => 4096,
                                                 'color'  => TRUE
                                                 ),
                                'F671i' => array(
                                                 'width'  => 120,
                                                 'height' => 126,
                                                 'depth'  => 256,
                                                 'color'  => TRUE
                                                 ),
                                'P211i' => array(
                                                 'width'  => 120,
                                                 'height' => 130,
                                                 'depth'  => 65536,
                                                 'color'  => TRUE
                                                 ),
                                'F2051' => array(
                                                 'width'  => 176,
                                                 'height' => 182,
                                                 'depth'  => 65536,
                                                 'color'  => TRUE
                                                 ),
                                'N502i' => array(
                                                 'width'  => 118,
                                                 'height' => 128,
                                                 'depth'  => 4,
                                                 'color'  => FALSE
                                                 ),
                                'T2101V' => array(
                                                  'width'  => 176,
                                                  'height' => 144,
                                                  'depth'  => 262144,
                                                  'color'  => TRUE
                                                  ),
                                'N251i' => array(
                                                 'width'  => 132,
                                                 'height' => 140,
                                                 'depth'  => 65536,
                                                 'color'  => TRUE
                                                 ),
                                'R211i' => array(
                                                 'width'  => 96,
                                                 'height' => 98,
                                                 'depth'  => 4096,
                                                 'color'  => TRUE
                                                 ),
                                'SH251iS' => array(
                                                   'width'  => 176,
                                                   'height' => 187,
                                                   'depth'  => 65536,
                                                   'color'  => TRUE
                                                   ),
                                'P502i' => array(
                                                 'width'  => 96,
                                                 'height' => 117,
                                                 'depth'  => 4,
                                                 'color'  => FALSE
                                                 ),
                                'N821i' => array(
                                                 'width'  => 118,
                                                 'height' => 128,
                                                 'depth'  => 4,
                                                 'color'  => FALSE
                                                 ),
                                'P821i' => array(
                                                 'width'  => 118,
                                                 'height' => 128,
                                                 'depth'  => 4,
                                                 'color'  => FALSE
                                                 ),
                                'SH2101V' => array(
                                                   'width'  => 800,
                                                   'height' => 600,
                                                   'depth'  => 65536,
                                                   'color'  => TRUE
                                                   ),
                                'N2051' => array(
                                                 'width'  => 176,
                                                 'height' => 198,
                                                 'depth'  => 65536,
                                                 'color'  => TRUE
                                                 ),
                                'KO210i' => array(
                                                  'width'  => 96,
                                                  'height' => 96,
                                                  'depth'  => 256,
                                                  'color'  => TRUE
                                                  ),
                                'SO503iS' => array(
                                                   'width'  => 120,
                                                   'height' => 113,
                                                   'depth'  => 65536,
                                                   'color'  => TRUE
                                                   ),
                                'D503iS' => array(
                                                  'width'   => 132,
                                                  'height' => 126,
                                                  'depth'  => 4096,
                                                  'color'  => TRUE
                                                  ),
                                'R691i' => array(
                                                 'width'  => 96,
                                                 'height' => 72,
                                                 'depth'  => 4,
                                                 'color'  => FALSE
                                                 ),
                                'NM502i' => array(
                                                  'width'  => 111,
                                                  'height' => 106,
                                                  'depth'  => 2,
                                                  'color'  => FALSE
                                                  ),
                                'F504iS' => array(
                                                  'width'  => 132,
                                                  'height' => 136,
                                                  'depth'  => 65536,
                                                  'color'  => TRUE
                                                  ),
                                'SO210i' => array(
                                                  'width'  => 120,
                                                  'height' => 113,
                                                  'depth'  => 256,
                                                  'color'  => TRUE
                                                  )
                                );
        }

        return $display_map[$model];
    }
}

/*
 * Local Variables:
 * mode: php
 * coding: iso-8859-1
 * tab-width: 4
 * c-basic-offset: 4
 * c-hanging-comment-ender-p: nil
 * indent-tabs-mode: nil
 * End:
 */
?>
