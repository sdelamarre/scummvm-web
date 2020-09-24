<?php
namespace ScummVM\Models;

use ScummVM\Objects\Series;

/**
 * The SeriesModel is used to group games into series
 * mainly for the screenshots page
 */
class SeriesModel extends BasicModel
{
    /* Get all Platforms from YAML */
    public function getAllSeries()
    {
        $data = $this->getFromCache();
        if (is_null($data)) {
            $fname = DIR_DATA . '/series.yaml';
            $series = \yaml_parse_file($fname);
            $data = [];
            foreach ($series as $seriesItem) {
                $obj = new Series($seriesItem);
                $data[$obj->getId()] = $obj;
            }
            $this->saveToCache($data);
        }
        return $data;
    }
}