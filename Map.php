<?php

namespace alevas;

use Yii;
use \yii\base\Widget;


/**
 * This is just an example.
 */
class Map extends Widget
{

	const MAP_TYPE_ROADMAP = 'ROPADMAP';
	const MAP_TYPE_HYBRID  = 'HYBRID';
	const MAP_TYPE_SATELLITE = 'SATELLITE';
	const MAP_TYPE_TERRAIN = 'TERRAIN';

	public $sensors = false;
	public $width = '620';
	public $height = '340';
	public $center = 'г.Запорожье, ул.Патреотическая д.18';
	public $roadmap = false;
	public $markers = [];
	public $zoom = 16;
	public $mapType = 'roadmap';
	public $apiKey = null;
	public $markerFitBounds = false;

	public function init()
	{
		if($this->apiKey == null){

			$this->apiKey = Yii::$app()->params['GOOGLE_API_KEY'];

		}else{

			$this->sensors = $this->sensors ? 'true' : 'false';
			parent::init();
		}

	}

    public function run()
    {
        
    	return $this->render('map');

    }
}


	
