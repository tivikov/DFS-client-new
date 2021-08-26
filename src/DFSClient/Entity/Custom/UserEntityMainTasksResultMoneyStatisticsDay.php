<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDayAppendix;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labs;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDayKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDaySerp;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDayTraffic_analytics;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDayReviews;

class UserEntityMainTasksResultMoneyStatisticsDay 
{    
    /**
    * @var null|UserEntityMainTasksResultMoneyStatisticsDayAppendix $appendix;
    */
    public $appendix = null;

    /**
    * @var null|double $total;
    */
    public $total = null;

    /**
    * @var null|integer $total_appendix;
    */
    public $total_appendix = null;

    /**
    * @var null|UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labs $dataforseo_labs;
    */
    public $dataforseo_labs = null;

    /**
    * @var null|double $total_dataforseo_labs;
    */
    public $total_dataforseo_labs = null;

    /**
    * @var null|UserEntityMainTasksResultMoneyStatisticsDayKeywords_data $keywords_data;
    */
    public $keywords_data = null;

    /**
    * @var null|integer $total_keywords_data;
    */
    public $total_keywords_data = null;

    /**
    * @var null|UserEntityMainTasksResultMoneyStatisticsDaySerp $serp;
    */
    public $serp = null;

    /**
    * @var null|integer $total_serp;
    */
    public $total_serp = null;

    /**
    * @var null|UserEntityMainTasksResultMoneyStatisticsDayTraffic_analytics $traffic_analytics;
    */
    public $traffic_analytics = null;

    /**
    * @var null|integer $total_traffic_analytics;
    */
    public $total_traffic_analytics = null;

    /**
    * @var null|string $value;
    */
    public $value = null;

    /**
    * @var null|double $total_reviews;
    */
    public $total_reviews = null;

    /**
    * @var null|UserEntityMainTasksResultMoneyStatisticsDayReviews $reviews;
    */
    public $reviews = null;
 
}