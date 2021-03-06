<?php

/**
 * This is a mock database model for the league teams.
 *
 * @author Darnell Andries
 */
class LeagueTeams extends CI_Model {
	/* These two arrays provide mock data for the list of teams*/
	var $afc_data = array(
        array('id' => 'NE', 'team' => 'New England Patriots'),
        array('id' => 'CIN', 'team' => 'Cincinnati Bengals'),
        array('id' => 'DEN', 'team' => 'Denver Broncos')
    );
	var $nfc_data = array(
        array('id' => 'GB', 'team' => 'Green Bay Packers'),
        array('id' => 'CAR', 'team' => 'Carolina Panthers'),
        array('id' => 'ARI', 'team' => 'Arizona Cardinals')
    );

	public function __construct() {
		parent::__construct();
	}

	public function all_afc() {
        return $this->afc_data;
    }

	public function all_nfc() {
        return $this->nfc_data;
    }

}
