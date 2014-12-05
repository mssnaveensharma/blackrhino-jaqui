<?php
/**
* @copyright	Copyright (C) 2008-2009 CMSJunkie. All rights reserved.
* 
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
* See the GNU General Public License for more details.
* You should have received a copy of the GNU General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

class TableUsersGroups extends JTable
{
	
	/**
	 * Constructor
	 *
	 * @param object Database connector object
	 */
	function TableUsersGroups(& $db) {
	
		parent::__construct('#__hotelreservation_groups', 'id', $db);
		
	}
	function setKey($k)
	{
		$this->_tbl_key = $k;
	}
	
	function getAllGroups(){
	
		$query = "select *
				  from #__hotelreservation_groups";
		$this->_db->setQuery( $query );
		return $this->_db->loadObjectList();
	}
}