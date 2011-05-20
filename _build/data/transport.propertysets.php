﻿<?php
/**
 * UserUrls transport property sets
 * Copyright 2011 Oleg Pryadko <oleg@websitezen.com>
 * 
 * May 2011
 *
 * UserUrls is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * UserUrls is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * UserUrls; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package userurls
 */
/**
 * Description:  Array of property set objects for UserUrls package
 * @package userurls
 * @subpackage build
 */


$propertySets = array();

$propertySets[1]= $modx->newObject('modPropertySet');
$propertySets[1]->fromArray(array(
    'id' => 1,
    'name' => 'MyPropertySet1',
    'description' => 'MyPropertySet1 for UserUrls.',
),'',true,true);
$properties = include $sources['data'].'/properties/properties.mypropertyset1.php';
$propertySets[1]->setProperties($properties);
unset($properties);


$propertySets[2]= $modx->newObject('modPropertySet');
$propertySets[2]->fromArray(array(
    'id' => 2,
    'name' => 'MyPropertySet2',
    'description' => 'MyPropertySet2 for UserUrls.',
),'',true,true);
$properties = include $sources['data'].'/properties/properties.mypropertyset2.php';
$propertySets[2]->setProperties($properties);
unset($properties);

return $propertySets;