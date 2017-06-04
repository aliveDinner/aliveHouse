CREATE TABLE `ah_building_detail` (
 `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'ID',
 `is_delete` tinyint(1) NOT NULL DEFAULT '1' COMMENT '时效;0=失效,1=有效;默认1;',
 `is_open` tinyint(1) NOT NULL DEFAULT '1' COMMENT '开盘;2=封盘,1=开盘;默认1;',
 `building_base_id` bigint(20) NOT NULL COMMENT '楼盘表ID',
 `title` varchar(255) NOT NULL COMMENT '楼盘标题',
 `total_roof` varchar(255) NOT NULL COMMENT '总栋数',
 `total_house` varchar(255) NOT NULL COMMENT '总套数',
 `description` varchar(255) NOT NULL COMMENT '详细描述',
 `url` varchar(255) NOT NULL COMMENT '封面宣传',
 `address` varchar(255) NOT NULL COMMENT '楼盘地址',
 `area_size` varchar(255) NOT NULL COMMENT '占地面积',
 `build_size` varchar(255) NOT NULL COMMENT '建筑面积',
 `volume_rate` varchar(255) NOT NULL COMMENT '容积率',
 `green_rate` varchar(255) NOT NULL COMMENT '绿化率',
 `developer` varchar(255) NOT NULL COMMENT '开发商',
 `park_space` varchar(255) NOT NULL COMMENT '停车位',
 `property` int(11) NOT NULL COMMENT '产权',
 `service_costs` int(11) NOT NULL COMMENT '物业费',
 `service_company` varchar(255) NOT NULL COMMENT '物业公司',
 `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '装修状况;1=毛胚,2=精装修,3=现房期房,4=现房;默认1;',
 `room` tinyint(2) NOT NULL DEFAULT '1' COMMENT '室',
 `hall` tinyint(2) NOT NULL DEFAULT '1' COMMENT '厅',
 `sale_license` varchar(255) NOT NULL COMMENT '预售证号',
 `average_price` datetime NOT NULL COMMENT '均价',
 `open_price` datetime NOT NULL COMMENT '开盘价',
 `opened_at` datetime NOT NULL COMMENT '开盘日期',
 `live_in_at` datetime NOT NULL COMMENT '入住时间',
 `created_at` datetime NOT NULL COMMENT '创建时间',
 `updated_at` datetime NOT NULL COMMENT '修改时间',
 PRIMARY KEY (`id`),
 KEY `building_base_id` (`building_base_id`),
 CONSTRAINT `ah_building_detail_ibfk_1` FOREIGN KEY (`building_base_id`) REFERENCES `ah_building_base` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='楼盘详情表';